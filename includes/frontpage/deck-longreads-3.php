
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
					$class = 'teaser--img-wide item--teaser teaser--small teaser--longread	 ';
					$imgRatio = '16:9';
					$imgSrc = '/!longread';
					$showSummary = true;
					$showRelated = false;
					$showDate = true;
					$showCategory = true;
					$teaserLabel = false;
					$teaserLink = 'tpl-article-longread.php';

					include('includes/teaser-2.php') ?>

					
				</div>


				<? while (dumb_luck("3")): ?>
					<div class="col-xs-4">
						<?php
						$imgW='120'; 
						$showImg = '1';
						$class = 'teaser--img-wide item--teaser teaser--xsmall teaser--xsmall teaser--img-left';
						$imgRatio = '3:2';
						$imgSrc = '/!longread';
						$showSummary = false;
						$showRelated = false;
						$showDate = true;
						$showCategory = true;
						$teaserLabel = false;
						$teaserLink = 'tpl-article-longread.php';

						include('includes/teaser-2.php') ?>

						
					</div>
				<? endwhile ?>
				

				
				
			</div>
		</div>
	
		


	
</div>