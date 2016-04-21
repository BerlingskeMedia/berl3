<?php 
$listCount = ($listCount ? $listCount : '10');
?>



<section class="<?php echo $sectionClass; ?>" >
	
		<!-- <?php echo $listDoc ?> -->
	
	<div class="section-title "><?php echo $listTitle; ?></div>

	<ul class="list-reset list-news <?php echo $listClass; ?> ">
		<? while (dumb_luck($listCount)): ?>
		<li class="list-item-video">
			<?php if($showImage): ?>
			<figure>
				<a href="tpl-article.php" title="[ARTICLE HEADER]"><img src="<? dummy("image@100x,3:2") ?>" width="" height="" alt="[ARTICLE HEADER]" /></a>
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

</section>

<?php 
$showTime = false; 
$listCount = false;
$listClass = false;
$sectionClass = false;
$showImage = false;
$listDoc = false;
$premium = false;
?>