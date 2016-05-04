
	<div class="container mb-1">
		<div class="row ">
			<div class="col-xs-12 ">
				<div class="section-title ">Go shopping!
					<span class="right"><a href="http://shop.berlingske.dk">Gå til Berlingske Shop <i class="bicon-angle-right"></i></a></span>
				</div>
			</div>
		</div>
		<div class="row flex-row">
		
		<? while (dumb_luck("4")): ?>
			<div class="col-xs-6 col-lg-3 col-md-6">
					
					<?php 
						$imgW='80'; 
						$class = 'mb teaser-float-left teaser-consumersales';
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
