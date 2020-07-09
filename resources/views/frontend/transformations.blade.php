@extends('frontend.layout.default')

@section('content')

	<div id="content">

	<div id="topslice" class="bottlejoe">

		<div class="centered padstandard">

			<div class="wfifty">

				<h1>Real people, <br class="mobile">real results <br class="mobile">in real time.</h1>

			</div><div class="wfiftygap forcedheight"></div>

		</div>

	</div>

	<div class="whiteslice">

		<div class="centered padstandard">

			<h3 class="tranfilter">Filter Transformations</h3>

			<div id="tranfilter">

				<form action="{{route('filter.graduate')}}" method="post">
					@csrf
				<p>Sex</p>

				<select name="sex" id="transex">

					<option value="BOTH">Both</option>

					<option value="male">Male</option>

					<option value="female">Female</option>

				</select>

				<p>Age</p>

				<select name="age" id="tranage">

					<option value="*">All</option>

					<option value="18-30">18 - 30</option>

					<option value="30-40">30 - 40</option>

					<option value="40+">40+</option>

				</select>

				<input type="submit" value="Filter">

				</form>

				<br style="clear: left;">

			</div>

			<div id="alltrans">

				
				@foreach($getgraduates as $graduates)
					<div class="traneaster">

						<div class="instaholder" style="background-image: url('storage/app/uploads/files/{{$graduates->file}}');">

							

							<div class="instafoot ifnewplan">

								<p>The New 90 Day Plan<br>Graduate</p>

							</div>

							

						</div>

						<div class="instatextholder">

							<p class="instahead">{{$graduates->name}}</p>

							<img src="{{asset('assets/trans_under.png')}}" class="tunder" alt="Nicole">

							<p>"{{$graduates->description}}"</p>

						</div>

						<br style="clear: both;">

					</div>
				@endforeach
				

			

				

			</div>

			<br>

			<input type="hidden" name="lastid" id="lastid" value="5">

			<div class="centeredcontent"><a class="cta ctahollow toppush" id="tranloadmore">Load More</a></div>

		</div>

	</div>







	<div id="getleanbar">

		<div class="centered padmedium">

			<a class="cta floatright ctahollowbg nomobile" href="/free-tips.asp">Get your free Get Lean Guide</a>

			<h2 class="brightgreen">Not sure? Sign up for your free Get Lean guide</h2>

			<p>7 days of fat loss advice to your inbox</p>

			<a class="cta floatright ctahollowbg mobile" href="/free-tips.asp">Get your free Get Lean Guide</a>

		</div>

	</div>

	

	

</div>

@stop