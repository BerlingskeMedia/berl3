<?php if($showNewsletterEmbedded): ?>
<aside class="article-newsletter-embedded ">	
	
	<div class="aside-header-sm mb-0">Berlingske Nyhedsbrev</div>
	<p class="font-s2 mb-05"><small >Udkommer hver morgen!</small></p>
	<form action="" class="form-embedded-newsletter form-round-oneliner">
		<div class="clearfix">
			<!-- the class .newsletter-email is uded by js to slide down breaking cheackbox-->
			<input type="email" placeholder="Din e-mail" required class="newsletter-email">
			<button class="btn  btn-blue">OK</button>
		</div>
		
		<div class="checkbox checkbox-styled hidden">
			<label>
				<input type="checkbox" class="" checked > <span>Inkl. Breaking News</span>
			</label>
		</div>



		<!-- <label><input type="checkbox" checked> Inkl. Breaking News</label> -->
	</form>	
</aside>
<?php endif; ?>