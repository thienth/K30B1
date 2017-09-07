<?php 
session_start();
$arr = $_SESSION['CART'];

 ?>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Price</th>
			<th>Quantity</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php 
        foreach ($arr as $key => $value) {
          	?>
			<tr>
				<td><?= $value['id']?></td>
				<td><?= $value['name']?></td>
				<td><?= $value['price']?></td>
				<td><?= $value['quantity']?></td>
				<td>
					<a href="add-to-cart.php?id=<?= $value['id']?>">+</a>
					<a href="remove-to-cart.php?id=<?= $value['id']?>">-</a>
				</td>
			</tr>
          	<?php
          }  
		 ?>
	</tbody>
</table>

 <a href="index.php">Go to index.php</a>