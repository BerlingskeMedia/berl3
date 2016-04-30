<?php 
if($horizontalShareButtons == true) {
	$class = $class . 'share-buttons-horizontal';
} 
if($hideLabels == true) {
	$class = $class . ' hide-labels';
}

$showCounter = true;
?>
<div class="share-buttons  <?php echo $class; ?> ">
	<div class="mb">
		<a href="#" class="btn-share-facebook"><i class="bicon-facebook"></i></a>
	</div>
	<div class="mb">
		<a href="#" class="btn-share-twitter"><i class="bicon-twitter"></i></a>
	</div>

	
		<div class="mb">
			<a href="#" class="btn-share-linkedin"><i class="bicon-linkedin"></i></a>
		</div>
		<div class="mb hidden-md-down">
			<a href="#" class="btn-share-print"><i class="bicon-print"></i></a>
			<div class="btn-label">Print</div>
		</div>
		<div class="mb">
			<a href="#" class="btn-share-envelope"><i class="bicon-mail"></i></a>
			<div class="btn-label">Send</div>
		</div>
	
	<div class="mb hidden-lg-down">
		<a href="#" class="btn-share-comment "><i class="bicon-comment-inv-alt2"></i></a>
		<div class="btn-label"><? dummy("text@number") ?></div>
	</div>
	

<?php if($showCounter): ?>
	<a href="#" class="btn-comment-counter hidden-xl-up"><i class="bicon-comment-inv-alt2"></i> <? dummy("text@number") ?> <span class="hidden-sm-down">kommentarer</span></a>
<?php endif; ?>
</div>
<?php 
	$horizontalShareButtons = false;
	$showCounter = false;
?>