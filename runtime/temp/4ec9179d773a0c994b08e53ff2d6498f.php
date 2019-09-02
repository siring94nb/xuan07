<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"D:\phpStudy\WWW\public/../application/index\view\systemset\index.html";i:1527051999;s:65:"D:\phpStudy\WWW\public/../application/index\view\public\head.html";i:1527051999;s:67:"D:\phpStudy\WWW\public/../application/index\view\public\s_head.html";i:1527051999;s:65:"D:\phpStudy\WWW\public/../application/index\view\public\foot.html";i:1527051999;}*/ ?>
<!DOCTYPE html>

<head>

	<meta charset="utf-8" />
	<title><?php echo APP_COMPANY; ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<link href="/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

	<link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="/css/style-metro.css" rel="stylesheet" type="text/css"/>

	<link href="/css/style.css" rel="stylesheet" type="text/css"/>

	<link href="/css/style-responsive.css" rel="stylesheet" type="text/css"/>

	<link href="/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="/css/uniform.default.css" rel="stylesheet" type="text/css"/>

	<link rel="stylesheet" type="text/css" href="/css/bootstrap-fileupload.css" />

	<link rel="stylesheet" type="text/css" href="/css/jquery.gritter.css" />

	<link rel="stylesheet" type="text/css" href="/css/chosen.css" />

	<link rel="stylesheet" type="text/css" href="/css/select2_metro.css" />

	<link rel="stylesheet" type="text/css" href="/css/jquery.tagsinput.css" />

	<link rel="stylesheet" type="text/css" href="/css/clockface.css" />

	<link rel="stylesheet" type="text/css" href="/css/bootstrap-wysihtml5.css" />

	<link rel="stylesheet" type="text/css" href="/css/datepicker.css" />

	<link rel="stylesheet" type="text/css" href="/css/timepicker.css" />

	<link rel="stylesheet" type="text/css" href="/css/colorpicker.css" />

	<link rel="stylesheet" type="text/css" href="/css/bootstrap-toggle-buttons.css" />

	<link rel="stylesheet" type="text/css" href="/css/daterangepicker.css" />

	<link rel="stylesheet" type="text/css" href="/css/datetimepicker.css" />

	<link rel="stylesheet" type="text/css" href="/css/multi-select-metro.css" />

	<link href="/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>

	<link rel="stylesheet" type="text/css" href="/webuploader/css/webuploader.css" />

	<link href="/css/wnmh.css" rel="stylesheet" type="text/css"/>

	<script src="/js/jquery.js" type="text/javascript"></script>
	
	<script src="/js/clipboard.min.js" type="text/javascript"></script>
	
</head>






<body class="page-header-fixed" style="background: #263238!important">
	
