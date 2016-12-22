<? require_once("../dummy/dummy.php") ?>

<?php include('includes/_variables.php') ;?>

<?php 
if(isset($_GET["nl"])) {
	$nl = $_GET["nl"];
}

if($nl == 'bt') {
	$brand = 'BT';
} elseif ($nl == 'berlingske') {
	$brand = 'Berlingske';
}

 ?>

<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Newsletter</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
</head>
<body>

<?php include('includes/newsletter-css.php') ?>




<div class="newsletter-container">
	
	<div class="newsletter-inner">
		
		<div class="newsletter-logo text-center">
			
			<?php if($nl == "berlingske"): ?>
				
				<img src="/dist/images/berlingske_skjold.svg" alt="" style="width: 250px; margin: 0 auto;" class="logo">

			<?php elseif($nl == "bt"): ?>
				
				<img src="/dist/images/bt-logo.svg" alt="" style="width: 250px; margin: 0 auto;" class="logo">

			<?php endif; ?>

		</div>

		<div class="newsletter-element large-text text-center">
			<p>Tak fordi du har abonneret på <strong><?php echo $brand; ?> Poker</strong>, som er vores nyhedsbrev om poker!</p>
			<p><a href="#">Bekræft venligst din e-mail-adresse</a></p>
		</div>

		<hr>

		

		
		

		
		
		<div class="newsletter-element small-text element-serif text-center">
			<p>For at være sikker på at modtage vores nyhedsbreve, kan du tilføje <a href="#" style="text-transform: none;">mail@<?php echo $nl; ?>.dk</a> til din adressebog.<br>Vil du ikke modtage <?php echo $brand; ?> Poker? <a href="#">Afmeld her</a></p>
		</div>

		<hr>

		<div class="newsletter-element micro-text element-sans-serif">
			<p><strong>Om denne e-mail</strong><br>
			Dette er en autogeneret email. Den kan ikke besvares. Du har modtaget denne email fordi du har valg at abonnere på nyhedsbrevet <?php echo $brand; ?> Poker fra <?php echo $nl; ?>.dk</p>

			<p><a href="#">Redigér dine nyhedsbreve</a>   <span class="space">|</span>    <a href="#">Ændr din e-mail-adresse</a>   <span class="space">|</span>   <a href="#">Betingelser</a>   <span class="space">|</span>   <a href="#">Abonnér på <?php echo $brand; ?></a></p>
		</div>
	</div>

</div>

			


<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>




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