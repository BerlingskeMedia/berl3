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


<?php 
	// $showWell = rand(1,1);
?>
<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Project Berlingske 3.0</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat|Oswald:300' rel='stylesheet' type='text/css'>
</head>
<body class="">


<style>
	h2, h3 {
		line-height: 1.2;
	}
	h2 {
		padding: 1rem 0;
		margin-top: 2rem;
	}
	.breaker {
		display: block;
		
		font-weight: 300;
		color: #999;
	}
	a {
		color: #369;
	}
	ul {
		margin-top: .2rem;
	}
</style>


<div class="container">
	<div class="row">
		
		
		<div class="col-lg-8 col-lg-offset-2">
			<div class="row">
					
				<div class="col-lg-12 text-center border-bottom mb pb" style="padding-top: 4rem" >
					<a href="/" class="site-logo" >Berlingske</a>
				</div>

				<div class="col-lg-12">
					<h2 class="border-bottom">BERLINGSKE</h2>
				</div>

				<div class="col-lg-3">
					<h4 ><small class="breaker">Template:</small> Front page</h4>
				</div>
			
				<div class="col-lg-9">
					<ul>
						<li><a href="tpl-frontpage.php">Default</a></li>
						<li><a href="tpl-frontpage.php?top">Large top</a></li>
						<li><a href="tpl-frontpage.php?well">Giant top</a></li>
						<li><a href="tpl-frontpage.php?oneliner">Oneliner - Breaking</a></li>
					</ul>
				</div>
			

				<div class="col-lg-12">
					<h2 class=" border-bottom">BUSINESS</h2>
				</div>

				<div class="col-lg-3">
					<h4 ><small class="breaker">Template:</small> Front page</h4>
				</div>

				<div class="col-lg-9">
					<ul>
						<li><a href="tpl-frontpage.php?business">Default</a></li>
						<li><a href="tpl-frontpage.php?business&amp;top">Large top</a></li>
						<li><a href="tpl-frontpage.php?business&amp;well">Giant top</a></li>
						<li><a href="tpl-frontpage.php?business&amp;oneliner">Oneliner - Breaking</a></li>
					</ul>
				</div>
			


				<div class="col-lg-12 text-center" style="padding-top: 4rem;">
					<footer class="small">Bo Skakke - 20 61 67 68 / <a href="mailto:bsk@berlingskemedia.dk">bsk@berlingskemedia.dk</a></footer>
				</div>
			</div>
		</div>
	
	</div>

</div>



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