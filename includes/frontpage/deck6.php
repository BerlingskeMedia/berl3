<?php 
if(isset($_GET["topSM"])) {
	$topSM = true;
} 
if(isset($_GET["topMD"])) {
	$topMD = true;
} 
if(isset($_GET["topLG"])) {
	$topLG = true;
} 

	
?>
<div class=" deck flex-row">

	


	<div class="col-wrapper flex-row">
		

	
	
		<div class="col-tags col-border-right-lg-up">
			<div class="section-title-no-border mb-2">Title</div>		
		</div>
		
		<div class="col-primary ">
			
			<div class="row flex-row teaser-flow">

				
				<div class="col-xs-12">
					<?php
					$imgW='920'; 
					$showImg = '1';
					$class = 'teaser--img-wide item--teaser teaser--big	';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					$showRelated = false;
					$showDate = false;
					$showCategory = false;
					$teaserLabel = false;
					$showComments = true;
					$showPaywall = true;

					include('includes/frontpage/teasers/teaser.php') ?>

					<?php
					$imgW='920'; 
					$showImg = '1';
					$class = 'teaser--img-wide item--teaser teaser--big	 teaser--theme-feature item--teaser__bt';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					$showRelated = false;
					$showDate = false;
					$showCategory = false;
					$teaserLabel = false;
					$showTrumpet = 'Jeg er en forrider';
					$showComments = true;

					include('includes/frontpage/teasers/teaser.php') ?>

					


					
					
					

					<?php
					$imgW='220'; 
					$imgW='220'; 
					$showImg = '1';
					$class = 'teaser--img-right  teaser--small teaser--theme-business item--teaser__bt';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					$showRelated = false;
					$showDate = false;
					$showCategory = true;
					$teaserLabel = false;
					$showTrumpet = 'Børsnotering';
					$showComments = true;

					include('includes/frontpage/teasers/teaser.php') ?>
					
					<?php
					$imgW='940'; 
					$showImg = '1';
					$class = 'teaser--img-wide teaser--big  item--teaser__bt';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					$showRelated = false;
					$showDate = false;
					$showCategory = false;
					$teaserLabel = false;
					$teaserPack = false;
					$showComments = true;

					include('includes/frontpage/teasers/teaser.php') ?>
					
					<? if (dumb_luck("50%")) {
						$imgW='220'; 
						$class = 'teaser--img-right  teaser--small teaser--trade item--teaser__bt';
					} else {
						$imgW='940';
						$class = 'teaser--img-wide  teaser--big teaser--trade item--teaser__bt';
					}
					

					$showImg = '1';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					$showRelated = false;
					$showDate = false;
					$showCategory = false;
					$teaserLabel = false;
					$teaserAd = true;

					include('includes/frontpage/teasers/teaser.php') ?>


					
					<?php
					$imgW='920'; 
					$showImg = '1';
					$class = ' teaser--img-right teaser--small item--teaser__bt ';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					$showRelated = true;
					$showDate = false;
					$showCategory = false;
					$teaserLabel = false;
					$teaserPack = false;
					$showComments = true;
					$showPaywall = true;

					include('includes/frontpage/teasers/teaser.php') ?>
					
					
					<?php if($showBflow): ?>
					<!-- SMALL TEASERS: -->
					<?php
					$imgW='920'; 
					$showImg = '1';
					$class = ' teaser--img-right teaser--small item--teaser__bt  all' ;
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					$showRelated = false;
					$showDate = false;
					$showCategory = false;
					$teaserLabel = false;
					$showComments = true;

					include('includes/frontpage/teasers/teaser.php') ?>


					<?php
					$imgW='920'; 
					$showImg = '1';
					$class = ' teaser--img-right  item--teaser__bt teaser--theme-feature teaser--small' ;
					$imgRatio = '1:1';
					$imgSrc = '/!author';
					$showSummary = true;
					$showRelated = false;
					$showDate = false;
					$showCategory = false;
					$teaserLabel = false;
					$showComments = true;

					include('includes/frontpage/teasers/teaser.php') ?>

					<?php
					$imgW='920'; 
					$showImg = '1';
					$class = ' teaser--img-right  item--teaser__bt  teaser--small' ;
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					$showRelated = false;
					$showDate = false;
					$showCategory = false;
					$teaserLabel = false;
					$showComments = true;
					$showAuthor = true;

					include('includes/frontpage/teasers/teaser.php') ?>

				<?php endif; ?>
				</div>
				

				
				
			</div>
		</div>
	</div><!-- col-wrapper -->
		

	

	<div class="col-sidebar col-border-left-lg-up">

		
		
		
		
		
		<?php 
			$sectionClass = 'latest-news mb-05';
			$imgRatio = '1:1';
			$premium = true;
			$imgSrc = false;
			$imgW = '120';
			$showTime = true;
			$showImage = false; 
			$listClass = 'list list-time';
			$listTitle = 'Some list';
			$listCount = '5';
				
			include('includes/list-news.php'); ?>
		
		
		

		

		
			<div style="width: 300px; height: 600px;" class="demo-banner">Sticky Banner</div>
		
	</div>
	
</div>

<?php $showBflow = false; ?>