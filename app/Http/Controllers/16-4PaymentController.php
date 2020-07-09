<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use PayPal\Api\Amount;
use PayPal\Api\Item;
use PayPal\Api\WebProfile;
use PayPal\Api\ItemList;
use PayPal\Api\InputFields;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;
use URL;
use Illuminate\Http\Request as RequestVar;
use Request;
use Auth;
use Config;
use App\Order;
use Str;
use App\Payment as modelpayment;
class PaymentController extends Controller
{
    public function __construct()
    {
        # Main configuration in constructor
        $paypalConfig = config('paypal');

        $this->apiContext = new ApiContext(new OAuthTokenCredential(
                $paypalConfig['client_id'],
                $paypalConfig['secret'])
        );

        $this->apiContext->setConfig($paypalConfig['settings']);
    }
	public function payWithpaypal(RequestVar $request)
    {
        

    	
    	$order = new Order();
        
        $order->unique_key = Str::random(12);
        $order->address = $request->address;
        $order->user_email = $request->email;
        $order->user_name = $request->username;
        $order->product_price =$request->price;
        $order->product_name =$request->product_name;

        $order->save();
        # We initialize the payer object and set the payment method to PayPal
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        
        # We need to update the order if the payment is complete, so we save it to the session
       Session::put('orderId', $order->getKey());
       Session::put('orderkey', $order->unique_key);
       Session::put('email',$order->user_email);
        Session::put('productname',$order->product_name);
        # We get all the items from the cart and parse the array into the Item object
        $items = [];

        
            $items[] = (new Item())
                ->setName($request->productname)
                ->setCurrency('USD')
                ->setQuantity(1)
                ->setPrice((int)$request->price);
        

        # We create a new item list and assign the items to it
        $itemList = new ItemList();
        $itemList->setItems($items);

        # Disable all irrelevant PayPal aspects in payment
        $inputFields = new InputFields();
        $inputFields->setAllowNote(true)
            ->setNoShipping(1)
            ->setAddressOverride(0);

        $webProfile = new WebProfile();
        $webProfile->setName(uniqid())
            ->setInputFields($inputFields)
            ->setTemporary(true);

        $createProfile = $webProfile->create($this->apiContext);

        # We get the total price of the cart
        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal((int)$request->price);

        $transaction = new Transaction();
        $transaction->setAmount($amount);
        $transaction->setItemList($itemList)
            ->setDescription('Your transaction description');

        $redirectURLs = new RedirectUrls();
        $redirectURLs->setReturnUrl(URL::to('status'))
            ->setCancelUrl(URL::to('status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirectURLs)
            ->setTransactions(array($transaction));

        $payment->setExperienceProfileId($createProfile->getId());

        $payment->create($this->apiContext);

        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirectURL = $link->getHref();
                break;
            }
        }

        # We store the payment ID into the session
        Session::put('paypalPaymentId', $payment->getId());

        if (isset($redirectURL)) {
            return Redirect::away($redirectURL);
        }

        Session::put('error', 'There was a problem processing your payment. Please contact support.');

        return Redirect::to('veggieplan');
    }

    public function getPaymentStatus()
    {
        $paymentId = Session::get('paypalPaymentId');

         $orderId = Session::get('orderId');

        # We now erase the payment ID from the session to avoid fraud
      

        # If the payer ID or token isn't set, there was a corrupt response and instantly abort
        if (empty(Request::get('PayerID')) || empty(Request::get('token'))) {
            Session()->put('error', 'There was a problem processing your payment. Please contact support.');
            return Redirect::to('categories');
        }

        $payment = Payment::get($paymentId, $this->apiContext);
        $execution = new PaymentExecution();
        $execution->setPayerId(Request::get('PayerID'));

        $result = $payment->execute($execution, $this->apiContext);

        // # Payment is processing but may still fail due e.g to insufficient funds
         $order = Order::find($orderId);
         $order->status = 'processing';

        if ($result->getState() == 'approved') {
        	    	
	        
	        $order=Order::all();
	 		$useremail = Session::get('email');
	 		$productname  = Session::get('productname');
                $orderItem = new modelpayment();
                $orderItem->order_id=$orderId;
                $orderItem->product_name=$productname;
                
                $orderItem->product_price= $result->transactions[0]->getAmount()->getTotal();
                $orderItem->subtotal=$result->transactions[0]->getAmount()->getTotal();
                 $orderItem->user_email = $useremail;
                 $orderItem->payment_id = $paymentId;
                $orderItem->save();
               
			Session::forget('paypalPaymentId');
            Session::forget('email');
           	Session::forget('productname');
           
            

            return Redirect::to('contact')->with('success','Your payment was successful.A Download Link Has Been Sent To Your Email. Thank you.');
        }

        Session::put('error', 'There was a problem processing your payment. Please contact support.');

        return Redirect::to('/');
    }
}
