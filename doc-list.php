<? require_once("../dummy/dummy.php") ?>

<?php include('includes/_variables.php') ;?>



<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Berlingske - Test</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
</head>
<body class=" <?php if($siteBusiness): ?>site-business<?php endif; ?> show-site-search tpl-article tpl-article-longread">









<!--  -->

<div class="container">
	<div class="row flex-row mb" >
		<div class="col-md-3  ">
			<div class="demo-header">List default</div>
		</div>
		<div class="col-md-3">
			
			
			<?php 
				$sectionClass = 'latest-news mb-05';
				$imgRatio = '1:1';
				$premium = true;
				$imgSrc = false;
				$imgW = '120';

				$showComments = true;
				$showTime = false;
				$showImage = false; 
				$listClass = 'list';
				$listTitle = 'List title';
				$listCount = '5';
					
				include('includes/list-news.php');
			?>

			
		</div>
	</div>
	<div class="row flex-row mb" >
		<div class="col-md-3 ">
			<div class="demo-header">Thumbnails</div>
			<p>Image size: 80x80px</p>
		</div>
		<div class="col-md-3">
			
			
			<?php 
				$sectionClass = 'latest-news mb-05';
				$imgRatio = '1:1';
				$premium = true;
				$imgSrc = false;
				$imgW = '120';

				$showTime = false;
				$showImage = true; 
				$listClass = 'list list-img-right';
				$listTitle = 'List title';
				$listCount = '5';
					
				include('includes/list-news.php');
			?>

			
		</div>
	</div>


	<div class="row flex-row mb" >
		<div class="col-md-3 ">
			<div class="demo-header">Timestamp default</div>
		</div>
		<div class="col-md-3">
			
			
			<?php 
				$sectionClass = 'latest-news mb-05';
				$imgRatio = '1:1';
				$premium = true;
				$imgSrc = false;
				$imgW = '120';

				$showTime = true;

				$showImage = false; 
				$listClass = 'list';
				$listTitle = 'List title';
				$listCount = '5';
					
				include('includes/list-news.php');
			?>

			
		</div>
		</div>
		<div class="row flex-row mb" >

		<div class="col-md-3 ">
			<div class="demo-header">Timestamp block</div>
		</div>
		<div class="col-md-3">
			
			
			<?php 
				$sectionClass = 'latest-news mb-05';
				$imgRatio = '1:1';
				$premium = true;
				$imgSrc = false;
				$imgW = '120';

				$showTime = false;
				$showTimeBlock = true;
				$showImage = false; 
				$listClass = 'list';
				$listTitle = 'List title';
				$listCount = '5';
					
				include('includes/list-news.php');
			?>

			
		</div>
		</div>
		<div class="row flex-row mb" >

		<div class="col-md-3 ">
			<div class="demo-header">Timestamp block w/images </div>
		</div>
		<div class="col-md-3">
			
			
			<?php 
				$sectionClass = 'latest-news mb-05';
				$imgRatio = '1:1';
				$premium = true;
				$imgSrc = false;
				$imgW = '120';

				$showTime = false;
				$showTimeBlock = true;
				$showImage = true; 
				$listClass = 'list list-time-block list-img-right';
				$listTitle = 'List title';
				$listCount = '5';
					
				include('includes/list-news.php');
			?>

			
		</div>
		</div>
		<div class="row flex-row mb" >

		<div class="col-md-3 ">
			<div class="demo-header">Timestamp w/ image</div>
		</div>
		<div class="col-md-3">
			
			
			<?php 
				$sectionClass = 'latest-news mb-05';
				$imgRatio = '1:1';
				$premium = true;
				$imgSrc = false;
				$imgW = '120';

				$showTime = true;
				$showImage = true; 
				$listClass = 'list list-time list-img-right  ';
				$listTitle = 'List title';
				$listCount = '5';
					
				include('includes/list-news.php');
			?>

			
		</div>
	</div>
		
	<div class="row flex-row mb" >
		<div class="col-md-3 ">
			<div class="demo-header">Toplist</div>
		</div>
		<div class="col-md-3">
			
			
			<?php 
				$sectionClass = 'latest-news mb-05';
				$imgRatio = '1:1';
				$premium = true;
				$imgSrc = false;
				$imgW = '120';

				$showTime = false;
				$showImage = false; 
				$listClass = 'list list-top-lg';
				$listTitle = 'List title';
				$listCount = '5';
					
				include('includes/list-news.php');
			?>

			
		</div>
	</div>
	
	<div class="row flex-row mb" >
		<div class="col-md-3 ">
			<div class="demo-header">Toplist w/thumbnail</div>
		</div>
		<div class="col-md-3">
			
			
			<?php 
				$sectionClass = 'latest-news mb-05';
				$imgRatio = '1:1';
				$premium = true;
				$imgSrc = false;
				$imgW = '120';

				$showTime = false;
				$showImage = true; 
				$listClass = 'list list-img-right list-top-lg';
				$listTitle = 'List title';
				$listCount = '5';
					
				include('includes/list-news.php');
			?>

			
		</div>
	</div>




	<div class="row flex-row mb">
		<div class="col-md-3 ">
			<div class="demo-header">Load more button</div>	
		</div>
		<div class="col-md-3">
			
			
			<?php 
				$sectionClass = 'latest-news mb-05';
				$imgRatio = '1:1';
				$premium = true;
				$imgSrc = false;
				$imgW = '120';

				$showTime = false;
				$showImage = true; 
				$listClass = 'list list-img-right';
				$listTitle = 'List title';
				$listCount = '5';
				$showButton = true;
				$btnTxt = 'Hent flere <i class="bicon-angle-down"></i>';
				
			
				include('includes/list-news.php');
			?>

			
		</div>

	</div>

	<div class="row flex-row mb">
		<div class="col-md-3 ">
			<div class="demo-header">Footer link</div>	
			<p>Footer link + link txt</p>
		</div>
		<div class="col-md-3">
			
			
			<?php 
				$sectionClass = 'latest-news mb-05';
				$imgRatio = '1:1';
				$premium = true;
				$imgSrc = false;
				$imgW = '120';

				$showTime = false;
				$showImage = false; 
				$listClass = 'list ';
				$listTitle = 'List title';
				$listCount = '5';
				$showButton = false;
				$footerTxt = 'Se flere <i class="bicon-angle-right"></i>';
				$footerLink = 'tpl-section.php';
				
			
				include('includes/list-news.php');
			?>

			
		</div>

	</div>


	<div class="row flex-row mb">
		<div class="col-md-3 ">
			<div class="demo-header">Blog list</div>	
			<p></p>
		</div>
		<div class="col-md-3">
			
			
			<?php 
				$sectionClass = 'latest-news mb-05';
				$imgRatio = '1:1';
				$premium = true;
				$imgSrc = true;
				$imgW = '80';
				$showTime = false;
				$showImage = true; 
				
				$imgSrc = '/!author';
				$listClass = 'list';
				$listTitle = 'List title';
				$listCount = '5';
				$showButton = false;
				$footerTxt = false;
				$footerLink = false;
				$listBlog = true;
			
				include('includes/list-news.php');
			?>

			
		</div>

	</div>

</div>



<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
<script src="/dist/scripts/main.js"></script>
<script src="/dist/scripts/demo.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-8992845-4', 'auto');
  ga('send', 'pageview');

</script>







</body>
</html>