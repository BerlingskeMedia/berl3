<?php 
!isset($teaserLink) || $teaserLink == 'tpl-article.php';
?>

<article class="teaser <?= $class; ?>">
	<div class="teaser-content">
		
		<?php if ($showImg === '1'): ?>
		<figure class="teaser-img">
			<a href="<?php echo $teaserLink; ?>" title="ARTICLE HEADER"><img src="<? dummy("image". $imgSrc ."@". $imgW ."x,". $imgRatio ."") ?>" width="" height="" alt="ARTICLE HEADER" class="img" /></a>
		</figure>
		<?php endif; ?>
		
		<div class="teaser-body">
			
			<?php if($showCat): ?>
				<span class="teaser-cat">
					<? dummy("text@item") ?>
				</span>
			<?php endif; ?>

			<h2 class="header">
				<a href="<?php echo $teaserLink; ?>" title="ARTICLE HEADER">
				<? dummy("text@headline-b2") ?>
				</a>
			</h2>

			<?php if ($showSummary): ?>
			<div class="teaser-summary">
				<? dummy("text@teaser") ?>
			</div>
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
	
		
	<a href="<?php echo $teaserLink; ?>" class="teaser-link" title="ARTICLE HEADER"></a>
	</div>
	<?php if ($showRelated): ?>
	<ul class="teaser-related">
		<? while (dumb_luck("1-2")): ?>
		<li>
			<h3 class="header-related">
				<a href="<?php echo $teaserLink; ?>" title="ARTICLE HEADER"><? dummy("text@headline-b2") ?></a>
			</h3>
		</li>
		<? endwhile ?>
	</ul>
	<?php endif; ?>
</article>

<?php 
$teaserClass = false;
$showKey = false;
$imgSrc = false;
$showAuthor = false;
$showSummary = false;
$showRelated = false;
$imgWidth = '420';
$showImg = true;
$imgRatio = '3:2';
$showCat = true;
$teaserLink = 'tpl-article.php';
?>