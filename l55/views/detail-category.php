<div class="container">
	<div class="hot-product">
		<h3>Danh sách sản phẩm của danh mục: <?= $cate->name?></h3>
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
		<?php
		 if(count($products) == 0){
		?>
			<div class="text-center">
				<h2>Không có sản phẩm nào cho danh mục này!</h2>
				<a href="index.php" class="btn btn-primary btn-lg">Quay về trang chủ</a>
			</div>
		<?php
		}
		?>

	</div>
</div>
	