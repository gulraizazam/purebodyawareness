<?php

namespace App\Http\Controllers;
use App\Payment;
use Illuminate\Http\Request;
use App\Plan;
use Carbon\Carbon;
use App\Graduate;
use App\Pages;
use App\Menu;
use App\User;
use Illuminate\Support\Facades\Validator;
class AdminController extends Controller
{
    public function index()
    {

    	return view('admin.index');
    }
    public function GetPayments()
    {
    	$allpayments = Payment::all();
    	return view('admin.allpayments',compact('allpayments'));
    }
    public function CreatePlan()
    {
    	return view('admin.plan.createplan');
    }
    public function StorePlan(Request $request)
    {
    	Validator::make($request->all(), [
        'planname' => 'required',
        'Price' => 'required',
        'detail' => 'required',
        'type' => 'required',
        'file' => 'required',
        
        ])->validate();

        $getprice = $request->Price;

        $getinstall = $request->installmentamount;

        if(is_numeric($getprice) && is_numeric($getinstall) && $getinstall != 0){
        	$calculateamount = $getprice/$getinstall;
        }else{
        	$calculateamount = 0;
        }

       
       
    	$storeplan = new Plan();
        $storeplan->type = $request->type;
    	$storeplan->name = $request->planname;
    	$storeplan->price = $request->Price;
    	$storeplan->installments = $request->installmentamount;
    	$storeplan->installment_amount = $calculateamount;
    	$storeplan->description = $request->detail;
    	if($request->file('file'))
        {
        	$uniqueid=uniqid();
	        $original_name=$request->file('file')->getClientOriginalName();
			$size=$request->file('file')->getSize();
			$extension=$request->file('file')->getClientOriginalExtension();
			$filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
	        $imagepath=url('/storage/app/uploads/files/'.$filename);
	        $path=$request->file('file')->storeAs('/uploads/files',$filename);
	        $storeplan->file =  $filename;
   		}
    	$storeplan->save();
    	return redirect('allplans')->with('success','Plan Created Successfully.!');
    }
    public function getPlan()
    {
    	$allplans = Plan::all();
    	return view('admin.plan.allplans',compact('allplans'));
    }
    public function DeletePlan($id)
    {
    	$deleteplan = Plan::find($id);
    	$deleteplan->delete();
    	return redirect('allplans')->with('error','Plan Has Been Deleted Successfully!');
    }
    public function EditPlan($id){
    	$editplan = Plan::find($id);
    	
    return view('admin.plan.edit',compact('editplan'));
    }
    public function UpdatePlan(Request $request,$id)
    {
    	$getprice = $request->Price;

        $getinstall = $request->installmentamount;
        if(is_numeric($getprice) && is_numeric($getinstall) && $getinstall != 0){
        	$calculateamount = $getprice/$getinstall;
        }else{
        	$calculateamount = 0;
        }
        
    	$updateplan = Plan::find($id);
        $updateplan->type = $request->type;
    	$updateplan->name = $request->planname;
    	$updateplan->price = $request->Price;
    	$updateplan->installments =$request->installmentamount;
    	$updateplan->installment_amount = $calculateamount;
    	$updateplan->description = $request->detail;
    	if($request->file('file'))
        {
        	$uniqueid=uniqid();
	        $original_name=$request->file('file')->getClientOriginalName();
			$size=$request->file('file')->getSize();
			$extension=$request->file('file')->getClientOriginalExtension();
			$filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
	        $imagepath=url('/storage/app/uploads/files/'.$filename);
	        $path=$request->file('file')->storeAs('/uploads/files',$filename);
	        $updateplan->file =  $filename;
   		}
    	$updateplan->update();
    	return redirect('allplans')->with('success','Plan Updated Successfully.!');
    }

