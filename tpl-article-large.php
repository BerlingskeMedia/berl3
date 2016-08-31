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



<?php include('includes/header-sub.php'); ?>


<div class="canvas-main <?php echo $campaignId; ?>">

	<div class="banner-wrapper">
	<div class="bg-banner hidden-sm-down"></div>

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
<?php include('includes/article/adblocker-blocker.php'); ?>

<?php include('includes/article/author-signup.php'); ?>


<?php include('includes/footer-content.php'); ?>





</body>
</html>