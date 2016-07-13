
<div class=" deck flex-row">

	


	<div class="col-wrapper flex-row">
		

	
	
		<div class="col-tags col-border-right-xl-up hidden-lg-down">
			<div class="section-title mb-2">Title</div>		
		</div>
		
		<div class="col-primary ">
			
			<div class="row flex-row teaser-flow">

				
				<div class="col-xs-12">
					<?php
					$imgW='930';  
					$showImg = '1';
					$class = 'teaser-img-wide item-teaser teaser-large	';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					
					$labelType = false;
					$showComments = true;
					$showPaywall = true;

					include('includes/frontpage/teasers/teaser.php') ?>

					<?php
					$imgW='930';  
					$showImg = '1';
					$class = 'teaser-img-wide item-teaser teaser-large item-teaser-bt';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					
					
					$labelType = false;
					$showTrumpet = 'Jeg er en forrider';
					$showComments = true;

					include('includes/frontpage/teasers/teaser.php') ?>

					<?php
					$imgW='220'; 
					$imgW='220'; 
					$showImg = '1';
					$class = 'teaser-img-right  teaser-small teaser-theme-business item-teaser-bt';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					$category = 'Business.dk';
					
					$labelType = false;
					$showTrumpet = 'Børsnotering';
					$showComments = true;

					include('includes/frontpage/teasers/teaser.php') ?>
					
					<?php
					$imgW='940'; 
					$showImg = '1';
					$class = 'teaser-img-wide teaser-large  item-teaser-bt';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					
					
					$labelType = false;
					$teaserPack = false;
					$showComments = true;

					include('includes/frontpage/teasers/teaser.php') ?>
					
						<?php 
						$imgW='220'; 
						$class = 'teaser-img-right  teaser-small teaser-theme-trade item-teaser-bt';
					
						// $imgW='940';
						// $class = 'teaser-img-wide  teaser-large teaser-theme-trade item-teaser-bt';
				
					

					$showImg = '1';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					
					$labelType = false;
					$teaserAd = true;

					include('includes/frontpage/teasers/teaser.php') ?>


					
					<?php
					$imgW='930';  
					$showImg = '1';
					$class = ' teaser-img-right teaser-small item-teaser-bt ';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					
					$labelType = false;
					$teaserPack = false;
					$showComments = true;
					$showPaywall = true;

					include('includes/frontpage/teasers/teaser.php') ?>
					
					
					<?php if($showBflow): ?>
					<!-- SMALL TEASERS: --> 
					<?php
					$imgW='930';  
					$showImg = '1';
					$class = ' teaser-img-right teaser-small item-teaser-bt  all' ;
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					
					
					$labelType = false;
					$showComments = true;

					include('includes/frontpage/teasers/teaser.php') ?>


					<?php
					$imgW='930';  
					$showImg = '1';
					$class = ' teaser-img-right  item-teaser-bt teaser-theme-feature teaser-small' ;
					$imgRatio = '1:1';
					$imgSrc = '/!author';
					$showAuthor = true;
					$showSummary = true;
					$labelType = false;

					include('includes/frontpage/teasers/teaser.php') ?>

					<?php
					$imgW='930';  
					$showImg = '1';
					$class = ' teaser-img-right  item-teaser-bt  teaser-small' ;
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = true;
					
					
					$labelType = false;
					$showComments = true;
					$showAuthor = false;

					include('includes/frontpage/teasers/teaser.php') ?>

				<?php endif; ?>
				</div>
				

				
				
			</div>
		</div>
	</div><!-- col-wrapper --> 
		

	

	<div class="col-sidebar col-border-left-lg-up">

		
		
		
		
		<div class="row">
			<div class="col-lg-12 col-md-6 col-sm-12">
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
			</div>
			<div class="col-lg-12 col-md-6 col-sm-12">
				<div style="width: 300px; height: 600px;" class="demo-banner">Sticky Banner</div>
			</div>
		</div>
		
		
		
		

		

		
			
		
	</div>
	
</div>

<?php $showBflow = false; ?>