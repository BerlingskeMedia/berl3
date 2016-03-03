<?php 
$imgW = ($imgW ? $imgW : '420');
$showImg = ($showImg ? $showImg : '0');
$imgRatio = ($imgRatio ? $imgRatio : '3:2');


?>


<article class="teaser teaser-sm <?= $class; ?>">
	<span class="teaser-cat">
		<a href="tpl-section.php">Nyheder</a>
	</span>

	<?php if ($showImg === '1'): ?>
	<figure class="teaser-img">
		<a href="tpl-article.php"><img src="<? dummy("image@". $imgW ."x,". $imgRatio ."") ?>" width="" height="" alt="" /></a>
	</figure>
	<?php endif; ?>
	<div class="teaser-body">
		<h2 class="header">
			<a href="tpl-article.php">
			
			<? dummy("text@headline-b2") ?>
			</a>
		</h2>
	</div>
</article>