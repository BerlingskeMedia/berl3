<div class="deck flex-row">
	<div class="col-tags col-border-right-lg-up">
		<div class="section-title">Flere nyheder</div>
		
		
	</div>
	<div class="col-primary-wide">
		<div class="row">
				<? while (dumb_luck("3")): ?>
				<div class="col-md-6">
					
					<?php 
						$sectionClass = 'latest-news mb-05';
						$imgRatio = '1:1';
						$premium = true;
						$imgSrc = false;
						$imgW = '120';

						$showTime = true;
						$showImage = true; 
						$listClass = 'list list-img-right';
						$listTitle = 'List title';
						$listCount = '5';
							
						include('includes/list-news.php');
					?>

				</div>	
			<? endwhile ?>
			</div>
	</div>
</div>