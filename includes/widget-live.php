<div class="widget-live-stream widget">
	<header class="widget-header">
		<h4>Live</h4>
	</header>
	<ul class="list-live-stream">
		<? while (dumb_luck("2")): ?>
		<li>
			<h2><time><? dummy("text@time") ?></time>
				<? dummy("text@headline") ?>
			</h2>
		</li>
		<? endwhile ?>
		<li>
			<h2><time><? dummy("text@time") ?></time>
				<? dummy("text@teaser") ?>
			</h2>
		</li>
	</ul>
	<footer>
		<button class="btn">Gå til Live <i class="bicon-right live"></i></button>
	</footer>
</div>