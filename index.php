<? require_once("../dummy/dummy.php") ?>

<?php 
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



<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Berlingske</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat|Oswald:300' rel='stylesheet' type='text/css'>
</head>
<body>


<div class="site-header">
	Header
</div>

<div class="site-wrapper">
	<div class="container">
		
		<section class="deck">
			<div class="col-left">
				<div class="section-title">Topnyheder</div>
			</div>
			<div class="col-content">
				<div class="row">
					<div class="col-lg-8 col-xs-12 border-right-md-up">
						<? while (dumb_luck("1")): ?>
							<?php
							$imgW='920'; 
							$showImg = '1';
							$class = 'headline-1 mb border-bottom main-teaser';
							$imgRatio = '16:8';
							$showSummary = '1';
							$showRelated = '1';
							include('includes/teaser.php') ?>
						<? endwhile ?>
						<div class="row">
							<? while (dumb_luck("6")): ?>
							<div class="col-lg-12 col-xs-6">
								<?php
								$imgW='620'; 
								$showImg = '1';
								$class = 'headline-2 ';
								$imgRatio = '3:2';
								$showSummary = '0';
								$showRelated = '0';
								include('includes/teaser.php') ?>
							</div>
							<? endwhile ?>
						</div>
					</div>
					<div class="col-lg-4 col-xs-12">
						<div class="row">
							<? while (dumb_luck("4")): ?>
							<div class="col-lg-12 col-xs-6">
								<?php
								$imgW='400'; 
								$showImg = '1';
								$class = 'headline-3';
								$imgRatio = '3:2';
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
				<div class="module">
					<? dummy("ad@300x250") ?>
				</div>
			</div>
		</section><!-- deck -->

	</div><!-- container -->
</div><!-- site-wrapper -->








	


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