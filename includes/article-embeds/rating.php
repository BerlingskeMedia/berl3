<?php if($showRating): ?>
<?php $rating = rand(0,6); ?>
<div class="article-rating-<?php echo $rating; ?> mb">
	<? while (dumb_luck("6")): ?>
		<i class="bicon-star"></i>
	<? endwhile ?>
	
	<!-- 
	Developer info - Danish translation : 
	0 stars = 	0 stjerner
	// ONLY show text '0 stjerner' when rating is zero 
	-->

	<?php if($rating == '0'): ?><span class="star-txt"> &mdash; <?php echo $rating; ?>  stjerner </span><?php endif; ?>
</div>
<?php endif; ?>