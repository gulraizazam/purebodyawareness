<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">

  <meta name="author" content="GeeksLabs">

  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">

  <link rel="shortcut icon" href="img/favicon.png">



  <title>Dashboard</title>



  <!-- Bootstrap CSS -->

  <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- bootstrap theme -->

  <link href="{{asset('admin/css/bootstrap-theme.css')}}" rel="stylesheet">

  <!--external css-->

  <!-- font icon -->

  <link href="{{asset('admin/css/elegant-icons-style.css')}}" rel="stylesheet" />

  <link href="{{asset('admin/css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- full calendar css-->

  <link href="{{asset('admin/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />

  <link href="{{asset('admin/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />

  <!-- easy pie chart-->

  <link href="{{asset('admin/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen" />

  <!-- owl carousel -->

  <link rel="stylesheet" href="{{asset('admin/css/owl.carousel.css')}}" type="text/css">

  <link href="{{asset('admin/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <!-- Custom styles -->

  <link rel="stylesheet" href="{{asset('admin/css/fullcalendar.css')}}">

  <link href="{{asset('admin/css/widgets.css')}}" rel="stylesheet">

  <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">

  <link href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet" />

  <link href="{{asset('admin/css/xcharts.min.css')}}" rel=" stylesheet">

  <link href="{{asset('admin/css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">

  <!-- =======================================================

    Theme Name: NiceAdmin

    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/

    Author: BootstrapMade

    Author URL: https://bootstrapmade.com

  ======================================================= -->

</head>



<body>

  <!-- container section start -->

  <section id="container" class="">

      <header class="header dark-bg">

      <div class="toggle-nav">

        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>

      </div>



      <!--logo start-->

      <a href="{{url('/')}}" class="logo">Pure Body <span class="lite">Awareness</span></a>

      <!--logo end-->



      



      <div class="top-nav notification-row">

        <!-- notificatoin dropdown start-->

        <ul class="nav pull-right top-menu">



          <!-- task notificatoin start -->

          

          <!-- task notificatoin end -->

          <!-- inbox notificatoin start-->

       

          <!-- alert notification end-->

          <!-- user login dropdown start-->

          <li class="dropdown">

            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <span class="profile-ava">

                                <img alt="" src="img/avatar1_small.jpg">

                            </span>

                            <span class="username">Admin</span>

                            <b class="caret"></b>

                        </a>

            <ul class="dropdown-menu extended logout">

              <div class="log-arrow-up"></div>
              <?php
                $user = Auth::user()->id;
              ?>
             
              <li>

                <a href="{{url('myaccount',$user)}}" style="background-color: #688a7e !important;color: white"><i class="fa fa-cogs"></i>MY ACCOUNT</a>

              </li>
              <li>

                <a href="{{url('getlogout')}}"><i class="icon_key_alt"></i> Log Out</a>

              </li>
              

             

            </ul>

          </li>

          <!-- user login dropdown end -->

        </ul>

        <!-- notificatoin dropdown end-->

      </div>

    </header>

    <!--header end-->

    @include('admin.layout.includes.sidebar')

    <section id="main-content">

      @yield('content')

     

      </section>

    <!--main content end-->

  </section>

  <!-- container section start -->



  <!-- javascripts -->




      <!-- javascripts -->
  <script src="{{asset('admin/js/jquery.js')}}"></script>
  <script src="{{asset('admin/js/jquery-ui-1.10.4.min.js')}}"></script>
  <script src="{{asset('admin/js/jquery-1.8.3.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('admin/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <!-- bootstrap -->
  <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
  <!-- nice scroll -->
  <script src="{{asset('admin/js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!-- charts scripts -->
  
  <script src="{{asset('admin/js/jquery.sparkline.js')}}" type="text/javascript"></script>
 
  <script src="{{asset('admin/js/owl.carousel.js')}}"></script>
  <!-- jQuery full calendar -->
  
    <!-- Full Google Calendar - Calendar -->
   
    <script src="{{asset('admin/js/jquery.rateit.min.js')}}"></script>
    <!-- custom select -->
    <script src="{{asset('admin/js/jquery.customSelect.min.js')}}"></script>
    

    <!--custome script for all page-->
    <script src="{{asset('admin/js/scripts.js')}}"></script>
    <!-- custom script for this page-->
   
    <script src="{{asset('admin/js/gdp-data.js')}}"></script>
    <script src="{{asset('admin/js/morris.min.js')}}"></script>
    <script src="{{asset('admin/js/sparklines.js')}}"></script>
    
    <script src="{{asset('admin/js/jquery.slimscroll.min.js')}}"></script>





    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    @yield('scripts')



</body>



</html>



