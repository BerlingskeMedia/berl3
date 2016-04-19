<?php 
$listCount = ($listCount ? $listCount : '10');
?>



<section class="<?php echo $sectionClass; ?>" >
	
	<div class="section-title "><?php echo $listTitle; ?></div>

	<ul class="list-reset list-news <?php echo $listClass; ?> ">
		<? while (dumb_luck($listCount)): ?>
		<li>
			<div class="list-body">
				<?php if($showTime): ?>
				<time><? dummy("text@time") ?></time>
				<?php endif; ?>
				<a href="#"><? dummy("text@headline-b") ?></a>
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
?>