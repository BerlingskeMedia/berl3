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
<body class=" <?php if($siteBusiness): ?>site-business<?php endif; ?> show-site-search tpl-article">


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
	
	
	
	
	<div class="container">
		<div class="row">
		<div class="col-md-12">

		<div class="article-badge-kronik">
		<?php if($templateBlog): ?>
			KRONIKKEN
		<?php elseif($templateEditorial): ?>
			Leder
		<?php else : ?>
			<? dummy("text@b-cat") ?>
		<?php endif; ?>

		</div>
	
		<header class="article-header">
				<?php include('includes/article/event-headers.php'); ?>
				<?php if($templateBlog || $templateEditorial): ?>
				<div class="row">
					<div class="col-md-2">
						<div class="byline-blog">
							

							<?php if($templateBlog): ?>
							
							<figure class="article-avatar img-gradient">
								<a href="tpl-author.php" title="Se [AUTHOR NAME]'s profil"><img src="<? dummy("image/!author@200x200,") ?>" width="" height="" alt="[AUTHOR NAME]" /></a>
							</figure>

							<div class="author-info">
								<a href="tpl-author.php" title="Se [AUTHOR NAME]'s profil"><? dummy("text@author") ?></a>
								<? if (dumb_luck("50%")): ?>
								<div class="author-follow"><button class="btn-follow-author">Abonnér</button></div>
								<? else: ?>
								<div class="author-follow"><button class="btn-follow-author active" title="Du følger [AUTHOR NAME]"><i class="bicon-ok-circled"></i></button></div>
								<? endif ?>
								<? if (dumb_luck("50%")): ?> 
									<div class="author-username">
										<a href="http://twitter.com" target="_blank"><i class="bicon-twitter col-twitter"></i> <? dummy("text@username") ?></a>
									</div>
								<? endif ?>
							</div>
							
							<?php elseif($templateEditorial): ?>
							
							<figure class="article-avatar ">
								<a href="tpl-author.php" title="Se [AUTHOR NAME]'s profil"><img src="/dist/images/logo.png" width="" height="" alt="[AUTHOR NAME]" /></a>
							</figure>
							
							<?php endif; ?>

							
							
						</div>
					</div>

					<div class="col-md-10">
						
						<h1 class="article-title">
							<?php if($trumpet == '1'): ?>
							<span class="article-trumpet">
								<? dummy("text@item") ?>
							</span>
							<?php endif; ?>
							<? dummy("text@headline-b") ?>
						</h1>
							
						
						<?php include('includes/article-embeds/rating.php'); ?>
						
						<div class="article-date">Onsdag <? dummy("text@date-long") ?> &mdash; kl. <? dummy("text@time") ?></div>
						
						<p class="article-summary relative"><? dummy("text@teaser") ?>
							<a href="#" class="scroll-to-comments">
								<span class="comments-count">
									<? dummy("text@number") ?>
								</span>
							</a>
						</p>
					</div>
				</div>
				
				
				
				<?php else: ?>

				
				
					<h1 class="article-title">
						<?php if($trumpet == '1'): ?>
						<span class="article-trumpet">
							<? dummy("text@item") ?>
						</span>
						<?php endif; ?>
						<? dummy("text@headline-b") ?>
					</h1>
					
				<?php include('includes/article-embeds/rating.php'); ?>
				
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
				<?php endif; ?>
			
			<div class="demo-banner mb" style="width:930px; height: 60px" ></div>
				
		</header>

		<div class="col-1-content">
	
		
			<article>
				
				<?php include('includes/article/social-buttons.php'); ?>

				<div class="article-content">
					

					<?php if($imageSize == '1'): // large image ?>
					
						<?php include('includes/article-embeds/article-image.php'); ?>
					
					<?php elseif ($imageSize == '2'): ?>

						<?php include('includes/article-embeds/article-image-float-right.php'); ?>

					<?php elseif($imageSize == '3'): ?>

						<?php include('includes/article-embeds/slider.php'); ?>

					<?php elseif($imageSize == '4'): ?>

						<?php include('includes/article-embeds/article-video.php'); ?>

					<?php endif; ?>
					
					


					<div class="article-body">

						<?php include('includes/article-embeds/blog-bio.php'); ?>
						
						<? while (dumb_luck("4")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>

						<?php include('includes/article-embeds/link.php'); ?>
						<? while (dumb_luck("1")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>

						<h2><? dummy("text@headline-b") ?></h2>
						<? while (dumb_luck("1")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>
						
						<?php include('includes/article-embeds/blockquote.php'); ?>

						<?php include('includes/article-embeds/fact-embedded.php'); ?>

						<?php include('includes/article-embeds/timeline-embedded.php'); ?>

						<?php include('includes/article-embeds/theme-embedded.php'); ?>

						<?php include('includes/article-embeds/embedded-images.php'); ?>

						<?php include('includes/article-embeds/youtube.php'); ?>

						<?php include('includes/article-embeds/tweet.php'); ?>
						
						<div class="article-topics">
						Emner:
						<a href="tpl-topic.php">Elektronik</a>  <a href="tpl-topic.php">Elgiganten</a>  <a href="tpl-topic.php">Fona</a>
						</div>

						<?php include('includes/article-embeds/fact-default.php'); ?>
					</div><!-- article body -->
					
				</div><!-- article content -->

			</article>

		
		</div>
		

		<div class="col-2-sidebar ">
			
			<div class="mb-1">
				<div class="demo-banner" style="width: 300px; height: 250px;"></div>
			</div>
			
			<div class="mb">
			<?php 
			$showTime = true; 
			$listClass = 'list list-time';
			$listTitle = 'Sport';
			$listCount = '10';
			$sectionClass = 'latest-news mb-2';
			$doc ="";

			include('includes/list-news.php');
			?>
			</div>

		</div>
		</div>

		<div class="row article-below">
		<div class="col-md-12">
		Footer
		</div></div>
		
		
		</div><!-- container -->

		

		
		
		
		
		

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