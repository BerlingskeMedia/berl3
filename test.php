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





Features:
Load more button
Blogs; kommentarer, forfatter, billede
Optiin: Url + txt felt i bunden af lister
Kommnetarer



<!--  -->

<div class="container">
	<div class="row flex-row">
		<div class="col-md-3">
			
			<?php 
				$sectionClass = 'latest-news mb-05';
				$imgRatio = '1:1';
				$premium = false;
				$imgSrc = false;
				$imgW = '80';

				$showTime = false;
				$showImage = true; 
				$listClass = 'list  list-img-right';
				$listTitle = 'Mest læste lige nu';
				$listCount = '5';
				
				
				
				
				
				$listDoc ="I'm the documentation";
				include('includes/list-news.php');
			?>
		</div>

		<div class="col-md-3">
			
			<?php 
				$sectionClass = 'latest-news mb-05';
				$imgRatio = '1:1';
				$premium = false;
				$imgSrc = false;
				$imgW = '80';

				$showTime = true;
				$showImage = true; 
				$listClass = 'list list-time  list-img-right';
				$listTitle = 'Mest læste lige nu';
				$listCount = '5';
				
				
				
				
				
				$listDoc ="I'm the documentation";
				include('includes/list-news.php');
			?>
		</div>

		<div class="col-md-3">
			
			<?php 
				$sectionClass = 'latest-news mb-05';
				$imgRatio = '1:1';
				$premium = false;
				$imgSrc = false;
				$imgW = '80';

				$showTime = false;
				$showImage = false; 
				$listClass = 'list list-time list-top-lg list-img-right fs14';
				$listTitle = 'Mest læste lige nu';
				$listCount = '5';
				
				
				
				
				
				$listDoc ="I'm the documentation";
				include('includes/list-news.php');
			?>
		</div>

		<div class="col-md-3">
			
			<?php 
				$sectionClass = 'latest-news mb-05';
				$imgRatio = '16:9';
				$premium = false;
				$imgSrc = false;
				$imgW = '600';
				$showTime = false;
				$showImage = true; 
				$listClass = 'list  list-img';
				$listTitle = 'Large image';
				$listCount = '5';
				
				
				
				
				
				$listDoc ="I'm the documentation";
				include('includes/list-news.php');
			?>
		</div>

		<div class="col-md-3">
			
			<?php 
				$sectionClass = 'latest-news mb-05';
				$imgRatio = '1:1';
				$premium = false;
				$imgSrc = false;
				$imgW = false;

				$showTime = false;
				$showImage = false; 
				$listClass = 'list ';
				$listTitle = 'Kun rubrikker';
				$listCount = '5';
				
				
				
				
				
				$listDoc ="I'm the documentation";
				include('includes/list-news.php');
			?>
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