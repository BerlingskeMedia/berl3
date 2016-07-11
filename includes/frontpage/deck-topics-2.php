
<div class=" deck flex-row">

	


	

<?php 
$labelType = false;
$labelText = false;
?>

	<div class="col-wrapper flex-row">
	
		<div class="col-tags col-border-right-xl-up  text-center">
			<div class="section-title-no-border mb-1 ">Nyhedsbrev</div>		
						<div class="mb font-g1">
							<p class="small mb-05">Udkommer hver morgen!</p>
							<button class="btn btn-sm btn-blue btn-round">Tilmeld <i class="bicon-angle-right"></i></button>
						</div>		

			
			
		</div>
		
		<div class="col-primary ">
			
			<div class="row flex-row teaser-flow">

				
				<div class="col-xs-12">
					<?php
					$imgW='930';  
					$showImg = '1';
					$class = 'item-teaser  teaser-img-wide teaser-large  ';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					// $teaserPack = rand(1,6);
					$showTrumpet = true;
					$showPaywall = true;
					$showAuthor = true;

					include('includes/frontpage/teasers/teaser.php') ?>
					

					

					<?php
					$imgW='320'; 
					$showImg = '1';
					$class = 'teaser-img-right teaser-small item-teaser-bt  ';
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

					<?php
					$imgW='220'; 
					$showImg = '1';
					$class = 'teaser-img-right  teaser-small item-teaser-bt ';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					$teaserPack = false;
					include('includes/frontpage/teasers/teaser.php') ?>

					

					
					<?php
					$imgW='220'; 
					$imgW='220'; 
					$showImg = '1';
					$class = 'teaser-img-right  teaser-small teaser-theme-trade item-teaser-bt ';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					$teaserAd = true;

					include('includes/frontpage/teasers/teaser.php') ?>

					

				</div>
				

				<div class="col-xs-12">
					<div class="list-fade mt">
								<button>Hent flere</button>
							</div>
				</div>
				
			</div>
		</div>
	</div><!-- col-wrapper --> 
		

	

	<div class="col-sidebar col-border-left-xl-up">

			
		<div class="row">
			<div class="col-lg-12 col-md-6 col-sm-12">
				<div style="width: 300px; height: 250px;" class="demo-banner hidden-sm-down mb">Square_3 sticky</div>
			</div>

			

			
			

		</div>

			
		
		
		
		

			
	</div>
	
</div>