<div class="offcanvas-menu">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<nav class="sitemap">
					<ul class="sitemap-parent">
						<? while (dumb_luck("7")): ?>
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
						<? while (dumb_luck("2-5")): ?>
						<li>
							<a href="#"><? dummy("text@category") ?></a>
						</li>
						<? endwhile ?>
					</ul>
				</nav>		
			</div>
		</div>
	</div>
	

	
</div><!-- offcanvas --> 