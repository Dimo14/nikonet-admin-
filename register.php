
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>username-reminder-request</title>
	<link rel="stylesheet" type="text/css" href="./cssfiles-back/clients.css">
</head>
<body>
<!-- header section starts -->
<div class="navlinks">
	<div class="nikonet_logo">
		<img src=" logo 1.png" id="logo">
	</div>
</div>
<br><br>
<br><br>
<br><br>
<hr>
<br><br>
<div class="control-group field-spacer">
			<div class="control-label">
			<span class="spacer"><span class="before"></span><span class="text"><label id="jform_spacer-lbl" class=""><strong class="red">*</strong> Required field</label></span><span class="after"></span></span>					</div>
		<div class="controls">
		 	</div>
</div>

<div class="control-group">
			<div class="control-label">
			<label id="jform_name-lbl" for="jform_name" class="hasPopover required" title="Name" data-content="Enter your full name.">
	Name<span class="star">;*</span></label>
					</div>
		<div class="controls">
		<input type="text" name="jform[name]" id="jform_name"  value="" class="required" size="30"       required aria-required="true"      />
	</div>
</div>

<div class="control-group">
			<div class="control-label">
			<label id="jform_username-lbl" for="jform_username" class="hasPopover required" title="Username" data-content="Enter your desired username.">
	Username<span class="star">&#160;*</span></label>
					</div>
		<div class="controls">
		<input type="text" name="jform[username]" id="jform_username"  value="" class="validate-username required" size="30"       required aria-required="true"      />
	</div>
</div>

<div class="control-group">
			<div class="control-label">
			<label id="jform_password1-lbl" for="jform_password1" class="hasPopover required" title="Password" data-content="Enter your desired password.">
	Password<span class="star">&#160;*</span></label>
					</div>
		<div class="controls">
		<input
	type="password"
	name="jform[password1]"
	id="jform_password1"
	value=""
	 autocomplete="off" class="validate-password required"   size="30" maxlength="99" required aria-required="true" />	</div>
</div>

<div class="control-group">
			<div class="control-label">
			<label id="jform_password2-lbl" for="jform_password2" class="hasPopover required" title="Confirm Password" data-content="Confirm your password.">
	Confirm Password<span class="star">&#160;*</span></label>
					</div>
		<div class="controls">
		<input
	type="password"
	name="jform[password2]"
	id="jform_password2"
	value=""
	 autocomplete="off" class="validate-password required"   size="30" maxlength="99" required aria-required="true" />	</div>
</div>

<div class="control-group">
			<div class="control-label">
			<label id="jform_email1-lbl" for="jform_email1" class="hasPopover required" title="Email Address" data-content="Enter your email address.">
	Email Address<span class="star">&#160;*</span></label>
					</div>
		<div class="controls">
		<input type="email" name="jform[email1]" class="validate-email required" id="jform_email1" value=""
 size="30"    autocomplete="email"    required aria-required="true"  />	</div>
</div>

<div class="control-group">
			<div class="control-label">
			<label id="jform_email2-lbl" for="jform_email2" class="hasPopover required" title="Confirm Email Address" data-content="Confirm your email address.">
	Confirm Email Address<span class="star">&#160;*</span></label>
					</div>
		<div class="controls">
		<input type="email" name="jform[email2]" class="validate-email required" id="jform_email2" value=""
 size="30"        required aria-required="true"  />	</div>
</div>

<div class="control-group">
			<div class="control-label">
			<label id="jform_captcha-lbl" for="jform_captcha" class="hasPopover required" title="Captcha" data-content="Please complete the security check.">
	Captcha<span class="star">&#160;*</span></label>
					</div>
		<div class="controls">
		<div id="jform_captcha" class="h-captcha required" data-sitekey="edc50c75-7db0-4ab2-bb8f-267b1eb0c376" data-theme="light" data-size="normal"></div>	</div>
</div>
				</fieldset>
															<fieldset>
																<legend>Web Site Privacy</legend>
										<div class="alert alert-info">By signing up to this web site and agreeing to the Privacy Policy you agree to this web site storing your information. </br>
The Privacy Policy can be found <a class="alert-link" href="https://www.joomla.org/privacy-policy.html" target="_blank">here</a>.</div>
<div class="control-group">
			<div class="control-label">
			<label id="jform_privacyconsent_privacy-lbl" for="jform_privacyconsent_privacy" class="hasPopover required" title="Privacy Policy" data-content="Read the full privacy policy">Privacy Policy<span class="star">&#160;*</span></label>					</div>
		<div class="controls">
		<fieldset id="jform_privacyconsent_privacy" class="required radio"
			required aria-required="true"	>
<input type="radio" id="jform_privacyconsent_privacy0" name="jform[privacyconsent][privacy]" value="1" required aria-required="true" />	
		<label for="jform_privacyconsent_privacy0" >
				I agree			</label>
					
<input type="radio" id="jform_privacyconsent_privacy1" name="jform[privacyconsent][privacy]" value="0" checked="checked" required aria-required="true" />			
<label for="jform_privacyconsent_privacy1" >
				No			</label>
			</fieldset>
	</div>
</div>
				</fieldset>
							<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-primary validate">
					Register				</button>
				<a class="btn" href="/" title="Cancel">
					Cancel				</a>
				<input type="hidden" name="option" value="com_users" />
				<input type="hidden" name="task" value="registration.register" />
			</div>
		</div>
		<input type="hidden" name="ee98a2a033721d4ecb501f951ce95c43" value="1" />	</form>
</div>

				<!-- End Content -->
			</div>
					</div>
	</div>
	        <div class="container jed-banner-bottom">
 <footer>
 	<div class="under">
 		&copy;copyright 2021<b id="see"> NIKONET TELCOM </b> To report a problem, call us 24 hours,7 days a week on <b id="see">+256(0)756840320,</b> Or Email us at  <a href="bharat@kalitech.llc">bharat@kalitech.llc</a> 		
 	</div>
 </footer>
<!-- footer section ends -->
</body>
</html>