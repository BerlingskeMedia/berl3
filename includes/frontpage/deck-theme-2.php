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
<div class="deck deck-theme">
	<div class="theme-container <?php if($themeClass) {echo $themeClass;} else {echo 'theme-berlinale';} ?>">
		<div class="col-tags ">
			<?php if ($theme === 'roskilde'): ?>

				<div class="section-title-no-border"> Roskilde</div>

				<img src="/dist/images/logo-roskilde.svg" width="" height="" alt="" class="mb" />
				<p class="section-description">Berlingske dækker filmfestivalen, der varer frem til d. 21. februar.</p>

			<?php elseif ($theme === 'cannes'): ?>

				<div class="section-title-no-border"> Cannes</div>

				<img src="/dist/images/logo-cannes.png" width="" height="" alt="" class="mb" />
				<p class="section-description">Berlingske dækker filmfestivalen, der varer frem til d. 21. februar.</p>

			<?php else: ?>
			<div class="section-title-no-border"><small>Tema:</small> Berlinalen</div>

			<img src="/dist/images/logo-berlinale-invert.png" width="" height="" alt="" />
			<p class="section-description">Berlingske dækker filmfestivalen, der varer frem til d. 21. februar.</p>
			<?php endif; ?>

		</div>
		<div class="col-primary">
			<div class="inner-theme">
				<div class="row flex-row">
					

					<div class="col-xl-6 ">
						<?php
							$imgW='920'; 
							$showImg = '1';
							$class = 'teaser--img-wide item--teaser teaser--small	';
							$imgRatio = '16:9';
							$imgSrc = '/landscape';
							$showSummary = true;
							$showRelated = false;
							$showDate = false;
							$showCategory = false;
							$teaserLabel = false;

							include('includes/frontpage/teasers/teaser.php') ?>
					</div>					
					
						<div class="col-xl-3 ">
							<?php
							$imgW='920'; 
							$showImg = '1';
							$class = 'teaser--img-wide item--teaser teaser--xsmall	';
							$imgRatio = '16:9';
							$imgSrc = '/landscape';
							$showSummary = true;
							$showRelated = false;
							$showDate = false;
							$showTrumpet = 'Koncert';
							$showCategory = false;
							$teaserLabel = false;
							$showRating = true;

							include('includes/frontpage/teasers/teaser.php') ?>
						</div>

						<div class="col-xl-3">
							<?php
							$imgW='920'; 
							$showImg = '1';
							$class = 'teaser--img-wide item--teaser teaser--xsmall	';
							$imgRatio = '16:9';
							$imgSrc = '/landscape';
							$showSummary = true;
							$showRelated = false;
							$showDate = false;
							$showCategory = false;
							$teaserLabel = false;

							include('includes/frontpage/teasers/teaser.php') ?>
						</div>
					
				</div>
			</div>
		</div>
	</div>
</div>

<?php $theme = false; ?>