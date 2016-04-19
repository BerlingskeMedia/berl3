<?php if($showRelated): ?>

<aside class="article-related ">
	
	<div class="aside-header-sm col-blue">Læs mere</div>
	
	<ul class="list list-article-related list-arrow list-show-first-two mb-sm">
		<? while (dumb_luck("5-10")): ?>
		<li>
			<div class="list-body">
				<a href="tpl-article.php"><? dummy("text@headline-b") ?></a>
			</div>
		</li>
		<? endwhile ?>
	</ul>

	<button class="btn btn-blue btn-xs toggle-related" id="related-counter"><i class="bicon-angle-down"></i></button>
	
</aside>
<?php endif; ?>