<?php 
$imgW = ($imgW ? $imgW : '420');
$showImg = ($showImg ? $showImg : '0');
$imgRatio = ($imgRatio ? $imgRatio : '3:2');
$showSummary = ($showSummary ? $showSummary : '0');

?>


<article class="teaser teaser-sm <?= $class; ?>">
	<?php if ($showImg === '1'): ?>
	<figure class="teaser-img">
		<a href="tpl-article.php"><img src="<? dummy("image@". $imgW ."x,". $imgRatio ."") ?>" width="" height="" alt="" /></a>
	</figure>
	<?php endif; ?>
	<div class="teaser-body">
		<h2 class="header">
			<a href="tpl-article.php">
			<span class="teaser-cat">
				Nyheder
			</span>
			<? dummy("text@headline-b2") ?>
			</a>
		</h2>
		<?php if ($showSummary === '1'): ?>
		<div class="teaser-summary">
			<? dummy("text@teaser") ?>
		</div>
		<?php endif; ?>

	</div>
</article>