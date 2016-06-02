<div class="deck ">
	<div class="col-wrapper">
		<div class="col-tags ">
			<div class="section-title">
				Fortællinger
			</div>
			<div class="section-link"><a href="tpl-section.php">Se alle <i class="bicon-angle-right"></i></a></div>			
		</div>
		<div class="col-primary ">
			
			<div class="row flex-row">
				
					
					<? while (dumb_luck("4")): ?>
					<div class="col-xl-6">
						<?php
						$imgW='440'; 
						$showImg = true;
						$smallImg = false;
						$class = ' fs13 clearfix ';
						$imgRatio = '16:9';
						$imgSrc = '/landscape';
						$showSummary = '1';
						$showRelated = '0';
						$showDate = true;
						$showCategory = true;

						include('includes/teaser.php') ?>
				</div>
				<?php endwhile; ?>
			</div>

		</div>
	</div><!-- col-wrapper -->
		

		<div class=" col-sidebar col-border-left-lg-up">

			<div class="banner mb">
				<div style="width: 300px; height: 250px;" class="demo-banner">Banner</div>
			</div>
			
			

		</div>

</div><!-- /deck -->