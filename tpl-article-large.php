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
<body class=" <?php if($siteBusiness): ?>site-business<?php endif; ?> show-site-search tpl-article tpl-article-large">


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
	
		
		<?php include('includes/article/header.php'); ?>

		<div class="col-1-content">
	
		
			
				

				<div class="article-content">
					<div class="article-body">
						<img src="/dist/images/demo/infografik.jpg" width="" height="" alt="" />
					</div><!-- article body -->
					<?php $horizontalShareButtons = true; ?>
					<?php include('includes/article/social-buttons.php'); ?>
				</div><!-- article content -->
			

		
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