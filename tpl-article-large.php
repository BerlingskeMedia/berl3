<? require_once("../dummy/dummy.php") ?>

<?php include('includes/_variables.php') ;?>


<?php 
	$hideComments = false;
?>
<!DOCTYPE html>
<html lang="da">
<head>
	<?php include('includes/head.php'); ?>

	<title>Berlingske - Article Large</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
</head>
<body class=" <?php if($siteBusiness): ?>site-business<?php endif; ?> show-site-search tpl-article tpl-article-large">







<div class="main-wrapper">
<?php include('includes/offcanvas-menu.php'); ?>


<?php include('includes/header-sub.php'); ?>


<div class="canvas-main <?php echo $campaignId; ?>">

	<div class="banner-wrapper">
	<div class="bg-banner hidden-md-down"></div>

	<div class="topbanner demo-banner hidden-sm-down" style="width: 930px; height: 180px;"></div>


	
	
	<div class="container site-content">
		
			
				<div class="row">
					<div class="col-md-12">
						
						<?php include('includes/article/header.php'); ?>

						<div class="article-large-content">

							<div class="article-content">

								<?php include('includes/article/byline.php') ?>
								
								<div class="article-body">
									<img src="/dist/images/demo/infografik.jpg" width="" height="" alt="" />
									
									<div class="article-bottom">
										<?php include('includes/article/related.php'); ?>
										<?php include('includes/article/topics.php'); ?>
										<?php include('includes/article-embeds/share-buttons-large.php'); ?>
									</div>
								</div><!-- article body -->
								
								
								

								
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