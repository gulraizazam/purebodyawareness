<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Content;
use App\Testimonial;
use App\Feature;
use App\Social;
class BannersController extends Controller
{
    public function Banners()
    {
    	$banners = Banner::all();
    	return view('admin.banners.index',compact('banners'));
    }
    public function CreateBannens()
    {
    	return view('admin.banners.create');
    }
    public function StoreBanner(Request $request)
    {
    	Validator::make($request->all(), [
        'pagetitle' => 'required',
        'pageheading' => 'required',
        'detail' => 'required',
        'file' => 'required',
        'buttontext'=>'required',

        ])->validate();
    	$Storebanner = new Banner();
    	$Storebanner->page_name = $request->pagetitle;
    	$Storebanner->page_heading = $request->pageheading;
    	$Storebanner->page_description	= $request->detail;
    	$Storebanner->button_text= $request->buttontext;
    	if($request->file('file'))
        {
        	$uniqueid=uniqid();
	        $original_name=$request->file('file')->getClientOriginalName();
			$size=$request->file('file')->getSize();
			$extension=$request->file('file')->getClientOriginalExtension();
			$filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
	        $imagepath=url('/storage/app/uploads/files/'.$filename);
	        $path=$request->file('file')->storeAs('/uploads/files',$filename);
	        $Storebanner->page_image =  $filename;
   		}
   		$Storebanner->save();
   		return redirect('banners')->with('success','Banner Created Successfully');
    }
    public function EditBanner($id)
    {
    	$editbanner = Banner::find($id);
    	return view('admin.banners.edit',compact('editbanner'));
    }
    public function UpdateBanner(Request $request,$id)
    {
    	Validator::make($request->all(), [
        'pagetitle' => 'required',
        'pageheading' => 'required',
        'detail' => 'required',
        'file' => 'required',
        'buttontext'=>'required',

        ])->validate();
    	$updatebanner =  Banner::find($id);
    	$updatebanner->page_name = $request->pagetitle;
    	$updatebanner->page_heading = $request->pageheading;
    	$updatebanner->page_description	= $request->detail;
    	$updatebanner->button_text= $request->buttontext;
    	if($request->file('file'))
        {
        	$uniqueid=uniqid();
	        $original_name=$request->file('file')->getClientOriginalName();
			$size=$request->file('file')->getSize();
			$extension=$request->file('file')->getClientOriginalExtension();
			$filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
	        $imagepath=url('/storage/app/uploads/files/'.$filename);
	        $path=$request->file('file')->storeAs('/uploads/files',$filename);
	        $updatebanner->page_image =  $filename;
   		}
   		$updatebanner->update();
   		return redirect('banners')->with('success','Banner Updated Successfully');
    }
    public function DeleteBanner($id)
    {
    	$deletebanner = Banner::find($id);
    	$deletebanner->delete();
    	return redirect('banners')->with('error','Banner Deleted Successfully');
    }
    public function Content()
    {
    	$getContent = Content::all();
    	return view('admin.contents.index',compact('getContent'));
    }
    public function CreateContent()
    {
    	return view('admin.contents.create');
    }
     public function StoreContent(Request $request)
    {
    	Validator::make($request->all(), [
        'pagetitle' => 'required',
        'pageheading' => 'required',
        'buttontext'=>'required',

        ])->validate();
    	$Storecontent = new Content();
    	$Storecontent->page_title = $request->pagetitle;
    	$Storecontent->page_heading = $request->pageheading;
    	
    	$Storecontent->button_text= $request->buttontext;
    	if($request->file('file1'))
        {
        	$uniqueid=uniqid();
	        $original_name=$request->file('file1')->getClientOriginalName();
			$size=$request->file('file1')->getSize();
			$extension=$request->file('file1')->getClientOriginalExtension();
			$filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
	        $imagepath=url('/storage/app/uploads/files/'.$filename);
	        $path=$request->file('file1')->storeAs('/uploads/files',$filename);
	        $Storecontent->image1 =  $filename;
   		}
   		$Storecontent->description1	= $request->detail;
   		if($request->file('file2'))
        {
        	$uniqueid=uniqid();
	        $original_name=$request->file('file2')->getClientOriginalName();
			$size=$request->file('file2')->getSize();
			$extension=$request->file('file2')->getClientOriginalExtension();
			$filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
	        $imagepath=url('/storage/app/uploads/files/'.$filename);
	        $path=$request->file('file2')->storeAs('/uploads/files',$filename);
	        $Storecontent->image2 =  $filename;
   		}
   		$Storecontent->description2	= $request->detail2;
   		if($request->file('file3'))
        {
        	$uniqueid=uniqid();
	        $original_name=$request->file('file3')->getClientOriginalName();
			$size=$request->file('file3')->getSize();
			$extension=$request->file('file3')->getClientOriginalExtension();
			$filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
	        $imagepath=url('/storage/app/uploads/files/'.$filename);
	        $path=$request->file('file3')->storeAs('/uploads/files',$filename);
	        $Storecontent->image3 =  $filename;
   		}
   		$Storecontent->description3	= $request->detail3;
   		$Storecontent->save();
   		return redirect('content')->with('success','Training Plan Created Successfully');
    }
    public function EditContent($id)
    {
    	$editcontent = Content::find($id);
    	return view('admin.contents.edit',compact('editcontent'));
    }
    public function UpdateContent(Request $request,$id)
    {
    	
    	Validator::make($request->all(), [
        'pagetitle' => 'required',
        'pageheading' => 'required',
        'buttontext'=>'required',

        ])->validate();
    	$updatecontent= Content::find($id);
    	$updatecontent->page_title = $request->pagetitle;
    	$updatecontent->page_heading = $request->pageheading;
    	
    	$updatecontent->button_text= $request->buttontext;
    	if($request->file('file1'))
        {
        	$uniqueid=uniqid();
	        $original_name=$request->file('file1')->getClientOriginalName();
			$size=$request->file('file1')->getSize();
			$extension=$request->file('file1')->getClientOriginalExtension();
			$filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
	        $imagepath=url('/storage/app/uploads/files/'.$filename);
	        $path=$request->file('file1')->storeAs('/uploads/files',$filename);
	        $updatecontent->image1 =  $filename;
   		}
   		$updatecontent->description1	= $request->detail;
   		if($request->file('file2'))
        {
        	$uniqueid=uniqid();
	        $original_name=$request->file('file2')->getClientOriginalName();
			$size=$request->file('file2')->getSize();
			$extension=$request->file('file2')->getClientOriginalExtension();
			$filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
	        $imagepath=url('/storage/app/uploads/files/'.$filename);
	        $path=$request->file('file2')->storeAs('/uploads/files',$filename);
	        $updatecontent->image2 =  $filename;
   		}
   		$updatecontent->description2	= $request->detail2;
   		if($request->file('file3'))
        {
        	$uniqueid=uniqid();
	        $original_name=$request->file('file3')->getClientOriginalName();
			$size=$request->file('file3')->getSize();
			$extension=$request->file('file3')->getClientOriginalExtension();
			$filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
	        $imagepath=url('/storage/app/uploads/files/'.$filename);
	        $path=$request->file('file3')->storeAs('/uploads/files',$filename);
	        $updatecontent->image3 =  $filename;
   		}
   		$updatecontent->description3	= $request->detail3;
   		$updatecontent->update();
   		return redirect('content')->with('success','Training Plan Updated Successfully');

    }
    public function DeleteContent($id)
    {
    	$deleteContent  = Content::find($id);
    	$deleteContent->delete();
    	return redirect('content')->with('error','Training Plan Deleted Successfully');
    }

