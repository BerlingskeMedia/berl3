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


<?php include('includes/site-header.php'); ?>




<div class="canvas-main ">

	<div class="banner-wrapper">
	
		<figure class="longread-cover" >

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
			
			<div class="longread-image-wrapper">
				<div class="longread-main-image">
					<img src="<? dummy("image/!longread@1920x800,") ?>" width="" height="" alt="" class="" />
				</div>	
			</div>
				
			<span class="photo-byline">
				Foto: <? dummy("text@author") ?>
			</span>

		</figure>
	
	<div class="container">
		<div class="row">
			<div class="col-xl-offset-1 col-xl-10">
				<p class="article-summary relative" >
					<? dummy("text@teaser") ?>
				</p>

				<div class="article-date">Onsdag d. <? dummy("text@date-long") ?>  kl. <? dummy("text@time") ?>
					<? if (dumb_luck("50%")): ?><span class="updated">&mdash; <strong>Opdateret: kl. <? dummy("text@time") ?></strong>
					</span><? endif ?>
				</div>
				
				

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
		
	
	

</div><!-- banner-wrapper -->
</div><!-- canvas main -->
</div><!-- main-wrapper -->


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