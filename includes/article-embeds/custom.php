<?php if($showCustom): ?>
<aside class="article-embedded-custom">
	<p style="color: maroon"><strong>This is a custom embed</strong></p>
	<p>This could be a Youtube movie or an illustration - or maybe even <strong><span style="color: red">H</span><span style="color: green">T</span><span style="color: blue">M</span><span style="color: pink">L</span></strong></p>
	<iframe width="854" height="480" src="https://www.youtube.com/embed/AC3Ejf7vPEY" frameborder="0" allowfullscreen></iframe>
</aside>
<?php endif; ?>

<? while (dumb_luck("1-3")): ?>
	<p><? dummy("text@paragraph") ?></p>
<? endwhile ?>