<?php 
		// $labelType = false;
		// $labelText = 'Breaking';
		?>

<?php 


$labelType = 'yellow';
//$labelText = '<i class="bicon-record"></i> Live';
$labelText = 'Breaking';

?>
<div class=" deck flex-row">

	<?php if($topXL): ?>
	
		<div class="row">
			<div class="col-xs-12 col-xl-12">
				<?php
				$imgW='1240'; 
				$showImg = true;
				$class = 'item--teaser teaser--xxlarge teaser--theme__xtragiant';
				$teaserIcon = 'video';
				$imgRatio = '16:7';
				$imgSrc = '/!b-breaking';
				$showSummary = '1';
				$showRelatedimg = true;
				$teaserPack = '8';
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
					$class = 'item--teaser teaser--xlarge teaser--theme__giant ';
					$teaserIcon = 'video';
					$imgRatio = '16:7';
					$imgSrc = '/!b-breaking';
					$showSummary = '1';
					$showHeader 	= true;
					$showRelatedimg = true;
					$teaserPack = '1';
					include('includes/frontpage/teasers/teaser.php') ?>			
				</div>
			</div>
		
	<?php endif; ?>


	<div class="col-wrapper flex-row">
		<?php if($topMD): ?>
			
				<div class="col--full-width">
					<?php
					$imgW='910'; 
					$showImg = '1';
					$class = 'mb item--teaser__bb teaser--img-wide teaser--large ';
					$teaserIcon = 'video';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = '1';
					$showRelated = '1';
					$showHeader = true;
					$teaserPack = '1';
					include('includes/frontpage/teasers/teaser.php') ?>			
				</div>
			
		<?php endif; ?>

	
	
		<div class="col-tags col-border-right-lg-up hidden-lg-down">
			<div class="section-title-no-border mb-2">Topnyheder</div>		

			<div class=" mt mb" style="">
				<!-- <div class=" section-title-small-border">Mandag d. <? dummy("text@date") ?></div> -->
			</div>
			<div class="epaper" style=" ">
				
				<!-- <div class="section-title-sm section-title-small-border">Læs dagens e-avis</div>
				<div class="row row-narrow mt">
					<div class="col-xl-6"><a href="#"><img src="http://epaper.infomedia.dk/teaser/BMA" style="border: 1px solid #ddd" alt=""></a></div>
					<div class="col-xl-6"><a href="#"><img src="http://www.b.dk/helpers/business_frontpage/business_frontpage.jpg" style="border: 1px solid #ddd" alt=""></a></div>
				</div> -->
				

			</div>
		</div>
		
		<div class="col-primary ">
			
			<div class="row flex-row teaser-flow">

				
				<div class="col-xs-12">
					<?php
					$imgW='930';  
					$showImg = '1';
					$class = 'item--teaser teaser--theme__business teaser--img-wide item--teaser teaser--large item--teaser ';
					$teaserIcon = 'video';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					$category = 'Business.dk';
					$teaserPack = '1';
					$showTrumpet = true;
					$showPaywall = true;

					include('includes/frontpage/teasers/teaser.php') ?>

					<?php
					$imgW='930';  
					$showImg = '1';
					$class = ' teaser--img-wide item--teaser teaser--large item--teaser__bt ';
					$teaserIcon = 'video';
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
					$class = 'teaser--theme__business teaser--img-wide item--teaser teaser--large item--teaser__bt ';
					$teaserIcon = 'video';
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
					$class = 'teaser--img-right  teaser--small teaser--theme-trade item--teaser__bt ';
					$teaserIcon = 'video';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					
					
					
					$teaserAd = true;

					include('includes/frontpage/teasers/teaser.php') ?>

					
					<?php
					$imgW='320'; 
					$showImg = '1';
					$class = 'teaser--img-left teaser--small item--teaser__bt ';
					$teaserIcon = 'video';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					
					
					

					include('includes/frontpage/teasers/teaser.php') ?>

					<?php
					$imgW='220'; 
					$showImg = '1';
					$class = 'teaser--img-right  teaser--small teaser--theme__business item--teaser__bt ';
					$teaserIcon = 'video';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					
					
					$category = 'Business.dk';
					

					include('includes/frontpage/teasers/teaser.php') ?>
					
					<?php
					$imgW='220'; 
					$showImg = '1';
					$class = 'teaser--img-right  teaser--small item--teaser__bt ';
					$teaserIcon = 'video';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					
					
					
					$teaserPack = false;

					include('includes/frontpage/teasers/teaser.php') ?>

					<?php
					$imgW='930';  
					$showImg = '1';
					$class = 'teaser--theme__business teaser--img-wide teaser--large item--teaser__bt';
					$teaserIcon = 'video';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					
					$category = 'Business.dk';
					

					include('includes/frontpage/teasers/teaser.php') ?>

					<?php
					$imgW='320'; 
					$showImg = '1';
					$class = ' teaser--img-right teaser--sm item--teaser__bt teaser--theme__feature teaser--small' ;
					$imgRatio = '1:1';
					$imgSrc = '/!author';
					$showSummary = true;			
					
					$showAuthor = true;

					include('includes/frontpage/teasers/teaser.php') ?>

					

				</div>
				

				
				
			</div>
		</div>
	</div><!-- col-wrapper -->
		

	

	<div class="col-sidebar col-border-left-lg-up">

			
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