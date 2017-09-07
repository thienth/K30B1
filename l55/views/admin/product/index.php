<table class="table table-stripped">
	<thead>
		<tr>
			<th>Id</th>
			<th width="250">Product Name</th>
			<th>Category Name</th>
			<th>List Price</th>
			<th>Sell Price</th>
			<th>Image</th>
			<th>
				<a href="<?= url('admin/product/add')  ?>" class="btn btn-success btn-sm" title="">Create</a>
			</th>
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
					<?= $p->getCategoryName() ?>
				</td>
				<td>
					<?= $p->list_price ?>
				</td>
				<td>
					<?= $p->sell_price ?>
				</td>
				<td>
					<a href="javascript:;" class="width-100 thumbnail">
						<img src="<?= $p->image ?>" alt="">
					</a>
				</td>
				<td>
					<a href="<?= url('admin/product/edit?id=' . $p->id) ?>" class="btn btn-info btn-sm">Edit</a>
					<a href="<?= url('admin/product/remove?id=' . $p->id) ?>" class="btn btn-danger btn-sm">Remove</a>
				</td>
			</tr>
			<?php
		}

		 ?>
		
	</tbody>
</table>
<?php  ?>