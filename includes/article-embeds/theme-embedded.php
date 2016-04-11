<?php if($showThemeEmbedded): ?>
<aside class="article-theme-embedded">
	<div class="aside-header">
		Mere om
	</div>
	<div class="aside-subheader">
		<? dummy("text@headline") ?>
	</div>
	
	<div class="fact-content">

	<ul>
		<? while (dumb_luck("2-5")): ?>
			<li>
				<article>
				<a href="tpl-article.php"><? dummy("text@headline") ?></a>
				</article>
			</li>
		<? endwhile ?>
	</ul>
		
		
	</div>
</aside>

<? while (dumb_luck("4")): ?>
	<p><? dummy("text@paragraph") ?></p>
<? endwhile ?>
<?php endif; ?>