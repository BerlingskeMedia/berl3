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
	$imageSize = '1'; // 0 = no image. 1 = large image. 2 = small image. 3 = gallery. 4 = video, 5 = gallery + embedded images
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
if (isset($_GET['showCustom'])) {
	$showCustom = true;
}
if (isset($_GET['showTweet'])) {
	$showTweet = true;
}

$showByline = true;

if (isset($_GET['blog'])) {
	$templateBlog = true;
	$showByline = false;
}
if (isset($_GET['essay'])) {
	$templateEssay = true;
	$showByline = false;
}
if (isset($_GET['editorial'])) {
	$templateEditorial = true;
	$showByline = false;
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

if (isset($_GET['paywall'])) {
	$showPaywall = true;
}
$showNewsletterEmbedded = false;

if (isset($_GET['showNewsletter'])) {
	$showNewsletter = true;
	$showNewsletterEmbedded = false;
}


if (isset($_GET['showRelated'])) {
	$showRelated = $_GET['showRelated'];
} else {
	$showRelated = true; // Always show related articles unless set to false
}


if (isset($_GET['showRelated'])) {
	$showRelated = true;
}

// Longreads
if (isset($_GET['textPosition'])) {
	$textPosition = $_GET['textPosition'];
} else {
	$textPosition = 'bottom'; 
}
if (isset($_GET['specialBanner'])) {
	$backgroundBanner = true;
}


$campaignId = 'campaign-' . mt_rand(1,3);

?>