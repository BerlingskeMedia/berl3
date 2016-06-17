
<? while (dumb_luck($relatedCount)): ?>
<li class="<?php echo $relatedGridClass; ?>">
	<div class="<?php echo $relatedTeaserClass; ?>">
		<a href="tpl-article.php" title="[ARTICLE HEADER]">
			<?php if($relatedShowImg): ?>
			<figure class="teaser-img">
				<img src="<? dummy("image/". $relatedImgSrc. "@". $relatedImgSize ."x,". $relatedImgRatio ."") ?>" width="" height="" alt="[ARTICLE HEADER]" class="img" />
			</figure>
			<?php endif; ?>

			<div class="related-body">
				
				<h3 class="header-related">
					
					<?php  if(!$showRelatedSummary): ?>
						<?php include('includes/frontpage/teasers/labels.php'); ?>
					<?php endif ?>


						<?php if(!$showRelatedSummary && $showRelatedCategory): ?>
							<span class="teaser--category">
								<?php if($relatedCategory){echo $relatedCategory;} else {  dummy("text@b-cat"); } ?> <i class="icon-external"></i> 
							</span>	
						<?php endif; ?>

						<?php if($relatedTrumpet): ?>
							<span class="teaser--trumpet">
								<? dummy("text@trumpet"); ?>
							</span>
						<?php endif; ?>

						<? dummy("text@headline-b3") ?>
					

					<?php if(!$showRelatedSummary): ?>
						
						<?php if( $showRelatedPaywall): ?>
							<span class="teaser-tools">
							<?php if ($showRelatedPaywall): ?>
								 <span class="subscriber-notice"><em>Abonnement</em></span>
							<?php endif; ?>
							</span>
						<?php endif; ?>
						
					<?php endif; ?>

				</h3>



				<?php if($showRelatedSummary): ?>
					<div class="teaser-summary">
						
						<?php include('includes/frontpage/teasers/labels.php'); ?>
						
						<?php if($showRelatedCategory): ?>
							<span class="teaser--category">
								<?php if($relatedCategory){echo $relatedCategory;} else {  dummy("text@b-cat"); } ?> <i class="icon-external"></i> 
							</span>	
						<?php endif; ?>

						

						<?php echo $summary ?>
							
							<span class="teaser-tools">
								
							<?php if ($showRelatedPaywall): ?>
								<span class="subscriber-notice"><em>Abonnement</em></span>
							<?php endif; ?>
							</span>
					</div>
				<?php endif; ?>
			</div>
		</a>
	</div>
</li>
<? endwhile ?>

<?php 
$relatedCount = '1';
$gridClass = false;
$teaserClass = false;
$relatedImgSize = false;
$relatedImgRatio = false;
$relatedImgSrc = false;
$showRelatedSummary = false;
$showRelatedComments = false;
$showRelatedPaywall = false;
$relatedTrumpet = false;
$showRelatedCategory = false;
$relatedCategory = 'Business.dk';
$relatedTeaserLabel = false;
$labelText = false;
?>