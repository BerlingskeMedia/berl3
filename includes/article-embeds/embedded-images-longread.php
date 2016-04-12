<?php if($showEmbeddedImages): ?>
	<? while (dumb_luck("2-4")): ?>
		<? while (dumb_luck("1-3")): ?>
		<p><? dummy("text@paragraph") ?></p>
		<? endwhile ?>
	
	<?php include('includes/article-embeds/embedded-image-longread.php') ?>
	<? while (dumb_luck("1-3")): ?>
	<p><? dummy("text@paragraph") ?></p>
	<? endwhile ?>
<? endwhile ?>
<?php endif; ?>

