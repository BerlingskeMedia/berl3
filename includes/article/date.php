<div class="article-date">
<?php if($showAuthor): ?>
	Skrevet af <? dummy("text@author") ?> &mdash;
<?php endif; ?>
Onsdag d. <? dummy("text@date-long") ?>  kl. <? dummy("text@time") ?>
	<? if (dumb_luck("50%")): ?><span class="updated">&mdash; Opdateret: kl. <? dummy("text@time") ?></span><? endif ?>
	<span class="article-comments-top"> <span class="hidden-sm-down">&mdash;</span> <a href="#" class="scroll-to-comments"><i class="bicon-comment-inv-alt2"></i> <? dummy("text@number") ?> kommentarer</a></span>
</div>

<?php $showAuthor = false; ?>