<?php if($imageSize == '4'): ?>
	<? while (dumb_luck("3")): ?>
		<?php include('includes/article-embeds/article-image-float-right.php'); ?>
		<? while (dumb_luck("1-3")): ?>
		<p><? dummy("text@paragraph") ?></p>
		<? endwhile ?>
	<? endwhile ?>
<?php endif; ?>