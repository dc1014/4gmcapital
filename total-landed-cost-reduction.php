<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Data to be passed to templates/headers/header-x.tpl.php -->
<?php $title = 'Total Landed Cost Reduction & Cost Avoidance | 4GM Capital Group'; ?>
<?php $keywords = 'cost reduction opportunities, total landed cost reduction and cost avoidence'; ?>
<?php $description = 'The Systematic Innovation in the Total Landed Cost Reduction & Cost Avoidance'; ?>
<?php $page = 'services';   // To set active on the same id of primary menu ?>
<!-- End of Data -->

<?php require_once('templates/headers/'.$header.'.tpl.php'); ?>





<!-- Middle Content Start -->
  <div class="vc_banner-title <?php if (isset($banner_title_bg)) echo $banner_title_bg; ?> block">
    <div class="wrapper">
      <div class="container">
        <h1>Total Landed Cost Reduction <span class="vc_main-color">& Cost Avoidance</span></h1>
        <ul class="breadcrumb">
          <li><a href="index.php">Home</a> </li>
          <li><a href="services.php">Services</a> </li>          
          <li class="active">Total Landed Cost Reduction</li>
        </ul>
      </div>
    </div>
    <!-- wrapper --> 
  </div>
  <!-- vc_banner -->
  
  <div class="vc_full-layout">
    <div class="wrapper">
      <div class="container">
          	<img class="displayed" alt="Total Landed Cost Cloud" src="img/total-landed-cost-top-cloud.jpg">
      		<div class="vc_splitter"> </div><br>   
        
        <div class="row block" style="padding-top:60px;">
          <div class="col-md-12 vc_services-features">
            <h2>Our  <span class="vc_main-color">Methodology:</span></h2>
            <ol>
              <li> Identify cost reduction opportunities by assessing the main factors contributing to cost (See the diagram below)</li>
              <li> Get the management commitment</li>
              <li> Assign resources from the different cross functional organizations</li>
              <li> Pareto the areas of improvement identified in Item 1 (Use the 80/20 rule)</li>
              <li> Hit the ground running with the team and drive the implementations</li>
              <li> Monitor and track the progress</li>
            </ol>
          </div>
         <img class="displayed" alt="Cost Reduction" src="img/cost-reduction.jpg">
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