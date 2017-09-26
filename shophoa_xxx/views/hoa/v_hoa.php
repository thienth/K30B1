<h2><?php echo $title ?></h2>
<?php foreach ($data as $h): ?>
	<!-- Begin Sản phẩm hoa -->
	<div class="product_box">
	    <a href="#"><img src="public/images/hoa/<?php echo $h->Hinh ?>" alt="floral set 1" width="165px" height="165px" /></a>
	    <h3><?php echo $h->TenHoa ?></h3>
	    <p class="product_price"><?php echo $h->Gia ?>đ/bó </p>
	    <p class="add_to_cart"><a href="#">Chi tiết</a> <a href="#">Mua hàng</a></p>
	</div>
	<!-- End Sản phẩm hoa -->
<?php endforeach ?>


<!-- Phân trang-->
<div style="clear:both" class="div_phan_trang">
	<?php for ($i=1; $i <= $soTrang ; $i++) { ?>
		<a href="?page=<?= $i ?>" title="">[<?= $i?>]</a>
	
	<?php } ?>
</div> 