

<div class="article-footer">
	
	<div class="row flex-row">
		<div class="col-xs-12">
			<div class="section-title">
				Tophistorier
			</div>
		</div>
	</div>

		<div class="row">

			<ul class=" flex-row list-unstyled list-buffet">
				<? while (dumb_luck("2")): ?> <!-- MOBILE: Two first teasers are 100% width - the rest are side by side -->
				<li class="col-xs-12 col-md-6 col-lg-3">
					<?php
						$imgW='750';  
						$showImg = '1';
						$class = ' teaser-img-wide teaser-xsmall item-teaser-narrow ';
						$imgRatio = '16:9';
						$imgSrc = '/landscape';
						$showSummary = false;
						$teaserPack = false;
						$showTrumpet = true;
						$showPaywall = true;
						
						$labelType = 'live';
						$labelText = '<i class="bicon-record"></i> Live';
						include('includes/frontpage/teasers/teaser.php') ?>

				</li>
				<? endwhile ?>
				<li class="col-xs-6 col-md-6 col-lg-3">
					<?php
						$imgW='750';  
						$showImg = '1';
						$class = ' teaser-img-wide teaser-xsmall item-teaser-narrow teaser-theme-feature teaser-img-round';
						$imgRatio = '1:1';
						$imgSrc = '/!author';
						$showSummary = false;
						$teaserPack = false;
						$showTrumpet = true;
						$showPaywall = true;
						$labelType = false;
						include('includes/frontpage/teasers/teaser.php') ?>

				</li>

				<? while (dumb_luck("4")): ?>
				<li class="col-xs-6 col-md-6 col-lg-3">
					<?php
						$imgW='750';  
						$showImg = '1';
						$class = ' teaser-img-wide teaser-xsmall item-teaser-narrow ';
						$imgRatio = '16:9';
						$imgSrc = '/landscape';
						$showSummary = false;
						$teaserPack = false;
						$showTrumpet = true;
						$showPaywall = true;
						$labelType = false;
						
						include('includes/frontpage/teasers/teaser.php') ?>

				</li>
				<? endwhile ?>

				<li class="col-xs-6 col-md-6 col-lg-3">
					<?php
						$imgW='750';  
						$showImg = '1';
						$class = ' teaser-img-wide teaser-xsmall item-teaser-narrow teaser-theme-business';
						$imgRatio = '16:9';
						$imgSrc = '/landscape';
						$category = 'Business.dk';
						$showSummary = false;
						$teaserPack = false;
						$showTrumpet = true;
						$showPaywall = true;
						$labelType = 'yellow';
						$labelText = 'Breaking';
						
						include('includes/frontpage/teasers/teaser.php') ?>

				</li>

			</ul>

			
		<div class="col-xs-12">

			<div class="toggle-loadmore-fade">
				<button class="btn load-more btn-sm btn-gray btn-round">Hent flere <i class="bicon-angle-down"></i></button>
			</div>

		</div>
			
	</div><!-- row -->

	<div class="row">
		<div class="col-lg-12 hidden-md-down mt mb-2">
			<div class="demo-banner" style="width: 930px; height: 180px; ">Leaderboard_2</div>
		</div>

		<div class="hidden-sm-down hidden-lg-up mb-2 mt text-center ipad-banner-article">
			<div class="demo-banner" style="width: 930px; height: 180px; ">Leaderboard_3 (tablet)</div>	
		</div>
	</div>


</div>