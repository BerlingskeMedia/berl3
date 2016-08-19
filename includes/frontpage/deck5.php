<?php 
		// $labelType = false;
		// $labelText = 'Breaking';
		?>


<div class=" deck flex-row">

	<?php if($topXL): ?>
	
		<div class="row">
			<div class="col-xs-12 col-xl-12">
				<?php
				$imgW='1240'; 
				$showImg = true;
				$class = 'item-teaser teaser-xxlarge teaser-theme-xtragiant';
				
				$imgRatio = '16:9';
				$imgSrc = '/!b-breaking';
				$showSummary = '1';
				$showRelatedimg = true;
				$teaserPack = '8';
				$labelType = 'yellow';
				$labelText = 'Breaking';
				$showAuthor = true;
				include('includes/frontpage/teasers/teaser.php') ?>			
			

			</div>
		</div>
	
		
		
	
	<?php endif; ?>


	<?php if($topLG): ?>
		
			<div class="row">
				<div class="col-xs-12 col-xl-12">
					<?php
					$imgW='1240'; 
					$showImg = true;
					$class = 'item-teaser teaser-xlarge teaser-theme-giant ';
					
					$imgRatio = '16:9';
					$imgSrc = '/!b-breaking';
					$showSummary = '1';
					$showHeader 	= true;
					$showRelatedimg = true;
					$teaserPack = '8';
					$labelType = 'yellow';
					$labelText = 'Breaking';
					$showAuthor = true;
					include('includes/frontpage/teasers/teaser.php') ?>			
				</div>
			</div>
		
	<?php endif; ?>

<?php 
$labelType = false;
$labelText = false;
?>

	<div class="col-wrapper flex-row">
		<?php if($topMD): ?>
			
				<div class="col-full-width">
					<div class="row flex-row teaser-flow">
						<div class="col-xs-12">
							<?php
							$imgW='910'; 
							$showImg = '1';
							$class = 'item-teaser-bb teaser-img-wide teaser-large ';
							
							$imgRatio = '16:9';
							$imgSrc = '/landscape';
							$showSummary = '1';
							$showRelated = '1';
							$showHeader = true;
							$teaserPack = '3';
							$showAuthor = true;
							include('includes/frontpage/teasers/teaser.php') ?>	
						</div>
					</div>
				</div>
			
		<?php endif; ?>

	
	
		<div class="col-tags col-border-right-xl-up hidden-lg-down col-xs-7">
			<div class="section-title-no-border mb-2">Topnyheder</div>		
			
		</div>
		
		<div class="col-primary col-xs-7">
			<div class="row flex-row teaser-flow">
				
				<div class="col-xs-12">
					<?php
					$imgW='930';  
					$showImg = '1';
					$class = 'item-teaser teaser-theme-business teaser-img-wide teaser-large  ';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					$category = 'Business.dk';
					$teaserPack = '4';
					$showTrumpet = true;
					$showPaywall = true;
					$showAuthor = true;

					include('includes/frontpage/teasers/teaser.php') ?>

					<?php
					$imgW='930';  
					$showImg = '1';
					$class = ' teaser-img-wide teaser-large item-teaser-bt ';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					$teaserPack = '2';
					$showTrumpet = true;
					$showPaywall = true;

					include('includes/frontpage/teasers/teaser.php') ?>

					<?php
					$imgW='930';  
					$showImg = '1';
					$class = 'teaser-theme-business teaser-img-wide teaser-large item-teaser-bt ';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					$category = 'Business.dk';
					$teaserPack = '3';
					$showTrumpet = true;
					$showPaywall = true;

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
					$teaserLink = 'tpl-article.php?advertorial';

					include('includes/frontpage/teasers/teaser.php') ?>

					<?php
					$imgW='320'; 
					$showImg = '1';
					$class = 'teaser-img-left teaser-small item-teaser-bt teaser-theme-business ';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$category = 'Business.dk';
					$showPaywall = true;
					$showSummary = true;
					$showTrumpet = true;
					include('includes/frontpage/teasers/teaser.php') ?>

					<?php
					$imgW='220'; 
					$showImg = '1';
					$class = 'teaser-img-right  teaser-small teaser-theme-business item-teaser-bt ';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					$category = 'Business.dk';
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
					$imgW='930';  
					$showImg = '1';
					$class = 'teaser-theme-business teaser-img-wide teaser-large item-teaser-bt';
					
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					
					$category = 'Business.dk';
					

					include('includes/frontpage/teasers/teaser.php') ?>

					<?php
					$imgW='320'; 
					$showImg = '1';
					$class = ' teaser-img-right teaser-sm item-teaser-bt teaser-theme-feature teaser-small' ;
					$imgRatio = '1:1';
					$imgSrc = '/!author';
					$showSummary = true;			
					
					$showAuthor = true;

					include('includes/frontpage/teasers/teaser.php') ?>

					

				</div>
				

				
				
			</div>
		</div>
	</div><!-- col-wrapper --> 
		

	

	<div class="col-sidebar col-border-left-lg-up col-xs-7">

			
		<div class="row">
			<div class="col-lg-12 col-md-6 col-sm-12">
				<div style="width: 300px; height: 250px;" class="demo-banner mb">Banner</div>
			</div>

			<div class="col-lg-12 col-md-6 col-sm-12">
					<?php 
						$sectionClass 	= 'latest-news mb-05';
						$imgRatio 		= '1:1';
						$premium 		= true;
						$showComments 	= true;
						$imgSrc 		= false;
						$imgW 			= '120';
						$showTime 		= false;
						$showImage 		= false; 
						$listClass 		= 'list list-top-lg';
						$listTitle 		= 'Mest læste lige nu';
						$listCount 		= '5';
							
						include('includes/list-news.php'); ?>

						<div style="width: 300px; height: 600px;" class="demo-banner">Sticky Banner</div>
			</div>

			
			

		</div>

			
		
		
		
		

			
	</div>
	
</div>