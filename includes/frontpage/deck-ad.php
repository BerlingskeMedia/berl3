<div class="row deck hidden-sm-down">
	
	<div class="grid-col-left col-border-right-xl-up col-xs-2 ">
	</div><!-- col-xs-2 -->
	
	<div class="grid-col-middle-wide banner col-xs-10">
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
	</div><!-- col-xs-10 -->
</div><!-- row -->


<?php $bannerLabel = false; ?>