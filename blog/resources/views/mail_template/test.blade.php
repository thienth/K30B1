<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2>Xin chao {{$username}},</h2> 
	<p>
		<strong>URL de lay lai mat khau cua ban la </strong>
		<a href="{{route('reset-password', ['token' => $token])}}" title="">Click vao day</a>
	</p>
</body>
</html>