<div class="deck flex-row">
	<div class="col-tags ">
		
		
		<div class="small today gray mb-2">
			<strong>Dagen i dag</strong>
			<? while (dumb_luck("3")): ?>
				<p class="small"><? dummy("text@dagenidag") ?></p>
			<? endwhile ?>

		</div>
	</div>
	<div class="col-primary-wide">
		<div class="row">
				<? while (dumb_luck("3")): ?>
				<div class="col-xl-4">
					
					<div class="tower">
						<div class="tower-title section-title">
							<a href="#">AOK</a>
						</div>
						<?php
							$imgW='400'; 
							$showImg = true;
							$smallImg = false;
							$class = ' fs12 ';
							$imgRatio = '16:9';
							$showSummary = '0';
							$showRelated = '0';
							$showDate = false;
							$showCategory = false;
							include('includes/teaser.php') ?>		
							
							<? while (dumb_luck("4")): ?>
								<?php
								$imgW='80'; 
								$showImg = false;
								$smallImg = false;
								$class = ' fs09  teaser-font-alt';
								$imgRatio = '3:2';
								$showSummary = '0';
								$showRelated = '0';
								$showDate = false;
								$showCategory = false;
								include('includes/teaser.php') ?>
							<? endwhile ?>
					</div>

				</div>	
			<? endwhile ?>
			</div>
	</div>
</div>