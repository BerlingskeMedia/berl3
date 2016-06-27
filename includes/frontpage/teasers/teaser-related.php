
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
				
				<h3 class="header--related">
					<div class="related--tools">
					
						<?php if($relatedCategory): ?>
							<span class="related--header__category">
								<?php echo $relatedCategory; ?> <i class="icon-external"></i> 
							</span>	
						<?php endif; ?>
						
						<?php include('includes/frontpage/teasers/labels.php'); ?>
			
						<?php if($relatedTrumpet): ?>
							<span class="related--header__trumpet">
								<? dummy("text@trumpet"); ?>
							</span>
						<?php endif; ?>

					</div>
					
					<span class="related--header__content">
						
						<?php if(preg_match('/teaser--icon__video/',$relatedTeaserClass)): ?>
							<i class="bicon-play-circled"></i>
						<?php endif; ?>

						<? dummy("text@headline-b3") ?>	
	
						<?php if( $showRelatedPaywall): ?>
							<span class="subscriber-notice"><span class="pipe"></span>Abonnement</span>
						<?php endif; ?>
							

					</span>

					

				</h3>



				<?php if($showRelatedSummary): ?>
					<div class="related--summary">
						
						
							<?php if($relatedCategory): ?>
								<span class="related--summary__category">
									<?php  echo $relatedCategory; ?>  
								</span>	
							<?php endif; ?>
							
							<?php include('includes/frontpage/teasers/labels.php'); ?>

							<span class="related--summary__content">
								<? dummy("text@short-teaser") ?>	
							</span>
							
							<?php if ($showRelatedPaywall): ?>
								<span class="subscriber-notice"><span class="pipe"></span>Abonnement</span>
							<?php endif; ?>
							
						
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
$relatedCategory = false;

?>