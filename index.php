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
<?php include('includes/site-header.php'); ?>

<div class="site-wrapper">

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
			
				
				
				
			<div class="row">
				<div class="col-deck-label">
				
					<div class="section-title">Topnyheder</div>

					<span class="section-date">
						<strong>Mandag</strong>28. februar 2015
					</span>
					<div class="weather-of-the-day">
						<span class="weather-icon-<?php echo rand(1,4); ?>"> 3&deg; / 9&deg;</span>
						<div class="forecast">
							<strong>København <a href="#" class="link-blue">Skift by <i class="bicon-angle-right"></i></a></strong>
							<!-- Skyet og i nat kommer der sne vestfra -->
						</div>
					</div>
				</div>

				
				<div class="col-deck-content border-right-lg">
							
						<div class="col-lg-8 col-md-8 border-right-lg">
						
							<?php // if(!$showWell) : ?>
									<?php
										$imgW='920'; 
										$showImg = '1';
										$class = ' fs22 border-bottom main-teaser';
										$imgRatio = '16:9';
										$showSummary = '1';
										include('includes/teaser.php') ?>
							<?php // endif; ?>
						

							<? while (dumb_luck("4")): ?>
							<?php 
								$imgW='140'; 
								$showImg = '1';
								$class = 'teaser-float-left fs12 bb';
								$imgRatio = '3:2';
								$showSummary = '0';
								include('includes/teaser.php') ?>
							<? endwhile ?>

							<?php // if(!$showWell) : ?>
									<?php
										$imgW='920'; 
										$showImg = '1';
										$class = ' fs22 border-bottom main-teaser';
										$imgRatio = '16:9';
										$showSummary = '0';
										include('includes/teaser.php') ?>
							<?php // endif; ?>

							<? while (dumb_luck("2")): ?>
							<?php 
								$imgW='140'; 
								$showImg = '1';
								$class = 'teaser-float-left fs12 bb';
								$imgRatio = '3:2';
								$showSummary = '0';
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
								include('includes/teaser.php') ?>
							<? endwhile ?>
						</div>
					
				</div>
			</div>
			
		</div>

		<div class="col-lg-4 col-md-12 sidebar">

			<div class="banner mb-2">
				<div style="width: 300px; height: 250px;" class="demo-banner"></div>
			</div>
			
			<?php include('includes/list-news.php'); ?>

			<section class="module">
				<div class="section-title ">
					Berlingske Shop
				</div>
				<div class="wite-padding">
				<div class="row">
					
					<? while (dumb_luck("2")): ?>
					<div class="col-xs-6">
					<?php 
					$imgW='420'; 
					// $class = 'fs10 teaser-bg teaser-bg-narrow teaser-font-alt';
					$class = 'fs10 teaser-font-alt';
					$showImg = '1';
					$imgRatio = '16:9';
					include('includes/teaser.php') ?>
					</div>
					

				<? endwhile ?>
				</div>
				</div>
			</section>

			<div class="banner mb-2">
				<div style="width: 300px; height: 250px;" class="demo-banner"></div>
			</div>
		</div>
		
	</div>
	

	<div class="deck">
		<div class="col-deck-label">
			 &nbsp;
			
		</div>
		<div class="col-deck-content banner">
				<div class="demo-banner" style="width: 930px; height: 180px;"></div>
		</div>
	</div><!-- deck -->


	<div class="deck">
		<div class="col-deck-label">
			<span class="section-title">
				Opinion
			</span>
			<span class="section-link">
				<a href="tpl-section.php">Se alle <i class="bicon-angle-right"></i></a>
			</span>
		</div>
		<div class="col-deck-content">
			<div class="row">
			<? while (dumb_luck("4")): ?>
			<div class="col-lg-3 col-md-3">
				<?php 
					$imgW='420'; 
					$class = 'fs12';
					$showImg = '1';
					$imgRatio = '1:1';
					include('includes/teaser-cat.php') ?>
			</div>
			<?php endwhile; ?>
			</div>
		</div>
	</div><!-- deck -->

	

	<div class="deck">
		<div class="col-deck-label">
			<span class="section-title">Flere nyheder</span>
		</div>

		<div class="col-deck-content row">
			<div class="col-lg-8 col-md-12 col-primary">
				
					
					
					
				<div class="row">
					

					
					
						
							<div class="col-lg-8 col-md-8">
								<? while (dumb_luck("6")): ?>
								<?php 
									$imgW='140'; 
									$showImg = '1';
									$class = 'teaser-float-left fs12 bb';
									$imgRatio = '1:1';
									$showSummary = '0';
									include('includes/teaser.php') ?>
								<? endwhile ?>
							</div>
							<div class="col-lg-4 col-md-4">
								
								

								<? while (dumb_luck("4")): ?>
								<?php 
									$imgW='420'; 
									// $class = 'fs10 teaser-bg teaser-bg-narrow teaser-font-alt';
									$class = 'fs10 bb ';
									$showImg = '1';
									$imgRatio = '16:9';
									include('includes/teaser-cat.php') ?>
								<? endwhile ?>
							</div>
						
					
				</div>
				
			</div>

			<div class="col-lg-4 col-md-12 sidebar">
				Liste
			</div>
		</div><!-- deck-content -->
	</div>


	<?php include('includes/deck-teaser-gallery.php'); ?>

	
</div>
</div><!-- site-wrapper -->



<script src="/dist/scripts/main.js"></script>




</body>
</html>