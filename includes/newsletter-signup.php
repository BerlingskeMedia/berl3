<?php if($showNewsletter): ?>
	<?php if($showParagraphs): ?>
		<? while (dumb_luck("2")): ?>
			<p><? dummy("text@paragraph") ?></p>
		<? endwhile ?>	
	<?php endif; ?>
	<aside class="<?php echo $newsletterClass; ?>">
		
			<div class="newsletter-container">
				<div class="newsletter-main-title">
					Få <b>Berlingske Kultur</b> i din indbakke
				</div>

				<form  class="checkbox-styled checkbox-styled-large ">
					<div class="main-newsletter">
						<input type="email" name="email" placeholder="Indtast din email">	
					</div>
					
					<div class="hidden-newsletters">
						<div class="other-newsletters">Tilmeld mig også:</div>
						
						<div class="newsletter-item">
							<label for="newsletter-2">
								<input type="checkbox" name="subscriptions" id="newsletter-2" class="newsletter-checkbox" value="" checked>
								<div class="newsletter-title">
									Berlingske <b>Morgen</b>
								</div>
								<div class="newsletter-description">
									<? dummy("text@short-teaser") ?>
								</div>
							</label>
						</div>
						<div class="newsletter-item">
							<label for="newsletter-3">
								<input type="checkbox" name="subscriptions" id="newsletter-3" class="newsletter-checkbox" value="" checked>
								<div class="newsletter-title">
									Berlingske <b>Breaking</b>
								</div>
								<div class="newsletter-description">
									<? dummy("text@short-teaser") ?>
								</div>
							</label>
						</div>
					</div>
					<div class="newsletter-submit">
						<button href="#" class="btn btn-blue btn-sm custom-newsletter-submit">Tilmeld</button>
					</div>
					
					
				</form>
			</div>
		
		<div class="newsletter-final ">
			<div class="newsletter-final_title">TAK!</div>
			<div class="newsletter-final_description">
				Du er nu tilmeldt Berlingskes nyhedsbrev.	
			</div>
			
		</div>

	</aside>

	<?php if($showParagraphs): ?>
		<? while (dumb_luck("2")): ?>
			<p><? dummy("text@paragraph") ?></p>
		<? endwhile ?>	
	<?php endif; ?>

<?php endif; ?>