<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"D:\phpStudy\WWW\public/../application/index\view\login\index.html";i:1527051999;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8" />

	<title><?php echo APP_COMPANY; ?></title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<link href="/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

	<link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="/css/style-metro.css" rel="stylesheet" type="text/css"/>

	<link href="/css/style.css" rel="stylesheet" type="text/css"/>

	<link href="/css/style-responsive.css" rel="stylesheet" type="text/css"/>

	<link href="/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="/css/uniform.default.css" rel="stylesheet" type="text/css"/>

	<link href="/css/login.css" rel="stylesheet" type="text/css"/>

	<link rel="shortcut icon" href="/image/favicon.ico" />

</head>

<body class="login" onkeydown="jianting()">


	<div class="content">

		<form class="form-vertical login-form" name="Form1" action="<?php echo Url('Login/dologin'); ?>" method="post" onsubmit = "return checkinfo();">

			<h3 class="form-title">小程序管理平台</h3> 

			<div class="alert alert-error hide">

				<button class="close" data-dismiss="alert"></button>

				<span>请检查您的用户名或者密码.</span>

			</div>

			<div class="control-group">

				<label class="control-label visible-ie8 visible-ie9">用户名</label>

				<div class="controls">

					<div class="input-icon left">

						<i class="icon-user"></i>

						<input class="m-wrap placeholder-no-fix" type="text" placeholder="用户名" name="username" id="username" />

					</div>

				</div>

			</div>

			<div class="control-group">

				<label class="control-label visible-ie8 visible-ie9">密码</label>

				<div class="controls">

					<div class="input-icon left">

						<i class="icon-lock"></i>

						<input class="m-wrap placeholder-no-fix" type="password" placeholder="密码" name="password" id="password" />

					</div>

				</div>

			</div>

			<div class="form-actions">


				<button type="submit" name="btnsubmit" class="btn green pull-right" style="background: #605AB0">

				登录 <i class="m-icon-swapright m-icon-white"></i>

				</button>            

			</div>

			

		</form>
		
		<div style="text-align:center; color:#888888">
			<?php echo APP_COMPANY; ?>欢迎您
		</div>


	</div>


	<script src="/js/jquery-1.10.1.min.js" type="text/javascript"></script>

	<script src="/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<script src="/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      

	<script src="/js/bootstrap.min.js" type="text/javascript"></script>

	<script src="/js/jquery.slimscroll.min.js" type="text/javascript"></script>

	<script src="/js/jquery.blockui.min.js" type="text/javascript"></script>  

	<script src="/js/jquery.cookie.min.js" type="text/javascript"></script>

	<script src="/js/jquery.uniform.min.js" type="text/javascript" ></script>

	<script src="/js/jquery.validate.min.js" type="text/javascript"></script>

	<script src="/js/app.js" type="text/javascript"></script>

	<script src="/js/login.js" type="text/javascript"></script>      

	<script>

		jQuery(document).ready(function(event) {     

		  App.init();

		});

		
		function jianting(e){

			var keyid = event.keyCode;
			if(keyid==13){
				event.returnValue=false;
			    event.cancel = true;
			    Form1.btnsubmit.click();
			}

		}


		function checkinfo(){

			var username = $("#username").val();
			var password = $("#password").val();

			if(!username){
				alert("用户名不能为空！");
				$("#username").focus();
				return false;
			}
			if(!password){
				alert("密码不能为空！");
				$("#password").focus();
				return false;
			}

		}


	</script>

</body>

</html>