    public function AllGraduates()
    {
        $allgraduates = Graduate::all();
        return view('admin.graduate.index',compact('allgraduates'));
    }
    public function CreateGraduate()
    {
        return view('admin.graduate.create');
    }
    public function StoreGraduate(Request $request)
    {
        Validator::make($request->all(), [
        'name' => 'required',
        'detail' => 'required',
        'date_of_graduate' => 'required',
        'gender' => 'required',
        'age'  => 'required',
        'file' => 'required',
        

        ])->validate();
        $storegraduate = new Graduate();
        $storegraduate->name = $request->name;
        $storegraduate->description  =$request->detail;
        $storegraduate->gender  =$request->gender;
        $storegraduate->age  =$request->age;
        $storegraduate->date_of_graduate = $request->date_of_graduate;
        if($request->file('file'))
        {
            $uniqueid=uniqid();
            $original_name=$request->file('file')->getClientOriginalName();
            $size=$request->file('file')->getSize();
            $extension=$request->file('file')->getClientOriginalExtension();
            $filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
            $imagepath=url('/storage/app/uploads/files/'.$filename);
            $path=$request->file('file')->storeAs('/uploads/files',$filename);
             $storegraduate->file =  $filename;
        }
         $storegraduate->save();
         return redirect('allgraduates')->with('success','Graduate Created Successfully.');
    }
    public function EditGraduate($id)
    {
        $editgraduate = Graduate::find($id);
        return view('admin.graduate.edit',compact('editgraduate'));
    }
    public function UpdateGraduate(Request $request,$id)
    {
        Validator::make($request->all(), [
        'name' => 'required',
        'detail' => 'required',
        'gender' => 'required',
        'age'  => 'required',
        'date_of_graduate' => 'required',
        'file' => 'required',
        ])->validate();
        $updategraduate = Graduate::find($id);
        $updategraduate->name = $request->name;
        $updategraduate->description  =$request->detail;
        $updategraduate->gender  =$request->gender;
        $updategraduate->age  =$request->age;
        $updategraduate->date_of_graduate = $request->date_of_graduate;
        if($request->file('file'))
        {
            $uniqueid=uniqid();
            $original_name=$request->file('file')->getClientOriginalName();
            $size=$request->file('file')->getSize();
            $extension=$request->file('file')->getClientOriginalExtension();
            $filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
            $imagepath=url('/storage/app/uploads/files/'.$filename);
            $path=$request->file('file')->storeAs('/uploads/files',$filename);
            $updategraduate->file =  $filename;
        }
        $updategraduate->update();
        return redirect('allgraduates')->with('success','Graduate Updated Successfully.');
    }
    public function DeleteGraduate($id)
    {
        $deleteGraduate = Graduate::find($id);
        $deleteGraduate->delete();
        return redirect('allgraduates')->with('error','Graduate Deleted Successfully.');
    }
    public function aboutpage (){
        $editcontent = Pages::where('title','about')->get()->first();
            return view('admin.staticpage.aboutedit',compact('editcontent'));
    }
    public function contactpage (){
        $editcontent = Pages::where('title','contact')->get()->first();
        return view('admin.staticpage.contactedit',compact('editcontent'));
    }
    public function editquotation (){
        $editcontent = Pages::where('title','quotation')->get()->first();
        return view('admin.staticpage.editquote',compact('editcontent'));
    }
    public function UpdateStaticPage(Request $req){
        Validator::make($req->all(), [
        'banner_heading' => 'required',
        'banner_image' => 'mimes:jpeg,png',
        ])->validate();
        $updatecontent= Pages::find($req->id);
        $updatecontent->title = $updatecontent->title;
        $updatecontent->banner_heading = $req->banner_heading;
        
        
        if($req->file('banner_image'))
        {
            $uniqueid=uniqid();
            $original_name=$req->file('banner_image')->getClientOriginalName();
            $size=$req->file('banner_image')->getSize();
            $extension=$req->file('banner_image')->getClientOriginalExtension();
            $filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
            $imagepath=url('/storage/app/uploads/files/'.$filename);
            $path=$req->file('banner_image')->storeAs('/uploads/files',$filename);
            $updatecontent->banner_image =  $filename;
        }
        if($updatecontent->title == 'loginPage'){
            if($req->file('page_content'))
            {
                $uniqueid=uniqid();
                $original_name=$req->file('page_content')->getClientOriginalName();
                $size=$req->file('page_content')->getSize();
                $extension=$req->file('page_content')->getClientOriginalExtension();
                $filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
                $imagepath=url('/storage/app/uploads/files/'.$filename);
                $path=$req->file('page_content')->storeAs('/uploads/files',$filename);
                $updatecontent->page_content =  $filename;
            }

        }
        else{
            $updatecontent->page_content    = $req->page_content;
        }
        
        $updatecontent->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $updatecontent->update();
        return redirect('admin/'.$updatecontent->title)->with('success','About Page Content Updated Successfully');

    }
    public function getmenus(){
        $menus = Menu::first();
        return view('admin.menus',compact('menus'));
    }
    public function updatemenus(Request $request){
        Validator::make($request->all(), [
        'menu1' => 'required',
        'menu2' => 'required',
        'menu3' => 'required',
        'menu4' => 'required',
        'menu5' => 'required',
        'menu6' => 'required',

        ])->validate();

        $menus = Menu::find(1);
        $menus->menu1 = $request->menu1;
        $menus->menu2 = $request->menu2;
        $menus->menu3 = $request->menu3;
        $menus->menu4 = $request->menu4;
        $menus->menu5 = $request->menu5;
        $menus->menu6 = $request->menu6;


        $menus->update();

        return redirect()->back()->with(['success'=>'sucessfully save the changes.']);
    }



    public function transformationsPage(){
        $editcontent = Pages::where('title','transformation')->get()->first();
        return view('admin.staticpage.transformation',compact('editcontent'));
    }
    public function loginPage(){
        $editcontent = Pages::where('title','loginPage')->get()->first();
        return view('admin.staticpage.loginPage',compact('editcontent'));
    }
    //My Account
    public function MyAccount($id)
    {
        $user = User::find($id);

        return view('admin.myaccount.index',compact('user'));
    }
    public function UpdatePassword(Request $request,$id)
    {
        $updatepasswords = User::find($id);
        $updatepasswords->name = $request->username;
        $updatepasswords->email  = $request->email;
        if($request->password){
            if($request->password == $request->confirmpassword){
             $updatepasswords->password = $request->password;
            }else{
                return redirect()->back()->with('error','Password Does Not Match!');
            }
        }
       
        $updatepasswords->update();
        return redirect()->back()->with('success','Account Updated Successfully!');

    }
}
