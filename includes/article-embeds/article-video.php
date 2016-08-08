<?php if($paywall === 'video'): ?>

<figure class="article-video mb" >
			
	<img src="<? dummy("image@920x,16:9") ?>" width="" height="" alt="" />
	

	<?php if($paywall === 'video'): ?>
			<?php include('includes/article/paywall.php'); ?>
	<?php endif; ?>

</figure>	
	
	

<?php else: ?>
	<figure class="article-video mb" >
		<!-- 
		Developer info:
		Insert video player and delete this demo code: --> 

		<style>
		.article-video {
			position: relative;
		}
		.article-video:after {
			content: 'Her kommer video';
			position: absolute;
			top: 1rem;
			left: 1rem;
		}
		</style>
		<div style="padding-top: 56.25%; background-color: rgba(0,0,0,.05);"></div>

	<!-- Delete until here --> 
	</figure>
<?php endif; ?>