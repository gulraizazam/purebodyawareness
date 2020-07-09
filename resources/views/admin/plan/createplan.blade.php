@extends('admin.layout.default')

@section('content')
		<section class="wrapper">
			 <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Create Plan</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
              <li><i class="icon_document_alt"></i><a href="{{url('allplans')}}">Plans</a></li>
              
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
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="{{route('plan.store')}}" enctype="multipart/form-data">
                  	@csrf
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Plan Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="planname" type="text" placeholder="Plan Name" />
                        @if ($errors->has('planname'))
                          <p class=" text-danger" >{{ $errors->first('planname') }}</p>
                       @endif
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Price <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="price" type="number" name="Price"  placeholder="Price" />
                         @if ($errors->has('Price'))
                          <p class=" text-danger" >{{ $errors->first('Price') }}</p>
                       @endif
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Installments</label>
                      <div class="col-lg-10">
                        <input id="installments" type="checkbox" name="installments" onclick="ShowInstallment()" />
                      </div>
                    </div>
                    <div class="form-group InstalAmount"  style="display: none">
                      <label for="cname" class="control-label col-lg-2">Total Installments <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="instlamount" name="installmentamount" type="number"  placeholder="Installments " />
                      </div>
                    </div>
                   
                     <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Plan Image <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="file" name="file" type="file"   />
                         @if ($errors->has('file'))
                          <p class=" text-danger" >{{ $errors->first('file') }}</p>
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
