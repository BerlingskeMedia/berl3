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

	
	
		
		</div>
	</div>
</div>


<div class="main-wrapper">

	<div class="canvas-main <?php echo $campaignId; ?>">


		<div class="banner-wrapper">
		
			<div class="container ">


				<div class=" deck flex-row">

					<div class="col-wrapper flex-row">
							
						<div class="col-primary ">
							
							<div class="row flex-row teaser-flow">
								
								
								
								
								

								

								<div class="col-xs-12">

									<?php
									$imgW='320'; 
									$showImg = '1';
									$class = ' teaser-img-right  teaser-small teaser-theme-trade item-teaser-bt   ';
									$imgRatio = '16:9';
									$imgSrc = '/landscape';
									$category = false;
									$headerStyle = 'style="font-family : \'Sanomat Sans\';"';

									$showPaywall = false;
									$showSummary = true;
									$showTrumpet = false;
									$showAuthor = false;
									$showRating = false;
									$teaserAd = true;
									include('includes/frontpage/teasers/teaser.php') ?>

									<?php
									$imgW='320'; 
									$showImg = '1';
									$class = ' teaser-img-left  teaser-small teaser-theme-trade item-teaser-bt   ';
									$imgRatio = '16:9';
									$imgSrc = '/landscape';
									$category = false;
									$headerStyle = 'style="font-family : \'Sanomat Sans\';"';

									$showPaywall = false;
									$showSummary = true;
									$showTrumpet = false;
									$showAuthor = false;
									$showRating = false;
									$teaserAd = true;
									include('includes/frontpage/teasers/teaser.php') ?>


									<?php
									$imgW='320'; 
									$showImg = '1';
									$class = ' teaser-img-right  teaser-small teaser-theme-trade item-teaser-bt   ';
									$imgRatio = '16:9';
									$imgSrc = '/landscape';
									$category = false;
									$headerStyle = 'style="font-family : \'Guardian Text Egyptian Web\';"';

									$showPaywall = false;
									$showSummary = true;
									$showTrumpet = false;
									$showAuthor = false;
									$showRating = false;
									$teaserAd = true;
									include('includes/frontpage/teasers/teaser.php') ?>

									<?php
									$imgW='320'; 
									$showImg = '1';
									$class = ' teaser-img-left  teaser-small teaser-theme-trade item-teaser-bt   ';
									$imgRatio = '16:9';
									$imgSrc = '/landscape';
									$category = false;
									$headerStyle = 'style="font-family : \'Guardian Text Egyptian Web\';"';

									$showPaywall = false;
									$showSummary = true;
									$showTrumpet = false;
									$showAuthor = false;
									$showRating = false;
									$teaserAd = true;
									include('includes/frontpage/teasers/teaser.php') ?>
								
								</div>

							
							
						</div><!-- col-primary -->
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