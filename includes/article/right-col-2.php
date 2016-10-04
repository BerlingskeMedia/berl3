
<div class="hidden-sm-down hidden-lg-up mb text-center ipad-banner-article">
	<div class="demo-banner" style="width: 930px; height: 180px;">
		Leaderboard_2 (tablet)
	</div>	
</div>

<!-- Mobile banner --> 

	<div class="mb clearfix banner-mobile hidden-md-up">
		<div class="demo-banner  demo-banner-mobile" style="width: 320px; height: 160px; ">Leaderboard_3 (mobile)</div>
	</div>


<div class="row">
	<div class="col-md-4 col-lg-12 col-sm-12 col-xs-12">
			
			
			<div class="demo-banner mb hidden-sm-down" style="height: 250px; width: 300px;">Square_1</div>

			<?php 
				$sectionClass = 'latest-news mb-05';
				$imgRatio = '1:1';
				$imgSrc = false;
				$imgW = '80';
				$showComments = true;
				$premium = true;
				$showTime = false;
				$showImage = true; 
				$listClass = 'list list-time list-top-lg list-img-right';
				$listTitle = 'Mest læste lige nu';
				$listCount = '5';
				$showButton = true;
				$btnTxt = 'Hent flere';
				
				
				
				
				
				$listDoc ="I'm the documentation";
				include('includes/list-news.php');
			?>




			<div class="text-center mb like-berlingske  ">
			<span class="label-follow">Følg Berlingske: </span>
			<a href="https://www.facebook.com/berlingske/?fref=ts" class="btn-share-sm-black"  target="_blank"><i class="bicon-facebook"></i></a>
			<a href="https://twitter.com/berlingske?lang=da" class="btn-share-sm-black"  target="_blank"><i class="bicon-twitter"></i></a>
			<a href="https://www.instagram.com/berlingske/?hl=da" class="btn-share-sm-black" target="_blank"><i class="bicon-instagram"></i></a>
		</div>

			<?php 
			$newsletterClass = ' newsletter-custom  continue-reading-newsletter mb'; 
			$showParagraphs = false;
			include('includes/newsletter-signup.php') 
			?>

	</div>
	<div class="col-md-4 col-lg-12 col-sm-12 col-xs-12 hidden-lg-up hidden-sm-down">
		<div class="demo-banner" style="width:300px; height: 600px;">
			Jobindex iPad
		</div>
	</div>
	
	

	<div class=" col-lg-12 col-xs-12 hidden-md-down">
		<div class="stickem-container-ex2 mb " style="height: 1000px;">	
			<div class="sticky-ex2">	
				<div class="demo-banner mb" style="height: 600px; width: 300px;">Square_3</div>
				<div class="demo-banner" style="height: 100px; width: 300px;">Square_Marketing</div>
			</div>
		</div>
	</div>

	<div class="col-md-4 col-lg-12 col-xs-12">
		
		<?php 
			$showTime = false;
			$showImage = true; 
			$listClass = 'list list-img-right';
			$listTitle = 'Vi anbefaler';
			$listCount = '5';
			$sectionClass = 'latest-news clearfix';
			$showComments = true;
			$premium = true;
			$imgSrc = false;
			$imgW = '80';
			$imgRatio = '1:1';
			$showButton = true;
			$btnTxt = 'Hent flere';

			include('includes/list-news.php');
		?>
		
		<div class="stickem-container-ex2 mb-1 hidden-md-down" style="height: 1000px;">	
			<div class="sticky-ex2">	
				<div class="demo-banner mb" style="height: 250px; width: 300px;">Square_4 sticky</div>
				<div class="demo-banner mb" style="height: 100px; width: 300px;">Advertorial_1 sticky</div>
				<div class="demo-banner mb" style="height: 100px; width: 300px;">Advertorial_2 sticky</div>
			</div>
		</div>
		<div class=" mb-1 hidden-lg-up">	
			<div class="demo-banner mb" style="height: 100px; width: 300px;">Advertorial tablet / Phone</div>
			<div class="demo-banner mb" style="height: 100px; width: 300px;">Advertorial tablet / Phone</div>
		</div>

	</div>
	
</div>

	


<div class="row">
	
	<!-- Mobile banner --> 
	<div class="col-xs-12 hidden-md-up">
		<div class="fw-sm mb">
			<div class="demo-banner demo-banner-mobile" style="width: 320px; height: 160px; ">Leaderboard_4 (mobile)</div>
		</div>

	</div>
	
	
	
	
</div>

