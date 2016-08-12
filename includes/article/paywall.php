<?php if($paywall === 'soft'): ?>

	
<section class="paywall-fade paywall paywall-soft">
		<div class="row">
			<div class="col-xs-12 col-xl-10 col-xl-offset-1" >
				<h2>God fornøjelse!</h2>
				<p>Denne artikel er normalt kun for abonnenter, men i dag kan du læse den gratis.</p>
				<p>Få adgang til alle artikler med et <a href="#" class="link-blue">digitalt abonnement</a> - den første måned er gratis. </p>
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<button class="btn btn-blue no-caps btn-md  btn-block mb close-paywall-overlay">Nej tak, jeg vil bare læse artiklen</button>
						<p class="small">Allerede abonnement? <a href="#" class="link-blue"><i class="bicon-user"></i> Log ind</a></p>
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

				<h2>Historier med dybde og perspektiv</h2>
				<p>Vi kæmper hver dag for at levere journalistik, der gør en forskel og flytter noget. Få adgang til alle artikler på Berlingske.dk og Business.dk - den første måned er gratis. </p>
			</div>
		
			
			<div class="col-xs-12 col-xl-10 col-xl-offset-1">
				
				

				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<button class="btn btn-blue no-caps btn-md  btn-block mb close-paywall-overlay">Få Berlingske Digital gratis</button>
						<p class="small">Allerede abonnement? <a href="#" class="link-blue"><i class="bicon-user"></i> Log ind</a></p>
					</div>
				</div>

			</div>
		</div>
		
		

	</section>

<?php elseif($paywall === 'video-soft'): ?>

<div class="paywall paywall-video ">
	
	<span class="icon"><i class="bicon-play"></i></span>
	<div class="row">

		<div class="col-xs-12">
			<h2>God fornøjelse!</h2>
			<p>Denne video er normalt kun for abonnenter, men i dag kan du se den gratis. Få adgang til alle artikler med et <a href="#" class="link-blue">digitalt abonnement</a> - den første måned er gratis. </p>
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
					<button class="btn btn-blue no-caps btn-md btn-sm-mobile  btn-block close-paywall-video-overlay">Nej tak, jeg vil bare se videoen</button>
					<p class="small">Allerede abonnement? <a href="#" class="link-blue"><i class="bicon-user"></i> Log ind</a></p>
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
					<h2>Historier med dybde og perspektiv</h2>
					<p>Vi kæmper hver dag for at levere journalistik, der gør en forskel og flytter noget. Få adgang til alle artikler på Berlingske.dk og Business.dk - den første måned er gratis. </p>
				</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
					<button class="btn btn-blue no-caps btn-md btn-sm-mobile btn-block ">Få Berlingske Digital gratis</button>
					<p class="small">Allerede abonnement? <a href="#" class="link-blue"><i class="bicon-user"></i> Log ind</a></p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php endif; ?>