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
	<title>Berlingske - Advertorials</title>
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
			
					
										

					<div class="col-wrapper flex-row">
						
							
						
							
						<div class="col-primary ">
							
							<div class="row flex-row teaser-flow">
								
								



								
								
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