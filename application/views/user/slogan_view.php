<div class="container" style="width:100%; height: 50%;">
	<!--<script src="<?php echo base_url(); ?>template/js/jquery-1.11.0.js"></script>-->
	<script src="<?php echo base_url(); ?>template/slider/jquery.bxslider.js"></script>
	<link href="<?php echo base_url(); ?>template/slider/jquery.bxslider.css" rel="stylesheet" />

	<ul class="bxslider" style="">
	  <!--<li><img src="<?php echo base_url(); ?>files/user/slider/1.jpg" /></li>
	  <li><img src="<?php echo base_url(); ?>files/user/slider/2.jpg" /></li>
	  <li><img src="<?php echo base_url(); ?>files/user/slider/3.jpg" /></li>-->
	  <?php 
	  $slogan_res = $this->db->get('tbl_slogan');
	  foreach($slogan_res->result() as $result_row)
	  {
	  	?>
	  	<li style="font-size: 2em;"><?php echo $result_row->slogan_name; ?></li>
	  	<?php
	  }
	  ?>

	</ul>

	<script>
	$(document).ready(function(){
	  $('.bxslider').bxSlider(
	  	{
	  auto: true
	});
	});
	</script>
	
</div>