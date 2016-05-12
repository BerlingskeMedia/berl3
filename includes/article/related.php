<?php if($showRelated): ?>

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



<?php 
$showTime = false;
$showImage = true; 
$listClass = 'list list-img-right list-article-related no-border-last-item border-first-item list-font-2 xtra-related ';
$listId = 'xtra-related';
$listTitle = '';
$listCount = '3';
$sectionClass = ' mb small-title-left hide-section-title';
$premium = true;
$imgSrc = false;
$imgW = '120';
$imgRatio = '1:1';

include('includes/list-news.php');
?>


<div class="toggle-loadmore-fade">
	<button class="btn btn-sm btn-gray btn-round" id="toggle-xtra-related">Vis alle</button>
</div>

</aside>
<?php endif; ?>