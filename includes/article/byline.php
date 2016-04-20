<div class="article-byline">
	<? while (dumb_luck("1-2")): ?>
		<div class="article-author">
			<figure class="article-avatar img-gradient">
				<a href="tpl-author.php" title="Se [AUTHOR NAME]'s profil"><img src="<? dummy("image/!author@100x100,") ?>" width="" height="" alt="[AUTHOR NAME]" /></a>
			</figure>
			<div class="author-info">
				<a href="tpl-author.php" title="Se [AUTHOR NAME]'s profil"><? dummy("text@author") ?></a>
				
				<div class="author-follow"><button class="btn btn-xs btn-follow-author" >Følg</button></div>
				
				<? if (dumb_luck("50%")): ?> 
					<div class="author-username">
						<a href="http://twitter.com" target="_blank"><i class="bicon-twitter col-twitter"></i> <? dummy("text@username") ?></a>
					</div>
				<? endif ?>

			</div>
		</div>
	<? endwhile ?>
</div>