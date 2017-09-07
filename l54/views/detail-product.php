<div class="container">
	<div class="col-sm-6">
		<a href="javascript:;" class="thumbnail" title="">
			<img src="<?= $product->image?>" alt="">
		</a>
	</div>
	<div class="col-sm-6">
		<h1><?= $product->product_name ?></h1>
		<p>
			<strong>Gía bán: <strike><?= product_price($product->list_price)?></strike>
			</strong>
		</p>
		<p>
			<strong style="color: red;">Gía khuyến mại: <?= product_price($product->sell_price)?>
			</strong>
		</p>
	</div>

	<div class="col-xs-12">
		<?= $product->product_detail ?>
	</div>


</div>