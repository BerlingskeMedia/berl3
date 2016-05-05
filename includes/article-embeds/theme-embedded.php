<?php if($showThemeEmbedded): ?>
<aside class="article-theme-embedded article-embed-pull-right embed-collapsed-sm continue-reading-fact">
	
	<div class="embed-content">
		
		<div class="aside-header-sm col-blue">
			Tema
		</div>
		<div class="aside-subheader">
			<? dummy("text@headline-b") ?>
		</div>	

		<ul class="list-theme">
			<? while (dumb_luck("2-5")): ?>
				<li>
					<article>
					<a href="tpl-article.php"><? dummy("text@headline-b") ?></a>
					</article>
				</li>
			<? endwhile ?>
			<li class="current">
				<article>
				<a href="tpl-article.php"><? dummy("text@headline-b") ?></a>
				</article>
			</li>
			<li>
				<article>
				<a href="tpl-article.php"><? dummy("text@headline-b") ?></a>
				</article>
			</li>
		</ul>
		
		<footer class="aside-footer">
			<button class="btn btn-xs btn-gray">Se alle</button>
			<button class="btn btn-xs btn-blue pull-right">Følg</button>

		</footer>
		
	
		<div class="embed-fade text-center">
			<button class="btn btn-blue toggle-embed btn-sm">Udvid tema</button>
		</div>
	</div>

</aside>

<? while (dumb_luck("4")): ?>
	<p><? dummy("text@paragraph") ?></p>
<? endwhile ?>
<?php endif; ?>