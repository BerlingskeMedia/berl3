<? require_once("../dummy/dummy.php") ?>

<?php include('includes/_variables.php') ;?>

<?php 
if(isset($_GET["wide"])) {
	$showWide = true;
} 

if(isset($_GET["well"])) {
	$showWell = true;
} 
if(isset($_GET["oneliner"])) {
	$showOneliner = true;
} 
if(isset($_GET["top"])) {
	$showTop = true;
}
if(isset($_GET["business"])) {
	$siteBusiness = true;
}
?>


<?php 
	// $showWell = rand(1,1);
?>
<!DOCTYPE html>
<html lang="da">
<head>
	<?php include('includes/head.php'); ?>
	<title>Berlingske - Teaser types</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
</head>
<body class="tpl-front <?php if($siteBusiness): ?>site-business<?php endif; ?> show-site-search">








<div class="main-wrapper">

	<div class="canvas-main <?php echo $campaignId; ?>">


		<div class="banner-wrapper">
		
			<div class="container main-content">


				<div class=" deck flex-row">

					<div class="row">
						<div class="col-xs-12 col-xl-12">
							<?php
							$imgW='1240'; 
							$showImg = true;
							$class = 'item-teaser teaser-xxlarge teaser-theme-xtragiant';
							$imgRatio = '16:9';
							$imgSrc = '/!b-breaking';
							$showSummary = '1';
							$showRelatedimg = true;
							$teaserPack = false;
							$labelType = 'live';
							$labelText = '<i class="bicon-record"></i> Live';

							$showAuthor = true;
							include('includes/frontpage/teasers/teaser.php') ?>			
						</div>
					</div>
					
					<div class="row">
						<div class="col-xs-12 col-xl-12">
							<?php
							$imgW='1240'; 
							$showImg = true;
							$class = 'item-teaser teaser-xlarge teaser-theme-giant ';
							
							$imgRatio = '16:9';
							$imgSrc = '/!b-breaking';
							$showSummary = '1';
							$showHeader 	= true;
							$showRelatedimg = true;
							$teaserPack = false;
							$labelType = 'live';
							$labelText = '<i class="bicon-record"></i> Live';
							$showAuthor = true;
							include('includes/frontpage/teasers/teaser.php') ?>			
						</div>
					</div>						

					<div class="col-wrapper flex-row">
						
							
						<div class="col-full-width">
							<div class="row flex-row teaser-flow">
								<div class="col-xs-12">
									<?php
									$imgW='910'; 
									$showImg = '1';
									$class = 'mb item-teaser-bb teaser-img-wide teaser-large ';
									$imgRatio = '16:9';
									$imgSrc = '/landscape';
									$showSummary = '1';
									$showRelated = '1';
									$showHeader = true;
									$teaserPack = false;
									$showAuthor = true;
									$showRating = true;
									$showPaywall = true;
									$showTrumpet = true;
									$labelType = 'live';
									$labelText = '<i class="bicon-record"></i> Live';
									include('includes/frontpage/teasers/teaser.php') ?>	
								</div>
							</div>
						</div>
							
						<div class="col-primary ">
							
							<div class="row flex-row teaser-flow">

								
								<div class="col-xs-12">
									<?php
									$imgW='930';  
									$showImg = '1';
									$class = 'item-teaser teaser-img-wide item-teaser teaser-large item-teaser ';
									$imgRatio = '16:9';
									$imgSrc = '/landscape';
									$showSummary = true;
									// $category = 'Business.dk';
									$teaserPack = false;
									$showTrumpet = true;
									$showPaywall = true;
									$showAuthor = true;
									$showTrumpet = true;
									$labelType = 'live';
									$labelText = '<i class="bicon-record"></i> Live';

									include('includes/frontpage/teasers/teaser.php') ?>

									<?php
									$imgW='320'; 
									$showImg = '1';
									$class = 'teaser-img-left teaser-small item-teaser-bt teaser-theme-business ';
									$imgRatio = '16:9';
									$imgSrc = '/landscape';
									$category = 'Business.dk';
									$showPaywall = true;
									$showSummary = true;
									$showTrumpet = true;
									$labelType = 'yellow';
									$labelText = 'Breaking';
									include('includes/frontpage/teasers/teaser.php') ?>
									
									<?php
									$imgW='320'; 
									$showImg = '1';
									$class = 'teaser-img-right teaser-small item-teaser-bt teaser-theme-business ';
									$imgRatio = '16:9';
									$imgSrc = '/landscape';
									$category = 'Business.dk';
									$showPaywall = true;
									$showSummary = true;
									$showTrumpet = true;
									$showAuthor = true;
									$labelType = 'yellow';
									$labelText = 'Breaking';
									include('includes/frontpage/teasers/teaser.php') ?>

									<?php
									$imgW='320'; 
									$showImg = '1';
									$class = ' teaser-img-right item-teaser-bt teaser-theme-feature teaser-small' ;
									$imgRatio = '1:1';
									$imgSrc = '/!author';
									$showSummary = true;			
									$showPaywall = true;
									$showAuthor = true;

									include('includes/frontpage/teasers/teaser.php') ?>


									<?php
									$imgW='220'; 
									$imgW='220'; 
									$showImg = '1';
									$class = 'teaser-img-right  teaser-small teaser-theme-trade item-teaser-bt ';
									$imgRatio = '16:9';
									$imgSrc = '/landscape';
									$showSummary = true;
									$teaserAd = true;

									include('includes/frontpage/teasers/teaser.php') ?>

									<?php
									$imgW='220'; 
									$imgW='220'; 
									$showImg = '1';
									$class = 'teaser-img-right  teaser-small teaser-theme-trade-cs item-teaser-bt ';
									$imgRatio = '16:9';
									$imgSrc = '/landscape';
									$showSummary = true;
									$teaserAd = true;

									include('includes/frontpage/teasers/teaser.php') ?>


								</div>
							</div>
						</div><!-- col-primary -->

						<div class="col-primary-wide">

							<div class="flex-row row ">
						
								<div class="col-md-6 col-xs-12 flex-row ">

									<?php 
										$imgW='100'; 
										$class = ' teaser-img-right  teaser-xsmall  teaser-theme-feature item-teaser-bt teaser-squareimg ';
										$showImg = '1';
										$imgRatio = '1:1';
										$blogTeaser = true;
										$showTrumpet = false;
										$showTrumpet = 'Berlingske mener';
										$showCategory = false;
										$showPaywall = true;
										$imgSrc = '/!b-vaabenskjold';
										include('includes/frontpage/teasers/teaser.php') ?>
								</div>
								

								<div class="col-md-6 col-xs-12 flex-row ">
									<?php 
										$imgW='100'; 
										$class = ' teaser-img-right  teaser-xsmall  item-teaser-bt teaser-theme-feature teaser-roundimg ';
										$showImg = '1';
										$imgRatio = '1:1';
										$blogTeaser = true;
										$showTrumpet = false;
										$showCategory = true;
										$showPaywall = true;
										$imgSrc = '/!b-tilstregen';
										include('includes/frontpage/teasers/teaser.php') ?>
								</div>
								
							</div>

							<div class="row">
									
									
									<div class="col-md-4 col-xs-12"> 
										<div class=" teaser-img-wide item-teaser teaser-xsmall teaser-theme-cartoon-1 teaser-theme-white ">
										
											<span class="teaser-title">Hårdt mod hårdt</span>
											<a href="#" class="teaser-link">
											
											<figure class="teaser-img">
												<img src="/dist/images/demo/hrdt_mod_hrdt.jpg" alt="" class="img">
											</figure>
											<div class="teaser-body">
												
												
											</div><!-- .teaser-body --> 	
											</a><!-- .teaser-link --> 
							
										
											<button class="btn btn-sm btn-blue">Læs hele striben</button>
										</div>

									</div>	
								
								</div>
							
						</div>
								

					</div><!-- col-wrapper -->

		
			</div>


		</div><!-- canvas-main -->
	</div><!-- banner-wrapper -->
</div><!-- main-wrapper -->


<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.2/js/tether.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script> -->
<script src="/dist/scripts/main.js"></script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-8992845-4', 'auto');
  ga('send', 'pageview');

</script>


</body>
</html>