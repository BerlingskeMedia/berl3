<?php if($showTimelineEmbedded): ?>
<aside class="article-timeline-embedded article-embed-pull-right embed-collapsed-sm">
	<div class="embed-content">

		<div class="aside-header-sm col-blue">
			Tidslinie
		</div>

		<div class="aside-subheader">
			<? dummy("text@headline-b") ?>
		</div>
	
	

		<dl>
			<? while (dumb_luck("3-6")): ?>
			<? if (dumb_luck("50%")): ?>
			<dt><time><? dummy("text@time") ?></time></dt>
			<? else: ?>
			<dt><time><? dummy("text@date") ?> kl. <? dummy("text@time") ?></time></dt>
			<? endif ?>
			<? if (dumb_luck("50%")): ?>
			<dd><? dummy("text@short-teaser") ?></dd>
			<? else: ?>
			<dd>
				<article class="teaser-float-left">
					<figure>
						<a href="tpl-article.php"><img src="<? dummy("image@60x,3:2") ?>" width="" height="" alt="" /></a>
					</figure>
					<a href="tpl-article.php"><? dummy("text@short-teaser") ?></a>
				</article>
			</dd>
			<? endif ?>
			<? endwhile ?>
			<dt><time><? dummy("text@time") ?></time></dt>
			<dd>
				<article class="teaser">
					<figure class="mb">
						<img src="<? dummy("image@300x,16:9") ?>" width="" height="" alt="" />
					</figure>
					<? dummy("text@short-teaser") ?>
				</article>
			</dd>

		</dl>

	</div>

	<div class="embed-fade text-center">
		<button class="btn btn-blue toggle-embed btn-sm">Udvid tidslinie</button>
	</div>
</aside>

<? while (dumb_luck("4")): ?>
	<p><? dummy("text@paragraph") ?></p>
<? endwhile ?>





<?php endif; ?>