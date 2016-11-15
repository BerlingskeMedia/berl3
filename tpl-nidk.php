<? require_once("../dummy/dummy.php") ?>
<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Berlingske - ni.dk</title>
	<link rel="stylesheet" type="text/css" href="http://www.ni.dk/partner/partner-css/partner.css" />
	<link rel="stylesheet" type="text/css" href="/dist/styles/nidk_iframe.css"/>
</head>

<body>

<div class="wrapper">
    
        <h1>Berlingske - dit overblik</h1>
    
    <div class="content-wrapper">
    	
    	<a href="http://www.bt.dk" class="logo">Berlingske</a>
    	
    	<div class="menu">
    		<ul class="tabs">
	    		<li><a href="#" data-link="1" class="current">Seneste</a></li>
	    		<li><a href="#" data-link="2">Mest læste</a></li>
	    		
    		</ul>
		</div>

		<div class="main-content tab-container">
			<div class="tab showMe" id="tabContent1">

				<div class="arrows">
					<a href="#" class="arrow-prev">
					<svg width="20" height="20" viewBox="0 0 2048 2048" xmlns="http://www.w3.org/2000/svg"><path class="arrow" d="M1803 960q0 53-37 90l-651 652q-39 37-91 37-53 0-90-37l-651-652q-38-36-38-90 0-53 38-91l74-75q39-37 91-37 53 0 90 37l294 294v-704q0-52 38-90t90-38h128q52 0 90 38t38 90v704l294-294q37-37 90-37 52 0 91 37l75 75q37 39 37 91z"/></svg></a>
					<a href="#" class="arrow-next">
					<svg width="20" height="20" viewBox="0 0 2048 2048" xmlns="http://www.w3.org/2000/svg"><path class="arrow" d="M1803 960q0 53-37 90l-651 652q-39 37-91 37-53 0-90-37l-651-652q-38-36-38-90 0-53 38-91l74-75q39-37 91-37 53 0 90 37l294 294v-704q0-52 38-90t90-38h128q52 0 90 38t38 90v704l294-294q37-37 90-37 52 0 91 37l75 75q37 39 37 91z"/></svg></a>
				</div>
				<article class="topstory">
					
						<figure>
						<a href="#">
							<figcaption>
								<? dummy("text@headline") ?>
							</figcaption>
							<img src="<? dummy("image@616x146,") ?>" width="" height="" alt="" />
							</a>
						</figure>
					
				</article>
				<ul class="counter-0">
					<? while (dumb_luck("12")): ?>
					<li>
						<a href="#" title="[ARTICLE TITLE]">
							<span class="time"><? dummy("text@time") ?></span>
							<span class="headline"><? dummy("text@headline") ?></span>
						</a>
					</li>
					<? endwhile ?>
				</ul>
			</div>
			<div class="tab " id="tabContent2">
				<div class="arrows">
					<a href="#" class="arrow-prev">
					<svg width="20" height="20" viewBox="0 0 2048 2048" xmlns="http://www.w3.org/2000/svg"><path class="arrow" d="M1803 960q0 53-37 90l-651 652q-39 37-91 37-53 0-90-37l-651-652q-38-36-38-90 0-53 38-91l74-75q39-37 91-37 53 0 90 37l294 294v-704q0-52 38-90t90-38h128q52 0 90 38t38 90v704l294-294q37-37 90-37 52 0 91 37l75 75q37 39 37 91z"/></svg></a>
					<a href="#" class="arrow-next">
					<svg width="20" height="20" viewBox="0 0 2048 2048" xmlns="http://www.w3.org/2000/svg"><path class="arrow" d="M1803 960q0 53-37 90l-651 652q-39 37-91 37-53 0-90-37l-651-652q-38-36-38-90 0-53 38-91l74-75q39-37 91-37 53 0 90 37l294 294v-704q0-52 38-90t90-38h128q52 0 90 38t38 90v704l294-294q37-37 90-37 52 0 91 37l75 75q37 39 37 91z"/></svg></a>
				</div>
				<article class="topstory">
					
						<figure>
						<a href="#">
							<figcaption>
								<? dummy("text@headline") ?>
							</figcaption>
							<img src="<? dummy("image@616x146,") ?>" width="" height="" alt="" />
							</a>
						</figure>
					
				</article>
				<ul class="counter-0">
					<? while (dumb_luck("12")): ?>
					<li>
						<a href="#" title="[ARTICLE TITLE]">
							<span class="time"><? dummy("text@time") ?></span>
							<span class="headline"><? dummy("text@headline") ?></span>
						</a>
					</li>
					<? endwhile ?>
				</ul>
			</div>
			
		</div>
    	
    </div>
    <div class="footer">
    	<a href="http://www.bt.dk"></a>
    	<p>Partner</p>
    	<p>Læs mere på berlingske.dk</p>
    </div>
</div>
    



<script
  src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
  integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc="
  crossorigin="anonymous"></script>
 <script type="text/javascript" src="/dist/scripts/nidk.js"></script>
	
</body>
</html>