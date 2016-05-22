<?php if($event === 'breaking'): ?>
	<aside class="article-embed-pull-right article-newsletter-embedded newsletter-breaking">	
		
		<div class="aside-header-sm mb-05">Modtag Breaking News på e-mail</div>
		
		
		<div class="message">
			<p><strong>Tak for din tilmelding.</strong>
			<p><small><a class="link-blue" href="http://profil.berlingskemedia.dk/nyhedsbreve/berlingske" target="_blank">Se alle Berlingskes nyhedsbreve <i class="bicon-angle-right"></i></a></small></p>
		</div>

		<form action="" class="form-embedded-newsletter  form-round-oneliner">
			<div class="clearfix">
				<!-- the class .newsletter-email is uded by js to slide down breaking cheackbox-->
				<input type="email" placeholder="Din e-mail" required class="newsletter-email">
				<button class="btn  btn-black">OK</button>

			</div>
			<div class="msg-error hidden"><i class="bicon-angle-up"></i> Du skal indtaste en email adresse</div>
			<div class="hidden form-options">
				
				<div class="checkbox checkbox-styled mb-05">
					<label>
						<input type="checkbox" class="" checked > <span>Breaking News</span>
					</label>
				</div>	

				<div class="checkbox checkbox-styled mb-05">
					<label>
						<input type="checkbox" class=""  checked> <span>Berlingske Morgen</span>
					</label>
				</div>
				<div class="checkbox checkbox-styled mb-05">
				<label>
					<input type="checkbox" class=""  checked> <span>Berlingske Eftermiddag</span>
				</label>
				</div>

				
			</div>
		</form>	

		<p class="text-center">Breaking på sms: Send <strong>berlingske break</strong> til 1929</p>
	</aside>

<?php else: ?>

	<?php if($showNewsletterEmbedded): ?>

<aside class="article-embed-pull-right article-newsletter-embedded ">	

	<div class="message">
		<p><strong>Tak for din tilmelding.</strong>
		<p><small><a class="link-blue" href="http://profil.berlingskemedia.dk/nyhedsbreve/berlingske" target="_blank">Se alle Berlingskes nyhedsbreve <i class="bicon-angle-right"></i></a></small></p>
	</div>
	
	<div class="aside-header-sm mb-0">Berlingske Nyhedsbrev</div>
	<p class="font-s2 mb-05"><small >Udkommer hver morgen!</small></p>
	<form action="" class="form-embedded-newsletter form-round-oneliner">
		<div class="clearfix">
			<!-- the class .newsletter-email is uded by js to slide down breaking cheackbox-->
			<input type="email" placeholder="Din e-mail" required class="newsletter-email">
			<button class="btn  btn-blue">OK</button>
		</div>
		<div class="msg-error hidden"><i class="bicon-angle-up"></i> Du skal indtaste en email adresse</div>
		<div class="hidden form-options">
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

<?php endif; ?>