<?php 

// $payIcon = '/dist/images/payicons/16_5.svg';
$payIcon = false;

// Hide php "variable not set"-errors:
error_reporting( error_reporting() & ~E_NOTICE );

if(isset($_GET["advertorial"])) {
	$isAdvertorial = true;
}

if(isset($_GET["ab"])) {
	$adblocker = $_GET["ab"];
}
if(isset($_GET["page"])) {
	$page = $_GET["page"];
}

if(isset($_GET["topMD"])) {
	$topMD = true;
} 
if(isset($_GET["topLG"])) {
	$topLG = true;
} 

if(isset($_GET["topXL"])) {
	$topXL = true;
} 


if(isset($_GET["wide"])) {
	$showWide = true;
} 

// add viewport tag to make
if(isset($_GET["ipad"])) {
	$ipad = true;
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

if (isset($_GET['teaserIcon'])) {
	$teaserIcon = $_GET['teaserIcon'];
}
if (isset($_GET['template'])) {
	$template = $_GET['template'];
}

if (isset($_GET['partner'])) {
	$partner = $_GET['partner'];
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
if (isset($_GET['theme'])) {
	$theme = $_GET['theme'];
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
	$paywall = $_GET['paywall'];
}

$showNewsletterEmbedded = rand(0,1);




if (isset($_GET['showRelated'])) {
	$showRelated = $_GET['showRelated'];
} else {
	$showRelated = true; // Always show related articles unless set to false
}


if (isset($_GET['showRelated'])) {
	$showRelated = true;
}
if (isset($_GET['showGallery'])) {
	$showGalleryTeaser = true;
}
if (isset($_GET['download'])) {
	$downloadFile = true;
}

if (isset($_GET['showNewsletter'])) {
	$showNewsletter = true;
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
if (isset($_GET['loggedIn'])) {
	$loggedIn = true;
}

$campaignId = 'campaign-' . mt_rand(1,4);

if (isset($_GET['deck'])) {
	$deck = $_GET['deck'];
}
if (isset($_GET['cookiewarning'])) {
	$cookiewarning = true;
}
if (isset($_GET['browserwarning'])) {
	$browserwarning = true;
}


?>