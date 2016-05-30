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
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<div class="topbanner demo-banner hidden-sm-down" style="width: 930px; height: 180px;"></div>
	
	


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

	<div class=" deck">

		<div class="col-primary ">
			
			<div class="row flex-row">
				<div class="col-xl-3 col-lg-4 col-border-right-lg-up">
					<?php
						$imgW='920'; 
						$showImg = '0';
						$class = ' fs22 main-teaser';
						$imgRatio = '3:2';
						$showSummary = '1';
						$showRelated = '0';
						include('includes/teaser.php') ?>

						<? while (dumb_luck("3")): ?>
						<?php
						
						$showImg = '0';
						$imgW='140'; 
						$showImg = false;
						$smallImg = false;
						$class = ' fs12  ';
						$imgRatio = '3:2';
						$showSummary = '1';
						$showRelated = '0';
						include('includes/teaser.php') ?>
					<? endwhile ?>
				</div>
					
				<div class="col-xl-6 col-lg-8 col-border-right-lg-up ">
						<?php
						$imgW='920'; 
						$showImg = '1';
						$class = ' fs16 ';
						$imgRatio = '16:9';
						$imgSrc = '/landscape';
						$showSummary = '1';
						$showRelated = '1';

						include('includes/teaser.php') ?>

						<? while (dumb_luck("3")): ?>
							<?php
							$imgW='220'; 
							$showImg = '0';
							$smallImg = true;
							$class = ' fs12 clearfix';
							$imgRatio = '3:2';
							$imgSrc = '/landscape';
							$showSummary = '1';
							$showRelated = '0';

							include('includes/teaser.php') ?>
						<? endwhile ?>
				</div>

				<div class="col-xl-3 col-lg-12 col-border-right-lg-up col-small-teasers">
					<div class="row">
						
							
							<div class="col-xl-12 col-lg-3">
								<?php
									$imgW='220'; 
									$showImg = true;
									$smallImg = false;
									$class = ' fs10 teaser-no-border-xl';
									$imgRatio = '16:9';
									$showSummary = false;
									$showRelated = '0';

									include('includes/teaser.php') ?>		
							</div>
						

						
						<? while (dumb_luck("3")): ?>
							
							<div class="col-xl-12 col-lg-3">
								<?php
									$imgW='220'; 
									$showImg = true;
									$smallImg = false;
									$class = ' fs10 ';
									$imgRatio = '16:9';
									$showSummary = '0';
									$showRelated = '0';
									include('includes/teaser.php') ?>		
							</div>
						<? endwhile ?>
					</div>
				</div>
				
			</div>
		</div>

		<div class="col-sidebar">

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
				<div class="section-title">
					Børstal
				</div>
				<div class="test" style="height: 300px;">
					TBA
				</div>
			</section>

			

			<div class="banner mb-2 ">
				<div style="width: 300px; height: 250px;" class="demo-banner"></div>
			</div>
		</div>
		
	</div>
	

	

	<!-- <div class="row deck flex-row  ">
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
	</div> --><!-- deck -->

	


	<!-- 
	<div class="row deck hidden">
		
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

	</div> --><!-- /deck -->


	<div class="row deck ">
		<div class="text-center banner hidden-sm-down">
				<div class="demo-banner" style="width: 930px; height: 180px;"></div>
		</div>
	</div><!-- deck -->


	<div class="row deck hidden">

		

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

		<div class="col-lg-4 col-md-12 sidebar hidden">

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





	<?php // include('includes/deck-teaser-longread.php'); ?>

	
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