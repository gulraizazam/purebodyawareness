@extends('frontend.layout.default')

@section('content')

	<div id="content">

	<div id="topslice" class="beachjoe">

		<div class="centered padstandard">

			<div class="wfifty">

				<h1>Let's get you started</h1>

				<p>You are only one step away from getting started on your 90 Day Plan journey.</p>

				<p>Complete the form below, and then click the button to pay securely online.</p>

			</div>

		</div>

	</div>

	<div class="whiteslice">

		<div class="centered padstandard">

			<form action="{{route('payment')}}" method="POST" > 

				@csrf

				<input type="hidden" name="product_name" value="{{$getplan->name}}">  

				

				<input type="hidden" name="price" id="amount" value="{{$getplan->price}}">

				

				

				<h2>Your Details</h2>

				<p id="errortext" style="display: none;"><img src="/assets/alert.png" alt="Please complete all the fields" class="alert" style="float: left; width: 20px; margin-right: 10px;"><b>Please complete all the fields below, and tick the box to confirm you accept the terms of business.</b></p><p>

				

				</p><div class="formq">

					<label for="MC_fname">First Name</label>

					<input type="text" name="username" id="MC_fname" value="">
					@if ($errors->has('username'))
                    <p class=" text-danger" >{{ $errors->first('username') }}</p>
                 @endif
				</div>

				

				<div class="formq">

					<label for="MC_sname">Surname</label>

					<input type="text" name="MC_sname" id="MC_sname" value="">

				</div>

				

				<div class="formq">

					<label for="MC_cemailaddress">Email Address</label>

					<input type="text" name="email" id="MC_cemailaddress" value="">
						@if ($errors->has('email'))
		                    <p class=" text-danger" >{{ $errors->first('email') }}</p>
		                 @endif
				</div>

				

				<div class="formq">

					<label for="MC_cemailaddressconfirm">Confirm Email Address</label>

					<input type="text" name="MC_cemailaddressconfirm" id="MC_cemailaddressconfirm" value="">

				</div>

				

				<div class="formq">

					<label for="MC_country">Country</label>

					<select name="address" required="">

						

						<option value="GB">United Kingdom</option>

						

						<option value="AF">Afghanistan</option>

						

						<option value="AL">Albania</option>

						

						<option value="DZ">Algeria</option>

						

						<option value="AS">American Samoa</option>

						

						<option value="AD">Andorra</option>

						

						<option value="AG">Angola</option>

						

						<option value="AI">Anguilla</option>

						

						<option value="AG">Antigua &amp; Barbuda</option>

						

						<option value="AR">Argentina</option>

						

						<option value="AA">Armenia</option>

						

						<option value="AW">Aruba</option>

						

						<option value="AU">Australia</option>

						

						<option value="AT">Austria</option>

						

						<option value="AZ">Azerbaijan</option>

						

						<option value="BS">Bahamas</option>

						

						<option value="BH">Bahrain</option>

						

						<option value="BD">Bangladesh</option>

						

						<option value="BB">Barbados</option>

						

						<option value="BY">Belarus</option>

						

						<option value="BE">Belgium</option>

						

						<option value="BZ">Belize</option>

						

						<option value="BJ">Benin</option>

						

						<option value="BM">Bermuda</option>

						

						<option value="BT">Bhutan</option>

						

						<option value="BO">Bolivia</option>

						

						<option value="BL">Bonaire</option>

						

						<option value="BA">Bosnia &amp; Herzegovina</option>

						

						<option value="BW">Botswana</option>

						

						<option value="BR">Brazil</option>

						

						<option value="BC">British Indian Ocean Ter</option>

						

						<option value="BN">Brunei</option>

						

						<option value="BG">Bulgaria</option>

						

						<option value="BF">Burkina Faso</option>

						

						<option value="BI">Burundi</option>

						

						<option value="KH">Cambodia</option>

						

						<option value="CM">Cameroon</option>

						

						<option value="CA">Canada</option>

						

						<option value="IC">Canary Islands</option>

						

						<option value="CV">Cape Verde</option>

						

						<option value="KY">Cayman Islands</option>

						

						<option value="CF">Central African Republic</option>

						

						<option value="TD">Chad</option>

						

						<option value="CD">Channel Islands</option>

						

						<option value="CL">Chile</option>

						

						<option value="CN">China</option>

						

						<option value="CI">Christmas Island</option>

						

						<option value="CS">Cocos Island</option>

						

						<option value="CO">Colombia</option>

						

						<option value="CC">Comoros</option>

						

						<option value="CG">Congo</option>

						

						<option value="CK">Cook Islands</option>

						

						<option value="CR">Costa Rica</option>

						

						<option value="CT">Cote D'Ivoire</option>

						

						<option value="HR">Croatia</option>

						

						<option value="CU">Cuba</option>

						

						<option value="CB">Curacao</option>

						

						<option value="CY">Cyprus</option>

						

						<option value="CZ">Czech Republic</option>

						

						<option value="DK">Denmark</option>

						

						<option value="DJ">Djibouti</option>

						

						<option value="DM">Dominica</option>

						

						<option value="DO">Dominican Republic</option>

						

						<option value="TM">East Timor</option>

						

						<option value="EC">Ecuador</option>

						

						<option value="EG">Egypt</option>

						

						<option value="SV">El Salvador</option>

						

						<option value="GQ">Equatorial Guinea</option>

						

						<option value="ER">Eritrea</option>

						

						<option value="EE">Estonia</option>

						

						<option value="ET">Ethiopia</option>

						

						<option value="FA">Falkland Islands</option>

						

						<option value="FO">Faroe Islands</option>

						

						<option value="FJ">Fiji</option>

						

						<option value="FI">Finland</option>

						

						<option value="FR">France</option>

						

						<option value="GF">French Guiana</option>

						

						<option value="PF">French Polynesia</option>

						

						<option value="FS">French Southern Ter</option>

						

						<option value="GA">Gabon</option>

						

						<option value="GM">Gambia</option>

						

						<option value="GE">Georgia</option>

						

						<option value="DE">Germany</option>

						

						<option value="GH">Ghana</option>

						

						<option value="GI">Gibraltar</option>

						

						<option value="GR">Greece</option>

						

						<option value="GL">Greenland</option>

						

						<option value="GD">Grenada</option>

						

						<option value="GP">Guadeloupe</option>

						

						<option value="GU">Guam</option>

						

						<option value="GT">Guatemala</option>

						

						<option value="GN">Guinea</option>

						

						<option value="GY">Guyana</option>

						

						<option value="HT">Haiti</option>

						

						<option value="HW">Hawaii</option>

						

						<option value="HN">Honduras</option>

						

						<option value="HK">Hong Kong</option>

						

						<option value="HU">Hungary</option>

						

						<option value="IS">Iceland</option>

						

						<option value="IN">India</option>

						

						<option value="ID">Indonesia</option>

						

						<option value="IA">Iran</option>

						

						<option value="IQ">Iraq</option>

						

						<option value="IR">Ireland</option>

						

						<option value="IM">Isle of Man</option>

						

						<option value="IL">Israel</option>

						

						<option value="IT">Italy</option>

						

						<option value="JM">Jamaica</option>

						

						<option value="JP">Japan</option>

						

						<option value="JO">Jordan</option>

						

						<option value="KZ">Kazakhstan</option>

						

						<option value="KE">Kenya</option>

						

						<option value="KI">Kiribati</option>

						

						<option value="NK">Korea North</option>

						

						<option value="KS">Korea South</option>

						

						<option value="KW">Kuwait</option>

						

						<option value="KG">Kyrgyzstan</option>

						

						<option value="LA">Laos</option>

						

						<option value="LV">Latvia</option>

						

						<option value="LB">Lebanon</option>

						

						<option value="LS">Lesotho</option>

						

						<option value="LR">Liberia</option>

						

						<option value="LY">Libya</option>

						

						<option value="LI">Liechtenstein</option>

						

						<option value="LT">Lithuania</option>

						

						<option value="LU">Luxembourg</option>

						

						<option value="MO">Macau</option>

						

						<option value="MK">Macedonia</option>

						

						<option value="MG">Madagascar</option>

						

						<option value="MY">Malaysia</option>

						

						<option value="MW">Malawi</option>

						

						<option value="MV">Maldives</option>

						

						<option value="ML">Mali</option>

						

						<option value="MT">Malta</option>

						

						<option value="MH">Marshall Islands</option>

						

						<option value="MQ">Martinique</option>

						

						<option value="MR">Mauritania</option>

						

						<option value="MU">Mauritius</option>

						

						<option value="ME">Mayotte</option>

						

						<option value="MX">Mexico</option>

						

						<option value="MI">Midway Islands</option>

						

						<option value="MD">Moldova</option>

						

						<option value="MC">Monaco</option>

						

						<option value="MN">Mongolia</option>

						

						<option value="MS">Montserrat</option>

						

						<option value="MA">Morocco</option>

						

						<option value="MZ">Mozambique</option>

						

						<option value="MM">Myanmar</option>

						

						<option value="NA">Nambia</option>

						

						<option value="NU">Nauru</option>

						

						<option value="NP">Nepal</option>

						

						<option value="AN">Netherland Antilles</option>

						

						<option value="NL">Netherlands</option>

						

						<option value="NV">Nevis</option>

						

						<option value="NC">New Caledonia</option>

						

						<option value="NZ">New Zealand</option>

						

						<option value="NI">Nicaragua</option>

						

						<option value="NE">Niger</option>

						

						<option value="NG">Nigeria</option>

						

						<option value="NW">Niue</option>

						

						<option value="NF">Norfolk Island</option>

						

						<option value="NO">Norway</option>

						

						<option value="OM">Oman</option>

						

						<option value="PK">Pakistan</option>

						

						<option value="PW">Palau Island</option>

						

						<option value="PS">Palestine</option>

						

						<option value="PA">Panama</option>

						

						<option value="PG">Papua New Guinea</option>

						

						<option value="PY">Paraguay</option>

						

						<option value="PE">Peru</option>

						

						<option value="PH">Philippines</option>

						

						<option value="PO">Pitcairn Island</option>

						

						<option value="PL">Poland</option>

						

						<option value="PT">Portugal</option>

						

						<option value="PR">Puerto Rico</option>

						

						<option value="QA">Qatar</option>

						

						<option value="ME">Republic of Montenegro</option>

						

						<option value="RS">Republic of Serbia</option>

						

						<option value="RE">Reunion</option>

						

						<option value="RO">Romania</option>

						

						<option value="RU">Russia</option>

						

						<option value="RW">Rwanda</option>

						

						<option value="NT">St Barthelemy</option>

						

						<option value="EU">St Eustatius</option>

						

						<option value="HE">St Helena</option>

						

						<option value="KN">St Kitts-Nevis</option>

						

						<option value="LC">St Lucia</option>

						

						<option value="MB">St Maarten</option>

						

						<option value="PM">St Pierre &amp; Miquelon</option>

						

						<option value="VC">St Vincent &amp; Grenadines</option>

						

						<option value="SP">Saipan</option>

						

						<option value="SO">Samoa</option>

						

						<option value="AS">Samoa American</option>

						

						<option value="SM">San Marino</option>

						

						<option value="ST">Sao Tome &amp; Principe</option>

						

						<option value="SA">Saudi Arabia</option>

						

						<option value="SN">Senegal</option>

						

						<option value="RS">Serbia</option>

						

						<option value="SC">Seychelles</option>

						

						<option value="SL">Sierra Leone</option>

						

						<option value="SG">Singapore</option>

						

						<option value="SK">Slovakia</option>

						

						<option value="SI">Slovenia</option>

						

						<option value="SB">Solomon Islands</option>

						

						<option value="OI">Somalia</option>

						

						<option value="ZA">South Africa</option>

						

						<option value="ES">Spain</option>

						

						<option value="LK">Sri Lanka</option>

						

						<option value="SD">Sudan</option>

						

						<option value="SR">Suriname</option>

						

						<option value="SZ">Swaziland</option>

						

						<option value="SE">Sweden</option>

						

						<option value="CH">Switzerland</option>

						

						<option value="SY">Syria</option>

						

						<option value="TA">Tahiti</option>

						

						<option value="TW">Taiwan</option>

						

						<option value="TJ">Tajikistan</option>

						

						<option value="TZ">Tanzania</option>

						

						<option value="TH">Thailand</option>

						

						<option value="TG">Togo</option>

						

						<option value="TK">Tokelau</option>

						

						<option value="TO">Tonga</option>

						

						<option value="TT">Trinidad &amp; Tobago</option>

						

						<option value="TN">Tunisia</option>

						

						<option value="TR">Turkey</option>

						

						<option value="TU">Turkmenistan</option>

						

						<option value="TC">Turks &amp; Caicos Is</option>

						

						<option value="TV">Tuvalu</option>

						

						<option value="UG">Uganda</option>

						

						<option value="UA">Ukraine</option>

						

						<option value="AE">United Arab Emirates</option>

						

						<option value="GB">United Kingdom</option>

						

						<option value="US">United States of America</option>

						

						<option value="UY">Uruguay</option>

						

						<option value="UZ">Uzbekistan</option>

						

						<option value="VU">Vanuatu</option>

						

						<option value="VS">Vatican City State</option>

						

						<option value="VE">Venezuela</option>

						

						<option value="VN">Vietnam</option>

						

						<option value="VB">Virgin Islands (Brit)</option>

						

						<option value="VA">Virgin Islands (USA)</option>

						

						<option value="WK">Wake Island</option>

						

						<option value="WF">Wallis &amp; Futana Is</option>

						

						<option value="YE">Yemen</option>

						

						<option value="ZR">Zaire</option>

						

						<option value="ZM">Zambia</option>

						

						<option value="ZW">Zimbabwe</option>

						

					</select>
					@if ($errors->has('address'))
		                    <p class=" text-danger" >{{ $errors->first('address') }}</p>
		                 @endif
				</div>

				

				

				

				<div id="termstick">

					<input type="checkbox" value="1" name="agree" id="agree">

					

					<label for="agree">I confirm I have read and understood the <a href="/legals/termsofbusiness.asp" target="_blank">terms of business</a> and <a href="/legals/privacy.asp" target="_blank">privacy policy</a> and therefore am happy to proceed with my purchase and working with The Body Coach Online Nutrition Limited.</label>

					<input type="hidden" name="MC_termsoptinver" id="MC_termsoptinver" value="1">

					

					<hr>

					<input type="checkbox" value="1" name="MC_optin" id="MC_optin">

					

					<label for="MC_optin">If you wish to receive The Body Coach newsletter with helpful hints and tips, workouts, recipes, inspiration and great merchandise offers please tick this box.</label>

					

					

				</div>

				<input type="submit" class="toppush" name="submit" id="submit" value="Pay Now - Click Here">

			</form> 

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