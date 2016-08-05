<? require_once("../dummy/dummy.php") ?>

<?php include('includes/_variables.php') ;?>


<?php 
	$hideComments = false;
	if($isAdvertorial){
		$hideComments = true;
	}
	if($paywall || $isAdvertorial) {
		$showMarketingBanner = false;
	} else {
		$showMarketingBanner = true;
	}

?>
<!DOCTYPE html>
<html lang="da">
<head>
	<?php include('includes/head.php'); ?>
	
	<title>Berlingske - Article</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
	
</head>
<body class="<?php if($siteBusiness): ?>site-business<?php endif; ?> tpl-article <?php if($isAdvertorial): echo 'default-header'; endif; ?>">



<?php include('includes/facebook.php'); ?>

<a class="demo-trigger" href="#">
	<i class="bicon-angle-right"></i>
</a>



<div class="main-wrapper">


<?php if($isAdvertorial): ?>
<?php include('includes/header-front.php'); ?>
<?php else: ?>
<?php include('includes/header-sub.php'); ?>
<?php endif; ?>



<div class="canvas-main <?php echo $campaignId; ?>">

	<div class="banner-wrapper">
	<div class="bg-banner hidden-md-down"></div>

	<div class="topbanner demo-banner hidden-sm-down" style="width: 930px; height: 180px;"></div>


	
	
	<div class="container site-content">
		<div class="row">
		
		<div class="col-md-12 ">

		
		<?php include('includes/article/header.php'); ?>

		
		
			<div class="col-1-content <?php if($paywall === 'soft'): echo 'article-cutoff'; endif; ?>">
					
					<?php if($paywall === 'soft'): ?>
							<?php include('includes/article/paywall.php'); ?>
					<?php endif; ?>

					<div class="article-content ">
						
						
						
					
						<?php if($imageSize == '1' || $imageSize == '4'): // large image ?>
						
							<?php include('includes/article-embeds/article-image.php'); ?>

						<?php elseif($imageSize == '3'): ?>

							<?php include('includes/article-embeds/article-image.php'); ?>

						<?php elseif($imageSize == '5'): ?>

							<?php include('includes/article-embeds/article-video.php'); ?>

						<?php endif; ?>
						
						

						<?php include('includes/article/partners.php'); ?>		
						
						<?php if($showByline == true) : ?>
							<?php include('includes/article/byline.php') ?>
						<?php endif; ?>



						

							<div class="article-body">
							
							
			
							<?php if ($imageSize == '2'): ?>
								<?php $portrait = true; ?>
								<?php include('includes/article-embeds/article-image-float-right.php'); ?>
							<?php endif; ?>
							

							<?php include('includes/article-embeds/blog-bio.php'); ?>
								
							
							<?php if($showMarketingBanner): include('includes/article-embeds/newsletter-embedded.php'); endif; ?>
							
							<p><? dummy("text@paragraph-first-letter") ?></p>

							<div class="hidden-md-up mb fw-sm continue-reading-banner">
								<div class="demo-banner demo-banner-mobile " style="width: 320px; height : 160px;">Leaderboard_1 Mobile</div>
							</div>
							
							
							
							
							
							

							<?php if($paywall === 'hard'): ?>
								<?php include('includes/article/paywall.php'); ?>
							<?php endif; ?>
							
								

							<?php if($paywall !== 'hard'): ?>
								<?php if(!$isAdvertorial): ?>
									<div class="hidden-md-down inline-banner" style="width: 300px; height: 250px;">Square_4</div>
									<div class=" inline-banner hidden-lg-up hidden-sm-down" style="width: 300px; height: 250px;">Square_1 Tablet</div>
								<?php endif; ?>

								<p><? dummy("text@paragraph") ?></p>
								<p><? dummy("text@paragraph") ?></p>
								<?php if ($showGalleryTeaser == '2'): ?>
									<?php include('includes/gallery-teaser-large.php'); ?>
								<?php endif; ?>
					
								<ol>
									<? while (dumb_luck("7")): ?><li><? dummy("text@headline") ?></li><? endwhile ?>
								</ol>
								
								<? while (dumb_luck("2")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>
								
								<?php include('includes/banners/special-phone-banner.php'); ?>

								<?php include('includes/article-embeds/link.php'); ?>
								<? while (dumb_luck("1")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>

								<h2><? dummy("text@headline-b") ?></h2>
								<? while (dumb_luck("1")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>
								
								<?php include('includes/article-embeds/blockquote.php'); ?>

								<?php include('includes/article-embeds/fact-embedded.php'); ?>

								<?php include('includes/article-embeds/timeline-embedded.php'); ?>

								<?php include('includes/article-embeds/theme-embedded.php'); ?>

								<?php include('includes/article-embeds/embedded-images.php'); ?>

								<?php include('includes/article-embeds/custom.php'); ?>

								<?php include('includes/article-embeds/tweet.php'); ?>

								<?php include('includes/article-embeds/download-file.php'); ?>

								<?php include('includes/article-embeds/fact-default.php'); ?>

								<?php if($paywall === 'soft') :?>
									<div class="marketing-soft-paywall">
										Kunne du lide artiklen? <a href="#" class="link-blue">Prøv et Berlingske digitalt abonnement</a>.
									</div>
								<?php endif; ?>

								<div class="article-bottom">
									<?php if(!$isAdvertorial): ?>
										<?php include('includes/article/related-partner.php'); ?>
										<?php include('includes/article/related.php'); ?>
										<?php include('includes/article/topics.php'); ?>
									<?php endif; ?>
									<?php include('includes/article-embeds/share-buttons-large.php'); ?>
								</div>

							<?php endif; // End Paywall ?>


							
						</div><!-- article body -->

					</div><!-- article content -->

		

			
			</div>
			

			<div class="col-2-sidebar">
				<?php 
				if($isAdvertorial) :
					include('includes/article/right-col-advertorial.php');
				else: 
					include('includes/article/right-col-2.php'); 
				endif;
				?>
				
			</div>

	</div>

		
		
	</div><!-- row -->

		<?php include('includes/article/footer.php');?>

		<?php if(!$isAdvertorial): include('includes/article/comments.php'); endif;?>
	</div>		
		
		
		
		

	</div><!-- container -->

</div><!-- banner-wrapper -->

</div><!-- main-wrapper -->

<?php // include('includes/consumersales-row.php'); ?>

<?php include('includes/footer.php'); ?>


<?php include('includes/article/adblocker-blocker.php'); ?>


<?php include('includes/article/send-to-a-friend.php'); ?>
<?php include('includes/article/author-signup.php'); ?>	

<?php include('includes/footer-content.php'); ?>


</body>
</html>