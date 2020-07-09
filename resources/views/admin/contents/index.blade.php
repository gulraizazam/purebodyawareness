@extends('admin.layout.default')

@section('content')



	<section class="wrapper">
    <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-image"></i> Training Plans</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
              <li><i class="fa fa-table"></i> Training Plans</li>
              
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
               <a href="{{route('content.create')}}" class="btn btn-primary pull-right">Create Content</a>
              </header>



              <table  id="example">

                <thead>

                    <th><i class="fa fa-circle" style="margin-right: 5px"></i>ID</th>
                    <th><i class="fa fa-square"></i> Page Title</th>
                    <th><i class="fa fa-certificate" style="margin-right: 5px"></i> Content Heading</th>
                    <th><i class="fa fa-pencil-square-o" style="margin-right: 5px"></i>Button Text</th>
                    <th><i class="fa fa-image" style="margin-right: 5px"></i>First Image</th>
                    <th><i class="fa fa-pencil-square-o"></i> First Description</th>
                    <th><i class="fa fa-image" style="margin-right: 5px"></i>Second Image</th>
                    <th><i class="fa fa-pencil-square-o"></i> Second Description</th>
                    <th><i class="fa fa-image" style="margin-right: 5px"></i>Third Image</th>
                    <th><i class="fa fa-pencil-square-o"></i> Third Description</th>
                    <th><i class="icon_cogs"></i> Action</th>

                </thead>
                <tbody>

                  
                  @foreach($getContent as $content)
                  <tr>
                    <td>{{$content->id}}</td>
                    <td>{{$content->page_title}}</td>
                    <td>{{$content->page_heading}}</td>
                    <td>{{$content->button_text}}</td>
                    <td><img src="{{URL::to('storage/app/uploads/files')}}/{{$content->image1}}" style="height: 100px;width: 100px;"></td>
                    @if($content->description1)
                    <td>{!! $content->description1 !!}</td>
                    @else
                    <td>NULL</td>
                    @endif
                    @if($content->image2)
                    <td><img src="{{URL::to('storage/app/uploads/files')}}/{{$content->image2}}" style="height: 100px;width: 100px;"></td>
                    @else
                    <td>NULL</td>
                    @endif
                    @if($content->description2)
                    <td>{!! $content->description2 !!}</td>
                    @else
                    <td>NULL</td>
                    @endif
                    @if($content->image3)
                    <td><img src="{{URL::to('storage/app/uploads/files')}}/{{$content->image3}}" style="height: 100px;width: 100px;"></td>
                    @else
                    <td>NULL</td>
                    @endif
                    @if($content->description3)
                    <td>{!! $content->description3 !!}</td>
                    @else
                    <td>NULL</td>
                    @endif
                   
                    
                    <td><div class="btn-group">
                      <a class="btn btn-primary" href="{{route('content.edit',$content->id)}}"><i class="icon_plus_alt2" style="margin-right: 5px;"></i>Edit</a>
                      <a class="btn btn-danger" href="{{route('content.delete',$content->id)}}"><i class="icon_close_alt2" style="margin-right: 5px;"></i>Delete</a>

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