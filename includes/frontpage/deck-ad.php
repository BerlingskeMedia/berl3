
<div class=" deck flex-row hidden-sm-down">
	<div class=" flex-row">
		<div class="col-tags col-border-right-xl-up">

		</div>
		<div class="col-primary-wide banner ">
			<div class="trade-container-wide">

				<div class="demo-banner" style="width:930px; height: 180px;">
					<?php 
					if($bannerLabel) {
						echo $bannerLabel;
					} else {
						echo "Banner 930x180";
					} ?>
				</div>
			</div>
			
		</div>
	</div><!-- col-wrapper --> 
</div>

<?php $bannerLabel = false; ?>