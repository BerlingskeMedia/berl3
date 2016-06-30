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
if(isset($_GET["teaserPack"])) {
	$docTeaserPack = $_GET['teaserPack'];;
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

<style>
	h1.demoheader {
		
		font-size: 19px;
		
		margin-top: 4rem;

	}
	h2.demoheader {
		background: #eee;
		font-size: 14px;
		padding: .3rem;

	}
</style>




<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="demo hidden">
	<p><strong>Choose teaser pack:</strong>
		
			<a href="?">None</a>
			<a href="?teaserPack=1">1</a>
			<a href="?teaserPack=2">2</a>
			<a href="?teaserPack=3">3</a>
			<a href="?teaserPack=4">4</a>
			<a href="?teaserPack=5">5</a>
			<a href="?teaserPack=6">6</a>
			<a href="?teaserPack=7">7</a>
			<a href="?teaserPack=8">8</a></p>
	
	<?php if($docTeaserPack) :?>
		<?php if ($docTeaserPack === '8'): ?>
			<div class="alert alert-success "><p class="text-center">Teaser pack 8 should <strong>only</strong> be used on <strong>.teaser-theme-giant</strong> and <strong>.teaser-theme-extragiant</strong></p></div>
		<?php else: ?>
			<div class="alert alert-danger"><p class="text-center">Teaser pack 1-7 should <strong>never</strong> be used on <strong>.teaser-theme-giant</strong> and <strong>.teaser-theme-extragiant</strong> - use teaser pack 8.</p></div>
		<?php endif ?>
	<?php endif; ?>
</div>
		</div>
	</div>
</div>


<div class="main-wrapper">

	<div class="canvas-main <?php echo $campaignId; ?>">


		<div class="banner-wrapper">
		
			<div class="container main-content">


				<div class=" deck flex-row">
			
					<div class="row">
					<div class="col-xs-12 col-xl-12">
					<h1 class="demoheader">Teaser xtragiant</h1>
					<h2 class="demoheader">.teaser-theme-xtragiant</h2>

					</div>
						<div class="col-xs-12 col-xl-12">
							<?php
							$imgW='1240'; 
							$showImg = true;
							$class = 'item-teaser teaser-xxlarge teaser-theme-xtragiant';
							$imgRatio = '16:9';
							$imgSrc = '/!b-breaking';
							$showSummary = '1';
							$showRelatedimg = true;
							$teaserPack = '8';
							$showPaywall = true;
							$showRating = true;
							

							$showAuthor = true;
							include('includes/frontpage/teasers/teaser.php') ?>			
						</div>
					</div>
					
					<div class="row">
						<div class="col-xs-12 col-xl-12">
							<h1 class="demoheader">Teaser giant</h1>
							<h2 class="demoheader">.teaser-theme-giant</h2>
						</div>
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
							$teaserPack = '8';
							$showPaywall = true;
							$showRating = true;
							
							$showAuthor = true;
							include('includes/frontpage/teasers/teaser.php') ?>			
						</div>
					</div>						

					<div class="col-wrapper flex-row">
						
							
						<div class="col-full-width">
							<div class="row flex-row teaser-flow">
								
								<div class="col-xs-12 col-xl-12">
									<h1 class="demoheader">Teaser large Business</h1>
									<h2 class="demoheader">.teaser-large .teaser-img-wide</h2>
								</div>

								<div class="col-xs-12">
									<?php
									$imgW='910'; 
									$showImg = '1';
									$class = 'item-teaser-bb teaser-img-wide teaser-large teaser-theme-business';
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
									$category = "Business.dk";
									
									include('includes/frontpage/teasers/teaser.php') ?>	
								</div>
							</div>
						</div>
							
						<div class="col-primary ">
							
							<div class="row flex-row teaser-flow">
								
								<div class="col-xs-12">
									<h1 class="demoheader">Teaser large </h1>
									<h2 class="demoheader">.item-teaser .teaser-img-wide .teaser-large</h2>	
								</div>
								
								
								<div class="col-xs-12">
									<?php
									$imgW='930';  
									$showImg = '1';
									$class = 'item-teaser teaser-img-wide teaser-large  ';
									$imgRatio = '16:9';
									$imgSrc = '/landscape';
									$showSummary = true;
									// $category = 'Business.dk';
									$teaserPack = false;
									$teaserPackDoc = $docTeaserPack;
									$showTrumpet = true;
									$showPaywall = true;
									$showAuthor = true;
									$showTrumpet = true;
									$showRating = true;
									

									include('includes/frontpage/teasers/teaser.php') ?>
								</div>

								<div class="col-xs-12">
									<h1 class="demoheader">Teaser small </h1>
									<h2 class="demoheader">.item-teaser-bt .teaser-img-left .teaser-small .teaser-theme-business</h2>	
								</div>
								<div class="col-xs-12">
									
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
									$showRating = true;
									$showAuthor = true;
									
									include('includes/frontpage/teasers/teaser.php') ?>
								</div>

								<div class="col-xs-12">
									<h1 class="demoheader">Teaser small business</h1>
									<h2 class="demoheader">.teaser-img-right .teaser-small .item-teaser-bt .teaser-theme-business</h2>	
								</div>

								<div class="col-xs-12">

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
									$showRating = true;
									$labelType = 'yellow';
									$labelText = 'Breaking';
									include('includes/frontpage/teasers/teaser.php') ?>
								
								</div>

								<div class="col-xs-12">
									<h1 class="demoheader">Teaser small feature</h1>
									<h2 class="demoheader">.teaser-img-right .item-teaser-bt .teaser-theme-feature .teaser-small</h2>	
								</div>
								<div class="col-xs-12">

									<?php
									$imgW='320'; 
									$showImg = '1';
									$class = ' teaser-img-right item-teaser-bt teaser-theme-feature teaser-small' ;
									$imgRatio = '1:1';
									$imgSrc = '/!author';
									$showSummary = true;			
									$showPaywall = true;
									$showAuthor = true;
									$showRating = true;

									include('includes/frontpage/teasers/teaser.php') ?>
								</div>


								<div class="col-xs-12">
									<h1 class="demoheader">Teaser small Advertorial</h1>
									<h2 class="demoheader"> .teaser-img-right  .teaser-small .teaser-theme-trade .item-teaser-bt</h2>	
								</div>

								<div class="col-xs-12">

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
								</div>

								<div class="col-xs-12">
									<h1 class="demoheader">Teaser small Advertorial Consumer sales</h1>
									<h2 class="demoheader">.teaser-img-right  .teaser-small .teaser-theme-trade-cs .item-teaser-bt</h2>	
								</div>

								<div class="col-xs-12">									

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
								




								<div class="col-xs-12">
									<h1 class="demoheader">Teaser xsmall used on "Tophistorier" (on articles template)</h1>
									<h2 class="demoheader">.teaser-img-wide .teaser-xsmall .item-teaser-narrow (.teaser-theme-feature)</h2>
								</div>
									

								<div class="col-xs-12">
									
									<ul class=" flex-row list-unstyled list-buffet">
										
										<li class="col-xs-12 col-md-6 col-lg-3">
											<?php
												$imgW='750';  
												$showImg = '1';
												$class = ' teaser-img-wide teaser-xsmall  teaser-theme-business';
												$imgRatio = '16:9';
												$imgSrc = '/landscape';
												$showSummary = false;
												$teaserPack = false;
												$showTrumpet = true;
												$showPaywall = true;
												$category = 'Business.dk';	
												$labelType = 'live';
												$labelText = '<i class="bicon-record"></i> Live';
												include('includes/frontpage/teasers/teaser.php') ?>

										</li>

										<li class="col-xs-12 col-md-6 col-lg-3">
											<?php
												$imgW='750';  
												$showImg = '1';
												$class = ' teaser-img-wide teaser-xsmall ';
												$imgRatio = '16:9';
												$imgSrc = '/landscape';
												$showSummary = false;
												$teaserPack = false;
												$showTrumpet = true;
												$showPaywall = true;
												$category = 'Business.dk';	
												$labelType = 'live';
												$labelText = '<i class="bicon-record"></i> Live';
												include('includes/frontpage/teasers/teaser.php') ?>

										</li>
										
										<li class="col-xs-6 col-md-6 col-lg-3">
											<?php
												$imgW='750';  
												$showImg = '1';
												$class = ' teaser-img-wide teaser-xsmall  teaser-theme-feature ';
												$imgRatio = '1:1';
												$imgSrc = '/!author';
												$showSummary = false;
												$teaserPack = false;
												$showTrumpet = true;
												$showPaywall = true;
												$labelType = false;
												include('includes/frontpage/teasers/teaser.php') ?>

										</li>
									</ul>
								</div>


							
						</div><!-- col-primary -->
						</div>

						<div class="col-primary-wide">

							<div class="flex-row row ">
								
								<div class=" col-xs-12  ">
									<h1 class="demoheader">Teaser xsmall</h1>
									<h2 class="demoheader">
										.teaser-img-right  .teaser-xsmall  .item-teaser-bt 
									</h2>
								</div>

								<div class=" col-md-6 col-xs-12 flex-row ">
									
									<?php 
										$imgW='100'; 
										$class = ' teaser-img-right  teaser-xsmall   item-teaser-bt ';
										$showImg = '1';
										$imgRatio = '1:1';
										$showAuthor = true;
										$showTrumpet = false;
										$showTrumpet = 'Berlingske mener';
										$showCategory = false;
										$showPaywall = true;
										$showRating = true;
										$imgSrc = '/!b-vaabenskjold';
										include('includes/frontpage/teasers/teaser.php') ?>
								</div>
								
							</div>

							<div class="flex-row row ">
								
								<div class="col-xs-12 ">
									<h1 class="demoheader">Teaser xsmall feature</h1>
									<h2 class="demoheader">
										.teaser-img-right  .teaser-xsmall  .item-teaser-bt .teaser-theme-feature 
									</h2>
								</div>

								<div class="col-md-6 col-xs-12 flex-row ">
								
									<?php 
										$imgW='100'; 
										$class = ' teaser-img-right  teaser-xsmall  item-teaser-bt teaser-theme-feature  ';
										$showImg = '1';
										$imgRatio = '1:1';
										$showAuthor = true;
										$showTrumpet = false;
										$showCategory = true;
										$showPaywall = true;
										$imgSrc = '/!b-tilstregen';
										include('includes/frontpage/teasers/teaser.php') ?>
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