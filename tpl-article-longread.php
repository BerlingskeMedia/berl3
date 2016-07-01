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
<body class=" <?php if($siteBusiness): ?>site-business<?php endif; ?> tpl-article tpl-article-longread">






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
						<?php include('includes/article/event-headers.php'); ?>
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
				<?php include('includes/article-embeds/rating.php'); ?>
				
				<?php $class = 'hidden-xl-up '; include('includes/article/social-buttons.php'); $class = false;?>

				<div class="hidden-sm-down hidden-lg-up mb text-center ipad-banner-article">
					<div class="demo-banner" style="width: 930px; height: 180px; background: url(/dist/images/banners/1/topbanner.png) center center no-repeat;"></div>	
				</div>

				<div class="demo-banner hidden-md-down mb" style="width:930px; height: 180px" >Leaderboard_1</div>

				
					
				
				
				
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
								
								<div class="article-bottom">
									<?php include('includes/article/related.php'); ?>
									<?php include('includes/article/topics.php'); ?>
									<?php include('includes/article-embeds/share-buttons-large.php'); ?>
								</div>
								
							</div><!-- article body -->

							
							
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


<?php include('includes/footer-content.php'); ?>











</body>
</html>