    public function Testimonial()
    {
    	$gettestimonials = Testimonial::all();
    	return view('admin.testimonials.index',compact('gettestimonials'));
    }

    public function CreateTestimonial()
    {
    	return view('admin.testimonials.create');
    }
    public function StoreTestimonial(Request $request)
    {
    	$storecarousel = new Testimonial();
    	$storecarousel->customer_name = $request->customer_name;
    	if($request->file('thumbnail'))
        {
        	$uniqueid=uniqid();
	        $original_name=$request->file('thumbnail')->getClientOriginalName();
			$size=$request->file('thumbnail')->getSize();
			$extension=$request->file('thumbnail')->getClientOriginalExtension();
			$filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
	        $imagepath=url('/storage/app/uploads/files/'.$filename);
	        $path=$request->file('thumbnail')->storeAs('/uploads/files',$filename);
	        $storecarousel->thumbnail =  $filename;
   		}
   		if($request->file('video'))
        {
        	$uniqueid=uniqid();
	        $original_name=$request->file('video')->getClientOriginalName();
			$size=$request->file('video')->getSize();
			$extension=$request->file('video')->getClientOriginalExtension();
			$filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
	        $imagepath=url('/storage/app/uploads/files/'.$filename);
	        $path=$request->file('video')->storeAs('/uploads/files',$filename);
	        $storecarousel->testimonial_video =  $filename;
   		}
   		
   		$storecarousel->save();
   		return redirect('testimonial')->with('success','Testimonial Created Successfully');
    } 
    public function EditTestimonial($id)
    {
    	$edittestimonial = Testimonial::find($id);
    	return view('admin.testimonials.edit',compact('edittestimonial'));
    }
    public function UpdateTestimonial(Request $request,$id)
    {
    	$updatetestimonial = Testimonial::find($id);
    	$updatetestimonial->customer_name = $request->customer_name;
    	if($request->file('thumbnail'))
        {
        	$uniqueid=uniqid();
	        $original_name=$request->file('thumbnail')->getClientOriginalName();
			$size=$request->file('thumbnail')->getSize();
			$extension=$request->file('thumbnail')->getClientOriginalExtension();
			$filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
	        $imagepath=url('/storage/app/uploads/files/'.$filename);
	        $path=$request->file('thumbnail')->storeAs('/uploads/files',$filename);
	        $updatetestimonial->thumbnail =  $filename;
   		}
   		if($request->file('video'))
        {
        	$uniqueid=uniqid();
	        $original_name=$request->file('video')->getClientOriginalName();
			$size=$request->file('video')->getSize();
			$extension=$request->file('video')->getClientOriginalExtension();
			$filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
	        $imagepath=url('/storage/app/uploads/files/'.$filename);
	        $path=$request->file('video')->storeAs('/uploads/files',$filename);
	        $updatetestimonial->testimonial_video =  $filename;
   		}
   		 $updatetestimonial->update();
   		return redirect('testimonial')->with('success','Testimonial Updated Successfully');
    } 

