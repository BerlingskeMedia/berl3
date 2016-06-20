<? require_once("../dummy/dummy.php") ?>

<?php include('includes/_variables.php') ;?>



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

<?php 

if (isset($_GET['labelText'])) {
	$labelText = $_GET['labelText'];
}

if (isset($_GET['labelType'])) {
	$labelType = $_GET['labelType'];
}

?>
<style>
	.row {margin-bottom: 6rem;}
</style>

<div class="container">
	
	<div class="row">
		<div class="col-xs-12">
			<p>Choose tag type: 
			<a href="?labelText=Breaking&labelType=yellow"><span class="teaser--label-yellow"><span>Breaking</span></span></a>
			<a href="?labelText=<i%20class=bicon-record></i>%20Live&labelType=live"><span class="teaser--label-live"><span>Live</span></span></a>
			<a href="?labelText=Opdateres&labelType=red"><span class="teaser--label-red"><span>To be updated</span></span></a>
			<a href="?labelText=Lige%20nu&labelType=red"><span class="teaser--label-red"><span>Now</span></span></a>
			<a href="?labelText=Nyhed på vej&labelType=red"><span class="teaser--label-red"><span>Coming up</span></span></a>
			<a href="?labelText=Tophistorie&labelType=blue"><span class="teaser--label-blue"><span>Topstory</span></span></a>
			</p>

		</div>
	</div>
	
	<div class="row">
		<div class="col-xs-12">
			<h2>Teasers</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-2 " >
			<h3>Teaser big default</h3>
		</div>
		
		<div class="col-xs-8 " style="width:780px">


			<?php
			$imgW='920'; 
			$showImg = '1';
			$class = ' teaser--img-wide item--teaser teaser--big';
			$imgRatio = '16:9';
			$imgSrc = '/landscape';
			$showSummary = true;
			$showDate = false;
			$showCategory = false;
			$category = false;
			$showPaywall = true;
			$teaserPack = false;
			include('includes/frontpage/teasers/teaser.php') ?>

			</div>
	</div>

	<div class="row">
		<div class="col-xs-2 " >
			<h3>Teaser big - Business</h3>
		</div>
		
		<div class="col-xs-8 " style="width:780px">


			<?php
			$imgW='920'; 
			$showImg = '1';
			$class = ' teaser--img-wide item--teaser teaser--big  teaser--theme-business';
			$imgRatio = '16:9';
			$imgSrc = '/landscape';
			$showSummary = true;
			$showDate = false;
			$showCategory = true;
			$category = 'Business.dk';
			$showPaywall = true;
			$teaserPack = false;
			include('includes/frontpage/teasers/teaser.php') ?>

			</div>
	</div>

	<div class="row">

		<div class="col-xs-2 " >
			<h3>Teaser small img-left</h3>
		</div>

		<div class="col-xs-8 " style="width:780px">

			<?php
			$imgW='320'; 
			$showImg = '1';
			$class = ' teaser--img-left item--teaser teaser--small';
			$imgRatio = '16:9';
			$imgSrc = '/landscape';
			$showSummary = true;
			$showDate = false;
			$showCategory = false;
			$showPaywall = true;
			$teaserPack = false;
			$showTrumpet = false;
			
			include('includes/frontpage/teasers/teaser.php') ?>
			
		</div>
	</div>

	<div class="row">

		<div class="col-xs-2 " >
			<h3>Teaser small img-right</h3>
		</div>

		<div class="col-xs-8 " style="width:780px">

			<?php
			$imgW='320'; 
			$showImg = '1';
			$class = ' teaser--img-right item--teaser teaser--small';
			$imgRatio = '16:9';
			$imgSrc = '/landscape';
			$showSummary = true;
			
			$showDate = false;
			$showCategory = false;
			$showPaywall = true;
			$teaserPack = false;
			

			include('includes/frontpage/teasers/teaser.php') ?>
			
		</div>
	</div>

	<div class="row">

		<div class="col-xs-2 " >
			<h3>Teaser small img-right - Business</h3>
		</div>

		<div class="col-xs-8 " style="width:780px">

			<?php
			$imgW='320'; 
			$showImg = '1';
			$class = ' teaser--img-right item--teaser teaser--small teaser--theme-business';
			$imgRatio = '16:9';
			$imgSrc = '/landscape';
			$showSummary = true;
			$showDate = false;
			$category = 'Business.dk';
			$showPaywall = true;
			$teaserPack = false;
			

			include('includes/frontpage/teasers/teaser.php') ?>
			
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<h2>Related teasers</h2>
		</div>
	</div>
	<div class="row">

		<div class="col-xs-2 " >
			<h3> related-large</h3>
		</div>

		<div class="col-xs-8 " style="width:780px">
			<div class="teaser-2">
				<div class="teaser--pack">
					<ul class="teaser--pack--list">
						<li class="col-xs-12">
						
						<?php 
						// ONELINERS
						$relatedCount = '1';
						$relatedGridClass = 'col-xs-12';
						$relatedTeaserClass = 'item--teaser related--image teaser--img-left related--large ';
						$relatedShowImg = true;
						$relatedImgSize = '160';
						$relatedImgRatio = '3:2';
						$relatedImgSrc = '/landscape';
						$showRelatedSummary = true;
						$showRelatedPaywall = true;
						$relatedTrumpet = false;
						
						
						
						include('includes/frontpage/teasers/teaser-related.php'); 
						?>		
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-xs-2 " >
			<h3>related-large - Business</h3>
		</div>

		<div class="col-xs-8 " style="width:780px">
			<div class="teaser-2">
				<div class="teaser--pack">
					<ul class="teaser--pack--list">
						<li class="col-xs-12">
						
						<?php 
						// ONELINERS
						$relatedCount = '1';
						$relatedGridClass = 'col-xs-12';
						$relatedTeaserClass = 'item--teaser related--image teaser--img-left related--large teaser--theme-business';
						$relatedShowImg = true;
						$relatedImgSize = '160';
						$relatedImgRatio = '3:2';
						$relatedImgSrc = '/landscape';
						$showRelatedSummary = true;
						$showRelatedPaywall = true;
						$relatedTrumpet = false;
						$showRelatedCategory = 'Business.dk';
						
						
						
						include('includes/frontpage/teasers/teaser-related.php'); 
						?>		
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>



	<div class="row">

		<div class="col-xs-2 " >
			<h3>related-small</h3>
		</div>

		<div class="col-xs-8 " style="width:780px">
			<div class="teaser-2">
				<div class="teaser--pack">
					<ul class="teaser--pack--list">
						<li class="col-xs-12">
						
						<?php 
						// ONELINERS
						$relatedCount = '1';
						$relatedGridClass = 'col-xs-6';
						$relatedTeaserClass = 'item--teaser related--image teaser--img-left related--small ';
						$relatedShowImg = true;
						$relatedImgSize = '160';
						$relatedImgRatio = '3:2';
						$relatedImgSrc = '/landscape';
						$showRelatedSummary = false;
						$showRelatedPaywall = true;
						$relatedTrumpet = false;
						$showRelatedCategory = false;
						
						// $relatedlabelType = 'red';
						include('includes/frontpage/teasers/teaser-related.php'); 
						?>		
						</li>

						<li class="col-xs-12">
						
						<?php 
						// ONELINERS
						$relatedCount = '1';
						$relatedGridClass = 'col-xs-6';
						$relatedTeaserClass = 'item--teaser related--image teaser--img-left related--small teaser--theme-business';
						$relatedShowImg = true;
						$relatedImgSize = '160';
						$relatedImgRatio = '3:2';
						$relatedImgSrc = '/landscape';
						$showRelatedSummary = false;
						$showRelatedPaywall = true;
						$relatedTrumpet = false;
						$relatedCategory = 'Business.dk';
						
						// $relatedlabelType = 'red';
						include('includes/frontpage/teasers/teaser-related.php'); 
						?>		
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>



	
	<div class="row">

		<div class="col-xs-2 " >
			<h3>related-xsmall</h3>
		</div>

		<div class="col-xs-8 " style="width:780px">
			<div class="teaser-2">
				<div class="teaser--pack">
					<ul class="teaser--pack--list">
						<li class="col-xs-12">
						
						<?php 
							// ONELINERS
							$relatedCount = '1';
							$relatedGridClass = 'col-xs-12';
							$relatedTeaserClass = 'item--teaser  related--xsmall';
							$relatedShowImg = false;
							$relatedImgSize = '160';
							$relatedImgRatio = '3:2';
							$relatedImgSrc = '/landscape';
							$showRelatedSummary = false;
							$showRelatedPaywall = true;
							$relatedTrumpet = true;
							include('includes/frontpage/teasers/teaser-related.php'); 
						?>
						<?php 
							// ONELINERS
							$relatedCount = '1';
							$relatedGridClass = 'col-xs-12';
							$relatedTeaserClass = 'item--teaser  related--xsmall teaser--theme-business';
							$relatedShowImg = false;
							$relatedImgSize = '160';
							$relatedImgRatio = '3:2';
							$relatedImgSrc = '/landscape';
							$showRelatedSummary = false;
							$showRelatedPaywall = true;
							$relatedTrumpet = true;
							include('includes/frontpage/teasers/teaser-related.php'); 
						?>
						
						</li>
					</ul>
				</div>
			</div>
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