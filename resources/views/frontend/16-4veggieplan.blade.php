@extends('frontend.layout.default')
@section('content')
	<div id="content">
	<div id="topslice" class="withdualgradient">
		<div class="centered padtwenty">
			<img src="{{asset('assets/90dayplan/veggie-yellow.png')}}" class="wfifty mobile" alt="Veggie 90 Day Plan"><div class="wfiftygap mobile"></div>
			<div class="wfifty">
				<h1>The new Veggie 90 Day Plan has arrived</h1>
				<p>With new and tasty vegetarian recipes, the 90 Day Plan is now accessible to anyone who follows a vegetarian diet. This tailored plan will give you all the tools you need to transform your body and become fitter, stronger, healthier and leaner than you’ve ever been.</p>
				<ul class="blueticks">
					<li>99 amazing vegetarian meals</li>
					<li>15 exclusive real-time workouts</li>
					<li>Mobile-friendly</li>
				</ul>
				<a class="#" href="{{route('packege.checkout')}}">Buy the Veggie 90 Day plan</a>
			</div><div class="wfiftygap nomobile"></div><img src="{{asset('assets/90dayplan/veggie-yellow.png')}}" class="wfifty nomobile" alt="Veggie 90 Day Plan">
		</div>
	</div>
	<div class="whiteslice">
		<div class="centered padstandard">
			<div class="featureset">
				<img class="wfifty" src="{{asset('assets/90dayplan/exclusive-recipes-veg.jpg')}}" alt="Incredible recipes"><div class="wfiftygap"></div><div class="wfifty">
					<p><b>Incredible vegetarian recipes</b></p>
					<p>This is not a low calorie, restrictive diet. You’ll be eating a variety of amazing recipes from our new vegetarian menu and with a huge variety of options you will never go hungry.</p>
					<ul class="blueticks">
						<li>99 recipes across all three cycles</li>
						<li>We tailor the meal portions for you</li>
						<li>Over 70 brand new recipes exclusive to the veggie plan</li>
						<li>Less Quorn and tofu than our previous plans</li>
					</ul>
				</div>
			</div>
			<div class="featureset">
				<img class="wfifty" src="{{asset('assets/90dayplan/trainingplan.jpg')}}" alt="New training plan"><div class="wfiftygap"></div><div class="wfifty">
					<p><b>New training plan</b></p>
					<p>Each month you’ll get a new training plan that you can follow at home or the gym. You’ll never need to train longer than 35 minutes.</p>
					<ul class="blueticks">
						<li>3 different cycles of training</li>
						<li>15 exclusive workout videos</li>
						<li>Train between 25-35 minutes</li>
						<li>Work out when it suits you</li>
					</ul>
				</div>
			</div>
			<div class="featureset">
				<img class="wfifty" src="{{asset('assets/90dayplan/vege.jpg')}}" alt="Online support"><div class="wfiftygap"></div><div class="wfifty">
					<p><b>Online support</b></p>
					<p>Get unlimited access to our online coaches through your dedicated Live Chat system, plus access to our new official Facebook community group.</p>
					<ul class="blueticks">
						<li>Get support and motivation</li>
						<li>Connect with others on the plan</li>
						<li>Share tips and advice</li>
						<li>Quick and easy access</li>
					</ul>
				</div>
			</div>
			<div class="centeredcontent toppushlarge"><a href="{{route('packege.checkout')}}" class="cta nicescroll ctagreen">Buy the Veggie 90 Day plan</a></div>
		</div>
	</div>
	<div id="whyyou" class="whiteslice">
		<div class="centered centeredcontent padstandard">
			<h3>How it works</h3>
			<div class="why whyfour">
				<p class="hiwnumber">1</p>
				<h4>Start with a questionnaire</h4>
				<p>This is key to give us a clear picture of your overall health, body measurements, nutritional history and lifestyle and help the team to ensure you get the best start possible.</p>
			</div>
			<div class="why whyfour">
				<p class="hiwnumber">2</p>
				<h4>We’ll tailor your plan</h4>
				<p>We’ll now create your tailored calorie and macronutrient meal plan using our brand new recipes. These tailored meals will support your progression through each cycle, in total we will create over 90 recipes on your journey.</p>
			</div>
			<div class="why whyfour">
				<p class="hiwnumber">3</p>
				<h4>Training and nutrition cycles</h4>
				<p>After 5 working days Cycle One will be sent via email from our online support team. Now your journey can begin. There will be 3 cycles in total to complete the plan.</p>
			</div>
			<div class="why whyfour">
				<p class="hiwnumber">4</p>
				<h4>Graduation and sustaining results</h4>
				<p>Bosh! You are now a fully-fledged graduate. You’ll receive your graduate pack via email containing the information you need to sustain your results.</p>
			</div>
			<br>
			<a class="cta toppush nicescroll" href="{{route('packege.checkout')}}">Get Started</a><p></p>
		</div>
	</div>
	<div class="greyslice">
		<div class="centered centeredcontent padstandard">
			<h2>Join the thousands who’ve transformed their lives</h2>
			<p>We receive thousands of amazing and inspiring transformation pictures and testimonials each week. Seeing the positive impact the plan has had on our client’s lives is the sole reason for creating the 90 Day Plan.</p>
			
				<div class="polaroidh">
					<p>5&nbsp;Days Ago</p>
					<div class="polaroid">
						<div class="instaholder" style="background-image: url('public/images/2319.jpg');">
						<div class="instafoot ifnewplan">
							<p>The New 90 Day Plan<br>Graduate</p>
						</div>
					</div>
					</div>
				</div>
			
				<div class="polaroidh">
					<p>5&nbsp;Days Ago</p>
					<div class="polaroid">
						<div class="instaholder" style="background-image: url('public/images/2320.jpg');">
						<div class="instafoot ifnewplan">
							<p>The New 90 Day Plan<br>Graduate</p>
						</div>
					</div>
					</div>
				</div>
			
				<div class="polaroidh">
					<p>32&nbsp;Days Ago</p>
					<div class="polaroid">
						<div class="instaholder" style="background-image: url('public/images/2318.jpg');">
						<div class="instafoot ifnewplan">
							<p>The New 90 Day Plan<br>Graduate</p>
						</div>
					</div>
					</div>
				</div>
			
			<a class="cta ctahollow toppushlarge" href="{{route('transformations')}}">View more transformations</a>
		</div>
	</div>
	<div class="dblueslice">
		<div class="centered centeredcontent">
			<img class="wfifty" src="{{asset('assets/90dayplan/joe.jpg')}}" alt="Joe Wicks, Pure Body Awareness"><div class="wfiftygap"></div><div class="wfifty">
				<p class="quote">"This is not a traditional, low calorie, deprivation diet. It’s an education in fat loss, nutrition and macronutrients, where you eat more food than you ever thought possible and spend less time in the gym."</p>
				<p class="quoteby">Joe Wicks, Pure Body Awareness</p>
			</div>
		</div>
	</div>
	<div id="purchase" class="greyslice">
		<div class="centered centeredcontent padstandard">
			<h2>Start your fat loss journey today</h2>
			<div class="purchase">
				<div class="innermargin">
					<img src="{{asset('assets/90dayplan/veggiepay.png')}}" alt="Pay Upfront">
					<p class="method methodgreen">Pay Upfront</p>
					<p class="price">£<span id="theprice">97</span>&nbsp;<span class="vat">(INC VAT)</span></p>
					<p>One-off payment. Includes discount for upfront payment.</p>
					<a class="cta ctagreen" href="{{route('packege.checkout')}}" id="poplink">BUY NOW</a>
					<p id="hasdisccode">Have a discount/voucher code?</p>
					<form action="" method="post" id="discform">
						<input type="text" maxlength="14" id="disccode" name="disccode" value="" class="dvback">
					</form>
				</div>
			</div>
			<div class="purchase">
				<div class="innermargin">
					<img src="{{asset('assets/90dayplan/veggiepay.png')}}" class="smaller" alt="Pay By Instalments">
					<p class="method methodgreen">Pay By Instalments</p>
					<p class="price">£126<span class="vat">(INC VAT)</span></p>
					<p class="orange"><span id="monthprice">3 x Monthly instalments of £42.</span></p>
					<a class="cta ctagreen" href="{{route('packege.checkout')}}">BUY NOW</a>
				</div>
			</div>
			<div class="purchase">
				<div class="innermargin">
					<img src="{{asset('assets/90dayplan/veggiepay.png')}}" class="smaller" alt="Buy a Voucher">
					<p class="method methodgreen">Buy a Voucher</p>
					<p class="price">£97&nbsp;<span class="vat">(INC VAT)</span></p>
					<p>Gift Voucher. One-off payment. Includes discount for upfront payment.</p>
					<a class="cta ctagreen" href="{{route('packege.checkout')}}">BUY NOW</a>
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