<!-- 导航 -->

	<div class="header navbar navbar-inverse navbar-fixed-top">

		<div class="navbar-inner">

			<div class="container-fluid">

				<!-- <a class="brand" href="<?php if(\think\Session::get('usergroup') == 2 ||  \think\Session::get('usergroup') == 3): ?><?php echo Url('Applet/index'); else: ?><?php echo Url('Applet/applet'); endif; ?>" style="padding-left:20px;"> -->
				<a class="brand" href="<?php echo Url('Applet/index'); ?>" style="padding-left:20px;">

				<!-- <img src="/image/logo.jpg" alt="logo"/> -->
				<?php echo APP_COMPANY; ?>

				</a>


				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">

				<img src="/image/menu-toggler.png" alt="" />

				</a>          
          		
	
          		

				<ul class="nav pull-right">

					<li class="dropdown user">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<?php if(\think\Session::get('icon')): ?>
							<img alt="" src="<?php echo \think\Session::get('icon'); ?>" style="width:29px; height:29px;"/>
						<?php else: ?>
							<img alt="" src="/image/avatar1_small.jpg" style="width:29px; height:29px;" />
						<?php endif; ?>

						<span class="username">
							<?php echo \think\Session::get('name'); ?>
						</span>

						<i class="icon-angle-down"></i>

						</a>

					
						

						<ul class="dropdown-menu">
							
							<li><a href="<?php echo Url('User/index'); ?>"><i class="icon-user"></i>个人中心</a></li>
							<li><a href="<?php echo Url('Login/index'); ?>"><i class="icon-key"></i>退出</a></li>

						</ul>

					</li>

				</ul>
				
				<div class="pull-right bzzx" style="line-height:42px; color:#ffffff !important; margin-right:20px">
					<a href="https://shimo.im/docs/eNzFujRohM8UstKv/" target="_blank" style="color:#ffffff;">系统帮助中心</a>
				</div>

			</div>

		</div>

	</div>
	
	<div class="page-container">


	<div class="zhongjshuj"  style="padding:20px 40px 60px">

		

	<div>

		<div class="wgldxcs">

			<a href="<?php echo Url('Systemset/index'); ?>">

			<span>

				<img src="/image/weixin.png">

			</span>

			系统设置

			</a>

		</div>





		<a href="<?php echo Url('Systemset/news'); ?>">

		<div class="addxcx"> 

			资讯管理

		</div>

		</a>

	</div>



	<div style="margin-top:50px; border-top:1px solid #dedede; padding-top:20px">



		<form action="<?php echo Url('Systemset/add'); ?>" id="form_sample_2" class="form-horizontal" method="post" enctype="multipart/form-data" onsubmit = "return checkinfo();">





			<div class="control-group">



				<label class="control-label">系统名称<font style="color:red">*</font></label>



				<div class="controls" style="line-height:34px;">

					<input name="name" type="text" class="span3 m-wrap" id="name" value="<?php if($sbase): ?><?php echo $sbase['name']; endif; ?>">

				</div>



			</div>





			<div class="control-group">

				<label class="control-label">系统LOGO</label>

				<div class="controls">

					<div class="fileupload fileupload-new" data-provides="fileupload">

						<div class="fileupload-new thumbnail" style="width: 100px; height:100px;">



							<?php if($sbase): ?>

							<img src="<?php echo $sbase['logo']; ?>"/>

							<?php else: ?>

							<img src="/image/noimage.jpg" alt="" />

							<?php endif; ?>

	

						</div>

						<div class="fileupload-preview fileupload-exists thumbnail" style="width:100px; height:100px"></div>

						<div>

							<span class="btn btn-file"><span class="fileupload-new">选择图片</span>

							<span class="fileupload-exists">修改</span>

							<input type="file" accept="image/gif,image/jpeg,image/jpg,image/png" class="default" name="logo" id="logo" value="<?php echo $sbase['logo']; ?>" /></span>

							<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">移除</a>

						</div>

						<font color="#999999">建议上传141x31长方形logo</font>

					</div>

				</div>

			</div>



			<div class="control-group">

				<label class="control-label">banner图</label>

				<div class="controls">

					<div class="fileupload fileupload-new" data-provides="fileupload">

						<div class="fileupload-new thumbnail" style="width: 100px; height:100px;">



							<?php if($sbase): ?>

							<img src="<?php echo $sbase['banner']; ?>"/>

							<?php else: ?>

							<img src="/image/noimage.jpg" alt="" />

							<?php endif; ?>

	

						</div>

						<div class="fileupload-preview fileupload-exists thumbnail" style="width:120px; height:70px"></div>

						<div>

							<span class="btn btn-file"><span class="fileupload-new">选择图片</span>

							<span class="fileupload-exists">修改</span>

							<input type="file" accept="image/gif,image/jpeg,image/jpg,image/png" class="default" name="banner" id="banner" value="<?php echo $sbase['banner']; ?>"/></span>

							<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">移除</a>

						</div>

						<font color="#999999">建议上传1920x429</font>

					</div>

				</div>

			</div>



			<div class="control-group">

				<label class="control-label">内页头部LOGO</label>

				<div class="controls">

					<div class="fileupload fileupload-new" data-provides="fileupload">

						<div class="fileupload-new thumbnail" style="width: 512px; height:60px;">



							<?php if($sbase): ?>

							<img src="<?php echo $sbase['top_banner']; ?>"/>

							<?php else: ?>

							<img src="/image/noimage.jpg" alt="" />

							<?php endif; ?>

	

						</div>

						<div class="fileupload-preview fileupload-exists thumbnail" style="width:512px; height:60px"></div>

						<div>

							<span class="btn btn-file"><span class="fileupload-new">选择图片</span>

							<span class="fileupload-exists">修改</span>

							<input type="file" accept="image/gif,image/jpeg,image/jpg,image/png" class="default" name="top_banner" id="top_banner" value="<?php echo $sbase['top_banner']; ?>"/></span>

							<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">移除</a>

						</div>

						<font color="#999999">建议上传512x60</font>

					</div>

				</div>

			</div>



			<div class="control-group">

				<label class="control-label">底部LOGO</label>

				<div class="controls">

					<div class="fileupload fileupload-new" data-provides="fileupload">

						<div class="fileupload-new thumbnail" style="width: 289px; height:105px;">



							<?php if($sbase): ?>

							<img src="<?php echo $sbase['foot_logo']; ?>"/>

							<?php else: ?>

							<img src="/image/noimage.jpg" alt="" />

							<?php endif; ?>

	

						</div>

						<div class="fileupload-preview fileupload-exists thumbnail" style="width:289px; height:105px"></div>

						<div>

							<span class="btn btn-file"><span class="fileupload-new">选择图片</span>

							<span class="fileupload-exists">修改</span>

							<input type="file" accept="image/gif,image/jpeg,image/jpg,image/png" class="default" name="foot_logo" id="foot_logo" value="<?php echo $sbase['foot_logo']; ?>"/></span>

							<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">移除</a>

						</div>

						<font color="#999999">建议上传512x60</font>

					</div>

				</div>

			</div>





			<div class="control-group">



				<label class="control-label">400电话<font style="color:red">*</font></label>



				<div class="controls" style="line-height:34px;">

					<input name="ptel" type="text" class="span3 m-wrap" id="ptel" value="<?php if($sbase): ?><?php echo $sbase['ptel']; endif; ?>">

				</div>



			</div>

			

			<div class="control-group">



				<label class="control-label">手机号码<font style="color:red">*</font></label>



				<div class="controls" style="line-height:34px;">

					<input name="tel" type="text" class="span3 m-wrap" id="tel" value="<?php if($sbase): ?><?php echo $sbase['tel']; endif; ?>">

				</div>



			</div>



			<div class="control-group">



				<label class="control-label">服务时间<font style="color:red">*</font></label>



				<div class="controls" style="line-height:34px;">

					<input name="ftime" type="text" class="span3 m-wrap" id="ftime" value="<?php if($sbase): ?><?php echo $sbase['ftime']; endif; ?>">

				</div>



			</div>



			<div class="control-group">



				<label class="control-label">地址<font style="color:red">*</font></label>



				<div class="controls" style="line-height:34px;">

					<input name="address" type="text" class="span3 m-wrap" id="address" value="<?php if($sbase): ?><?php echo $sbase['address']; endif; ?>">

				</div>



			</div>



			<div class="control-group">



				<label class="control-label">QQ号<font style="color:red">*</font></label>



				<div class="controls" style="line-height:34px;">

					<input name="qq" type="text" class="span3 m-wrap" id="qq" value="<?php if($sbase): ?><?php echo $sbase['qq']; endif; ?>">

				</div>



			</div>

			

			<div class="control-group">



				<label class="control-label">企业邮箱<font style="color:red">*</font></label>



				<div class="controls" style="line-height:34px;">

					<input name="email" type="text" class="span3 m-wrap" id="email" value="<?php if($sbase): ?><?php echo $sbase['email']; endif; ?>">

				</div>



			</div>



			<div class="control-group">



				<label class="control-label">备案信息<font style="color:red">*</font></label>



				<div class="controls" style="line-height:34px;">

					<textarea name="beianxx"><?php if($sbase): ?><?php echo $sbase['beianxx']; endif; ?></textarea>

				</div>



			</div>



			<div class="control-group">

				<label class="control-label">微信二维码</label>

				<div class="controls">

					<div class="fileupload fileupload-new" data-provides="fileupload">

						<div class="fileupload-new thumbnail" style="width: 100px; height:100px;">



							<?php if($sbase): ?>

							<img src="<?php echo $sbase['erweima']; ?>"/>

							<?php else: ?>

							<img src="/image/noimage.jpg" alt="" />

							<?php endif; ?>

	

						</div>

						<div class="fileupload-preview fileupload-exists thumbnail" style="width:100px; height:100px"></div>

						<div>

							<span class="btn btn-file"><span class="fileupload-new">选择图片</span>

							<span class="fileupload-exists">修改</span>

							<input type="file" accept="image/gif,image/jpeg,image/jpg,image/png" class="default" name="erweima" id="erweima" value="<?php echo $sbase['erweima']; ?>"/></span>

							<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">移除</a>

						</div>

						<font color="#999999">建议上传正方形logo</font>

					</div>

				</div>

			</div>







			<div class="form-actions">



				<button type="submit" class="btn green" id="tijiao" >确定</button>



			</div>



		</form>



	</div>

	





	



		</div>
	</div>

	<div class="footer">

		<?php echo date("Y"); ?> &copy; <?php echo APP_COMPANY; ?>版权所有 v<?php echo VERSION_APP; ?> 

	</div>

	

	<script src="/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<script src="/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      

	<script src="/js/bootstrap.min.js" type="text/javascript"></script>

	<script src="/js/jquery.slimscroll.min.js" type="text/javascript"></script>

	<script src="/js/jquery.blockui.min.js" type="text/javascript"></script>  

	<script src="/js/jquery.cookie.min.js" type="text/javascript"></script>

	<script src="/js/jquery.uniform.min.js" type="text/javascript" ></script>

	<script type="text/javascript" src="/js/bootstrap-fileupload.js"></script>

	<script type="text/javascript" src="/js/chosen.jquery.min.js"></script>

	<script type="text/javascript" src="/js/select2.min.js"></script>

	<script type="text/javascript" src="/js/wysihtml5-0.3.0.js"></script> 

	<script type="text/javascript" src="/js/bootstrap-wysihtml5.js"></script>

	<script type="text/javascript" src="/js/jquery.tagsinput.min.js"></script>

	<script type="text/javascript" src="/js/jquery.toggle.buttons.js"></script>

	<script type="text/javascript" src="/js/bootstrap-datepicker.js"></script>

	<script type="text/javascript" src="/js/bootstrap-datetimepicker.js"></script>

	<script type="text/javascript" src="/js/clockface.js"></script>

	<script type="text/javascript" src="/js/date.js"></script>

	<script type="text/javascript" src="/js/daterangepicker.js"></script> 

	<script type="text/javascript" src="/js/bootstrap-colorpicker.js"></script>  

	<script type="text/javascript" src="/js/bootstrap-timepicker.js"></script>

	<script type="text/javascript" src="/js/jquery.inputmask.bundle.min.js"></script>   

	<script type="text/javascript" src="/js/jquery.input-ip-address-control-1.0.min.js"></script>

	<script type="text/javascript" src="/js/jquery.multi-select.js"></script>   

	<script src="/js/bootstrap-modal.js" type="text/javascript" ></script>

	<script src="/js/bootstrap-modalmanager.js" type="text/javascript" ></script> 

	<script src="/js/app.js"></script>
	
	
	<script src="/js/form-components.js"></script>   

	<script src="/js/ui-modals.js"></script>
	

	<script>

		jQuery(document).ready(function() {    

		   	App.init(); // initlayout and core plugins
		   	FormComponents.init();
			UIModals.init();
		   

		   //控制左侧导航选中
		   //1.一级导航选中
		   var nowhtml = $("#nowhtml").val();
		   var pli = $("#"+nowhtml).parent().parent();
		   $("#"+nowhtml).addClass("selected");
		   $("#"+nowhtml).removeClass("arrow");
		   $(pli).addClass("active");
		   //2.二级导航选中
		   var erji = $("#erjihtml").val();
		   if(erji){
		   		$("#"+erji).addClass("active");
		   }

		});

	</script>



	</body>
</html>