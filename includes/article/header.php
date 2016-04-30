<header class="article-header">
		<?php include('includes/article/event-headers.php'); ?>
		
		
		
		
		
			<?php include('includes/article-embeds/rating.php'); ?>
			
			<?php if($templateBlog || $templateEssay || $templateEditorial): ?>
			<div class="byline-blog">
				<?php if(!$templateEditorial): ?>
				<i>Af:</i> <? dummy("text@author") ?>
			<?php endif; ?>
			</div>

			<?php if($templateBlog): ?>
			<div class="text-center badge-container">
				<div class="badge badge-blog">
					<span>BLOG</span>
				</div>
			</div>
			<?php elseif($templateEssay) : ?>
			<div class="text-center badge-container">
				<div class="badge badge-essay">
					<span>KRONIK</span>
				</div>
			</div>
			<?php elseif($templateEditorial) : ?>
			<div class="text-center badge-container">
				<div class="badge badge-blog">
					<span>LEDER</span>
				</div>
			</div>
			<?php endif; ?>


			<?php endif; ?>

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
		
			
		
	
	<?php include('includes/banners/topbanner.php'); ?>
	<?php include('includes/banners/ipad-banner.php'); ?>
	
		
</header>

