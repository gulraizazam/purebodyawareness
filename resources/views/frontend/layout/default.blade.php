<!DOCTYPE html>

<html>

<head>

    <title>Pure Body Awareness</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta http-equiv="expires" content="-1" />

    <meta http-equiv="pragma" content="no-cache" />

    <meta name="robots" content="index, follow" />

    <meta name="description" content="Welcome to Pure Body Awareness, the home of the new 90 Day Plan and Veggie 90 Day Plan!" />

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('images/favicon.png')}}">

    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('images/favicon.png')}}">

    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/favicon.png')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/favicon.png')}}">

    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/favicon.png')}}">

    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('images/favicon.png')}}">

    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/favicon.png')}}">

    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('images/favicon.png')}}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicon.png')}}">

    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('images/favicon.png')}}">

    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon.png')}}">

    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('images/favicon.png')}}">

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.png')}}">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <link rel="manifest" href="{{asset('images/favicon.png')}}">

    <meta name="msapplication-TileColor" content="#ffffff">

    <meta name="msapplication-TileImage" content="{{asset('images/favicon.png')}}">

    <meta name="theme-color" content="#ffffff">

    <link href="{{asset('css/layout.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('css/gousto.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('css/owl.theme.css')}}" rel="stylesheet" type="text/css" />

    <link href="https://www.thebodycoach.com/" rel="alternate" hreflang="x-default" />

    <link rel="canonical" href="#" />

    

</head>

<body>

<div id="logodock" class="topdock dock2">

    <div class="centered padsmall">

        <a href="{{url('/')}}"><img src="{{asset('images/PBA-all-blue.png')}}" class="logo" alt="The Body Coach" /></a>

        

        <p>Currency: <a href="#"><img src="{{asset('assets/flag_GBP.png')}}" class="flag" alt="GBP" /></a></p>

        <p class="signup nomobile"><a href="{{url('veggie90dayplan')}}">Sign Up to the 90 Day Plan</a></p>

    </div>

</div>

@include('frontend.layout.includes.header')

@yield('content')



@include('frontend.layout.includes.footer')



</div>

<script type="text/javascript" src="//www.google.com/recaptcha/api.js?onload=reCapLoad&render=explicit" async defer></script>

<script type="text/javascript" src="{{asset('scripts/jquery-3.3.1.min.js')}}"></script>

<script type="text/javascript" src="{{asset('scripts/owl.carousel.js')}}"></script>

<script type="text/javascript" src="{{asset('scripts/bodycoach.js')}}"></script>

<script type="text/javascript" src="{{asset('scripts/gatracking.js')}}"></script>

<script type="text/javascript" src="{{asset('scripts/contently.js')}}"></script>

<script type="text/javascript" src="{{asset('scripts/hotjar.js')}}"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script>!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');fbq('init', '303589136649108'); fbq('track', 'PageView'); </script>

<script type="text/javascript">

    adroll_adv_id = "QUKTUFUHKZHAJEFWPOKYNB";

    adroll_pix_id = "ZGYJL7PWFNDAVMXYTSMJKZ";



    (function () {

        var _onload = function(){

            if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}

            if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}

            var scr = document.createElement("script");

            var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");

            scr.setAttribute('async', 'true');

            scr.type = "text/javascript";

            scr.src = host + "/j/roundtrip.js";

            ((document.getElementsByTagName('head') || [null])[0] ||

                document.getElementsByTagName('script')[0].parentNode).appendChild(scr);

        };

        if (window.addEventListener) {window.addEventListener('load', _onload, false);}

        else {window.attachEvent('onload', _onload)}

    }());

</script>

</body>

</html>

