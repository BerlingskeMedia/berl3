<div class="article-byline">
	<? while (dumb_luck("1-2")): ?>
		<div class="article-author">
			<?php if(!$partner): ?>
			<figure class="article-avatar img-gradient">
				<a href="tpl-author.php" title="Se [AUTHOR NAME]'s profil"><img src="<? dummy("image/!author@100x100,") ?>" width="" height="" alt="[AUTHOR NAME]" /></a>
			</figure>
		<?php endif; ?>

			<div class="author-info">
				<a href="tpl-author.php" title="Se [AUTHOR NAME]'s profil"><? dummy("text@author") ?><?php if($partner === 'videnskabdk'): ?>, Videnskab.dk<?php endif; ?></a>
				
				<?php if(!$partner): ?>
				<div class="author-follow"><button class="btn btn-xs btn-follow-author btn-blue" >Følg</button></div>
				<?php endif ?>
				
				<? if (dumb_luck("50%") &! $partner): ?> 
					<div class="author-username">
						<a href="http://twitter.com" target="_blank"><i class="bicon-twitter col-twitter"></i> <? dummy("text@username") ?></a>
					</div>
				<? endif ?>

			</div>
		</div>
	<? endwhile ?>
</div>