<? require_once("../dummy/dummy.php") ?>

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
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Berlingske LIVE</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat|Oswald:300' rel='stylesheet' type='text/css'>
</head>
<body class=" <?php if($siteBusiness): ?>site-business<?php endif; ?> show-site-search">






<div class="site-search-overlay">
	<div class="warning">

		<div class="text-center"><p><strong>Av av av</strong></p> <p>Dette website er ikke responsivt endnu - kan endnu kun ses på store skærme :-)</p>
		</div>
	</div>	
</div>

<div class="main-wrapper">
<?php include('includes/offcanvas-menu.php'); ?>


<?php include('includes/site-header.php'); ?>


<?php 
$campaignId = 'campaign-' . mt_rand(1,3);
?>

<div class="canvas-main ">


	<div class="banner-wrapper">
	
	
	
	
	<div class="container " style="padding-top: 2rem">

		

		<div class="col-1-content" >
		
		<header class="article-header article-pull-left " >
			<div class="article-badge-kronik"><? dummy("text@b-cat") ?></div><br>
			
			<h1 class="article-title">
				<? dummy("text@headline-b") ?>
			</h1>
			
			
			
			
			<div class="article-byline clearfix">
				<figure class="article-avatar"><img src="<? dummy("image/!author@100x100,") ?>" width="" height="" alt="" /></figure>
				<? dummy("text@author") ?>  <? if (dumb_luck("50%")): ?><br> <i class="bicon-twitter col-twitter"></i> <? dummy("text@username") ?><? endif ?>
			</div>
			<div class="article-meta clearfix">
				<div class="article-date"><? dummy("text@date-long") ?> &mdash; kl. <? dummy("text@time") ?></div>
			
			<div class="share-buttons">
				<button class="btn-share"><i class="bicon-facebook"></i></button>
				<button class="btn-share"><i class="bicon-twitter"></i></button>
				<button class="btn-share"><i class="bicon-linkedin"></i></button>
				<button class="btn-share"><i class="bicon-mail"></i></button>
			</div>
			</div>
		</header>

		
		
		
		

		<div class="article-content" style="padding-left: 0;">
		

		<figure class="article-main-image article-pull-left">
			<img src="<? dummy("image@1240x,16:9") ?>" width="" height="" alt="" />
			<figcaption><? dummy("text@short-teaser") ?> <span>Foto: <? dummy("text@author") ?></span></figcaption>
		</figure>

		
			<p><strong><? dummy("text@teaser") ?></strong></p>
		
			
			
			
			<? while (dumb_luck("5")): ?>
				<p><? dummy("text@paragraph") ?></p>
			<? endwhile ?>
			<?php $embed = rand(1,2); ?>
			<?php $embed = 2; ?>
			<?php if($embed == '1'): ?>
			<section class="article-embed-right article-fact">
				<h3 class="embed-header">
					Fakta
				</h3>
				<div class="content">
					<? while (dumb_luck("1-3")): ?><p><? dummy("text@teaser") ?></p><? endwhile ?>
				</div>
			</section>
			<?php endif; ?>
			<?php if($embed == '2'): ?>
				<section class="article-embedded-link">
					<div class="article-embed-header">Læs også:</div>
					<figure>
						<a href="tpl-article-default.php"><img src="<? dummy("image@200x100,") ?>" width="" height="" alt="" /></a>
					</figure>
					<div class="header"><a href="tpl-article-default.php"><? dummy("text@headline-b") ?></a></div>
				</section>
			<?php endif; ?>
			<? while (dumb_luck("5")): ?>
				<p><? dummy("text@paragraph") ?></p>
			<? endwhile ?>
			<figure class="article-image-embed">
				<img src="<? dummy("image@940x,16:9") ?>" width="" height="" alt="" />
				<figcaption>
				<? dummy("text@teaser") ?></figcaption>
			</figure>
			<? while (dumb_luck("5")): ?>
				<p><? dummy("text@paragraph") ?></p>
			<? endwhile ?>

			<figure class="article-image-embed article-embed-right">
				<img src="<? dummy("image@940x,16:9") ?>" width="" height="" alt="" />
				<figcaption>
				<? dummy("text@teaser") ?></figcaption>
			</figure>
			<? while (dumb_luck("5")): ?>
				<p><? dummy("text@paragraph") ?></p>
			<? endwhile ?>
		</div>

		</div>
		<div class="col-2-sidebar">
		<div class="banner module ">
			<div style="width: 300px; height: 250px;" class="demo-banner"></div>
		</div>
		</div>
		
		
		

	</div><!-- container -->

</div><!-- banner-wrapper -->
</div><!-- canvas main -->
</div><!-- main-wrapper -->


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