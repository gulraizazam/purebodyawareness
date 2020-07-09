@extends('frontend.layout.default')

@section('content')

	<div id="content">

	<div id="topslice" class="withdualgradient">

		<div class="centered padtwenty">

			<img src="{{asset('assets/90dayplan/veggie-yellow.png')}}" class="wfifty mobile" alt="Veggie 90 Day Plan"><div class="wfiftygap mobile"></div>

			<div class="wfifty">

				<h1>{{$getbanner[0]->page_heading}}</h1>

				{!! $getbanner[0]->page_description !!}

				<a class="cta nicescroll ctagreen" href="#purchase">{{$getbanner[0]->button_text}}</a>

			</div><div class="wfiftygap nomobile"></div><img src="{{URL::to('storage/app/uploads/files')}}/{{$getbanner[0]->page_image}}" class="wfifty nomobile" alt="Veggie 90 Day Plan">

		</div>

	</div>

	<div class="whiteslice">

		<div class="centered padstandard">

			<div class="featureset">

				<img class="wfifty" src="{{URL::to('storage/app/uploads/files')}}/{{$getcontent[0]->image1}}" alt="Incredible recipes"><div class="wfiftygap"></div><div class="wfifty">

					{!!$getcontent[0]->description1 !!}
				</div>

			</div>

			<div class="featureset">

				<img class="wfifty" src="{{URL::to('storage/app/uploads/files')}}/{{$getcontent[0]->image2}}" alt="New training plan"><div class="wfiftygap"></div><div class="wfifty">

					{!!$getcontent[0]->description2 !!}

				</div>

			</div>

			<div class="featureset">

				<img class="wfifty" src="{{URL::to('storage/app/uploads/files')}}/{{$getcontent[0]->image3}}" alt="Online support"><div class="wfiftygap"></div><div class="wfifty">

					{!!$getcontent[0]->description3 !!}
				</div>

			</div>

			<div class="centeredcontent toppushlarge"><a href="#purchase" class="cta nicescroll ctagreen">{{$getcontent[0]->button_text }}</a></div>

		</div>

	</div>

	<div id="whyyou" class="whiteslice">

		<div class="centered centeredcontent padstandard">

			<h3>{{$getFeature[0]->section_title}}</h3>

			<div class="why whyfour">

				<p class="hiwnumber">1</p>

				<h4>{{$getFeature[0]->first_feature_name}}</h4>

				<p>{{$getFeature[0]->first_feature_detail}}</p>

			</div>

			<div class="why whyfour">

				<p class="hiwnumber">2</p>

				<h4>{{$getFeature[0]->second_feature_name}}</h4>

				<p>{{$getFeature[0]->second_feature_detail}}</p>

			</div>

			<div class="why whyfour">

				<p class="hiwnumber">3</p>

				<h4>{{$getFeature[0]->third_feature_name}}</h4>

				<p>{{$getFeature[0]->third_feature_detail}}</p>

			</div>

			<div class="why whyfour">

				<p class="hiwnumber">4</p>

				<h4>{{$getFeature[0]->fourth_feature_name}}</h4>

				<p>{{$getFeature[0]->fourth_feature_detail}}</p>

			</div>

			<br>

			<a class="cta toppush nicescroll" href="#purchase">Get Started</a><p></p>

		</div>

	</div>

	<div class="greyslice">

		<div class="centered centeredcontent padstandard">

			<h3>Meet some of our most<br class="nomobile" /> recent graduates</h3>
                @foreach($getgraduates as $graduates)
                <?php
                    $now = new DateTime();
                    
                    $graduatedate = $graduates->date_of_graduate;
                    $date = new DateTime($graduatedate);
                    
                    
                    $datediff = $date->diff($now)->format("%d days Ago");
                ?>
                    <div class="polaroidh ">
                        <p>{{$datediff == "0 days Ago" ? "Today" : $datediff}} </p>
                        <div class="polaroid">
                            <div class="instaholder" style="background-image: url('storage/app/uploads/files/{{$graduates->file}}');">
                            <div class="instafoot ifnewplan">
                                <p>The New 90 Day Plan<br />Graduate</p>
                            </div>
                        </div>
                        </div>
                    </div>
                @endforeach

			

				
			

				

			

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

			@foreach($getplan as $plan)
			@if($plan->installments ==null)
			<div class="purchase">

				<div class="innermargin">

					<img src="{{URL::to('storage/app/uploads/files')}}/{{ $plan->file}}" alt="Pay Upfront">

					<p class="method methodgreen">Pay Upfront</p>

					<p class="price">£<span id="theprice">{{$plan->price}}</span>&nbsp;<span class="vat">(INC VAT)</span></p>

					<p>{{$plan->description}}</p>

					<a class="cta ctagreen" href="{{url('checkout',$plan->id)}}" id="poplink">BUY NOW</a>

					

				</div>

			</div>
			@else
			<div class="purchase">
				<div class="innermargin">
					<img src="{{URL::to('storage/app/uploads/files')}}/{{ $plan->file}}" class="smaller" alt="Pay By Instalments">
					<p class="method methodgreen">Pay By Instalments</p>
					<p class="price">{{$plan->price}}<span class="vat">(INC VAT)</span></p>
					<p class="orange"><span id="monthprice">{{$plan->installments}} x Monthly instalments of £{{$plan->installment_amount}}</span></p>
					<a class="cta ctagreen" href="{{url('checkout',$plan->id)}}">BUY NOW</a>
				</div>
			</div>
			@endif
			@endforeach
			

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