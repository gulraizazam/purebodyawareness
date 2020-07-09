@extends('admin.layout.default')

@section('content')
    <section class="wrapper">
       <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-camera-retro"></i> Create Testimonial</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
              <li><i class="icon_document_alt"></i><a href="{{url('carousel')}}">Testimonials</a></li>
              
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Create Testimonial
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="{{route('testimonial.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Customer Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="file" type="text" name="customer_name" placeholder="Customer Name"   />
                     
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Thumbnail <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="file" type="file" name="thumbnail"   />
                         
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Testimonial Video<span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="file" type="file" name="video"   />
                         
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
  CKEDITOR.replace( 'detail2' );
  CKEDITOR.replace( 'detail3' );
</script>
@stop
