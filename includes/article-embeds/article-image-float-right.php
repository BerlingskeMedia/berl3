<?php if ($showEmbeddedImages) {
	$class = 'show-counter';
} ?>

<figure class="article-image-float-right article-embed-pull-right ">

	<a href="#" class="open-gallery <?php echo $class ?> sd">
	<?php if($portrait) : ?>
		<img src="<? dummy("image/portrait@400x,") ?>" width="" height="" alt="" />
	<?php else : ?>
		<img src="<? dummy("image@400x,") ?>" width="" height="" alt="" />
	<?php endif; ?>
		
		<?php if($showEmbeddedImages): ?>
		<span class="gallery-counter">
			<i class="bicon-camera"></i>
			<span class="count">12</span>
			<span class="show-all">Se alle</span>
		</span>
		<?php endif; ?>
	</a>
	<figcaption class="image-caption">
		<? if (dumb_luck("50%")): ?><? dummy("text@teaser") ?><? endif ?> 
		
			<div class="image-meta">
				<span class="byline">Foto: <? dummy("text@author") ?></span>
				
			</div>
	
	</figcaption>
</figure>

<?php $portrait = false; ?>