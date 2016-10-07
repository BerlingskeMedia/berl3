<?php if($paywall === 'soft'): ?>

	
<section class="paywall-fade paywall paywall-soft">
		<div class="row">
			<div class="col-xs-12 col-xl-10 col-xl-offset-1" >
				<h2>God fornøjelse</h2>
				<p>Denne artikel er normalt kun for abonnenter, men i dag kan du læse den gratis.</p>
				<p>Få adgang til alle artikler med et digitalt abonnement.</p>
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<button class="btn btn-blue no-caps btn-md  btn-block mb close-paywall-overlay">Få den første måned gratis nu <i class="bicon-angle-right"></i></button>
						<p class="small"> <a href="#" class="toggle-login">Nej tak, jeg vil bare læse artiklen</a></p>
					</div>
				</div>

			</div>
		</div>
	
</section>


<?php elseif($paywall === 'hard'): ?>

	<section class="paywall-fade paywall paywall-hard ">
		
		<div class="row">
			<div class="col-xs-12 ">
				<p class="small mb-05" style="color: #999;">Artiklen er kun for abonnenter</p>

				<h2>Velkommen</h2>
				<p>Få adgang til alle artikler på Berlingske.dk og Business.dk med et digitalt abonnement.
			</div>
		
			
			<div class="col-xs-12 col-xl-10 col-xl-offset-1">
				
				

				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<button class="btn btn-blue no-caps btn-md  btn-block mb close-paywall-overlay">Få den første måned gratis nu <i class="bicon-angle-right"></i></button>
						<p class="small">Allerede abonnent? <a href="#" class="toggle-login"><i class="bicon-user"></i> Klik her</a></p>
					</div>
				</div>
<div class="alert alert-danger">
				<p>Du er logget ind med en profil, der desværre ikke giver adgang til Berlingske.dk i dag. Det kan skyldes, at dit abonnement har begrænset digital adgang, eller at din ordre ikke er tilknyttet din profil. 
				
				<a href="https ://b.kundeunivers.dk/ allerede-abonnent user">Tilknyt ordrenummer</a> </p>

<p><strong>Har du brug for hjælp?</strong>
Kontakt Kundeservice på 3375 3330</p>
</div>

<div class="alert alert-info">
				<p>Du er logget ind med en profil, der desværre ikke giver adgang til Berlingske.dk i dag. Det kan skyldes, at dit abonnement har begrænset digital adgang, eller at din ordre ikke er tilknyttet din profil. 
				
				<a href="https ://b.kundeunivers.dk/ allerede-abonnent user">Tilknyt ordrenummer</a> </p>

<p><strong>Har du brug for hjælp?</strong>
Kontakt Kundeservice på 3375 3330</p>
</div>

			</div>
		</div>
		
		

	</section>

<?php elseif($paywall === 'video-soft'): ?>

<div class="paywall paywall-video ">
	
	<span class="icon"><i class="bicon-play"></i></span>
	<div class="row">

		<div class="col-xs-12">
			<h2>God fornøjelse.</h2>
			<p>Denne video  er normalt kun for abonnenter, men i dag kan du læse den gratis.</p>
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
					<button class="btn btn-blue no-caps btn-md  btn-block mb close-paywall-overlay">Få den første måned gratis nu <i class="bicon-angle-right"></i></button>
					<p class="small"> <a href="#" class="toggle-login">Nej tak, jeg vil bare se videoen</a></p>

				</div>
			</div>
		</div>
	</div>
</div>
<?php elseif($paywall === 'video-hard'): ?>

<div class="paywall paywall-video ">
	<span class="icon"><i class="bicon-play"></i></span>
	<div class="row">
		<div class="col-xs-12 " >
			
			<p class="small mb-05" >Videoen kræver abonnement</p>
				<div class="hidden-sm-don">
					<h2>Historier med perspektiv</h2>
					<p>Vi kæmper hver dag for at levere journalistik, der gør en forskel. Få adgang til alle artikler på Berlingske.dk og Business.dk - den første måned er gratis. </p>
				</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
					<button class="btn btn-blue no-caps btn-md btn-sm-mobile btn-block ">Få Berlingske Digital gratis</button>
					<p class="small">Allerede abonnent? <a href="#" class="toggle-login"><i class="bicon-user"></i> Klik her</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php endif; ?>