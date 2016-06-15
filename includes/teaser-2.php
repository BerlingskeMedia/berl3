<?php 
if (!$teaserLink) {
	$teaserLink = 'tpl-article.php';
}
$f_contents = file("includes/teaser-b.txt"); 
$summary = $f_contents[rand(0, count($f_contents) - 1)];
// $summary = substr($summary, 0, 60);

if(!$headerSrc) {
	$headerSrc = 'headline-b3';
}

if(!$summarySrc) {
	$summarySrc = 'short-teaser';
}



?>

<div class=" <?= $class; ?>">

	<div class="teaser-2 ">
		<!-- <article class="teaser-item"> -->

		
			
			

			<?php if($teaserAd): ?>
				<div class="trade--header">
					Annonce
				</div>
			<?php endif; ?>

			<a href="<?php echo $teaserLink; ?>" class="teaser--link">	

				<?php if ($showImg  && !$smallImg): ?>
					<figure class="teaser-img">


						
						<?php if($teaserLabel && !preg_match('/teaser--xlarge/',$class)): ?>
							<?php include('includes/frontpage/teasers/labels.php'); ?>
						<?php endif; ?>
						<img src="<? dummy("image". $imgSrc ."@". $imgW ."x,". $imgRatio ."") ?>" width="" height="" alt="[ARTICLE HEADER]" class="img" />
					</figure>
				<?php endif; ?>

			</a>

			<div class="teaser--content">

			<a href="<?php echo $teaserLink; ?>" class="teaser--link">	
				<div class="teaser-body">
				<?php if($showDate || $showCategory || $teaserAd || $showTrumpet)  : ?>
					<div class="teaser--footer">
						
						<?php if($teaserAd): ?>
							<div class="teaser--sponsor">Sponseret af <? dummy("text@company-names") ?></div>
						<?php endif; ?>
						
						<?php // if($showCategory): ?>
							<!-- <span class="teaser--category">
								<? //  dummy("text@item") ?>
							</span> -->
						<?php // endif; ?>

						<?php if($showTrumpet): ?>
							<span class="teaser--trumpet">
								<?php echo $showTrumpet; ?>
							</span>
						<?php endif; ?>

						<?php if($showDate): ?>
						<span class="teaser--date">
							<i class="bicon-clock-alt"></i>
							<? dummy("text@time-ago-hours") ?>
						</span>	
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php if($teaserLabel && preg_match('/teaser--xlarge/',$class)): ?>
					<?php include('includes/frontpage/teasers/labels.php'); ?>
				<?php endif; ?>

				<h2 class="header">
					
					<? dummy("text@".$headerSrc."") ?>
					
			
					<?php if(!$showSummary && $showComments &! $showAuthor): ?>
						
							<span class="teaser--comments">
								<i class="bicon-comment-inv-alt2"></i> <? dummy("text@number") ?>
							</span>
						
					<?php endif; ?>
				</h2>
				<?php if($showRating): ?>
					
					<?php $rating = rand(0,6); ?>
						<div class="teaser-rating-<?php echo $rating; ?> mb">
							<? while (dumb_luck("6")): ?>
								<i class="bicon-star"></i>
							<? endwhile ?>
							<?php if($rating == '0'): ?><span class="star-txt"> &mdash; <?php echo $rating; ?>  stjerner </span><?php endif; ?>
						</div>
					<?php endif; ?>

				<?php if ($smallImg): ?>
					<figure class="teaser-img-sm">
						<img src="<? dummy("image". $imgSrc ."@". $imgW ."x,". $imgRatio ."") ?>" width="" height="" alt="[ARTICLE HEADER]" class="img" />
					</figure>
				<?php endif; ?>

				<?php if ($showSummary): ?>
					<div class="teaser-summary">
						
						

						<?php if($showCategory): ?>
						<span class="teaser--category">
							<?php if($category){echo $category;} else {  dummy("text@b-cat"); } ?> <span class="pipe"> | </span> 
						</span>	
						<?php endif; ?>

						

						

						<? dummy("text@".$summarySrc."") ?>
						
						<?php if($showComments  ): ?>
							<span class="teaser--comments">
								<i class="bicon-comment-inv-alt2"></i> <? dummy("text@number") ?>
							</span>
						<?php endif; ?>

						<? if (dumb_luck("100%")): ?>
							 <span class="subscriber-notice"><i class="subscriber-icon"></i> <em>Abonnement</em></span>
						<? endif ?> 
					</div>
				<?php endif; ?>

				<?php if($showAuthor): ?>
					<span class="teaser--author"><? dummy("text@author") ?>
					<?php if($showComments &! $showSummary): ?>
						<span class="teaser--comments">
							<i class="bicon-comment-inv-alt2"></i> <? dummy("text@number") ?>
						</span>
					<?php endif; ?>
					</span>
				<?php endif; ?>
				
				

			</div><!-- .teaser-body -->	
			</a><!-- .teaser-link -->

				

			<?php include('includes/frontpage/teasers/teaserpacks.php'); ?>

		<!-- </article> -->
		
		</div>

	</div>

</div>

<?php 
$showSummary = false;
$showRelated = false;
$showImg = true;
$showKey = false;
$imgSrc = false;
$showAuthor = false;
$imgRatio = false;
$showCat = false;
$smallImg = false;
$showCategory = false;
$showDate = false;
$teaserTrumpet = false;
$relatedImg = false;
$showRelatedimg = false;
$showRating = false;
$teaserLabel = false;
$teaserAd = false;
$teaserPack = false;
$teaserLink = false;
$showTrumpet = false;
$showComments = false;
?>