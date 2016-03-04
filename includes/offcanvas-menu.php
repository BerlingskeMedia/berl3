<div class="offcanvas-menu">

	<div class="menu-topbar">
		<a href="#" class="toggle-offcanvas"><i class="bicon-cancel"></i></a>
	</div>	
	<ul class="list-tabs">
		<li class="active"><a href="#" data-menuid="menu-berlingske">Berlingske</a></li>
		<li><a href="#" data-menuid="menu-business">Business <i class="bicon-chart-line"></i></a></li>
	</ul>
		
	<div class="tab-container">

		<div class="tab active" id="menu-berlingske">
			<ul class="list-menu">
				<? while (dumb_luck("12")): ?>
					<li>
					<a href="tpl-section.php">
						<? dummy("text@item") ?>
					</a>
					</li>
				<? endwhile ?>
			</ul>
		</div>

		<div class="tab " id="menu-business">
			<ul class="list-menu">
				<? while (dumb_luck("12")): ?>
					<li>
					<a href="tpl-section.php">
						<? dummy("text@item") ?>
					</a>
					</li>
				<? endwhile ?>
			</ul>
		</div>

	</div><!-- tab-container -->

	<div class="colophone small hidden">
			<ul>
				<li>
					<a href="#">Om Berlingske</a>
				</li>
				<li>
					<a href="#">Tip redaktionen</a>
				</li>
				<li>
					<a href="#">E-avisen</a>
				</li>
				<li>
					<a href="#">Kundeservice</a>
				</li>
				<li>
					<a href="#">Kontakt</a>
				</li>
				<li>
					<a href="#">Vores historie</a>
				</li>

			</ul>
		
	</div>
</div><!-- offcanvas -->