@extends('admin.layout.default')

@section('content')
		<section class="wrapper">
			 <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-graduation-cap"></i> Edit Graduate</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
              <li><i class="icon_document_alt"></i><a href="{{url('allgraduates')}}">Graduates</a></li>
              
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                 Edit Graduate
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="{{route('graduate.update',$editgraduate->id)}}" enctype="multipart/form-data">
                  	@csrf
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="name" type="text" placeholder=" Name" value="{{$editgraduate->name}}" />
                        @if ($errors->has('name'))
                          <p class=" text-danger" >{{ $errors->first('name') }}</p>
                       @endif
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Image <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="file" type="file" name="file"   />
                        <img src="{{URL::to('storage/app/uploads/files')}}/{{$editgraduate->file}}" style="height: 150px;width: 150px;margin-top: 5px;">
                         @if ($errors->has('file'))
                          <p class=" text-danger" >{{ $errors->first('file') }}</p>
                       @endif
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Date Of Graduate</label>
                      <div class="col-lg-10">
                        <input id="date" type="date" name="date_of_graduate" placeholder="Date Of Graduate" class="form-control"  value="{{$editgraduate->date_of_graduate}}"/>
                        @if ($errors->has('date_of_graduate'))
                          <p class=" text-danger" >{{ $errors->first('date_of_graduate') }}</p>
                       @endif
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Gender</label>
                      <div class="col-lg-10">
                        <select name="gender" class="form-control">
                          <option value="male" {{$editgraduate->gender == "male" ? 'selected' : ''}}>Male</option>
                          <option value="female" {{$editgraduate->gender == "female" ? 'selected' : ''}}>Female</option>
                         
                        </select>
                         @if ($errors->has('gender'))
                          <p class=" text-danger" >{{ $errors->first('gender') }}</p>
                       @endif
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">Age</label>
                      <div class="col-lg-10">
                        <input id="date" type="number" name="age" placeholder="Age" class="form-control" value="{{$editgraduate->age}}" />
                         @if ($errors->has('age'))
                          <p class=" text-danger" >{{ $errors->first('age') }}</p>
                       @endif
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">Detail</label>
                      <div class="col-lg-10">
                        <textarea class="form-control " id="ccomment" name="detail" >{{$editgraduate->description}}</textarea>
                         @if ($errors->has('detail'))
                          <p class=" text-danger" >{{ $errors->first('detail') }}</p>
                        @endif
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary btn-lg" type="submit">Update</button>
                        
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
