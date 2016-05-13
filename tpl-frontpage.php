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
	<title>Berlingske - Front</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat|Oswald:300' rel='stylesheet' type='text/css'>
</head>
<body class="tpl-front <?php if($siteBusiness): ?>site-business<?php endif; ?> show-site-search">






<div class="site-search-overlay">
	<div class="warning">

		<div class="text-center"><p><strong>Av av av</strong></p> <p>Dette website er ikke responsivt endnu - kan endnu kun ses på store skærme :-)</p>
		</div>
	</div>	
</div>

<div class="main-wrapper">
<?php include('includes/offcanvas-menu.php'); ?>
<?php if($siteBusiness): ?>
<?php include('includes/header-sub.php'); ?>
<?php else: ?>
<?php include('includes/header-front.php'); ?>
<?php endif; ?>
<?php include('includes/banners.php'); ?>

<?php 
$campaignId = 'campaign-' . mt_rand(1,3);
?>

<div class="canvas-main <?php echo $campaignId; ?>">


	<div class="banner-wrapper">
	<div class="bg-banner"></div>
	<div class="topbanner demo-banner" style="width: 930px; height: 180px;"></div>
	
	


	<div class="container main-content">

	<?php if($showWide): ?>
		<div class="row">
			<div class="col-md-12">
				<?php include('includes/teaser-wide.php'); ?>
			</div>
		</div>
	
	<?php endif; ?>


	<?php if($showWell): ?>
		<div class="row well-container">
			<div class="col-md-12">
				<?php include('includes/teaser-well.php'); ?>
			</div>
		</div>
	
	<?php endif; ?>

	<div class="row deck">

		

		<div class="col-lg-8 col-md-12 col-primary">
			
				
				
				
			<div class="row flex-row">
				<div class="col-deck-label">
				
					<div class="section-title">Topnyheder</div>

					<div class="section-date">
						<div>Mandag</div>
						28. februar 2015
					</div>
					<?php if(!$siteBusiness): ?>
					<div class="weather-of-the-day">
						<div class="forecast">
							København <a href="#" class="link-blue">Skift by <i class="bicon-angle-right"></i></a>
							<!-- Skyet og i nat kommer der sne vestfra -->
						</div>
						<span class="weather-icon-<?php echo rand(1,4); ?>"> 3&deg; / 9&deg;</span>
						
					</div>
					<?php endif; ?>
				</div>

				
				<div class="col-deck-content ">
						
						
						<?php  if($showTop) : ?>
							<div class="col-lg-12">
							<?php
									$imgW='920'; 
									$showImg = '1';
									$class = ' fs26 mb border-bottom main-teaser';
									$imgRatio = '16:8';
									$showSummary = '1';
									$showRelated = '1';
									include('includes/teaser.php') ?>
							</div>
						<?php endif; ?>
						
						<div class="col-lg-8 col-md-8 border-right-lg">
						
							<?php // if(!$showWell) : ?>
									<?php
										$imgW='920'; 
										$showImg = '1';
										$class = ' fs22 mb border-bottom main-teaser';
										$imgRatio = '3:2';
										$showSummary = '1';
										$showRelated = '1';
										include('includes/teaser.php') ?>
							<?php // endif; ?>
						

							<? while (dumb_luck("8")): ?>
							<?php 
								$imgW='140'; 
								$showImg = '1';
								$class = 'teaser-float-left fs12 bb';
								$imgRatio = '3:2';
								$showSummary = '0';
								$showRelated = '0';
								$showKey = true;
								include('includes/teaser.php') ?>
							<? endwhile ?>
							
							
							
									
			

						</div>
						<div class="col-lg-4 col-md-4">
							<?php 
							$teaserColor = rand(1,2); 
							if($teaserColor == '1') 
								{$color = 'teaser-quote-1'; } 
								else 
								{$color = 'teaser-quote-2'; }
							?>
							<? while (dumb_luck("2")): ?>
							<?php 
								$imgW='420'; 
								$class = 'fs10 bb ';
								$showImg = '1';
								$imgRatio = '3:2';
								$showKey = true;
								include('includes/teaser.php') ?>
							<? endwhile ?>
							<?php 
								$imgW='120'; 
								$class = 'fs16 bb ' . $color;
								$showImg = '1';
								$imgSrc = '/!b-kommentatorer';
								$imgRatio = '1:1';
								$showKey = true;
								include('includes/teaser.php') ?>

							<? while (dumb_luck("3")): ?>
							<?php 
								$imgW='420'; 
								$class = 'fs10 bb ';
								$showImg = '1';
								$imgRatio = '3:2';
								$showKey = true;
								include('includes/teaser.php') ?>
							<? endwhile ?>
							

							

							<div>
							
							</div>
						</div>
						
						
						
					
				</div>
			</div>
			
		</div>

		<div class="col-lg-4 col-md-12 sidebar">

			<div class="banner module ">
				<div style="width: 300px; height: 250px;" class="demo-banner"></div>
			</div>
			
			<?php 
			$showTime = true; 
			$listClass = 'list-time';
			$listTitle = 'Seneste nyt';
			$listCount = '10';
			$sectionClass = 'latest-news mb-2';

			include('includes/list-news.php');
			?>
			
			<?php if(!$siteBusiness ): ?>
			<section class="module">
				<div class="section-title ">
					Berlingske Shop
				</div>
				
				<div class="row">
					
					<? while (dumb_luck("2")): ?>
					<div class="col-xs-6">
					<?php 
					$imgW='420'; 
					$class = 'fs09 teaser-font-alt';
					$showImg = '1';
					$imgRatio = '16:9';
					include('includes/teaser.php') ?>
					</div>
				<? endwhile ?>
				</div>
			</section>
			<?php else: ?>

			<section class="module">
				<div class="section-title">
					Børstal
				</div>
				<div class="test" style="height: 300px;">
					TBA
				</div>
			</section>

			<?php endif; ?>

			<div class="banner mb-2 ">
				<div style="width: 300px; height: 250px;" class="demo-banner"></div>
			</div>
		</div>
		
	</div>
	

	<div class="row deck ">
		<div class="text-center banner">
				<div class="demo-banner" style="width: 930px; height: 180px;"></div>
		</div>
	</div><!-- deck -->


	<div class="row deck flex-row	">
		<div class="col-deck-label">
			<div class="section-title">
				Opinion
			</div>
			<div class="section-link">
				<a href="tpl-section.php">Se alle <i class="bicon-angle-right"></i></a>
			</div>
		</div>
		<div class="col-deck-content">
			<div class="flex-row br-lg">

			<div class="col-xs-1-5th flex-row">
				<article class="teaser teaser-sm fs12">
					
					<figure class="teaser-img">
						<a href="tpl-article.php">
						<img src="/dist/images/vaabenskjold.png" alt="" class="img" height="120" width="120" style="margin-left: auto; margin-right: auto;" >
						
						</a>						
					</figure>
					
					<div class="teaser-body">
						<span class="teaser-cat">
							Leder
						</span>
						<h2 class="header">

							<a href="tpl-article.php">
							
							<? dummy("text@headline-b2") ?>
							</a>
						</h2>

					
						<span class="teaser-author">&mdash; <? dummy("text@author") ?></span>
					

					</div>
				</article>
			</div>
			<? while (dumb_luck("4")): ?>
			<div class="col-xs-1-5th flex-row">
				<?php 
					$imgW='120'; 
					$class = 'fs12 teaser-thumb';
					$showImg = '1';
					$imgRatio = '1:1';
					$showAuthor = true;
					$imgSrc = '/!b-kommentatorer';
					include('includes/teaser.php') ?>
			</div>
			<?php endwhile; ?>
			</div>
		</div>
	</div><!-- deck -->

	


	
	<div class="row deck">
		
		<div class="col-lg-8 col-md-12 col-primary">
					
			<div class="row flex-row">
				<div class="col-deck-label">
					<div class="section-title">
						Verden i billeder
					</div>						
				</div>
					
				<div class="col-deck-content border-right-lg">
					
						<?php include('includes/teaser-gallery.php'); ?>
					
				</div>

			</div>
		</div>

		<div class="col-lg-4 col-md-12 sidebar">

			<div class="banner module ">
				<div style="width: 300px; height: 250px;" class="demo-banner"></div>
			</div>
			
			<?php 
			$showTime = true; 
			$sectionClass = 'mb-0';
			$listClass = 'list-top';
			$listTitle = 'Andre læser lige nu';
			$listCount = '5';
			$showTime = false; 
			
			include('includes/list-news.php');
			?>

		</div>

	</div><!-- /deck -->


	<div class="row deck ">
		<div class="text-center banner">
				<div class="demo-banner" style="width: 930px; height: 180px;"></div>
		</div>
	</div><!-- deck -->


	<div class="row deck">

		

		<div class="col-lg-8 col-md-12 col-primary">
			
				
				
				
			<div class="row flex-row">
				<div class="col-deck-label">
					<div class="section-title">Dagen i dag</div>
					
					<div class="small today gray mb-2">
					<? while (dumb_luck("3")): ?>
					<p><? dummy("text@dagenidag") ?></p>
					<? endwhile ?>
					</div>
					
				
					
				</div>

				
				<div class="col-deck-content ">
							
						<div class="col-lg-8 col-md-8 border-right-lg">
						
							<?php // if(!$showWell) : ?>
									<?php
										$imgW='920'; 
										$showImg = '1';
										$class = ' fs22 mb border-bottom main-teaser';
										$imgRatio = '16:9';
										$showSummary = '1';
										$showRelated = '1';
										include('includes/teaser.php') ?>
							<?php // endif; ?>
						

							<? while (dumb_luck("6")): ?>
							<?php 
								$imgW='140'; 
								$showImg = '1';
								$class = 'teaser-float-left fs12 bb';
								$imgRatio = '3:2';
								$showSummary = '0';
								$showRelated = '0';
								$showKey = true;
								include('includes/teaser.php') ?>
							<? endwhile ?>
							
							
							
									
							

							<? while (dumb_luck("2")): ?>
							<?php 
								$imgW='140'; 
								$showImg = '1';
								$class = 'teaser-float-left fs12 bb';
								$imgRatio = '3:2';
								$showSummary = '0';
								$showKey = true;
								include('includes/teaser.php') ?>
							<? endwhile ?>

						</div>
						<div class="col-lg-4 col-md-4">
							
							

							<? while (dumb_luck("2")): ?>
							<?php 
								$imgW='420'; 
								// $class = 'fs10 teaser-bg teaser-bg-narrow teaser-font-alt';
								$class = 'fs10 bb ';
								$showImg = '1';
								$imgRatio = '3:2';
								$sectionClass = 'mb';
								$showKey = true;
								include('includes/teaser.php') ?>
							<? endwhile ?>

							<div class="section-title mt-3">Til Stregen</div>
							
							
							<? while (dumb_luck("2")): ?>
							<?php 
								$imgW='120'; 
								// $class = 'fs10 teaser-bg teaser-bg-narrow teaser-font-alt';
								$class = 'fs10 mb teaser-thumb bb-all';
								$showImg = '1';
								$imgRatio = '1:1';
								$imgSrc = '!b-tilstregen';
								$sectionClass = 'mb';
								$showAuthor = true;
								include('includes/teaser.php') ?>
							<? endwhile ?>
							

							<div class="section-title mt-3">Navne</div>
							<div class="small gray">

								<strong class="gray-darker">90 år</strong>
								<ul class="list-reset mb list-bullet">
									<? while (dumb_luck("1-3")): ?><li class="small"><a href="#"><? dummy("text@author") ?></a></li><? endwhile ?>	
								</ul>
								<strong class="gray-darker">80 år</strong>
								<ul class="list-reset mb-1 list-bullet">
									<? while (dumb_luck("1-3")): ?><li class="small"><a href="#"><? dummy("text@author") ?></a></li><? endwhile ?>	
								</ul>

								<strong class="gray-darker">75 år</strong>
								<ul class="list-reset mb-1 list-bullet">
									<? while (dumb_luck("1-3")): ?><li class="small"><a href="#"><? dummy("text@author") ?></a></li><? endwhile ?>	
								</ul>
								
								
							</div>
								
							
						</div>
					
				</div>
			</div>
			
		</div>

		<div class="col-lg-4 col-md-12 sidebar">

			<div class="banner module ">
				<div style="width: 300px; height: 250px;" class="demo-banner"></div>
			</div>
			
			<?php 
			$showTime = true; 
			$listClass = 'list-top ';
			$listTitle = 'Andre læser lige nu';
			$showTime = false; 
			
			include('includes/list-news.php');
			?>
			

			

			<div class="banner mb-2 ">
				<div style="width: 300px; height: 250px;" class="demo-banner"></div>
			</div>
		</div>
		
	</div>





	<?php include('includes/deck-teaser-longread.php'); ?>

	
</div>
</div><!-- canvas-main -->
</div><!-- banner-wrapper -->
</div><!-- main-wrapper -->


<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.2/js/tether.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
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