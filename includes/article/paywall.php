<?php if($paywall === 'soft'): ?>

	
<section class="paywall-fade paywall paywall-soft">
	
		<!-- <a href="#" class="btn-close-paywall-overlay close-paywall-overlay"><i class="bicon-cancel"></i></a> -->
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

	<section class="paywall-fade paywall ">
		
		<div class="row">
			<div class="col-xs-12">
				<p>Artiklen er kun for abonnenter</p>
				<h2>Borgerlig journalistik 24/7/365</h2>		
			</div>
			<div class="col-xs-6 text-left">
				Danmarks borgerlige avis holder aldrig lukket, og med et digitalt abonnement kan du altid læse om den verden vi lerver i, mens den drejer rundt.
			</div>
			<div class="col-xs-6">
				<div class="earth"></div>
			</div>
			
			</div>
			<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<button class="btn btn-blue no-caps btn-md  btn-block mb close-paywall-overlay">Prøv Berlingske Digital gratis</button>
						<p class="small">Allerede abonnement? <a href="#" class="link-blue"><i class="bicon-user"></i> Log ind</a></p>
					</div>
				</div>
			
		

	</section>

<?php endif; ?>