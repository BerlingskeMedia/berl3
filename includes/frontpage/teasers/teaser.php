<?php 
if (!$teaserLink) { // Link to default article - could be longread or article with breaking tag
	$teaserLink = 'tpl-article.php';
}


if(!$headerSrc) { // if no header src, just show random dummy header from berlingske txt file (shop teasers use different header types)
	$headerSrc = 'headline-b3';
}

if(!$summarySrc) { // if no summary src, just show random dummy sumamry from berlingske txt file (shop teasers use different summaries)
	$summarySrc = 'short-teaser';
}



?>

<div class=" <?= $class; ?>  ">

		<div class="teaser">

			<?php if($teaserAd): ?>
				<div class="trade--header">
					Annonce
				</div>
			<?php endif; ?>


			<a href="<?php echo $teaserLink; ?>" class="teaser--link">	
				
				

				<?php if ($showImg ): ?>
					<figure class="teaser-img">
						<?php include('includes/frontpage/teasers/labels.php'); ?>
						<img src="<? dummy("image". $imgSrc ."@". $imgW ."x,". $imgRatio ."") ?>" width="" height="" alt="[ARTICLE HEADER]" class="img" />
					</figure>
				<?php endif; ?>

			</a>

			<div class="teaser--content">

			<a href="<?php echo $teaserLink; ?>" class="teaser--link">	
				<div class="teaser-body">
				<?php if($showCategory || $teaserAd || $showTrumpet)  : ?>
					<div class="teaser--footer">
						
						<?php if($teaserAd): ?>
							<div class="teaser--sponsor">Sponseret af <? dummy("text@company-names") ?></div>
						<?php endif; ?>
						
						<?php if($category): ?>
							<span class="teaser--category">
								 <?php echo $category; ?> 
							</span>	
						<?php endif; ?>

						<?php if($showTrumpet): ?>
							<span class="teaser--trumpet">
								<? dummy("text@trumpet") ?>
							</span>
						<?php endif; ?>

					</div>
				<?php endif; ?>

				<?php if($labelType && preg_match('/teaser--xlarge/',$class)): ?>
					<?php include('includes/frontpage/teasers/labels.php'); ?>
				<?php endif; ?>

				<?php if($labelType && preg_match('/teaser--xxlarge/',$class)): ?>
					<?php include('includes/frontpage/teasers/labels.php'); ?>
				<?php endif; ?>
				

				
				
				<h2 class="header">
					
					<? dummy("text@".$headerSrc."") ?>
						<?php if (!$showAuthor ): ?>
							<?php if($showPaywall) : ?>
								 <span class="subscriber-notice"><span class="pipe"></span>Abonnement</span>
							<?php endif; ?>
						<?php endif; ?>

				</h2>
				

				<?php if($showPrice): ?>
					
					<div class="teaser--price">
						<span class="teaser--price--price"><? dummy("text@prices") ?>,-</span>	
						<button class="btn btn-xs">Køb</button>
					</div>
				<?php endif; ?>

				<?php if($showRating): ?>
					
						<?php $rating = rand(0,6); ?>

						<div class="teaser-rating-<?php echo $rating; ?> ">
							<? while (dumb_luck("6")): ?>
								<i class="bicon-star"></i>
							<? endwhile ?>
							<?php if($rating == '0'): ?><span class="star-txt"> &mdash; <?php echo $rating; ?>  stjerner </span><?php endif; ?>
						</div>
						<?php $rating = false; ?>
				
				<?php endif; ?>

				
				<?php if ($showSummary): ?>
					<div class="teaser--summary">

							<?php if($category): ?>
								<span class="teaser--category">
									 <?php echo $category; ?> 
								</span>	
							<?php endif; ?>
							
							<span class="teaser--summary__content">
								<? dummy("text@".$summarySrc."") ?>	
							</span>
							
						
						<?php if($showPaywall): ?>
							<? if (dumb_luck("100%")): ?>
								 <span class="subscriber-notice"><span class="pipe"></span>Abonnement</span>
							<? endif ?> 
						<?php endif; ?>

					</div>
				<?php endif; ?>
				
				<?php if($showAuthor): ?>
					<span class="teaser--author"><? dummy("text@author") ?>
					<?php if(!$showSummary) : ?>

						<?php if($showPaywall) : ?>
							<span class="subscriber-notice"><span class="pipe"></span>Abonnement</span>
						<?php endif; ?>

					<?php endif; ?>


					</span>
				<?php endif; ?>

			</div><!-- .teaser-body -->	
			</a><!-- .teaser-link -->

		
		</div>

	</div>

	<?php include('includes/frontpage/teasers/teaserpacks.php'); ?>

</div>

<?php 
$showSummary 	= false;
$showImg 		= true;
$imgSrc 		= false;
$showAuthor 	= false;
$imgRatio 		= false;
$category 		= false;
$teaserTrumpet 	= false;
$showRating 	= false;
$teaserAd 		= false;
$teaserPack 	= false;
$teaserLink 	= false;
$showTrumpet 	= false;
$showPaywall 	= false;
$headerSrc 		= 'headline-b3';
$summarySrc 	= 'short-teaser';
$showPrice 		= false;
$showHeader 	= true;
?>