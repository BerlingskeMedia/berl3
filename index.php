<? require_once("../dummy/dummy.php") ?>

<?php 
	$showWell = rand(1,1);
?>
<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Frontpaper</title>
	<link rel="stylesheet" href="/dist/styles/main.css">
</head>
<body>


<header class="site-header">
	<div class="header-top hidden-md-down">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<nav>
						<ul class="pull-right list-reset list-xs">
							<li><a href="#">E-avisen</a></li>
							<li><a href="#">Nyhedsbreve</a></li>
							<li><a href="#">Kundeservice</a></li>
							<li><a href="#">Privatlivspolitik</a></li>
						</ul>
					</nav>			
				</div>
			</div>
		</div>	
	</div>
	<div class="header-middle text-center">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<a href="tpl-frontpage.php" class="site-logo">Berlingske</a>
					<nav class="tools-menu">
						<ul class="list-reset list-xs">
							<li><a href="#"><i class="bicon-search"></i> Søg</a></li>
							<li><a href="#"><i class="bicon-user"></i> Log ind</a></li>
							
						</ul>
					</nav>			
				</div>
			</div>
		</div>
	</div>
	<div class="header-bottom">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<nav>
						<ul class="list-reset list-sm">
							<li class="active"><a href="#">Nyheder</a></li>
							<li><a href="#">Politik</a></li>
							<li><a href="#">Udland</a></li>
							<li><a href="#">Kultur</a></li>
							<li><a href="#">Opinion</a></li>
							<li><a href="#">Business <i class="bicon-chart-line"></i></a></li>
						</ul>
					</nav>			
				</div>
			</div>
		</div>	
	</div>
</header>

<div class="site-wrapper">

	<div class="bg-banner"></div>
	<div class="topbanner demo-banner" style="width: 930px; height: 180px;"></div>


<div class="container main-content">
	<?php if($showWell == '1'): ?>
		<div class="row well-container">
			<div class="col-md-12">
				<?php include('includes/teaser-well.php'); ?>
			</div>
		</div>
	
	<?php endif; ?>

	<div class="row deck">

		

		<div class="col-lg-8 col-md-12 col-primary">
			<div class="rw">
				<div class="col-deck-label">
					<span class="section-title">
						Tophistorier
					</span>
					<span class="section-date">
						Man d. 28. feb 2015
					</span>
				</div>
				<div class="col-deck-content">
					
					<div class="r ow">
						<?php if($showWell == '0'): ?>
							<div class="col-lg-12">
								<?php

									$imgW='680'; 
									$showImg = '1';
									$class = 'teaser-bg fs20 link-fff';
									include('includes/teaser.php') ?>
								
							</div>
						<?php endif; ?>
					</div>
					

					<div class="r ow">
						<div class="col-lg-8 col-md-8">
							<? while (dumb_luck("6")): ?>
							<?php 
								$imgW='160'; 
								$showImg = '1';
								$class = 'teaser-float-left fs12 bb';
								$imgRatio = '1:1';
								include('includes/teaser.php') ?>
							<? endwhile ?>
						</div>
						<div class="col-lg-4 col-md-4">
							
							<?php 
								$imgW='420'; 
								// $class = 'fs10 teaser-bg teaser-bg-narrow teaser-font-alt';
								$class = 'fs10  teaser-bg teaser-bg-narrow ';
								$showImg = '1';
								$imgRatio = '4:5';
								include('includes/teaser.php') ?>

							<? while (dumb_luck("4")): ?>
							<?php 
								$imgW='420'; 
								// $class = 'fs10 teaser-bg teaser-bg-narrow teaser-font-alt';
								$class = 'fs10 bb ';
								$showImg = '1';
								$imgRatio = '16:9';
								include('includes/teaser.php') ?>
							<? endwhile ?>
						</div>
					</div>
				</div>
				
			</div>
		</div>

		<div class="col-lg-4 col-md-12 sidebar">

			<div class="banner">
				<div style="width: 300px; height: 250px;" class="demo-banner"></div>
			</div>
			<section class="latest-news module">
				
				<h2 class="list-title">Seneste nyt</h2>

				<ul class="list-reset list-news">
					<? while (dumb_luck("5")): ?>
					<li>
						<div class="list-body">
							<a href="#"><? dummy("text@headline-b2") ?></a>
						</div>
					</li>
					<? endwhile ?>
				</ul>

			</section>
		</div>
		
	</div>

	<div class="deck">
		<div class="col-deck-label">
			<span class="section-title">
				Opinion
			</span>
			<span class="section-link">
				<a href="tpl-section.php">Se alle <i class="bicon-right"></i></a>
			</span>
		</div>
		<div class="col-deck-content">
			<div class="row">
			<? while (dumb_luck("4")): ?>
			<div class="col-lg-3 col-md-3">
				<?php 
					$imgW='420'; 
					$class = 'fs12';
					$showImg = '1';
					$imgRatio = '1:1';
					include('includes/teaser-cat.php') ?>
			</div>
			<?php endwhile; ?>
			</div>
		</div>
	</div>

	<div class="deck">
		<div class="col-deck-label">
			<span class="section-title">
				Verden i billeder
			</span>
			<span class="section-link">
				<a href="tpl-section.php">Se flere <i class="bicon-right"></i></a>
			</span>
		</div>
		<div class="col-deck-content">
			
			<img src="<? dummy("image@1200x,16:7") ?>" width="" height="" alt="" />

		</div>
	</div>
	
</div>
</div><!-- site-wrapper -->

<br><br><br><br><br><br>

<script src="/dist/scripts/main.js"></script>




</body>
</html>