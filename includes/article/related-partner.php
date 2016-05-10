<?php if($partner == 'videnskabdk'): ?>

	<aside class="partner-related small-title-left">

	<?php 
	$showTime = true;
	$showImage = false; 
	$listClass = 'list list-img-right list-article-related list-font-2 no-border-last-item';
	$listTitle = 'Videnskab.dk';
	$listCount = '10';
	$sectionClass = 'list-title-sm';
	$premium = false;
	$imgSrc = false;
	$imgW = '120';
	$imgRatio = '1:1';
	$footerTxt = 'Gå til Videnskab.dk <i class="bicon-angle-right"></i>';
	$footerLink = 'tpl-section.php';

	include('includes/list-news.php');
	?>
</aside>
<?php endif; ?>