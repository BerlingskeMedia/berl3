<?php 
if (!$teaserLink) {
	$teaserLink = 'tpl-article.php';
}
$f_contents = file("includes/teaser-b.txt"); 
$summary = $f_contents[rand(0, count($f_contents) - 1)];
$summary = substr($summary, 0, 60);

?>

<div class=" <?= $class; ?>">

	<div class="teaser-2 ">
		<!-- <article class="teaser-item"> -->

		
			<a href="<?php echo $teaserLink; ?>" class="teaser--link">
			<?php if($teaserAd): ?>
				<div class="trade--header">
					Annonce
				</div>
			<?php endif; ?>
			<?php if ($showImg  && !$smallImg): ?>
			<figure class="teaser-img">
				<img src="<? dummy("image". $imgSrc ."@". $imgW ."x,". $imgRatio ."") ?>" width="" height="" alt="[ARTICLE HEADER]" class="img" />
			</figure>
			<?php endif; ?>
		
			<div class="teaser-body">
				<?php if($showTrumpet): ?>
					<span class="teaser-cat">
						<? dummy("text@topics") ?>
					</span>
				<?php endif; ?>
				

				<?php if($showDate || $showCategory || $teaserAd): ?>
					<div class="teaser--footer">
						
						<?php if($teaserAd): ?>
							<div class="teaser--sponsor">Sponseret af <? dummy("text@company-names") ?></div>
						<?php endif; ?>

						<?php if($showCategory): ?>
						<span class="teaser--category">
							<? dummy("text@b-cat") ?>
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


				<h2 class="header">
					<?php if($teaserLabel): ?>
						
						<?php if($teaserLabel === 'breaking'): ?>
							<span class="teaser--label-breaking">
								<span><?php if(!$labelText): echo 'Breaking'; else: echo $labelText; endif; ?></span>
							</span>
						<?php endif; ?>

					<?php endif; ?>

					
					
					<? dummy("text@headline-b3") ?>
					<?php if($showKey): ?>
						<? if (dumb_luck("25%")): ?>
							 <i class="bicon-key"></i>
						<? endif ?> 
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
						<?php echo $summary ?>
					</div>
				<?php endif; ?>

				<?php if($showAuthor): ?>
					<span class="teaser-author"><? dummy("text@author") ?></span>
				<?php endif; ?>
				
				

			</div><!-- .teaser-body -->	
			</a><!-- .teaser-link -->



			<?php if($teaserPack === '1') :?>
				<div class="teaser--pack__pack1 ">
					<ul class="teaser--pack--list">
						
						
						<li class="item--teaser">
							<a href="tpl-article.php" title="[ARTICLE HEADER]">
								<figure>
									<img src="<? dummy("image/landscape@100x,3:2") ?>" width="" height="" alt="[ARTICLE HEADER]" />
								</figure>
								<div class="related-body">
									<h3 class="header-related">
										<? dummy("text@headline-b3") ?>
									</h3>
									<div class="teaser-summary">
										<?php echo $summary ?>
									</div>
								</div>
							</a>
						</li>

						<? while (dumb_luck("2")): ?>
						<li class="item--teaser">
							<a href="tpl-article.php" title="[ARTICLE HEADER]">
								<div class="related-body">
									<h3 class="header-related">
										<? dummy("text@headline-b3") ?>
									</h3>
								</div>
							</a>
						</li>
						<? endwhile ?>
						
						
					</ul>
				</div>

			<?php endif; ?>

			<?php if($teaserPack === '2') :?>
			
				<div class="teaser--pack__pack2 ">
					<ul class="teaser--pack--list">
						
						
						<li class="item--teaser">
							<a href="tpl-article.php" title="[ARTICLE HEADER]">
								<figure>
									<img src="<? dummy("image/landscape@140x,3:2") ?>" width="" height="" alt="[ARTICLE HEADER]" />
								</figure>
								<div class="related-body">
									<h3 class="header-related">
										<? dummy("text@headline-b3") ?>
									</h3>
									<div class="teaser-summary">
										<?php echo $summary ?>
									</div>
								</div>
							</a>
						</li>

						<? while (dumb_luck("3")): ?>
						<li class="item--teaser">
							<a href="tpl-article.php" title="[ARTICLE HEADER]">
								<div class="related-body">
									<h3 class="header-related">
										<? dummy("text@headline-b3") ?>
									</h3>
								</div>
							</a>
						</li>
						<? endwhile ?>
						
						
					</ul>
				</div>
			
			<?php endif; ?>

			<?php if($teaserPack === '3') :?>
				<div class="teaser--pack__pack3 ">
					<ul class="teaser--pack--list">
						
						
						<li class="item--teaser">
							<a href="tpl-article.php" title="[ARTICLE HEADER]">
								<figure>
									<img src="<? dummy("image/landscape@100x,3:2") ?>" width="" height="" alt="[ARTICLE HEADER]" />
								</figure>
								<div class="related-body">
									<h3 class="header-related">
										<? dummy("text@headline-b3") ?>
									</h3>
									<div class="teaser-summary">
										<?php echo $summary ?>
									</div>
								</div>
							</a>
						</li>

						
						<li class="item--teaser">
							<a href="tpl-article.php" title="[ARTICLE HEADER]">
								<div class="related-body">
									<h3 class="header-related">
										<? dummy("text@headline-b3") ?>
									</h3>
									<div class="teaser-summary">
										<?php echo $summary ?>
									</div>
								</div>
							</a>
						</li>
						
						<li class="item--teaser">
							<a href="tpl-article.php" title="[ARTICLE HEADER]">
								<figure>
									<img src="<? dummy("image/landscape@140x,3:2") ?>" width="" height="" alt="[ARTICLE HEADER]" />
								</figure>
								<div class="related-body">
									<h3 class="header-related">
										<? dummy("text@headline-b3") ?>
									</h3>
									<div class="teaser-summary">
										<?php echo $summary ?>
									</div>
								</div>
							</a>
						</li>
						
						
					</ul>
				</div>
			<?php endif; ?>

		<!-- </article> -->
		
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
$showTrumpet = false;
$relatedImg = false;
$showRelatedimg = false;
$showRating = false;
$teaserLabel = false;
$teaserAd = false;
$teaserPack = false;
?>