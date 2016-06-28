
<? while (dumb_luck($relatedCount)): ?>
<li class="<?php echo $relatedGridClass; ?>">
	<div class="<?php echo $relatedTeaserClass; ?>">
		<a href="tpl-article.php" title="[ARTICLE HEADER]">
			

			
				
				<h3 class="header-related">
					<span class="related-tools">
						<?php include('includes/frontpage/teasers/labels.php'); ?>
			
						<?php if($relatedTrumpet): ?>
							<span class="related-header-trumpet">
								<? dummy("text@trumpet"); ?>
							</span>
						<?php endif; ?>

					</span>
					
					
						<?php if($teaserIcon === 'video'): ?> <i class="bicon-play-circled"></i> <?php endif; ?> 
						<?php if($teaserIcon === 'gallery'): ?> <i class="bicon-camera"></i> <?php endif; ?>
						

						<? dummy("text@headline-b3") ?>	
	
						<?php if( $showRelatedPaywall): ?>
							<span class="subscriber-notice">Abonnement</span>
						<?php endif; ?>

				</h3>
			
		</a>
	</div>
</li>
<? endwhile ?>

<?php 
$relatedCount 		= '1';
$gridClass 			= false;
$teaserClass 		= false;
$showRelatedPaywall = false;
$relatedTrumpet 	= false;
$relatedCategory 	= false;

?>