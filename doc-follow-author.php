<? require_once("../dummy/dummy.php") ?>

<?php include('includes/_variables.php') ;?>


<?php 
	// $showWell = rand(1,1);
?>
<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Berlingske Article</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
	
</head>
<body class=" <?php if($siteBusiness): ?>site-business<?php endif; ?> show-site-search tpl-article">



<div class="container">
	
	<div class="row">
		<div class="col-xs-12">
			<h1>Byline documentation</h1>
			<p>Add class .follow-author-ok to form tag to show thank you message. Click on the blue Følg-button and see code examples</p>

			<p><a href="#" class="btn btn-gray  testenhest" style="z-index:999999; position:relative">Toggle ".follow-author-ok"-class</a> <a href="#" class="btn btn-gray testenhest2" style="z-index:999999; position:relative">Toggle error message</a></p>
			<p>Is it possible to remove the overlay efter 2 seconds after the user succesfully fills out the form?</p>
			<?php include('includes/article/byline.php'); ?>
		</div>
	</div>

</div>



<?php include('includes/article/author-signup.php'); ?>



<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
<script src="/dist/scripts/main.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-8992845-4', 'auto');
  ga('send', 'pageview');

</script>


<script>
	$('.testenhest').click(function(e){
		e.preventDefault();
		$('.form-round-oneliner').toggleClass('form-oneliner-ok');
	});

	$('.testenhest2').click(function(e){
		e.preventDefault();
		$('.msg-error').toggleClass('hidden');
	});


	
</script>








</body>
</html>