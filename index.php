<? require_once("../dummy/dummy.php") ?>

<?php 
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
	<title>Project Berlingske 3.0</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat|Oswald:300' rel='stylesheet' type='text/css'>
</head>
<body class="">


<style>
	h2, h3 {
		line-height: 1.2;
	}
	h2 {
		padding: 1rem 0;
		margin-top: 2rem;
	}
	h4 {
		font-size: 1.5rem;
		
	}
	.breaker {
		display: block;
		
		font-weight: 300;
		color: #999;
	}
	a {
		color: #369;
	}
	ul {
		margin-top: .2rem;
		list-style-type: none;
		padding-left: 0;
	}
	em {
		font-size: .8rem;
	}
	[class*="span-"],
	li a {
		display: inline-block;
		padding: .2rem;
		color: #333;
		transition: background-color .2s ease;
		margin-bottom: .1rem;
		
	}
	.emtpy {
		color: #999;
		margin-bottom: 10px;
	}
	li a:hover {
		color: #000;
	}
	.span-red,
	.red a {
		background-color: rgba(255,0,0,.2);
		
	}
	.red a:hover {
		background-color: rgba(255,0,0,.3);
		
	}

	.span-orange,
	.orange a {
		background-color: rgba(242,100,34,.3);
		
	}
	.orange a:hover {
		background-color: rgba(242,100,34,.4);

	}

	.span-green,
	.green a {
		background-color: rgba(0,166,81,.2);
	}
	.green a:hover {
		background-color: rgba(0,166,81,.3);
	}
</style>


