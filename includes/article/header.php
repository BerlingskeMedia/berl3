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
						<!-- <div class="author-info">
							<a href="tpl-author.php" title="Se [AUTHOR NAME]'s profil"><? dummy("text@author") ?></a>
							<div class="author-follow"><button class="btn-follow-author" title="Ophæv abonnement">Følg</button></div>
							
								<div class="author-username">
									<a href="http://twitter.com" target="_blank"><i class="bicon-twitter col-twitter"></i> <? dummy("text@username") ?></a>
								</div>
							
						</div> -->
					
					<?php elseif($templateEditorial): ?>
					
						<figure class="article-avatar ">
							<a href="tpl-author.php" title="Se [AUTHOR NAME]'s profil"><img src="/dist/images/logo.png" width="" height="" alt="[AUTHOR NAME]" /></a>
						</figure>
					
					<?php endif; ?>
					
				</div>
			</div>

			<div class="col-md-10">
				<?php include('includes/article-embeds/rating.php'); ?>
				<h1 class="article-title">
					<?php if($trumpet == '1'): ?>
					<span class="article-trumpet">
						<? dummy("text@item") ?>
					</span>
					<?php endif; ?>
					<? dummy("text@headline") ?>
				</h1>
									
				
				<?php $showAuthor = true; include('includes/article/date.php'); ?>

				<p class="article-summary"><? dummy("text@teaser") ?></p>

			</div>
		</div>
		
		<?php else: ?>
		
			<?php include('includes/article-embeds/rating.php'); ?>

			<h1 class="article-title">
				<?php if($trumpet == '1'): ?>
				<span class="article-trumpet">
					<? dummy("text@item") ?>
				</span>
				<?php endif; ?>
				<? dummy("text@headline") ?>
			</h1>
			
			<p class="article-summary relative"><? dummy("text@teaser") ?></p>
		
			<?php include('includes/article/date.php'); ?>
			<?php $class = 'hidden-xl-up '; include('includes/article/social-buttons.php'); $class = false;?>
		
			
		<?php endif; ?>
	
	<?php include('includes/banners/topbanner.php'); ?>
	<?php include('includes/banners/ipad-banner.php'); ?>
	
		
</header>