<?php 
// $labelColor = 'yellow';
// $labelText = '<i class="bicon-record"></i> Live';

?>

<?php if($labelColor === 'yellow'): ?>
	<span class="teaser--label-yellow">
		<span><?php if(!$labelText): echo 'Breaking'; else: echo $labelText; endif; ?></span>
	</span>
<?php endif; ?>

<?php if($labelColor === 'red'): ?>
	<span class="teaser--label-red">
		<span><?php if(!$labelText): echo '<i class="bicon-record"></i> Live'; else: echo $labelText; endif; ?></span>
	</span>
<?php endif; ?>


<?php 
// $labelText = false;
// $labelcolor = false;
?>	