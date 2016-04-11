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
if (isset($_GET['imgSize'])) {
	$imageSize = $_GET['imgSize'];
} else {
	$imageSize = '1'; // 0 = no image. 1 = large image. 2 = small image	
}

if (isset($_GET['showQuote'])) {
	$showQuote = true;
}

if (isset($_GET['showTrumpet'])) {
	$trumpet = true;
}

if (isset($_GET['showEmbeds'])) {
	$showEmbeddedImages = true;
}
if (isset($_GET['showFactEmbedded'])) {
	$showFactboxEmbedded = true;
}
if (isset($_GET['showTimeline'])) {
	$showTimelineEmbedded = true;
}
if (isset($_GET['showTheme'])) {
	$showThemeEmbedded = true;
}

if (isset($_GET['showFactDefault'])) {
	$showFactboxDefault = true;
}
if (isset($_GET['showYoutube'])) {
	$showYoutube = true;
}
if (isset($_GET['showTweet'])) {
	$showTweet = true;
}
if (isset($_GET['blog'])) {
	$templateBlog = true;
}
if (isset($_GET['editorial'])) {
	$templateEditorial = true;
}
if (isset($_GET['showLink'])) {
	$showLink = true;
}
if (isset($_GET['showRating'])) {
	$showRating = true;
}
if (isset($_GET['event'])) {
	$event = $_GET['event'];
}

$campaignId = 'campaign-' . mt_rand(1,3);

?>