    public function DeleteTestimonial($id)
    {
    	$deletetestimonial = Testimonial::find($id);
    	$deletetestimonial->delete();
    	return redirect('testimonial')->with('error','Testimonial Deleted Successfully');
    }  

    public function Feature()
    {
    	$getFeature = Feature::where('page_name','index')->get();
    	return view('admin.features.index',compact('getFeature'));
    }
    public function VeggieFeatures()
    {
    	$getFeature = Feature::where('page_name','veggieplan')->get();
    	return view('admin.features.veggiefeatures',compact('getFeature'));
    }
    public function StoreFeature(Request $request,$id)
    {

    	$storefeature = Feature::find($id);
    	$storefeature->section_title = $request->sectionheading;
    	$storefeature->page_name = $request->pagename;
    	$storefeature->first_feature_name = $request->firstfeatuename;
    	if($request->file('file1'))
        {
        	$uniqueid=uniqid();
	        $original_name=$request->file('file1')->getClientOriginalName();
			$size=$request->file('file1')->getSize();
			$extension=$request->file('file1')->getClientOriginalExtension();
			$filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
	        $imagepath=url('/storage/app/uploads/files/'.$filename);
	        $path=$request->file('file1')->storeAs('/uploads/files',$filename);
	        $storefeature->first_feature_image =  $filename;
   		}
    	$storefeature->first_feature_detail = $request->firstfeaturedescription;
    	$storefeature->second_feature_name = $request->secondfeatuename;
    	if($request->file('file2'))
        {
        	$uniqueid=uniqid();
	        $original_name=$request->file('file2')->getClientOriginalName();
			$size=$request->file('file2')->getSize();
			$extension=$request->file('file2')->getClientOriginalExtension();
			$filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
	        $imagepath=url('/storage/app/uploads/files/'.$filename);
	        $path=$request->file('file2')->storeAs('/uploads/files',$filename);
	        $storefeature->second_feature_image =  $filename;
   		}
    	$storefeature->second_feature_detail = $request->secondfeaturedescription;
    	$storefeature->third_feature_name = $request->thirdfeatuename;
    	if($request->file('file3'))
        {
        	$uniqueid=uniqid();
	        $original_name=$request->file('file3')->getClientOriginalName();
			$size=$request->file('file3')->getSize();
			$extension=$request->file('file3')->getClientOriginalExtension();
			$filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
	        $imagepath=url('/storage/app/uploads/files/'.$filename);
	        $path=$request->file('file3')->storeAs('/uploads/files',$filename);
	        $storefeature->third_feature_image =  $filename;
   		}
    	$storefeature->third_feature_detail = $request->thirdfeaturedescription;
    	$storefeature->fourth_feature_name = $request->fourthfeatuename;
    	if($request->file('file4'))
        {
        	$uniqueid=uniqid();
	        $original_name=$request->file('file4')->getClientOriginalName();
			$size=$request->file('file4')->getSize();
			$extension=$request->file('file4')->getClientOriginalExtension();
			$filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
	        $imagepath=url('/storage/app/uploads/files/'.$filename);
	        $path=$request->file('file4')->storeAs('/uploads/files',$filename);
	        $storefeature->fourth_feature_image =  $filename;
   		}
    	$storefeature->fourth_feature_detail = $request->fourthfeaturedescription;
    	$storefeature->update();
    	return redirect()->back()->with('success','Feature Added Successfully');

    }

