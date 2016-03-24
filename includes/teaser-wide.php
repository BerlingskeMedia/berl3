<section class="teaser-wide ">
	<article class="">
		<figure class="teaser-img">
			<? while (dumb_luck("5")): ?>
				<img src="<? dummy("image/!terror@1240x,16:7") ?>" width="" height="" alt="" class="fadeImg"/>
			<? endwhile ?>
			
			<figcaption>
				<span class="teaser-category">Terror i Bruxelles</span>
				<h2 class="header mega-header" id="header"><span><? dummy("text@headline") ?></span></h2>
			</figcaption>
		</figure>
	</article>
	
	<div class="teaser-content">
		<div class="row flex-row">
			<div class="col-md-8">
				<div class="teaser-padding">
					<p class="teaser-summary"><? dummy("text@teaser") ?></p>
					<ul class="teaser-related">
						<? while (dumb_luck("4")): ?>
						<li>
							<a href="tpl-article.php"><? dummy("text@headline") ?></a>
						</li>
						<? endwhile ?>	
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-md-offset-1">
				<?php include('includes/widget-live.php'); ?>
			</div>
		</div>
	</div>

	<!-- <div class="row">
		<? while (dumb_luck("3")): ?>
		<div class="col-md-3">
			<article class="teaser teaser-sm">
				<figure class="teaser-img">
					<img src="<? dummy("image@300x,16:9") ?>" width="" height="" alt="" class="img" />
				</figure>
				<div class="teaser-body">
					<h3 class="header">
						<a href="tpl-article.php"><? dummy("text@headline") ?></a>
					</h3>
				</div>
			</article>
		</div>
		<? endwhile ?>
	</div> -->
	
	
</section>