
	
	<div class="row">
		<div class="col-lg-12 col-md-6">
			<div class="stickem-container-ex2 mb hidden-md-down" style="height: 1000px;">	
				<div class="sticky-ex2">	
					<div class="demo-banner" style="height: 250px; width: 300px;"></div>
				</div>
			</div>
		</div>
		<div class="col-md-6 hidden-lg-up">
			<?php // include('includes/article/facebook-like-box.php'); ?>
			<?php include('includes/article/facebook-like-button.php'); ?>
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
				$listDoc ="I'm the documentation";

				include('includes/list-news.php');
				?>
			</div>	
		</div>
		<div class="col-md-6 col-lg-12">
			<div class="mb hidden-md-down" style="background: #fff; padding: .5rem; text-align: center">
				<?php // include('includes/article/facebook-like-box.php'); ?>
				<?php include('includes/article/facebook-like-button.php'); ?>
			</div>
			<div class="mb">
				<?php 
				$showTime = false;
				$showImage = true; 
				$listClass = 'list list-time list-top-lg list-img-right';
				$listTitle = 'Vi anbefaler';
				$listCount = '5';
				$sectionClass = 'latest-news mb';
				$premium = true;
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
