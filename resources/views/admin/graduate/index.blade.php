@extends('admin.layout.default')

@section('content')



	<section class="wrapper">
    <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-graduation-cap"></i> All Graduates</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
              <li><i class="fa fa-table"></i>All Graduates</li>
              
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
               <a href="{{route('graduate.create')}}" class="btn btn-primary pull-right">Create Graduate</a>
              </header>



              <table  id="example">

                <thead>

                    <th><i class="fa fa-circle" style="margin-right: 5px"></i>ID</th>
                    <th><i class="fa fa-square"></i> Name</th>
                    <th><i class="fa fa-money" style="margin-right: 5px"></i> Image</th>
                    <th><i class="icon_calendar"></i> Date Of Graduate</th>
                    <th><i class="fa fa-pencil-square-o" style="margin-right: 5px"></i>Description</th>
                    <th><i class="icon_cogs"></i> Action</th>

                </thead>
                <tbody>

                  
                  @foreach($allgraduates as $graduate)
                  <tr>
                    <td>{{$graduate->id}}</td>
                    <td>{{$graduate->name}}</td>
                    <td><img src="{{URL::to('storage/app/uploads/files')}}/{{$graduate->file}}" style="height: 150px;width: 150px;"></td>

                    <td>{{$graduate->date_of_graduate}}</td>

                   

                    <td>{{$graduate->description}}</td>

                    <td><div class="btn-group">

                        <a class="btn btn-primary" href="{{route('graduate.edit',$graduate->id)}}"><i class="icon_plus_alt2" style="margin-right: 5px;"></i>Edit</a>

                        

                        <a class="btn btn-danger" href="{{route('graduate.delete',$graduate->id)}}"><i class="icon_close_alt2" style="margin-right: 5px;"></i>Delete</a>

                      </div></td>
                    
                    

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