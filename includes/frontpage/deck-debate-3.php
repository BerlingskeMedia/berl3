<div class=" deck ">
	<div class="col-tags ">
		<div class="section-title">
			Den Politiske Puls
		</div>
		<div class="section-link">
			<a href="tpl-section.php">Se alle <i class="bicon-angle-right"></i></a>
		</div>
	</div>
	<div class="col-primary-wide">
		<div class="flex-row row ">
	
		

		<? while (dumb_luck("4")): ?>
		<div class="  col-xl-6 flex-row ">
			<?php 
				$imgW='100'; 
				$class = ' teaser--img-right  teaser--xsmall	  item--teaser__bt teaser--roundimg';
				$showImg = '1';
				$imgRatio = '1:1';
				$showAuthor = true;
				$showTrumpet = false;
				$showDate = true;
				$showCategory = true;
				$imgSrc = '/!b-kommentatorer';
				include('includes/teaser-2.php') ?>
		</div>
		<?php endwhile; ?>
		
		</div>
	</div>
</div><!-- deck -->