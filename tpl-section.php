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
	<title>Berlingske - Section</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
</head>
<body class="tpl-section <?php if($template): ?> default-header <?php endif; ?> <?php if($siteBusiness): ?>site-business<?php endif; ?> show-site-search">








<div class="main-wrapper">
<?php include('includes/offcanvas-menu.php'); ?>

<?php if(!$template): ?>
	<?php include('includes/header-sub.php'); ?>
<?php else: ?>
	<?php if($siteBusiness): ?>
		<?php include('includes/header-front.php'); ?>
	<?php else: ?>
		<?php include('includes/header-front.php'); ?>
	<?php endif; ?>
<?php endif; ?>

<?php // include('includes/banners.php'); ?>

<?php 
$campaignId = 'campaign-' . mt_rand(1,3);
?>

	<div class="canvas-main <?php echo $campaignId; ?>">


	<div class="banner-wrapper">
		<div class="bg-banner"></div>
			<div class="topbanner demo-banner hidden-sm-down" style="width: 930px; height: 180px;"></div>
			<div class=" demo-banner hidden-md-up" style="width: 100%; height: 160px;">Leaderboard_1 320 x 320/160</div>
			<!-- <div class="hidden-lg-up hidden-sm-down"><img src="/dist/images/banners/ipad930x180.png" width="" height="" alt="" style="margin: 0 auto"/></div> -->
		
		


			<div class="container main-content">
			
			<?php  include('includes/frontpage/deck-section-1.php'); ?>

			<?php $bannerLabel = 'Leaderboard_2 930 x 180' ; include('includes/frontpage/deck-ad.php'); ?>
			<?php $bannerLabel = 'Leaderboard_2 320 x 320/160'; include('includes/frontpage/deck-ad-mobile.php'); ?>
			

			

			<?php if($template !== 'searchresult'): ?>
				
				<?php include('includes/frontpage/deck-section-2.php'); ?>

				<?php $bannerLabel = 'Leaderboard_3 930 x 180'; include('includes/frontpage/deck-ad.php'); ?>
				<?php $bannerLabel = 'Leaderboard_3 320 x 320/160'; include('includes/frontpage/deck-ad-mobile.php'); ?>

			<?php endif; ?>
			
			</div>

		</div><!-- banner-wrapper -->

	</div><!-- canvas-main -->

</div><!-- main-wrapper -->

<?php include('includes/footer.php'); ?>

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