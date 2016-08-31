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
<body class="tpl-front default-header <?php if($siteBusiness): ?>site-business<?php endif; ?> show-site-search">








<div class="main-wrapper">


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
	<div class="topbanner demo-banner hidden-sm-down" style="width: 930px; height: 180px;"></div>
	
	
	


	<div class="container main-content">




	<?php 
		$squareBannerLabel = 'Square_2 - Sticky';
		$leaderboardBannerLabel = 'Leaderboard_3 (320x160 320x320)';
	 ?>
	<?php include('includes/frontpage/deck5.php'); ?>
	
	<?php 
		$bannerLabel = 'Leaderboard_2'; 
		include('includes/frontpage/deck-ad.php'); 
	?>
	
	<?php include('includes/frontpage/deck-longreads-3.php'); ?>
	
	<?php $bannerLabel = 'Leaderboard_3'; ?>
	<?php include('includes/frontpage/deck-ad.php'); ?>
	
	<?php 
		$showBflow = false; 
		$squareBannerLabel = 'Jobindex';
		$leaderboardBannerLabel = 'Leaderboard_4 (320x160 320x320)';
	include('includes/frontpage/deck6.php'); ?>
	
	<?php include('includes/frontpage/deck-debate-2.php'); ?>
	
	<?php 
		$squareBannerLabel = 'Square_3'; 
		$leaderboardBannerLabel = 'Leaderboard_5 (320x160 320x320)';
	?>
	<?php include('includes/frontpage/deck6.php'); ?>
	
	<?php include('includes/frontpage/deck-image-2.php'); ?>
	
	
	<?php 
		$showBflow = true; 
		$squareBannerLabel = 'Square_marketing'; 
		$leaderboardBannerLabel = 'Leaderboard_6 (320x160 320x320)';
	?>
	<?php include('includes/frontpage/deck6.php'); ?>


	<?php include('includes/frontpage/deck-debate-3.php'); ?> <!-- Den politiske Puls -->

	<?php 
		$squareBannerLabel = 'Square_4';
		$leaderboardBannerLabel = 'Leaderboard_7 (320x160 320x320)';
		include('includes/frontpage/deck6.php'); 
	?>

	<?php include('includes/frontpage/deck-consumersales-2.php'); ?>

	<?php $theme = 'roskilde'; include('includes/frontpage/deck-theme-2.php'); ?>
	
	<?php 
		$squareBannerLabel = 'Square_5 (?)'; 
		$leaderboardBannerLabel = 'Leaderboard_8 (320x160 320x320)';?>

	<?php include('includes/frontpage/deck6.php'); ?>

	<?php include('includes/frontpage/deck-towers-2.php'); ?>

	<?php include('includes/frontpage/deck-debate-4.php'); ?> <!-- Groft sagt -->


	
</div>


</div><!-- canvas-main -->
</div><!-- banner-wrapper -->
</div><!-- main-wrapper -->

<?php include('includes/footer.php'); ?>
<?php include('includes/footer-content.php'); ?>




</body>
</html>