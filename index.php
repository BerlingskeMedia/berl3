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





<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center border-bottom mb-2 pb" style="padding-top: 4rem" >
			<a href="/" class="site-logo" >Berlingske</a>
		</div>
		<div class="col-lg-6">
			<h2>Berlingske</h2>
			<h4>Template: Front page</h4>
			<ul>
				<li><a href="tpl-frontpage.php">Default</a></li>
				<li><a href="tpl-frontpage.php?top">Large top</a></li>
				<li><a href="tpl-frontpage.php?well">Giant top</a></li>
				<li><a href="tpl-frontpage.php?oneliner">Oneliner - breaking</a></li>
			</ul>
		</div>
		<div class="col-lg-6">
			<h2>Business</h2>
			<h4>Template: Front page</h4>
			<ul>
				<li><a href="tpl-frontpage.php?business">Default</a></li>
				<li><a href="tpl-frontpage.php?business&amp;top">Large top</a></li>
				<li><a href="tpl-frontpage.php?business&amp;well">Giant top</a></li>
				<li><a href="tpl-frontpage.php?business&amp;oneliner">Oneliner - breaking</a></li>
			</ul>
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