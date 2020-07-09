@extends('frontend.layout.default')
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
	                     <figure><img src="images/signin-image.svg" alt="sing up image"></figure>
	                 </div>

	                 <div class="signin-form">
	                     <h2 class="form-title">Sign up</h2>
	                     <form method="POST" class="register-form" id="login-form">
	                         <div class="form-group">
	                             <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
	                             <input type="text" name="your_name" id="your_name" placeholder="Your Name">
	                         </div>
	                         <div class="form-group">
	                             <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
	                             <input type="password" name="your_pass" id="your_pass" placeholder="Password">
	                         </div>
	                         <div class="form-group">
	                             <input type="checkbox" name="remember-me" id="remember-me" class="agree-term">
	                             <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
	                         </div>
	                         <div class="form-group form-button">
	                             <input type="submit" name="signin" id="signin" class="form-submit" value="Log in">
	                         </div>
	                     </form>
	                     <div class="social-login">
	                         <span class="social-label">Or login with</span>
	                         <ul class="socials">
	                             <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
	                             <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
	                             <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
	                         </ul>
	                     </div>
	                 </div>
	             </div>
	         </div>
	     </section>

	</div>
	

	

</div>

@stop