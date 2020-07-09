@extends('admin.layout.default')

@section('content')



	<section class="wrapper">
    <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-image"></i> Testimonials</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
              <li><i class="fa fa-table"></i> Testimonials</li>
              
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

               Training Plans
               <a href="{{route('testimonial.create')}}" class="btn btn-primary pull-right">Create Carousel</a>
              </header>



              <table  id="example">

                <thead>

                    <th><i class="fa fa-circle" style="margin-right: 5px"></i>ID</th>
                    
                    <th><i class="fa fa-image"></i> Customer Name</th>
                    <th><i class="fa fa-image"></i> Thumbnail</th>
                    <th><i class="fa fa-image"></i> Video</th>
                    <th><i class="icon_cogs"></i> Action</th>

                </thead>
                <tbody>

                  
                  @foreach($gettestimonials as $testimonial)
                  <tr>
                    <td>{{$testimonial->id}}</td>
                    <td>{{$testimonial->customer_name}}</td>
                    <td><img src="{{URL::to('storage/app/uploads/files')}}/{{$testimonial->thumbnail}}" style="height: 100px;width: 100px;"></td>
                    <td><video style="height: 100px;width: 100px;"><source src="{{URL::to('storage/app/uploads/files')}}/{{$testimonial-> testimonial_video}}" type="video/mp4" />
                      </video></td>
                    <td><div class="btn-group">
                      <a class="btn btn-primary" href="{{route('testimonial.edit',$testimonial->id)}}"><i class="icon_plus_alt2" style="margin-right: 5px;"></i>Edit</a>
                      <a class="btn btn-danger" href="{{route('testimonial.delete',$testimonial->id)}}"><i class="icon_close_alt2" style="margin-right: 5px;"></i>Delete</a>

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