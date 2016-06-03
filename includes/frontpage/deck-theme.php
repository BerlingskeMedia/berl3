<div class="deck">
	<div class="col-tags ">
		<div class="section-title"><small>Tema:</small> Berlinalen</div>

		<img src="/dist/images/logo-berlinale.png" width="" height="" alt="" />
		<p class="section-description">Berlingske dækker filmfestivalen, der varer frem til d. 21. februar.</p>
	</div>
	<div class="col-primary">
		<div class="row flex-row">
			

			<div class="col-xl-6 col-border-right-lg-up">
				<?php
					$imgW='600'; 
					$showImg = '1';
					$class = ' fs14 mb  ';
					$imgRatio = '16:9';
					$showSummary = '1';
					$showRelated = true;
					$showDate = true;
					$showCategory = true;
					$showRelatedimg = true;
					include('includes/teaser.php') ?>
			</div>					
			
				<div class="col-xl-3 col-border-right-lg-up">
					<?php
						$imgW='600'; 
						$showImg = '1';
						$class = ' fs14 mb  ';
						$imgRatio = '16:9';
						$showSummary = '1';
						$showRelated = true;
						$showDate = true;
						$showCategory = true;
						$showRating = true;
						$teaserLink = 'tpl-article.php?showRating';
						include('includes/teaser.php') ?>
				</div>

				<div class="col-xl-3">
					<?php
						$imgW='600'; 
						$showImg = '1';
						$class = ' fs14 mb  ';
						$imgRatio = '16:9';
						$showSummary = '1';
						$showRelated = true;
						$showDate = true;
						$showCategory = true;
						$showRating = true;
						$teaserLink = 'tpl-article.php?showRating';
						include('includes/teaser.php') ?>
				</div>
			
		</div>
	</div>
</div>