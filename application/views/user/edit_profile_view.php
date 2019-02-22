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
                  <a href="index.html"><i class="fa fa-home home_1"></i></a>
                  <span class="divider">&nbsp;|&nbsp;</span>
                  <li class="current-page">Regular Search</li>
               </ul>
            </div>
            <!--<script type="text/javascript">
               $(function () {
                $('#btnRadio').click(function () {
                     var checkedradio = $('[name="gr"]:radio:checked').val();
                     $("#sel").html("Selected Value: " + checkedradio);
                 });
               });
               </script>-->
            <div class="col-md-9 search_left">
           <div class="col_4">
               <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                  <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>
                    <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Family Details</a></li>
                    <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab" aria-controls="profile1">Partner Preference</a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                       <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                         
                         
                       </div>
                       <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                         
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
                        
                      </div>
                  </div>
               </div>
            </div>    
               
            </div>
           
            <div class="clearfix"> </div>
         </div>
      </div>
      <?php 
         include_once('footer.php');
      ?>
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

