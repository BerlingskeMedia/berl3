<?php if($showLink): ?>

<aside class="article-embedded-link">
	<article>
		<figure>
			<a href="tpl-article.php"><img src="<? dummy("image@100x,3:2") ?>" width="" height="" alt="" /></a>
		</figure>
		<div class="teaser-body">
			<?php $labelType = 'yellow';
			$labelText = 'Breaking';  ?>
			<?php if($labelType): ?>
			
			
				<?php include('includes/frontpage/teasers/labels.php'); ?>	
			
			
			<?php else: ?>
			<span class="read-also">Læs også</span>
			<?php endif; ?>
			
			<h2 class="header"><a href="tpl-article.php"><? dummy("text@headline-b") ?></a></h2>
		</div>
	</article>
</aside>
<p><? dummy("text@teaser") ?></p>


<aside class="article-embedded-link">
	<article>
		<figure>
			<a href="tpl-article.php"><img src="<? dummy("image@100x,3:2") ?>" width="" height="" alt="" /></a>
		</figure>
		<div class="teaser-body">
			<?php $labelType = 'live';
			$labelText = '<i class="bicon-record"></i> Live';  ?>
			<?php if($labelType): ?>
			
			
				<?php include('includes/frontpage/teasers/labels.php'); ?>	
			
			
			<?php else: ?>
			<span class="read-also">Læs også</span>
			<?php endif; ?>
			
			<h2 class="header"><a href="tpl-article.php"><? dummy("text@headline-b") ?></a></h2>
		</div>
	</article>
</aside>
<p><? dummy("text@teaser") ?></p>
<aside class="article-embedded-link">
	<article>
		<figure>
			<a href="tpl-article.php"><img src="<? dummy("image@100x,3:2") ?>" width="" height="" alt="" /></a>
		</figure>
		<div class="teaser-body">
			<?php $labelType = 'red';
			$labelText = 'Opdateres';  ?>
			<?php if($labelType): ?>
			
			
				<?php include('includes/frontpage/teasers/labels.php'); ?>	
			
			
			<?php else: ?>
			<span class="read-also">Læs også</span>
			<?php endif; ?>
			
			<h2 class="header"><a href="tpl-article.php"><? dummy("text@headline-b") ?></a></h2>
		</div>
	</article>
</aside>
<p><? dummy("text@teaser") ?></p>

<aside class="article-embedded-link">
	<article>
		<figure>
			<a href="tpl-article.php"><img src="<? dummy("image@100x,3:2") ?>" width="" height="" alt="" /></a>
		</figure>
		<div class="teaser-body">
			<?php $labelType = 'red';
			$labelText = 'Lige nu';  ?>
			<?php if($labelType): ?>
			
			
				<?php include('includes/frontpage/teasers/labels.php'); ?>	
			
			
			<?php else: ?>
			<span class="read-also">Læs også</span>
			<?php endif; ?>
			
			<h2 class="header"><a href="tpl-article.php"><? dummy("text@headline-b") ?></a></h2>
		</div>
	</article>
</aside>
<p><? dummy("text@teaser") ?></p>

<aside class="article-embedded-link">
	<article>
		<figure>
			<a href="tpl-article.php"><img src="<? dummy("image@100x,3:2") ?>" width="" height="" alt="" /></a>
		</figure>
		<div class="teaser-body">
			<?php $labelType = 'red';
			$labelText = 'Nyhed på vej';  ?>
			<?php if($labelType): ?>
			
			
				<?php include('includes/frontpage/teasers/labels.php'); ?>	
			
			
			<?php else: ?>
			<span class="read-also">Læs også</span>
			<?php endif; ?>
			
			<h2 class="header"><a href="tpl-article.php"><? dummy("text@headline-b") ?></a></h2>
		</div>
	</article>
</aside>
<p><? dummy("text@teaser") ?></p>

<aside class="article-embedded-link">
	<article>
		<figure>
			<a href="tpl-article.php"><img src="<? dummy("image@100x,3:2") ?>" width="" height="" alt="" /></a>
		</figure>
		<div class="teaser-body">
			<?php $labelType = 'blue';
			$labelText = 'Tophistorie';  ?>
			<?php if($labelType): ?>
			
			
				<?php include('includes/frontpage/teasers/labels.php'); ?>	
			
			
			<?php else: ?>
			<span class="read-also">Læs også</span>
			<?php endif; ?>
			
			<h2 class="header"><a href="tpl-article.php"><? dummy("text@headline-b") ?></a></h2>
		</div>
	</article>
</aside>
<p><? dummy("text@teaser") ?></p>

<aside class="article-embedded-link">
	<article>
		<figure>
			<a href="tpl-article.php"><img src="<? dummy("image@100x,3:2") ?>" width="" height="" alt="" /></a>
		</figure>
		<div class="teaser-body">
			<span class="read-also">Se galleri</span>
			<h2 class="header"><a href="tpl-article.php"><i class="bicon-camera"></i> <? dummy("text@headline-b") ?></a></h2>
		</div>
	</article>
</aside>

<p><? dummy("text@teaser") ?></p>

<aside class="article-embedded-link">
	<article>
		<figure>
			<a href="tpl-article.php"><img src="<? dummy("image@100x,3:2") ?>" width="" height="" alt="" /></a>
		</figure>
		<div class="teaser-body">
			<span class="read-also">Se video</span>
			<h2 class="header"><a href="tpl-article.php"><i class="bicon-play"></i> <? dummy("text@headline-b") ?></a></h2>
		</div>
	</article>
</aside>

<aside class="article-embedded-link">
	<article>
		<figure>
			<a href="tpl-article.php"><img src="<? dummy("image@100x,3:2") ?>" width="" height="" alt="" /></a>
		</figure>
		<div class="teaser-body">
			
			<span class="read-also">Læs også</span>
			
			
			<h2 class="header"><a href="tpl-article.php"><? dummy("text@headline-b") ?></a></h2>
			<span class="subscriber-notice">Abonnement</span>
		</div>
	</article>
</aside>
<p><? dummy("text@teaser") ?></p>

<?php endif; ?>