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
	<title>Berlingske Article</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
	
</head>
<body class=" <?php if($siteBusiness): ?>site-business<?php endif; ?> show-site-search tpl-article">

<?php include('includes/facebook.php'); ?>

<a class="demo-trigger" href="#">
	<i class="bicon-angle-right"></i>
</a>

<!-- <div class="hidden-menu" id="hidden-menu">	
	<ul class="demo-menu">
		
	</ul>
</div> -->






<div class="main-wrapper">
<?php include('includes/offcanvas-menu.php'); ?>


<?php include('includes/site-header.php'); ?>







	<div class="banner-wrapper">
	
	<div class="container">
		<div class="row">
		
		<div class="col-md-12 ">

			<!-- <div class="article-badge-kronik">
			<?php if($templateBlog): ?>
				KRONIKKEN
			<?php elseif($templateEditorial): ?>
				Leder
			<?php else : ?>
				<? dummy("text@b-cat") ?>
			<?php endif; ?>

			</div> -->
	
		
		<?php include('includes/article/header.php'); ?>

		
		
			<div class="col-1-content">

					<div class="article-content">
						
						<?php include('includes/article/social-buttons.php'); ?>

						<?php if($imageSize == '1' || $imageSize == '4'): // large image ?>
						
							<?php include('includes/article-embeds/article-image.php'); ?>

						<?php elseif($imageSize == '3'): ?>

							<?php include('includes/article-embeds/article-image.php'); ?>

						<?php elseif($imageSize == '5'): ?>

							<?php include('includes/article-embeds/article-video.php'); ?>

						<?php endif; ?>
						
						
						

						<div class="article-body">

							<?php if ($imageSize == '2'): ?>
								<?php $portrait = true; ?>
								<?php include('includes/article-embeds/article-image-float-right.php'); ?>

							 <?php endif; ?>

							 <?php include('includes/article-embeds/newsletter-embedded.php'); ?>

							<?php include('includes/article-embeds/blog-bio.php'); ?>
							
							<p><? dummy("text@paragraph-first-letter") ?></p>
							
							<p><? dummy("text@paragraph") ?></p>
							
								
							<?php if($showPaywall): ?>
								
								<?php include('includes/article/paywall.php'); ?>

							<?php endif; ?>

								
								<ol>
									<? while (dumb_luck("7")): ?><li><? dummy("text@headline") ?></li><? endwhile ?>
								</ol>

							<?php if(!$showPaywall): ?>
								
								<? while (dumb_luck("2")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>


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

								<?php include('includes/article-embeds/fact-default.php'); ?>
								
								<?php include('includes/article-embeds/related.php'); ?>
								
								<?php include('includes/article-embeds/topics.php'); ?>

							<?php endif; // End Paywall ?>
							
						</div><!-- article body -->
						
						<div class="article-bottom">

							<?php include('includes/article-embeds/share-buttons-large.php'); ?>
							
						</div>

					</div><!-- article content -->

		

			
			</div>
			

			<div class="col-2-sidebar">
				<?php include('includes/article/right-col-2.php'); ?>
			</div>

	</div>

		
		
	</div><!-- row -->

		<div class="article-footer">
			
			<div class="row flex-row">
				<div class="col-xs-12">
					<div class="section-title">
						Tophistorier
					</div>
				</div>
				
					<? while (dumb_luck("8")): ?>
						<div class="col-xs-6 col-md-3 col-lg-3 col-xl-3 teaser-buffet">
							<?php 
								$imgW='420'; 
								$class = 'fs12 mb';
								$showImg = '1';
								$imgRatio = '16:9';
								$showKey = true;
								include('includes/teaser.php') ?>
						</div>
					<? endwhile ?>
					<div class="col-xs-12">
						<div class="text-center deck-footer mb-1 mt">
							<button class="btn btn-round btn-blue btn-sm">Hent flere <i class="bicon-angle-down"></i></button>
						</div>
					</div>
			</div>
		</div>

		<div class="article-comments">
			
			<div class="flex-row">
				<div class="col-1-content">
					<div class="article-content">
						<div  style="min-height: 700px; padding: 1rem;">
							<div class="article-comments" id="article-comments">
								<div id="disqus_thread"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-2-sidebar">
					<div class="stickem-container-ex2 mb-1 hidden-md-down" style="height: 700px;">	
						<div class="sticky-ex2">	
							<div class="demo-banner" style="height: 250px; width: 300px;"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>		
		
		
		
		

	</div><!-- container -->

</div><!-- banner-wrapper -->

</div><!-- main-wrapper -->


<?php include('includes/footer.php'); ?>


<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
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