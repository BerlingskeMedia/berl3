



				
			
			


<div class="row deck">
	
		<div class="grid-col-left col-border-right-xl-up  ">
			
			<?php if($template === 'author'): ?>
			
				<h1 class="section-title-no-border">Profil</h1>
		
			<?php elseif($template === 'searchresult'): ?>

				<h1 class="section-title-no-border">Søgeresultat</h1>		
			
			<?php elseif($template === 'corrections'): ?>

				
					
			<?php elseif($template === 'topic'):  ?>
			
				<h1 class="section-title-no-border">Barack Obama
				<button class="btn btn-xs btn-round btn-follow-author btn-blue">Følg emnet</button>

				</h1>
				<?php include('includes/article/topic-signup.php'); ?>	

			<?php elseif(!$template):  ?>
			
				

			<?php endif; ?>

		</div>
		
		<div class="grid-col-middle col-xs-6 ">

			<?php if($template === 'advertorial'):  ?>
				<h1 class="section-header-advertorial"><img src="http://a.bimg.dk/node-images/619/13/13619168-alm-brand.jpg" alt="" class="advertorial-logo">Giver dig viden med på vejen</h1>

			<?php endif; ?>

			<?php if($template === 'searchresult'): ?>
				<div class="page-description ">
					<!-- <h1 class="article-title">Søgeresultat</h1> -->
					
					<p>Viser 49 resultater for <strong>"Lars Løkke"</strong>.</p>
					<form action="" class=" mb search-oneliner-result">
					<fieldset class="form-group  ">
					    <input type="search" class="form-control" placeholder="Søg på Berlingske.dk" value="Lars Løkke" autocomplete="off">
					    <button class="btn btn-gray "><i class="bicon-search"></i> Søg</button>
					  </fieldset>
					</form>


					
					<button class="btn btn-xs btn-blue">Alle</button>
					<button class="btn btn-xs btn-gray">I dag</button>
					<button class="btn btn-xs btn-gray">I går</button>
					<button class="btn btn-xs btn-gray">Sidste uge</button>
					<button class="btn btn-xs btn-gray">Sidste år</button>
					
				</div>
			<?php endif; ?>

			<?php if($template === 'author'): ?>
				
				<div class="page-description mb ">
					

					<div class="text-center">
						<img src="<? dummy("image/!author@200x200,") ?>" width="" height="" alt="" class="img-round center-block mb author-avatar" />	
						<h1 class="article-title mb-0"><? dummy("text@author") ?></h1>
						<button class="btn btn-xs btn-follow-author btn-blue mb-05">Følg</button>
						<?php include('includes/article/author-signup.php'); ?>	
						<p>Mikael Hjorth er souschef og digital redaktør på Berlingske Business.</p>

						<p>Siden 1996 redigerende på Berlingske - både på print og på nettet - siden 2002 på Business og siden 2006 som jourhavende på Business.dk. </p>

						<p>Fra 2014 digital redaktør og fra august 2015 desuden souschef for Berlingske Business.</p>
							
						<ul class="list-icons">
							<li><i class="bicon-phone"></i> +45 33 75 75 75</li>
							<li><i class="bicon-mail"></i> <a href="mailto:mih@berlingske.dk">mih@berlingske.dk</a></li>
							<li><i class="bicon-twitter"></i> <a href="http://twitter.com/hjorth69">@hjorth69</a></li>
							<li><i class="bicon-facebook"></i> <a href="http://facebook.com/berlingskebusiness">Facebook</a></li>
							<li><i class="bicon-linkedin"></i> <a href="http://linkedin.com/in/mikaelhjorth">LinkedIn</a></li>
						</ul>
					</div>
				</div>
					

			<?php endif; ?>

			<?php if($template === 'corrections'): ?>
				<div class="page-description ">
					
						<h1 class="article-title">Fejl og fakta</h1>
						<p class="">I Berlingske og på Berlingske.dk bestræber vi os dagligt på at give overblik, indsigt og hastig nyhedsopdatering. For os er det en klar målsætning at være præcise samt at undgå fejl og misforståelser.</p>
						<p class="">Troværdighed er en kerneværdi for Berlingske. Laver vi fejl, retter vi dem så hurtigt som muligt, og rettelser vil fremgå både af de enkelte artikler og af denne side.</p>
						<p class="">Kontakt os på <a href="mailto:fejlogfakta2@berlingske.dk">fejlogfakta2@berlingske.dk</a></p>
						<p class="">Læs også <a href="http://www.b.dk/etik" target="_blank">Berlingske Medias regler for journalistisk etik</a></p>
					
				</div>

			<?php endif; ?>

			<?php if($template === 'topic'): ?>

					

				<div class="mb item-teaser">
					<aside class="article-fact-default box-wiki">
						<div class="embed-content clearfix">
							<img src="http://upload.wikimedia.org/wikipedia/commons/thumb/8/8d/President_Barack_Obama.jpg/220px-President_Barack_Obama.jpg" alt="" class="img pull-right">
							<h2 class="aside-header">Wikipedia om Barack Obama</h2>
							<p>Barack Hussein Obama II (født 4. august 1961 i Honolulu på Hawaii i USA) er en amerikansk politiker og USA's 44. og nuværende præsident. Han er den første afroamerikanske præsident i USA's historie.</p>

							<p><a href="#">Læs mere på Wikipedia</a></p>
						</div>
					</aside>
				</div>
			<?php endif; ?>


			<div class="row flex-row teaser-flow">
				<?php if($template === 'author'): ?>
				<div class="col-xs-12">
					<h3 class="section-title-alt">Seneste artikler af <? dummy("text@author") ?>:</h3>
				</div>
				<?php endif; ?>
				
				<div class="col-xs-12">


					
					<?php if($template === 'corrections' || $template === 'author'): ?>
						
						<? while (dumb_luck("3")): ?>

							<?php
								$imgW='320'; 
								$showImg = '1';
								$class = 'teaser-img-right teaser-small item-teaser-bt ';
								$imgRatio = '16:9';
								$imgSrc = '/landscape';
								$showSummary = true;
								$showTrumpet = true;
								$showPaywall = true;
								include('includes/frontpage/teasers/teaser.php') ?>

						<? while (dumb_luck("4")): ?>

							<?php
								$imgW='220'; 
								$showImg = '1';
								$class = 'teaser-img-right  teaser-small  item-teaser-bt ';
								$imgRatio = '16:9';
								$imgSrc = '/landscape';
								$showSummary = true;
								// $category = 'Business.dk';
								include('includes/frontpage/teasers/teaser.php') ?>
						<? endwhile ?>

							<?php
								$imgW='320'; 
								$showImg = '1';
								$class = ' teaser-img-right teaser-sm item-teaser-bt teaser-theme-feature teaser-small' ;
								$imgRatio = '1:1';
								$imgSrc = '/!author';
								$showSummary = true;			
								
								$showAuthor = true;

								include('includes/frontpage/teasers/teaser.php') ?>

						<? endwhile ?>


						<?php if($template !== 'corrections'): ?>
							<? while (dumb_luck("2")): ?>
							<?php
							$imgW='220'; 
							$imgW='220'; 
							$showImg = '1';
							$class = 'teaser-img-right  teaser-small teaser-theme-trade item-teaser-bt ';
							$imgRatio = '16:9';
							$imgSrc = '/landscape';
							$showSummary = true;
							$teaserAd = true;

							include('includes/frontpage/teasers/teaser.php') ?>
							<? endwhile ?>

						<?php endif; ?>



					<?php elseif ($template === 'searchresult'): ?>

						<? while (dumb_luck("10")): ?>

							<?php
							$imgW='220';  
							$showImg = '1';
							$class = 'item-teaser-bt  teaser-img-right teaser-search teaser-small  ';
							$imgRatio = '16:9';
							$imgSrc = '/landscape';
							$showSummary = false;
							$showSearchsummary = true;
							$showPaywall = true;
							$showDate = true;
							include('includes/frontpage/teasers/teaser.php') ?>

						<? endwhile ?>


					<?php elseif ($template === 'advertorial'): ?>
						
						<?php
						$imgW='930';  
						$showImg = '1';
						$class = 'item-teaser  teaser-img-wide teaser-large  ';
						$imgRatio = '16:9';
						$imgSrc = '/landscape';
						$showSummary = true;
						// $teaserPack = rand(1,6);
						$showTrumpet = false;
						$showPaywall = false;
						$showDate = false;
						$sponsorTag = true;
						$teaserLink = 'tpl-article.php?advertorial';
						

						include('includes/frontpage/teasers/teaser.php') ?>

						<? while (dumb_luck("8")): ?>

							
							<?php
							$imgW='220'; 
							$imgW='220'; 
							$showImg = '1';
							$class = 'teaser-img-right  teaser-small item-teaser-bt ';
							$imgRatio = '16:9';
							$imgSrc = '/landscape';
							$showSummary = true;
							$showPaywall = false;
							$showDate = false;
							$sponsorTag = true;
							$teaserLink = 'tpl-article.php?advertorial';

							include('includes/frontpage/teasers/teaser.php') ?>
							

						<? endwhile ?>


					<?php else: ?>

						<?php
						$imgW='930';  
						$showImg = '1';
						$class = 'item-teaser  teaser-img-wide teaser-large  ';
						$imgRatio = '16:9';
						$imgSrc = '/landscape';
						$showSummary = true;
						
						// $teaserPack = rand(1,6);
						$showTrumpet = true;
						$showPaywall = true;
						$showAuthor = true;

						include('includes/frontpage/teasers/teaser.php') ?>
						

						<?php
						$imgW='320'; 
						$showImg = '1';
						$class = 'teaser-img-right teaser-small item-teaser-bt ';
						$imgRatio = '16:9';
						$imgSrc = '/landscape';
						
						$showPaywall = true;
						$showSummary = true;
						$showTrumpet = true;
						include('includes/frontpage/teasers/teaser.php') ?>

						<? while (dumb_luck("4")): ?>
						<?php
							$imgW='220'; 
							$showImg = '1';
							$class = 'teaser-img-right  teaser-small  item-teaser-bt ';
							$imgRatio = '16:9';
							$imgSrc = '/landscape';
							$showSummary = true;
							// $category = 'Business.dk';
							include('includes/frontpage/teasers/teaser.php') ?>
						<? endwhile ?>

						<?php
						$imgW='320'; 
						$showImg = '1';
						$class = ' teaser-img-right teaser-sm item-teaser-bt teaser-theme-feature teaser-small' ;
						$imgRatio = '1:1';
						$imgSrc = '/!author';
						$showSummary = true;			
						
						$showAuthor = true;

						include('includes/frontpage/teasers/teaser.php') ?>

						<?php
						$imgW='220'; 
						$showImg = '1';
						$class = 'teaser-img-right  teaser-small item-teaser-bt ';
						$imgRatio = '16:9';
						$imgSrc = '/landscape';
						$showSummary = true;
						$teaserPack = false;
						include('includes/frontpage/teasers/teaser.php') ?>
						
						<? while (dumb_luck("2")): ?>
						<?php
						$imgW='220'; 
						$imgW='220'; 
						$showImg = '1';
						$class = 'teaser-img-right  teaser-small teaser-theme-trade item-teaser-bt ';
						$imgRatio = '16:9';
						$imgSrc = '/landscape';
						$showSummary = true;
						$teaserAd = true;
						$teaserLink = 'tpl-article.php?advertorial';

						include('includes/frontpage/teasers/teaser.php') ?>
						<? endwhile ?>
					
					<?php endif; ?>
					

				</div>


				<?php if($template === 'searchresult' ): ?>
				<div class="col-xs-12">
					<div class="list-fade mt">
						<button>Hent flere</button>
					</div>
				</div>
				<?php endif; ?>
				

				
				
			</div>
		</div>
	
		

	

	<div class="grid-col-sidebar col-xs-4 col-border-left-lg-up">

			
		<div class="row">
			
			<?php if($template === 'advertorial'): ?>
			<div class="col-lg-12 col-md-6 col-sm-12">
				<?php include('includes/article/right-col-advertorial.php');?>
			
			</div>
			<div class="col-lg-12 col-md-6 col-sm-12">
				<div class=" advertorial-profile">
					<div class="section-title">
						<div class="list-sponsored">
								<span>Sponsoreret indhold:</span>
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

			</div>

			<?php else: ?>
			<div class="col-lg-12 col-md-6 col-sm-12">
					<div class="text-center">
						<div class="demo-banner banner-mobile hidden-md-up mb" style="width: 320px; height: 320px; margin-left: auto; margin-right: auto;">
							Square_marketing
						</div>	
					</div>
					
				

				<div style="width: 300px; height: 600px;" class="demo-banner mb hidden-sm-down">Square_1</div>
			</div>

			<div class="col-lg-12 col-md-6 col-sm-12">
					<?php 
						$sectionClass 	= 'latest-news mb-05';
						$imgRatio 		= '1:1';
						$premium 		= true;
						$showComments 	= true;
						$imgSrc 		= false;
						$imgW 			= '120';
						$showTime 		= false;
						$showImage 		= false; 
						$listClass 		= 'list list-top-lg';
						$listTitle 		= 'Mest læste lige nu';
						$listCount 		= '5';
							
						include('includes/list-news.php'); ?>

						
							<div style="width: 300px; height: 250px;" class="demo-banner hidden-sm-down mb">Square_2 sticky</div>
						
						
						
			</div>

		<?php endif; ?>

			
			

		</div>

			
		
		
		
		

			
	</div>
	
</div>