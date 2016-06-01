<div class="deck flex-row ">
		<div class="col-tags">
			<div class="section-title">
				Verden i billeder
			</div>						
		</div>
		<div class="col-primary col-border-right-lg-up">
			
			<?php include('includes/teaser-gallery.php'); ?>

		</div>
		

		<div class=" col-sidebar">

			<div class="banner mb">
				<div style="width: 300px; height: 250px;" class="demo-banner"></div>
			</div>
			
			<?php 
			$showTime = true; 
			$sectionClass = 'mb-0';
			$listClass = 'list list-top';
			$listTitle = 'Andre læser lige nu';
			$listCount = '5';
			$showTime = false; 
			
			include('includes/list-news.php');
			?>

		</div>

</div><!-- /deck -->