<?php require_once('templates/headers/opening.tpl.php'); ?>

<!-- Data to be passed to templates/headers/header-x.tpl.php -->
<?php $title = 'Investments | 4GM Capital Group'; ?>
<?php $keywords = 'Investments, Real Estate Realtors, Construction Professionals, Flipping Houses, Renovators'; ?>
<?php $description = 'Our separate investment segment is a focused team of experienced real estate realtors and construction professionals (remodelers & renovators that are expert in flipping houses)'; ?>
<?php $page = 'businesses';   // To set active on the same id of primary menu ?>
<!-- End of Data -->

<?php require_once('templates/headers/'.$header.'.tpl.php'); ?>





<!-- Middle Content Start -->
  <div class="vc_banner-title <?php if (isset($banner_title_bg)) echo $banner_title_bg; ?> block">
    <div class="wrapper">
      <div class="container">
        <h1>Investments</h1>
        <ul class="breadcrumb">
          <li><a href="index.php">Home</a> </li>
          <li><a href="#">Other Businesses</a> </li>          
          <li class="active">Investments</li>
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
        <p>Our separate investment segment is a focused team of experienced real estate realtors and construction professionals (remodelers & renovators that are experts in flipping houses). Our team delivers results, not reports.</p>
        <div class="vc_line-splitter"> </div><br>
        <div class="col-md-12"><img alt="Return On Investment" class="vc_right"  src="img/roi.jpg">
           <h2><span class="vc_main-color">Real Estate </span>Market Focus:</h2>
            
            <ul class="vc_li">
              <li> Renovation and remodeling of residential properties under $1M              
              	<ul>
              		<li> Within 50 miles of the San Diego (California) Area:</li>
                </ul>
              </li>
              <li> Renovation and remodeling of residential properties under $300K              
              	<ul>
              		<li> Within 50 miles of the Dallas Area</li>
                </ul>
              </li>
              <li> Purchase of small lands in agricultural zones with a potential for future conversion to commercial zone – Long-term Investments</li>              
            </ul>
            <br/>            
              
            <h2><span class="vc_main-color">ROI </span>Guidelines:</h2>
            <ul class="vc_li">
              <li> Protect the Initial Capital</li>
              <li> Potential Return 10%+ for the short term investments</li>              
              <li> Targeted Investors- professionals and trustworthy business people with reasonable net worth that do not have the time, resources and expertise to invest in this sector</li>
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