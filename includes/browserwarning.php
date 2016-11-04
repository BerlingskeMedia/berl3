<?php if($browserwarning): ?>
<!-- Tell Google not index this browser warning with the googleoff tag: 
https://www.google.com/support/enterprise/static/gsa/docs/admin/70/gsa_doc_set/admin_crawl/preparing.html
-->

<!--googleoff: index-->
<div class="browser-warning">
	<i class="bicon-cancel close-warning"></i>
	<div class="container">
		<div class="col-xs-12">
			<div class="browser-warning-header">Din browser er forældet.</div>
			<div class="browser-warning-body">Tak fordi du besøger Berlingske.dk. Vi har opdaget, at din browser er forældet og ikke længere bliver understøttet. <a href="https://browser-update.org/update.html" target="_blank" rel="nofollow">Du bedes opdatere den</a> -  eller du kan besøge os med din tablet eller mobil.</div>
		</div>
	</div>
</div>
<!--googleon: index-->
<?php endif; ?>