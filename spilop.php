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
	<title>Spilop</title>
	<link rel="stylesheet" href="https://campaign.booztit.com/modules/game/public/css/view/pages.css">
	<link rel="stylesheet" href="/dist/styles/spilop.css">
	

</head>
<body class="">

<div class="pages">
	<div class="page">
		<div class="">
			<div class="description">
				<div class="row">
					<div class="column full">
						<h1>Velkommen til Spilop</h1>
					</div>
				</div>	
			</div>		
		</div>	
	</div>
	
</div>






</body>
</html>