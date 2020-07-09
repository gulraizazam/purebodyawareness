@extends('frontend.layout.default')
@section('content')
<style>
.signin-content {
    padding-top: 67px;
    padding-bottom: 87px;
}
.signin-form, .signin-image {
    width: 50%;
    overflow: hidden;
}
.signin-image {
    margin-left: 110px;
    margin-right: 20px;
    margin-top: 10px;
}
figure {
    margin-bottom: 50px;
    text-align: center;
}
.signin-form {
    margin-right: 90px;
    margin-left: 80px;
}
.form-title {
    margin-bottom: 33px;
    line-height: 1.66;
    margin: 0;
    padding: 0;
    font-weight: bold;
    color: #222;
    font-family: Poppins;
    font-size: 36px;
}
.register-form {
    width: 100%;
}
.form-group {
    position: relative;
    margin-bottom: 25px;
    overflow: hidden;
}
label {
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    color: #222;
}
.material-icons-name {
    font-size: 18px;
}
input {
    width: 100%;
    display: block;
    border: none;
    border-bottom: 1px solid #999;
    padding: 6px 30px;
    font-family: Poppins;
    box-sizing: border-box;
}
.form-group {
    position: relative;
    margin-bottom: 25px;
    overflow: hidden;
}
.form-group:last-child {
    margin-bottom: 0px;
}
.form-submit {
    display: inline-block;
    background: #6dabe4;
    color: #fff;
    border-bottom: none;
    width: auto;
    padding: 15px 39px;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -o-border-radius: 5px;
    -ms-border-radius: 5px;
    margin-top: 25px;
    cursor: pointer;
}
#signin {
    margin-top: 16px;
}
display-flex, .display-flex, .display-flex-center, .signup-content, .signin-content, .social-login, .socials {
    display: flex;
    display: -webkit-flex;
}
.social-login {
    align-items: center;
    -moz-align-items: center;
    -webkit-align-items: center;
    -o-align-items: center;
    -ms-align-items: center;
    margin-top: 80px;
}
.social-label {
    display: inline-block;
    margin-right: 15px;
}
list-type-ulli, .socials {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.socials li {
    padding: 5px;
}
.socials li a {
    text-decoration: none;
}
.socials li a i {
    width: 30px;
    height: 30px;
    color: #fff;
    font-size: 14px;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -o-border-radius: 5px;
    -ms-border-radius: 5px;
    transform: translateZ(0);
    -moz-transform: translateZ(0);
    -webkit-transform: translateZ(0);
    -o-transform: translateZ(0);
    -ms-transform: translateZ(0);
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
}
.socials li:hover a i {
    -webkit-transform: scale(1.3) translateZ(0);
    transform: scale(1.3) translateZ(0);
}
</style>

@section('content')

<div id="content">

    <div id="topslice" class="about">

        <div class="centered padstandard">

            <div class="wfifty">

                <h1>The man behind<br>the plans</h1>

            </div><div class="wfiftygap forcedheight"></div>

        </div>

    </div>
    <div class="whiteslice">
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{asset('assets/graduates/grad_phone.jpg')}}" alt="sing up image" style="height: 320px"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title text-center">Register</h2>
                        <hr>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-md-6 col-form-label text-md-right" style="margin-top: 10px;">Name</label>

                                <div class="col-md-6">
                                   <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required="" autocomplete="name" autofocus="">
                                   @error('name')
                                    <span class="invalid-feedback" role="alert" style="color: red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-6 col-form-label text-md-right" style="margin-top: 10px;">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required="" autocomplete="email" autofocus="">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert" style="color: red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-6 col-form-label text-md-right" style="margin-top: 10px;">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required="" autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert" style="color: red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-6 col-form-label text-md-right" style="margin-top: 10px;">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="" autocomplete="new-password">

                                                                </div>
                            </div>

                            

                            <div class="form-group row mb-0">
                                <div class="col-md-10 offset-md-2">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>

                                <a class="btn btn-link" href="{{route('login')}}">
                                            Already have account login
                                        </a>
                                                                </div>
                            </div>
                        </form>
                         <!-- <div class="social-login">
                             <span class="social-label">Or login with</span>
                             <ul class="socials">
                                 <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                 <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                 <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                             </ul>
                         </div> -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@stop
