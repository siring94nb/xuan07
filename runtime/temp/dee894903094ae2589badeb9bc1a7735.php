<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:65:"D:\phpStudy\WWW\public/../application/index\view\applet\user.html";i:1527051999;s:65:"D:\phpStudy\WWW\public/../application/index\view\public\head.html";i:1527051999;s:67:"D:\phpStudy\WWW\public/../application/index\view\public\s_head.html";i:1527051999;s:65:"D:\phpStudy\WWW\public/../application/index\view\public\foot.html";i:1527051999;}*/ ?>
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
				我管理的用户
			</div>
			<div class="sruck">
				<input type="text" placeholder="请输入搜索用户姓名" class="sousxcx" id="keyworld">
				<div class="nid" onclick="search()">
					<img src="/image/search-icon.png">
				</div> 
			</div>
			<a href="<?php echo Url('Applet/add_admin'); ?>">
			<div class="addxcx">
				<i class="icon-plus"></i> 
				添加用户
			</div>
			</a>
		</div>

		
		<div class="shuxcs">
			<table class="table table-striped table-hover table-bordered" id="applet">

				<thead>

					<tr style="background-color:#f4f5f9;">

						<th style="width: 50px;">UID</th>

						<th style="width:60px;">姓名</th>

						<th style="width: 60px;">联系电话</th>

						<th style="width: 100px;">用户名</th>

						<th style="width: 200px;">邮箱</th>

						<th style="width: 100px;">注册时间</th>

						<th style="width: 100px;">所属经销商</th>

						<th style="width: 100px;">最近登录时间</th>
						
						<th style="width: 200px;">操作</th>

					</tr>

				</thead>

				<tbody>
					<?php if($admin_arr): foreach($admin_arr as $item): ?> 
					<tr class="">

						<td ><?php echo $item['uid']; ?></td>

						<td><?php echo $item['realname']; ?></td>

						<td ><?php echo $item['mobile']; ?></td>

						<td><?php echo $item['username']; ?></td>

						<td ><?php echo $item['email']; ?></td>

						<td><?php echo date('Y-m-d H:i:s',$item['updatetime']); ?></td>

						<td>
							<?php echo $item['jxs']; ?>
						</td>

						<td><?php if($item['lastlogintime']): ?><?php echo date('Y-m-d H:i:s',$item['lastlogintime']); endif; ?></td>

						<td>
							<a href="<?php echo Url('Applet/add_admin'); ?>?uid=<?php echo $item['uid']; ?>" style="float:left">
								<input type="button" value="修改资料"  class="btn green">
							</a>
							<form action="<?php echo Url('Applet/czmm'); ?>"  method="post" enctype="multipart/form-data" style="float:left; margin-left:10px; margin-bottom:0" onsubmit = "return checkinfo('<?php echo $item['realname']; ?>');">
								<input type="hidden" value="<?php echo $item['uid']; ?>" name="uid">
								<input type="submit" value="重置密码"  class="btn green">
							</form>
							<form action="<?php echo Url('Applet/del_user'); ?>"  method="post" enctype="multipart/form-data" style="float:left; margin-left:10px; margin-bottom:0" onsubmit = "return del_user_conf();">
								<input type="hidden" value="<?php echo $item['uid']; ?>" name="uid">
								<input type="submit" value="删除用户"  class="btn green">
							</form>
						</td>

					</tr>
					<?php endforeach; endif; ?>
				</tbody>


			</table>

			<!-- 分页 -->
			<div>
				<div class="fenye_left">
					一共查询到<font color="red" style="padding:0 10px;"><?php echo $counts; ?></font>条数据
				</div>
				<div class="fenye_right">
					<?php echo $admins->render(); ?>
				</div>
				
			</div>


		</div>



	</div>





	<script type="text/javascript">
		// 搜索功能
		function search(){
			var val = $("#keyworld").val();
			if(!val){
				alert("请输入搜索用户姓名");
			}else{
				location.href="<?php echo Url('Applet/add_user'); ?>"+"?keyworld="+val;
			}
		}
		function checkinfo(name){
			if(confirm('您确定要重置用户'+name+'的密码嘛?')){
				return true;
			}else{
				return false;
			}
		}
		function del_user_conf(){
			if(confirm('您确定要删除该用户嘛?')){
				return true;
			}else{
				return false;
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