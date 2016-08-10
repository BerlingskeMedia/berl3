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
	<title>Berlingske - Holdet bag Berlingske</title>
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
			
			
		
		


			<div class="container main-content ">
			
			
			<div class="col-xs-12">
				
				<h1 class="text-center article-title mt">Holdet bag Berlingske</h1>
				
				<ul class="list-author-overview flex-row">
					<? while (dumb_luck("25")): ?>
					<li class="col-xs-6 col-md-4 col-lg-3">
						<figure>
							<a href="tpl-section.php?template=author"><img src="<? dummy("image/!author@200x,1:1") ?>" width="" height="" alt="" /></a>
						</figure>
						<h3 class="font-s1 "><strong><a href="tpl-section.php?template=author"><? dummy("text@author") ?></a></strong></h3>
						
							<button class="btn btn-xs btn-follow-author btn-blue">Følg</button>
						
						<p>Claus Skovhus er journalist på Berlingske Business. Jeg var i perioden 2011 til 2015 redaktør for Be...</p>
					</li>
					<? endwhile ?>
				</ul>
							
					
							
						
										
						
					
			
			
			</div>

		</div><!-- banner-wrapper -->

	</div><!-- canvas-main -->

</div><!-- main-wrapper -->

<?php include('includes/footer.php'); ?>

<?php include('includes/article/author-signup.php'); ?>	
<?php include('includes/footer-content.php'); ?>


</body>
</html>