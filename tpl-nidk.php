<? require_once("../dummy/dummy.php") ?>







<!DOCTYPE html>
<html lang="da">

<head>
	<?php include('includes/head.php'); ?>
	<title>Berlingske - nidk</title>
	<link rel="stylesheet" href="/dist/styles/ni_dk.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,600" rel="stylesheet">
</head>
<body>


<div class="section">

	<header>
		<h1>Berlingske - seneste nyheder</h1>
	</header>

	<main>
		<ul>
			<li>
				<h2>
					<a href="http://eas8.emediate.eu/eas?camp=201683;ty=ct;EASLink=http://www.berlingske.dk/LINK_TO_ARTICLEasd" target="_blank" title="ARTICLE TITLE">
						<img src="<? dummy("image@55x,1:1") ?>" width="60" height="60" alt="ARTICLE TITLE1" />	
					</a>
					<a href="http://eas8.emediate.eu/eas?camp=201683;ty=ct;EASLink=http://www.berlingske.dk/LINK_TO_ARTICLEasd" target="_blank" title="ARTICLE TITLE">
						<!-- Cut headline after 75 chars then "..." -->
						<? dummy("text@headline-b") ?>

					</a>
				</h2>
			</li>
			<? while (dumb_luck("4")): ?>
			<li>
				<h2>
					<a href="http://eas8.emediate.eu/eas?camp=201683;ty=ct;EASLink=http://www.berlingske.dk/LINK_TO_ARTICLEasdasdas" target="_blank" title="ARTICLE TITLE">
					<time><? dummy("text@time") ?></time>
					<? dummy("text@headline-b") ?>
					</a>
				</h2>
			</li>
			<? endwhile ?>
		</ul>
	</main>

	<footer>
		<a href="http://eas8.emediate.eu/eas?camp=201683;ty=ct;EASLink=http://www.berlingske.dk/" title="Læs flere nyheder på Berlingske.dk">
		<span>Partner</span>
		<span>Læs flere nyheder på </span>
		<span class="logo">Berlingske</span>
		</a>
	</footer>

</div>


</body>
</html>