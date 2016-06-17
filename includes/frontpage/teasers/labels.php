<?php if($teaserLabel === 'yellow'): ?>
	<span class="teaser--label-yellow">
		<span><?php if(!$labelText): echo 'Breaking'; else: echo $labelText; endif; ?></span>
	</span>
<?php endif; ?>

<?php if($teaserLabel === 'red'): ?>
	<span class="teaser--label-red">
		<span><?php if(!$labelText): echo 'Live'; else: echo $labelText; endif; ?></span>
	</span>
<?php endif; ?>


				