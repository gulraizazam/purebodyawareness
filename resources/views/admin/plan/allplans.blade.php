@extends('admin.layout.default')

@section('content')



	<section class="wrapper">
		<div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> All Plans</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
              <li><i class="fa fa-table"></i><a href="{{url('allplans')}}">Plans</a></li>
             
            </ol>
          </div>
        </div>
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

                All Plans
                <a href="{{route('plan.create')}}" class="btn btn-primary pull-right">Create Plan</a>
              </header>


              <table class="table table-striped table-advance table-hover" id="example">


                <thead>

                  
                    <th><i class="fa fa-circle" style="margin-right: 5px"></i>ID</th>
                    <th><i class="fa fa-square"></i> Plan Name</th>

                    <th><i class="fa fa-money" style="margin-right: 5px"></i>Price</th>

                    <th><i class="fa fa-certificate" ></i>Installments</th>

                    <th><i class="fa fa-money" style="margin-right: 5px"></i> Installment Amount</th>

                    <th><i class="fa fa-camera-retro" style="margin-right: 5px"></i>Image</th>
                     
                    <th><i class="icon_cogs"></i> Action</th>

                  </thead>
                  <tbody>

                  @foreach($allplans as $plan)

                  <tr>
                    <td>{{$plan->id}}</td>
                    <td>{{$plan->name}}</td>

                    <td>&#163; {{$plan->price}}</td>

                    <td>{{$plan->installments ? $plan->installments : 'N/A'}}</td>
                    @if($plan->installment_amount)
                    <td> &#163; {{$plan->installment_amount }}</td>
                    @else
                    <td>N/A</td>
                    @endif

                    
                    <td><img src="{{URL::to('/storage/app/uploads/files')}}/{{$plan->file}}" style="height: 100px;width: 100px"></td>
                    

                    <td>

                      <div class="btn-group">

                        <a class="btn btn-primary" href="{{route('plan.edit',$plan->id)}}"><i class="icon_plus_alt2" style="margin-right: 5px;"></i>Edit</a>

                        

                        <a class="btn btn-danger" href="{{route('plan.delete',$plan->id)}}"><i class="icon_close_alt2" style="margin-right: 5px;"></i>Delete</a>

                      </div>

                    </td>

                  </tr>

                  @endforeach

              

                </tbody>

              </table>

            </section>

          </div>

        </div>

    </section>

@stop
@section('scripts')
  <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>
@stop