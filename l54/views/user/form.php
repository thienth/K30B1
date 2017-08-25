<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="save-user" method="post" enctype="multipart/form-data">
		<div>
			Email: <input type="text" name="email" value="" placeholder="">
		</div>
		<div>
			Password: <input type="password" name="password" value="" placeholder="">
		</div>
		<div>
			Role: <input type="radio" name="role_id" value="100"> Member <input type="radio" name="role_id" value="300"> Mod <input type="radio" name="role_id" value="900"> Admin
		</div>
		<div>
			Name: <input type="text" name="name" value="">
		</div>
		<div>
			Avatar: <input type="file" name="avatar" value="">
		</div>
		<div>
			Address: <input type="text" name="address" value="">
		</div>
		<div>
			<button type="submit">Submit</button>
		</div>
	</form>
</body>
</html>