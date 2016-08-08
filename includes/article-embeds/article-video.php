<?php if($paywall === 'video'): ?>

<figure class="article-video mb" >
			
	<img src="<? dummy("image@920x,16:9") ?>" width="" height="" alt="" />
	

	<div class="paywall paywall-video ">
		<div class="row">
			<div class="col-xs-12 col-xl-10 col-xl-offset-1" >
				<h2>Vi er i borgerligt godt humør i dag!</h2>
				<p>Denne video er kun for abonnenter, <strong>men vi synes du skal se den alligevel</strong>. Prøv vores <a href="#" class="link-blue">digitale abonnement</a> gratis i en måned.</p>
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">					
						<button class="btn btn-blue no-caps btn-md btn-sm-mobile  btn-block close-paywall-video-overlay">Nej tak, jeg vil bare se videoen</button>
						<p class="small">Allerede abonnement? <a href="#" class="link-blue"><i class="bicon-user"></i> Log ind</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</figure>	
	
	

<?php else: ?>
	<figure class="article-video mb" >
		<!-- 
		Developer info:
		Insert video player and delete this demo code: --> 

		<style>
		.article-video {
			position: relative;
		}
		.article-video:after {
			content: 'Her kommer video';
			position: absolute;
			top: 1rem;
			left: 1rem;
		}
		</style>
		<div style="padding-top: 56.25%; background-color: rgba(0,0,0,.05);"></div>

	<!-- Delete until here --> 
	</figure>
<?php endif; ?>