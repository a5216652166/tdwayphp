<!DOCTYPE html>
<html lang="en">
        <head>
                <meta charset="utf-8">
                <title>
                        TiderWay ExtraGate Series
                </title>
                <!-- meta name="viewport" content="width=device-width, initial-scale=1.0"-->
                <meta name="description" content="">
                <meta name="author" content="">
                <!-- Le styles -->
                <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
                <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
                <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
                <!--[if lt IE 9]>
                        <script src="<?php echo base_url('assets/js/html5shiv.js') ?>">
                        </script>
                <![endif]-->
                <!-- Le fav and touch icons -->
                <link rel="shortcut icon" href="<?php echo base_url('assets/ico/favicon.ico') ?>">
                <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets/ico/apple-touch-icon-144-precomposed.png') ?>">
                <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/ico/apple-touch-icon-114-precomposed.png') ?>">
                <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/ico/apple-touch-icon-72-precomposed.png') ?>">
                <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/ico/apple-touch-icon-57-precomposed.png') ?>">
                <style type="text/css">
body {
	padding-top: 40px;
	padding-bottom: 40px;
	background-color: #f5f5f5;
}
.form-signin {
	max-width: 300px;
	padding: 19px 29px 29px;
	margin: 0 auto 20px;
	background-color: #fff;
	border: 1px solid #e5e5e5;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	box-shadow: 0 1px 2px rgba(0,0,0,.05);
}
.form-signin .form-signin-heading, .form-signin .checkbox {
	margin-bottom: 10px;
}
.form-signin input[type="text"], .form-signin input[type="password"] {
	font-size: 16px;
	height: auto;
	margin-bottom: 15px;
	padding: 7px 9px;
}
.btn-custom {
	background-color: hsl(41, 85%, 35%) !important;
	background-repeat: repeat-x;
 	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#efb73d", endColorstr="#a5750d");
	background-image: -khtml-gradient(linear, left top, left bottom, from(#efb73d), to(#a5750d));
	background-image: -moz-linear-gradient(top, #efb73d, #a5750d);
	background-image: -ms-linear-gradient(top, #efb73d, #a5750d);
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #efb73d), color-stop(100%, #a5750d));
	background-image: -webkit-linear-gradient(top, #efb73d, #a5750d);
	background-image: -o-linear-gradient(top, #efb73d, #a5750d);
	background-image: linear-gradient(#efb73d, #a5750d);
	border-color: #a5750d #a5750d hsl(41, 85%, 29%);
	color: #fff !important;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.39);
	-webkit-font-smoothing: antialiased;
}
.mainContent {
				width:1000px;
				height:605px;
				position:absolute;	
				top:50%;
				left:50%;		
				background:url(<?php echo base_url('images/login.png') ?>) no-repeat;	
				margin-left:-500px;
				margin-top:-280px;
			}
.loginForm {
				width:320px;
				height:200px;
				margin-left:510px;
				margin-top:220px;				
			}
                </style>
        </head>
        <body onload="document.getElementById('user_name').focus();">
                <div class="navbar navbar-fixed-top">
                        <!-- TopBar -->
                        <div class="navbar-inner">
                                <div class="container-fluid">
                                        <a class="brand" href="http://www.TideyWay.com">TiderWay ExtraGate Series</a>
                                </div>
                        </div>
                </div>
                <div class="container mainContent">
                        <!-- container -->
                        
                        <div class="loginForm">                                
                                <form class="form-signin"  action="<?php echo site_url('auth/login') ?>" method="post" accept-charset="utf-8" >
                                        <div class="control-group warning">
                                                <label class="control-label" for="lang">
                                                        选择语言:
                                                </label>
                                                <div class="controls">
                                                        <select id="lang">
                                                                <option>
                                                                        简体中文
                                                                </option>
                                                                <option>
                                                                        繁体中文
                                                                </option>
                                                                <option>
                                                                        English
                                                                </option>
                                                        </select>
                                                </div>
                                                <input type="text" name="identity" class="input-block-level" placeholder="用户名/Email" value="<?php echo $identity['value'] ?>" autofocus required>
                                                <input type="password" name="password" class="input-block-level" placeholder="密码"  required>
                                        </div>
                                        <button class="btn btn-large btn-primary btn-custom" type="submit">
                                                登录
                                        </button>
                                        <span class="help-inline">
                                        </span>
                                        <button class="btn btn-large btn-primary btn-custom" type="reset">
                                                清除
                                        </button>
										<span class="help-inline">
                                        </span>
										<a class="brand" href="forgot_password">忘记密码？</a>
                                </form>
                                <!-- Footer================================================== 显示返回信息-->
                                
                                <footer style='text-align:center;' id="footer">                                                               
                                        <p>
                                                <div id="infoMessage" class="help-inline"><?php echo $message;?></div> 
                                                &copy; Company 2013
                                                <a href='http://www.TideyWay.com' target='_blank' title='TideyWay Inc'> TideyWay Inc </a>
                                        </p>
                                </footer>
                        </div>
                        <!-- /container -->
                        <script src="<?php echo base_url('assets/js/jquery.min.js') ?>">
                        </script>
                        <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>">
                        </script>
                        <script src="<?php echo base_url('assets/js/iepatch.js') ?>">
                        </script>
                        
                        
        </body>
</html>