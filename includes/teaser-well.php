<?php 
	$isBreaking = rand(0,1);
	$breakingLabel = 'Præsidentvalg';
	if ($isBreaking == '1') {
		$breakingLabel = 'Breaking';
	}
?>
<article class="teaser teaser-well <?php if($isBreaking == '1') { echo 'teaser-breaking';} ?> <? if (dumb_luck("50%")): ?>teaser-well-white<? else: ?>teaser-well-black<? endif ?>">
	<a href="tpl-article.php">
		<div class="teaser-bg" style="background-image:url(<? dummy("image/!b-breaking@1240x,16:9") ?>)"></div>
	</a>
	
	<div class="teaser-content">
		<div class="well-category">
			<?php echo $breakingLabel; ?>
		</div>
		<h2 class="header"><a href="tpl-article.php"><? dummy("text@headline-b2") ?></a></h2>
		<p class="well-summary"><? dummy("text@teaser") ?>
			<span class="readmore"><i class="bicon-right-1"></i></span>
		</p>	
		<!-- <ul class="well-related">
			<? while (dumb_luck("0-2")): ?>
			<li>
				<figure class="related-img">
					<a href="tpl-article.php"><img src="<? dummy("image@120x,16:9") ?>" width="" height="" alt="" /></a>
				</figure>
				<h3 class="header-related">
					<a href="tpl-article.php"><? dummy("text@headline-b2") ?></a>
				</h3>
			</li>
			<? endwhile ?>
		</ul> -->

	</div>
</article>