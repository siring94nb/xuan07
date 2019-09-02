<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:64:"D:\phpStudy\WWW\public/../application/index\view\applet\add.html";i:1527051999;s:65:"D:\phpStudy\WWW\public/../application/index\view\public\head.html";i:1527051999;s:67:"D:\phpStudy\WWW\public/../application/index\view\public\s_head.html";i:1527051999;s:65:"D:\phpStudy\WWW\public/../application/index\view\public\foot.html";i:1527051999;}*/ ?>
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
				<span>
					<img src="/image/weixin.png">
				</span>
				我管理的小程序
			</div>
			<a href="<?php echo Url('Applet/add_admin'); ?>">

			<a href="<?php echo Url('Applet/index'); ?>">
			<div class="addxcx"> 
				小程序管理 
			</div>
			</a>
		</div>
		<div style="margin-top:50px; border-top:1px solid #dedede; padding-top:20px">
		<form action="<?php echo Url('Applet/save'); ?>" id="form_sample_2" class="form-horizontal" method="post" enctype="multipart/form-data" onsubmit = "return checkinfo();">

					<input type="hidden" value="<?php if($applet): ?><?php echo $applet['id']; endif; ?>" name="id">

					<div class="control-group">

						<label class="control-label">小程序名称<font style="color:red">*</font></label>

						<div class="controls" style="line-height:34px;">

							<input name="name" type="text" id="name" class="span3 m-wrap" value="<?php if($applet): ?><?php echo $applet['name']; endif; ?>"/>
						</div>

					</div>

					<div class="control-group">

						<label class="control-label">小程序LOGO<font style="color:red">*</font></label>

						<div class="controls">

							<div class="fileupload fileupload-new" data-provides="fileupload">

								<div class="fileupload-new thumbnail" style="width: 100px; height:100px;">
									<?php if($applet): ?>
									<img src="<?php echo $applet['thumb']; ?>"/>
									<?php else: ?>
									<img src="/image/noimage.jpg" alt="" />
									<?php endif; ?>
								</div>

								<div class="fileupload-preview fileupload-exists thumbnail" style="max-width:100px; max-height:100px"></div>

								<div>

									<span class="btn btn-file"><span class="fileupload-new">选择图片</span>

									<span class="fileupload-exists">修改</span>

									<input type="file" accept="image/gif,image/jpeg,image/jpg,image/png" class="default" name="thumb" id="thumb"/></span>

									<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">移除</a>

								</div>

								<font color="#999999">建议上传144*144大小图片</font>
							</div>

						</div>
					</div>

					<div class="control-group">

						<label class="control-label">小程序描述<font style="color:red">*</font></label>

						<div class="controls" style="line-height:34px;">
							<TEXTAREA name="comment" class="span3 m-wrap" id="comment"><?php if($applet): ?><?php echo $applet['comment']; endif; ?></TEXTAREA>
						</div>

					</div>
					
					<div class="control-group">

						<label class="control-label">小程序原始id<font style="color:red">*</font></label>

						<div class="controls">

							<input name="xcxId" type="text" class="span3 m-wrap" id="xcxId" value="<?php if($applet): ?><?php echo $applet['xcxId']; endif; ?>" />
							<span style="color:#999999; line-height:40px; margin-left:20px;">请在小程序后台查看原始id</span>
						</div>

					</div>

					<div class="control-group">

						<label class="control-label">AppId<font style="color:red">*</font></label>

						<div class="controls">

							<input name="appID" type="text" class="span3 m-wrap" id="appID" value="<?php if($applet): ?><?php echo $applet['appID']; endif; ?>" />
							<span style="color:#999999; line-height:40px; margin-left:20px;">应用ID,以wx开头,请正确填写</span>
						</div>

					</div>
					

					<div class="control-group">

						<label class="control-label">AppSecret<font style="color:red">*</font></label>

						<div class="controls">

							<input name="appSecret" type="text" class="span6 m-wrap"  id="appSecret" value="<?php if($applet): ?><?php echo $applet['appSecret']; endif; ?>"/>
							<span style="color:#999999; line-height:40px; margin-left:20px;">应用密钥,请正确填写</span>
						</div>

					</div>
					<div class="control-group">
						<label class="control-label">身份选择</label>
						<div class="controls">
							<label class="radio">
							<div class="radio"><input type="radio" name="identity" value="1" onclick="identitys(1)" <?php if($applet): if($applet['identity']==1): ?>checked="checked"<?php endif; else: ?>checked="checked"<?php endif; ?>/"></div>
							普通商户
							</label>
							<label class="radio">
							<div class="radio"><input type="radio" name="identity" value="2" onclick="identitys(2)" <?php if($applet): if($applet['identity']==2): ?>checked="checked"<?php endif; else: ?>checked="checked"<?php endif; ?>></div>
							服务商子商户
							</label> 
						</div>
					</div>
					<div class="control-group">

						<label class="control-label">普通商户商户号<font style="color:red">*</font></label>

						<div class="controls">

							<input name="mchid" type="text" class="span6 m-wrap"  id="mchid" value="<?php if($applet): ?><?php echo $applet['mchid']; endif; ?>" />
							
						</div>

					</div>

					<div class="control-group">

						<label class="control-label">微信支付秘钥<font style="color:red">*</font></label>

						<div class="controls">

							<input name="signkey" type="text" class="span5 m-wrap"  id="signkey" value="<?php if($applet): ?><?php echo $applet['signkey']; endif; ?>" />
							<div class="ssssd" onclick="shenc()">生成新的秘钥</div>
							
						</div>
						<style type="text/css">
							.ssssd{
								display: inline-block;
								border:1px solid #dedede; 
								text-align:center;
								line-height: 38px;
								padding: 0 10px;
								cursor:pointer;
								background-color: #efefef;
							}
						</style>

					</div>
					<div class="control-group sub_mchid" style="<?php if($applet): if($applet['identity']!=1): ?>display: block;<?php else: ?>display: none<?php endif; else: ?>display: none<?php endif; ?>">

						<label class="control-label">服务商子商户商户号</label>

						<div class="controls">

							<input name="sub_mchid" type="text" class="span6 m-wrap"  id="sub_mchid" value="<?php if($applet): ?><?php echo $applet['sub_mchid']; endif; ?>" />
							
						</div>

					</div>

					<div class="form-actions">

						<button type="submit" class="btn green" id="tijiao" >确定</button>

					</div>

		</form>
		</div>



	</div>





	<script type="text/javascript">
		function checkinfo(){
			var name = $("#name").val();
			var comment = $("#comment").val();
			var importantID = $("#importantID").val();
			var xcxId = $("#xcxId").val();
			var appID = $("#appID").val();
			var appSecret = $("#appSecret").val();
			if(!name){
				alert("请设置小程序的名称！");
				return false;
			}else if(!xcxId){
				alert("请设置小程序原始id！");
				return false;
			}else if(!appID){
				alert("请设置小程序AppId！");
				return false;
			}else if(!appSecret){
				alert("请设置小程序AppSecret！");
				return false;
			}else{
				return true;
			}

		}

		function shenc(){


			len = 32;  
		    var $chars = 'ABCDEFGHJKMNPQRSTWXYZabcdefhijkmnprstwxyz2345678'; // 默认去掉了容易混淆的字符oOLl,9gq,Vv,Uu,I1  
		    var maxPos = $chars.length;  
		    var pwd = '';  
		    for (i = 0; i < len; i++) {  
		        pwd += $chars.charAt(Math.floor(Math.random() * maxPos));  
		    }  

		    $("#signkey").val(pwd);

		}

		function identitys(i){
			console.log(i)
			if(i==1){
				$('.sub_mchid').hide();
			}
			if(i==2){
				$('.sub_mchid').show();
			}
		}



	</script>
		



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