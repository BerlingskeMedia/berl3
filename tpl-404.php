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
$showDate = true;


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
<body class="tpl-section default-header <?php if($template): ?> default-header <?php endif; ?> <?php if($siteBusiness): ?>site-business<?php endif; ?> show-site-search">








<div class="main-wrapper">



	<?php include('includes/header-front.php'); ?>

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
			
			
			<div class="col-lg-8 col-lg-offset-2">
							
							

							

							<div class="mb text-center container-404">

								
									<h1 class=" article-title">Ups. Siden findes ikke</h1>		
										
									<p>Måske kan du finde ved ved at foretage en søgning:</p>


									
									<div class="form-group form-oneliner">
										<label class="sr-only" for="searchInputAdv">Søg på Berlingske</label>
										<input id="searchInputAdv" type="search" class="form-control ui-autocomplete-input" value="" autocomplete="off" placeholder="Søg på Berlingske.dk" accesskey="s" data-url="/autocomplete" data-search-url="/search" name="query">
										<button id="search" class="btn btn-blue"><i class="bicon-search-1"></i></button>
									</div>
									
									<p><a href="/"><i class="bicon-angle-left"></i> Gå til forsiden</a></p>
										
										
										

								
										

							

						</div>
						
										
						
					
			
			
			</div>

		</div><!-- banner-wrapper -->

	</div><!-- canvas-main -->

</div><!-- main-wrapper -->

<?php include('includes/footer.php'); ?>

<?php include('includes/footer-content.php'); ?>


</body>
</html>