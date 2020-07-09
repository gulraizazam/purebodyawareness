@extends('frontend.layout.default')

@section('content')

	<div id="content">

	<div id="topslice" class="contact">

		<div class="centered padstandard">

			<div class="wfifty">

				<h1>Get in touch</h1>

			</div><div class="wfiftygap forcedheight"></div>

		</div>

	</div>

	<div class="whiteslice">

		<div class="centered padstandard">

			 @if(session()->has('success'))

                <div class="alert alert-success">

                    {{ session()->get('success') }}

                </div>

            @endif

			<p><b>For all enquiries relating to the 90 Day Plan please complete the form below.</b></p>

			<form action="{{route('contact.store')}}" method="post" id="contact">

				@csrf

				

				<div class="formq">

					<label for="name">Name&nbsp;*</label>

					<input name="name" type="text" id="name" size="25" value="" tabindex="2"><span class="errortext"></span>
					@if ($errors->has('name'))
                    	<p class=" text-danger" >{{ $errors->first('name') }}</p>
                 	@endif
				</div>

				<div class="formq">

					<label for="location">Location&nbsp;*</label>

					<input name="location" type="text" id="location" size="25" value="" tabindex="3"><span class="errortext"></span>
					@if ($errors->has('location'))
                    	<p class=" text-danger" >{{ $errors->first('location') }}</p>
                 	@endif
				</div>

				<div class="formq">

					<label for="gender">Gender</label>

					<input type="radio" name="gender" id="gender" value="Male" tabindex="4"><span class="inner" style="float: left;">&nbsp;Male&nbsp;&nbsp;</span><input type="radio" name="gender" id="gender" value="Female"><span class="inner" style="float: left;">&nbsp;Female</span>
					
				</div>
				@if ($errors->has('gender'))
                    <p class=" text-danger" >{{ $errors->first('gender') }}</p>
                 @endif
				<br style="clear: both;">

				<div class="formq">

					<label for="email">Email&nbsp;*</label>

					<input name="email" type="text" id="email" size="25" value="" tabindex="5"><span class="errortext"></span>
					@if ($errors->has('email'))
                    <p class=" text-danger" >{{ $errors->first('email') }}</p>
                 @endif
				</div>

				<div class="formq">

					<label for="email">Confirm Email&nbsp;*</label>

					<input name="cemail" type="text" id="cemail" size="25" value="" tabindex="6"><span class="errortext"></span>

				</div>

				<div class="formq">

					<label for="mobile">Mobile</label>

					<input name="mobile" type="text" id="mobile" size="25" value="" tabindex="7">
					@if ($errors->has('mobile'))
                    	<p class=" text-danger" >{{ $errors->first('mobile') }}</p>
                 	@endif
				</div>

				<div class="formq">

					<label for="subject">Subject</label>

					<input name="subject" type="text" id="subject" size="25" value="" tabindex="8">

				</div>

				<div class="formq">

					<label for="message">Message</label>

					<textarea name="message" id="message" tabindex="9"></textarea>
					@if ($errors->has('message'))
                    <p class=" text-danger" >{{ $errors->first('message') }}</p>
                 @endif
				</div>

				<div class="formq">

					<p>To help us stop spam enquiries, please complete the Captcha below...</p>

					 <div class="g-recaptcha" data-sitekey="6Lc33OkUAAAAAJpJuZGl-bfOf0wIdP0drgu9awDD"></div>

					<span class="errortext" style="margin-left: 5px;"></span>

					@if ($errors->has('g-recaptcha-response'))

                    <p class=" text-danger" style="color: red">{{ $errors->first('g-recaptcha-response') }}</p>

                 @endif

				</div>

				<div><br><input type="submit" value="Send Enquiry" tabindex="10"></div>

			</form>

			<h2 class="toppushxlarge">Have a specific question about the 90 Day Plan?</h2>

			<p>Try entering it into the box below and click ASK...</p>

			<form action="#" method="post" id="fourteen">

				<div id="sexbox" class="longer" style="border: none;"><input type="text" name="question" id="question" value="Your question..." onfocus="javascript: if(this.value == 'Your question...'){ this.value = ''; }" onblur="javascript: if(this.value==''){this.value='Your question...';}"><input type="submit" value="Ask" class="blueask"></div>

			</form>

			<br style="clear: left;">

			<h2 class="toppushxlarge">PR, Media and Professional Booking Enquires</h2>

			<p><b>Manager:</b> Bev James</p>

			<p><b>Email:</b> media@bevjames.com</p>

			<p class="toppushxlarge">Pure Body Awareness Online Nutrition Ltd is a company registered in England &amp; Wales, with company number: 8940062.</p>

			<p>Our registered office address is : Oriel House, 26 The Quadrant, Richmond, Surrey, TW9 1DL.</p>

			<p>Our VAT Registration Number is 189061973.</p>

			<p>You can also reach us by telephone on 0800 063 9922.</p>

		</div>

	</div>







	<div id="getleanbar">

		<div class="centered padmedium">

			<a class="cta floatright ctahollowbg nomobile" href="#">Get your free Get Lean Guide</a>

			<h2 class="brightgreen">Not sure? Sign up for your free Get Lean guide</h2>

			<p>7 days of fat loss advice to your inbox</p>

			<a class="cta floatright ctahollowbg mobile" href="">Get your free Get Lean Guide</a>

		</div>

	</div>

	

	

</div>

@stop