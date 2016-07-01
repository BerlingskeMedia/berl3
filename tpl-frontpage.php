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
	<title>Berlingske - Front</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
</head>
<body class="tpl-front <?php if($siteBusiness): ?>site-business<?php endif; ?> show-site-search">








<div class="main-wrapper">
<?php include('includes/offcanvas-menu.php'); ?>

<?php if($siteBusiness): ?>
	<?php include('includes/header-sub.php'); ?>
<?php else: ?>
	<?php include('includes/header-front.php'); ?>
<?php endif; ?>

<?php // include('includes/banners.php'); ?>

<?php 
$campaignId = 'campaign-' . mt_rand(1,3);
?>

<div class="canvas-main <?php echo $campaignId; ?>">


	<div class="banner-wrapper">
	<div class="bg-banner"></div>
	<div class="topbanner demo-banner hidden-md-down" style="width: 930px; height: 180px;"></div>
	<div class="hidden-lg-up hidden-sm-down"><img src="/dist/images/banners/ipad930x180.png" width="" height="" alt="" style="margin: 0 auto"/></div>
	
	


	<div class="container main-content">





	<?php include('includes/frontpage/deck5.php'); ?>

	<?php include('includes/frontpage/deck-ad.php'); ?>
	
	<?php include('includes/frontpage/deck-longreads-3.php'); ?>
	<?php include('includes/frontpage/deck-ad.php'); ?>
	
	<?php 
	$showBflow = false; 
	include('includes/frontpage/deck6.php'); ?>
	
	<?php include('includes/frontpage/deck-debate-2.php'); ?>
	<?php include('includes/frontpage/deck6.php'); ?>
	
	<?php include('includes/frontpage/deck-image-2.php'); ?>
	
	<?php $showBflow = true; ?>
	<?php include('includes/frontpage/deck6.php'); ?>


	<?php include('includes/frontpage/deck-debate-3.php'); ?> <!-- Den politiske Puls -->

	<?php include('includes/frontpage/deck6.php'); ?>

	<?php include('includes/frontpage/deck-consumersales-2.php'); ?>

	<?php $theme = 'roskilde'; include('includes/frontpage/deck-theme-2.php'); ?>

	<?php include('includes/frontpage/deck6.php'); ?>

	<?php include('includes/frontpage/deck-towers-2.php'); ?>

	<?php include('includes/frontpage/deck-debate-4.php'); ?> <!-- Groft sagt -->

	<?php // include('includes/frontpage/deck-cartoons.php'); ?>

	<?php //  include('includes/frontpage/deck-longreads.php'); ?>
	
	

	<?php // include('includes/frontpage/deck-image.php'); ?>

	<?php // include('includes/frontpage/deck-more-news.php'); ?>

	<?php // include('includes/frontpage/deck-more-news-2.php'); ?>
	
	<?php // include('includes/frontpage/deck-towers.php'); ?>
	
	<?php // include('includes/frontpage/deck-consumersales.php'); ?>
	



	<?php // include('includes/deck-teaser-longread.php'); ?>

	
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