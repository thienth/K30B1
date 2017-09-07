<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="save-update-user" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $model->id ?>">
		<div>
			Email: <input type="text" name="email" value="<?= $model->email ?>" placeholder="">
		</div>
		<div>
			Role: 
			<?php 
				$selectedMember = 'checked';
				$selectedMod = $model->role_id == 500 ? 'checked' : "";
				$selectedAdmin = $model->role_id == 900 ? 'checked' : "";

			 ?>
			<input type="radio" <?= $selectedMember ?> name="role_id" value="100"> Member 
			<input type="radio" <?= $selectedMod ?> name="role_id" value="300"> Mod 
			<input type="radio" <?= $selectedAdmin ?> name="role_id" value="900"> Admin
		</div>
		<div>
			Name: <input type="text" name="name" value="<?= $model->name ?>">
		</div>
		<div>
			<?php 
			if($model->avatar != ""){
				?>
				<img src="<?= $model->avatar ?>" width="100">
				<?php
			}

			 ?>
			Avatar: <input type="file" name="avatar">
		</div>
		<div>
			Address: <input type="text" name="address" value="<?= $model->address ?>">
		</div>
		<div>
			<button type="submit">Submit</button>
		</div>
	</form>
</body>
</html>