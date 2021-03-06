@extends('admin.layout.default')

@section('content')
		<section class="wrapper">
			 <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Create Plan</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="#">Home</a></li>
              <li><i class="icon_document_alt"></i>Plans</li>
              <li><i class="fa fa-files-o"></i> Create Plan</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Create Plan
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="{{route('plan.store')}}">
                  	@csrf
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Plan Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="planname" type="text" placeholder="Plan Name" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Price <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="price" type="text" name="Price"  placeholder="Price" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Installments</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="installments" type="text" name="installments" placeholder="Installments" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Installment Amount <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="instlamount" name="installmentamount" type="text"  placeholder="Installment Amount" />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Plan Image <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="file" name="file" type="file"   />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">Detail</label>
                      <div class="col-lg-10">
                        <textarea class="form-control " id="ccomment" name="detail" ></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Save</button>
                        
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
