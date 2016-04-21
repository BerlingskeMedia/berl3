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
	<title>Berlingske LIVE</title>
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
							

							<? while (dumb_luck("2")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>
								
							<?php if($showPaywall): ?>
								
								<?php include('includes/article/paywall.php'); ?>

							<?php endif; ?>

							
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
								
								<?php include('includes/article-embeds/related.php'); ?>

								<?php include('includes/article-embeds/fact-default.php'); ?>
								
								<?php include('includes/article-embeds/topics.php'); ?>

							<?php endif; // End Paywall ?>
							
						</div><!-- article body -->
						
						
						
						

						

						<?php include('includes/article-embeds/share-buttons-large.php'); ?>
						<div class="article-bottom">
							
										<?php // $horizontalShareButtons = true; $showCounter = true; $hideLabels = true; 	include('includes/article/social-buttons.php'); ?>
									
							
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
			</div>
		</div>

		<div class="article-comments">
			
			<div class="flex-row">
				<div class="col-1-content ">

					<div style="background: rgba(0,0,0,.04); height: 1500px; padding: 1rem;">Kommentarer</div>

				</div>
				<div class="col-2-sidebar">
					<div class="stickem-container-ex2 mb-1 hidden-md-down" style="height: 1500px;">	
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


<div class="site-footer" style="height: 1000px;">
		
		<div class="container">
		<div class="col-xs-12 header-bottom">
			<ul class="list-reset list-sm mb-0 list-gray">
				<li><a href="#"><b class="bicon-home"></b> Forside</a></li>
				<!-- <li><a href="?business">Business</a></li> -->
				<li><a href="#">Politiko</a></li>
				<li class="active"><a href="#">Debat</a></li>
				<li><a href="#">Global</a></li>
				<li><a href="#">Tech</a></li>
				<li><a href="#">Viden</a></li>
				<li><a href="#">Kultur</a></li>
				<li><a href="#">AoK</a></li>
				<li><a href="#">Livsstil</a></li>
				<li><a href="#">Rejseliv</a></li>
				<li><a href="#">Sport</a></li>
			</ul>
		</div>
			<div class="col-md-3">
				Berlingske Media
				Pilestræde 34
				DK 1147 København K
				Danmark

				Tlf. 33 75 75 75
				Fax: 33 75 20 20

				Kontakt os på mail

				CVR.nr.: 29 20 73 13
			</div>
			<div class="col-md-3">
				<strong>Om os</strong>
				<ul>
					<li><a href="#" title="#">Kontakt os</a></li>
					<li><a href="#" title="#">Redaktionelt regnskab</a></li>
					<li><a href="#" title="#">Ledige stillinger</a></li>
					<li><a href="#" title="#">Generelle handelsbetingelser</a></li>
					<li><a href="#" title="#">Send pressemeddelelse</a></li>
					<li><a href="#" title="#">Fejl og fakta</a></li>
					<li><a href="#" title="#">Etiske regler</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<strong>Service</strong>
				<ul>
					<li><a href="#" title="#">Bestil abonnement</a></li>
					<li><a href="#" title="#">Læs e-avisen</a></li>
					<li><a href="#" title="#">Er avisen ikke kommet?</a></li>
					<li><a href="#" title="#">Annoncesalg</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<strong>Tjenester</strong>
				<ul>
					<li><a href="#" title="#">RSS</a></li>
					<li><a href="#" title="#">Nyhedsbreve</a></li>
					<li><a href="#" title="#">Det Berlingske Arkiv</a></li>
					<li><a href="#" title="#">Apps og mobile tjenester</a></li>
					<li><a href="#" title="#">Foto privatsalg</a></li>
					<li><a href="#" title="#">Få en historisk avisforside</a></li>
					<li><a href="#" title="#">Sitemap</a></li>
					<li><a href="#" title="#">Artikel arkiv indeks</a></li>
				</ul>
			</div>
		</div>	

</div>


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