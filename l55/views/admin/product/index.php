<table class="table table-stripped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Product Name</th>
			<th>List Price</th>
			<th>Sell Price</th>
			<th>Image</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		foreach ($products as $p) {
			?>
			<tr>
				<td>
					<?= $p->id ?>
				</td>
				<td>
					<?= $p->product_name ?>
				</td>
				<td>
					<?= $p->list_price ?>
				</td>
				<td>
					<?= $p->sell_price ?>
				</td>
				<td>
					<a href="javascript:;" class="thumbnail">
						<img src="<?= $p->image ?>" alt="">
					</a>
				</td>
				<td>
					
				</td>
			</tr>
			<?php
		}

		 ?>
		
	</tbody>
</table>
<?php  ?>