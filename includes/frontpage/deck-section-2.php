
<div class=" deck flex-row">

	


	

<?php 
$labelType = false;
$labelText = false;
?>

	<div class="col-wrapper flex-row">
	
		<div class="col-tags col-border-right-xl-up  text-center">
			

			
			
		</div>
		
		<div class="col-primary ">
			
			<div class="row flex-row teaser-flow">

				
				<div class="col-xs-12">
					

					

					<? while (dumb_luck("3")): ?>

						<?php
						$imgW='320'; 
						$showImg = '1';
						$class = 'teaser-img-right teaser-small item-teaser-bt ';
						$imgRatio = '16:9';
						$imgSrc = '/landscape';
						
						$showPaywall = true;
						$showSummary = true;
						$showTrumpet = true;
						include('includes/frontpage/teasers/teaser.php') ?>

						<? while (dumb_luck("4")): ?>
						<?php
							$imgW='220'; 
							$showImg = '1';
							$class = 'teaser-img-right  teaser-small  item-teaser-bt ';
							$imgRatio = '16:9';
							$imgSrc = '/landscape';
							$showSummary = true;
							// $category = 'Business.dk';
							include('includes/frontpage/teasers/teaser.php') ?>
						<? endwhile ?>

						<?php
						$imgW='320'; 
						$showImg = '1';
						$class = ' teaser-img-right teaser-sm item-teaser-bt teaser-theme-feature teaser-small' ;
						$imgRatio = '1:1';
						$imgSrc = '/!author';
						$showSummary = true;			
						
						$showAuthor = true;

						include('includes/frontpage/teasers/teaser.php') ?>

						
						

						<? endwhile ?>


					

				</div>
				

				<div class="col-xs-12">
					<div class="list-fade mt">
								<button>Hent flere</button>
							</div>
				</div>
				
			</div>
		</div>
	</div><!-- col-wrapper --> 
		

	

	<div class="col-sidebar col-border-left-lg-up">

			
		<div class="row">
			<div class="col-lg-12 col-md-6 col-sm-12">
				<?php if(!$template): ?>
					<div style="width: 300px; height: 250px;" class="demo-banner hidden-sm-down mb">Square_marketing_2</div>
				<?php else: ?>
					<div style="width: 300px; height: 250px;" class="demo-banner hidden-sm-down mb">Square_3 sticky</div>
				<?php endif; ?>
				
			</div>

			<div class="col-lg-12 col-md-6 col-sm-12">
				<?php if(!$template): ?>
					<div style="width: 300px; height: 600px;" class="demo-banner hidden-sm-down mb">Jobindex</div>
				<?php endif; ?>
			</div>
			

			
			

		</div>

			
		
		
		
		

			
	</div>
	
</div>