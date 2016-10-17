<?php if($showFactboxEmbedded): ?>
<aside class="continue-reading-fact article-fact-default embed-collapsed">
	<div class="embed-content">

		<div class="aside-header">
			I'm an embedded fact box. I can always be expanded
		</div>
	
		<p>Same code as the default fact box. <a href="?showFactEmbedded&showFactDefault">Example</a></p>

		<? while (dumb_luck("10")): ?><p><? dummy("text@paragraph") ?></p><? endwhile ?>
		<? while (dumb_luck("1-2")): ?>
			<p><? dummy("text@teaser") ?></p>
		<? endwhile ?>
		<ul>
			<? while (dumb_luck("3")): ?><li><? dummy("text@item") ?></li><? endwhile ?>
		</ul>

	</div>

	<div class=" embed-fade text-center">
		<button class="btn btn-fact toggle-embed toggle-embed-expand btn-sm btn-round">Udvid faktaboks <i class="bicon-angle-down"></i></button>
		<button class="btn btn-fact toggle-embed toggle-embed-hide btn-sm btn-round">Skjul faktaboks <i class="bicon-angle-up"></i></button>
	</div>

</aside>

<p><? dummy("text@paragraph") ?></p>
<p><? dummy("text@paragraph") ?></p>
<p><? dummy("text@paragraph") ?></p>


<?php include('includes/article-embeds/link.php'); ?>
<? while (dumb_luck("1")): ?>
	<p><? dummy("text@paragraph") ?></p>
<? endwhile ?>
<?php include('includes/article-embeds/link.php'); ?>




<? while (dumb_luck("3")): ?>
<p><? dummy("text@paragraph") ?></p>
<? endwhile ?>


<?php endif; ?>