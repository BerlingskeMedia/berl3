<?php if($showFactboxEmbedded): ?>
<aside class="article-fact-embedded article-embed-pull-right embed-collapsed-sm">
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

	<div class=" embed-fade text-center">
		<button class="btn btn-blue toggle-embed btn-sm">Udvid faktaboks</button>
	</div>

</aside>

<? while (dumb_luck("1")): ?>
	<p><? dummy("text@paragraph") ?></p>
<? endwhile ?>
<?php include('includes/article-embeds/link.php'); ?>
<? while (dumb_luck("1")): ?>
	<p><? dummy("text@paragraph") ?></p>
<? endwhile ?>
<?php include('includes/article-embeds/link.php'); ?>




<?php endif; ?>