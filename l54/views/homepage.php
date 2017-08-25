<div class="container">
	<div class="hot-product">
		<h3>Sản phẩm mới</h3>
		<?php 
		foreach ($products as $p) {
			?>
			<section class="col-sm-3">
				<a href="detail?id=<?= $p->id?>" class="thumbnail">
			      <img src="<?= $p->image?>" alt="">
			    </a>
				<a href="detail?id=<?= $p->id?>" title="">
					<?= $p->product_name?>
				</a>
				<br>
				<strong>
					Giá bán: <strike><?= 
						product_price($p->list_price)
					?></strike>
				</strong>
				<br>
				<strong>
					Giá khuyến mại: <?= product_price($p->sell_price)?>
				</strong>
			</section>
			<?php
		}
		 ?>

	</div>
		<h3>Sản phẩm nổi bật</h3>
		<?php 
		foreach ($products as $p) {
			?>
			<section class="col-sm-3">
				<a href="detail?id=<?= $p->id?>" class="thumbnail">
			      <img src="<?= $p->image?>" alt="">
			    </a>
				<a href="detail?id=<?= $p->id?>" title="">
					<?= $p->product_name?>
				</a>
				<br>
				<strong>
					Giá bán: <strike><?= $p->list_price?></strike>
				</strong>
				<br>
				<strong>
					Giá khuyến mại: <?= $p->sell_price?>
				</strong>
			</section>
			<?php
		}
		 ?>

	</div>
</div>
	