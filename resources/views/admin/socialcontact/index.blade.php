@extends('admin.layout.default')

@section('content')
    <section class="wrapper">
       <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Create Social Conatct</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
              <li><i class="icon_document_alt"></i><a href="{{url('socialcontacts')}}">Features</a></li>
              
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Create Social Conatct
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="{{route('social.store',$getContent[0]->id)}}" enctype="multipart/form-data">
                    @csrf
                    
                    <h3 class="text-center">Youtube</h3>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Youtube Url <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="youtubeurl" type="text" placeholder="Youtube URL"  value="{{$getContent[0]->youtube_url}}" />
                        
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Youtube Icon <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " type="file" name="file1"   />
                       
                        <img src="{{URL::to('storage/app/uploads/files')}}/{{$getContent[0]->   youtube_icon}}" style="height: 100px;width: 100px;margin-top: 7px;">
                       
                      </div>
                    </div>
                    
                    <h3 class="text-center">Instagram</h3>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Instagram Url <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="instaurl" type="text" placeholder="Instagram Url" value="{{$getContent[0]->instagram_url}}"/>
                        
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Instagram Icon <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control "  type="file" name="file2"   />
                       
                       <img src="{{URL::to('storage/app/uploads/files')}}/{{$getContent[0]->    instagram_icon}}" style="height: 100px;width: 100px;margin-top: 7px;">
                     
                      </div>
                    </div>
                    
                     
                     <h3 class="text-center">Facebook</h3>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Facebook Url<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="Facebookurl" type="text" placeholder="Facebook Url" value="{{$getContent[0]->facebook_url}}"/>
                        
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Facebook Icon<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="price" type="file" name="file3"   />
                       
                       <img src="{{URL::to('storage/app/uploads/files')}}/{{$getContent[0]->    facebook_icon}}" style="height: 100px;width: 100px;margin-top: 7px;">
                      
                      </div>
                    </div>
                   
                    <h3 class="text-center">Twitter</h3>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Twitter Url <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="Twitterurl" type="text" placeholder="Twitter Url" value="{{$getContent[0]->twitter_url}}"/>
                        
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Twitter Icon <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="price" type="file" name="file4"   />
                        
                        
                        <img src="{{URL::to('storage/app/uploads/files')}}/{{$getContent[0]->    twitter_icon}}" style="height: 100px;width: 100px;margin-top: 7px;">
                        
                       
                      </div>
                    </div>
                   
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary btn-lg" type="submit">Add</button>
                        
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>
    </section>
@stop
@section('scripts')

@stop