    public function SocialContacts()
    {
    	$getContent = Social::all();
    	return view('admin.socialcontact.index',compact('getContent'));
    }
    public function StoreSocial(Request $request,$id)
    {
    	$storesocial = Social::find($id);
    	$storesocial->youtube_url = $request->youtubeurl;

    	if($request->file('file1'))
        {
        	$uniqueid=uniqid();
	        $original_name=$request->file('file1')->getClientOriginalName();
			$size=$request->file('file1')->getSize();
			$extension=$request->file('file1')->getClientOriginalExtension();
			$filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
	        $imagepath=url('/storage/app/uploads/files/'.$filename);
	        $path=$request->file('file1')->storeAs('/uploads/files',$filename);
	        $storesocial->youtube_icon =  $filename;
   		}
    	$storesocial->instagram_url= $request->instaurl;
    	if($request->file('file2'))
        {
        	$uniqueid=uniqid();
	        $original_name=$request->file('file2')->getClientOriginalName();
			$size=$request->file('file2')->getSize();
			$extension=$request->file('file2')->getClientOriginalExtension();
			$filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
	        $imagepath=url('/storage/app/uploads/files/'.$filename);
	        $path=$request->file('file2')->storeAs('/uploads/files',$filename);
	       $storesocial->instagram_icon =  $filename;
   		}
    	$storesocial->facebook_url= $request->Facebookurl;
    	if($request->file('file3'))
        {
        	$uniqueid=uniqid();
	        $original_name=$request->file('file3')->getClientOriginalName();
			$size=$request->file('file3')->getSize();
			$extension=$request->file('file3')->getClientOriginalExtension();
			$filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
	        $imagepath=url('/storage/app/uploads/files/'.$filename);
	        $path=$request->file('file3')->storeAs('/uploads/files',$filename);
	        $storesocial->facebook_icon =  $filename;
   		}
    	
    	$storesocial->twitter_url= $request->Twitterurl;
    	if($request->file('file4'))
        {
        	$uniqueid=uniqid();
	        $original_name=$request->file('file4')->getClientOriginalName();
			$size=$request->file('file4')->getSize();
			$extension=$request->file('file4')->getClientOriginalExtension();
			$filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
	        $imagepath=url('/storage/app/uploads/files/'.$filename);
	        $path=$request->file('file4')->storeAs('/uploads/files',$filename);
	        $storesocial->twitter_icon =  $filename;
   		}
    	$storesocial->update();
    	return redirect()->back()->with('success','Social Contact Added Successfully');

    }
}
