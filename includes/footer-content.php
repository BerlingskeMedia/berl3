<?php include('includes/loginform.php'); ?>
<div class="close-offcanvas"></div>

<?php include('includes/cookie-warning.php'); ?>

<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
<script src="/dist/scripts/main.js"></script>
<script src="/dist/scripts/demo.js"></script>

<script>
	$('iframe.auto-height').iframeAutoHeight({minHeight: 50});	
</script>

<?php if($adblocker): ?>
	<script>
	$(function() {
		$('body').delay(4000).queue(function(next) {
		  $(this).addClass('show-antiblocker');
		  next();
		});

		$('.close-politenotice').click(function(e){
			e.preventDefault();
			$('body').removeClass('show-antiblocker');
		});
	});

	</script>
<?php endif; ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-8992845-4', 'auto');
  ga('send', 'pageview');

</script>