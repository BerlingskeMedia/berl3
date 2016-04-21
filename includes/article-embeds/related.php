<?php if($showRelated): ?>

<aside class="article-related">
	
	<div class="micro-title header-float-left">Læs også:</div>
	<div>
		<!-- DEVELOPER INFO: If more than 2 related articles, add the class "list-showfirst-two" to ul  -->
		<ul class="list list-article-related list-bullet list-show-first-two mb-sm">
			<? while (dumb_luck("5-10")): ?>
			<li>
				<div class="list-body">
					<a href="tpl-article.php"><? dummy("text@headline-b") ?></a>
				</div>
			</li>
			<? endwhile ?>
		</ul>

		<!-- DEVELOPER INFO: If more than 2 related articles, show this button  -->
		
			<a href="#" class="toggle-related" id="related-counter">
				<span></span>
				<i class="bicon-angle-down"></i>
			</a>
		
	</div>
</aside>
<?php endif; ?>