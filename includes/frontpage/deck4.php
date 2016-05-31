<div class=" deck">

	<div class="col-tags ">
		<div class="section-title-no-border">Topnyheder</div>
	</div>
	<div class="col-primary ">
		
		<div class="row flex-row">
			
				
			<div class="col-xl-9 col-lg-8 col-border-right-lg-up ">
					<?php
					$imgW='920'; 
					$showImg = '1';
					$class = ' fs16 ';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = '1';
					$showRelated = '1';
					$showDate = true;
					$showCategory = true;

					include('includes/teaser.php') ?>

					<? while (dumb_luck("3")): ?>
						<?php
						$imgW='220'; 
						$showImg = true;
						$smallImg = false;
						$class = ' fs13 clearfix img-w180 teaser-img-right ';
						$imgRatio = '16:9';
						$imgSrc = '/landscape';
						$showSummary = '1';
						$showRelated = '0';
						$showDate = true;
						$showCategory = true;

						include('includes/teaser.php') ?>
					<? endwhile ?>
			</div>

			<div class="col-xl-3 col-lg-12 col-border-right-lg-up ">
				
					
						
					
					

					
					<? while (dumb_luck("3")): ?>
						
						
							<?php
								$imgW='220'; 
								$showImg = true;
								$smallImg = false;
								$class = ' fs10 ';
								$imgRatio = '16:9';
								$showSummary = '0';
								$showRelated = '0';
								$showDate = true;
								$showCategory = true;
								include('includes/teaser.php') ?>		
						
					<? endwhile ?>

						

						<?php
							$imgW='220'; 
							$showImg = true;
							$smallImg = false;
							$imgSrc = '/!author';
							$class = ' fs18 teaser-feature';
							$imgRatio = '1:1';
							$showSummary = '0';
							$showRelated = '0';
							$showDate = true;
							$showCategory = true;
							$showAuthor = true;
							include('includes/teaser.php') ?>		
				
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