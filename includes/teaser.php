<article class="teaser teaser-sm <?= $class; ?>">
	<?php if ($showImg): ?>
	<figure class="teaser-img">
		<a href="tpl-article.php"><img src="<? dummy("image". $imgSrc ."@". $imgW ."x,". $imgRatio ."") ?>" width="" height="" alt="" class="img" /></a>
	</figure>
	<?php endif; ?>
	<div class="teaser-body">
		<span class="teaser-cat">
			Nyheder
		</span>
		<h2 class="header">

			<a href="tpl-article.php">
			
			<? dummy("text@headline-b2") ?>
			<?php if($showKey): ?>
				<? if (dumb_luck("25%")): ?>
					 <i class="bicon-key"></i>
				<? endif ?> 
			<?php endif; ?>
			</a>
		</h2>
		<?php if ($showSummary): ?>
		<div class="teaser-summary">
			<? dummy("text@teaser") ?>
		</div>
		<?php endif; ?>
		<?php if ($showRelated): ?>
		<ul class="teaser-related">
			<? while (dumb_luck("1-2")): ?>
			<li>
				<h3 class="header-related">
					<a href="tpl-article.php"><? dummy("text@headline-b2") ?></a>
				</h3>
			</li>
			<? endwhile ?>
		</ul>
	<?php endif; ?>
	


	<?php if($showAuthor): ?>
		<span class="teaser-author">&mdash; <? dummy("text@author") ?></span>
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
$imgH = '420';
$imgRatio = 'false';
?>