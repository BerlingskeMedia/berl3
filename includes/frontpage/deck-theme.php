<div class="deck flex-row">

	
			<div class="col-tags ">
				
				
				
			</div>


			<div class="col-primary col-border-right-lg-up">
				<div class="row">
					<div class="col-xl-12 ">
						<div class="section-title mb">Tema</div>
					</div>

					<div class="col-xl-12  ">
					
						
								<?php
									$imgW='440'; 
									$showImg = '1';
									$class = ' fs18 mb  teaser-img-right ';
									$imgRatio = '16:9';
									$showSummary = '1';
									$showRelated = false;
									$showDate = true;
									$showCategory = true;
									include('includes/teaser.php') ?>
						
					
						<div class="row">
							<? while (dumb_luck("2")): ?>
								<div class="col-xl-6">
								<?php 
								$imgW='110'; 
								$showImg = '1';
								$class = 'teaser-img-left fs10 ';
								$imgRatio = '3:2';
								$showSummary = '0';
								$showKey = true;
								include('includes/teaser.php') ?>
								</div>
								<? endwhile ?>
								
						
						</div>

					
						
						
								
						

						
						

					</div>
					

				</div>
				
			</div>
		
		
	

	<div class="col-sidebar">

		<div class="banner mb ">
			<div style="width: 300px; height: 250px;" class="demo-banner"></div>
		</div>
		
		<?php 
		$showTime = true; 
		$listClass = 'list list-time ';
		$listTitle = 'Jeg er en liste';
		$showTime = true; 
		$listCount = '5';
		include('includes/list-news.php');
		?>
		

		

		<div class="banner mb-2 ">
			<div style="width: 300px; height: 250px;" class="demo-banner"></div>
		</div>
	</div>
	
</div>