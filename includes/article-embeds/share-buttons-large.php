<div class="mb large-share-buttons clearfix">
	<a href="#" class="btn  btn-block btn-round btn-facebook"><i class="bicon-facebook"></i> <span class="hidden-sm-down">Del via Facebook</span> <span class="hidden-md-up">Del</span> </a>
	<a href="#" class="btn  btn-block btn-twitter btn-round"><i class="bicon-twitter"></i> <span class="hidden-sm-down">Del via Twitter</span> <span class="hidden-md-up">Tweet</span></a>
	<?php if(!$hideComments): ?>
	<a class="btn  btn-gray btn-block btn-round" href="#article-comments"><i class="bicon-comment-inv-alt2"></i> <? dummy("text@number") ?></a>
	<?php endif; ?>
</div>
<?php $hideComments = false; ?>