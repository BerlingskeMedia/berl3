<? require_once("../dummy/dummy.php") ?>

<?php include('includes/_variables.php') ;?>



<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Berlingske Longread</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
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

<div class="main-wrapper">
<?php include('includes/offcanvas-menu.php'); ?>


<?php // include('includes/site-header.php'); ?>

<div style="height: 2.5rem; background: #222; color: #fff; padding: 0 .4rem; line-height: 2.5rem;">Header</div>




<div class="canvas-main ">

	<div class="banner-wrapper">
	
		



	<div class="longread-hero">
		<figure class="longread-image" style="background-image: url(<? dummy("image/!longread@1920x,24:9") ?>);">
			<figcaption>Foto: <? dummy("text@author") ?></figcaption>
		</figure>
		<div class="longread-fade">
			<div class="container">
				<div class="row">
					<div class="col-xl-offset-1 col-xl-10 col-xs-12">
						<h1 class="article-title">
							<?php if($trumpet == '1'): ?>
							<span class="article-trumpet">
								<? dummy("text@item") ?>
							</span>
							<?php endif; ?>
							<? dummy("text@headline-b") ?>
						</h1>								
					</div>
				</div>
			</div>
		</div>

		
		
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-xl-offset-1 col-xl-10">
				<p class="article-summary relative" >
					<? dummy("text@teaser") ?>
				</p>
					
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
						<?php $class = 'hidden-lg-down text-center'; include('includes/article/social-buttons.php'); $class = false;?>
						
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
								
								<?php include('includes/article-embeds/related.php'); ?>

								<?php include('includes/article-embeds/topics.php'); ?>
								

								
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

<?php include('includes/consumersales-row.php'); ?>

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