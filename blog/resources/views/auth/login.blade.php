<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 4.1.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Sinh viên FPT Polytechnic - Trang đăng </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="{{ asset('global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('global/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{ asset('global/plugins/select2/select2.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('admin_assets/css/login-soft.css') }}" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="{{ asset('global/css/components.css') }}" id="style_components" rel="stylesheet" type="text/css"/>
<link href="{{ asset('global/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('admin_assets/css/layout.css') }}" rel="stylesheet" type="text/css"/>
<link id="style_color" href="{{ asset('admin_assets/css/themes/darkblue.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('admin_assets/css/custom.css') }}" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="index.html">
    <img height="70px" src="{{ asset('images/logo-poly.png') }}" alt=""/>
    </a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" id="loginform" action="{{ route('login') }}" method="post" novalidate>
        {{csrf_field()}}
        <h3 class="form-title">Đăng nhập</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span>
            Cần điền email và mật khẩu </span>
        </div>
        @if (session('loginInvalid'))
            <div class="alert alert-danger">
                <button class="close" data-close="alert"></button>
                <span> Tài khoản/mật khẩu không đúng </span>
            </div>
        @endif
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Email</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="email" autocomplete="off" placeholder="Email" name="email" value="{{old('email')}}"/>
                @if ($errors->first('email'))
                    <span class="text-danger">{{$errors->first('email')}}</span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Mật </label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Mật khẩu" name="password"/>
                @if ($errors->first('password'))
                    <span class="text-danger">{{$errors->first('password')}}</span>
                @endif
            </div>
        </div>
        <div class="form-actions">
            <label class="checkbox">
            <input type="checkbox" name="remember" value="1"/> Ghi nhớ </label>
            <button type="submit" class="btn blue pull-right">
            Login <i class="m-icon-swapright m-icon-white"></i>
            </button>
        </div>
        <div class="forget-password">
            <h4><a href="javascript:;" id="forget-password">Quên mật khẩu ?</a></h4>
            
        </div>
    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="forget-form" action="#" method="post" novalidate>

        <h3>Quên mật khẩu ?</h3>
        <p>
             Điền email của bạn để nhận email reset mật khẩu.
        </p>
        <div class="form-group">
            <div class="input-icon">
                <i class="fa fa-envelope"></i>
                <input class="form-control placeholder-no-fix" type="email" autocomplete="off" placeholder="Email" name="email" value="{{old('email')}}">
            </div>
        </div>
        <div class="form-actions">
            <button type="button" id="back-btn" class="btn">
            <i class="m-icon-swapleft"></i> Back </button>
            <button type="submit" class="btn blue pull-right">
            Submit <i class="m-icon-swapright m-icon-white"></i>
            </button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
    
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
     2017 &copy; sinhvienpoly.com.
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="{{ asset('global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('global/plugins/jquery-migrate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('global/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('global/plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('global/plugins/backstretch/jquery.backstretch.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('global/plugins/select2/select2.min.js') }}"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('global/scripts/metronic.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin_assets/scripts/layout.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin_assets/scripts/login-soft.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
    Metronic.init(); // init metronic core components
    Layout.init(); // init current layout
    Login.init();
    // Demo.init();
       // init background slide images
       $.backstretch([
        "{{ asset('admin_assets/img/bg/1.jpg') }}",
        "{{ asset('admin_assets/img/bg/2.jpg') }}",
        "{{ asset('admin_assets/img/bg/3.jpg') }}",
        "{{ asset('admin_assets/img/bg/4.jpg') }}"
        ], {
          fade: 1000,
          duration: 8000
        }
    );
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>

