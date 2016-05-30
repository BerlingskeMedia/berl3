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
					<h1 class="section-title-lg"><? dummy("text@author") ?></h1>
				</div>		

				<div class="row mb">
					<div class="col-xs-4">
						<figure>
							<img src="<? dummy("image/!author@400x,1:1") ?>" width="" height="" alt="" />
						</figure>
					</div>
				</div>
			
				<div class="row flex-row">
					<? while (dumb_luck("20")): ?>
						<div class="col-xs-6 col-md-3 col-lg-3 col-xl-3  ">
							<?php 
								$imgW='420'; 
								$class = 'fs12 mb ';
								$showImg = '1';
								$imgRatio = '16:9';
								$showKey = true;
								$showRelated = false;
								include('includes/teaser.php') ?>
						</div>
					<? endwhile ?>
				
				</div><!-- row -->
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