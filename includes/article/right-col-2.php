<?php include('includes/banners/ipad-banner.php'); ?>

<div class="row">
	<div class="col-md-6 col-lg-12 col-sm-12 col-xs-12">
		
			<?php 
				$showTime = false;
				$showImage = true; 
				$listClass = 'list list-time list-top-lg list-img-right';
				$listTitle = 'Mest læste lige nu';
				$listCount = '5';
				$sectionClass = 'latest-news mb-05';
				$premium = false;
				$imgSrc = false;
				$imgW = '80';
				$imgRatio = '1:1';
				$listDoc ="I'm the documentation";
				include('includes/list-news.php');
			?>
			<?php include('includes/follow-berlingske-buttons.php'); ?>	
	</div>
	
	<!-- Mobile banner -->
	<div class="col-xs-12 hidden-md-up">
		<div class="fw-sm mb clearfix">
			<div class="demo-banner demo-banner-mobile" style="width: 320px; height: 250px; "></div>
		</div>
	</div>

	<div class="col-lg-12 col-md-6">
		<div class="stickem-container-ex2 mb hidden-md-down" style="height: 1000px;">	
			<div class="sticky-ex2">	
				<div class="demo-banner" style="height: 600px; width: 300px;"></div>
			</div>
		</div>
	</div>

	<div class="col-md-6 col-lg-12 col-sm-12 col-xs-12">
		
		<?php 
			$showTime = false;
			$showImage = true; 
			$listClass = 'list list-img-right';
			$listTitle = 'Vi anbefaler';
			$listCount = '5';
			$sectionClass = 'latest-news clearfix';
			$premium = true;
			$imgSrc = false;
			$imgW = '80';
			$imgRatio = '1:1';
			$listDoc ="I'm the documentation";

			include('includes/list-news.php');
		?>
		
		<div class="stickem-container-ex2 mb-1 hidden-md-down" style="height: 1000px;">	
			<div class="sticky-ex2">	
				<div class="demo-banner" style="height: 250px; width: 300px;"></div>
			</div>
		</div>

	</div>
	
</div>

	


<div class="row">
	
	<!-- Mobile banner -->
	<div class="col-xs-12 hidden-md-up">
		<div class="fw-sm mb">
			<div class="demo-banner demo-banner-mobile" style="width: 320px; height: 250px; "></div>
		</div>
	</div>
	
	<div class="col-xs-12 hidden-lg-up">
		<div class="text-center mb like-berlingske like-berlingske-tablet ">
			<span class="label-follow">Følg Berlingske: </span>
			<a href="https://www.facebook.com/berlingske/?fref=ts" class="btn-share-sm-facebook"  target="_blank"><i class="bicon-facebook"></i></a>
			<a href="https://twitter.com/berlingske?lang=da" class="btn-share-sm-twitter"  target="_blank"><i class="bicon-twitter"></i></a>
			<a href="https://www.instagram.com/berlingske/?hl=da" class="btn-share-sm-instagram" target="_blank"><i class="bicon-instagram"></i></a>
		</div>
	</div>
	
	
</div>

