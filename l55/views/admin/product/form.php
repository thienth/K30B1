<div class="col-sm-8 col-sm-offset-2">
	<form action="<?= url('admin/product/save') ?>" method="post" enctype="multipart/form-data" role="form" novalidate>
		<input type="hidden" name="id" value="<?= $model->id  ?>">
		<div class="form-group">
			<label for="productName">Product Name <span class="text-danger">*</span></label>
			<input id="productName" type="text" name="product_name" value="<?= $model->product_name  ?>" class="form-control" placeholder="Product Name">
		</div>
		<div class="form-group">
			<label for="cateId">Category</label>
			<select name="cate_id" class="form-control">
			<?php foreach ($cates as $c) {
				?>
				<option value="<?= $c->id ?>"><?= $c->name ?></option>
				<?php
			} ?>
			</select>
		</div>
		<div class="form-group">
			<label for="image">Product Image <span class="text-danger">*</span></label>
			<input id="image" type="file" name="image" class="form-control" placeholder="Product Image">
		</div>
		<div class="form-group">
			<label for="listPrice">Product List Price <span class="text-danger">*</span></label>
			<input id="listPrice" type="text" name="list_price" class="form-control" placeholder="Product List Price" value="<?= $model->list_price  ?>">
		</div>
		<div class="form-group">
			<label for="sellPrice">Product Sell Price <span class="text-danger">*</span></label>
			<input id="sellPrice" type="text" name="sell_price" class="form-control" placeholder="Product Sell price" value="<?= $model->sell_price  ?>">
		</div>
		<div class="form-group">
			<label for="desc">Product Detail</label>
			<textarea id="editor" name="product_detail" class="form-control">
				<?= $model->product_detail  ?>
			</textarea>
		</div>
		<div class="text-center">
			<button class="btn btn-primary" type="submit">Submit</button>
			<a href="<? url('admin/product')  ?>" class="btn btn-danger">Cancel</a>
		</div>
	</form>
</div>