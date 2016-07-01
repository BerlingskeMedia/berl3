<? require_once("../dummy/dummy.php") ?>

<?php include('includes/_variables.php') ;?>

<?php 
$showBflow = true;
?>


<?php 
	// $showWell = rand(1,1);
?>
<!DOCTYPE html>
<html lang="da">
<head>
	<?php include('includes/head.php'); ?>
	<title>Berlingske - Front</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
</head>
<body class="tpl-front <?php if($siteBusiness): ?>site-business<?php endif; ?> show-site-search">



<a href="doc-frontpage-decks.php" class="">Decks</a>





<div class="main-wrapper">
<?php include('includes/offcanvas-menu.php'); ?>



<?php // include('includes/banners.php'); ?>

<?php 
$campaignId = 'campaign-' . mt_rand(1,3);
?>

<div class="canvas-main <?php echo $campaignId; ?>">


	<div class="banner-wrapper">
	
	
	


	<div class="container ">


	<div class="deck">
		<div class="row">
			<div class="col-xs-12 text-center" style="">
				<ul style="text-align:left">
					
					<li><a href="?deck=5">Deck 1</a></li>
					<li><a href="?deck=6">Flow deck</a></li>
					<li><a href="?deck=-ad">Ad</a></li>
					<li><a href="?deck=-longreads-3">Longreads</a></li>
					<li><a href="?deck=-debate-2">Debate</a></li>
					<li><a href="?deck=-debate-3">Puls</a></li>
					<li><a href="?deck=-image-2">Image of the day</a></li>
					<li><a href="?deck=-consumersales-2">Consumersales</a></li>
					<li>Theme: <a href="?deck=-theme-2&theme=roskilde">Roskilde</a>, <a href="?deck=-theme-2&theme=cannes">Cannes</a>, <a href="?deck=-theme-2&theme=berlinalen">Berlinalen</a></li>
					<li><a href="?deck=-towers-2">Towers</a></li>
					<li><a href="?deck=-debate-4">Houmor</a></li>

				</ul>
			</div>
		</div>
	</div>


<?php if($deck): ?>
	<?php include('includes/frontpage/deck'.$deck.'.php'); ?>

<?php endif; ?>
	



	
</div>


</div><!-- canvas-main -->
</div><!-- banner-wrapper -->
</div><!-- main-wrapper -->


<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.2/js/tether.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script> -->
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