@extends('frontend.layout.default')
@section('content')
<div id="content">
    <div id="topslice" class="withdualgradient">
        <div class="centered padtwenty">
            <img src="{{asset('assets/90dayplan.png')}}" class="wfifty mobile" alt="90 Day Plan" /><div class="wfiftygap mobile"></div>
            <div class="wfifty">
                <h1>{{$getbanner[0]->page_heading}}</h1>
                <p>{!! $getbanner[0]->page_description !!}</p>
               <a class="cta ctagreen" href="{{route('veggieplan')}}">{{$getbanner[0]->button_text}}</a>
            </div><div class="wfiftygap nomobile"></div><img src="{{URL::to('storage/app/uploads/files')}}/{{$getbanner[0]->page_image}}" class="wfifty nomobile" alt="90 Day Plan" />
        </div>
    </div>
    <!-- <div id="pressbar">
        <div class="centered centeredcontent padsmall">
            <img src="{{asset('assets/presslarger/men-s-health-logo.svg')}}" alt="Mens Health" />
            <img src="{{asset('assets/presslarger/forbes-logo.svg')}}" alt="Forbes" />
            <img src="{{asset('assets/presslarger/womens-health-logo.svg')}}" alt="Womens Health" />
            <img src="{{asset('assets/presslarger/bbc-logo.svg')}}" alt="BBC" />
            <img src="{{asset('assets/presslarger/the-guardian-logo.svg')}}" alt="The Guardian" />     
        </div>
    </div> -->
    <div class="whiteslice">

        <div class="centered padstandard">

            <div class="featureset">

                <img class="wfifty" src="{{URL::to('storage/app/uploads/files')}}/{{$getcontent[0]->image1}}" alt="Incredible recipes"><div class="wfiftygap"></div><div class="wfifty">

                    {!!$getcontent[0]->description1 !!}
                </div>

            </div>

            <div class="featureset">
                <div class="wfifty">
                    {!!$getcontent[0]->description2 !!}
                </div>
                <div class="wfiftygap"></div>
                <img class="wfifty" src="{{URL::to('storage/app/uploads/files')}}/{{$getcontent[0]->image2}}" alt="New training plan">
                

            </div>

            <div class="featureset">

                <img class="wfifty" src="{{URL::to('storage/app/uploads/files')}}/{{$getcontent[0]->image3}}" alt="Online support"><div class="wfiftygap"></div><div class="wfifty">

                    {!!$getcontent[0]->description3 !!}
                </div>

            </div>

            <div class="centeredcontent toppushlarge"><a href="{{route('veggieplan')}}#purchase" class="cta nicescroll ctagreen">{{$getcontent[0]->button_text }}</a></div>

        </div>

    </div>
   
    <div class="whiteslice">
        <div class="centered centeredcontent padstandard">
            <h3 class="bmargin">See what our graduates are saying <br class="nomobile" />about the plan</h3>
            <div id="owl-demo" class="owl-carousel">
                @foreach($gettestimonial as $testimonial)
                <div class="item">
                    <div class="videooverlay">
                        <div class="playbutton"><img src="{{asset('assets/video-play.png')}}" alt="Play" /></div>
                    </div>
                    <video poster="{{URL::to('storage/app/uploads/files')}}/{{$testimonial->thumbnail}}">
                        <source src="{{URL::to('storage/app/uploads/files')}}/{{$testimonial->testimonial_video}}" type="video/mp4" />
                        
                    </video>
                    <p class="name">{{$testimonial->customer_name}}</p>
                </div>
                @endforeach
            </div>
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
                
            
                
            <br />
            <a class="cta ctahollow toppushlarge" href="{{route('transformations')}}">View more transformations</a>
        </div>
    </div>
    <div id="whyyou" class="whiteslice">
        <div class="centered centeredcontent padstandard">
            <h2>What makes the<br class="nomobile" /> 90 Day Plan different?</h2>
            <div class="why @if($getFeature[0]->fourth_feature_detail) whyfour @endif">
                <img src="{{URL::to('storage/app/uploads/files')}}/{{$getFeature[0]->  first_feature_image}}" alt="3 flexible meal and training plans" />
                <h3>{{$getFeature[0]->first_feature_name}}</h3>
                <p>{{$getFeature[0]->first_feature_detail}}</p>
            </div>
            <div class="why @if($getFeature[0]->fourth_feature_detail) whyfour @endif">
                <img src="{{URL::to('storage/app/uploads/files')}}/{{$getFeature[0]->  second_feature_image}}" alt="3 flexible meal and training plans" />
                <h3>{{$getFeature[0]->second_feature_name}}</h3>
                <p>{{$getFeature[0]->second_feature_detail}}</p>
            </div>
            <div class="why @if($getFeature[0]->fourth_feature_detail) whyfour @endif">
                <img src="{{URL::to('storage/app/uploads/files')}}/{{$getFeature[0]->  third_feature_image}}" alt="3 flexible meal and training plans" />
                <h3>{{$getFeature[0]->third_feature_name}}</h3>
                <p>{{$getFeature[0]->third_feature_detail}}</p>
            </div>
            @if($getFeature[0]->fourth_feature_name)
             <div class="why @if($getFeature[0]->fourth_feature_detail) whyfour @endif">
                <img src="{{URL::to('storage/app/uploads/files')}}/{{$getFeature[0]->  fourth_feature_image}}" alt="3 flexible meal and training plans" />
                <h3>{{$getFeature[0]->fourth_feature_name}}</h3>
                <p>{{$getFeature[0]->fourth_feature_detail}}</p>
            </div>
            @endif
            <br />
            <a class="cta toppush" href="{{route('veggieplan')}}#purchase">Sign Up Today</a></p>
        </div>
    </div>
    <!-- <div class="greyslice homeblogs">
        <div class="centered centeredcontent padstandard">
            <h3>Latest from the blog</h3>
            
            <div class="blogarticle ">
                
                    <a id="art" href="#">
                        <div class="blogimage" style="background: url(public/dynamicimages/new_1254.jpg); background-size: cover;"></div>
                    </a>
                
                <p class="postby">Posted by <span class="highlight">Joe Wicks</span></p>
                <h3><a href="#">P.E. With Joe</a></h3>
                <p>Join me every day for a home workout aimed at kids &#128512;</p>
                <p class="blogbutton"><a class="blogbutton" href="#">Read More</a></p>
            </div>
            
            <div class="blogarticle ">
                
                    <a id="art" href="#">
                        <div class="blogimage" style="background: url(public/dynamicimages/new_1252.jpg); background-size: cover;"></div>
                    </a>
                
                <p class="postby">Posted by <span class="highlight">Joe Wicks</span></p>
                <h3><a href="#">Lemon and Poppy Seed Muffins</a></h3>
                <p>You've got to try these lemon and poppy seed muffins from my new 90 Day Plan.</p>
                <p class="blogbutton"><a class="blogbutton" href="#">Read More</a></p>
            </div>
            
            <div class="blogarticle notablet">
                
                    <a id="art" href="#">
                        <div class="blogimage" style="background: url(public/dynamicimages/new_1246.jpg); background-size: cover;"></div>
                    </a>
                
                <p class="postby">Posted by <span class="highlight">Joe Wicks</span></p>
                <h3><a href="#">Start the new decade with my 7 Days of Sweat Challenge</a></h3>
                <p>Are you ready to kickstart the new decade and feel fitter, stronger, healthier and happier? Try my '7 Days of Sweat Challenge'.</p>
                <p class="blogbutton"><a class="blogbutton" href="#">Read More</a></p>
            </div>
            
            <a class="cta" href="#" target="_blank">Visit the blog</a>
        </div>
    </div> -->



    <div id="getleanbar">
        <div class="centered padmedium">
            <a class="cta floatright ctahollowbg nomobile" href="/free-tips.asp">Get your free Get Lean Guide</a>
            <h2 class="brightgreen">Not sure? Sign up for your free Get Lean guide</h2>
            <p>7 days of fat loss advice to your inbox</p>
            <a class="cta floatright ctahollowbg mobile" href="#">Get your free Get Lean Guide</a>
        </div>
    </div>
@stop