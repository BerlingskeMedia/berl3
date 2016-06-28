
<div class=" deck flex-row">
	<div class="col-tags col-border-right-lg-up">
		<div class="section-title mb-2">Fortællinger</div>		
	</div>
	
	<div class="col-primary-wide ">
		
		<div class="row flex-row teaser-flow">

			<div class="col-xs-12">
				<?php
				$imgW='1050'; 
				$showImg = '1';
				$class = 'teaser-img-wide item-teaser teaser-xlarge teaser-theme-longread	 ';
				$imgRatio = '16:9';
				$imgSrc = '/!longread';
				$showSummary = true;
				$showRelated = false;
				$showDate = false;
				$showCategory = false;
				$teaserLabel = false;
				$showComments = true;
				$showTrumpet = true;
				$showPaywall = true;
				$teaserLink = 'tpl-article-longread.php';

				include('includes/frontpage/teasers/teaser.php') ?>

				
			</div>


			<? while (dumb_luck("3")): ?>
			<div class="col-xs-4">
				<?php
				$imgW='160'; 
				$showImg = '1';
				$class = 'item-teaser teaser-xsmall teaser-xxsmall teaser-img-left teaser-img-left-md';
				$imgRatio = '3:2';
				$imgSrc = '/!longread';
				$showSummary = false;
				$showRelated = false;
				$showDate = false;
				$showCategory = false;
				$teaserLabel = false;
				$showComments = true;
				$showPaywall = true;
				$teaserLink = 'tpl-article-longread.php';

				include('includes/frontpage/teasers/teaser.php') ?>
			</div>
			<? endwhile ?>
		</div>
	</div>	
</div>