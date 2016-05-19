<?php if($showLink): ?>

<aside class="article-embedded-link">
	<article>
		<figure>
			<a href="tpl-article.php"><img src="<? dummy("image@100x,3:2") ?>" width="" height="" alt="" /></a>
		</figure>
		<div class="teaser-body">
			<span>Læs også</span>
			<h2 class="header"><a href="tpl-article.php"><? dummy("text@headline-b") ?></a></h2>
		</div>
	</article>
</aside>
<p><? dummy("text@paragraph") ?></p>
<aside class="article-embedded-link">
	<article>
		<figure>
			<a href="tpl-article.php"><img src="<? dummy("image@100x,3:2") ?>" width="" height="" alt="" /></a>
		</figure>
		<div class="teaser-body">
			<span>Se galleri</span>
			<h2 class="header"><a href="tpl-article.php"><? dummy("text@headline-b") ?></a></h2>
		</div>
	</article>
</aside>

<?php endif; ?>