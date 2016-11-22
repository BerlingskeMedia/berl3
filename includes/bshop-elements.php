<?php if(!$bshopHeader)  {
	$bshopHeader = 'Oplev verden';
} 
?>
<?php if($bshop === 'handpicked'): ?>
<div class="bshop-iframe mb-05">
	<div class="box-bshop box-bshop-1" id="bshop-box">
		<div class="section-title-no-border">
			Håndplukkede oplevelser
			<span><i class="bicon-arrow"></i> <a href="#">Fra Berlingske Shop</a> </span>
		</div>
		<ul class="list-bshop list-bshop-2" id="bshop-list">
			<? while (dumb_luck("6")): ?>
			<li>
				<a href="http://test2-shop-b.bemit.dk/">
					<article>
						<figure>
							<img src="<? dummy("image@620x,16:5") ?>" width="" height="" alt="" />
							<figcaption><? dummy("text@bshop-handpicked") ?></figcaption>
						</figure>
					</article>
				</a>
			</li>
			<? endwhile ?>
		</ul>
	</div>	
</div>
<?php endif; ?>



<?php if($bshop === 'travel' || $showBshopArticle === true): ?>
<div class="bshop-iframe mb-05 ">
	<div class="box-bshop box-bshop-1 <?php if($wideLG === true):  echo 'wide-lg'; endif; ?>" id="bshop-box">
		<div class="section-title-no-border clearfix">
			<?php echo $bshopHeader; ?>
			<span><i class="bicon-arrow"></i> <a href="#"><?php echo $shopLink ?></a> </span>
		</div>
		<ul class="list-bshop list-bshop-3" id="bshop-list">
			<? while (dumb_luck("2")): ?>
			<li class="flex-row">
				<a href="http://test2-shop-b.bemit.dk/">
					<article>
						<figure class="">
							<img src="<? dummy("image/!bshop-travel@620x,1:1") ?>" width="" height="" alt="" />
							<figcaption><? dummy("text@bshop-travel") ?>
								<div class="teaser-price">
								<? if (dumb_luck("50%")): ?><div class="teaser-price-before"><? dummy("text@prices") ?> kr.</div><? endif ?>
								<div class="teaser-price-current"><i class="bicon-arrow"></i> <? dummy("text@prices") ?> kr.</div>
								</div>
							</figcaption>

						</figure>
					</article>
				</a>
			</li>
			<? endwhile ?>
		</ul>
	</div>	
</div>
<?php endif; ?>

<?php if($bshop === 'wine'): ?>

<section class="box-bshop box-bshop-1 bshop-wine">
	<div class="section-title-no-border">
		Vores vinreol <span><a href="#"><i class="bicon-arrow"></i> Tilbud fra Berlingske Shop</a></span>
	</div>
	<div class="bshop-wine-slider">
		<? while (dumb_luck("24")): ?>
		<div class="slide">
			<a href="#">
				<figure>
					<img src="<? dummy("image@40x150,") ?>" width="" height="" alt="" />
					<figcaption>
						<? dummy("text@bshop-wine") ?>
					</figcaption>
				</figure>
				
				<div class="slider-price">
					<i class="bicon-arrow"></i> <? dummy("text@prices") ?>,-
					<? if (dumb_luck("25%")): ?><span class="description">[ Kun få tilbage ]</span><? endif ?>
				</div>

			</a>
		</div>
		
	<? endwhile ?>
	</div>
</section>

<?php endif; ?>

<!-- <div class="text-center mb-05" style="">
<button class="btn btn-gray btn-xs btn-demo-bshop " data-element="bshop-box" data-class="box-bshop box-bshop-1">Box 1</button>
<button class="btn btn-gray btn-xs btn-demo-bshop" data-element="bshop-box" data-class="box-bshop box-bshop-2">Box 2</button>
<button class="btn btn-gray btn-xs btn-demo-bshop " data-element="bshop-list" data-class="list-bshop list-bshop-1">List 1</button>
<button class="btn btn-gray btn-xs btn-demo-bshop " data-element="bshop-list" data-class="list-bshop list-bshop-2">List 2</button>
</div> -->