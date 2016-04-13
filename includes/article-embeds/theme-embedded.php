<?php if($showThemeEmbedded): ?>
<aside class="article-theme-embedded article-embed-pull-right">
	<div class="aside-header-sm">
		Tema
	</div>
	<div class="aside-subheader">
		<? dummy("text@headline") ?>
	</div>
	
	<div class="fact-content">

	<ul class="list-theme">
		<? while (dumb_luck("2-5")): ?>
			<li>
				<article>
				<a href="tpl-article.php"><? dummy("text@headline") ?></a>
				</article>
			</li>
		<? endwhile ?>
		<li class="current">
			<article>
			<a href="tpl-article.php"><? dummy("text@headline") ?></a>
			</article>
		</li>
		<li>
			<article>
			<a href="tpl-article.php"><? dummy("text@headline") ?></a>
			</article>
		</li>
	</ul>
	
	<footer class="aside-footer">
		<button class="btn btn-xs btn-gray">Se alle</button>
		<button class="btn btn-xs btn-blue pull-right">Følg</button>

	</footer>
		
	</div>
</aside>

<? while (dumb_luck("4")): ?>
	<p><? dummy("text@paragraph") ?></p>
<? endwhile ?>
<?php endif; ?>