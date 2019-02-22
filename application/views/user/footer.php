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
<div class="map">
	   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
    </div>
    <div class="footer">
    	<div class="container">
    		<div class="col-md-4 col_2">
    			<h4>About Us</h4>
    			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."</p>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Help & Support</h4>
    			<ul class="footer_links">
    				<li><a href="#">24x7 Live help</a></li>
    				<li><a href="<?php echo base_url() ?>home/contact_us">Contact us</a></li>
    				<li><a href="#">Feedback</a></li>
    				<li><a href="faq.html">FAQs</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Quick Links</h4>
    			<ul class="footer_links">
    				<li><a href="privacy.html">Privacy Policy</a></li>
    				<li><a href="terms.html">Terms and Conditions</a></li>
    				<li><a href="services.html">Services</a></li>
    			</ul>
    		</div>
    		<div class="col-md-2 col_2">
    			<h4>Social</h4>
    			<ul class="footer_social">
				  <li><a href="<?php echo $facebook_url; ?>"><i class="fa fa-facebook fa1"> </i></a></li>
				  <li><a href="<?php echo $twitter_url;?>"><i class="fa fa-twitter fa1"> </i></a></li>
				  <li><a href="<?php echo $google_plus_url;?>"><i class="fa fa-google-plus fa1"> </i></a></li>
			    </ul>
    		</div>
    		<div class="clearfix"> </div>
    		<div class="copy">
		      <p>Copyright © 2015 Marital . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	        </div>
    	</div>
    </div>