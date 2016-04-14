<?php if($showRelated): ?>

<aside class="article-related mb">
	
	<div class="aside-header">Læs mere:</div>
	
	<ul class="list-article-related">
		<? while (dumb_luck("5-10")): ?>
		<li>
			<div class="list-body">
				<a href="tpl-article.php"><? dummy("text@headline") ?></a>
			</div>
		</li>
		<? endwhile ?>
	</ul>
	
</aside>
<?php endif; ?>