<?php if ($showEmbeddedImages || $imageSize == '4') {
	$class = 'show-counter';
} ?>

<figure class="article-image-float-right ">

	<a href="#" class="open-gallery <?php echo $class ?> ">
	<?php if($portrait) : ?>
		<img src="<? dummy("image/portrait@640x,") ?>" width="" height="" alt="" />
	<?php else : ?>
		<img src="<? dummy("image@400x,") ?>" width="" height="" alt="" />
	<?php endif; ?>
		
		<?php if($class): ?>
		<?php // if($showEmbeddedImages || $imageSize == '4'): ?>
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

<?php 
$portrait = false; 
$class = false;
?>