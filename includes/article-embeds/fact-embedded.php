<?php if($showFactboxEmbedded): ?>
<aside class="article-fact-embedded-1">
	<div class="aside-header">
		Jeg er en fakta header
	</div>
	
	<figure class="mb">
		<img src="<? dummy("image@400x,") ?>" width="" height="" alt="" />
		<figcaption class="image-caption">
			<? if (dumb_luck("50%")): ?><? dummy("text@teaser") ?><? endif ?> 
			
				<div class="image-meta">
					<span class="byline">Foto: <? dummy("text@author") ?></span>
				</div>
		
		</figcaption>
	</figure>
	
	<div class="fact-content">
		<? while (dumb_luck("1-2")): ?>
			<p><? dummy("text@teaser") ?></p>
		<? endwhile ?>
		<ul>
			<? while (dumb_luck("3")): ?><li><? dummy("text@item") ?></li><? endwhile ?>
		</ul>
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

<aside class="article-fact-embedded-2">
	<div class="aside-header">
		Jeg er en fakta header
	</div>
	
	<figure class="mb">
		<img src="<? dummy("image@400x,") ?>" width="" height="" alt="" />
		<figcaption class="image-caption">
			<? if (dumb_luck("50%")): ?><? dummy("text@teaser") ?><? endif ?> 
			
				<div class="image-meta">
					<span class="byline">Foto: <? dummy("text@author") ?></span>
				</div>
		
		</figcaption>
	</figure>
	
	<div class="fact-content">
		<? while (dumb_luck("1-2")): ?>
			<p><? dummy("text@teaser") ?></p>
		<? endwhile ?>

		<ul>
			<? while (dumb_luck("3")): ?><li><? dummy("text@item") ?></li><? endwhile ?>
		</ul>
	</div>
</aside>

<? while (dumb_luck("5")): ?>
	<p><? dummy("text@paragraph") ?></p>
<? endwhile ?>

<aside class="article-fact-embedded-3">
	<div class="aside-header">
		Jeg er en fakta header
	</div>
	
	<figure class="mb">
		<img src="<? dummy("image@400x,") ?>" width="" height="" alt="" />
		<figcaption class="image-caption">
			<? if (dumb_luck("50%")): ?><? dummy("text@teaser") ?><? endif ?> 
			
				<div class="image-meta">
					<span class="byline">Foto: <? dummy("text@author") ?></span>
				</div>
		
		</figcaption>
	</figure>
	
	<div class="fact-content">
		<? while (dumb_luck("1-2")): ?>
			<p><? dummy("text@teaser") ?></p>
		<? endwhile ?>
		<ul>
			<? while (dumb_luck("3")): ?><li><? dummy("text@item") ?></li><? endwhile ?>
		</ul>
	</div>
</aside>

<? while (dumb_luck("5")): ?>
	<p><? dummy("text@paragraph") ?></p>
<? endwhile ?>

<?php endif; ?>