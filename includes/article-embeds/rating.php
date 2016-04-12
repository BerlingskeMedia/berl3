<?php if($showRating): ?>
<?php $rating = rand(0,6); ?>
<div class="article-rating-<?php echo $rating; ?> mb">
	<? while (dumb_luck("6")): ?>
		<i class="bicon-star"></i>
	<? endwhile ?>
	
	<!-- 
	Developer info - Danish translation : 
	0 stars = 	0 stjerner
	1 star  = 	1 stjerne  <--  No 'r'
	2 stars = 	2 stjerner
	3 stars = 	3 stjerner
	etc. ... 
	-->

	<?php if($rating == '0'): ?><span class="star-txt"> &mdash; <?php echo $rating; ?>  stjerner </span><?php endif; ?>
</div>
<?php endif; ?>