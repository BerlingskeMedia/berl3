<? require_once("../dummy/dummy.php") ?>

<?php include('includes/_variables.php') ;?>


<?php 
	// $showWell = rand(1,1);
?>
<!DOCTYPE html>
<html lang="da">
<head>
	<?php include('includes/head.php'); ?>
	<title>Forms - Berlingske Doc</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
	
</head>
<body class=" <?php if($siteBusiness): ?>site-business<?php endif; ?> show-site-search tpl-article">



<div class="container">
	
	<div class="row">
		<div class="col-xs-12">
			<h2>Byline</h2>
			<p>Add class .follow-author-ok to form tag to show thank you message. Click on the blue Følg-button and see code examples</p>

			<p><a href="#" class="btn btn-gray  testenhest" style="z-index:999999; position:relative">Toggle ".follow-author-ok"-class</a> <a href="#" class="btn btn-gray testenhest2" style="z-index:999999; position:relative">Toggle error message</a></p>
			
			<?php include('includes/article/byline.php'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<h2>Newsletter sign-up</h2>
			<p><button class="btn btn-gray testenhest3">Show "thank you"-message</button>
						<button class="btn btn-gray testenhest4">Show "error"-message</button></p>
		</div>

		<div class="col-md-3 ">
			<div class="article-body">
			<?php $showNewsletterEmbedded = true; ?>
			<?php include('includes/article-embeds/newsletter-embedded.php'); ?>
			
			</div>
		</div>
		<div class="col-md-3 ">
			<div class="article-body">
			
			<?php $event = 'breaking'; ?>
			<?php include('includes/article-embeds/newsletter-embedded.php'); ?>
			</div>
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
		$('.form-follow-author .msg-error').toggleClass('hidden');
	});
	$('.testenhest3').click(function(e){
		e.preventDefault();
		$('.article-newsletter-embedded').toggleClass('form-ok');
	});

	$('.testenhest4').click(function(e){
		e.preventDefault();
		$('.article-newsletter-embedded  .msg-error').toggleClass('hidden');
	});


	
</script>








</body>
</html>