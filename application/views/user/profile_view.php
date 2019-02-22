<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<!DOCTYPE HTML>
<html>
   <head>
      <title>Marital an Wedding Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="Marital Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
      <?php 
         include_once('head_file.php');
      ?>
      <script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
   </head>
   <body>
      <!-- ============================  Navigation Start =========================== -->
      <?php 
         include_once('header.php');
      ?>
      <!-- ============================  Navigation End ============================ -->
      <?php 
         //include_once('banner_view.php');
         //include_once('slider_view.php');
      ?>
 <div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="<?php echo base_url(); ?>"><i class="fa fa-edit home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Edit Profile</li>
        <!-- <li style="margin-left: 80%;">CLick Here To <a>Edit Profile</a></li> -->
     </ul>
   </div>
   <center>
   <?php 
      foreach ($resultset->result() as $row) 
      {
         ?>

    
   <div class="profile">
       <div class="">
         <h2>Profile Id : <?php echo $row->member_id;?></h2>
         <div class="col_3">
              <div class="col-sm-4 row_2">
            <div class="flexslider">
                <ul class="slides">
                  <li data-thumb="<?php echo base_url();?>template/user/images/<?php echo $row->member_photo1; ?>">
                     <img src="<?php echo base_url();?>template/user/images/<?php echo $row->member_photo1; ?>" />
                  </li>
                  <li data-thumb="<?php echo base_url();?>template/user/images/<?php echo $row->member_photo2; ?>">
                     <img src="<?php echo base_url();?>template/user/images/<?php echo $row->member_photo2; ?>" />
                  </li>
                  <li data-thumb="<?php echo base_url();?>template/user/images/<?php echo $row->member_photo3; ?>">
                     <img src="<?php echo base_url();?>template/user/images/<?php echo $row->member_photo3; ?>" />
                  </li>
                  <li data-thumb="<?php echo base_url();?>template/user/images/<?php echo $row->member_photo4; ?>">
                     <img src="<?php echo base_url();?>template/user/images/<?php echo $row->member_photo4; ?>" />
                  </li>
                </ul>
              </div>
         </div>
         <div class="col-sm-8 row_1">
            <table class="table_working_hours">
               <tbody>
                  <tr class="opened_1">
                     <td class="day_label">Age</td>
                     <td class="day_value"><?php echo $row->member_age; ?></td>
                  </tr>
                  <tr class="opened">
                     <td class="day_label">Mobile No :</td>
                     <td class="day_value"><?php echo $row->member_mobile_no;?></td>
                  </tr>
                  <tr class="opened">
                     <td class="day_label">Email :</td>
                     <td class="day_value"><?php echo $row->member_email;?></td>
                  </tr>
                   <tr class="opened">
                     <td class="day_label">Marital Status :</td>
                     <td class="day_value"><?php echo $row->member_marital_status; ?></td>
                  </tr>
                   <tr class="opened">
                     <td class="day_label">Height / Weight :</td>
                     <td class="day_value"><?php echo $row->member_height; ?>cm , <?php echo $row->member_weight; ?></td>
                  </tr>
                   <tr class="opened">
                     <td class="day_label">Location :</td>
                     <td class="day_value"><?php echo $row->country_id;?></td>
                  </tr>
                   <tr class="closed">
                     <td class="day_label">Education :</td>
                     <td class="day_value closed"><span><?php echo $row->member_education;?></span></td>
                  </tr>
                </tbody>
            </table>
           
         </div>
         <div class="clearfix"> </div>
      </div>
      <div class="col_4">
          <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
              <li role="presentation" class="active"><a href="#myself" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>

              <li role="presentation"><a href="#birth" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Birth Details</a></li>

              <li role="presentation"><a href="#family" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Family Details</a></li>

              <li role="presentation"><a href="#education" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Education/Occupation Details</a></li>

              <li role="presentation"><a href="#other" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Others Details</a></li>

              <li role="presentation"><a href="#photo" id="profile-tab" role="tab" data-toggle="tab" aria-controls="profile">Photos</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active" id="myself" aria-labelledby="home-tab">
                <form method="post" action="<?php echo base_url(); ?>profile/update_info/myself">
                    <div class="col-md-6 basic_1-left">
                      
                      <table class="table_working_hours">
                       <tbody>
                          <tr class="opened_1">
                             <td class="day_label">Name :</td>
                             <td class="day_value"><input class="form-control has-dark-background" name="txt_fullname" id="txt_fullname"  type="text" required="" value="<?php echo $row->member_name; ?>"></td>
                          </tr>
                          <tr class="opened_1">
                             <td class="day_label">Gender :</td>
                             <td class="day_value"><input type="radio" id="rdo_gender" name="rdo_gender" value="male" class="radio_1" <?php if($row->member_gender=='Male') echo "checked='checked'"; ?>/> Male &nbsp;&nbsp;
                          <input type="radio" id="rdo_gender" name="rdo_gender" value="female" class="radio_1" <?php if($row->member_gender=='Female') echo "checked='checked'"; ?>/>  Female</td>
                          </tr>
                          <tr class="opened_1">
                             <td class="day_label">Address :</td>
                             <td class="day_value">
                               <textarea rows="4" cols="65" id="txt_address" name="txt_address"><?php echo $row->member_address; ?></textarea>
                             </td>
                          </tr>
                           <tr class="opened">
                             <td class="day_label">Marital Status :</td>
                             <td class="day_value"><input type="radio" class="radio_1" id="rdo_marital_status" name="rdo_marital_status" value="Single"  <?php if($row->member_marital_status=='Single') echo "checked='checked'"; ?> /> Single &nbsp;&nbsp;
                          <input type="radio" class="radio_1"  id="rdo_marital_status" name="rdo_marital_status" value="Divorced" <?php if($row->member_marital_status=='Divorced') echo "checked='checked'"; ?>/> Divorced &nbsp;&nbsp;
                          <input type="radio" class="radio_1" id="rdo_marital_status" name="rdo_marital_status"  value="Widowed" <?php if($row->member_marital_status=='Windowed') echo "checked='checked'"; ?> /> Widowed &nbsp;&nbsp;
                          <input type="radio" class="radio_1" id="rdo_marital_status" name="rdo_marital_status"  value="Separated" <?php if($row->member_marital_status=='Separated') echo "checked='checked'"; ?> /> Separated &nbsp;&nbsp;</td>
                          </tr>
                           <tr class="opened">
                             <td class="day_label">Body Type :</td>
                             <td class="day_value"><input type="radio" class="radio_1" id="rdo_body_type" name="rdo_body_type" value="Athletic"  <?php if($row->member_body_type=='Athletic') echo "checked='checked'"; ?> /> Athletic &nbsp;&nbsp;
                          <input type="radio" class="radio_1"  id="rdo_body_type" name="rdo_body_type" value="Average" <?php if($row->member_body_type=='Average') echo "checked='checked'"; ?>/> Average &nbsp;&nbsp;
                          <input type="radio" class="radio_1" id="rdo_body_type" name="rdo_body_type"  value="Slim" <?php if($row->member_body_type=='Slim') echo "checked='checked'"; ?>  /> Slim &nbsp;&nbsp;
                          <input type="radio" class="radio_1" id="rdo_body_type" name="rdo_body_type"  value="Fat" <?php if($row->member_body_type=='Fat') echo "checked='checked'"; ?>/> Fat &nbsp;&nbsp;</td>
                          </tr>
                           <tr class="opened">
                             <td class="day_label">Height :</td>
                             <td class="day_value"><input class="form-control has-dark-background" name="txt_height" id="txt_height" value="<?php echo $row->member_height; ?>cm"  type="text" required="">
                              </td>
                          </tr>
                           <tr class="opened">
                             <td class="day_label">Physical Disable :</td>
                             <td class="day_value closed"><span>
                              <input type="radio" id="rdo_physical_disable" name="rdo_physical_disable" value="Yes" class="radio_1" <?php if($row->member_physical_disable=='Yes') echo "checked='checked'"; ?>/> Yes  &nbsp;&nbsp;
                          <input type="radio" id="rdo_physical_disable" name="rdo_physical_disable" value="No" class="radio_1" <?php if($row->member_physical_disable=='No') echo "checked='checked'"; ?> /> No</span></td>
                          </tr>
                           
                          <tr class="opened">
                             <td class="day_label">Drink :</td>
                             <td class="day_value closed"><span>
                              <input type="radio" id="rdo_drink" name="rdo_drink" value="Yes" class="radio_1" <?php if($row->member_drink=='Yes') echo "checked='checked'"; ?>/> Yes &nbsp;&nbsp;
                          <input type="radio" id="rdo_drink" name="rdo_drink" value="No" class="radio_1" <?php if($row->member_physical_disable=='No') echo "checked='checked'"; ?>  /> No
                              </span></td>
                          </tr>
                          <tr class="opened">
                             <td class="day_label">Country :</td>
                             <td class="day_value closed"><span>
                              <select  style="color:black" id="cmb_country" name="cmb_country" onchange="get_state(this.value)">
                                <option>--Select Any--</option>
                                <?php 
                                $country_res=$this->db->get("tbl_country");
                                foreach($country_res->result() as $country_row)
                                {
                                   ?>
                                   <option value='<?php echo $country_row->country_id; ?>'><?php echo $country_row->country_name; ?></option>
                                   <?php
                                }
                                ?>
                             </select> 
                              </span></td>
                          </tr>
                          <tr class="opened">
                             <td class="day_label">State :</td>
                             <td class="day_value closed"><span>
                              <select style="color:black" id="cmb_state" name="cmb_state" onchange="get_city(this.value)">
                                <option>--Select Any--</option>
                             </select> 
                              </span></td>
                          </tr>
                          <tr class="opened">
                             <td class="day_label">City :</td>
                             <td class="day_value closed"><span>
                                <select  style="color:black" id="cmb_city" name="cmb_city">
                                <option>--Select Any--</option>
                             </select>
                              </span></td>
                          </tr>
                          <tr class="opened_1">
                             <td class="day_label">Other City :</td>
                             <td class="day_value"><input class="form-control has-dark-background" name="txt_other_city" id="txt_other_city"  type="text" required="" value="<?php echo $row->member_other_city; ?>" ></td>
                          </tr>
                          <tr class="opened_1">
                             <td class="day_label">Postal Code :</td>
                             <td class="day_value"><input class="form-control has-dark-background" name="txt_postal_code" id="txt_postal_code"  type="text" required="" value="<?php echo $row->member_postal_code; ?>"></td>
                          </tr>
                          <tr class="opened_1">
                             <td class="day_label">Name of Head of Gol/Panch :</td>
                             <td class="day_value"><input class="form-control has-dark-background" name="txt_gol" id="txt_gol"  type="text" required="" value="<?php echo $row->member_gol; ?>"></td>
                          </tr>
                        </tbody>
                        </table>
                      </div>

                    <div class="col-md-6 basic_1-left">
                      <table class="table_working_hours">
                     <tbody>
                        <tr class="opened_1">
                           <td class="day_label">Email :</td>
                           <td class="day_value"><input class="form-control has-dark-background" name="txt_email" id="txt_email"  type="text" required="" value="<?php echo $row->member_email; ?>"></td>
                        </tr>
                        <tr class="opened_1">
                           <td class="day_label">Contact Number :</td>
                           <td class="day_value"><input class="form-control has-dark-background" name="txt_contact" id="txt_contact"  type="text" required="" value="<?php echo $row->member_phone; ?>"></td>
                        </tr>
                        <tr class="opened_1">
                           <td class="day_label">Mobile Number :</td>
                           <td class="day_value"><input class="form-control has-dark-background" name="txt_mobile" id="txt_mobile"  type="text" required="" value="<?php echo $row->member_mobile_no; ?>"></td>
                        </tr>
                        <tr class="opened_1">
                           <td class="day_label">Discription :</td>
                           <td class="day_value">
                             <textarea rows="4" cols="65" id="txt_desc" name="txt_desc"><?php echo $row->member_desc; ?></textarea>
                           </td>
                        </tr>
                        <tr class="opened_1">
                           <td class="day_label">Age :</td>
                           <td class="day_value"><input class="form-control has-dark-background" name="txt_age" id="txt_age" value="<?php echo $row->member_age; ?>"  type="text" required=""></td>
                        </tr>
                         <tr class="opened">
                           <td class="day_label">Mother Tongue :</td>
                           <td class="day_value">
                            <select  style="color:black" id="cmb_mother_tounge" name="cmb_mother_tounge">
                              <option>--Select Any--</option>
                              <?php 
                              $tongue_res=$this->db->get("tbl_mother_tongue");
                              foreach($tongue_res->result() as $tongue_row)
                              {
                                 ?>
                                 <option value='<?php echo $tongue_row->mother_tongue_id; ?>'><?php echo $tongue_row->mother_tongue_name; ?></option>
                                 <?php
                              }
                              ?>
                           </select> 


                           </td>
                        </tr>
                         <tr class="opened">
                           <td class="day_label">Complexion :</td>
                           <td class="day_value">
                             <input type="radio" class="radio_1" id="rdo_skin_tone" name="rdo_skin_tone" value="Very Fair"  <?php if($row->member_skin_tone=='Very Fair') echo "checked='checked'"; ?> /> Very Fair &nbsp;&nbsp;
                        <input type="radio" class="radio_1"  id="rdo_skin_tone" name="rdo_skin_tone" value="Fair" <?php if($row->member_skin_tone=='Fair') echo "checked='checked'"; ?>/> Fair &nbsp;&nbsp;
                        <input type="radio" class="radio_1" id="rdo_skin_tone" name="rdo_skin_tone"  value="Tan" <?php if($row->member_skin_tone=='Tan') echo "checked='checked'"; ?> /> Tan &nbsp;&nbsp;
                        <input type="radio" class="radio_1" id="rdo_skin_tone" name="rdo_skin_tone"  value="Dark" <?php if($row->member_skin_tone=='Dark') echo "checked='checked'"; ?>/> Dark &nbsp;&nbsp;

                           </td>
                        </tr>
                         <tr class="opened">
                           <td class="day_label">Weight :</td>
                           <td class="day_value"><input class="form-control has-dark-background" name="txt_weight" id="txt_weight" value="<?php echo $row->member_weight; ?>" type="text" required=""></td>
                        </tr>
                         <tr class="opened">
                           <td class="day_label">Blood Group :</td>
                           <td class="day_value">
                             <input type="radio" class="radio_1" id="rdo_blood_group" name="rdo_blood_group" value="A+" <?php if($row->member_blood_group=='A+') echo "checked='checked'"; ?>  /> A+ &nbsp;&nbsp;
                        <input type="radio" class="radio_1"  id="rdo_blood_group" name="rdo_blood_group" value="O+" <?php if($row->member_blood_group=='O+') echo "checked='checked'"; ?>/> O+ &nbsp;&nbsp;
                        <input type="radio" class="radio_1" id="rdo_blood_group" name="rdo_blood_group"  value="B+" <?php if($row->member_blood_group=='B+') echo "checked='checked'"; ?> /> B+ &nbsp;&nbsp;
                        <input type="radio" class="radio_1" id="rdo_blood_group" name="rdo_drdo_blood_groupiet"  value="A-" <?php if($row->member_blood_group=='A-') echo "checked='checked'"; ?> /> A- &nbsp;&nbsp;
                        <input type="radio" class="radio_1" id="rdo_blood_group" name="rdo_blood_group"  value="B-" <?php if($row->member_blood_group=='B-') echo "checked='checked'"; ?>/> B- &nbsp;&nbsp;
                        <input type="radio" class="radio_1" id="rdo_blood_group" name="rdo_blood_group"  value="O-" <?php if($row->member_blood_group=='O-') echo "checked='checked'"; ?>/> O- &nbsp;&nbsp;
                        <input type="radio" class="radio_1" id="rdo_blood_group" name="rdo_blood_group"  value="AB+" <?php if($row->member_blood_group=='AB+') echo "checked='checked'"; ?>/> AB+ &nbsp;&nbsp;
                        <input type="radio" class="radio_1" id="rdo_blood_group" name="rdo_blood_group"  value="AB-" <?php if($row->member_blood_group=='AB-') echo "checked='checked'"; ?>/> AB- &nbsp;&nbsp;

                           </td>
                        </tr>
                         <tr class="closed">
                           <td class="day_label">Diet :</td>
                           <td class="day_value closed"><span>
                             <input type="radio" class="radio_1" id="rdo_diet" name="rdo_diet" value="Veg"  <?php if($row->member_diet=='Veg') echo "checked='checked'"; ?> /> Veg &nbsp;&nbsp;
                        <input type="radio" class="radio_1"  id="rdo_diet" name="rdo_diet" value="Non-Veg" <?php if($row->member_diet=='Non-Veg') echo "checked='checked'"; ?> /> Non-Veg &nbsp;&nbsp;
                        <input type="radio" class="radio_1" id="rdo_diet" name="rdo_diet"  value="Occasionally Non-veg" <?php if($row->member_diet=='Occasionally Non-Veg') echo "checked='checked'"; ?>  /> Occasionally Non-veg &nbsp;&nbsp;
                        <input type="radio" class="radio_1" id="rdo_diet" name="rdo_diet"  value="Eggetarian" <?php if($row->member_diet=='Eggetarian') echo "checked='checked'"; ?> /> Eggetarian &nbsp;&nbsp;
                        <input type="radio" class="radio_1" id="rdo_diet" name="rdo_diet"  value="Jain" <?php if($row->member_diet=='Jain') echo "checked='checked'"; ?>  /> Jain &nbsp;&nbsp;
                        <input type="radio" class="radio_1" id="rdo_diet" name="rdo_diet"  value="Vegan" <?php if($row->member_diet=='Vegan') echo "checked='checked'"; ?> /> Vegan &nbsp;&nbsp;

                           </span></td>
                        </tr>
                         <tr class="closed">
                           <td class="day_label">Smoke :</td>
                           <td class="day_value closed"><span>
                             <input type="radio" id="rdo_smoke" name="rdo_smoke" value="Yes" class="radio_1"  <?php if($row->member_smoke=='Yes') echo "checked='checked'"; ?> /> Yes &nbsp;&nbsp;
                        <input type="radio" id="rdo_smoke" name="rdo_smoke" value="No" class="radio_1"  <?php if($row->member_smoke=='No') echo "checked='checked'"; ?> /> No

                           </span></td>
                        </tr>
                      </tbody>
                        </table>
                    </div>
                     <input type="submit" name="btn_myself_submit">
                 </form>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="birth" aria-labelledby="profile-tab">
                <form method="post" action="<?php echo base_url(); ?>profile/update_info/birth">
                <div class="col-md-6 basic_1-left">
                    <table class="table_working_hours">
                     <tbody>
                        <tr class="opened">
                           <td class="day_label">Birth Date :</td>
                           <td class="day_value"><input class="form-control has-dark-background" name="txt_dob" id="txt_dob"  type="date" value="<?php echo $row->member_dob; ?>" required=""></td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Birth Place :</td>
                           <td class="day_value"><input class="form-control has-dark-background" name="txt_birth_place" id="txt_birth_place"  type="text" required=""  value="<?php echo $row->member_birth_place; ?>" ></td>
                        </tr>
                         <tr class="opened">
                           <td class="day_label">Birth Time :</td>
                           <td class="day_value closed"><span>
                             <input class="form-control has-dark-background" name="txt_birth_time" id="txt_birth_time"  type="time" required="" value="<?php echo $row->member_birth_time; ?>">
                           </span></td>
                        </tr>
                         <tr class="opened">
                           <td class="day_label">Do You Believe in Horoscope :</td>
                           <td class="day_value closed"><span>
                             <input type="radio" id="rdo_belive_horoscope" name="rdo_belive_horoscope" value="yes" class="radio_1" <?php if($row->member_belive_horoscope=='Yes') echo "checked='checked'"; ?> /> Yes &nbsp;&nbsp;
                        <input type="radio" id="rdo_belive_horoscope" name="rdo_belive_horoscope" value="no" class="radio_1" <?php if($row->member_belive_horoscope=='No') echo "checked='checked'"; ?> /> No
                           </span></td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Do You have Saturn(Shani) or Mars(Mangal) in your kundali? :</td>
                           <td class="day_value closed"><span>
                             <input type="radio" id="rdo_shani_mangal" name="rdo_shani_mangal" value="yes" class="radio_1" <?php if($row->member_shani_mangal=='Yes') echo "checked='checked'"; ?> /> Yes &nbsp;&nbsp;
                        <input type="radio" id="rdo_shani_mangal" name="rdo_shani_mangal" value="no" class="radio_1" <?php if($row->member_shani_mangal=='No') echo "checked='checked'"; ?>  /> No
                           </span></td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">If Yes then Whom?(Saturn(Shani) or Mars(Mangal)) :</td>
                           <td class="day_value closed"><span>
                             <input class="form-control has-dark-background" name="txt_shani_mangal" id="txt_shani_mangal"  type="text" required="" value="<?php echo $row->member_shani_mangal_desc; ?>">
                           </span></td>
                        </tr>
                      </tbody>
                      </table>
                     </div>
                     <input type="submit" name="btn_birth">
                   </form>

             </div>
             <div role="tabpanel" class="tab-pane fade" id="family" aria-labelledby="profile-tab1">
              <form method="post" action="<?php echo base_url(); ?>profile/update_info/family">
                <div class="col-md-6 basic_1-left">
                    <table class="table_working_hours">
                     <tbody>
                        <tr class="opened">
                           <td class="day_label">Father Name :</td>
                           <td class="day_value"><input class="form-control has-dark-background" name="txt_father_name" id="txt_father_name"  type="text" required="" value="<?php echo $row->member_father_name; ?>"></td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Mother And Father Is Alive? :</td>
                           <td class="day_value">
                            <input type="radio" id="rdo_mother_father_alive" name="rdo_mother_father_alive" value="yes" class="radio_1" <?php if($row->member_parents_alive=='Yes') echo "checked='checked'"; ?>/> Yes &nbsp;&nbsp;
                        <input type="radio" id="rdo_mother_father_alive" name="rdo_mother_father_alive" value="no" class="radio_1" <?php if($row->member_parents_alive=='No') echo "checked='checked'"; ?>  /> No                             
                           </td>
                        </tr>
                         <tr class="opened">
                           <td class="day_label">Father Occupation :</td>
                           <td class="day_value closed"><span>
                             <input class="form-control has-dark-background" name="txt_father_occupation" id="txt_father_occupation"  type="text" required="" value="<?php echo $row->member_father_occupation; ?>">
                           </span></td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Mother Occupation :</td>
                           <td class="day_value closed"><span>
                             <input class="form-control has-dark-background" name="txt_mother_occupation" id="txt_mother_occupation"  type="text" required="" value="<?php echo $row->member_mother_occupation; ?>">
                           </span></td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Number Of Brothers :</td>
                           <td class="day_value closed"><span>
                             <select  style="color:black" id="txt_no_of_brothers" name="txt_no_of_brothers" 
                             >
                              <option>--Select Any--</option>
                              <option <?php if($row->member_brother=='0') echo "selected"; ?>>0</option>
                              <option <?php if($row->member_brother=='1') echo "selected"; ?>>1</option>
                              <option <?php if($row->member_brother=='2') echo "selected"; ?>>2</option>
                              <option <?php if($row->member_brother=='3') echo "selected"; ?>>3</option>  
                              <option <?php if($row->member_brother=='4') echo "selected"; ?>>4</option>  
                              <option <?php if($row->member_brother=='5') echo "selected"; ?>>5</option>  
                              </select>
                           </span></td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Number Of Sisters :</td>
                           <td class="day_value closed"><span>
                             <select  style="color:black" id="txt_no_of_sisters" name="txt_no_of_sisters">
                              <option>--Select Any--</option>
                              <option <?php if($row->member_sister=='0') echo "selected"; ?>>0</option>
                              <option <?php if($row->member_sister=='1') echo "selected"; ?>>1</option>
                              <option <?php if($row->member_sister=='2') echo "selected"; ?>>2</option>
                              <option <?php if($row->member_sister=='3') echo "selected"; ?>>3</option>  
                              <option <?php if($row->member_sister=='4') echo "selected"; ?>>4</option>  
                              <option <?php if($row->member_sister=='5') echo "selected"; ?>>5</option>  
                              </select>
                           </span></td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Number Of Married Brothers :</td>
                           <td class="day_value closed"><span>
                             <select  style="color:black" id="txt_no_of_brothers_married" name="txt_no_of_brothers_married">
                              <option>--Select Any--</option>
                              <option <?php if($row->member_married_brother=='0') echo "selected"; ?>>0</option>
                              <option <?php if($row->member_married_brother=='1') echo "selected"; ?>>1</option>
                              <option <?php if($row->member_married_brother=='2') echo "selected"; ?>>2</option>
                              <option <?php if($row->member_married_brother=='3') echo "selected"; ?>>3</option>  
                              <option <?php if($row->member_married_brother=='4') echo "selected"; ?>>4</option>  
                              <option <?php if($row->member_married_brother=='5') echo "selected"; ?>>5</option>  
                              </select>
                           </span></td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Number Of Married Sisters :</td>
                           <td class="day_value closed"><span>
                             <select  style="color:black" id="txt_no_of_sisters_married" name="txt_no_of_sisters_married">
                              <option>--Select Any--</option>
                              <option <?php if($row->member_married_sister=='0') echo "selected"; ?>>0</option>
                              <option <?php if($row->member_married_sister=='1') echo "selected"; ?>>1</option>
                              <option <?php if($row->member_married_sister=='2') echo "selected"; ?>>2</option>
                              <option <?php if($row->member_married_sister=='3') echo "selected"; ?>>3</option>  
                              <option <?php if($row->member_married_sister=='4') echo "selected"; ?>>4</option>  
                              <option <?php if($row->member_married_sister=='5') echo "selected"; ?>>5</option>  
                              </select>
                           </span></td>
                        </tr>
                      </tbody>
                      </table>
                     </div>
                     <input type="submit" name="btn_family">
                   </form>
             </div>
             <div role="tabpanel" class="tab-pane fade" id="education" arial-labelledby="education-tab">
              <form method="post" action="<?php echo base_url(); ?>profile/update_info/education">
               <div class="col-md-6 basic_1-left">
                    <table class="table_working_hours">
                     <tbody>
                        <tr class="opened">
                           <td class="day_label">Education :</td>
                           <td class="day_value"><input class="form-control has-dark-background" name="txt_education" id="txt_education" type="text" required="" value="<?php echo $row->member_education; ?>"></td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Occupation :</td>
                           <td class="day_value">
                             <select  style="color:black" id="cmb_occupation" name="cmb_occupation">
                              <option >--Select Any--</option>
                              <option <?php if($row->member_occupation=='Business') echo "selected"; ?>>Business</option>
                              <option <?php if($row->member_occupation=='Business/Service') echo "selected"; ?>>Business/Service</option>
                              <option <?php if($row->member_occupation=='Business/Study') echo "selected"; ?>>Business/Study</option>
                              <option <?php if($row->member_occupation=='Goverment Job') echo "selected"; ?>>Government Job</option>  
                              <option <?php if($row->member_occupation=='Service') echo "selected"; ?>>Service</option>  
                              <option <?php if($row->member_occupation=='Service/Study') echo "selected"; ?>>Service/Study</option>  
                              <option <?php if($row->member_occupation=='Study') echo "selected"; ?>>Study</option>  
                              <option <?php if($row->member_occupation=='Not Applicable') echo "selected"; ?>>Not Applicable</option>     
                              <option <?php if($row->member_occupation=='Government Job') echo "selected"; ?>>Government Job</option>  
                              <option <?php if($row->member_occupation=='Other') echo "selected"; ?>>Other</option>  
                           </select>
                           </td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Other Occupation :</td>
                           <td class="day_value"><input class="form-control has-dark-background" name="txt_other_occupation" id="txt_other_occupation"  type="text" required="" value="<?php echo $row->member_other_occupation;?>"></td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Annual Income :</td>
                           <td class="day_value closed"><span>
                             <input class="form-control has-dark-background" name="txt_annual_income" id="txt_annual_income"  type="text" required="" value="<?php echo $row->member_annual_income;?>">
                           </span></td>
                        </tr>
                         <tr class="opened">
                           <td class="day_label">Job Description :</td>
                           <td class="day_value closed"><span>
                             <textarea rows="4" cols="65" id="txt_job_desc" name="txt_job_desc"><?php echo $row->member_job_desc;?></textarea>
                           </span></td>
                        </tr>
                      </tbody>
                      </table>
                     </div>
                     <input type="submit" name="btn_education">
                   </form>
             </div>
             <div role="tabpanel" class="tab-pane fade" id="other" aria-labelledby="profile-tab">
              <form method="post" action="<?php echo base_url(); ?>profile/update_info/other">
                <div class="col-md-6 basic_1-left">

                    <table class="table_working_hours">
                     <tbody>
                        <tr class="opened">
                           <td class="day_label">Childres(Girl) :</td>
                           <td class="day_value">
                             <select  style="color:black" id="txt_girl_child" name="txt_girl_child">
                              <option>--Select Any--</option>
                              <option <?php if($row->member_children_girl=='0') echo "selected"; ?>>0</option>
                              <option <?php if($row->member_children_girl=='1') echo "selected"; ?>>1</option>
                              <option <?php if($row->member_children_girl=='2') echo "selected"; ?>>2</option>
                              <option <?php if($row->member_children_girl=='3') echo "selected"; ?>>3</option>  
                              <option <?php if($row->member_children_girl=='More then 3') echo "selected"; ?>>More then 3</option>  
                              </select>

                           </td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Childres(Boys) :</td>
                           <td class="day_value">
                             <select  style="color:black" id="txt_boy_child" name="txt_boy_child">
                              <option>--Select Any--</option>
                              <option <?php if($row->member_children_boy=='0') echo "selected"; ?>>0</option>
                              <option <?php if($row->member_children_boy=='1') echo "selected"; ?>>1</option>
                              <option <?php if($row->member_children_boy=='2') echo "selected"; ?>>2</option>
                              <option <?php if($row->member_children_boy=='3') echo "selected"; ?>>3</option>  
                              <option <?php if($row->member_children_boy=='More then 3') echo "selected"; ?>>More then 3</option>  
                              </select>
                             
                           </td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Residency Status :</td>
                           <td class="day_value">
                             <select  style="color:black" id="cmb_residence" name="cmb_residence">
                              <option>--Select Any--</option>
                              <option <?php if($row->member_residence_status=='Own') echo "selected"; ?>>Own</option>
                              <option <?php if($row->member_residence_status=='Rent') echo "selected"; ?>>Rent</option>
                              <option <?php if($row->member_residence_status=='Not Applicable') echo "selected"; ?>>Not Applicable</option>
                              </select>
                           </td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Want To Marry With NRI Candidate ? :</td>
                           <td class="day_value">
                             <input type="radio" id="rdo_marry_nri" name="rdo_marry_nri" value="yes" class="radio_1" <?php if($row->member_nri_candidates_applicable=='Yes') echo "checked='checked'"; ?>/> Yes &nbsp;&nbsp;
                        <input type="radio" id="rdo_marry_nri" name="rdo_marry_nri" value="no" class="radio_1" <?php if($row->member_nri_candidates_applicable=='No') echo "checked='checked'"; ?>  /> No
                           </td>
                        </tr>
                        <tr class="opened">
                           <td class="day_label">Expectation :</td>
                           <td class="day_value closed"><span>
                             <textarea rows="4" cols="65" id="txt_expectation" name="txt_expectation"><?php echo $row->member_expectation; ?></textarea>
                           </span></td>
                        </tr>
                      </tbody>
                      </table>
                     </div>
                     <input type="submit" name="btn_other">
                   </form>
             </div>
             <div role="tabpanel" class="tab-pane fade" id="photo" aria-labelledby="home-tab">
              <form method="post" action="<?php echo base_url(); ?>profile/update_info/photo">
                <div class="col-md-6 basic_1-left">

                    <table class="table_working_hours">
                      <tbody>
                        <tr class="opened">
                           <td class="day_value">
                             <img src="" id="img1" name="img1">
                              <input type="file" name="img_photo1" id="img_photo1">
                           </td>
                        </tr>
                        <tr class="opened">
                           <td class="day_value">
                             <img src="" id="img2" name="img2">
                             <input type="file" name="img_photo2" id="img_photo2">
                           </td>
                        </tr>
                        <tr class="opened">
                           <td class="day_value">
                             <img src="" id="img3" name="img3">
                             <input type="file" name="img_photo3" id="img_photo3">
                           </td>
                        </tr>
                      </tbody>
                    </table>
                </div>
                <div class="col-md-6 basic_1-left">
                    <table class="table_working_hours">
                      <tbody>
                        <tr class="opened">
                           <td class="day_value">
                             <img src="" id="img4" name="img4">
                             <input type="file" name="img_photo4" id="img_photo4">
                           </td>
                        </tr>
                        <tr class="opened">
                           <td class="day_value">
                             <img src="" id="img5" name="img5">
                             <input type="file" name="img_photo5" id="img_photo5">
                           </td>
                        </tr>
                      </tbody>
                    </table>
                </div>
                <input type="submit" name="btn_photo">
                </form>
             </div>

           
           </div>
        </div>
      </div>
       </div>
     
       <div class="clearfix"> </div>
    </div>
         <?php
      }

   ?>
 </center>
  </div>
