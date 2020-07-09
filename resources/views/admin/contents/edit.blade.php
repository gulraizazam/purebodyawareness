@extends('admin.layout.default')

@section('content')
    <section class="wrapper">
       <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-pencil-square-o"></i> Edit Content</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
              <li><i class="icon_document_alt"></i><a href="{{url('content')}}">Training Plans</a></li>
              
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
               Edit Content
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="{{route('content.update',$editcontent->id)}}" enctype="multipart/form-data">
                    @csrf
                     <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Page Title</label>
                      <div class="col-lg-10">
                        <select name="pagetitle" class="form-control">
                          <option>Select</option>
                          <option value="index" {{$editcontent->page_title == "index" ? 'selected' : ''}}>Index</option>
                          <option value="veggieplan" {{$editcontent->page_title == "veggieplan" ? 'selected' : ''}}>Veggie Plan</option>
                          <option value="graduateplan" {{$editcontent->page_title == "graduateplan" ? 'selected' : ''}}>Graduate Plan</option>
                        </select>
                         @if ($errors->has('pagetitle'))
                          <p class=" text-danger" >{{ $errors->first('pagetitle') }}</p>
                       @endif
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Page Heading <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="pageheading" type="text" placeholder=" Page Heading" value="{{$editcontent->page_heading}}"/>
                        @if ($errors->has('pageheading'))
                          <p class=" text-danger" >{{ $errors->first('pageheading') }}</p>
                       @endif
                      </div>
                    </div>
                     <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Button Text</label>
                      <div class="col-lg-10">
                        <input id="date" type="text" name="buttontext" placeholder="Button Text" class="form-control" value="{{$editcontent->button_text}}"/>
                         @if ($errors->has('buttontext'))
                          <p class=" text-danger" >{{ $errors->first('buttontext') }}</p>
                       @endif
                      </div>
                    </div>
                    <hr>
                    <h3 class="text-center">Section 1</h3>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Content Image <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="file" type="file" name="file1"   />
                         @if($editcontent->image1)
                          <img src="{{URL::to('storage/app/uploads/files')}}/{{$editcontent->image1}}" style="height: 100px;width: 100px">
                         @endif
                      </div>
                    </div>
                   <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">Detail</label>
                      <div class="col-lg-10">
                        <textarea class="form-control " id="ccomment" name="detail" >{{$editcontent->description1}}</textarea>
                         
                      </div>
                    </div>
                    <hr>
                    <h3 class="text-center">Section 2 </h3>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Content Image <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="file" type="file" name="file2"   />
                         @if($editcontent->image2)
                          <img src="{{URL::to('storage/app/uploads/files')}}/{{$editcontent->image2}}" style="height: 100px;width: 100px">
                         @endif
                      </div>
                    </div>
                   <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">Detail</label>
                      <div class="col-lg-10">
                        <textarea class="form-control " id="ccomment" name="detail2" >{{$editcontent->description2}}</textarea>
                         
                      </div>
                    </div>
                    <h3 class="text-center">Section 3 </h3>
                     <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Content Image <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="file" type="file" name="file3"   />
                        @if($editcontent->image3)
                          <img src="{{URL::to('storage/app/uploads/files')}}/{{$editcontent->image3}}" style="height: 100px;width: 100px">
                         @endif
                      </div>
                    </div>
                   <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">Detail</label>
                      <div class="col-lg-10">
                        <textarea class="form-control " id="ccomment" name="detail3" >{{$editcontent->description3}}</textarea>
                         
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
