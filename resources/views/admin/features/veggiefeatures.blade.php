@extends('admin.layout.default')

@section('content')
    <section class="wrapper">
       <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Create Feature</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
              <li><i class="icon_document_alt"></i><a href="{{url('feature')}}">Features</a></li>
              
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Create Features
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="{{route('feature.store',$getFeature[0]->id)}}" enctype="multipart/form-data">
                    @csrf
                     <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Section Heading <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="sectionheading" type="text" placeholder="Section Heading"  value="{{$getFeature[0]->section_title}}"/>
                        
                      </div>
                    </div>
                    <h3 class="text-center">First Feature</h3>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Feature Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="firstfeatuename" type="text" placeholder="Feaure Name"  value="{{$getFeature[0]->first_feature_name}}"/>
                        
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Feature Image <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " type="file" name="file1"   />
                        @if($getFeature[0]->  first_feature_image)
                        <img src="{{URL::to('storage/app/uploads/files')}}/{{$getFeature[0]->  first_feature_image}}" style="height: 100px;width: 100px;margin-top: 7px;">
                        @endif
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Feature Description</label>
                      <div class="col-lg-10">
                        <textarea name="firstfeaturedescription" class="form-control">{{$getFeature[0]->first_feature_detail}}</textarea>
                      </div>
                    </div>
                    <h3 class="text-center">Second Feature</h3>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Feature Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="secondfeatuename" type="text" placeholder="Feaure Name" value="{{$getFeature[0]->second_feature_name}}"/>
                        
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Feature Image <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control "  type="file" name="file2"   />
                        @if($getFeature[0]->  second_feature_image)
                       <img src="{{URL::to('storage/app/uploads/files')}}/{{$getFeature[0]->  second_feature_image}}" style="height: 100px;width: 100px;margin-top: 7px;">
                       @endif
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Feature Description</label>
                      <div class="col-lg-10">
                        <textarea name="secondfeaturedescription" class="form-control">{{$getFeature[0]->second_feature_detail}}</textarea>
                      </div>
                    </div>
                      <input type="hidden" name="pagename" value="veggieplan">
                     <h3 class="text-center">Third Feature</h3>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Feature Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="thirdfeatuename" type="text" placeholder="Feaure Name" value="{{$getFeature[0]->third_feature_name}}"/>
                        
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Feature Image <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="price" type="file" name="file3"   />
                        @if($getFeature[0]->  third_feature_image)
                       <img src="{{URL::to('storage/app/uploads/files')}}/{{$getFeature[0]->  third_feature_image}}" style="height: 100px;width: 100px;margin-top: 7px;">
                       @endif
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Feature Description</label>
                      <div class="col-lg-10">
                        <textarea name="thirdfeaturedescription" class="form-control">{{$getFeature[0]->third_feature_detail}}</textarea>
                      </div>
                    </div>
                    <h3 class="text-center">Fourth Feature</h3>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Feature Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="fourthfeatuename" type="text" placeholder="Feaure Name" value="{{$getFeature[0]->fourth_feature_name}}"/>
                        
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Feature Image <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="price" type="file" name="file4"   />
                        
                        @if($getFeature[0]->  fourth_feature_image)
                        <img src="{{URL::to('storage/app/uploads/files')}}/{{$getFeature[0]->  fourth_feature_image}}" style="height: 100px;width: 100px;margin-top: 7px;">
                        @endif
                       
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Feature Description</label>
                      <div class="col-lg-10">
                        <textarea name="fourthfeaturedescription" class="form-control">{{$getFeature[0]->fourth_feature_detail}}</textarea>
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
<script type="text/javascript">
  function ShowInstallment()
  {
    if ($('#installments').is(":checked"))
    {
      $('.InstalAmount').css("display","block");
    }else{
      $('.InstalAmount').css("display","none");
    }
    
  }
</script>
@stop
