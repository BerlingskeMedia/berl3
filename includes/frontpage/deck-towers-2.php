<div class="deck row">
	<div class="grid-col-left hidden-lg-down col-xs-2">
		<div class="section-title">Flere nyheder</div>		
	</div>
	
	<div class="grid-col-middle-wide col-xs-10">
		<div class="row">
				<? while (dumb_luck("3")): ?>
				<div class="col-lg-4 col-md-6">
					
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