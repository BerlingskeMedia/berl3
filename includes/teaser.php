

<article class="teaser <?= $class; ?>">
	<?php if ($showImg  && !$smallImg): ?>
	<figure class="teaser-img">
		<a href="tpl-article.php">
		<img src="<? dummy("image". $imgSrc ."@". $imgW ."x,". $imgRatio ."") ?>" width="" height="" alt="" class="img" /></a>
	</figure>
	<?php endif; ?>
	<div class="teaser-body">
		<?php if($showTrumpet): ?>
			<span class="teaser-cat">
				<? dummy("text@topics") ?>
			</span>
		<?php endif; ?>
		<h2 class="header">

			<a href="tpl-article.php">
			
			<? dummy("text@headline-b") ?>
			<?php if($showKey): ?>
				<? if (dumb_luck("25%")): ?>
					 <i class="bicon-key"></i>
				<? endif ?> 
			<?php endif; ?>
			</a>
		</h2>
		<?php if ($smallImg): ?>
			<figure class="teaser-img-sm">
				<a href="tpl-article.php">
				<img src="<? dummy("image". $imgSrc ."@". $imgW ."x,". $imgRatio ."") ?>" width="" height="" alt="" class="img" /></a>
			</figure>
		<?php endif; ?>

		<?php if ($showSummary): ?>
			<div class="teaser-summary">
				<a href=="tpl-article.php"><? dummy("text@teaser-b") ?></a>
			</div>
		<?php endif; ?>

		<?php if($showAuthor): ?>
			<span class="teaser-author">&mdash; <? dummy("text@author") ?></span>
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
				<h3 class="header-related">
					<a href="tpl-article.php"><? dummy("text@headline-b") ?></a>
				</h3>
			</li>
			<? endwhile ?>
		</ul>
		<?php endif; ?>
	


	

	</div>
</article>

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
?>