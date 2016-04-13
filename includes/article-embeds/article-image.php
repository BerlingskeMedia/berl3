<figure class="article-image">
	<a href="#" class="open-gallery <?php if($showEmbeddedImages): ?> show-counter <?php endif; ?> ">
	<img src="<? dummy("image@920x,16:9") ?>" width="" height="" alt="" />
		
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