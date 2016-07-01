
<? while (dumb_luck($relatedCount)): ?>
<li class="<?php echo $relatedGridClass; ?>">
	<div class="<?php echo $relatedTeaserClass; ?>">
		<a href="tpl-article.php" title="[ARTICLE HEADER]">
			<?php if($relatedShowImg): ?>
			<figure class="teaser-img <?php if($teaserIcon === 'video'): ?> teaser-icon-video <?php endif; ?> <?php if($teaserIcon === 'gallery'): ?> teaser-icon-gallery <?php endif; ?>">
				<img src="<? dummy("image/". $relatedImgSrc. "@". $relatedImgSize ."x,". $relatedImgRatio ."") ?>" width="" height="" alt="[ARTICLE HEADER]" class="img" />
			</figure>
			<?php endif; ?>

			<div class="related-body">
				
				<h3 class="header-related">
					<div class="related-tools">
						
						<?php include('includes/frontpage/teasers/labels.php'); ?>

						<?php if($relatedCategory): ?>
							<span class="related-header-category">
								<?php echo $relatedCategory; ?> <i class="icon-external"></i> - 
							</span>	
						<?php endif; ?>
			
						<?php if($relatedTrumpet): ?>
							<span class="related-header-trumpet">
								<? dummy("text@trumpet"); ?>
							</span>
						<?php endif; ?>

					</div>
					
					<span class="related-header-content">
						<?php if($teaserIcon === 'video'): ?> <i class="bicon-play-circled"></i> <?php endif; ?> 
						<?php if($teaserIcon === 'gallery'): ?> <i class="bicon-camera"></i> <?php endif; ?>
						

						<? dummy("text@headline-b3") ?>	
	
						<?php if( $showRelatedPaywall): ?>
							<span class="subscriber-notice">Abonnement</span>
						<?php endif; ?>
							

					</span>

					

				</h3>



				<?php if($showRelatedSummary): ?>
					<div class="related-summary">
						
							<?php include('includes/frontpage/teasers/labels.php'); ?>

							<?php if($relatedCategory): ?>
								<span class="related-summary-category">
									<?php  echo $relatedCategory; ?>  -
								</span>	
							<?php endif; ?>
							
							

							<span class="related-summary-content">
								<? dummy("text@short-teaser") ?>	
							</span>
							
							<?php if ($showRelatedPaywall): ?>
								<span class="subscriber-notice">Abonnement</span>
							<?php endif; ?>
							
						
					</div>
				<?php endif; ?>
			</div>
		</a>
	</div>
</li>
<? endwhile ?>

<?php 
$relatedCount 		= '1';
$gridClass 			= false;
$teaserClass 		= false;
$relatedImgSize 	= false;
$relatedImgRatio 	= false;
$relatedImgSrc 		= false;
$showRelatedSummary = false;
$showRelatedComments = false;
$showRelatedPaywall = false;
$relatedTrumpet 	= false;
$relatedCategory 	= false;

?>