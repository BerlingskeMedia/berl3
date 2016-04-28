<?php 
$listCount = ($listCount ? $listCount : '10');
?>


<div class="<?php echo $sectionClass; ?>" >
	
		<!-- <?php echo $listDoc ?> -->
	
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
				<?php if($showTime): ?>
					<time><? dummy("text@time") ?></time>
				<?php endif; ?>
				<a href="#" title="[ARTICLE HEADER]"><? dummy("text@headline-b") ?>
					<?php if($premium): ?>
						<? if (dumb_luck("50%")): ?><i class="bicon-key"></i><? endif ?>
					<?php endif; ?>
				</a>
			</div>

		</li>
		<? endwhile ?>
	</ul>

</div>

<?php 
// Default values 
$showTime = false; 
$listCount = false;
$listClass = false;
$sectionClass = false;
$showImage = false;
$listDoc = false;
$premium = false;
$imgSrc = false;
$listId = false;
$imgW = '620';
$imgRatio = '16:9';
?>