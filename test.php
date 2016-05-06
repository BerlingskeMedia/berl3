<? require_once("../dummy/dummy.php") ?>

<?php include('includes/_variables.php') ;?>



<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Berlingske - Test</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
</head>
<body class=" <?php if($siteBusiness): ?>site-business<?php endif; ?> show-site-search tpl-article tpl-article-longread">






<div style="height: 2.5rem; background: #222; color: #fff; padding: 0 .4rem; line-height: 2.5rem;">Header</div>

<style>
.longread-head {
	background-image: url(<? dummy("image/!longread@1300x,10:6") ?>);
}
@media (min-width: 1600px) {
	.longread-head {
		background-image: url(<? dummy("image/!longread@2200x,10:6") ?>);
	}
}

.longread-head-mobile {
		background-image: url(<? dummy("image/!longread@2200x,10:6") ?>);
}	
@media (max-width: 768px) {
	.longread-head-mobile {
		background-image: url(<? dummy("image/!longread@2200x,10:6") ?>);
	}	
}
</style>

<header class="longread-head">
	
	<div class="longread-head-inner">
		<div class="longread-head-mobile">
			<div class="longread-wrapper">
				<div class="header-container">
					<h1 class="article-title"><? dummy("text@headline-b") ?></h1>
				</div>
			</div>
		</div>
		<div class="longread-wrapper longread-wrapper-first">
			<div class="header-container">
				<div class="content-standfirst">
					<p class="article-summary"> <? dummy("text@teaser") ?></p>
				</div>
			</div>
		</div>
	</div>

</header>	


<!--  -->

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<? while (dumb_luck("12")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>
		</div>
	</div>
</div>

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




<!-- 

<div class="longread-hero">
	<figure class="longread-cover" style="background-image: url(<? dummy("image/!longread@2200x,10:6") ?>);">
		<figcaption>
			<div class="hero-content">
				<div class="hero-container">
					<div class="hero-header">
						<h1 class="article-title">
							<?php if($trumpet == '1'): ?>
							<span class="article-trumpet">
								<? dummy("text@item") ?>
							</span>
							<?php endif; ?>
							<? dummy("text@headline-b") ?>
						</h1>
					</div>
					<div class="hero-footer">
						<p class="article-summary relative" >
							<? dummy("text@teaser") ?>
						</p>
					</div>
				</div>
			</div>
		</figcaption>
	</figure>
</div> -->




</body>
</html>