<? require_once("../dummy/dummy.php") ?>

<?php include('includes/_variables.php') ;?>


<?php 
	$hideComments = false;
?>
<!DOCTYPE html>
<html lang="da">
<head>
	<?php include('includes/head.php'); ?>
	
	<title>Berlingske - Article</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
	
</head>
<body class="<?php if($siteBusiness): ?>site-business<?php endif; ?> tpl-topic">

<?php include('includes/facebook.php'); ?>

<a class="demo-trigger" href="#">
	<i class="bicon-angle-right"></i>
</a>



<div class="main-wrapper">
<?php include('includes/offcanvas-menu.php'); ?>


<?php include('includes/header-front.php'); ?>


<div class="canvas-main <?php echo $campaignId; ?>">

	<div class="banner-wrapper">
	<div class="bg-banner hidden-md-down"></div>

	<div class="topbanner demo-banner hidden-sm-down" style="width: 930px; height: 180px;"></div>


	
	
	<div class="container site-content">
		
		
			<div class="col-1-content ">

				<div class="page-content">
					<h1 class="section-title"><? dummy("text@topics") ?></h1>
				</div>		
			
				<ul class="row flex-row list-unstyled">
					
						<li class="col-lg-8 col-md-12">
							<?php 
								$imgW='900'; 
								$class = 'fs26 mb  fs-xl-26 fx-lg-20 fs-md-26 fx-sm-20 ';
								$showImg = '1';
								$imgRatio = '16:9';
								$showCat = false;
								$showKey = true;
								$showRelated = false;
								include('includes/teaser.php') ?>
						</li>

						<li class="col-lg-4 col-md-12">
							<ul class="row list-unstyled">

								<? while (dumb_luck("2")): ?>
								<li class="col-lg-12 col-md-6">
								<?php 
									$imgW='420'; 
									$class = 'fs12 mb ';
									$showImg = '1';
									$showCat = false;
									$imgRatio = '16:9';
									$showKey = true;
									$showRelated = false;
									include('includes/teaser.php') ?>
								<? endwhile ?>
								</li>
							</ul>
							
						</li>
					
				
				</ul><!-- row -->
			</div><!-- col -->

			<div class="col-2-sidebar ">
				<?php include('includes/article/right-col-2.php'); ?>
			</div>

		
	

		

		
	</div>		
		
		
		
		

	</div><!-- container -->

</div><!-- banner-wrapper -->

</div><!-- main-wrapper -->

<?php // include('includes/consumersales-row.php'); ?>

<?php include('includes/footer.php'); ?>




<?php include('includes/article/send-to-a-friend.php'); ?>
<?php include('includes/article/author-signup.php'); ?>	

<?php include('includes/footer-content.php'); ?>


</body>
</html>