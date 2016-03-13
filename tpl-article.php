<? require_once("../dummy/dummy.php") ?>

<?php 
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


?>



<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Berlingske</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat|Oswald:300' rel='stylesheet' type='text/css'>
</head>
<body>


<div class="site-header">
	Header
</div>

<div class="site-wrapper">
	<div class="container">
		
		<div class="row">
			<div class="col-xs-12 col-lg-8">
				<header class="article-header">
					<h1><?php dummy("text@headline") ?></h1>
					<p class="article-summary"><?php dummy("text@long-teaser") ?></p>
				</header>

				
					<div class="article-content">
						<? while (dumb_luck("55")): ?>
							<p><?php dummy("text@paragraph") ?></p>
						<? endwhile ?>
					</div>
				

			</div>
			<div class="col-lg-4 article-sidebar">
				<div class="sticky-container sticky-container-1">
					
					<div id="sticky_1" class="sticky">
						<div class="mb banner"><?php dummy("ad@300x250") ?></div>
						<div class="mb">
							<h2 class="list-title">Seneste nyt</h2>
							<ul class="list-reset">
								<? while (dumb_luck("10")): ?>
									<li><a href="tpl-article.php"><?php dummy("text@headline") ?></a></li>
								<? endwhile ?>
							</ul>
						</div>

						
					</div>

				</div>
				<div class="sticky-container">
					
					<div id="sticky_2" class="sticky">
						<div class="mb banner"><?php dummy("ad@300x250") ?></div>
						<div class="mb">
							<h2 class="list-title">Seneste nyt</h2>
							<ul>
								<? while (dumb_luck("10")): ?>
									<li><a href="tpl-article.php"><?php dummy("text@headline") ?></a></li>
								<? endwhile ?>
							</ul>
						</div>
					</div>

				</div>
			</div>

			


			
		</div>		

	</div><!-- container -->
</div><!-- site-wrapper -->








	


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