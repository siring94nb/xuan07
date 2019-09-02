<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:66:"D:\phpStudy\WWW\public/../application/index\view\applet\index.html";i:1527051999;s:65:"D:\phpStudy\WWW\public/../application/index\view\public\head.html";i:1527051999;s:67:"D:\phpStudy\WWW\public/../application/index\view\public\s_head.html";i:1527051999;s:65:"D:\phpStudy\WWW\public/../application/index\view\public\foot.html";i:1527051999;}*/ ?>
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
			<div class="sruck">
				<input type="text" placeholder="请输入搜索小程序名称" class="sousxcx" id="keyworld">
				<div class="nid" onclick="search()">
					<img src="/image/search-icon.png">
				</div> 
			</div>
			<a href="<?php echo Url('Applet/add'); ?>">
			<div class="addxcx" style="background: #605AB0">
				<i class="icon-plus"></i> 
				添加小程序
			</div>
			</a>
			<a href="<?php echo Url('Applet/user'); ?>">
			<div class="addxcx" style="background: #3E8EF7"> 
				<i class="icon-male"></i> 
				用户管理
			</div>
			</a>
			<?php if(\think\Session::get('usergroup')==2): ?>
			<a href="<?php echo Url('Applet/jxs'); ?>">
			<div class="addxcx" style="background: #f90">
				<i class="icon-user"></i> 
				代理商管理
			</div>
			</a>

			<a href="<?php echo Url('Systemset/index'); ?>">
			<div class="addxcx" style="background: #c00">
				<i class="icon-cog"></i> 
				系统管理
			</div>
			</a>

			<a href="<?php echo Url('Upappse/index'); ?>">
			<div class="addxcx" style="background: green">
				<i class="icon-sitemap"></i> 
				系统更新
			</div>
			</a>
			<?php endif; ?>
		</div>

		
		<div class="shuxcs">
			<table class="table table-striped table-hover table-bordered" id="applet">

				<thead>

					<tr style="background-color:#f4f5f9;">

						<th style="width: 50px;">ID</th>

						<th style="width:200px;">名称</th>

						<th style="width: 60px;">管理员</th>

						<th style="width: 100px;">电话</th>

						<th style="width: 50px;">类型</th>

						<th style="width: 60px;">生成时间</th>
						
						<th width="200px;">操作</th>

					</tr>

				</thead>

				<tbody>
					<?php if($allapplet): foreach($allapplet as $item): ?> 
					<tr class="">

						<td ><?php echo $item['id']; ?></td>

						<td style="white-space:nowrap;overflow:hidden;width:200px;max-width: 200px;"><?php echo $item['name']; ?></td>

						<td><?php echo $item['username']; ?></td>

						<td ><?php echo $item['tel']; ?></td>

						<td>小程序</td>

						<td><?php echo date('Y-m-d',$item['dateline']); ?></td>

						<td>
							<input type="hidden" value="<?php echo $item['flag']; ?>">
							<a href="<?php echo Url('Datashow/index'); ?>?appletid=<?php echo $item['id']; ?>">
								<input type="button" value="进入管理"  class="btn green">
							</a>
							<a href="<?php echo Url('Applet/add'); ?>?id=<?php echo $item['id']; ?>">
								<input type="button" value="编辑"  class="btn yellow">
							</a>
							<input type="button" value="绑定管理员"  class="btn blue" data-toggle="modal" href="#stack2" onclick="bangding(<?php echo $item['id']; ?>)">
							<input type="button" value="解绑管理员"  class="btn red" onclick="jieb(<?php echo $item['id']; ?>,<?php echo $item['bangding']; ?>)">
						</td>

					</tr>
					<?php endforeach; endif; ?>
				</tbody>


			</table>

			<!-- 分页 -->
			<div style="height:35px;">
				<div class="fenye_left">
					一共查询到<font color="red" style="padding:0 10px;"><?php echo $counts; ?></font>条数据
				</div>
				<div class="fenye_right">
					<?php echo $applet->render(); ?>
				</div>
				
			</div>


		</div>



	</div>

	

	<div id="stack2" class="modal hide fade" tabindex="-1" data-focus-on="input:first">

		<div class="modal-header">

			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>

			<h3>绑定管理员</h3>

		</div>
		
		<form action="<?php echo Url('Applet/admin_add'); ?>"   class="form-horizontal" method="post" enctype="multipart/form-data">
			<div class="modal-body">


				<div class="control-group">

					<input type="hidden" name="userid" id="userid">
					<input type="hidden" name="appletid" id="appletid">

					<label class="control-label" style="width:90px">手机号</label>

					<div class="controls" style="margin-left:110px;">

						<input type="text" class="span3 m-wrap" style="height: 20px !important;" id="tel" />

						<span>
							<input type="button" value="搜索"  class="btn green" onclick="userget()">
						</span>

					</div>

				</div>
				<div style="display:none" id="yonghu">
					<table style="margin:0 auto">
						<tr>
							<td id="yhm" style="padding:10px"></td>
							<td id="xim" style="padding:10px"></td>
						</tr>
					</table>
				</div>

				<div class="modal-footer" style="display:none" id="bangding">

					<button type="submit" class="btn red">绑定</button>

				</div>
			</div>
		</form>


	</div>





	<script type="text/javascript">
		// 搜索功能
		function search(){
			var val = $("#keyworld").val();
			if(!val){
				alert("请输入搜索小程序名称");
			}else{
				location.href="<?php echo Url('Applet/index'); ?>"+"?keyworld="+val;
			}
		}

		// 绑定管理员信息搜索
		function userget(){
			var tel = $("#tel").val();
			if(!tel){
				alert("请输入手机号码！");
				return;
			}
			 if(!(/^1[34578]\d{9}$/.test(tel))){ 
		        alert("请输入正确的手机号码！");  
		        return ; 
		    } 
		    $.post("<?php echo Url('Applet/userinfo'); ?>",{"tel":tel},function(data){

		    	if(data.message){
		    		$("#bangding").hide();
		    		$("#yonghu").hide();
		    		alert(data.message);
		    	}else{
		    		$("#bangding").show();
		    		$("#yonghu").show();
		    		$("#yhm").html("用户名："+data.username);
		    		$("#xim").html("姓名："+data.realname);
		    		$("#userid").val(data.uid);
		    	}

		    })


		}
		// 绑定管理员
		function bangding(id){
			$("#bangding").hide();
		    $("#yonghu").hide();
		    $("#tel").val("");
		    $("#appletid").val(id);
		}

		// 解绑管理员
		function jieb(id,bangding){
			if(bangding==0){
				alert("该小程序还未绑定管理员，请先绑定！");
				return;
			}
			if(confirm('你确定要解绑该小程序的管理员嘛？')){
				$.post("<?php echo Url('Applet/del_admin'); ?>",{"appletid":id},function(data){
					location.reload();
				})
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