
<!-- Deck-debate-2 --> 
<div class=" deck ">
	
	<div class="col-tags ">
		<div class="section-title">
			Debat
			<span class="section-link">
				<a href="tpl-section.php">Se alle <i class="bicon-angle-right"></i></a>
			</span>
		</div>
		
	</div>

	<div class="col-primary-wide">
		<div class="flex-row row ">
	
		<div class="col-md-6 col-xs-12 flex-row  ">
		
			<?php 
				$imgW='100'; 
				$class = ' teaser-img-right  teaser-xsmall  teaser-theme-feature	item-teaser-bt teaser-squareimg ';
				$showImg = '1';
				$imgRatio = '1:1';
				$blogTeaser = true;
				$showTrumpet = false;
				$showDate = false;
				$showTrumpet = 'Berlingske mener';
				$showCategory = false;
				$showComments = true;
				$showPaywall = true;

				$imgSrc = '/!b-vaabenskjold';
				include('includes/frontpage/teasers/teaser.php') ?>
			
		</div>
		<div class="col-md-6 col-xs-12  flex-row ">
			<?php 
				$imgW='100'; 
				$class = ' teaser-img-right teaser-xsmall	item-teaser-bt teaser-theme-feature teaser-roundimg ';
				$showImg = '1';
				$imgRatio = '1:1';
				$blogTeaser = true;
				$showTrumpet = false;
				$showDate = false;
				$showCategory = false;
				$showComments = true;
				$showPaywall = true;
				$showTrumpet = 'Kronikken';
				$imgSrc = '/!b-kommentatorer';
				include('includes/frontpage/teasers/teaser.php') ?>
		</div>

		<? while (dumb_luck("2")): ?>
		<div class=" col-md-6 col-xs-12  flex-row ">
		
			<?php 
				$imgW='100'; 
				$class = ' teaser-img-right  teaser-xsmall	  item-teaser-bt teaser-roundimg';
				$showImg = '1';
				$imgRatio = '1:1';
				$blogTeaser = true;
				$showTrumpet = false;
				$showDate = false;
				$showCategory = false;
				$showComments = true;
				$showPaywall = true;
				$showTrumpet = 'Læserbrev';
				$imgSrc = '/!b-kommentatorer';
				include('includes/frontpage/teasers/teaser.php') ?>
		</div>
		<?php endwhile; ?>
		
		</div>
	</div>
</div><!-- deck --> 