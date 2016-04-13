<header class="site-header">
	<div class="header-top hidden-md-down">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<nav>
						<?php if($siteBusiness) :?>
						<ul class="pull-left list-reset list-xs">
							<li class="menu-divider"><a href="?well"><i class="bicon-left"></i> Berlingske.dk</a></li>
						</ul>
						<?php else: ?>
						<!-- <ul class="pull-left list-reset list-xs">
						<li class="menu-divider"><a href="?business&well"><i class="bicon-right"></i> Business.dk</a></li>
						<li>
							<?php $stock = rand(0,1); ?>
							<span class="omx-container " >OMX C20
								<span class="<? if ($stock == '1'): ?>stock-green<? else: ?>stock-red<? endif ?>">
									<?php if($stock == '0'){ echo '-';} ?><? dummy("text@stock-change-2") ?>% <? if ($stock == '1'): ?><i class="bicon-up"></i><?php else: ?><i class="bicon-down"></i><?php endif ?></span>
							</span>
						</li>
						</ul> -->
					<?php endif; ?>
						
						<ul class="pull-right list-reset list-bullet list-bullet-not-first list-xs">
							<li><a href="?well">Køb abonnement</a></li>
							<li><a href="?oneliner">E-avisen</a></li>
							<li><a href="?well&oneliner">Nyhedsbreve</a></li>
							<li><a href="?business">Kundeservice</a></li>
							<li><a href="#">Privatlivspolitik</a></li>
						</ul>
					</nav>			
				</div>
			</div>
		</div>	
	</div>
	
	<div class="make-fixed">
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
								<li><a href="/" class=""> Køb abonnement</a></li>
								<li><a href="/" class="site-login"><i class="bicon-user"></i> Log ind</a></li>
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
				<button class="btn-clear pull-right toggle-oneliner"><i class="bicon-cancel"></i></button>
			</article>
		</div>
		<?php endif; ?>
	</div>

	
	<div class="header-bottom ">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 ">
					<nav>
						<?php if(!$siteBusiness): ?>
						<ul class="list-reset list-sm mb-0 list-gray">
							<li><a href="#"><b class="bicon-home"></b> Forside</a></li>
							<!-- <li><a href="?business">Business</a></li> -->
							<li><a href="#">Politiko</a></li>
							<li  class="active"><a href="#">Debat</a></li>
							<li><a href="#">Global</a></li>
							<li><a href="#">Tech</a></li>
							<li><a href="#">Viden</a></li>
							<li><a href="#">Kultur</a></li>
							<li><a href="#">AoK</a></li>
							<li><a href="#">Livsstil</a></li>
							<li><a href="#">Rejseliv</a></li>
							<li><a href="#">Sport</a></li>
							
						</ul>
						<?php else: ?>
						<ul class="list-reset list-sm mb-0 list-gray">
							<li class="active"><a href="#"><b class="bicon-home"></b> Business</a></li>
							<li><a href="#">Investor</a></li>
							<li><a href="#">Virksomheder</a></li>
							<li><a href="#">Privatøkonomi</a></li>
							<li><a href="#">Karriere</a></li>
							<li><a href="#">TV</a></li>
							<li><a href="#">Opinion</a></li>
						</ul>
						<?php endif; ?>
					</nav>			
				</div>
			</div>
		</div>	
	</div>

</header>

