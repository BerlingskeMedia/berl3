<!-- deck-longreads-3.php -->
<div class="row deck">
	
	<div class="grid-col-left col-border-right-xl-up col-xs-2">
		<div class="section-title">Fortællinger</div>		
	</div>
	
	<div class="grid-col-middle-wide col-xs-10">	
		<div class="row flex-row teaser-flow">
			<div class="col-xs-12">
				<?php
				$imgW='1150'; 
				$showImg = '1';
				$class = 'teaser-img-wide item-teaser teaser-xlarge teaser-theme-longread	 ';
				$imgRatio = '16:9';
				$imgSrc = '/!longread';
				$showSummary = false;
				$showRelated = false;
				$showDate = false;
				$showCategory = false;
				$teaserLabel = false;
				$showComments = true;
				$showTrumpet = true;
				$showAuthor = true;
				$showPaywall = true;
				$teaserLink = 'tpl-article-longread.php';

				include('includes/frontpage/teasers/teaser.php') ?>
				
			</div>
			
			<? while (dumb_luck("3")): ?>
			<div class="col-xs-12 col-md-4">
				<?php
				$imgW='160'; 
				$showImg = '1';
				$class = 'item-teaser teaser-xxsmall teaser-img-left teaser-img-left-md';
				$imgRatio = '3:2';
				$imgSrc = '/!longread';
				$showSummary = false;
				$showRelated = false;
				$showDate = false;
				$showCategory = false;
				$teaserLabel = false;
				$showComments = true;
				$showPaywall = true;
				$showTrumpet = true;
				$showAuthor = true;
				$teaserLink = 'tpl-article-longread.php';
				include('includes/frontpage/teasers/teaser.php') ?>
			</div>
			<? endwhile ?>
		</div>
	</div><!-- col-grid-middle-wide -->
</div><!-- row -->