<div class="container">
	<div class="row">
		
		
		<div class="col-md-8 col-md-offset-2">
			<div class="row">
					
				<div class="col-md-12 text-center border-bottom mb pb" style="padding-top: 4rem" >
					<a href="/" class="site-logo" >Berlingske</a>
				</div>

				<div class="col-md-9 col-md-offset-3">
					
					<div style="margin-bottom: 1rem;">
						<span class="span-red">Not started</span>
						<span class="span-orange">In progress...</span>
						<span class="span-green">OK</span>
					</div>
				</div>
				
				<div class="col-md-12">
					<h4>Header / Footer / User pages</h4>
				</div>
				
				<div class="col-md-3">
					Header
				</div>
				<div class="col-md-9">
					<ul>
						<li class="red"><a href="#">Frontpage</a> - <a href="#">(Logged in)</a></li>
						<li class="red"><a href="#">Section</a> - <a href="#">(Logged in)</a></li>
						<li class="red"><a href="#">User profile page</a></li>
					</ul>
				</div>

				<div class="col-md-3">
					Footer
				</div>
				<div class="col-md-9">
					<ul>
						
						<li class="red"><a href="#">Footer</a></li>
					</ul>
				</div>

				<div class="col-md-3">
					User
				</div>
				<div class="col-md-9">
					<ul>
						<li class="red"><a href="#">User profile page</a></li>
					</ul>
				</div>

				<div class="col-md-12">
					<h4>Front page</h4>
				</div>

				<div class="col-md-3">Variations</div>
			
				<div class="col-md-9">
					<ul>
						<li class="red"><a href="#">Default</a></li>
						<li class="red"><a href="#">Large top</a> </li>
						<li class="red"><a href="#">Giant top</a> </li>
						<li class="red"><a href="#">Live top</a></li>
						
						
						
					</ul>
				</div>

				<div class="col-md-3">Oneliners</div>
				<div class="col-md-9">
					<ul>
						<li class="red"><a href="#">Breaking</a></li>
						<li class="red"><a href="#">Live</a></li>
						<li class="red"><a href="#">Comming up</a></li>
					</ul>
				</div>
			
				
				<div class="col-md-12">
					<h4>Article</h4>
				</div>
				
				<div class="col-md-3">Images</div>
				<div class="col-md-9">
					
					<ul>
						<li class="orange"><a href="tpl-article.php?imgSize=1">Large image (default)</a></li>
						<li class="orange"><a href="tpl-article.php?imgSize=0">No image</a> </li>
						<li class="orange"><a href="tpl-article.php?imgSize=2">Small image</a></li>
						<li class="orange"><a href="tpl-article.php?imgSize=3">Gallery - main image only</a></li>
						<li class="orange"><a href="tpl-article.php?imgSize=4">Gallery - including embedded images</a></li>
						<li class="orange"><a href="tpl-article.php?imgSize=5">Video</a></li>
						
					</ul>
					</div>
					
					<div class="col-md-3">Header</div>

					<div class="col-md-9">
						<ul>
							<li class="orange"><a href="tpl-article.php?showTrumpet">Trumpet</a></li>
							<li class="orange"><a href="tpl-article.php?blog">Blog</a></li>
							<li class="orange"><a href="tpl-article.php?essay">Kronikken</a></li>
							<li class="orange"><a href="tpl-article.php?editorial">Editorial</a></li>
							<li class="orange"><a href="tpl-article.php?showRating">Rating</a> (<a href="tpl-article.php?showRating&amp;blog">Blog template</a>)</li>
						</ul>
					</div>

				<div class="col-md-3">Embeds</div>
				<div class="col-md-9">

					<ul>
						
						<li class="orange"><a href="tpl-article.php?showCustom&amp;imgSize=1">Custom embed</a></li>
						<li class="orange"><a href="tpl-article.php?showTweet">Tweet</a></li>
						<li class="orange"><a href="tpl-article.php?showQuote">Quote</a></li>
						<li class="orange"><a href="tpl-article.php?showFactDefault">Factbox - Default</a></li>
						<li class="orange"><a href="tpl-article.php?showFactEmbedded">Factbox - Embedded</a></li>
						<li class="orange"><a href="tpl-article.php?showTheme">Theme</a></li>
						<li class="orange"><a href="tpl-article.php?showTimeline">Timeline</a></li>
						<li class="orange"><a href="tpl-article.php?showLink">Embedded links</a></li>
						<li class="orange"><a href="tpl-article.php?showGallery">Embedded gallery</a></li>
					</ul>
					</div>

					

					<div class="col-md-3">Tags</div>
					
					<div class="col-md-9">
						<ul>
							<li class="orange"><a href="tpl-article.php?event=breaking">Breaking</a> </li>
							<li class="orange"><a href="tpl-article.php?event=live">Live</a> </li>
							<li class="orange"><a href="tpl-article.php?event=update">To be updated</a> </li>
							<li class="orange"><a href="tpl-article.php?event=inawhile">In a while</a> </li>
						</ul>
					</div>
					<div class="col-md-3">
						Partner articles 
					</div>
					<div class="col-md-9">
						<ul>
							<li class="orange"><a href="tpl-article.php?partner=videnskabdk">'Videnskab.dk'</a></li>
						</ul>
					</div>
					<div class="col-md-3">Paywall</div>

					<div class="col-md-9">

					<ul>
						<li class="red"><a href="#">Pay wall sign - Direct</a></li>
						<li class="red"><a href="#">Pay wall sign - Open</a></li>
					</ul>
					</div>
					
				

				<div class="col-md-12">
					<h4>Article Longread</h4>
				</div>
				
				
					
						<div class="col-md-3">
							Embeds
						</div>
						<div class="col-md-9">
							<ul>
								<li class="orange"><a href="tpl-article-longread.php">Default</a></li>
								<li class="orange"><a href="tpl-article-longread.php?imgSize=4">Embedded images</a></li>
								<li class="orange"><a href="tpl-article-longread.php?showCustom&amp;imgSize=1">Custom embed</a></li>
								<li class="orange"><a href="tpl-article-longread.php?showTweet">Tweet embed</a></li>
								<li class="orange"><a href="tpl-article-longread.php?showQuote">Quote</a></li>	
								<li class="orange"><a href="tpl-article-longread.php?showFactDefault">Factbox - Default</a></li>
								<li class="orange"><a href="tpl-article-longread.php?showFactEmbedded">Factbox - Embedded</a></li>
								<li class="orange"><a href="tpl-article-longread.php?showTheme">Theme</a></li>
								<li class="orange"><a href="tpl-article-longread.php?showTimeline">Timeline</a></li>
								<li class="orange"><a href="tpl-article-longread.php?showLink">Embedded links</a></li>	
							</ul>
							
						</div>
				
						<div class="col-md-3">
							Header
						</div>
						<div class="col-md-9">
							<ul>
								<li class="orange"><a href="tpl-article-longread.php?showTrumpet">Trumpet</a></li>		
							</ul>
							
						</div>
					
						<div class="col-md-3">Paywall</div>
						<div class="col-md-9">
							<ul>
								<li class="red"><a href="#">Pay wall sign - Direct</a></li>
								<li class="red"><a href="#">Pay wall sign - Open</a></li>
							</ul>
						</div>
					
						
						
						
					
				

				<div class="col-md-12">
					<h4>Article Large</h4>
				</div>
				<div class="col-md-3">
					
				</div>
				<div class="col-md-9">
					<ul>
						<li class="orange"><a href="tpl-article-large.php">Article - Large</a></li>
					</ul>
				</div>


				<div class="col-md-12">
					<h4>Sections</h4>
				</div>
				
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<ul>
						<li class="red"><a href="#">Auto (default)</a></li>
						<li class="red"><a href="#">Culture</a></li>
						<li class="red"><a href="#">Politiko</a></li>
						<li class="red"><a href="#">Opinion</a></li>

						<li class="red"><a href="#">Corrections ('Fejl og fakta')</a></li>
						<li class="red"><a href="#">Blog</a></li>
						<li class="red"><a href="#">Topic page</a></li>
						<li class="red"><a href="#">Author overview</a></li>
						<li class="red"><a href="#">Author profile</a></li>
						<li class="red"><a href="#">Search result</a></li>
					</ul>
				</div>

				<div class="col-md-12">
					<h4>Plus</h4>
				</div>
				
				<div class="col-md-3">
					
				</div>
				<div class="col-md-9">
					<ul>
						<li class="red"><a href="#">Front page</a></li>
						<li class="red"><a href="#">Section</a></li>
						<li class="red">Article <a href="#">Locked</a> <a href="#">Un-locked</a></li>
						<li class="red">Buy options <a href="#">Option 1</a> <a href="#">Option 2</a> <a href="#">Option 3</a></li>
						<li class="red"><a href="#">About Plus</a></li>
					</ul>
				</div>

				<div class="col-md-12">
					<h4>Singles</h4>
				</div>
				
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<ul>
						<li class="red"><a href="#">Front-page</a></li>
						<li class="red"><a href="#">Single single-sale</a></li>
					</ul>
				</div>

				<div class="col-md-12">
					<h4>Advertorials</h4>
				</div>
				
				<div class="col-md-3">Section</div>
				<div class="col-md-9">
					<ul>
						<li class="red"><a href="#">Example 1</a> <a href="#">Example 2</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					Article
				</div>
				<div class="col-md-9">
					<ul>
						
						<li class="red"><a href="#">Example 1</a> <a href="#">Example 2</a></li>

					</ul>
				</div>

				<div class="col-md-12">
					<h4>Gallery</h4>
				</div>
				
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<ul>
						<li class="red"><a href="#">Teaser</a></li>
						<li class="red"><a href="#">Overlay</a></li>
						<li class="red"><a href="#">Overlay - last slide</a></li>
						
					</ul>
				</div>

				<div class="col-md-12">
					<h4>Text pages</h4>
				</div>
				
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<ul>
						<li class="red"><a href="#">Contact</a></li>
						<li class="red"><a href="#">Annoncering</a></li>
					</ul>
				</div>

				<div class="col-md-12">
					<h4>Misc</h4>
				</div>
				
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<ul>
						<li class="red"><a href="#">404</a></li>
						<li class="red"><a href="#">Send tip</a></li>
						<li class="red"><a href="#">Article archive</a></li>
						
					
					</ul>
				</div>


				<div class="col-md-12">
					<h4>Email templates</h4>
				</div>
				
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<ul>
						<li class="red"><a href="#">Newsletter</a></li>
						<li class="red"><a href="#">Breaking</a></li>
						<li class="red"><a href="#">Follow author</a></li>
						<li class="red"><a href="#">Follow topic</a></li>
					</ul>
				</div>

				<div class="col-md-12">
					<h4>Documentation</h4>
				</div>
				
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<ul>
						<li class="orange"><a href="doc-list.php">Lists</a></li>
						
					</ul>
				</div>
			


				<div class="col-md-12 text-center" style="padding-top: 4rem;">
					<footer class="small">Bo Skakke - 20 61 67 68 / <a href="mailto:bsk@berlingskemedia.dk">bsk@berlingskemedia.dk</a></footer>
				</div>
			</div>
		</div>
	
	</div>

</div>



<script src="/dist/scripts/main.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-8992845-4', 'auto');
  ga('send', 'pageview');

</script>


</body>
</html>