</div>
      <?php 
         include_once('footer.php');
      ?>

      <script defer src="<?php echo base_url(); ?>/template/user/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>/template/user/css/flexslider.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script> 
   </body>
</html>
<script type="text/javascript">
            var controller = "ajax/get_caste";
            var base_url = "<?php echo base_url(); ?>";

     function getXMLHTTP() { //fuction to return the xml http object
        var xmlhttp=false;  
        try{
            xmlhttp=new XMLHttpRequest();
        }
        catch(e)    {       
            try{            
                xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch(e){
                try{
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                }
                catch(e){
                    xmlhttp=false;
                }
            }
        }
            
        return xmlhttp;
    }

    function get_state(primary_id)
    {       
        var strURL=base_url+"user_ajax/get_state"+"/"+primary_id;
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                    //alert(req.responseText);                      
                        document.getElementById("cmb_state").innerHTML=req.responseText;                       
                    } else {
                        alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
            
        }
    }

    function get_city(primary_id)
    {       
        var strURL=base_url+"user_ajax/get_city"+"/"+primary_id;
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                    //alert(req.responseText);                      
                        document.getElementById("cmb_city").innerHTML=req.responseText;                       
                    } else {
                        alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
            
        }
    }

    function get_edit_data(primary_id)
    {       
        var strURL=base_url+controller+"/"+primary_id;
        var req = getXMLHTTP();
        if (req) {
            req.onreadystatechange = function() {
                if (req.readyState == 4) {
                    // only if "OK"
                    if (req.status == 200) {
                    //alert(req.responseText);                      
                        document.getElementById("edit_div").innerHTML=req.responseText;                       
                    } else {
                        alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                    }
                }               
            }           
            req.open("GET", strURL, true);
            req.send(null);
            
        }
    }

    
</script>


