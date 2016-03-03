<? require_once("../dummy/dummy.php") ?>

<?php if(isset($_GET["well"])) {
	$showWell = true;
} ?>
<?php if(isset($_GET["oneliner"])) {
	$showOneliner = true;
} ?>

<?php 
	// $showWell = rand(1,1);
?>
<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Front page</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
</head>
<body class="">

<div class="site-search-overlay">
	
</div>

<div class="main-wrapper">
<?php include('includes/offcanvas-menu.php'); ?>


<?php include('includes/site-header.php'); ?>
<div class="canvas-main">

<div class="banner-wrapper">
	
	
	

	
	<div class="bg-banner"></div>
	<div class="topbanner demo-banner" style="width: 930px; height: 180px;"></div>


<div class="container main-content">


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
					<div class="weather-of-the-day">
						<div class="forecast">
							København <a href="#" class="link-blue">Skift by <i class="bicon-angle-right"></i></a>
							<!-- Skyet og i nat kommer der sne vestfra -->
						</div>
						<span class="weather-icon-<?php echo rand(1,4); ?>"> 3&deg; / 9&deg;</span>
						
					</div>
				</div>

				
				<div class="col-deck-content ">
							
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
							
							

							<? while (dumb_luck("6")): ?>
							<?php 
								$imgW='420'; 
								// $class = 'fs10 teaser-bg teaser-bg-narrow teaser-font-alt';
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
			

			<section class="module">
				<div class="section-title ">
					Berlingske Shop
				</div>
				
				<div class="row">
					
					<? while (dumb_luck("2")): ?>
					<div class="col-xs-6">
					<?php 
					$imgW='420'; 
					// $class = 'fs10 teaser-bg teaser-bg-narrow teaser-font-alt';
					$class = 'fs09 teaser-font-alt';
					$showImg = '1';
					$imgRatio = '16:9';
					include('includes/teaser.php') ?>
					</div>
					

				<? endwhile ?>
				
				</div>
			</section>

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
			<span class="section-title">
				Opinion
			</span>
			<span class="section-link">
				<a href="tpl-section.php">Se alle <i class="bicon-angle-right"></i></a>
			</span>
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

						
						<div class="col-deck-content ">
									
								<div class="col-lg-12 col-md-12 border-right-lg">
								
									
								

									<?php include('includes/teaser-gallery.php'); ?>
									
									
									
											
									

									

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
								$class = 'fs10 mb teaser-thumb bb';
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


<script src="/dist/scripts/main.js"></script>




</body>
</html>