<?php if ($showEmbeddedImages || $imageSize == '3' || $imageSize == '4') {
	$class = 'show-counter';
} ?>

<figure class="article-image">
	<a href="#" class="open-gallery  <?php echo $class ?>">
	<img src="<? dummy("image@920x,16:9") ?>" width="" height="" alt="" />
		
		<?php if($class): ?>
			<span class="gallery-counter">
				<i class="bicon-camera"></i>
				<span class="count">12</span>
				<span class="show-all">Se alle</span>
			</span>
		<?php endif; ?>
	</a>
	<figcaption class="image-caption">
		<? dummy("text@teaser") ?>
			<div class="image-meta">
				<span class="byline">Foto: <? dummy("text@author") ?></span>
			</div>		
	</figcaption>
</figure>

<?php $class = false; ?>