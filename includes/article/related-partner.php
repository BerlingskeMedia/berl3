<?php if($partner == 'videnskabdk'): ?>

	<aside class="article-related">

	<?php 
	$showTime = false;
	$showImage = true; 
	$listClass = 'list list-img-right list-article-related no-border-last-item list-font-2';
	$listTitle = 'Relaterede';
	$listCount = '2';
	$sectionClass = 'small-title-left';
	$premium = true;
	$imgSrc = false;
	$imgW = '120';
	$imgRatio = '1:1';

	include('includes/list-news.php');
	?>
</aside>
<?php endif; ?>