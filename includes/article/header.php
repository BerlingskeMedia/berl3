<header class="article-header">
		<?php include('includes/article/event-headers.php'); ?>
		<?php if($templateBlog || $templateEditorial): ?>
		<div class="row">
			<div class="col-md-2">
				<div class="byline-blog">
					

					<?php if($templateBlog): ?>
					
					<figure class="article-avatar img-gradient">
						<a href="tpl-author.php" title="Se [AUTHOR NAME]'s profil"><img src="<? dummy("image/!author@200x200,") ?>" width="" height="" alt="[AUTHOR NAME]" /></a>
					</figure>

					<div class="author-info">
						<a href="tpl-author.php" title="Se [AUTHOR NAME]'s profil"><? dummy("text@author") ?></a>
						<? if (dumb_luck("50%")): ?>
						<div class="author-follow"><button class="btn-follow-author" title="Ophæv abonnement">Følg</button></div>
						<? else: ?>
						<div class="author-follow"><button class="btn-follow-author active" title="Du følger [AUTHOR NAME]"><i class="bicon-ok-circled"></i></button></div>
						<? endif ?>
						<? if (dumb_luck("50%")): ?> 
							<div class="author-username">
								<a href="http://twitter.com" target="_blank"><i class="bicon-twitter col-twitter"></i> <? dummy("text@username") ?></a>
							</div>
						<? endif ?>
					</div>
					
					<?php elseif($templateEditorial): ?>
					
					<figure class="article-avatar ">
						<a href="tpl-author.php" title="Se [AUTHOR NAME]'s profil"><img src="/dist/images/logo.png" width="" height="" alt="[AUTHOR NAME]" /></a>
					</figure>
					
					<?php endif; ?>

					
					
				</div>
			</div>

			<div class="col-md-10">
				
				<h1 class="article-title">
					<?php if($trumpet == '1'): ?>
					<span class="article-trumpet">
						<? dummy("text@item") ?>
					</span>
					<?php endif; ?>
					<? dummy("text@headline") ?>
				</h1>
					
				
				<?php include('includes/article-embeds/rating.php'); ?>
				
				<div class="article-date">Onsdag <? dummy("text@date-long") ?> &mdash; kl. <? dummy("text@time") ?></div>
				
				<p class="article-summary relative"><? dummy("text@teaser") ?>
					<a href="#" class="scroll-to-comments">
						<span class="comments-count">
							<? dummy("text@number") ?>
						</span>
					</a>
				</p>
			</div>
		</div>
		
		
		
		<?php else: ?>

		
		
			<h1 class="article-title">
				<?php if($trumpet == '1'): ?>
				<span class="article-trumpet">
					<? dummy("text@item") ?>
				</span>
				<?php endif; ?>
				<? dummy("text@headline") ?>
			</h1>
			
		<?php include('includes/article-embeds/rating.php'); ?>
		
		<p class="article-summary relative"><? dummy("text@teaser") ?>
			<a href="#" class="scroll-to-comments">
				<span class="comments-count">
					<i><? dummy("text@number") ?></i>
				</span>
			</a>
		</p>
		
		

		<div class="article-date">Onsdag d. <? dummy("text@date-long") ?>  kl. <? dummy("text@time") ?>
			<? if (dumb_luck("50%")): ?><span class="updated">&mdash; <strong>Opdateret: kl. <? dummy("text@time") ?></strong>
			</span><? endif ?>
		</div>
		
			<?php include('includes/article/byline.php') ?>
		<?php endif; ?>
	
	<div class="demo-banner mb" style="width:930px; height: 60px" ></div>
		
</header>