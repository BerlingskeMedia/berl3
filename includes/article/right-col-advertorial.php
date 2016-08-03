<div class="mb-1 text-center banner-advertorial">
	<img src="/dist/images/demo/alm-brand-300x250.png" alt="">
</div>
<div class=" advertorial-profile">
	<div class="section-title">
		<div class="list-sponsored">
				<span>Sponseret indhold:</span>
		</div>
		Firmaprofil
	</div>
	<p><? dummy("text@teaser") ?></p>
	<p><? dummy("text@teaser") ?></p>
	
	<ul>
	<? while (dumb_luck("2")): ?>
		<li><a href="#">I am a menu</a></li>
	<? endwhile ?>
	</ul>

</div>

<?php if($template !== 'advertorial'): ?>
<div class="mb">
<?php 
$showTime = false; 
$showImage = true;
$isSponsored = false;
$isSponsoredLabel = 'Sponseret indhold';
$imgRatio = '1:1';
$premium = false;
$imgSrc = false;
$imgW = '120';
$listClass = 'list-reset list-news list list-img-right';
$listTitle = 'Mere fra Alm. Brand';
$listCount = '8';
$sectionClass = 'latest-news';

include('includes/list-news.php');
?>

</div>
<?php endif; ?>

 