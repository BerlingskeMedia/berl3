<header class="article-header">
	<?php include('includes/article/event-headers.php'); ?>
		
	<?php if($templateBlog || $templateEssay || $templateEditorial): ?>
	<div class="
		<?php if($templateBlog || $templateEditorial ): ?>
			super-byline-1
		<?php elseif($templateEssay) : ?>
			super-byline-2
		<?php endif ?>">

		<?php if(!$templateEditorial): ?>
			<span class="super-author"><i>Af:</i> <? dummy("text@author") ?></span>
		<?php endif; ?>

		<span class="badge">
			<?php if($templateBlog): ?>
				<span>BLOG</span>
			<?php elseif($templateEssay) : ?>
				<span>KRONIK</span>		
			<?php elseif($templateEditorial) : ?>
				<span>LEDER</span>
			<?php endif; ?>
		</span>

	</div>
	<?php endif; ?>
	<?php if($isAdvertorial): ?>
		<div class="advertorial-notice">
			Sponsoreret indhold	
		</div>		
	<?php endif; ?>
	<?php if(!$isAdvertorial): ?>
	<div class="subscriber-notice">Abonnnement</div>
	<?php endif; ?>
	<h1 class="article-title">
		<?php if($trumpet == '1'): ?>
		<span class="article-trumpet">
			<? dummy("text@item") ?>
		</span>
		<?php endif; ?>
		<? dummy("text@headline") ?>
	</h1>
	<div class="hidden-md-up">
		<div class="demo-banner banner-mobile mb" style="height: 160px">Leaderboard_1</div>
	</div>
	<?php include('includes/article-embeds/rating.php'); ?>
	
	<p class="article-summary relative"><? dummy("text@teaser") ?></p>

	<?php include('includes/article/date.php'); ?>
	<?php $class = 'hiddxl-up '; include('includes/article/social-buttons.php'); $class = false;?>
		
</header>

<?php // include('includes/banners/topbanner.php'); ?>
<?php // include('includes/banners/ipad-banner.php'); ?>

