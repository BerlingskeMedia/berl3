<?php if($showFactboxDefault): ?>
<aside class="article-fact-default">
	<div class="aside-header">
		Jeg er en fakta header
	</div>
	
	
	
	<div class="fact-content">
		<? while (dumb_luck("1-2")): ?>
			<p><? dummy("text@teaser") ?></p>
		<? endwhile ?>
		<ul>
			<? while (dumb_luck("3")): ?><li><? dummy("text@item") ?></li><? endwhile ?>
		</ul>
	</div>
</aside>



<?php endif; ?>