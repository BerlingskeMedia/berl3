<?php include('includes/offcanvas-menu.php'); ?>
<header class="site-header">

	<div class="header-sticky">
		<div class="sticky-inner">
			<div class="container">
				<div class="row">
					
					<div class="col-xs-12 hidden-sm-down site-header-front-desktop">
						<nav>
						<a href="tpl-frontpage.php" class="site-logo">Berlingske</a>
						
						

							<ul class="list-reset list-sm tools-menu-left">
								
								<li><a href="#" class="topmenu-item-label toggle-offcanvas">
										<span class="btn-circle "><b class="icon-menu"></b></span>
										<span class="topmenu-label">Indhold</span>
									</a>
								</li>
								
								<li>
									<a href="#" class="topmenu-item-label toggle-search">
										<span class="btn-circle"><i class="bicon-search-1"></i></span>
										<span class="topmenu-label">Søg</span>
									</a>
								</li>




							</ul>
							
							<ul class="list-reset list-sm tools-menu-right ">
								
								<?php if($loggedIn): ?>
									<li><a href="#" class="topmenu-item-label toggle-user-menu">
											<span class="btn-circle "><b class="bicon-user"></b></span>
											<span class="topmenu-label"><? dummy("text@author") ?></span>
										</a>
										<?php include('includes/user-menu.php'); ?>
									</li>
								<?php else: ?>
									<li><a href="/" class="topmenu-item"> Køb abonnement</a></li>
									<li><a href="#" class="topmenu-item-label toggle-login">
											<span class="btn-circle "><b class="bicon-user"></b></span>
											<span class="topmenu-label">Log ind</span>
										</a>
									</li>

								<?php endif; ?>
							</ul>
						</nav>
					</div>

					<div class="col-xs-12 hidden-md-up site-header-mobile">
						<nav>
							<a href="tpl-frontpage.php" class="site-logo">Berlingske</a>	

							<ul class="list-reset list-sm tools-menu-left">
								<li><a href="#" class="topmenu-item-label toggle-offcanvas">
										<span class="btn-circle "><b class="icon-menu"></b></span>
										<span class="topmenu-label">Indhold</span>
									</a>
								</li>
							</ul>

							<ul class="list-reset list-sm tools-menu-right ">
								<li>
									<a href="#" class="topmenu-item-label toggle-search">
										<span class="btn-circle"><i class="bicon-search-1"></i></span>
										<span class="topmenu-label">Søg</span>
									</a>
								</li>
							</ul>

						</nav>
					</div>

					
					

				</div>
			</div>
			
		</div>
		<?php include('includes/search.php'); ?>

	</div>	
		
	<?php // include('includes/oneliners-php') ?>

	<?php if(!$templateLongread): ?>
	<div class="header-bottom">
		<div class="container">
			<div class="row">
				<div class="header-desktop">
					<div class="col-xs-12 ">
						<nav class="main-navigation">
							<ul class="section-nav">
								
								<li><a href="?business">Business</a></li>
								<li><a href="tpl-section.php">Politiko</a></li>
								<li><a href="tpl-section.php">Debat</a></li>
								<li><a href="tpl-section.php">Global</a></li>
								<li><a href="tpl-section.php">Tech</a></li>
								<!-- <li><a href="#">Viden</a></li>
								<li><a href="#">Kultur</a></li> -->
								<li><a href="tpl-section.php">AoK</a></li>
								<li><a href="tpl-section.php">Livsstil</a></li>
								<li><a href="tpl-section.php">Rejseliv</a></li>
								<li><a href="tpl-section.php">Sport</a></li>
								<li class="menu-shop"><a href="http://shop.berlingske.dk">Shop</a></li>
								<li class="pull-right menu-cookie hidden-sm-down"><a href="#" class="link-topmenu-cookies "></a></li>
							</ul>
							<?php if($loggedIn): ?>
								<ul class="mobile-user-nav hidden-md-up pull-right" >
									<li><a href="#" class="toggle-user-menu"><?php dummy("text@author") ?></a>
									<?php include('includes/user-menu.php'); ?></li>
								</ul>

							<?php else: ?>
								<ul class="mobile-user-nav hidden-md-up">
									<li class="link-subscription"><a href="#">Køb abonnement</a></li>
									<li class="link-login"><a href="#" class="toggle-login">Log ind <i class="bicon-user"></i></a></li>
								</ul>
							<?php endif; ?>
						</nav>			
					</div>
				</div>
			</div>
		</div>	
	</div>

	
	

	<?php include('includes/marketing-header.php'); ?>
<?php endif; ?>


</header>

