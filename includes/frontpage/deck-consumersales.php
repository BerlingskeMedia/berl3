<div class="deck ">
	<div class="col-tags col-border-right-lg-up">
			<div class="section-title">Go shopping!</div>
			<div class="section-link">
				<a href="tpl-section.php">Berlingske Shop<i class="bicon-angle-right"></i></a>
			</div>
		
	</div>

	
	<div class="col-primary">
		<div class="row flex-row">


		
		
		<? while (dumb_luck("4")): ?>
			<div class="col-xs-6 col-lg-3 col-md-6">
					
					<?php 
						$imgW='80'; 
						$class = 'mb teaser-img-left teaser-consumersales';
						$showImg = '1';
						$imgRatio = '1:1';
						$showKey = false;
						$imgSrc = '!consumersales';
						?>
				<article class="teaser <?= $class; ?>">
					
					<?php if ($showImg): ?>
					<figure class="teaser-img">
						<a href="tpl-article.php"><img src="<? dummy("image". $imgSrc ."@". $imgW ."x,". $imgRatio ."") ?>" width="" height="" alt="" class="img" /></a>
					</figure>
					<?php endif; ?>
					<div class="teaser-body">
						<h2 class="header">
							<a href="tpl-article.php">
								<? dummy("text@consumersales-title") ?>
							</a>
						</h2>
						
						<div class="teaser-summary">
							<? dummy("text@consumersales-subtitle") ?>
						</div>
						<div class="teaser-price">
							<span><? dummy("text@prices") ?>,-</span>
							<button class="btn btn-xs btn-green">Køb</button>
						</div>
					</div>
				</article>

					
			</div>
			<? endwhile ?>
		</div>
	</div>
</div>