<?php if($paywall === 'soft'): ?>

	
<section class="paywall-fade paywall paywall-soft">
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

<?php $paywallVer = '1'; ?>



	<section class="paywall-fade paywall paywall-hard ">
		
		<div class="row">
			<div class="col-xs-12 ">
				<p class="small mb-05" style="color: #999;">Artiklen er kun for abonnenter</p>

				<h2>Borgerlig journalistik <?php if($paywallVer === '0'): ?><div class="earth hidden-sm-down"></div><?php endif; ?> 24/7/365 </h2>		
			</div>
		
			
			<div class="col-xs-12 col-xl-10 col-xl-offset-1">
				<?php if($paywallVer === '0'): ?>
					<p>Danmarks borgerlige avis holder aldrig lukket, og med et <a href="#" class="link-blue">digitalt abonnement</a> kan du altid læse om den verden vi lever i, mens den drejer rundt.</p>
					
				<? else: ?>
					<div class="row">
						<div class="col-md-4 hidden-sm-down text-right">
							<img src="/dist/images/platforms.png" alt="" class="mb-05">
						</div>
						<div class="col-md-8 text-left">
							<p>Danmarks borgerlige avis holder aldrig lukket, og med et <a href="#" class="link-blue">digitalt abonnement</a> kan du altid læse om den verden vi lever i, mens den drejer rundt.</p>		
						</div>
					</div>
				<? endif; ?>
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