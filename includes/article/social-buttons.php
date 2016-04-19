<?php if($horizontalShareButtons == true) {
	$class = 'share-buttons-horizontal';
} 
?>
<div class="share-buttons collapsed <?php echo $class; ?>">
	<div class="mb">
		<a href="#" class="btn-share-facebook"><i class="bicon-facebook"></i></a>
	</div>
	<div class="mb">
		<a href="#" class="btn-share-twitter"><i class="bicon-twitter"></i></a>
	</div>

	<div class="extra-buttons">
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
	</div>
	

	
	<a href="#" class="social-toggle"><i class="bicon-angle-down"></i></a>
</div>
<?php $horizontalShareButtons = false; ?>