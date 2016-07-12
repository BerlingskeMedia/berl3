<?php if($paywall === 'soft'): ?>

	<section class="paywall premium-buy-options mb-2">
		
		<div class="row">
			<div class="col-xs-12">
				<h2>Denne artikel er en gave</h2>
				<p class="font-g1">Vil du prøve Berlingske gratis i 30 dage?</p>
			</div>
			<div class="col-md-8 col-xs-12">
				
				
				<ul class="list-check font-g1 mb-1">
					
					<li>Alt fra Berlingske</li>
					<li>Prisvindende fotografer</li>
					<li>Dybdegående artikler</li>
					<li>Berlingske sætter den politiske dagsorden</li>
				</ul>
				<button class="btn btn-blue btn-md">Prøv gratis i 30 dage <i class="bicon-angle-right"></i></button>
				
				<!-- <div class="list-fade hidden-md-up">
					<button class="btn-blue">Prøv gratis i 30 dage</button>
				</div> -->

			</div>
			<div class="col-md-4 col-xs-12">
				<img src="http://static4.persgroep.net/volkskrant/static/img/volkskrant/packshot.png?r=eaf8a26a" alt="" class="img">
			</div>

			<div class="col-xs-12 ">

				<div class="list-fade">
					
				</div>
				
			</div>
		</div>
		

	</section>


<?php elseif($paywall === 'hard'): ?>

	<section class="paywall premium-buy-options article-body mb-2">
		
		<h2>Jeg er en hård paywall</h2>

	</section>

<?php endif; ?>