<?php 
require_once 'models/WebConfigModel.php';
require_once 'models/CategoryModel.php';
$config = WebConfigModel::where('active', 1)->first();
$cates = CategoryModel::where('in_nav', 1)->get();

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="<?= url('public/plugins/bootstrap/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= url('public/css/main.css')?>">
</head>
<body>
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '1494092504219086',
	      xfbml      : true,
	      version    : 'v2.10'
	    });
	    FB.AppEvents.logPageView();
	  };

	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?= url()?>">
	      	<img src="<?= url($config->logo_url)?>" alt="">
	      </a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	      	<?php 
	      	foreach ($cates as $c) {
	      		?>
	        	<li>
	        		<a href="cate?id=<?= $c->id?>">
	        			<?= $c->name  ?>
	        		</a>
        		</li>
	      		<?php
	      	}
	      	 ?>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tài khoản <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Đăng ký</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>