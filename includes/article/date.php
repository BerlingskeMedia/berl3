<div class="article-date">
<?php if($showAuthor): ?>
	Skrevet af <? dummy("text@author") ?> &mdash;
<?php endif; ?>
Onsdag d. <? dummy("text@date-long") ?>  kl. <? dummy("text@time") ?>
	<? if (dumb_luck("50%")): ?><span class="updated">&mdash; Opdateret: kl. <? dummy("text@time") ?></span><? endif ?>
</div>

<?php $showAuthor = false; ?>