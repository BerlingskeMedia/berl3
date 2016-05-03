<div class="article-footer">
	
	<div class="row row-narrow-md flex-row">
		<div class="col-xs-12">
			<div class="section-title">
				Tophistorier
			</div>
		</div>
		
			<? while (dumb_luck("8")): ?>
				<div class="col-xs-6 col-md-3 col-lg-3 col-xl-3 teaser-buffet">
					<?php 
						$imgW='420'; 
						$class = 'fs12 mb';
						$showImg = '1';
						$imgRatio = '16:9';
						$showKey = true;
						$showRelated = false;
						include('includes/teaser.php') ?>
				</div>
			<? endwhile ?>
			<div class="col-xs-12">

				<div class="toggle-loadmore-fade">
					<button class="btn load-more btn-sm btn-gray btn-round">Hent flere <i class="bicon-angle-down"></i></button>
				</div>

			</div>
	</div>

	<div class="row">
		<div class="col-lg-12 hidden-md-down mb border-bottom">
			<div class="demo-banner" style="width: 930px; height: 180px; "></div>
		</div>
	</div>


</div>