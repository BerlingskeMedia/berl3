<?php 
$listCount = ($listCount ? $listCount : '10');
if ($showTime) {
	$listClass = $listClass . ' list-time';
}
if ($showTimeBlock) {
	$listClass = $listClass . ' list-time-block';
}

if ($listBlog) {
	$listClass = $listClass . ' list-img-right list-blog';	
}
?>


<div class="<?php echo $sectionClass; ?>" >
	
	
	<div class="section-title "><?php echo $listTitle; ?></div>

	<ul class="list-reset list-news <?php echo $listClass; ?> " <?php if($listId): ?>id="<?php echo $listId; ?>"<?php endif; ?>>
		<? while (dumb_luck($listCount)): ?>
		<li class="">
			<?php if($showImage): ?>
			<figure>
				<a href="tpl-article.php" title="[ARTICLE HEADER]">
					<img src="<? dummy("image". $imgSrc ."@". $imgW ."x,". $imgRatio ."") ?>" width="" height="" alt="" class="img" />
				</a>				
			</figure>
			<?php endif; ?>
			<div class="list-body">
				
				<?php if($listBlog): ?>
					<span class="list-author">
						<? dummy("text@author") ?>
					</span>
				<?php endif; ?>

				<?php if($showTime || $showTimeBlock): ?>
					<time><? dummy("text@time") ?></time>
				<?php endif; ?>
				<a href="tpl-article.php" title="[ARTICLE HEADER]">

					<? dummy("text@headline-b") ?>
					<?php if($premium): ?>
						<? if (dumb_luck("50%")): ?><i class="bicon-key"></i><? endif ?>
					<?php endif; ?>
					<?php if($showComments): ?><span class="list-comments"><? dummy("text@number") ?> <i class="bicon-comment-inv-alt2"></i></span><?php endif;?>
				</a>
			</div>

		</li>
		<? endwhile ?>
	</ul>
	<?php if($showButton): ?>
		<div class="list-fade">
			<button><?php echo $btnTxt; ?></button>
		</div>
	<?php endif; ?>
	<?php if($footerLink): ?>
		<div class="list-fade">
			<a href="<?php echo $footerLink; ?>"><?php echo $footerTxt; ?></a>
		</div>
	<?php endif; ?>
</div>

<?php 
// Default values 

$showComments = true; 
$showTime = false; 
$showTimeBlock = false; 
$listCount = false;
$listClass = false;
$sectionClass = false;
$showImage = false;
$listDoc = false;
$premium = false;
$imgSrc = false;
$listId = false;
$showButton = false;
$btnTxt = '';
$footerLink = '';
$imgW = '620';
$imgRatio = '16:9';
$listBlog = false;
?>