<?php if($paywall === 'soft'): ?>

	
<section class="paywall-fade paywall paywall-soft">
	
		<a href="#" class="btn-close-paywall-overlay close-paywall-overlay"><i class="bicon-cancel"></i></a>
		<div class="row">
			<div class="col-xs-12 col-xl-10 col-xl-offset-1" >

				<h2>Vi er i borgerligt godt humør i dag!</h2>
				
				<p>Denne artikel er kun for abonnenter, <strong>men vi synes du skal læse den alligevel</strong>. Prøv vores <a href="#" class="link-blue">digitale abonnement</a> gratis i en måned.</p>
				
				
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

	<section class="paywall paywall-fade premium-buy-options article-body mb-2">
		
		<div class="row">
			<div class="col-xs-12">
				<h2>Ubegrænset adgang!</h2>		
				<p>Vil du prøve Berlingske.dk gratis i 30 dage?</p>
			</div>
			<div class="col-xs-12">
				<img src="/dist/images/platforms.png" alt="" class="img mb pull-right">
				<ul class="list-check font-g1">
					<li>Alt fra Berlingske.dk</li>
					<li>Alt fra Business.dk</li>
					<li>Dybdegående artikler</li>
					<li>Skarpe debatindlæg </li>
				</ul>
			</div>
			
			</div>
			<div class="row sm-text-center">
			<div class="col-sm-6 col-xs-12 mb">
			<p class="small mb-05 gray">Ikke abonnent?</p>
				<button class="btn btn-md btn-blue">
					Prøv gratis i 30 dage <i class="bicon-angle-right"></i>
				</button>
			</div>
			
				<div class="col-sm-6 col-xs-12">
				<p class="small mb-05 gray">Allerede abonnent?</p>
					<button class="btn btn-md btn-blue toggle-login">
						Log ind <i class="bicon-angle-right"></i>
					</button>
				</div>
			
			</div>
			<div class="row">
				<div class="col-xs-12">
					<p class="small mt">Brug for hjælp? <a href="http://b.kundeunivers.dk" class="link-blue">Besøg kundeservice</a> eller ring på tlf. 33 75 36 36 mandag - fredag kl. 8 - 17.</p>
				</div>
			</div>
		

	</section>

<?php endif; ?>