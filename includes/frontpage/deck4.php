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

	<?php if($topLG): ?>
		<div class="teaser-wide">
			<div class="row">
				<div class="col-xs-12 col-xl-12">
					<?php
					$imgW='1240'; 
					$showImg = true;
					$class = 'fs30 mb teaser-lg';
					$imgRatio = '16:8';
					$imgSrc = '/!b-breaking';
					$showSummary = '1';
					$showRelated = false;
					$showRelatedimg = true;
					$showDate = false;
					$showCategory = false;
					$teaserLabel = 'breaking';
					$labelText = 'Terror i Paris';


					include('includes/teaser.php') ?>			
				</div>
			</div>
		</div>
	<?php endif; ?>


	<div class="col-wrapper flex-row">
		<?php if($topMD): ?>
			<div class="row">
				<div class="col-xs-12 col-xl-12">
					<?php
					$imgW='920'; 
					$showImg = '1';
					$class = ' fs22 mb border-bottom';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = '1';
					$showRelated = '1';
					$showDate = true;
					$showCategory = true;
					$teaserLabel = 'breaking';
					$teaserLink = 'tpl-article.php?event=breaking';
					include('includes/teaser.php') ?>			
				</div>
			</div>
		
		<?php endif; ?>

	
	
		<div class="col-tags col-border-right-lg-up">
			<div class="section-title-no-border mb-2">Topnyheder</div>		

			<div class=" mt mb" style="">
				<div class=" section-title-small-border">Mandag d. <? dummy("text@date") ?></div>
			</div>
			<div class="epaper" style=" ">
				
				<div class="section-title-sm section-title-small-border">Læs dagens e-avis</div>
				<div class="row row-narrow mt">
					<div class="col-xl-6"><a href="#"><img src="http://epaper.infomedia.dk/teaser/BMA" style="border: 1px solid #ddd" alt=""></a></div>
					<div class="col-xl-6"><a href="#"><img src="http://www.b.dk/helpers/business_frontpage/business_frontpage.jpg" style="border: 1px solid #ddd" alt=""></a></div>
				</div>
				

			</div>
		</div>
		
		<div class="col-primary ">
			
			<div class="row flex-row">

				<?php if($topSM): ?>
				<div class="col-xs-12">
					<?php
					$imgW='920'; 
					$showImg = '1';
					$class = ' fs22 mb ';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = false;
					$showRelated = '1';
					$showDate = true;
					$showCategory = true;
					$teaserLabel = 'breaking';

					include('includes/teaser.php') ?>
				</div>
				<?php endif; ?>

				<div class="col-xl-8 col-lg-8  col-border-right-lg-up">
					<?php
					$imgW='920'; 
					$showImg = '1';
					$class = ' fs20';
					$imgRatio = '16:9';
					$imgSrc = '/landscape';
					$showSummary = false;
					$showRelated = '1';
					$showDate = true;
					$showCategory = true;

					include('includes/teaser.php') ?>

					<? while (dumb_luck("4")): ?>
						<?php
						$imgW='220'; 
						$showImg = true;
						$smallImg = false;
						$class = ' fs13 clearfix img-w180 teaser-img-right ';
						$imgRatio = '16:9';
						$imgSrc = '/landscape';
						$showSummary = false;
						$showRelated = '0';
						$showDate = true;
						$showCategory = true;

						include('includes/teaser.php') ?>
					<? endwhile ?>
				</div>

				<div class="col-xl-4 col-lg-12  ">
					<? while (dumb_luck("3")): ?>
					<?php
						$imgW='240'; 
						$showImg = true;
						$smallImg = false;
						$class = ' fs10 ';
						$imgRatio = '16:9';
						$showSummary = '0';
						$showRelated = '0';
						$showDate = true;
						$showCategory = true;
						include('includes/teaser.php') ?>		
						
					<? endwhile ?>

					<?php
						$imgW='120'; 
						$showImg = true;
						$smallImg = false;
						$imgSrc = '/!author';
						$class = ' fs10 teaser-feature';
						$imgRatio = '1:1';
						$showSummary = '0';
						$showRelated = '0';
						$showDate = true;
						$showCategory = true;
						$showAuthor = true;
						include('includes/teaser.php') ?>		
					
				</div>
				
			</div>
		</div>
	</div><!-- col-wrapper --> 
		

	

	<div class="col-sidebar col-border-left-xl-up">

		
			<div style="width: 300px; height: 250px;" class="demo-banner mb">Banner</div>
		
		
		
		<?php 
			$sectionClass = 'latest-news mb-05';
			$imgRatio = '1:1';
			$premium = true;
			$imgSrc = false;
			$imgW = '120';
			$showTime = false;
			$showImage = false; 
			$listClass = 'list list-top-lg';
			$listTitle = 'Mest læste lige nu';
			$listCount = '5';
				
			include('includes/list-news.php'); ?>
		
		
		

		

		
			<div style="width: 300px; height: 250px;" class="demo-banner">Banner</div>
		
	</div>
	
</div>