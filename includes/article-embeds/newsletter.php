<?php if($showNewsletter): ?>
<aside class="article-newsletter ">	
	
	<div class="aside-header-sm mb-0">Berlingske Nyhedsbrev</div>
	<p class="font-s2 mb-sm"><small >Udkommer hver morgen!</small></p>
	<form action="" class="form-embedded-newsletter">
		<div class="clearfix">
			<input type="email" placeholder="Din e-mail" required>
			<button class="btn  btn-blue">OK</button>
		</div>
		
		<div class="checkbox">
			<label>
				<input type="checkbox" checked> <span>Inkl. Breaking News</span>
			</label>
		</div>

		<!-- <label><input type="checkbox" checked> Inkl. Breaking News</label> -->
	</form>	
</aside>
<?php endif; ?>