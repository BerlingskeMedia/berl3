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
	.strike a {
		text-decoration: line-through;
	}
</style>


<div class="container">
	<div class="row">
		
		
		<div class="col-md-8 col-md-offset-2">
			<div class="row">
					
				<div class="col-md-12  border-bottom mb pb" style="padding-top: 4rem" >
					<a href="/" class="site-logo" style="font-size: 3rem;" >Berlingske</a>
				</div>

				<div class="col-md-9 col-md-offset-3">
					
					<div style="margin-bottom: 1rem;">
						<span class="span-red">Not started</span>
						<span class="span-orange">In progress...</span>
						<span class="span-green">OK</span>

					</div>
				</div>
				
				<div class="col-md-12">
					<p><strong>iPad Hack:</strong> Add "?ipad" to url to view iPad viewport hack</p>
				</div>

				<div class="col-md-12">
					<h4>Header / Footer / User pages</h4>
				</div>
				
				<div class="col-md-3">
					Header
				</div>
				<div class="col-md-9">
					<ul>
						<li class="green"><a href="tpl-frontpage.php">Static pages</a> - <a href="tpl-frontpage.php?loggedIn">(Logged in)</a></li>
						<li class="green"><a href="tpl-article.php">Dynamic pages except longreads</a> - <a href="tpl-article.php?loggedIn">(Logged in)</a></li>
						<li class="green"><a href="tpl-article-longread.php">Longreads</a> - <a href="tpl-article-longread.php?loggedIn">(Logged in)</a></li>
						<li class="green"><a href="tpl-frontpage.php">Off-canvas menu</a></a></li>
					</ul>
				</div>

				

				<div class="col-md-3">
					Footer
				</div>
				<div class="col-md-9">
					<ul>
						
						<li class="green"><a href="doc-footer.php">Footer</a></li>
					</ul>
				</div>

				<div class="col-md-3">
					User
				</div>
				<div class="col-md-9">
					<ul>
						<li class="orange"><a href="tpl-userprofile.php">User profile page</a></li>
					</ul>
				</div>

				<div class="col-md-12">
					<h4>Front page</h4>
				</div>

				<div class="col-md-3">Variations</div>
			
				<div class="col-md-9">
					<ul>
						<li class="green"><a href="tpl-frontpage.php">Default</a></li>
						<!-- <li class="orange"><a href="tpl-frontpage.php?deck=4&amp;topSM">Top SM</a> </li> -->
						<li class="green"><a href="tpl-frontpage.php?topMD">Top MD</a> </li>
						<li class="green"><a href="tpl-frontpage.php?topLG">Top LG</a></li>
						<li class="green"><a href="tpl-frontpage.php?topXL">Top XL</a></li>
					</ul>
				</div>


				<div class="col-md-3">
					Decks
				</div>
				<div class="col-md-9">
					<ul>
						<!-- <li class="orange"><a href="doc-frontpage-decks.php?deck=5">Top deck</a></li>
						<li class="orange"><a href="doc-frontpage-decks.php?deck=6">Flow deck</a></li> -->
						<li class="green"><a href="doc-frontpage-decks.php?deck=-longreads-3">Longreads</a></li>
						<li class="green"><a href="doc-frontpage-decks.php?deck=-debate-2">Debate</a></li>
						<li class="green"><a href="doc-frontpage-decks.php?deck=-debate-3">Puls</a></li>
						<li class="green"><a href="doc-frontpage-decks.php?deck=-image-2">Image of the day</a></li>
						<li class="green"><a href="doc-frontpage-decks.php?deck=-consumersales-2">Consumersales</a></li>
						<li class="green">Theme: <a href="doc-frontpage-decks.php?deck=-theme-2&theme=roskilde">Roskilde</a>, <a href="doc-frontpage-decks.php?deck=-theme-2&theme=cannes">Cannes</a>, <a href="doc-frontpage-decks.php?deck=-theme-2&theme=berlinalen">Berlinalen</a></li>
						<li class="green"><a href="doc-frontpage-decks.php?deck=-towers-2">Towers</a></li>
						<li class="green"><a href="doc-frontpage-decks.php?deck=-debate-4">Houmor</a></li>
					</ul>
				</div>

				<div class="col-md-3">
									Documentation
								</div>
								<div class="col-md-9">
									<ul>
									<li class="green"><a href="doc-teasers.php">Teaser types</a></li>
									<li class="green"><a href="doc-teaserpacks.php">Teaser packs</a></li>
									<li class="green"><a href="doc-teasertags.php">Teaser tags</a></li>
									<li class="green"><a href="tpl-frontpage.php?teaserIcon=video">Icon video</a></li>
									<li class="green"><a href="tpl-frontpage.php?teaserIcon=gallery">Icon gallery</a></li>
									</ul>
								</div>

				

				

				<!-- <div class="col-md-3">Oneliners</div>
				<div class="col-md-9">
					<ul>
						<li class="red"><a href="#">Breaking</a></li>
						<li class="red"><a href="#">Live</a></li>
						<li class="red"><a href="#">Comming up</a></li>
					</ul>
				</div> -->
			
				
				<div class="col-md-12">
					<h4>Article</h4>
				</div>
				
				<div class="col-md-3">Images</div>
				<div class="col-md-9">
					
					<ul>
						<li class="green"><a href="tpl-article.php?imgSize=1">Large image (default)</a></li>
						<li class="green"><a href="tpl-article.php?imgSize=0">No image</a> </li>
						<li class="green"><a href="tpl-article.php?imgSize=2">Small image</a></li>
						<li class="green"><a href="tpl-article.php?imgSize=3">Gallery - main image only</a></li>
						<li class="green"><a href="tpl-article.php?imgSize=4">Gallery - including embedded images</a></li>
						<li class="green"><a href="tpl-article.php?imgSize=5">Video</a></li>
						
					</ul>
					</div>
					
					<div class="col-md-3">Header</div>

					<div class="col-md-9">
						<ul>
							<li class="green"><a href="tpl-article.php?showTrumpet">Trumpet</a></li>
							<li class="green"><a href="tpl-article.php?showRating">Rating</a></li>
						</ul>
					</div>

				<div class="col-md-3">Embeds</div>
				<div class="col-md-9">

					<ul>
						<li class="green"><a href="tpl-article.php?showCustom&amp;imgSize=1">Custom embed</a></li>
						<li class="green"><a href="tpl-article.php?showTweet">Tweet</a></li>
						<li class="green"><a href="tpl-article.php?showQuote">Quote</a></li>
						<li class="green"><a href="tpl-article.php?showFactDefault">Factbox - Default</a></li>
						<li class="green"><a href="tpl-article.php?showFactEmbedded">Factbox - Embedded</a></li>
						<li class="green"><a href="tpl-article.php?showLink">Embedded links</a></li>
						<li class="green"><a href="tpl-article.php?download">Download file</a></li>
					</ul>
					</div>

					

					<div class="col-md-3">Tags</div>
					
					<div class="col-md-9">
						<ul>
							<li class="green"><a href="tpl-article.php?event=breaking">Breaking</a> </li>
							<li class="green"><a href="tpl-article.php?event=live">Live</a> </li>
							<li class="green"><a href="tpl-article.php?event=update">To be updated</a> </li>
							<li class="green"><a href="tpl-article.php?event=now">Now</a> </li>
							<li class="green"><a href="tpl-article.php?event=topstory">Topstory</a> </li>
							<li class="green"><a href="tpl-article.php?event=comingup">Coming up</a> </li>
						</ul>
					</div>
					<div class="col-md-3">
						Partner articles 
					</div>
					<div class="col-md-9">
						<ul>
							<li class="green"><a href="tpl-article.php?partner=videnskabdk">'Videnskab.dk'</a></li>
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
								<li class="green"><a href="tpl-article-longread.php">Default</a></li>
								<li class="green"><a href="tpl-article-longread.php?imgSize=4">Embedded images</a></li>
								<li class="green"><a href="tpl-article-longread.php?showCustom&amp;imgSize=1">Custom embed</a></li>
								<li class="green"><a href="tpl-article-longread.php?showTweet">Tweet embed</a></li>
								<li class="green"><a href="tpl-article-longread.php?showQuote">Quote</a></li>	
								<li class="green"><a href="tpl-article-longread.php?showFactDefault">Factbox - Default</a></li>
								<li class="green"><a href="tpl-article-longread.php?showFactEmbedded">Factbox - Embedded</a></li>
								<!-- <li class="green strike"><a href="tpl-article-longread.php?showTheme">Theme</a></li>
								<li class="green strike"><a href="tpl-article-longread.php?showTimeline">Timeline</a></li> -->
								<li class="green"><a href="tpl-article-longread.php?showLink">Embedded links</a></li>	
								<li class="green"><a href="tpl-article-longread.php?showRating">Rating</a></li>
							</ul>
							
						</div>
				
						<div class="col-md-3">
							Header
						</div>
						<div class="col-md-9">
							<ul>
								<li class="green"><a href="tpl-article-longread.php?showTrumpet">Trumpet</a></li>		
							</ul>
						</div>
						<div class="col-md-3">Tags</div>
						
						<div class="col-md-9">
							<ul>
								<li class="green"><a href="tpl-article-longread.php?event=breaking">Breaking</a> </li>
								<li class="green"><a href="tpl-article-longread.php?event=live">Live</a> </li>
								<li class="green"><a href="tpl-article-longread.php?event=update">To be updated</a> </li>
								<li class="green"><a href="tpl-article-longread.php?event=now">Now</a> </li>
								<li class="green"><a href="tpl-article-longread.php?event=topstory">Topstory</a> </li>
								<li class="green"><a href="tpl-article-longread.php?event=comingup">Coming up</a> </li>
							</ul>
						</div>
					
						
						
						
						
						
				

				

				<div class="col-md-12">
					<h4>Article Large</h4>
				</div>
				<div class="col-md-3">
					
				</div>
				<div class="col-md-9">
					<ul>
						<li class="green"><a href="tpl-article-large.php">Article - Large</a></li>
					</ul>
				</div>

				<div class="col-md-12">
					<h4>Paywall</h4>
				</div>
				<div class="col-md-3">Article</div>
				<div class="col-md-9">
					<ul>
						<li class="orange"><a href="tpl-article.php?paywall=soft">Soft</a></li>
						<li class="orange"><a href="tpl-article.php?paywall=hard">Hard</a></li>
						
					</ul>
				</div>
				<div class="col-md-3">Video</div>
				<div class="col-md-9">
					<ul>
						
						<li class="orange"><a href="tpl-article.php?imgSize=5&amp;paywall=video-soft">Soft</a></li>
						<li class="orange"><a href="tpl-article.php?imgSize=5&amp;paywall=video-hard">Hard</a></li>
					</ul>
				</div>
				<div class="col-md-3">Longread</div>
				<div class="col-md-9">
					<ul>
						<li class="orange"><a href="tpl-article-longread.php?paywall=soft">Soft</a></li>
						<li class="orange"><a href="tpl-article-longread.php?paywall=hard">Hard</a></li>
					</ul>
				</div>

				<div class="col-md-12">
					<h4>Adblocker blocker notice</h4>
				</div>
				<div class="col-md-3">
					
				</div>
				<div class="col-md-9">
					<ul>
						<li class="green"><a href="tpl-article.php?ab=hard-1">Hard</a></li>
						<!-- <li class="red"><a href="tpl-article.php?ab=hard-2">Hard - ver. 2</a></li> -->
						<li class="green"><a href="tpl-article.php?ab=soft">Soft</a></li>
						<li><em>variable "ab=[hard-1, hard-2, soft]" also works on longreads and article-large</em></li>
					</ul>
				</div>


				<div class="col-md-12">
					<h4>Sections</h4>
				</div>
				
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<ul>
						<li class="green"><a href="tpl-section.php">Auto (default)</a></li>
						<li class="red"><a href="#">Culture</a></li>
						<li class="red"><a href="#">Politiko</a></li>
						<li class="red"><a href="#">Opinion</a></li>

						<li class="green"><a href="tpl-section.php?template=corrections">Corrections ('Fejl og fakta')</a></li>
						<li class="red"><a href="#">Blog</a></li>
						<li class="green"><a href="tpl-section.php?template=topic">Topic page</a></li>
						<li class="green"><a href="tpl-author-overview.php">Author overview</a></li>
						<li class="green"><a href="tpl-section.php?template=author">Author profile</a></li>
						<li class="green"><a href="tpl-section.php?template=searchresult">Search result</a></li>
					</ul>
				</div>

				<!-- <div class="col-md-12">
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
				</div> -->

				<div class="col-md-12">
					<h4>Advertorials</h4>
				</div>
				
				
				<div class="col-md-3">
					Advertorial
				</div>
				<div class="col-md-9">
					<ul>

						<li class="green"><a href="tpl-section.php?template=advertorial">Section</a></li>
						<li class="green"><a href="tpl-article.php?advertorial">Article default</a></li>
						<li class="green"><a href="tpl-article-longread.php?advertorial">Article Longread</a></li>

					</ul>
				</div>

				

				<!-- <div class="col-md-12">
					<h4>Gallery</h4>
				</div>
				
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<ul>
						<li class="red"><a href="#">Teaser</a></li>
						<li class="red"><a href="#">Overlay</a></li>
						<li class="red"><a href="#">Overlay - last slide</a></li>
						
					</ul>
				</div> -->

				<div class="col-md-12">
					<h4>Text pages</h4>
				</div>
				
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<ul>
						<li class="orange"><a href="tpl-text.php?page=adblocker">Adblocker removal</a></li>
						<li class="orange"><a href="tpl-text.php?page=contact">Contact</a></li>
						<li class="orange"><a href="tpl-text.php?page=ethics">Ethics</a></li>
						<li class="red"><a href="#">Annoncering</a></li>
					</ul>
				</div>

				<div class="col-md-12">
					<h4>Misc</h4>
				</div>
				
				<div class="col-md-3"></div>
				<div class="col-md-9">
					<ul>
						<li class="green"><a href="tpl-404.php">404</a></li>
						<li class="green"><a href="#">Send tip</a></li>
						<li class="orange"><a href="tpl-archive.php">Article archive</a></li>
						
					
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
						<li class="green"><a href="doc-list.php">Lists</a></li>
						<li class="orange"><a href="doc-forms.php">Form messages</a></li>
						
					</ul>
				</div>
			


				<div class="col-md-12 text-center" style="padding-top: 4rem;">
					<footer class="small">Bo Skakke - 20 61 67 68 / <a href="mailto:bsk@berlingskemedia.dk">bsk@berlingskemedia.dk</a></footer>
				</div>
			</div>
		</div>
	
	</div>

</div>

<!-- <li class="green strike"><a href="tpl-article.php?blog">Blog</a></li>
<li class="green strike"><a href="tpl-article.php?essay">Kronikken</a></li>
<li class="green strike"><a href="tpl-article.php?editorial">Editorial</a></li> 
<li class="green strike"><a href="tpl-article.php?showGallery">Embedded gallery</a></li>
-->


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