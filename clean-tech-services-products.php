<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Data to be passed to templates/headers/header-x.tpl.php -->
<?php $title = 'Clean Tech Services & Products | 4GM Capital Group'; ?>
<?php $keywords = 'Visit our other Clean Tech Services and Products.'; ?>
<?php $description = ''; ?>
<?php $page = 'businesses';   // To set active on the same id of primary menu ?>
<!-- End of Data -->

<?php require_once('templates/headers/'.$header.'.tpl.php'); ?>





<!-- Middle Content Start -->
  <div class="vc_banner-title <?php if (isset($banner_title_bg)) echo $banner_title_bg; ?> block">
    <div class="wrapper">
      <div class="container">
        <h1>Clean Tech <span class="vc_main-color">Services & Products</span></h1>
        <ul class="breadcrumb">
          <li><a href="index.php">Home</a> </li>
          <li><a href="#">Other Businesses</a> </li>          
          <li class="active">Clean Tech Services & Products</li>
        </ul>
      </div>
    </div>
    <!-- wrapper --> 
  </div>
  <!-- vc_banner -->
  
  <div class="vc_full-layout">
    <div class="wrapper">
      <div class="container"> 
        <div class="row block" style="padding-top:60px;">
          <div class="col-md-12">
          <img alt="Air Quality" class="vc_right"  src="img/air-quality.jpg">
            <p>  Anita Jonooby, a senior partner at 4GM Capital Group, has been working in the environmental field since 1986.  She has a BS degree in Chemistry and a MS degree in Microbiology.  She has been providing operational services to GD Air since 1998.  Anita is responsible for overseeing all the incoming projects, coordinating and supervising the technical activities of GD Air.  She schedules work flow through the department and is also in charge of client work quotations, account receivables, and customer service for GD Air.</p>
            <a href="http://www.gdair.com/AboutUs_TheTeam.html" target="_blank">http://www.gdair.com/AboutUS_TheTeam.html</a>
            <div class="vc_line-splitter"> </div><br>
            <p>Please refer to the following site for the list of products designed and manufactured by GD Air.</p>
            <a href="http://www.nutechins.com/Products.html">http://www.nutechins.com/Products.html</a>
          </div>
        <!-- block -->
        
        </div>
      </div><!-- .container -->
    </div><!-- .wrapper -->
  </div><!--.vc_full-layout-->
<!-- Middle Content End -->
  
  
  
  
  
<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>



<!-- Specific Page Scripts Put Here -->




<!-- Specific Page Scripts END -->



<?php require_once('templates/footers/closing.tpl.php'); ?>