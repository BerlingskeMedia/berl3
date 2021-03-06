
<?php include('includes/offcanvas-menu.php'); ?>
<header class="site-header">
	<div class="header-sticky">
		<div class="sticky-inner">
			<div class="container">
				<div class="row">
					
					<div class="col-xs-12 hidden-sm-down site-header-sub-desktop">
						<nav>
							<div class="left-side">
								<ul class="list-reset list-sm tools-menu-left">
								
									<li><a href="#" class="topmenu-item-label toggle-offcanvas hidden-label">
											<span class="btn-circle "><b class="icon-menu"></b></span>
											<span class="topmenu-label">Indhold</span>
										</a>
									</li>
									
									<li>
										<a href="#" class="topmenu-item-label toggle-search hidden-label">
											<span class="btn-circle"><i class="bicon-search-1"></i></span>
											<span class="topmenu-label">Søg</span>
										</a>
									</li>
								</ul>
								<a href="tpl-frontpage.php" class="site-logo">Berlingske</a>	
							</div>
							
							<?php if($siteBusiness): ?>
								<a href="tpl-section.php" class="page-title logo-business">Business</a>
							<?php else: ?>
								<a href="tpl-section.php" class="page-title"><? dummy("text@b-cat") ?></a>
							<?php endif; ?>
						
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
				
					<div class="col-xs-12 ">
						<nav class="main-navigation">
							<ul class="section-nav">
								<li class="mobile-section-title"><!-- Show surrent section name (not main section, but sub section) - only visible on mobile --> 
									<a href="#" class="toggle-submenu"><? dummy("text@b-cat") ?> <i class="bicon-angle-down"></i></a>
								</li>
							<?php if(!$siteBusiness): ?>
								<li class="main-section-link hidden-md-up">
									<a href="tpl-section.php">Gå til [Section]</a>
									<!-- <a class="toggle-submenu close-icon"><i class="bicon-cancel"></i></a> -->
								</li>
								<li><a href="tpl-section.php">Anmeldelser</a></li>
								<li><a href="tpl-section.php">Vi anbefaler</a></li>
								<li><a href="tpl-section.php">Musik</a></li>
								<li class="active"><a href="tpl-section.php">Film</a></li>
								<li><a href="tpl-section.php">Bøger</a></li>
								<li><a href="tpl-section.php">Koncerter</a></li>
								<li><a href="tpl-section.php">Scene</a></li>
								<li><a href="tpl-section.php">Kunst</a></li>
								<li><a href="tpl-section.php">Satiren</a></li>
								<li><a href="tpl-section.php">TV</a></li>
								<li class="pull-right menu-cookie hidden-sm-down"><a href="#" class="link-topmenu-cookies "></a></li>
								<?php else: ?>
								<li class="main-section"><a href="tpl-section.php">Gå til <? dummy("text@b-cat") ?></a></li>
								<li><a href="tpl-section.php">Investor</a></li>
								<li><a href="tpl-section.php">Virksomheder</a></li>
								<li class="active"><a href="tpl-section.php">Privatøkonomi</a></li>
								<li><a href="tpl-section.php">Karriere</a></li>
								<li><a href="tpl-section.php">Opinion</a></li>
								<li><a href="tpl-section.php">TV</a></li>
								<li><a href="tpl-section.php">Investor</a></li>
								<?php endif; ?>
							</ul>
							
								<?php if($loggedIn): ?>
									<ul class="mobile-user-nav hidden-md-up pull-right" >
										<li><a href="#" class="toggle-user-menu"><?php dummy("text@author") ?></a>
										<?php include('includes/user-menu.php'); ?></li>
									</ul>

								<?php else: ?>
									<ul class="mobile-user-nav hidden-md-up">
										<li class="link-subscription"><a href="#">Køb abonnement</a></li>
										<li class="link-login "><a href="#" class="toggle-login">Log ind <i class="bicon-user"></i></a></li>
									</ul>
								<?php endif; ?>
							</ul>
						</nav>			
					</div>
				
			</div>
		</div>	
	</div>
<?php endif; ?>



<?php if(!$templateLongread): ?>
	<?php include('includes/marketing-header.php'); ?>
<?php endif; ?>



</header>

