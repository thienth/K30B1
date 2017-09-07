<?php 
session_start();
$products = [
	['id' => 1, 'name' => 'Vu Dinh Trang', 'price' => 2000],
	['id' => 2, 'name' => 'Vu Dinh Dong', 'price' => 3000],
	['id' => 3, 'name' => 'Vu Dinh Tuoi', 'price' => 4000],
	['id' => 4, 'name' => 'Vu Dinh Heo', 'price' => 5000],
];

 ?>

<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Price</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php 

        foreach ($products as $key => $value) {
	    ?>
		<tr>
			<td><?= $value['id']?></td>
			<td><?= $value['name']?></td>
			<td><?= $value['price']?></td>
			<td>
				<a href="add-to-cart.php?id=<?= $value['id']?>">Add to cart</a>
			</td>
		</tr>
	    <?php
        }
		 ?>
	</tbody>
</table>



