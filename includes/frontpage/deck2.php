<div class=" deck">
	<div class="col-wrapper">
	<div class="col-primary-wide ">
		
		<div class="row flex-row">
			<div class="col-xl-9 col-lg-4 col-border-right-lg-up">
				<?php
					$imgW='350'; 
					$showImg = true;
					$class = ' fs30 main-teaser img-float-right clearfix teaser-bb';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = '1';
					$showRelated = '0';
					$smallImg = false;
					$showDate = true;
					$showCategory = true;
					include('includes/teaser.php') ?>

					<div class="row">

						
							<? while (dumb_luck("4")): ?>
							<div class="col-xl-6">
							<?php
								$imgW='920'; 
								$showImg = true;
								$smallImg = false;
								$class = ' fs10 main-teaser  ';
								$imgRatio = '16:9';
								$imgSrc = '/landscape';
								$showSummary = '1';
								$showRelated = '0';
								$showDate = true;
								$showCategory = true;
								include('includes/teaser.php') ?>
								</div>
							<? endwhile ?>
						
						
					</div>
			</div>

			<div class="col-xl-3 col-lg-12 col-border-right-lg-up ">
				<? while (dumb_luck("4")): ?>
					<?php
						$imgW='400'; 
						$showImg = true;
						$smallImg = false;
						$class = ' fs10 clearfix';
						$imgRatio = '16:9';
						$showSummary = '0';
						$showRelated = '0';
						$showDate = true;
						$showCategory = true;
						include('includes/teaser.php') ?>		
				<? endwhile ?>
			</div>


			
		</div>
	</div>

	</div>

	<div class="col-sidebar col-border-left-xl-up">	
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