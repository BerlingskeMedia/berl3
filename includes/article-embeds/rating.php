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

	<span class="star-txt"> &mdash; <?php echo $rating; ?><?php if($rating == '1') : ?> stjerne <?php else : ?> stjerner <?php endif; ?></span>
</div>
<?php endif; ?>