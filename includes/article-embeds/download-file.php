<?php if($downloadFile): ?>
<!-- Download a PDF-file --> 
<div class="embeddedd-file">
	<p>
		<small>Download</small>
		<i class="bicon-doc-text"></i>
		<a href="LINK TO PDF-FILE" target="_blank" >
			 <? dummy("text@headline") ?>
		</a>
	</p>
</div>

<!-- Download a NON-PDF-file (doc, zip, etc...) --> 
<div class="embeddedd-file">
	<p>
		<small>Download</small>
		<i class="bicon-download-alt"></i>
		<a href="LINK TO NON-PDF-FILE" target="_blank" >
			 <? dummy("text@headline") ?>
		</a>
	</p>
</div>
<?php endif; ?>