<div class="offcanvas-menu">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<nav class="sitemap">
					<ul class="sitemap-parent">
						<? while (dumb_luck("9")): ?>
						<li>
							<a href="tpl-section.php" class="sitemap-parent-link"><? dummy("text@category") ?></a>
							<ul class="sitemap-child">
								<? while (dumb_luck("3-9")): ?>
								<li><a href="tpl-section.php"><? dummy("text@category") ?></a></li>
								<? endwhile ?>
							</ul>
						</li>
						<? endwhile ?>
					</ul>
					<ul class="sitemap-small">
						
						<li>
							<a href="#">Kontakt</a>
						</li>
						<li>
							<a href="#">Kundeservice</a>
						</li>
						<li>
							<a href="#">Køb abonnement</a>
						</li>
						<li>
							<a href="#">Item</a>
						</li>
						<li class="cookie-link">
							<a href="#">Privatlivspolitik</a>
						</li>
						
					</ul>
				</nav>		
			</div>
		</div>
	</div>
	

	
</div><!-- offcanvas --> 