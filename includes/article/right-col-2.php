
	
	<?php include('includes/banners/ipad-banner.php'); ?>

	<div class="row">
	<div class="col-xs-12 hidden-md-up">
		<div class="fw-sm">
			<div class="demo-banner" style="width: 300px; height: 250px; "></div>
		</div>
	</div>
		<div class="col-lg-12 col-md-6">
			<div class="stickem-container-ex2 mb hidden-md-down" style="height: 1000px;">	
				<div class="sticky-ex2">	
					<div class="demo-banner" style="height: 250px; width: 300px;"></div>
				</div>
			</div>
		</div>
		<div class="col-md-6 hidden-lg-up">
			<?php // include('includes/article/facebook-like-box.php'); ?>
			<?php // include('includes/article/facebook-like-button.php'); ?>
		</div>	
	</div>
	
		
	
	
	<div class="row">
		<div class="col-md-6 col-lg-12">
			<div class="mb">
				<?php 
				$showTime = false;
				$showImage = true; 
				$listClass = 'list list-time list-top-lg list-img-right';
				$listTitle = 'Mest læste lige nu';
				$listCount = '5';
				$sectionClass = 'latest-news mb';
				$premium = false;
				$imgSrc = false;
				$imgW = '80';
				$imgRatio = '1:1';
				$listDoc ="I'm the documentation";
				include('includes/list-news.php');
				?>
			</div>	
		</div>
		<div class="col-md-6 col-lg-12">
			
				<?php //  include('includes/article/facebook-like-box.php'); ?>
				<?php // include('includes/article/facebook-like-button.php'); ?>
			
			<div class="mb">
				<?php 
				$showTime = false;
				$showImage = true; 
				$listClass = 'list list-img-right';
				$listTitle = 'Vi anbefaler';
				$listCount = '5';
				$sectionClass = 'latest-news mb';
				$premium = true;
				$imgSrc = false;
				$imgW = '80';
				$imgRatio = '1:1';
				$listDoc ="I'm the documentation";

				include('includes/list-news.php');
				?>
			</div>		
			<div class="stickem-container-ex2 mb-1 hidden-md-down" style="height: 1000px;">	
				<div class="sticky-ex2">	
					<div class="demo-banner" style="height: 250px; width: 300px;"></div>
				</div>
			</div>

		</div>
	</div>

