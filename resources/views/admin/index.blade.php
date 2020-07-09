@extends('admin.layout.default')

@section('content')

	<section class="wrapper">

        <!--overview start-->
        <?php
        $allplans = count(\App\Plan::all());
        $allpayments = count(\App\Payment::all());
        $allearning = \App\Payment::sum('subtotal');

        ?>
        <div class="row">

          <div class="col-lg-12">

            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>

            <ol class="breadcrumb">

              <li><i class="fa fa-home"></i><a href="#">Home</a></li>

              <li><i class="fa fa-laptop"></i>Dashboard</li>

            </ol>

          </div>

        </div>



        <div class="row">

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

            <div class="info-box blue-bg">

              <i class="fa fa-pencil-square-o"></i>

              <div class="count">{{$allplans}}</div>

              <div class="title">Plans</div>

            </div>

            <!--/.info-box-->

          </div>

          <!--/.col-->



          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

            <div class="info-box brown-bg">

              <i class="fa fa-shopping-cart"></i>

              <div class="count">{{$allpayments}}</div>

              <div class="title">Orders</div>

            </div>

            <!--/.info-box-->

          </div>

          <!--/.col-->



          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

            <div class="info-box dark-bg">

              <i class="fa fa-usd"></i>

              <div class="count">&#163; {{$allearning}}</div>

              <div class="title">Total Earning</div>

            </div>

            <!--/.info-box-->

          </div>

          <!--/.col-->



          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

            <div class="info-box green-bg">

              <i class="fa fa-graduation-cap"></i>

              <div class="count">{{$allpayments}}</div>

              <div class="title">Graduates</div>

            </div>

            <!--/.info-box-->

          </div>

          <!--/.col-->



        </div>

        <!--/.row-->





      



      </section>

@stop