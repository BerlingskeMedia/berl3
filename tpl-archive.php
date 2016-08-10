<? require_once("../dummy/dummy.php") ?>

<?php include('includes/_variables.php') ;?>

<?php 
if(isset($_GET["page"])) {
	$archive = $_GET["page"];
} 




?>



<?php 
	// $showWell = rand(1,1);
?>
<!DOCTYPE html>
<html lang="da">
<head>
	<?php include('includes/head.php'); ?>
	<title>Berlingske - Artikelarkiv</title>
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

			<div class="container main-content">
			
			
				<div class="col-lg-8 col-lg-offset-2">
					
					<h1>Artikelarkiv</h1>		
					
					<?php if($archive === '2'): ?>
					<p class="small"><a href="tpl-archive.php" class="small"><i class="bicon-angle-left"></i> Tilbage</a></p>
					
						
					 <ul class="list-box mb">
					 	<li class="list-box-title"><strong>2016</strong></li>
						<li><a href="?page=3">Januar</a></li>
						<li><a href="?page=3">Februar </a></li>
						<li><a href="?page=3">Marts</a></li>
						<li><a href="?page=3">April</a></li>
						<li><a href="?page=3">Maj</a></li>
						<li><a href="?page=3">Juni</a></li>
						<li><a href="?page=3">Juli</a></li>
						<li><a href="?page=3">August</a></li>
						<li><a href="?page=3">September</a></li>
						<li><a href="?page=3">Oktober</a></li>
						<li><a href="?page=3">November</a></li>
						<li><a href="?page=3">December</a></li>
					</ul>

					

					<?php elseif($archive === '3'): ?>
						<p class="small"><a href="tpl-archive.php" class="small"><i class="bicon-angle-left"></i> Tilbage</a></p>
						<p ><strong>Juni 2016</strong></p>	
						
						
					 <ul class="list-reset list-news list">
						<? while (dumb_luck("30")): ?>
						<li><a href="tpl-article.php"><? dummy("text@headline-b") ?></a></li>
						<? endwhile ?>
					</ul>



					<?php else: ?>
						

					<ul class="list-box mb">
						<li class="list-box-title"><strong>Vælg år:</strong></li>
						<li><a href="?page=2">2016</a></li>
						<li><a href="?page=2">2015</a></li>
						<li><a href="?page=2">2014</a></li>
						<li><a href="?page=2">2013</a></li>
						<li><a href="?page=2">2012</a></li>
						<li><a href="?page=2">2011</a></li>
						<li><a href="?page=2">2010</a></li>
						<li><a href="?page=2">2009</a></li>
						<li><a href="?page=2">2008</a></li>
						<li><a href="?page=2">2007</a></li>
						<li><a href="?page=2">2006</a></li>
						<li><a href="?page=2">2005</a></li>
						<li><a href="?page=2">2004</a></li>
						<li><a href="?page=2">2003</a></li>
						<li><a href="?page=2">2002</a></li>
						<li><a href="?page=2">2001</a></li>
						<li><a href="?page=2">2000</a></li>
						<li><a href="?page=2">1999</a></li>
					</ul>
					<?php endif; ?>
					

					

					<div class="form-group form-oneliner">
						<label class="sr-only" for="searchInputAdv">Søg på Berlingske</label>
						<input id="searchInputAdv" type="search" class="form-control ui-autocomplete-input" value="" autocomplete="off" placeholder="Søg på Berlingske.dk" accesskey="s" data-url="/autocomplete" data-search-url="/search" name="query">
						<button id="search" class="btn btn-blue"><i class="bicon-search-1"></i></button>
					</div>						
				</div>
			
			</div>

		</div><!-- banner-wrapper -->

	</div><!-- canvas-main -->

</div><!-- main-wrapper -->

<?php include('includes/footer.php'); ?>

<?php include('includes/footer-content.php'); ?>


</body>
</html>