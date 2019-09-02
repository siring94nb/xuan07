<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"D:\phpStudy\WWW\public/../application/home\view\listnews\index.html";i:1527051999;}*/ ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="Generator" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta property="qc:admins" content="63475172776616756375" />
	<title><?php echo $cates['name']; ?></title>
	
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="/css/fwpublic.css" />
	<link rel="stylesheet" type="text/css" href="/css/fwanimation.css" />
	<link href="/css/article_cate.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/lazyload.js"></script>
	<script type="text/javascript" src="/js/fwjquery.timer.js"></script>
	<script type="text/javascript" src="/js/fwpublic.js"></script>
	<script type="text/javascript" src="/js/fwslowscroll.js"></script>



	<script type="text/javascript">
		/*鼠标上移显示*/
		$(function(){
			//hover start
			$("#hd .nav li").hover(function(){
				$(this).oneTime(50,function(){ 
					$(this).addClass("hover");
				});
				$(this).find('.software-list').height($(this).find('.software-list .warp').height() + 25);
			},function(){
				$(this).oneTime(50,function(){ 
					$("#cp_list").stopTime();
					$(this).removeClass("hover");
					$(this).find('.software-list').height(0);
				});
			});

			$("#35").hover(function(){
				$(this).oneTime(50,function(){ 
					$(this).addClass("hover");
				});
				$(this).find('.about-us').height($(this).find('.about-us-item').length  * 40);
			},function(){
				$(this).oneTime(50,function(){ 
					$("#cp_list").stopTime();
					$(this).removeClass("hover");
					$(this).find('.about-us').height(0);
				});
			});
			//hover end 

		});
	</script>
</head>
<body>
	<div class='blank85'></div>
	<div id="hdw">
		<div class="header">
			<div id="hd">
				<div class="logo">
					<a class="link" href="/">
						<img src="<?php echo $sbase['top_banner']; ?>" />
					</a>
				</div>
				<ul class="nav">
					<li id="20">
						<div class="a_top">
							<a href="/">首页</a>
						</div>
					</li>

				</ul>
			</div>
		</div>
	</div>
</div>
<script>
	$(function(){
		$(".showhide").bind('click',function(){
			if($(this).next().attr('class')=='show'){
				$(this).next().attr('class','');
			}else{
				$(this).next().attr('class','show');
			}
		});

		$("#description_head li a").each(function(j){
			$("#description #description_content div").css('border','none');
			$(this).bind('click',function(){
				$("#description_head li a").attr('class','');
				$(this).attr('class','here');
				$("#description #description_content div").css('display','none');
				$("#description #description_content div").get(j).style.display='block';
			});
		});
	});
</script>
<style type="text/css">
	.article_cate{
		margin-top: 20px;
	}
</style>

<div class="article_cate clearfix">
	<div class="article_cate_l">

		<div class="article_cate_l_m article_cate_l_m_b">
			<div class="article_cate_l_m_title">
				<span>最新资讯</span>
			</div>
			<div class="article_cate_l_m_content">
				<ul>
					<?php if($newnews): foreach($newnews as $key=>$item): ?>
							<li>
								<a href="<?php echo Url('Showart/index'); ?>?newsid=<?php echo $item['id']; ?>" target="_blank">
									<div class="article_cate_l_m_content_l" style='background: url("<?php echo $item['thumb']; ?>") center center no-repeat;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="",  sizingMethod="scale");width: 130px;height: 60px;background-size:100%;'></div>
									<div class="article_cate_l_m_content_r">
										<span><?php echo $item['title']; ?></span>
									</div>
								</a>
							</li>
						<?php endforeach; endif; ?>

				</ul>
			</div>
		</div>
	</div>
	<div class="article_cate_r">
		<div class="article_nav clearfix">
			<div class="article_nav_l">
				<a href="/news/xiaochengxu.html" class="cur"><?php echo $cates['name']; ?></a>
			</div>
		</div>
		<div class="article_content">
			<ul class="article_list">
				<?php if($news): foreach($news as $key=>$item): ?>
						
						<li>
							<a href="<?php echo Url('Showart/index'); ?>?newsid=<?php echo $item['id']; ?>" target="_blank">
								<div class="item_article_l">
									<div style='background: url("<?php echo $item['thumb']; ?>") center center no-repeat;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src="<?php echo $item['thumb']; ?>",  sizingMethod="scale");width: 350px;height: 160px;background-size:100%;'></div>
								</div>
								<div class="item_article_r">
									<h3><?php echo $item['title']; ?></h3>
									<div class="brief">
										<span></span>
									</div>
									<div class="time">
										<span class="time_span"><?php echo $item['creattime']; ?></span>
										<span class="view_span"><?php echo $item['hits']; ?></span>
									</div>
								</div>
							</a>
						</li>

					<?php endforeach; endif; ?>
				

				<div class="page" style="text-align:center; background-color:#ffffff"> 

					<style type="text/css">
						.pagination_list li{
							display: inline-block;
							background-color: none;
							margin-bottom: 0;
						}
					</style>

					<div class="fenye_right">
						<?php echo $news->render(); ?>
					</div>

				</div>
			</ul>
		</div>
	</div>
</div>
<div class="footer">
	<div class="footer-top">
		<div class="wrap">
			<div class="footer-block w-29">
				<div class="logo">
					<img src="<?php echo $sbase['foot_logo']; ?>" alt="login">
				</div>
				<span class="partner">兴业资本&nbsp;&nbsp;战略投资企业</span>
			</div>
			<div class="footer-block w-25">
				<div class="footer-tit">服务热线</div>
				<div class="hot-line"><?php echo $sbase['ptel']; ?></div>
				<p>售前咨询（<?php echo $sbase['ftime']; ?>）</p>
			</div>
			<div class="footer-block w-34">
				<div class="footer-tit">联系我们</div>
				<p style="margin-bottom: 10px;"><?php echo $sbase['address']; ?></p>
				<p class="mb-10">
					<a  target="_blank">
						企业QQ：<?php echo $sbase['qq']; ?>
						<span class="foot-qq"></span>
					</a>
				</p>
				<p>企业邮箱：<?php echo $sbase['email']; ?></p>
			</div>
			<div class="footer-block w-12">
				<div class="footer-tit">关注公众号</div>
				<div class="footer-ewm">
					<img src="<?php echo $sbase['erweima']; ?>" alt="ewm">
				</div>
				<p class="ml">动态和资讯都在这里</p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="footer-bottom" style="height: auto;padding:10px 0;line-height: 20px;">
		<?php echo $sbase['beianxx']; ?>
	</div>
</div>
