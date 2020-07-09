@extends('admin.layout.default')

@section('content')
		<section class="wrapper">
			 <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-graduation-cap"></i> Create Banner</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
              <li><i class="icon_document_alt"></i><a href="{{url('banners')}}">Banners</a></li>
              
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Create Banner
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="{{route('banner.store')}}" enctype="multipart/form-data">
                  	@csrf
                     <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Page Title</label>
                      <div class="col-lg-10">
                        <select name="pagetitle" class="form-control">
                          <option>Select</option>
                          <option value="index">Index</option>
                          <option value="veggieplan">Veggie Plan</option>
                          <option value="graduateplan">Graduate Plan</option>
                        </select>
                         @if ($errors->has('pagetitle'))
                          <p class=" text-danger" >{{ $errors->first('pagetitle') }}</p>
                       @endif
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Page Heading <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="pageheading" type="text" placeholder=" Page Heading" />
                        @if ($errors->has('pageheading'))
                          <p class=" text-danger" >{{ $errors->first('pageheading') }}</p>
                       @endif
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Page Image <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="file" type="file" name="file"   />
                         @if ($errors->has('file'))
                          <p class=" text-danger" >{{ $errors->first('file') }}</p>
                       @endif
                      </div>
                    </div>
                   
                    
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Button Text</label>
                      <div class="col-lg-10">
                        <input id="date" type="text" name="buttontext" placeholder="Button Text" class="form-control" />
                         @if ($errors->has('buttontext'))
                          <p class=" text-danger" >{{ $errors->first('buttontext') }}</p>
                       @endif
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">Detail</label>
                      <div class="col-lg-10">
                        <textarea class="form-control " id="ccomment" name="detail" ></textarea>
                         @if ($errors->has('detail'))
                          <p class=" text-danger" >{{ $errors->first('detail') }}</p>
                       @endif
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary btn-lg" type="submit">Create</button>
                        
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
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
 
  CKEDITOR.replace( 'detail' );
</script>
@stop
