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
        <h1>Market Niche <span class="vc_main-color"> Studies</span> </h1>
        <ul class="breadcrumb">
          <li><a href="index.php">Home</a> </li>
          <li><a href="services.php">Services</a></li>          
          <li class="active">Market Niche Studies</li>          
        </ul>
      </div>
    </div>
    <!-- wrapper --> 
  </div>
  <!-- vc_banner -->
  <div class="vc_full-layout">
    <div class="wrapper">
      <div class="container">
        <h1>Content Pending</h1>
      </div>
    </div>
  </div>


<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>



<!-- Specific Page Scripts Put Here -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<script type="text/javascript" src="js/jquery.gmap.min.js"></script> 
<script type="text/javascript"  src="js/specific/map-large.js"></script> 
<script type="text/javascript" src="js/specific/contact.js"></script> 
<!-- Specific Page Scripts End -->


<?php require_once('templates/footers/closing.tpl.php'); ?>