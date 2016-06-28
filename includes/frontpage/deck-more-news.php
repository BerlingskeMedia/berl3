<div class="deck">

	<div class="col-wrapper">
		<div class="col-tags ">
			<div class="section-title">Flere nyheder</div>
		</div>


		<div class="col-primary col-border-right-lg-up">
			<div class="row">
				<!-- <div class="col-xl-12 ">
					Jeg er et tema
				</div> --> 

				<div class="col-lg-8  col-border-right-lg-up">

				
				
					<?php // if(!$showWell) : ?>
							<?php
								$imgW='920'; 
								$showImg = '1';
								$class = ' fs22 mb  main-teaser';
								$imgRatio = '16:9';
								$showSummary = '1';
								$showRelated = '1';
								include('includes/teaser.php') ?>
					<?php // endif; ?>
				

					<? while (dumb_luck("6")): ?>
					<?php 
						$imgW='140'; 
						$showImg = '1';
						$class = 'teaser-img-left fs12 ';
						$imgRatio = '3:2';
						$showSummary = '0';
						$showRelated = '0';
						$showKey = true;
						include('includes/teaser.php') ?>
					<? endwhile ?>
					
					
					
							
					

					<? while (dumb_luck("2")): ?>
					<?php 
						$imgW='140'; 
						$showImg = '1';
						$class = 'teaser-img-left fs12 ';
						$imgRatio = '3:2';
						$showSummary = '0';
						$showKey = true;
						include('includes/teaser.php') ?>
					<? endwhile ?>

				</div>
				<div class="col-lg-4 col-md-4 ">
					
					<div class="section-title"><a href="tpl-section.php">AoK</a></div>

					<? while (dumb_luck("3")): ?>
					<?php 
						$imgW='420'; 
						// $class = 'fs10 teaser-bg teaser-bg-narrow teaser-font-alt';
						$class = 'fs10  ';
						$showImg = '1';
						$imgRatio = '16:9';
						$sectionClass = 'mb';
						$showKey = true;
						include('includes/teaser.php') ?>
					<? endwhile ?>

					<div class="section-title mt-3">Til Stregen</div>
					
					
					<? while (dumb_luck("2")): ?>
					<?php 
						$imgW='120'; 
						// $class = 'fs10 teaser-bg teaser-bg-narrow teaser-font-alt';
						$class = 'fs12 mb teaser-feature ';
						$showImg = '1';
						$imgRatio = '1:1';
						$imgSrc = '!b-tilstregen';
						$sectionClass = 'mb';
						$showAuthor = true;
						include('includes/teaser.php') ?>
					<? endwhile ?>
					

					<div class="section-title mt-3">Navne</div>
					<div class="small gray">

						<strong class="gray-darker">90 år</strong>
						<ul class=" mb list-bullet">
							<? while (dumb_luck("1-3")): ?><li class="small"><a href="#"><? dummy("text@author") ?></a></li><? endwhile ?>	
						</ul>
						<strong class="gray-darker">80 år</strong>
						<ul class=" mb-1 list-bullet">
							<? while (dumb_luck("1-3")): ?><li class="small"><a href="#"><? dummy("text@author") ?></a></li><? endwhile ?>	
						</ul>

						<strong class="gray-darker">75 år</strong>
						<ul class=" mb-1 list-bullet">
							<? while (dumb_luck("1-3")): ?><li class="small"><a href="#"><? dummy("text@author") ?></a></li><? endwhile ?>	
						</ul>
						
						
					</div>
						
					
				</div>

			</div>
			
		</div>
		
		
	</div>

	<div class="col-sidebar">

		<div class="banner mb ">
			<div style="width: 300px; height: 250px;" class="demo-banner">Banner</div>
		</div>
		
		<?php 
		$showTime = true; 
		$listClass = 'list list-top-lg ';
		$listTitle = 'Andre læser lige nu';
		$showTime = false; 
		
		include('includes/list-news.php');
		?>
		

		

		<div class="banner mb-2 ">
			<div style="width: 300px; height: 250px;" class="demo-banner">Banner</div>
		</div>
	</div>
	
</div>