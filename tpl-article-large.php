<? require_once("../dummy/dummy.php") ?>

<?php include('includes/_variables.php') ;?>


<?php 
	$hideComments = false;
?>
<!DOCTYPE html>
<html lang="da">
<head>
	<?php include('/includes/head.php'); ?>
	
	<title>Berlingske - Article Large</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat|Oswald:300' rel='stylesheet' type='text/css'>
</head>
<body class="not-front <?php if($siteBusiness): ?>site-business<?php endif; ?> show-site-search tpl-article tpl-article-large">


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
	

	<?php include('includes/header-sub.php'); ?>

	<div class="canvas-main ">

		<div class="banner-wrapper">
		
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						<?php include('includes/article/header.php'); ?>

						<div class="article-large-content">

							<div class="article-content">

								<?php include('includes/article/byline.php') ?>
								
								<div class="article-body">
									<img src="/dist/images/demo/infografik.jpg" width="" height="" alt="" />
									
									<?php include('includes/article/related.php'); ?>
									
									<?php include('includes/article/topics.php'); ?>
									
								</div><!-- article body -->
								
								
								

								<div class="article-bottom text-center ">
									<?php include('includes/article-embeds/share-buttons-large.php'); ?>
								</div>
							</div><!-- article content -->
							
						</div><!-- col-1-content -->
					</div><!-- col -->
				</div><!-- row -->

				
				

		<?php include('includes/article/footer.php'); ?>

		<?php include('includes/article/comments.php'); ?>
	</div>		
		
		
		
		

	</div><!-- container -->

</div><!-- banner-wrapper -->

</div><!-- main-wrapper -->

<?php // include('includes/consumersales-row.php'); ?>

<?php include('includes/footer.php'); ?>

<?php include('includes/article/author-signup.php'); ?>


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