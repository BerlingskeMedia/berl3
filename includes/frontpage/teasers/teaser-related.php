
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
					
					
					
						<?php if($relatedTrumpet): ?>
							<span class="teaser--trumpet">
								<? dummy("text@trumpet"); ?>
							</span>
						<?php endif; ?>

						<? dummy("text@headline-b3") ?>
					

					<?php if(!$showRelatedSummary): ?>
						
						<?php if($showRelatedComments || $showRelatedPaywall): ?>
							<span class="footer-in-header">

								<?php if($showRelatedComments): ?>
						
									<span class="teaser--comments">
										<i class="bicon-comment-inv-alt2"></i> <? dummy("text@number") ?>
									</span>
						
							<?php endif; ?>

							<?php if ($showRelatedPaywall): ?>
								 <span class="subscriber-notice"><i class="subscriber-icon"></i> <em>Abonnement</em></span>
							<?php endif; ?>
							</span>
						<?php endif; ?>
						
					<?php endif; ?>

				</h3>



				<?php if($showRelatedSummary): ?>
					<div class="teaser-summary">
						
						
						<?php echo $summary ?>
						
							<?php if($showRelatedComments): ?>
							
								<span class="teaser--comments">
									<i class="bicon-comment-inv-alt2"></i> <? dummy("text@number") ?>
								</span>
							
							<?php endif; ?>
							<?php if ($showRelatedPaywall): ?>
								<span class="subscriber-notice"><i class="subscriber-icon"></i> <em>Abonnement</em></span>
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
?>