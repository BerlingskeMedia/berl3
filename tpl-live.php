<? require_once("../dummy/dummy.php") ?>

<?php 
if(isset($_GET["wide"])) {
	$showWide = true;
} 

if(isset($_GET["well"])) {
	$showWell = true;
} 
if(isset($_GET["oneliner"])) {
	$showOneliner = true;
} 
if(isset($_GET["top"])) {
	$showTop = true;
}
if(isset($_GET["business"])) {
	$siteBusiness = true;
}
?>


<?php 
	// $showWell = rand(1,1);
?>
<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Berlingske LIVE</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat|Oswald:300' rel='stylesheet' type='text/css'>
</head>
<body class=" <?php if($siteBusiness): ?>site-business<?php endif; ?> show-site-search">






<div class="site-search-overlay">
	<div class="warning">

		<div class="text-center"><p><strong>Av av av</strong></p> <p>Dette website er ikke responsivt endnu - kan endnu kun ses på store skærme :-)</p>
		</div>
	</div>	
</div>

<div class="main-wrapper">
<?php include('includes/offcanvas-menu.php'); ?>


<?php include('includes/site-header.php'); ?>

<?php include('includes/banners.php'); ?>
<?php 
$campaignId = 'campaign-' . mt_rand(1,3);
?>

<div class="canvas-main <?php echo $campaignId; ?>">


	<div class="banner-wrapper">
	<div class="bg-banner"></div>
	<div class="topbanner demo-banner" style="width: 930px; height: 180px;"></div>
	
	
	<div class="container main-content">


		<div class="row">
			<div class="col-md-12">
				<figure class="article-main-image">
					<img src="<? dummy("image/!terror@1240x,6:2") ?>" width="" height="" alt="" />
					<figcaption class="caption">
						Foto: Jens Meier - &copy; AP/Reuters
					</figcaption>
				</figure>
			</div>
			<div class="col-md-1">
			
			</div>
			<div class="col-md-10">
				<header class="article-header-live">
					<span class="article-badge">
						Terror i Bruxelles
					</span>
					<h1 class="article-title">
						<? dummy("text@headline-b") ?>
					</h1>
					<p class="article-summary">
						<? dummy("text@teaser") ?>
					</p>
				</header>

				<ul class="mb-1">
						<? while (dumb_luck("4")): ?>
						<li>
							<? dummy("text@headline-b") ?>
						</li>
						<? endwhile ?>	
					</ul>
			</div>


			
		</div><!-- row -->
		
		<div class="row">
			<div class="col-md-8 col-article-primary">
				<div class="article-content">
					
					
					<div class="article-badge-live">
						<i class="bicon-asterisk"></i> Live
					</div>

					<div class="widget-livestream">

						<div class="text-right">
											<button onclick="notifyMe()">
						  Notify me!
						</button>
						</div>
						<ul>
							<li>
								<time>Lige nu...</time>
								<h2><? dummy("text@headline-b") ?></h2>
								<? if (dumb_luck("25%")): ?>
									<figure class="live-img">
										<a href="#" class="widget-img"><img src="<? dummy("image@400x,") ?>" width="" height="" alt=""  /></a>
										<figcaption><? dummy("text@short-teaser") ?></figcaption>
									</figure>
									<? if (dumb_luck("10%")): // MAYBE we can have 2 images ?> 
									<figure class="live-img">
										<a href="#" class="widget-img"><img src="<? dummy("image@400x,") ?>" width="" height="" alt=""  /></a>
										<figcaption><? dummy("text@short-teaser") ?></figcaption>
									</figure>
									<? endif ?>
								<? endif ?>
								<p>
									<? dummy("text@paragraph") ?>
								</p>

							</li>

							<? while (dumb_luck("5")): ?>
							<li>
								<time><? dummy("text@time") ?></time>
								<h2><? dummy("text@headline-b") ?></h2>
								<? if (dumb_luck("25%")): ?>
									<figure class="live-img">
										<a href="#" class="widget-img"><img src="<? dummy("image@400x,") ?>" width="" height="" alt=""  /></a>
										<figcaption><? dummy("text@short-teaser") ?></figcaption>
									</figure>
									<? if (dumb_luck("10%")): // MAYBE we can have 2 images ?> 
									<figure class="live-img">
										<a href="#" class="widget-img"><img src="<? dummy("image@400x,") ?>" width="" height="" alt=""  /></a>
										<figcaption><? dummy("text@short-teaser") ?></figcaption>
									</figure>
									<? endif ?>
								<? endif ?>
								<p>
									<? dummy("text@paragraph") ?>
								</p>

							</li>
							<? endwhile ?>
							<li>
								<time><? dummy("text@time") ?></time>
								<h2><? dummy("text@headline-b") ?></h2>
								<p><? dummy("text@teaser") ?></p>
								<blockquote class="twitter-tweet" data-lang="da"><p lang="en" dir="ltr">The only international number for general information and concerning the victims is 0032 78 15 1771 <a href="https://twitter.com/hashtag/Brussels?src=hash">#Brussels</a></p>&mdash; CrisisCenter Belgium (@CrisiscenterBE) <a href="https://twitter.com/CrisiscenterBE/status/712691530763472896">23. marts 2016</a></blockquote>
								<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
							</li>
							

							<li>

								<time><? dummy("text@time") ?></time>
								<h2><? dummy("text@headline-b") ?></h2>
								<? if (dumb_luck("25%")): ?>
									<figure class="live-img">
										<a href="#" class="widget-img"><img src="<? dummy("image@400x,") ?>" width="" height="" alt=""  /></a>
										<figcaption><? dummy("text@short-teaser") ?></figcaption>
									</figure>
									<? if (dumb_luck("10%")): // MAYBE we can have 2 images ?> 
									<figure class="live-img">
										<a href="#" class="widget-img"><img src="<? dummy("image@400x,") ?>" width="" height="" alt=""  /></a>
										<figcaption><? dummy("text@short-teaser") ?></figcaption>
									</figure>
									<? endif ?>
								<? endif ?>
								<p>
									<? dummy("text@paragraph") ?>
								</p>

							</li>
							<li>
								<time><? dummy("text@time") ?></time>
								<h2><? dummy("text@headline-b") ?></h2>
								<p><? dummy("text@teaser") ?></p>
								<iframe width="560" height="315" class="video-youtube" src="https://www.youtube.com/embed/G7M3NSIfrcc" frameborder="0" allowfullscreen></iframe>
							</li>

							<li>
								<time><? dummy("text@time") ?></time>
								<h2><? dummy("text@headline-b") ?></h2>
								<p><? dummy("text@teaser") ?></p>
								<blockquote class="twitter-tweet" data-lang="da"><p lang="en" dir="ltr"><a href="https://twitter.com/hashtag/BruxellesAttacks?src=hash">#BruxellesAttacks</a> 2 DEADLY ISLAMIST ATTACKS IN <a href="https://twitter.com/hashtag/Europe?src=hash">#Europe</a> SINCE 2004, 34 KILLED, 128 WOUNDED <a href="https://t.co/VC5s18iT77">https://t.co/VC5s18iT77</a> <a href="https://t.co/qJLvD9hwH8">pic.twitter.com/qJLvD9hwH8</a></p>&mdash; Eta Centauri (η Cen) (@ECentauri) <a href="https://twitter.com/ECentauri/status/712275428887625728">22. marts 2016</a></blockquote>
								<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
							</li>
						</ul>

						<div class="widget-footer text-center">
							<button class="btn btn-news">Hent flere</button>
						</div>
					</div><!-- live-stream -->
				</div><!-- article-content -->
			</div>

			<div class="col-md-4  article-sidebar">
				<div class="banner module ">
					<div style="width: 300px; height: 250px;" class="demo-banner"></div>
				</div>

				<? while (dumb_luck("4")): ?>
				<?php 
					$imgW='140'; 
					$showImg = '1';
					$class = 'teaser-float-left fs12 bb';
					$imgRatio = '3:2';
					$showSummary = '0';
					$showRelated = '0';
					$showKey = true;
					include('includes/teaser.php') ?>
				<? endwhile ?>
			</div>

		</div><!-- row -->

	</div><!-- container -->

