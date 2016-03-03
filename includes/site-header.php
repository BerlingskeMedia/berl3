<header class="site-header">
	<div class="header-top hidden-md-down">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<nav>
						<ul class="pull-right list-reset list-bullet list-bullet-not-first list-xs">
							<li><a href="#">Køb abonnement</a></li>
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
	
	<div class="header-middle text-center ">

		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<nav class="tools-menu-left">
						<ul class="list-reset list-sm">
							<li><a href="#" class="site-menu toggle-offcanvas"><i class="bicon-menu"></i> Indhold</a></li>
							<li><a href="#" class="site-search"><i class="bicon-search"></i> Søg</a></li>
						</ul>
					</nav>
					<a href="tpl-frontpage.php" class="site-logo">Berlingske</a>
					<nav class="tools-menu-right">
						<ul class="list-reset list-sm">
							
							<li><a href="#" class="site-login"><i class="bicon-user"></i> Log ind</a></li>
							
						</ul>
					</nav>			
				</div>
			</div>
		</div>
	</div>

	<?php if($showOneliner): ?>
	<div class="header-oneliner clearfix">
		<article class="teaser-oneliner">
			<h2 class="header">
				<a href="tpl-article.php"><strong>BREAKING &mdash;</strong> <? dummy("text@headline-b2") ?></a>
			</h2>
		</article>
	</div>
	<?php endif; ?>
	<div class="header-bottom ">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<nav>
						<ul class="list-reset list-sm mb-0">
							<li><a href="#">Nyheder</a></li>
							<li><a href="#">Politik</a></li>
							<li><a href="#">Global</a></li>
							<li><a href="#">Tech</a></li>
							<li><a href="#">Livsstil</a></li>
							<li><a href="#">Rejseliv</a></li>
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

