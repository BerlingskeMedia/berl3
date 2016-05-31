<div class=" deck">

	<div class="col-primary ">
		
		<div class="row flex-row">
			<div class="col-xl-3 col-lg-4 col-border-right-lg-up">
				<?php
					$imgW='920'; 
					$showImg = '0';
					$class = ' fs22 main-teaser';
					$imgRatio = '3:2';
					$showSummary = '1';
					$showRelated = '0';
					include('includes/teaser.php') ?>

					<? while (dumb_luck("3")): ?>
					<?php
					
					$showImg = '0';
					$imgW='140'; 
					$showImg = false;
					$smallImg = false;
					$class = ' fs12 teaser-alt ';
					$imgRatio = '3:2';
					$showSummary = '1';
					$showRelated = '0';
					include('includes/teaser.php') ?>
				<? endwhile ?>
			</div>
				
			<div class="col-xl-6 col-lg-8 col-border-right-lg-up ">
					<?php
					$imgW='920'; 
					$showImg = '1';
					$class = ' fs16 ';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = '1';
					$showRelated = '1';

					include('includes/teaser.php') ?>

					<? while (dumb_luck("3")): ?>
						<?php
						$imgW='220'; 
						$showImg = '0';
						$smallImg = true;
						$class = ' fs12 clearfix';
						$imgRatio = '3:2';
						$imgSrc = '/landscape';
						$showSummary = '1';
						$showRelated = '0';

						include('includes/teaser.php') ?>
					<? endwhile ?>
			</div>

			<div class="col-xl-3 col-lg-12 col-border-right-lg-up col-small-teasers">
				<div class="row">
					
						
						<div class="col-xl-12 col-lg-3">
							<?php
								$imgW='220'; 
								$showImg = true;
								$smallImg = false;
								$class = ' fs10 teaser-no-border-xl';
								$imgRatio = '16:9';
								$showSummary = false;
								$showRelated = '0';

								include('includes/teaser.php') ?>		
						</div>
					

					
					<? while (dumb_luck("3")): ?>
						
						<div class="col-xl-12 col-lg-3">
							<?php
								$imgW='220'; 
								$showImg = true;
								$smallImg = false;
								$class = ' fs10 ';
								$imgRatio = '16:9';
								$showSummary = '0';
								$showRelated = '0';
								include('includes/teaser.php') ?>		
						</div>
					<? endwhile ?>
				</div>
			</div>
			
		</div>
	</div>

	<div class="col-sidebar">

		
			<div style="width: 300px; height: 250px;" class="demo-banner mb">Banner</div>
		
		
		
		<?php 
			$sectionClass = 'latest-news mb-05';
			$imgRatio = '1:1';
			$premium = true;
			$imgSrc = false;
			$imgW = '120';

			$showTime = false;
			$showImage = false; 
			$listClass = 'list list-top-lg';
			$listTitle = 'Mest læste';
			$listCount = '5';
				
			include('includes/list-news.php'); ?>
		
		
		

		

		
			<div style="width: 300px; height: 250px;" class="demo-banner">Banner</div>
		
	</div>
	
</div>