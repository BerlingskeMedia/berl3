
<header class="site-header site-header-sub">

	<div class="header-sticky">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 hidden-sm-down">
					<nav>
						<div class="left-side">
							<ul class="list-reset list-sm tools-menu-left ">
								<li><a href="#" class="btn-topmenu-menu toggle-offcanvas"><i class="bicon-menu"></i></a></li>
								<li><a href="#" class="btn-topmenu-search"><i class="bicon-search"></i></a></li>
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
							<li><a href="#" class="btn-topmenu- toggle-user-menu">Bo Skakke <i class="bicon-angle-down"></i></a>
								<?php include('includes/user-menu.php'); ?>
							</li>
							<?php else: ?>
							<li><a href="/" class="btn-topmenu-subscription"> Køb abonnement</a></li>
							<li><a href="/" class="btn-topmenu-login"><i class="bicon-user"></i> Log ind</a></li>
							<?php endif; ?>
						</ul>
					</nav>
				</div>
				
				<div class="col-xs-12 hidden-md-up mobile-menu-sub">
					<nav>
						<a href="tpl-frontpage.php" class="site-logo">Berlingske</a>	
						<ul class="list-reset list-sm tools-menu-left ">
							<li><a href="#" class="btn-topmenu-menu toggle-offcanvas"><i class="bicon-menu"></i></a></li>
						</ul>
						<ul class="list-reset list-sm tools-menu-right ">
							<li><a href="#" class="btn-topmenu-search"><i class="bicon-search"></i></a></li>
						</ul>
					</nav>
				</div>
				
			</div>
		</div>
	</div>	
		
	<?php // include('includes/oneliners-php') ?>
			
	<?php if(!$templateLongread): ?>
		<?php include('includes/marketing-header.php'); ?>
	<?php endif; ?>
	
	<?php if(!$templateLongread): ?>
	<div class="header-bottom">
		<div class="container">
			<div class="row">
				
					<div class="col-xs-12 ">
						<nav class="main-navigation">
							<ul>
								<li class="mobile-section-title"><!-- Show section title - only visible on mobile -->
									<a href="#" class="toggle-submenu"><? dummy("text@b-cat") ?> <i class="bicon-angle-down"></i></a>
								</li>
							<?php if(!$siteBusiness): ?>
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
								<?php else: ?>
								<li class="investor"><a href="tpl-section.php">Investor</a></li>
								<li><a href="tpl-section.php">Virksomheder</a></li>
								<li><a href="tpl-section.php">Privatøkonomi</a></li>
								<li><a href="tpl-section.php">Karriere</a></li>
								<li><a href="tpl-section.php">Opinion</a></li>
								<li><a href="tpl-section.php">TV</a></li>
								<li><a href="tpl-section.php">Investor</a></li>
								<?php endif; ?>
							</ul>
							<ul class="mobile-user-nav hidden-md-up">
								<?php if($loggedIn): ?>
									<li><a href="#" class="toggle-user-menu">Bo Skakke <i class="bicon-angle-down"></i></a>
									<?php include('includes/user-menu.php'); ?>
									</li>
								<?php else: ?>
									<li><a href="#">Køb abonnement</a></li>
									<li><a href="#">Log ind <i class="bicon-user"></i></a></li>
								<?php endif; ?>
							</ul>
						</nav>			
					</div>
				
			</div>
		</div>	
	</div>
<?php endif; ?>

</header>

