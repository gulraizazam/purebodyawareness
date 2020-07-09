<div id="footer">

        <div class="centered padmedium">

            <img src="{{asset('images/PBA-all-blue.png')}}" alt="The Body Coach" class="footlogo" />

            <br />

            <ul>

                <li><a href="{{url('/')}}">Home</a></li>

                <li><a href="{{route('transformations')}}">Transformations</a></li>

                

                <li><a href="{{route('veggieplan')}}">Veggie 90 Day Plan</a></li>

               

                <li><a href="{{route('about')}}">About Joe</a></li>

                              

                <li><a href="{{route('contact')}}">Contact</a></li>

            </ul>
            <?php

            $getContent = \App\Social::all();
            ?>
            <div id="social">

                <a href="{{$getContent[0]->youtube_url}}" target="_blank"><img src="{{URL::to('storage/app/uploads/files')}}/{{$getContent[0]->   youtube_icon}}" alt="YouTube" /></a>

                <a href="{{$getContent[0]->instagram_url}}" target="_blank"><img src="{{URL::to('storage/app/uploads/files')}}/{{$getContent[0]->instagram_icon}}" alt="Instagram" /></a>

                <a href="{{$getContent[0]->facebook_url}}" target="_blank"><img src="{{URL::to('storage/app/uploads/files')}}/{{$getContent[0]->    facebook_icon}}" alt="Facebook" /></a>

                <a href="{{$getContent[0]->twitter_url}}" target="_blank"><img src="{{URL::to('storage/app/uploads/files')}}/{{$getContent[0]->    twitter_icon}}" alt="Twitter" /></a>

            </div>

            <p class="disclaimer">&copy; 2020 Pure Body Awareness Online Nutrition Ltd. All rights reserved. <a href="#">Privacy Policy</a> / <a href="#">Cookies Policy</a> / <a href="#">Terms of Use</a></p>

        </div>

    </div>