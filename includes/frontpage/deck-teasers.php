
<div class=" deck flex-row">

	
		<?php if($authorProfile): ?>

			
				<div class="row flex-row teaser-flow">
					<div class="col-xs-12">

						<img src="<? dummy("image/!author@100x100,") ?>" width="" height="" alt="" class="img-round" />
						
						<h1><? dummy("text@author") ?></h1>
						<? dummy("text@short-teaser") ?>

					</div>
				</div>
			

		<?php endif; ?>
	

	<div class="col-wrapper flex-row">

	
	
		<div class="col-tags col-border-right-xl-up ">
		
			
			
		</div>
		
		<div class="col-primary ">
			
			<div class="row flex-row teaser-flow">

				
				<div class="col-xs-12">
					
					

					

				</div>
				

				
				
			</div>
		</div>
	</div><!-- col-wrapper --> 
		

	

	<div class="col-sidebar col-border-left-lg-up">

			
		<div class="row">
			<div class="col-lg-12 col-md-6 col-sm-12">
				<div style="width: 300px; height: 600px;" class="demo-banner mb hidden-sm-down">Square_1</div>
			</div>

			<div class="col-lg-12 col-md-6 col-sm-12">
					<?php 
						$sectionClass 	= 'latest-news mb-05';
						$imgRatio 		= '1:1';
						$premium 		= true;
						$showComments 	= true;
						$imgSrc 		= false;
						$imgW 			= '120';
						$showTime 		= false;
						$showImage 		= false; 
						$listClass 		= 'list list-top-lg';
						$listTitle 		= 'Mest læste lige nu';
						$listCount 		= '5';
							
						include('includes/list-news.php'); ?>

						<div style="width: 300px; height: 250px;" class="demo-banner hidden-sm-down">Square_2 sticky</div>
			</div>

			
			

		</div>

			
		
		
		
		

			
	</div>
	
</div>
<?php 
$showCorrections = false;
?>