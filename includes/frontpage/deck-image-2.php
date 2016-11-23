<div class="row deck deck-theme ">
	<div class="col-xs-12 theme-container theme-dark">
		<div class="col-xs-12">
			<div class="section-title mb-05">Dagens billede</div>
			<p class="teaser-photo-summary-content"><? dummy("text@teaser") ?></p>
		</div>

		<div class="col-xs-12">
			
			<?php
				$imgW='1240'; 
				$showImg = '1';
				$class = '  teaser-theme-photo item-teaser teaser-small';
				$imgRatio = '16:9';
				$showSummary = '0';
				$showRelated = false;
				$showDate = false;
				$showCategory = false;
				$showRelatedimg = false;
				$showAuthor = true;
				include('includes/frontpage/teasers/teaser.php') ?>
				
		</div>
	</div>
</div>