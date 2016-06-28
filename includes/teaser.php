<?php 
if (!$teaserLink) {
	$teaserLink = 'tpl-article.php';
}
?>


<div class="teaser <?= $class; ?>">
	<!-- <article class="teaser-item"> --> 

	
	
		<?php if ($showImg  && !$smallImg): ?>
		<figure class="teaser-img">
			<a href="<?php echo $teaserLink; ?>" title="[ARTICLE HEADER]">
				<img src="<? dummy("image". $imgSrc ."@". $imgW ."x,". $imgRatio ."") ?>" width="" height="" alt="[ARTICLE HEADER]" class="img" />
			</a>
		</figure>
		<?php endif; ?>
	
		<div class="teaser-body">
			<?php if($showTrumpet): ?>
				<span class="teaser-cat">
					<? dummy("text@topics") ?>
				</span>
			<?php endif; ?>
			<h2 class="header">
				
				<?php if($teaserLabel): ?>
					<?php if($teaserLabel === 'breaking'): ?>
						
						
						<span class="teaser-label-breaking">
							<span><?php if(!$labelText): echo 'Breaking'; else: echo $labelText; endif; ?></span>
						</span>
					<?php endif; ?>
				<?php endif; ?>

				<a href="tpl-article.php">
				

				<? dummy("text@headline-b") ?>
				<?php if($showKey): ?>
					<? if (dumb_luck("25%")): ?>
						 <i class="bicon-key"></i>
					<? endif ?> 
				<?php endif; ?>
				</a>
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
					<a href="<?php echo $teaserLink; ?>" title="[ARTICLE HEADER]">
					<img src="<? dummy("image". $imgSrc ."@". $imgW ."x,". $imgRatio ."") ?>" width="" height="" alt="[ARTICLE HEADER]" class="img" /></a>
				</figure>
			<?php endif; ?>

			<?php if ($showSummary): ?>
				<div class="teaser-summary">
					<a href="<?php echo $teaserLink; ?>"><? dummy("text@teaser-b") ?></a>
				</div>
			<?php endif; ?>

			<?php if($showAuthor): ?>
				<span class="teaser-author"><? dummy("text@author") ?></span>
			<?php endif; ?>
				
			<?php if($showDate || $showCategory): ?>
				<div class="teaser-footer">
					<?php if($showDate): ?>
					<span class="teaser-date">
						<? dummy("text@time-ago") ?>
					</span>	
					<?php endif; ?>

					<?php if($showCategory): ?>
					<span class="teaser-category">
						<? dummy("text@b-cat") ?>
					</span>	
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if ($showRelated): ?>
			<ul class="teaser-related">
				<? while (dumb_luck("1-2")): ?>
				
				<li>
					<?php if($showRelatedimg): ?>
						<figure><a href="tpl-article.php" title="[ARTICLE HEADER]"><img src="<? dummy("image@60x,3:2") ?>" width="" height="" alt="[ARTICLE HEADER]" /></a></figure>
					<?php endif; ?>
					<h3 class="header-related">
						<a href="tpl-article.php" title="[ARTICLE HEADER]"><? dummy("text@headline-b") ?></a>
					</h3>
				</li>
				<? endwhile ?>
			</ul>
			<?php endif; ?>

		</div><!-- .teaser-body --> 	

	<!-- </article> --> 
	
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
$showTrumpet = false;
$relatedImg = false;
$showRelatedimg = false;
$showRating = false;
$teaserLabel = false;

?>