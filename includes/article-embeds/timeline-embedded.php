<?php if($showTimelineEmbedded): ?>
<aside class="article-timeline-embedded article-embed-pull-right embed-collapsed-sm continue-reading-fact">
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
			<!-- Short date format -->
			<dt><time><? dummy("text@time") ?></time></dt>
			<? else: ?>
			<!-- Long date format -->
			<dt><time><? dummy("text@date") ?> kl. <? dummy("text@time") ?></time></dt>
			<? endif ?>
			<? if (dumb_luck("50%")): ?>
			<dd><? dummy("text@short-teaser") ?></dd>
			<? else: ?>
			<dd>
				<!-- Teaser with image -->
				<article class="teaser">
					<figure class="mb-05">
						<a href="tpl-article.php"><img src="<? dummy("image@300x,16:9") ?>" width="" height="" alt="" /></a>
					</figure>
					<div class="list-body">
						<a href="tpl-article.php"><? dummy("text@short-teaser") ?></a>
					</div>
				</article>
			</dd>
			
			<? endif ?>
			<? endwhile ?>
			<!-- Teaser without image -->
			<dt><time><? dummy("text@time") ?></time></dt>
			<dd>
				<article class="teaser">
					
					<div class="list-body">
						<a href="tpl-article.php"><? dummy("text@short-teaser") ?></a>
					</div>
				</article>
			</dd>

			<!-- Item with picture. No link -->
			<dt><time><? dummy("text@time") ?></time></dt>
			<dd>
				<div class="teaser">
					<figure class="mb-05">
						<img src="<? dummy("image@300x,16:9") ?>" width="" height="" alt="" />
					</figure>
					<div class="list-body">
						<? dummy("text@short-teaser") ?>	
					</div>
				</div>
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