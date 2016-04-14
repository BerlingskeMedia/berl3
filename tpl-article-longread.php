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
	<link href='https://fonts.googleapis.com/css?family=Montserrat|Oswald:300' rel='stylesheet' type='text/css'>
</head>
<body class=" <?php if($siteBusiness): ?>site-business<?php endif; ?> show-site-search tpl-article tpl-article-longread">


<a class="demo-trigger" href="#">
	<i class="bicon-angle-right"></i>
</a>
<div class="hidden-menu" id="hidden-menu">
	
	<ul class="demo-menu">
		HEJ
	</ul>
</div>




<div class="site-search-overlay">
	<div class="warning">

		<div class="text-center"><p><strong>Av av av</strong></p> <p>Dette website er ikke responsivt endnu - kan endnu kun ses på store skærme :-)</p>
		</div>
	</div>	
</div>

<div class="main-wrapper">
<?php include('includes/offcanvas-menu.php'); ?>


<?php include('includes/site-header.php'); ?>




<div class="canvas-main ">


	<div class="banner-wrapper">
	
	<div class="article-image-longread" style="background-image:url(<? dummy("image/landscape@2000x,16:9") ?>);">
		<span class="photo-byline">
			Foto: <? dummy("text@author") ?>
		</span>

		<div class="container">
			<header class="article-header">
				
				<div class="article-badge">
					<? dummy("text@b-cat") ?>
				</div>

				<?php include('includes/article/event-headers.php'); ?>
				
				<h1 class="article-title">
					<?php if($trumpet == '1'): ?>
					<span class="article-trumpet">
						<? dummy("text@item") ?>
					</span>
					<?php endif; ?>
					<? dummy("text@headline") ?>
				</h1>

			</header>
		</div>
		
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">

					<p class="article-summary relative"><? dummy("text@teaser") ?>
						<a href="#" class="scroll-to-comments">
							<span class="comments-count">
								<i><? dummy("text@number") ?></i>
							</span>
						</a>
					</p>

					<div class="article-date">Onsdag d. <? dummy("text@date-long") ?>  kl. <? dummy("text@time") ?>
						<? if (dumb_luck("50%")): ?><span class="updated">&mdash; <strong>Opdateret: kl. <? dummy("text@time") ?></strong>
						</span><? endif ?>
					</div>
					
					<?php include('includes/article/byline.php') ?>


				
					<div class="demo-banner mb-2" style="width:930px; height: 60px" ></div>
						
					<?php include('includes/article-embeds/rating.php'); ?>
					
					
					</div>
				</div>
			</div>
					

					
						
		<div class="container">
			<div class="row">
				<div class="col-md-12 ">
					<article>
						
						

						<div class="article-content">

						<?php include('includes/article/social-buttons.php'); ?>

							<div class="article-body">

								<?php include('includes/article-embeds/blog-bio.php'); ?>
								
								<? while (dumb_luck("2")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>

								<?php include('includes/article-embeds/link.php'); ?>
								
								<p><? dummy("text@paragraph") ?></p>

								<h2><? dummy("text@headline") ?></h2>
								
								<p><? dummy("text@paragraph") ?></p>

								
								
								<?php include('includes/article-embeds/blockquote.php'); ?>

								<?php include('includes/article-embeds/fact-embedded.php'); ?>

								<?php include('includes/article-embeds/timeline-embedded.php'); ?>

								<?php include('includes/article-embeds/theme-embedded.php'); ?>

								<?php include('includes/article-embeds/embedded-images-longread.php'); ?>

								<?php include('includes/article-embeds/custom.php'); ?>

								<?php include('includes/article-embeds/tweet.php'); ?>
								
								<?php include('includes/article-embeds/fact-default.php'); ?>

								<?php include('indluces/article-embeds/topics.php'); ?>
								

								
							</div><!-- article body -->
							
						</div><!-- article content -->

					</article>
				</div>
			</div>
		</div>

		

		
		
	<div class="container">
		<div class="row article-below">
			<div class="col-md-12">
			Footer
			</div>
		</div>
	</div>
		
		
		

		

		
		
		
		
		

	

</div><!-- banner-wrapper -->
</div><!-- canvas main -->
</div><!-- main-wrapper -->




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