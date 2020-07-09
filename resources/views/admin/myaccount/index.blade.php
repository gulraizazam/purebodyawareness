@extends('admin.layout.default')

@section('content')
		<section class="wrapper">
			 <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-cogs"></i>My Account</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
             
              
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            @if(session()->has('success'))
                  <div class="alert alert-success">
                      {{ session()->get('success') }}
                  </div>
              @endif
              @if(session()->has('error'))
                  <div class="alert alert-danger">
                      {{ session()->get('error') }}
                  </div>
              @endif
            <section class="panel">
              <header class="panel-heading">
                My Account
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="{{route('admin.update',$user->id)}}" enctype="multipart/form-data">
                  	@csrf
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Username <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="username" type="text" placeholder="User Name" value="{{$user->name}}" />
                        
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Email <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="price" type="email" name="email"  placeholder="Email" value="{{$user->email}}"/>
                        
                      </div>
                    </div>
                  
                   
                     
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">New Password</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="price" type="password" name="password"  placeholder="New Password" />
                         
                      </div>
                    </div>
                     <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">Confirm Password</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="price" type="password" name="confirmpassword"  placeholder="Confirm Password" />
                         
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
