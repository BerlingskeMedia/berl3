<?php if($showNewsletter): ?>
	
	<aside class="newsletter-custom">
		
			<div class="newsletter-container">
				<div class="newsletter-main-title">
					Få <b>Berlingske Kultur</b> i din indbakke
				</div>

				<form name="newsletterForm" class="checkbox-styled checkbox-styled-large" action="" method="get" _lpchecked="1">
					<input type="hidden" value="27" name="nid" />
					<input type="hidden" value="2050" name="lid" />
					<input type="hidden" value="signup" name="action" />
					<input type="hidden" value="simple" name="flow" />
					<div class="main-newsletter">
						<input type="email" name="email" placeholder="Indtast din email" required="required">	
					</div>
					
					<div class="hidden-newsletters">
						<div class="other-newsletters">Tilmeld mig også:</div>
						<!-- NEWSLETTER ITEM -->
						<div class="newsletter-item">
							<label for="newsletter-2">
								<input type="checkbox" name="subscriptions" id="newsletter-2" class="newsletter-checkbox" checked name="nid" value="25">
								<div class="newsletter-title">
									Berlingske <b>Morgen</b>
								</div>
								<div class="newsletter-description">
									<? dummy("text@short-teaser") ?>
								</div>
							</label>
						</div>
						<!-- /newsletter item -->
						<!-- NEWSLETTER ITEM -->
						<div class="newsletter-item">
							<label for="newsletter-3">
								<input type="checkbox" name="subscriptions" id="newsletter-3" class="newsletter-checkbox"  checked name="nid" value="26">
								<div class="newsletter-title">
									Berlingske <b>Breaking</b>
								</div>
								<div class="newsletter-description">
									<? dummy("text@short-teaser") ?>
								</div>
							</label>
						</div>
						<!-- /newsletter item -->
					</div>
					<div class="newsletter-submit">
						<button type="submit" class="btn btn-blue btn-sm custom-newsletter-submit" ajax_action="http://profil.berlingskemedia.dk/smartlinks?" name="newsletterForm_submit">Tilmeld</button>
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


 <form name="newsletterForm" class="form-newsletter form-oneliner" action="" method="get">
    <div class="form-group mb-0">
        <input type="email" class="form-control" name="email" name="email" required="required">
        <button type="submit" class="btn btn-black" ajax_action="http://profil.berlingskemedia.dk/smartlinks?" name="newsletterForm_submit">OK</button>
                    <input type="hidden" value="27" name="nid" />
                    <input type="hidden" value="2050" name="lid" />
                    <input type="hidden" value="signup" name="action" />
                    <!-- <input type="hidden" value="simple" name="flow" /> -->
            </div>
</form>

<?php endif; ?>