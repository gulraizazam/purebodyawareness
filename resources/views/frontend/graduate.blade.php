@extends('frontend.layout.default')

@section('content')

	<div id="content">

	<div id="topslice" class="withdualgradient">

		<div class="centered padtwenty">

			<img src="{{asset('assets/gradplan.png')}}" class="wfifty mobile" alt="Graduate Plan"><div class="wfiftygap mobile"></div>

			<div class="wfifty">

				<h1>{{$getbanner[0]->page_heading}}</h1>

				{!! $getbanner[0]->page_description !!}

				<a class="cta ctagrey nicescroll" href="#">{{$getbanner[0]->button_text}}</a>

			</div><div class="wfiftygap nomobile"></div><img src="{{URL::to('storage/app/uploads/files')}}/{{$getbanner[0]->page_image}}" class="wfifty nomobile" alt="Graduate Plan">

		</div>

	</div>

	<div class="whiteslice">

		<div class="centered padstandard">

			<div class="centeredcontent"><h2>{{$getcontent[0]->page_heading}}</h2></div>

			<div class="featureset">

				<img class="wfifty" src="{{URL::to('storage/app/uploads/files')}}/{{$getcontent[0]->image1}}" alt="Amazing recipes"><div class="wfiftygap"></div><div class="wfifty">

					{!! $getcontent[0]->description1 !!}

				</div>

			</div>

			<div class="featureset">

				<img class="wfifty" src="{{URL::to('storage/app/uploads/files')}}/{{$getcontent[0]->image2}}" alt="Tougher training plan"><div class="wfiftygap"></div><div class="wfifty">

					{!! $getcontent[0]->description2 !!}


				</div>

			</div>

			<div class="featureset">

				<img class="wfifty" src="{{URL::to('storage/app/uploads/files')}}/{{$getcontent[0]->image3}}" alt="Continued support"><div class="wfiftygap"></div><div class="wfifty">

					{!! $getcontent[0]->description3 !!}

				</div>

			</div>

		</div>

	</div>

	<div id="purchase" class="greyslice">

		<div class="centered centeredcontent padstandard">

			<h2 class="toppushlarge bottompushlarge" id="contjourney">Continue your journey today</h2>

			<div class="purchase">

				<div class="innermargin">

					<img src="{{asset('assets/graduates/plan-phone.png')}}" alt="Pay Upfront">

					<p class="method">&nbsp;</p>

					<p class="price">Now £<span id="theprice">67</span>&nbsp;<span class="vat">(INC VAT)</span></p>

					<p class="gradadjust">One-off payment.<br><br>Enter your graduate code below.<br><br><b>You can find your graduate code by logging in to your client area.</b></p>

					<form action="#" method="post" id="gradform">

						<input type="text" maxlength="20" id="gradcode" name="gradcode" value="" class="dvback">

					</form>

					<a class="cta ctagrey" href="#" id="gradlink">Buy Now</a>

				</div>

			</div>

			<div class="purchase" style="margin-top: 40px;">

				<div class="innermargin centeredcontent">

					<h2>Not a graduate?</h2>

					<p>Check out the 90 Day Plan and start your journey today.</p>

					<a href="#" class="cta">Get Started</a>

				</div>

			</div>

		</div>

	</div>





	<div id="getleanbar">

		<div class="centered padmedium">

			<a class="cta floatright ctahollowbg nomobile" href="#">Get your free Get Lean Guide</a>

			<h2 class="brightgreen">Not sure? Sign up for your free Get Lean guide</h2>

			<p>7 days of fat loss advice to your inbox</p>

			<a class="cta floatright ctahollowbg mobile" href="#">Get your free Get Lean Guide</a>

		</div>

	</div>

	

	

</div>

@stop