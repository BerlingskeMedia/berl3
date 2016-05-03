<?php if($showNewsletterEmbedded): ?>
<aside class="article-embed-pull-right article-newsletter-embedded ">	
	
	<div class="aside-header-sm mb-0">Berlingske Nyhedsbrev</div>
	<p class="font-s2 mb-05"><small >Udkommer hver morgen!</small></p>
	<form action="" class="form-embedded-newsletter form-round-oneliner">
		<div class="clearfix">
			<!-- the class .newsletter-email is uded by js to slide down breaking cheackbox-->
			<input type="email" placeholder="Din e-mail" required class="newsletter-email">
			<button class="btn  btn-blue">OK</button>
		</div>
		<div class="hidden">
			<div class="checkbox checkbox-styled mb-05">
				<label>
					<input type="checkbox" class="" checked > <span>Berlingske Morgen</span>
				</label>
			</div>
			<div class="checkbox checkbox-styled mb-05">
			<label>
				<input type="checkbox" class="" checked > <span>Berlingske Eftermiddag</span>
			</label>
			</div>

			<div class="checkbox checkbox-styled mb-05">
				<label>
					<input type="checkbox" class="" checked > <span>Breaking News</span>
				</label>
			</div>	
		</div>
	</form>	
</aside>

<?php else: ?>

<aside class="article-embed-pull-right article-marketing-embedded ">	
	<iframe src="/includes/iframes/marketing-embedded.php" class="auto-height" scrolling="no" frameborder="0"></iframe>
</aside>
<!-- inline, after the iframe -->

<?php endif; ?>