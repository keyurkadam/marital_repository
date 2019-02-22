<?php 
$settings_logo=$facebook_url=$google_plus_url=$twitter_url=$pinterest_url=$instagram_url=$settings_address=$settings_phone=$settings_email="";
$settings_res = $this->db->get("tbl_settings");

foreach($settings_res->result() as $setting_row)
{
    $settings_logo=$setting_row->settings_logo;
    $facebook_url=$setting_row->facebook_url;
    $google_plus_url=$setting_row->google_plus_url;
    $twitter_url=$setting_row->twitter_url;
    $pinterest_url=$setting_row->pinterest_url;
    $instagram_url=$setting_row->instagram_url;
    $min_single_qty=$setting_row->settings_single_min_qty;
    $min_total_qty=$setting_row->settings_total_min_qty;
    $settings_address=$setting_row->settings_address;
    $settings_phone=$setting_row->settings_phone;
    $settings_email=$setting_row->settings_contact_email;
}
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="<?php echo base_url(); ?>template/user/css/my.css" rel='stylesheet' type='text/css' />
<style type="text/css" xml:space="preserve">
.error_strings{ font-family:Verdana; font-size:14px; color:white; }
</style>
<script language="JavaScript" src="<?php echo base_url(); ?>template/user/js/gen_validatorv4.js"
    type="text/javascript" xml:space="preserve"></script>
<!DOCTYPE html>
<html>
    
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"crossorigin="anonymous">
</head>
<!--Coded with love by Mutiullah Samim-->
<body >
	<div style="background-image: url('<?php echo base_url(); ?>template/user/images/login_bg2.jpg');">"
	<div class="container h-100" >
		<div class="d-flex justify-content-center h-100" >
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="<?php echo base_url(); ?>files/admin/logo/<?php echo $settings_logo;?>" class="brand_logo" style=" " alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<!-- <?php echo validation_errors(); ?> -->
					<form action="<?php echo base_url(); ?>login/login_check" method="post" id="formvalid" name="formvalid">
						
						<div id="formvalid_txt_email_errorloc" class="error_strings" style="padding-left: 50px;"></div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fa fa-user"></i></span>
							</div>
							<input type="text" name="txt_email" id="txt_email" class="form-control input_user" value="" placeholder="Email">
						</div>
						<div id="formvalid_txt_password_errorloc" class="error_strings" style="padding-left: 50px;"></div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="txt_password" id="txt_password" class="form-control input_pass" value="" placeholder="Password">
						</div>
						
						<!-- <div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div> -->
					<div class="d-flex justify-content-center mt-3 login_container">
					<input type="submit" name="button" class="btn login_btn" value="Login">
				</div>
			</form>
				</div>
				
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="<?php echo base_url(); ?>user/register" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



</body>
</html>
<script language="JavaScript" type="text/javascript"
    xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("formvalid");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    // frmvalidator.addValidation("txt_email","req","Please enter your User Name");
    // frmvalidator.addValidation("txt_uname","maxlen=10",	"Max length for username is 10");
	// frmvalidator.addValidation("txt_uname","alnum",	"Please enter alpha numeric data");
	frmvalidator.addValidation("txt_email","req", "Enter your email address ");
	frmvalidator.addValidation("txt_email","email", "Enter your email address in proper format");
	frmvalidator.addValidation("txt_password","req", "Enter your Password ");
	// frmvalidator.addValidation("cmb_country","dontselect=0",	"Please select any country");
	// frmvalidator.addValidation("rdo_gender","selone",	"Please select any gender");
	// frmvalidator.addValidation("img_file","req_file",	"Please select any image for uploading");
	
	// frmvalidator.addValidation("img_file","file_extn=jpg;jpeg;gif;png;ico;bmp",	"file should be in proper format");
	
/*	frmvalidator.addValidation("Fname","req","Please enter your First Name");
    frmvalidator.addValidation("Fname","maxlen=20",	"Max length for FirstName is 20");

    frmvalidator.addValidation("Email","maxlen=50");
    frmvalidator.addValidation("Email","req");
    frmvalidator.addValidation("Email","email");
	*/
//]]></script>