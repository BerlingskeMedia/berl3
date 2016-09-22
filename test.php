<? require_once("../dummy/dummy.php") ?>

<?php include('includes/_variables.php') ;?>



<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Berlingske - Test</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
</head>
<body class="not-front" >





<?php // include('includes/header-sub.php'); ?>


<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<? while (dumb_luck("14")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>      
			<aside class="article-embed-pull-left newsletter-custom newsletter-custom-embedded continue-reading-newsletter">
				
					<div class="newsletter-container">
						<div class="newsletter-main-title">
							Få <b>Berlingske Kultur</b> i din indbakke
						</div>

						<form  class="checkbox-styled checkbox-styled-large ">
							<div class="main-newsletter">
								<input type="email" name="email" placeholder="Indtast din email">	
							</div>
							
							<div class="hidden-newsletters">
								<div class="other-newsletters">Tilmeld mig også:</div>
								
								<div class="newsletter-item">
									<label for="newsletter-2">
										<input type="checkbox" name="subscriptions" id="newsletter-2" class="newsletter-checkbox" value="" checked>
										<div class="newsletter-title">
											Berlingske <b>Morgen</b>
										</div>
										<div class="newsletter-description">
											<? dummy("text@short-teaser") ?>
										</div>
									</label>
								</div>
								<div class="newsletter-item">
									<label for="newsletter-3">
										<input type="checkbox" name="subscriptions" id="newsletter-3" class="newsletter-checkbox" value="" checked>
										<div class="newsletter-title">
											Berlingske <b>Breaking</b>
										</div>
										<div class="newsletter-description">
											<? dummy("text@short-teaser") ?>
										</div>
									</label>
								</div>
							</div>
							<div class="newsletter-submit">
								<button href="#" class="btn btn-blue btn-sm custom-newsletter-submit">Tilmeld</button>
							</div>
							
							
						</form>
					</div>
				
				<div class="newsletter-final ">
					<div class="newsletter-final_title">TAK!</div>
					<div class="newsletter-final_description">
						Du er nu tilmeldt Berlingskes nyhedsbrev.	
					</div>
					
				</div>

			</aside>



			<? while (dumb_luck("14")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>      
		</div>
	</div>
</div>



<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
<script src="/dist/scripts/main.js"></script>
<script src="/dist/scripts/demo.js"></script>

<script>
	$('.custom-newsletter-submit').click(function(e){
		e.preventDefault();
		$(this).closest('.newsletter-custom').addClass('newsletter-submitted');
	});
</script>

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