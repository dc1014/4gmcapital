<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Data to be passed to templates/headers/header-x.tpl.php -->
<?php $title = 'Contact Us - 4GM Capital Group'; ?>
<?php $keywords = ''; ?>
<?php $description = 'Call 4GM Capital Group TODAY at (214) 621-6762 to speak to one of our professionals!'; ?>
<?php $page = 'contact';   // To set active on the same id of primary menu ?>
<!-- End of Data -->

<?php require_once('templates/headers/'.$header.'.tpl.php'); ?>





<!-- Middle Content Start -->
  <div class="vc_banner-title <?php if (isset($banner_title_bg)) echo $banner_title_bg; ?> block">
    <div class="wrapper">
      <div class="container">
        <h1>Contact Us</h1>
        <ul class="breadcrumb">
          <li><a href="index.php">Home</a> </li>
          <li><a href="contact.php">Contact</a> </li>
          <li class="active">Full Map</li>
        </ul>
      </div>
    </div>
    <!-- wrapper --> 
  </div>
  <!-- vc_banner -->
  
  <div class="vc_map block">
    <div class="wrapper">
      <div id="map" class="map"> </div>
    </div>
    <!-- .wrapper --> 
  </div>
  <!-- .vc_map -->
  
  <div class="vc_contact-us">
    <div class="wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h2>Contact <span class="vc_main-color">Us</span></h2>
            
            <div id="contact-form-result">
              <div id="success" class="alert alert-success hidden">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                We have <strong>successfully</strong> received your message and will get back to you as soon as possible!</div>
              <div id="error" class="alert alert-danger hidden">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
              </div>
              <div id="empty" class="alert alert-danger hidden">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Please <strong>fill</strong> all the Fields and Try Again.</div>
              <div id="bademail" class="alert alert-danger hidden">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Please enter a<strong>valid</strong> email address.</div>
              <div id="unexpected" class="alert alert-danger hidden">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                An <strong>unexpected error</strong> occured. Please Try Again.</div>
            </div>
            <form id="contact-form" name="contact-form" action="functions/contact.php" method="post">
              <input type="hidden" value="moe@4gmcapital.com" name="admin-email" id="admin-email">
              <input type="hidden" value="4GM Capital Group" name="admin-name" id="admin-name">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label" for="contact-form-name">Name<span class="vc_red">*</span></label>
                    <div class="controls">
                      <input type="text" placeholder="" id="contact-form-name" name="contact-form-name" required />
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label" for="contact-form-email">Email<span class="vc_red">*</span></label>
                    <div class="controls">
                      <input type="email" placeholder="" id="contact-form-email" name="contact-form-email" required >
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label" for="contact-form-phone">Phone<span class="vc_red">*</span></label> 
                    <div class="controls">
                      <input type="tel" placeholder="" id="contact-form-phone" name="contact-form-phone" required >
                    </div>                  
                  </div>
                </div> <!-- col-md-4 -->
              </div> <!-- row -->              
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                  	<label for="contact-form-message">Message<span class="vc_red">*</span></label>                   
                    <div class="controls">
                      <textarea  rows="10" cols="58" id="contact-form-message" name="contact-form-message" required ></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <button class="vc_btn" type="submit" id="contact-form-submit" name="contact-form-submit" value="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
          <!-- .col-md-8 -->
          <div class="col-md-4 sidebar">
          <br><br><br>
            <div id="vc_contact-widget" class="sidebar-widget block">
              <div class="content">
                <div class="contact-info">
                  <h4  class="vc_bg-blue"><i class="icon-map-marker"></i> Our Office</h4>
                  <div class="content">
                    <ul class="vc_li">

                      <li>2801 Technology Dr. STE 127 <br>
                        Plano, TX 75074</li>
                    </ul>
                  </div>
                </div>
                <div class="contact-info">
                  <h4 class="vc_bg-orange"><i class="icon-phone"></i> Call us</h4>
                  <div class="content">
                    <ul class="vc_li">
                      <li>+1 (214) 621-6762</li>                      
                    </ul>
                  </div>
                </div>
                <div class="contact-info">
                  <h4  class="vc_bg-green"><i class="fa fa-envelope-alt"></i> Email Addresses</h4>
                  <div class="content">
                    <ul class="vc_li">
                      <li>moe@4gmcapital.com</li>
                    </ul>
                  </div>
                </div>                
              </div>
            </div>
          </div>
          <!-- .col-md-4 -->           
        </div>
        <!-- .row -->   
        <div class="vc_splitter"> </div><br> 
        <div class="vc_splitter"> </div><br>     
      </div>
      <!-- .container -->        
    </div>
    <!-- .wrapper -->    
  </div>
  <!-- .vc_contact-us -->   
<!-- Middle Content End -->
  
  
  
  
  
<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>



<!-- Specific Page Scripts Put Here -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<script type="text/javascript" src="js/jquery.gmap.min.js"></script> 
<script type="text/javascript"  src="js/specific/map-large.js"></script> 
<script type="text/javascript" src="js/specific/contact.js"></script> 
<!-- Specific Page Scripts End -->


<?php require_once('templates/footers/closing.tpl.php'); ?>