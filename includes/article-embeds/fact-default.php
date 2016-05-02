<?php if($showFactboxDefault): ?>

<aside class="article-fact-default embed-collapsed">
	
	<div class="embed-content">

		<div class="aside-header">
			Jeg er en fakta header
		</div>
	
		<? while (dumb_luck("1-2")): ?>
			<p><? dummy("text@teaser") ?></p>
		<? endwhile ?>
		<ul>
			<? while (dumb_luck("3")): ?><li><? dummy("text@item") ?></li><? endwhile ?>
		</ul>

	</div>

	<div class="embed-fade text-center">
		<button class="btn btn-fact toggle-embed btn-sm btn-round">Udvid faktaboks</button>
	</div>

</aside>

<?php endif; ?>