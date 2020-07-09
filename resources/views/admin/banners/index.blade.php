@extends('admin.layout.default')

@section('content')



	<section class="wrapper">
    <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-image"></i> All Banners</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
              <li><i class="fa fa-table"></i>All Banners</li>
              
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

               All Graduates
               <a href="{{route('banner.create')}}" class="btn btn-primary pull-right">Create Banner</a>
              </header>



              <table  id="example">

                <thead>

                    <th><i class="fa fa-circle" style="margin-right: 5px"></i>ID</th>
                    <th><i class="fa fa-square"></i> Page Title</th>
                    <th><i class="fa fa-certificate" style="margin-right: 5px"></i> Page Heading</th>
                    <th><i class="fa fa-pencil-square-o"></i> Page Description</th>
                    <th><i class="fa fa-pencil-square-o" style="margin-right: 5px"></i>Button Text</th>
                    <th><i class="fa fa-image" style="margin-right: 5px"></i>Image</th>
                    <th><i class="icon_cogs"></i> Action</th>

                </thead>
                <tbody>

                  
                  @foreach($banners as $banner)
                  <tr>
                    <td>{{$banner->id}}</td>
                    <td>{{$banner->page_name}}</td>
                    <td>{{$banner->page_heading}}</td>
                    <td>{!! $banner->page_description !!}</td>
                    <td>{{$banner->button_text}}</td>
                    <td><img src="{{URL::to('storage/app/uploads/files')}}/{{$banner->page_image}}" style="height: 150px;width: 150px;"></td>
                    <td><div class="btn-group">
                      <a class="btn btn-primary" href="{{route('banner.edit',$banner->id)}}"><i class="icon_plus_alt2" style="margin-right: 5px;"></i>Edit</a>
                      <a class="btn btn-danger" href="{{route('banner.delete',$banner->id)}}"><i class="icon_close_alt2" style="margin-right: 5px;"></i>Delete</a>

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