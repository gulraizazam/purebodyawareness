<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class FrontendController extends Controller
{

	public function Contact()
	{
		return view('frontend.contact');
	}
	public function StoreContact(Request $request){
		
		$storecontact = new Contact();
		$storecontact->name = $request->name;
		$storecontact->email = $request->email;
		$storecontact->subject = $request->subject;
		$storecontact->message = $request->message;
		$storecontact->mobile = $request->mobile;
		$storecontact->gender = $request->gender;
		$storecontact->location = $request->location;
		$storecontact->save();
		return redirect()->back()->with('success','Form Submitted Successfully!');
	}
	public function VegiePlan()
	{
		return view('frontend.veggieplan');
	}
	public function About()
	{
		return view('frontend.about');
	}
	public function Transformations()
	{
		return view('frontend.transformations');
	}
	public function Graduate()
	{
		return view('frontend.graduate');
	}
	public function Checkout()
	{
		return view('frontend.checkout');
	}
	public function Logout()
	{
		Auth::logout();
		return redirect('/');
	}

}