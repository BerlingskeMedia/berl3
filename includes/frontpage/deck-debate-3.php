<div class="row deck ">

	<div class="grid-col-left col-xs-2 ">
		<div class="section-title">
			Den Politiske Puls
			<span class="section-link">
				<a href="tpl-section.php">Se alle <i class="bicon-angle-right"></i></a>
			</span>
		</div>	
	</div>

	<div class="grid-col-middle-wide col-xs-10">
		<div class="flex-row row ">
		
		<? while (dumb_luck("4")): ?>
		<div class="col-md-6 col-xs-12  flex-row ">
			<?php 
				$imgW='100'; 
				$class = ' teaser-img-right  teaser-xsmall	teaser-theme-feature  item-teaser-bt teaser-roundimg';
				$showImg = '1';
				$imgRatio = '1:1';
				$blogTeaser = true;
				$showTrumpet = false;
				$showDate = false;
				$showAuthor = true;
				$showCategory = false;
				$showComments = true;
				$showTrumpet = 'Den politiske Puls';
				$imgSrc = '/!b-kommentatorer';
				include('includes/frontpage/teasers/teaser.php') ?>
		</div>
		<? endwhile ?>
		
		</div>
	</div>
</div><!-- deck --> 