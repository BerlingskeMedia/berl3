<?php 
	if($theme === 'berlinale') {
		$themeClass = 'theme-berlinale';
	} 
	if($theme === 'roskilde') {
		$themeClass = 'theme-roskilde';
	} 
	if($theme === 'cannes') {
		$themeClass = 'theme-cannes';
	} 
?>
<div class="row deck deck-theme theme-container <?php if($themeClass) {echo $themeClass;} else {echo 'theme-berlinale';} ?>">
	
	<div class="grid-col-left col-xs-2 ">
		<?php if ($theme === 'roskilde'): ?>

			<div class="section-title"> Roskilde</div>

			<img src="/dist/images/logo-roskilde.svg" width="" height="" alt="" class="theme-illu mb" />
			<p class="section-description">Berlingske dækker filmfestivalen, der varer frem til d. 21. februar.</p>

		<?php elseif ($theme === 'cannes'): ?>

			<div class="section-title-no-border"> Cannes</div>

			<img src="/dist/images/logo-cannes.png" width="" height="" alt="" class="theme-illu mb" />
			<p class="section-description">Berlingske dækker filmfestivalen, der varer frem til d. 21. februar.</p>

		<?php else: ?>
		<div class="section-title-no-border"> Berlinalen</div>

		<img src="/dist/images/logo-berlinale-invert.png" width="" height="" alt="" class="theme-illu" />
		<p class="section-description">Berlingske dækker filmfestivalen, der varer frem til d. 21. februar.</p>
		<?php endif; ?>

	</div>
	<div class="grid-col-middle-wide col-xs-10">
		
		<div class="row flex-row">
			

			<div class="col-lg-6 col-md-12 col-xs-12">
				<?php
					$imgW='920'; 
					$showImg = '1';
					$class = 'teaser-img-wide item-teaser teaser-small	';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = false;
					$showRelated = false;
					$showDate = false;
					$showCategory = false;
					$teaserLabel = false;
					$showAuthor = true;

					include('includes/frontpage/teasers/teaser.php') ?>
			</div>					
			
				<div class="col-lg-3 col-xs-6">
					<?php
					$imgW='920'; 
					$showImg = '1';
					$class = 'teaser-img-wide item-teaser teaser-xsmall	';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					$showRelated = false;
					$showDate = false;
					$showTrumpet = 'Koncert';
					$showCategory = false;
					$teaserLabel = false;
					$showRating = true;
					$showAuthor = true;

					include('includes/frontpage/teasers/teaser.php') ?>
				</div>

				<div class="col-lg-3 col-xs-6">
					<?php
					$imgW='920'; 
					$showImg = '1';
					$class = 'teaser-img-wide item-teaser teaser-xsmall	';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					$showRelated = false;
					$showDate = false;
					$showCategory = false;
					$teaserLabel = false;
					$showAuthor = true;

					include('includes/frontpage/teasers/teaser.php') ?>
				</div>
			
		</div>
	</div>
	
</div>

<?php $theme = false; ?>