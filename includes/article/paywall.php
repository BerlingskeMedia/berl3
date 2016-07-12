<?php if($paywall === 'soft'): ?>

	<section class="paywall premium-buy-options mb-2">
		
		<div class="row">
			<div class="col-xs-12">
				<h2>Denne artikel er en gave!</h2>
				<p class="font-g1">Vil du prøve Berlingske.dk gratis i 30 dage?</p>
			</div>
			<div class="col-md-7 col-xs-12">
				
				
				<ul class="list-check font-g1 mb-1">
					<li>Alt fra Berlingske.dk</li>
					<li>Alt fra Business.dk</li>
					<li>Dybdegående artikler</li>
					<li>Skarpe debatindlæg </li>
				</ul>
				
				
				<div class="text-center hidden-md-up">
					<button class="btn btn-blue btn-md mb-2">Prøv gratis i 30 dage <i class="bicon-angle-right"></i></button>
				</div>

			</div>
			<div class="col-md-5 col-xs-12">
				<img src="/dist/images/platforms.png" alt="" class="img mb">
			</div>

			<div class="col-xs-12 ">
				<div class="text-center hidden-sm-down">
					<button class="btn btn-blue btn-md">Prøv gratis i 30 dage <i class="bicon-angle-right"></i></button>
				</div>

				<div class="fade">
				
				</div>
				
			</div>
		</div>
		

	</section>


<?php elseif($paywall === 'hard'): ?>

	<section class="paywall paywall-fade premium-buy-options article-body mb-2">
		
		<div class="row">
			<div class="col-xs-12">
				<h2>Ubegrænset adgang?</h2>		
				<p>Vil du prøve Berlingske.dk gratis i 30 dage?</p>
			</div>
			<div class="col-xs-7">
				<ul class="list-check font-g1">
					<li>Alt fra Berlingske.dk</li>
					<li>Alt fra Business.dk</li>
					<li>Dybdegående artikler</li>
					<li>Skarpe debatindlæg </li>
				</ul>
			</div>
			<div class="col-xs-5">
				<img src="/dist/images/platforms.png" alt="" class="img mb">
			</div>
			</div>
			<div class="row">
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