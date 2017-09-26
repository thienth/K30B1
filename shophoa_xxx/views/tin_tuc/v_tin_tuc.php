<h2><?php echo $title ?></h2>
<?php
echo "Hiển thị nội dung tin tức theo mã tin tức"
?>

<?php foreach ($data as $tin): ?>
	<div class="new_unit">
		<h2><?php echo $tin->TenTT ?></h2>
		<img src="public/images/tin_tuc/<?php echo $tin->Hinh ?>" width=200>
		<p><?php echo $tin->NoiDung ?></p>
	</div>
<?php endforeach ?>