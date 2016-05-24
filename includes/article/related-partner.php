<?php if($partner == 'videnskabdk'): ?>

	<aside class="partner-related small-title-left">

	<?php 
	$showTime = true;
	$showImage = false; 
	$listClass = 'list list-img-right  list-font-2 no-border-last-item';
	$listTitle = 'Mere fra';
	$listCount = '10';
	$sectionClass = 'list-title-sm';
	$premium = false;
	$imgSrc = false;
	$imgW = '120';
	$imgRatio = '1:1';
	$footerTxt = 'Gå til Videnskab.dk <i class="bicon-angle-right"></i>';
	$footerLink = 'tpl-section.php';
	$showPartner = true;

	include('includes/list-news.php');
	?>
</aside>
<?php endif; ?>