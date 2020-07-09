<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Graduate;
use App\Plan;
use App\Banner;
use App\Content;
use App\Feature;
use App\Testimonial;
use Illuminate\Support\Facades\Validator;
class FrontendController extends Controller
{
	public function index()
	{	
		$gettestimonial = Testimonial::all();
		$getFeature = Feature::where('page_name','index')->get();
		$getbanner = Banner::where('page_name','index')->latest()->get();
		$getcontent = Content::where('page_title','index')->latest()->get();
		 $getgraduates = Graduate::take(3)->latest()->get();
        return view('index',compact('getgraduates','getbanner','getcontent','gettestimonial','getFeature'));
	}
	public function Contact()
	{
		return view('frontend.contact');
	}
	public function StoreContact(Request $request){
		Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required',
        'message' => 'required',
        'mobile' => 'required',
        'gender' => 'required',
        'location' => 'required',
        'g-recaptcha-response'=>'required',

        ])->validate();
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
		$getFeature = Feature::where('page_name','veggieplan')->get();
		 $getgraduates = Graduate::take(3)->latest()->get();
		$getbanner = Banner::where('page_name','veggieplan')->latest()->get();
		$getcontent = Content::where('page_title','veggieplan')->latest()->get();
		$getplan = DB::table('plans')->get();
		return view('frontend.veggieplan',compact('getplan','getbanner','getcontent','getgraduates','getFeature'));
	}
	public function About()
	{
		return view('frontend.about');
	}
	public function Transformations()
	{
		$getgraduates = Graduate::take(10)->latest()->get();
		return view('frontend.transformations',compact('getgraduates'));
	}
	public function Graduate()
	{
		$getbanner = Banner::where('page_name','graduateplan')->latest()->get();
		$getcontent = Content::where('page_title','graduateplan')->latest()->get();
		return view('frontend.graduate',compact('getbanner','getcontent'));
	}
	public function Checkout($id)
	{
		$getplan = Plan::find($id);
		return view('frontend.checkout',compact('getplan'));
	}
	public function Logout()
	{
		Auth::logout();
		return redirect('/');
	}
	public function ThankYou()
	{
		return view('frontend.thankyou');
	}
	public function FilterGraduate(Request $request)
	{
		$sex = $request->sex;
		if($sex){
			$getgraduates = Graduate::where('gender',$sex)->get();
		}elseif($request->age !='40+' && $sex){
			$getagelimit = explode('-',$request->age);
			$min_age = $getagelimit[0];
			$max_age = $getagelimit[1];
			$getgraduates = Graduate::where('gender',$sex)->whereBetween('age',[$min_age,$max_age])->get();
		}elseif ($request->age ='40+' && $sex) {
			$getgraduates = Graduate::where('gender',$sex)->whereRaw('age > 40')->get();
		
		}else{ 
			$getgraduates = Graduate::all();
		}
			
		return view('frontend.transformations',compact('getgraduates'));
		
		
	}

}