</div><!-- banner-wrapper -->
</div><!-- canvas main -->
</div><!-- main-wrapper -->


<script src="/dist/scripts/main.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-8992845-4', 'auto');
  ga('send', 'pageview');

</script>

<script>
function notifyMe() {
  // Let's check if the browser supports notifications
  if (!("Notification" in window)) {
    alert("This browser does not support desktop notification");
  }

  // Let's check if the user is okay to get some notification
  else if (Notification.permission === "granted") {
    // If it's okay let's create a notification
    var notification = new Notification('<? dummy("text@headline-b") ?>', {
			body: '<? dummy("text@short-teaser") ?>',
			tag: 'My unique id',
			icon: '/dist/images/bicon.png',
			timeout: 10000

		});
  }

  // Otherwise, we need to ask the user for permission
  // Note, Chrome does not implement the permission static property
  // So we have to check for NOT 'denied' instead of 'default'
  else if (Notification.permission !== 'denied') {
    Notification.requestPermission(function (permission) {

      // Whatever the user answers, we make sure we store the information
      if(!('permission' in Notification)) {
        Notification.permission = permission;
      }

      // If the user is okay, let's create a notification
      if (permission === "granted") {
        var notification = new Notification('<? dummy("text@headline-b") ?>', {
			body: '<? dummy("text@short-teaser") ?>',
			tag: 'My unique id',
			icon: '/dist/images/bicon.png',
			timeout: 10000

		});
      }
    });
  }

  // At last, if the user already denied any notification, and you 
  // want to be respectful there is no need to bother him any more.
}






</script>

</body>
</html>