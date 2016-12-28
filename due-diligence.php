<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Data to be passed to templates/headers/header-x.tpl.php -->
<?php $title = 'Due Diligence | 4GM Capital Group'; ?>
<?php $keywords = 'Due Diligence, business operations, manufacturing, NPI processes'; ?>
<?php $description = "Do you need to perform due diligence on a company's infrastructure, its subsidiaries, business operations, quality systems, supply chain networks, manufacturing, and NPI processes?"; ?>
<?php $page = 'services';   // To set active on the same id of primary menu ?>
<!-- End of Data -->

<?php require_once('templates/headers/'.$header.'.tpl.php'); ?>





<!-- Middle Content Start -->
  <div class="vc_banner-title <?php if (isset($banner_title_bg)) echo $banner_title_bg; ?> block">
    <div class="wrapper">
      <div class="container">
        <h1>Due <span class="vc_main-color">Diligence</span></h1>
        <ul class="breadcrumb">
          <li><a href="index.php">Home</a> </li>
          <li><a href="#">Services & Solutions</a> </li>          
          <li class="active">Due Diligence</li>
        </ul>
      </div>
    </div>
    <!-- wrapper --> 
  </div>
  <!-- vc_banner -->
  
  <div class="vc_full-layout">
    <div class="wrapper">
      <div class="container">
      <img class="displayed" alt="Due Diligence" src="img/top-cloud1.jpg">
      <div class="vc_splitter"> </div><br>
      
        <div class="row block" style="padding-top:60px;">
          <div class="col-md-12 vc_services-features">
            <h2>We can help you to achieve your <span class="vc_main-color">due diligence objectives using a 5 Phase approach: </span></h2>
            <ul>
              <li><i class=" fa fa-check-square vc_main-color"></i> <span class="vc_main-color">Phase 1 –</span> Assess the current situation</li>
              <li><i class=" fa fa-check-square vc_main-color"></i> <span class="vc_main-color">Phase 2 -</span> Identify areas for the improvements in cost, efficiency & productivity using the Total Landed Cost Reduction Model.</li>
              <li><i class=" fa fa-check-square vc_main-color"></i> <span class="vc_main-color">Phase 3 -</span> Create a detailed plan of actions to implement the systemic improvements in the areas identified in Phase 2</li>
              <li><i class=" fa fa-check-square vc_main-color"></i> <span class="vc_main-color">Phase 4 –</span> Monitor the post implementation results & drive more change if necessary</li>
              <li><i class=" fa fa-check-square vc_main-color"></i> <span class="vc_main-color">Phase 5 -</span>Train & cross train the key resources</li>
            </ul>
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