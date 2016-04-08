<? require_once("../dummy/dummy.php") ?>

<?php 
if(isset($_GET["wide"])) {
	$showWide = true;
} 

if(isset($_GET["well"])) {
	$showWell = true;
} 
if(isset($_GET["oneliner"])) {
	$showOneliner = true;
} 
if(isset($_GET["top"])) {
	$showTop = true;
}
if(isset($_GET["business"])) {
	$siteBusiness = true;
}
if (isset($_GET['imgSize'])) {
	$imageSize = $_GET['imgSize'];
} else {
	$imageSize = '1'; // 0 = no image. 1 = large image. 2 = small image	
}

if (isset($_GET['showQuote'])) {
	$showQuote = true;
}

if (isset($_GET['showTrumpet'])) {
	$trumpet = true;
}

if (isset($_GET['showEmbeds'])) {
	$showEmbeddedImages = true;
}
if (isset($_GET['showFactEmbedded'])) {
	$showFactboxEmbedded = true;
}
if (isset($_GET['showYoutube'])) {
	$showYoutube = true;
}
if (isset($_GET['blog'])) {
	$templateBlog = true;
}


$campaignId = 'campaign-' . mt_rand(1,3);


?>


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
		<li><a href="?">Article - default</a></li>
		<li><a href="?imgSize=0">Article - Uden billede</a></li>
		<li><a href="?imgSize=1">Article - Stort billede (default)</a></li>
		<li><a href="?imgSize=2">Article - Lille billede</a></li>
		<li><a href="?showEmbeds">Article - Embeddede billeder</a></li>
		<li><a href="?showYoutube&amp;imgSize=1">Article - Youtube</a></li>
		<li><a href="?showQuote">Article - Quote</a></li>
		<li><a href="?showTrumpet">Article - Trumpet</a></li>
		<li><a href="?showFactEmbedded">Article - Factbox</a></li>
		<li><a href="?blog">Article - Blog</a></li>
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
		<?php else : ?>
			<? dummy("text@b-cat") ?>
		<?php endif; ?>

		</div>
	
		<header class="article-header">
							
							<?php if($templateBlog): ?>
							<div class="row">
								<div class="col-md-2">
									<div class="byline-blog">
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
									</div>
								</div>

								<div class="col-md-10">
									<h1 class="article-title">
										<?php if($trumpet == '1'): ?>
										<span class="article-trumpet">
											<? dummy("text@item") ?>
										</span>
										<?php endif; ?>
										<? dummy("text@headline") ?>
									</h1>
									
									<div class="article-date">Onsdag <? dummy("text@date-long") ?> &mdash; kl. <? dummy("text@time") ?>
										
									</div>
									
									<p class="article-summary"><? dummy("text@teaser") ?></p>
								</div>
							</div>
							
							
							
							<?php else: ?>

							
							
							
							<h1 class="article-title">
								<?php if($trumpet == '1'): ?>
								<span class="article-trumpet">
									<? dummy("text@item") ?>
								</span>
								<?php endif; ?>
								<? dummy("text@headline") ?>
							</h1>
							
							<p class="article-summary"><? dummy("text@teaser") ?></p>
							
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

					<?php endif ?>
					
					

					<div class="article-body">

						<?php include('includes/article-embeds/blog-bio.php'); ?>
						
						<? while (dumb_luck("4")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>

						<h2><? dummy("text@headline") ?></h2>
						<? while (dumb_luck("1")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>
						
						<?php include('includes/article-embeds/blockquote.php'); ?>

						<?php include('includes/article-embeds/fact-embedded.php'); ?>

						<?php include('includes/article-embeds/embedded-images.php'); ?>

						<?php include('includes/article-embeds/youtube.php'); ?>


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