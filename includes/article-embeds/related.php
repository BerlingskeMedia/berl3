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

$listDoc ="I'm the documentation";
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

$listDoc ="I'm the documentation";
include('includes/list-news.php');
?>


<div class="toggle-related-fade">
<button class="btn toggle-xtra-related btn-sm btn-gray">Vis alle</button>
</div>

	
	<!-- <div class="micro-title header-float-left">Relateret:</div>
	<div>
	
		<ul class="list list-article-related list-bullet list-show-first-two ">
			<? while (dumb_luck("5-10")): ?>
			<li>
				<div class="list-body">
					<a href="tpl-article.php"><? dummy("text@headline-b") ?></a>
				</div>
			</li>
			<? endwhile ?>
		</ul>

	
		
			
		
	</div> -->
</aside>
<?php endif; ?>