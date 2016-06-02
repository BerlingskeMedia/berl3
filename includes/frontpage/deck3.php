<div class=" deck">
	<div class="col-wrapper">
	<div class="col-primary-wide ">
		
		<div class="row flex-row">
			<div class="col-xl-12">
				<?php
					$imgW='940'; 
					$showImg = true;
					$class = ' fs24  clearfix teaser-bb mb teaser-bg ';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = '1';
					$showRelated = '0';
					$smallImg = false;
					$showDate = true;
					$showCategory = true;
					include('includes/teaser.php') ?>
			</div>
		
		</div>

		<div class="row">
			<div class="col-xl-9">
				<div class="row flex-row">
					<? while (dumb_luck("4")): ?>
					<div class="col-xl-6 flex-row">
						<?php
							$imgW='940'; 
							$showImg = true;
							$class = ' fs12  teaser-bb';
							$imgRatio = '16:9';
							$imgSrc = '/landscape';
							$showSummary = '1';
							$showRelated = '0';
							$smallImg = false;
							$showDate = true;
							$showCategory = true;
							include('includes/teaser.php') ?>
					</div>

					<? endwhile ?>
					
				</div>

			</div>
		
			<div class="col-xl-3">
				
				<div class="row">
					<div class="col-xl-12">
						<?php
							$imgW='940'; 
							$showImg = false;
							$class = ' fs10  clearfix  ';
							$imgRatio = '16:9';
							$imgSrc = '/landscape';
							$showSummary = '1';
							$showRelated = '0';
							$smallImg = false;
							$showDate = true;
							$showCategory = true;
							include('includes/teaser.php') ?>

							<?php
							$imgW='940'; 
							$showImg = false;
							$class = ' fs10  clearfix  ';
							$imgRatio = '16:9';
							$imgSrc = '/landscape';
							$showSummary = '1';
							$showRelated = '0';
							$smallImg = false;
							$showDate = true;
							$showCategory = true;
							include('includes/teaser.php') ?>

							<?php
						$imgW='120'; 
						$showImg = true;
						$smallImg = false;
						$imgSrc = '/!author';
						$class = ' fs10 teaser-feature';
						$imgRatio = '1:1';
						$showSummary = '0';
						$showRelated = '0';
						$showDate = true;
						$showCategory = true;
						$showAuthor = true;
						include('includes/teaser.php') ?>

							<?php
							$imgW='940'; 
							$showImg = false;
							$class = ' fs10  clearfix  ';
							$imgRatio = '16:9';
							$imgSrc = '/landscape';
							$showSummary = '1';
							$showRelated = '0';
							$smallImg = false;
							$showDate = true;
							$showCategory = true;
							include('includes/teaser.php') ?>
					</div>
				</div>	
						
			</div>
		
		
			
		</div>
	</div>
	</div>
	<div class="col-sidebar col-border-left-lg-up">

		
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