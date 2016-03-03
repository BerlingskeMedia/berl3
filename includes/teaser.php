<?php 
$imgW = ($imgW ? $imgW : '420');
$showImg = ($showImg ? $showImg : '0');
$imgRatio = ($imgRatio ? $imgRatio : '3:2');
$showSummary = ($showSummary ? $showSummary : '0');
$showrelated = ($showRelated ? $showrelated : '0');


?>


<article class="teaser teaser-sm <?= $class; ?>">
	<?php if ($showImg === '1'): ?>
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
			</a>
		</h2>
		<?php if ($showSummary === '1'): ?>
		<div class="teaser-summary">
			<? dummy("text@teaser") ?>
		</div>
		<?php endif; ?>
		<?php if ($showRelated === '1'): ?>
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
	<?php if($showKey): ?>
		
		<? if (dumb_luck("25%")): ?>
			<div class="members-only"><i class="bicon-key"></i> <span>Premium</span></div>
		<? endif ?> 

	<?php endif; ?>


	<?php if($showAuthor): ?>
		<span class="teaser-author">&mdash; <? dummy("text@author") ?></span>
	<?php endif; ?>

	</div>
</article>

<?php 
$showKey = false;
$imgSrc = false;
$showAuthor = false;
 ?>