<? require_once("../dummy/dummy.php") ?>

<?php include('includes/_variables.php') ;?>


<?php 
	$hideComments = false;
?>
<!DOCTYPE html>
<html lang="da">
<head>
	<?php include('includes/head.php'); ?>
	
	<title>Berlingske - Article</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
	
</head>
<body class="<?php if($siteBusiness): ?>site-business<?php endif; ?> tpl-article">

<?php include('includes/facebook.php'); ?>

<a class="demo-trigger" href="#">
	<i class="bicon-angle-right"></i>
</a>



<div class="main-wrapper">
<?php include('includes/offcanvas-menu.php'); ?>


<?php include('includes/header-sub.php'); ?>


<div class="canvas-main <?php echo $campaignId; ?>">

	<div class="banner-wrapper">
	<div class="bg-banner hidden-md-down"></div>

	<div class="topbanner demo-banner hidden-sm-down" style="width: 930px; height: 180px;"></div>


	
	
	<div class="container site-content">
		<div class="row">
		
		<div class="col-md-12 ">

		
		<?php include('includes/article/header.php'); ?>

		
		
			<div class="col-1-content">

					<div class="article-content">
						
						
					
						<?php if($imageSize == '1' || $imageSize == '4'): // large image ?>
						
							<?php include('includes/article-embeds/article-image.php'); ?>

						<?php elseif($imageSize == '3'): ?>

							<?php include('includes/article-embeds/article-image.php'); ?>

						<?php elseif($imageSize == '5'): ?>

							<?php include('includes/article-embeds/article-video.php'); ?>

						<?php endif; ?>
						
						<?php if($paywall === 'soft'): ?>
							<?php include('includes/article/paywall.php'); ?>
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

							<?php include('includes/article-embeds/newsletter-embedded.php'); ?>
							
							<p><? dummy("text@paragraph-first-letter") ?></p>

							<div class="hidden-md-up mb fw-sm continue-reading-banner">
								<div class="demo-banner demo-banner-mobile " style="width: 320px; height : 160px;">Leaderboard_1 Mobile</div>
							</div>
							
							<p><? dummy("text@paragraph") ?></p>
							
							
							
							

							<?php if($paywall === 'hard'): ?>
								<?php include('includes/article/paywall.php'); ?>
							<?php endif; ?>

								

							<?php if($paywall !== 'hard'): ?>

								<div class="hidden-md-down inline-banner" style="width: 300px; height: 250px;">Square_4</div>
								<div class=" inline-banner hidden-lg-up hidden-sm-down" style="width: 300px; height: 250px;">Square_1 Tablet</div>

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

								<?php if($paywall === 'soft'): ?>
										<div class="fade mb"></div>
									<?php include('includes/article/paywall.php'); ?>
								<?php endif; ?>

								<div class="article-bottom">
									<?php include('includes/article/related-partner.php'); ?>
									<?php include('includes/article/related.php'); ?>
									<?php include('includes/article/topics.php'); ?>
									<?php include('includes/article-embeds/share-buttons-large.php'); ?>
								</div>

							<?php endif; // End Paywall ?>


							
						</div><!-- article body -->

					</div><!-- article content -->

		

			
			</div>
			

			<div class="col-2-sidebar">
				<?php include('includes/article/right-col-2.php'); ?>
			</div>

	</div>

		
		
	</div><!-- row -->

		<?php include('includes/article/footer.php'); ?>

		<?php include('includes/article/comments.php'); ?>
	</div>		
		
		
		
		

	</div><!-- container -->

</div><!-- banner-wrapper -->

</div><!-- main-wrapper -->

<?php // include('includes/consumersales-row.php'); ?>

<?php include('includes/footer.php'); ?>




<?php include('includes/article/send-to-a-friend.php'); ?>
<?php include('includes/article/author-signup.php'); ?>	

<?php include('includes/footer-content.php'); ?>


</body>
</html>