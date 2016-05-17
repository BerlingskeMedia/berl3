<header class="site-header site-header-front">

	<div class="header-sticky">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<nav>
					<a href="tpl-frontpage.php" class="site-logo">Berlingske</a>
					
					
						<ul class="list-reset list-sm tools-menu-left ">
							<li><a href="#" class="btn-topmenu-menu toggle-offcanvas"><i class="bicon-menu"></i> Indhold</a></li>
							<li><a href="#" class="btn-topmenu-search"><i class="bicon-search"></i> Søg</a></li>
						</ul>
						
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
			</div>
		</div>
	</div>	
		
	<?php // include('includes/oneliners-php') ?>
			
	<?php include('includes/marketing-header.php'); ?>

	<div class="header-bottom">
		<div class="container">
			<div class="row">
				<div class="header-desktop">
					<div class="col-xs-12 ">
						<nav class="main-navigation">
							<ul>
								<li class="active"><a href="#"><b class="bicon-home"></b> Forside</a></li>
								<li><a href="?business">Business</a></li>
								<li><a href="#">Politiko</a></li>
								<li><a href="#">Debat</a></li>
								<li><a href="#">Global</a></li>
								<li><a href="#">Tech</a></li>
								<li><a href="#">Viden</a></li>
								<li><a href="#">Kultur</a></li>
								<li><a href="#">AoK</a></li>
								<li><a href="#">Livsstil</a></li>
								<li><a href="#">Rejseliv</a></li>
								<li><a href="#">Sport</a></li>
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
	</div>

</header>

