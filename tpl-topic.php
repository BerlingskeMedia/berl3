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
<body class="<?php if($siteBusiness): ?>site-business<?php endif; ?> tpl-article">

<?php include('includes/facebook.php'); ?>

<a class="demo-trigger" href="#">
	<i class="bicon-angle-right"></i>
</a>



<div class="main-wrapper">
<?php include('includes/offcanvas-menu.php'); ?>

<?php $hideSection = true; ?>
<?php include('includes/header-sub.php'); ?>


<div class="canvas-main <?php echo $campaignId; ?>">

	<div class="banner-wrapper">
	<div class="bg-banner hidden-md-down"></div>

	<div class="topbanner demo-banner hidden-sm-down" style="width: 930px; height: 180px;"></div>


	
	
	<div class="container site-content">
		<div class="row">
		
		<div class="col-md-12 ">

		
		<h1><? dummy("text@topics") ?></h1>

		
		
			

		</div>

		
		
	</div><!-- row -->

		

		
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