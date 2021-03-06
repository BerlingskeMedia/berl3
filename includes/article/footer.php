



<div class="article-footer">
	<?php if($isAdvertorial): ?>
		<div class="row flex-row">
			<div class="col-xs-12">
				<div class="section-title">
					Mere fra Alm. Brand
				</div>
			</div>
		</div>

		<div class="row">

					<ul class=" flex-row list-unstyled list-buffet">
						<? while (dumb_luck("2")): ?>
						<li class="col-xs-6 col-md-6 col-lg-3">
							<?php
								$imgW='750';  
								$showImg = '1';
								$class = ' teaser-img-wide teaser-xsmall item-teaser ';
								$imgRatio = '16:9';
								$imgSrc = '/landscape';
								$showSummary = false;
								$teaserPack = false;
								$sponsorTag = true;
								$isSponsored = true;
								
								include('includes/frontpage/teasers/teaser.php') ?>

						</li>
						<? endwhile ?>
						
						<? while (dumb_luck("5")): ?>
						<li class="col-xs-6 col-md-6 col-lg-3">
							<?php
								$imgW='750';  
								$showImg = '1';
								$class = ' teaser-img-wide teaser-xsmall item-teaser';
								$imgRatio = '16:9';
								$imgSrc = '/landscape';
								$showSummary = false;
								$teaserPack = false;
								$labelType = false;
								$sponsorTag = true;
								
								include('includes/frontpage/teasers/teaser.php') ?>

						</li>
						<? endwhile ?>

						<li class="col-xs-6 col-md-6 col-lg-3">
							<?php
								$imgW='750';  
								$showImg = '1';
								$class = ' teaser-img-wide teaser-xsmall item-teaser teaser-theme-business';
								$imgRatio = '16:9';
								$imgSrc = '/landscape';
								$showSummary = false;
								$teaserPack = false;
								$sponsorTag = true;
								
								include('includes/frontpage/teasers/teaser.php') ?>

						</li>

					</ul>

					
				
					
			</div><!-- row -->



	<?php endif; ?>
	<?php if(!$isAdvertorial): ?>
	<div class="row">
	<?php if($templateLongread): ?>
		<div class="col-lg-12 hidden-sm-down mt mb">
			<div class="demo-banner" style="width: 930px; height: 180px; ">Leaderboard_2</div>
		</div>
	<?php endif; ?>
	</div>

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
				<li class="col-xs-6 col-md-6 col-lg-3">
					<?php
						$imgW='750';  
						$showImg = '1';
						$class = ' teaser-img-wide teaser-xsmall item-teaser ';
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
						$class = ' teaser-img-wide teaser-xsmall item-teaser teaser-theme-feature ';
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
						$class = ' teaser-img-wide teaser-xsmall item-teaser';
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
						$class = ' teaser-img-wide teaser-xsmall item-teaser teaser-theme-business';
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

	

<?php endif; ?>
</div>

