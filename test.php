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
		<div class="col-xs-6 col-md-offset-3">
			
			<aside class="mb border-bottom">
				<div class="section-title-no-border mb-05">Tip Berlingske <span class="tip-bubble">Psst!</span></div>
				<p class="small font-s2">Alle henvendelser behandles med fuld diskretion.</p>
				
				<div class="show-hide-container collapsed font-s2">
					<div class="show-hide-toggle">
						Send SMS
					</div>
					<div class="show-hide-content">
						<div class="show-hide-inner-content"><p>Skriv TIP + besked og send til <strong>1929</strong>.</p></div>
						
					</div>
				</div>

				<div class="show-hide-container collapsed font-s2">
					<div class="show-hide-toggle">
						Send e-mail
					</div>
					<div class="show-hide-content">
						<div class="show-hide-inner-content">
							Send dit tip, billeder eller video til <a href="mailto:internet@berlingske.dk">internet@berlingske.dk</a>.
						</div>
					</div>
				</div>

			</aside>

			<aside class="mb">
				<div class="section-title-no-border mb-05">Tilmeld <span class="breaking-bg">breaking</span> news</div>
				<p class="small font-s2">Få Breaking News når det sker!</p>
				
				<div class="show-hide-container collapsed font-s2">
					<div class="show-hide-toggle">
						Modtag Breaking via SMS
					</div>
					<div class="show-hide-content">
						<div class="show-hide-inner-content">
							<p>SMS-tjenesten er gratis for abonnenter hos Telenor og 3 samt andre teleselskaber, som benytter disse operatørers netværk. </p>
							<p>Tilmelding koster kun alm. SMS-takst. </p>
							<p>Kunder hos TDC, Telmore, Telia, Call Me samt øvrige selskaber, der benytter TDC og Telias netværk må indtil videre betale 1 kr. pr. nyheds-sms.</p>
							<p><strong>Tilmelding:</strong><br> Send SMS: <strong>BERLINGSKE BREAK</strong> til <strong>1929</strong></p>
						</div>
						
					</div>
				</div>

				<div class="show-hide-container collapsed font-s2">
					<div class="show-hide-toggle">
						Modtag Breaking via e-mail
					</div>
					<div class="show-hide-content">
						<div class="show-hide-inner-content">
							
							<p>Tilmeld dig Berlingskes breaking news nyhedsbrev med din e-mail:</p>

							<form action="http://profil.berlingskemedia.dk/smartlinks" method="POST">
							<input name="lid" type="hidden" value="963" > 
							<input name="nid" type="hidden" value="6">
							<input name="url" type="hidden" value="http://www.b.dk/takfortilmeldingen">
							<input name="email" type="email" placeholder="E-mail" required> 
							<input type="submit" value="Tilmeld" >
							</form>


						</div>
					</div>
				</div>

			</aside>

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