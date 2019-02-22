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
<style>
.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}

.navbar-brand img {
    max-height: 60px;
    overflow: visible !important;
    background-color: rgba(0, 0, 0, 0.7);
    background: rgba(0, 0, 0, 0.7);
}


</style>
<script type="text/javascript">
	$(document).ready(function(){
		
	$(".toggle-password").click(function() {
		
		  $(this).toggleClass("fa-eye fa-eye-slash");
		  var input = $($(this).attr("toggle"));
		  if (input.attr("type") == "password") {
		    input.attr("type", "text");
		  } else {
		    input.attr("type", "password");
		  }
});

});
</script>


<div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
      <div class="navbar-inner">
        <div class="container">
           <div class="navigation">
             <nav id="colorNav">
			   <ul>
				<li class="green">
					<a href="#" class="icon-home"></a>
					<ul>
						<?php
							if(isset($_SESSION['member_id']))
							{
								?>
								<li><a href="<?php echo base_url(); ?>login/log_out">Logout</a></li>
								<li><a href="<?php echo base_url(); ?>profile">Profile</a></li>
								<li><a href="<?php echo base_url(); ?>user/change_password">Change Password</a></li>
								<?php
							}
							else
							{
								?>
								<li><a href='<?php echo base_url(); ?>login'>Login</a></li>
								<li><a href="<?php echo base_url(); ?>user/register">Register</a></li>
								<?php
							}
						?>
						
					    
					    
					    
					</ul>
				</li>
			   </ul>
             </nav>
           </div>
           <div class="navbar-header">
           	<a class="navbar-brand" href="index.html">
           		
           		<!-- logo -->
           	</a>	
           </div>
           
           <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2">
		      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"></a>
		   </div> 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
		            <li><a href="index.html">Home</a></li>
		            <li class="dropdown">
		            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="matches.html">History and Establishment</a></li>
		                <li><a href="viewed-profile.html">Managing Committee</a></li>
		                <li><a href="viewed-not_contacted.html">Life Time Members</a></li>
		                <li><a href="members.html">Committee Details</a></li>
		                <li><a href="shortlisted.html">Past President</a></li>
		                <li><a href="shortlisted.html">Origination Structure</a></li>
    		            <li><a href="shortlisted.html">Aims and Objective</a></li>
    		            <li><a href="shortlisted.html">Grant and Relief </a></li>
		              </ul>
		            </li>
		            <li><a href="index.html">Samast Samaj</a></li>
		            <li><a href="index.html">Event</a></li>

		    		<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="matches.html">Photos</a></li>
		                <li><a href="viewed-profile.html">Videos</a></li>
		              </ul>
		            </li>
					<li><a href="index.html">Donor</a></li> 		                
					<li><a href="index.html">Matrimonial</a></li>
					<li><a href="index.html">Download</a></li>
					<li><a href="index.html">Information</a></li>
					<li><a href="index.html">Contact Us</a></li>
		        </ul>
		     </div><!-- /.navbar-collapse -->
		    </nav>
		   </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->