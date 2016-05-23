<? require_once("../dummy/dummy.php") ?>

<?php include('includes/_variables.php') ;?>
<?php 
$templateLongread = true;
?>


<!DOCTYPE html>
<html lang="da">
<head>
	<?php include('includes/head.php'); ?>

	<title>Berlingske - Article Longread</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
</head>
<body class=" not-front <?php if($siteBusiness): ?>site-business<?php endif; ?> tpl-article tpl-article-longread">



<a class="demo-trigger" href="#">
	<i class="bicon-angle-right"></i>
</a>
<div class="hidden-menu" id="hidden-menu">
	
	<ul class="demo-menu">
		HEJ
	</ul>
</div>

<div class="main-wrapper">
<?php include('includes/header-sub.php'); ?>


<?php // include('includes/site-header.php'); ?>





<div class="canvas-main ">

	<div class="banner-wrapper">
	
		



	
	<style>
	/* iPad default */
	.longread-head-image {
			background-image: url(<? dummy("image/!longread@1300x,5:3") ?>);
	}
	
	/* Large displays */
	@media (min-width: 1600px) {
		.longread-head-image {
			background-image: url(<? dummy("image/!longread@2200x,5:3") ?>);
		}
	}
	
	/* Phones */
	@media (max-width: 768px) {
		.longread-head-image {
			background-image: url(<? dummy("image/!longread@1000x,5:3") ?>);
		}	
	}
	</style>

	<header class="longread-head">
		
		<div class="longread-head-inner">
			<div class="longread-head-image">
				<div class="longread-wrapper">
					<div class="header-container">
						<h1 class="article-title">
						<?php if($trumpet == '1'): ?>
						<span class="article-trumpet">
							<? dummy("text@item") ?>
						</span>
						<?php endif; ?>
						<? dummy("text@headline-b") ?></h1>
					</div>
				</div>
			</div>
			<div class="longread-wrapper longread-wrapper-summary">
				<div class="header-container">
						<p class="article-summary"><? dummy("text@teaser") ?></p>
				</div>
			</div>
		</div>

	</header>	

		
		
	
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				
					
				<?php include('includes/article/date.php'); ?>
				
				<?php $class = 'hidden-xl-up '; include('includes/article/social-buttons.php'); $class = false;?>

				<div class="demo-banner hidden-md-down mb" style="width:930px; height: 180px" ></div>

				<div class="demo-banner hidden-lg-up hidden-sm-down mb" style="width:728px; height: 90px" ></div>
					
				<?php include('includes/article-embeds/rating.php'); ?>
				
				
				</div>
			</div>
		</div>
					

					
						
		<div class="container">
			<div class="row">
				<div class="col-md-12 ">
					<article>
						
						
						<div class="article-content">

							<div class="article-body">

								<?php include('includes/article/byline.php') ?>

								<?php include('includes/article-embeds/blog-bio.php'); ?>
								
								<p><? dummy("text@paragraph-first-letter") ?></p>

								<div class="hidden-md-up mb fw-sm">
									<div class="demo-banner demo-banner-mobile " style="width: 320px; height : 160px;"></div>
								</div>
								
								<p><? dummy("text@paragraph") ?></p>

								<?php include('includes/article-embeds/link.php'); ?>
								
								<p><? dummy("text@paragraph") ?></p>

								<h2><? dummy("text@headline-b") ?></h2>
								
								<p><? dummy("text@paragraph") ?></p>

								
								<?php include('includes/article-embeds/blockquote.php'); ?>

								<?php include('includes/article-embeds/fact-embedded.php'); ?>

								<?php include('includes/article-embeds/timeline-embedded.php'); ?>

								<?php include('includes/article-embeds/theme-embedded.php'); ?>

								<?php include('includes/article-embeds/embedded-images-longread.php'); ?>

								<?php include('includes/article-embeds/custom.php'); ?>

								<?php include('includes/article-embeds/tweet.php'); ?>
								
								<?php include('includes/article-embeds/fact-default.php'); ?>
								
								<?php include('includes/article/related.php'); ?>

								<?php include('includes/article/topics.php'); ?>
								
							</div><!-- article body -->

							<div class="article-bottom">
								<?php include('includes/article-embeds/share-buttons-large.php'); ?>
							</div>
							
						</div><!-- article content -->

					</article>
				</div>
			</div>
		</div>

		
	<div class="container">
		
		<?php include('includes/article/footer.php'); ?>

		<?php include('includes/article/comments.php'); ?>

	</div>
		
	
	

</div><!-- banner-wrapper -->
</div><!-- canvas main -->
</div><!-- main-wrapper -->

<?php // include('includes/consumersales-row.php'); ?>

<?php include('includes/footer.php'); ?>


<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
<script src="/dist/scripts/main.js"></script>
<script src="/dist/scripts/demo.js"></script>

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