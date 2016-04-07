<? require_once("../dummy/dummy.php") ?>

<?php 
if(isset($_GET["wide"])) {
	$showWide = true;
} 

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
if (isset($_GET['imgSize'])) {
	$imageSize = $_GET['imgSize'];
} else {
	$imageSize = mt_rand(0,2); // 0 = no image. 1 = large image. 2 = small image	
}

if (isset($_GET['showQuote'])) {
	$showQuote = true;
}
$campaignId = 'campaign-' . mt_rand(1,3);


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
	<title>Berlingske LIVE</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat|Oswald:300' rel='stylesheet' type='text/css'>
</head>
<body class=" <?php if($siteBusiness): ?>site-business<?php endif; ?> show-site-search tpl-article">






<div class="container">
	<div class="row">
		<div class="col-md-2">
			Sanomat 900
		</div>
		<div class="col-md-10">
			<div class="font-header" style="font-size: 80px; letter-spacing: -.4rem">
			A B C D E F G H I J K L M N O P Q R S T U V W X Y Z Æ Ø Å <br>1 2 3 4 5 6 7 8 9 Ü Ö É é
			<br>a b c d e f g h i j k l m n o p q r s t u v w x y z æ ø å ü
			</div>
			
		</div>
	</div>

	<div class="row">
		<div class="col-md-2">
			Giorgio
		</div>
		<div class="col-md-10">
			<div class="font-2" style="font-size: 80px; letter-spacing: -.4rem; ">
			A B C D E F G H I J K L M N O P Q R S T U V W X Y Z Æ Ø Å <br>1 2 3 4 5 6 7 8 9 Ü Ö É é
			<br>a b c d e f g h i j k l m n o p q r s t u v w x y z æ ø å ü
			</div>
			
		</div>
	</div>

	<div class="row">
		<div class="col-md-2">
			Giorgio
		</div>
		<div class="col-md-10">
			<div class="font-3" style="font-size: 80px; letter-spacing: -.4rem; ">
			A B C D E F G H I J K L M N O P Q R S T U V W X Y Z Æ Ø Å <br>1 2 3 4 5 6 7 8 9 Ü Ö É é
			<br>a b c d e f g h i j k l m n o p q r s t u v w x y z æ ø å ü
			</div>
			
		</div>
	</div>

	<div class="row">
		<div class="col-md-2">
			Giorgio
		</div>
		<div class="col-md-10">
			<div class="font-4" style="font-size: 80px; letter-spacing: -.4rem; ">
			A B C D E F G H I J K L M N O P Q R S T U V W X Y Z Æ Ø Å <br>1 2 3 4 5 6 7 8 9 Ü Ö É é
			<br>a b c d e f g h i j k l m n o p q r s t u v w x y z æ ø å ü
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