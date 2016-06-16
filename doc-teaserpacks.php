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




<style>
	.row {margin-bottom: 6rem;}
</style>

<div class="container">
	
	<div class="row">
		
		<div class="col-xs-2 " >
			<h3>Teaser pack 1</h3>
		</div>
		
		<div class="col-xs-8 " style="width:780px">

			

			<?php
			$imgW='920'; 
			$showImg = '1';
			$class = ' teaser--img-wide item--teaser teaser--big  ';
			$imgRatio = '16:9';
			$imgSrc = '/landscape';
			$showSummary = true;
			$showComments = true;
			$showRelated = false;
			$showDate = false;
			$showCategory = false;
			$showPaywall = true;
			$showComments = true;
			$teaserLabel = 'yellow';
			// // $labelText = 'Terror i Bruxelles';
			//$teaserLabel = 'breaking';
			$teaserPack = '1';
			$showTrumpet = 'Teaser pack 1';

			include('includes/teaser-2.php') ?>

			</div>
		</div>
	<div class="row">

		<div class="col-xs-2 " >
			<h3>Teaser pack 2</h3>
		</div>

		<div class="col-xs-8 " style="width:780px">

			<?php
			$imgW='920'; 
			$showImg = '1';
			$class = ' teaser--img-wide item--teaser teaser--big ';
			$imgRatio = '16:9';
			$imgSrc = '/landscape';
			$showSummary = true;
			$showComments = true;
			$showRelated = false;
			$showDate = false;
			$showCategory = false;
			$showPaywall = true;
			$showComments = true;
			$teaserLabel = 'yellow';
			// $labelText = 'Terror i Bruxelles';
			//$teaserLabel = 'breaking';
			$teaserPack = '2';

			$showTrumpet = 'Teaser Pack 2';

			include('includes/teaser-2.php') ?>
			
		</div>
	</div>

	<div class="row">

		<div class="col-xs-2 " >
			<h3>Teaser pack 3</h3>
		</div>

		<div class="col-xs-8 " style="width:780px">

			<?php
			$imgW='920'; 
			$showImg = '1';
			$class = ' teaser--img-wide item--teaser teaser--big ';
			$imgRatio = '16:9';
			$imgSrc = '/landscape';
			$showSummary = true;
			$showComments = true;
			$showRelated = false;
			$showDate = false;
			$showCategory = false;
			$showPaywall = true;
			$showComments = true;
			$teaserLabel = 'yellow';
			// $labelText = 'Terror i Bruxelles';
			//$teaserLabel = 'breaking';
			$teaserPack = '3';
			$showTrumpet = 'Teaser Pack 3';

			include('includes/teaser-2.php') ?>
			
		</div>
	</div>

	<div class="row">

		<div class="col-xs-2 " >
			<h3>Teaser pack 4</h3>
		</div>

		<div class="col-xs-8 " style="width:780px">

			<?php
			$imgW='920'; 
			$showImg = '1';
			$class = ' teaser--img-wide item--teaser teaser--big ';
			$imgRatio = '16:9';
			$imgSrc = '/landscape';
			$showSummary = true;
			$showComments = true;
			$showRelated = false;
			$showDate = false;
			$showCategory = false;
			$showPaywall = true;
			$showComments = true;
			$teaserLabel = 'yellow';
			// $labelText = 'Terror i Bruxelles';
			//$teaserLabel = 'breaking';
			$teaserPack = '4';
			$showTrumpet = 'Teaser Pack 4';

			include('includes/teaser-2.php') ?>
			
		</div>
	</div>

	<div class="row">

		<div class="col-xs-2 " >
			<h3>Teaser pack 5</h3>
		</div>

		<div class="col-xs-8 " style="width:780px">

			<?php
			$imgW='920'; 
			$showImg = '1';
			$class = ' teaser--img-wide item--teaser teaser--big ';
			$imgRatio = '16:9';
			$imgSrc = '/landscape';
			$showSummary = true;
			$showComments = true;
			$showRelated = false;
			$showDate = false;
			$showCategory = false;
			$showPaywall = true;
			$showComments = true;
			$teaserLabel = 'yellow';
			// $labelText = 'Terror i Bruxelles';
			//$teaserLabel = 'breaking';
			$teaserPack = '5';

			$showTrumpet = 'Momssvindel';

			include('includes/teaser-2.php') ?>
			
		</div>
	</div>
</div>



<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.2/js/tether.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script> -->
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