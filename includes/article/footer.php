<div class="article-footer">
	
	<div class="row row-narrow-md flex-row">
		<div class="col-xs-12">
			<div class="section-title">
				Tophistorier
			</div>
		</div>
			<ul class="flex-row list-unstyled">
			<? while (dumb_luck("2")): ?>
				<li class="col-xs-6 col-md-3 col-lg-3 col-xl-3 teaser-buffet teaser-sm-start-large-items">
					<?php 
						$imgW='750'; 
						$class = 'fs12 mb ';
						$showImg = '1';
						$imgRatio = '16:9';
						$showKey = true;
						$showRelated = false;
						include('includes/teaser.php') ?>
				</li>
			<? endwhile ?>
			<? while (dumb_luck("6")): ?>
				<li class="col-xs-6 col-md-3 col-lg-3 col-xl-3 teaser-buffet teaser-sm-start-large-items">
					<?php 
						$imgW='420'; 
						$class = 'fs12 mb ';
						$showImg = '1';
						$imgRatio = '16:9';
						$showKey = true;
						$showRelated = false;
						include('includes/teaser.php') ?>
				</li>
			<? endwhile ?>
			</ul>
			<div class="col-xs-12">

				<div class="toggle-loadmore-fade">
					<button class="btn load-more btn-sm btn-gray btn-round">Hent flere <i class="bicon-angle-down"></i></button>
				</div>

			</div>
	</div>

	<div class="row">
		<div class="col-lg-12 hidden-md-down mt mb-2">
			<div class="demo-banner" style="width: 930px; height: 180px; ">Leaderboard_2</div>
		</div>

		<div class="hidden-sm-down hidden-lg-up mb-2 mt text-center ipad-banner-article">
			<div class="demo-banner" style="width: 930px; height: 180px; ">Leaderboard_3 (tablet)</div>	
		</div>
	</div>


</div>