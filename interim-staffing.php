<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Data to be passed to templates/headers/header-x.tpl.php -->
<?php $title = 'Interim Staffing | 4GM Capital Group'; ?>
<?php $keywords = 'Interim Staffing, Part-Time Position, Full-Time Position, Project Managers'; ?>
<?php $description = 'Do you have immediate needs for staffing some of your part-time and fulltime positions?'; ?>
<?php $page = 'services';   // To set active on the same id of primary menu ?>
<!-- End of Data -->

<?php require_once('templates/headers/'.$header.'.tpl.php'); ?>





<!-- Middle Content Start -->
  <div class="vc_banner-title <?php if (isset($banner_title_bg)) echo $banner_title_bg; ?> block">
    <div class="wrapper">
      <div class="container">
        <h1>Interim <span class="vc_main-color">Staffing</span></h1>
        <ul class="breadcrumb">
          <li><a href="index.php">Home</a> </li>
          <li><a href="#">Services & Solutions</a> </li>          
          <li class="active">Interim Staffing</li>
        </ul>
      </div>
    </div>
    <!-- wrapper --> 
  </div>
  <!-- vc_banner -->
  
  <div class="vc_full-layout">
    <div class="wrapper">
      <div class="container">
        <img class="displayed" alt="Interim Staffing Cloud" src="img/interim-staffing-top-cloud.jpg">
        <div class="vc_splitter"> </div><br>
        
        <div class="row block" style="padding-top:60px;">
          <div class="col-md-12">
            <h2>Our interim experts in the following fields and discipline can support your staffing needs:</h2><br>
              <div class="col-md-6">
            <ul class="vc_li">
              <li>Supply Chain and Sourcing Leaders</li>
              <li>COO</li>
              <li>CFO</li>
              <li>Turn Around Champion</li>
              <li>Project Managers to drive
              	<ul>
                	<li>Integration of Operations</li>
                    <li>Transformation of Operations</li>
                </ul>
               </li>
              <li>General Managers
              	<ul>
                	<li>Business Operations</li>
                    <li>Sourcing</li>
                    <li>Manufacturing</li>
                    <li>Logistics</li>
                </ul>
              </li>
            </ul>
            </div>
            <div class="col-md-6">
            <img alt="Global Experts" src="img/global-experts.jpg">
            </div>
          </div>
         
        </div>
        <!-- block -->
        
        
      </div><!-- .container -->
    </div><!-- .wrapper -->
  </div><!--.vc_full-layout-->
<!-- Middle Content End -->
  
  
  
  
  
<?php require_once('templates/footers/'.$footer.'.tpl.php'); ?>



<!-- Specific Page Scripts Put Here -->




<!-- Specific Page Scripts END -->



<?php require_once('templates/footers/closing.tpl.php'); ?>