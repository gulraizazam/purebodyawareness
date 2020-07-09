@extends('admin.layout.default')

@section('content')



	<section class="wrapper">
    <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-clock-o"></i> Transactions History</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="{{url('dashboard')}}">Home</a></li>
              <li><i class="fa fa-table"></i>Transactions</li>
              
            </ol>
          </div>
        </div>
		<div class="row">

          <div class="col-lg-12">

            <section class="panel">

              <header class="panel-heading">

               Transactions History

              </header>



              <table  id="example">

                <thead>

                   <th><i class="fa fa-circle" style="margin-right: 5px"></i>ID</th>
                     <th><i class="fa fa-square"></i> Order ID</th>
                    <th><i class="icon_profile"></i> User Email</th>

                    <th><i class="fa fa-pencil-square-o" style="margin-right: 5px"></i>Plan</th>

                   

                    <th><i class="fa fa-money" style="margin-right: 5px"></i> Price</th>

                    <th><i class="icon_mobile"></i> Transaction ID</th>
                    <th><i class="icon_calendar"></i> Transaction Date</th>

                   <!--  <th><i class="icon_cogs"></i> Action</th> -->

                  </thead>
                  <tbody>

                  @foreach($allpayments as $payment)

                  <tr>
                    <td>{{$payment->id}}</td>
                    <td>{{$payment->order_id}}</td>
                    <td>{{$payment->user_email}}</td>

                    <td>{{$payment->product_name}}</td>

                   

                    <td>&#163; {{$payment->product_price}}</td>

                    <td>{{$payment->payment_id}}</td>
                    <td>{{$payment->created_at}}</td>
                    

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