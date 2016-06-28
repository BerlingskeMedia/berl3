<div class=" deck ">
	<div class="col-tags ">
		<div class="section-title">
			Debat
		</div>
		<div class="section-link">
			<a href="tpl-section.php">Se alle <i class="bicon-angle-right"></i></a>
		</div>
	</div>
	<div class="col-primary-wide">
		<div class="flex-row row ">
	
		<div class="  col-xl-3 flex-row  ">
			<article class="teaser teaser-sm fs12 ">
				
				<figure class="teaser-img">
					<a href="tpl-article.php">
					<img src="/dist/images/vaabenskjold.png" alt="" class="img" height="120" width="120" style="margin-left: auto; margin-right: auto;" >
					
					</a>						
				</figure>
				
				<div class="teaser-body">
					<span class="teaser-cat">
			Berlingske mener			</span>		
					<h2 class="header">

						<a href="tpl-article.php">
						<? dummy("text@headline-b2") ?>
						</a>
					</h2>

				
					
				

				</div>
			</article> 

			

			
		</div>
		<? while (dumb_luck("3")): ?>
		<div class="  col-xl-3 flex-row ">
			<?php 
				$imgW='120'; 
				$class = 'fs12 teaser-feature';
				$showImg = '1';
				$imgRatio = '1:1';
				$showAuthor = true;
				$showTrumpet = true;
				$imgSrc = '/!b-kommentatorer';
				include('includes/teaser.php') ?>
		</div>
		<?php endwhile; ?>
		
		</div>
	</div>
</div><!-- deck --> 