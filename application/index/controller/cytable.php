<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;
use think\Session;
use think\View;
    $food = "
    CREATE TABLE IF NOT EXISTS `ims_sudu8_page_food`(  
    	`id` int(11) NOT NULL AUTO_INCREMENT,
		`num` int(11) NOT NULL,
		`cid` int(11) NOT NULL,
		`pcid` int(11) NOT NULL,
		`uniacid` int(11) NOT NULL,
		`title` varchar(255) NOT NULL,
		`thumb` varchar(255) NOT NULL,
		`counts` int(11) NOT NULL,
		`price` varchar(255) NOT NULL,
		`true_price` varchar(255) NOT NULL,
		`desc` varchar(255) NOT NULL,
		`text` text NOT NULL,
		`labels` varchar(255) NOT NULL,
		`product_txt` text NOT NULL,
		`flag` int(1) NOT NULL DEFAULT '1',
		`descimg` varchar(255) NOT NULL,
		`desccon` varchar(255) NOT NULL,
		PRIMARY KEY (`id`)
    )";
    $foodcate = "
    CREATE TABLE IF NOT EXISTS `ims_sudu8_page_food_cate`(  
    	`id` int(11) NOT NULL AUTO_INCREMENT,
		`num` int(11) NOT NULL,
		`uniacid` int(11) NOT NULL,
		`title` varchar(255) NOT NULL,
		`dateline` int(11) NOT NULL,
		`flag` int(1) NOT NULL DEFAULT '1',
		PRIMARY KEY (`id`)
    )";
    $foodorder = "
    CREATE TABLE IF NOT EXISTS `ims_sudu8_page_food_order`(  
    	`id` int(11) NOT NULL AUTO_INCREMENT,
		`order_id` varchar(255) NOT NULL,
		`uniacid` int(11) NOT NULL,
		`username` varchar(255) NOT NULL,
		`usertel` varchar(255) NOT NULL,
		`address` varchar(255) NOT NULL,
		`usertime` varchar(255) NOT NULL,
		`userbeiz` varchar(255) NOT NULL,
		`uid` int(11) NOT NULL,
		`openid` varchar(255) NOT NULL,
		`val` text NOT NULL,
		`price` varchar(255) NOT NULL,
		`creattime` int(11) NOT NULL,
		`flag` int(1) NOT NULL DEFAULT '0',
		PRIMARY KEY (`id`)
    )";
    $foodsj = "
    CREATE TABLE IF NOT EXISTS `ims_sudu8_page_food_sj`(  
    	`id` int(11) NOT NULL AUTO_INCREMENT,
		`thumb` varchar(255) NOT NULL,
		`uniacid` int(11) NOT NULL,
		`names` varchar(255) NOT NULL,
		`times` varchar(255) NOT NULL,
		`fuwu` varchar(255) NOT NULL,
		`qita` varchar(255) NOT NULL,
		`usname` int(1) NOT NULL DEFAULT '0',
		`ustel` int(1) NOT NULL DEFAULT '0',
		`usadd` int(1) NOT NULL DEFAULT '0',
		`usdate` int(1) NOT NULL DEFAULT '0',
		`ustime` int(1) NOT NULL DEFAULT '0',
		`score` int(11) NOT NULL,
		PRIMARY KEY (`id`)
    )";
    $foodtables = "
    CREATE TABLE IF NOT EXISTS `ims_sudu8_page_food_tables`(  
    	`id` int(11) NOT NULL AUTO_INCREMENT,
		`uniacid` int(11) DEFAULT NULL,
		`tnum` int(11) DEFAULT NULL,
		`title` varchar(255) NOT NULL,
		PRIMARY KEY (`id`)
    )";


    $storeconf ="
    CREATE TABLE IF NOT EXISTS `ims_sudu8_page_storeconf`(  
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `search` int(1) NOT NULL,
					  `flag` int(1) NOT NULL,
					  `mapkey` varchar(255) NOT NULL,
					  `ctime` int(11) NOT NULL,
					  PRIMARY KEY (`id`)
					)";

	$customer_base = "
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_customer_base` (
					  `id` int(11) NOT NULL  AUTO_INCREMENT,
					  `openid` varchar(255) NOT NULL,
					  `uniacid` int(11) NOT NULL,
					  PRIMARY KEY (`id`)
					)";
	$customer_pic = "
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_customer_pic` (
					  `id` int(11) NOT NULL  AUTO_INCREMENT,
					  `openid` varchar(255) NOT NULL COMMENT '用户openid',
					  `uniacid` int(11) NOT NULL,
					  `flag` int(1) NOT NULL COMMENT '1发 2',
					  PRIMARY KEY (`id`)
					)";
	$customer_reply = "
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_customer_reply` (
					  `id` int(11) NOT NULL  AUTO_INCREMENT,
					  `type` int(1) DEFAULT NULL COMMENT '1文本 2图片 3图文 4小程序卡片',
					  `content` text NOT NULL,
					  `uniacid` int(11) NOT NULL,
					  `flag` int(1) NOT NULL DEFAULT '1' COMMENT '1开启 2不开启',
					  PRIMARY KEY (`id`)
					)";
	$sign = "
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_sign` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `openid` varchar(255) NOT NULL,
					  `creattime` int(11) NOT NULL,
					  `score` int(11) NOT NULL,
					  PRIMARY KEY (`id`)
					)";
	$sign_con = "
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_sign_con` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `score` varchar(255) NOT NULL DEFAULT '10/20',
					  `max_score` int(11) NOT NULL DEFAULT '10000',
					  PRIMARY KEY (`id`)
					)";
	$sign_lx = "
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_sign_lx` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `openid` varchar(255) NOT NULL,
					  `count` int(11) NOT NULL DEFAULT '0',
					  `max_count` int(11) NOT NULL DEFAULT '0',
					  `all_count` int(11) NOT NULL DEFAULT '0',
					  PRIMARY KEY (`id`)
					)";



	$score_cate = "
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_score_cate` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `num` int(11) NOT NULL,
					  `uniacid` int(11) NOT NULL,
					  `name` varchar(255) NOT NULL,
					  `catepic` varchar(255) NOT NULL,
					  PRIMARY KEY (`id`)
					)";
	$score_order = "
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_score_order` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `order_id` varchar(255) NOT NULL,
					  `uid` int(11) NOT NULL,
					  `openid` varchar(255) NOT NULL,
					  `pid` int(11) NOT NULL,
					  `thumb` varchar(255) NOT NULL,
					  `product` varchar(255) NOT NULL,
					  `price` varchar(255) NOT NULL,
					  `num` varchar(11) NOT NULL,
					  `creattime` int(11) NOT NULL,
					  `flag` int(1) NOT NULL DEFAULT '0',
					  `custime` int(11) NOT NULL DEFAULT '0',
					  PRIMARY KEY (`id`)
					)";
	$score_shop = "
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_score_shop` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					 `uniacid` int(11) NOT NULL,
					  `num` int(11) NOT NULL,
					  `title` varchar(255) NOT NULL,
					  `cid` int(11) NOT NULL,
					  `hits` int(11) NOT NULL,
					  `sale_num` int(11) NOT NULL,
					  `buy_type` varchar(255) NOT NULL DEFAULT '兑换',
					  `thumb` varchar(255) NOT NULL,
					  `text` text NOT NULL,
					  `onlyid` varchar(255) NOT NULL,
					  `desk` varchar(255) NOT NULL,
					  `product_txt` text NOT NULL,
					  `price` varchar(255) NOT NULL,
					  `market_price` varchar(255) NOT NULL,
					  `pro_kc` int(11) NOT NULL DEFAULT '-1',
					  `sale_tnum` int(22) NOT NULL DEFAULT '0',
					  `labels` varchar(255) NOT NULL,
					  `flag` int(1) NOT NULL DEFAULT '1',
					  PRIMARY KEY (`id`)
					)";
	$score = "
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_score` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					 `uniacid` int(11) NOT NULL,
					  `orderid` varchar(255) NOT NULL,
					  `uid` int(11) NOT NULL,
					  `type` varchar(255) NOT NULL,
					  `score` varchar(255) NOT NULL,
					  `message` varchar(255) NOT NULL,
					  `creattime` int(11) NOT NULL,
					  PRIMARY KEY (`id`)
					)";

	$comment = "
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_comment` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					 `uniacid` int(11) NOT NULL,
					  `aid` int(11) NOT NULL COMMENT '文章id',
					  `text` text NOT NULL COMMENT '评论内容',
					  `openid` varchar(255) NOT NULL,
					  `flag` int(1) DEFAULT '0' COMMENT '0未审  1通过  2不通过',
					  `createtime` int(11) NOT NULL,
					  `follow` int(11) DEFAULT '0',
					  PRIMARY KEY (`id`)
					)";
	$share_user = "
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_share_user` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					 `uniacid` int(11) NOT NULL,
					  `uid` int(11) NOT NULL,
					  `pid` int(11) NOT NULL,
					  `creattime` int(11) NOT NULL,
					  PRIMARY KEY (`id`)
					)";

	$printer = "
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_food_printer` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` varchar(255) NOT NULL,
					  `pname` varchar(255) NOT NULL COMMENT '打印机名称',
					  `title` varchar(255) NOT NULL COMMENT '头部标题',
					  `models` varchar(255) NOT NULL COMMENT '打印机类型',
					  `status` int(1) NOT NULL DEFAULT '2' COMMENT '1开启  2不开启',
					  `nid` varchar(255) NOT NULL COMMENT '打印机终端号',
					  `nkey` varchar(255) NOT NULL COMMENT '终端号秘钥',
					  `uid` varchar(255) NOT NULL COMMENT '用户id',
					  `apikey` varchar(255) NOT NULL COMMENT '秘钥',
					  `createtime` int(11) NOT NULL,
					  PRIMARY KEY (`id`)
					)";

	$message = "
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_message` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `mid` varchar(255) NOT NULL COMMENT '模板消息id',
					  `url` varchar(255) NOT NULL COMMENT '页面路径',
					  `flag` int(1) NOT NULL COMMENT '1支付通知 2系统表单通知 3预约通知  4点餐支付通知 5积分兑换成功通知',
					  PRIMARY KEY (`id`)
					)";

	$multicate = "
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_multicate` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `cid` varchar(255) NOT NULL COMMENT '栏目数组',
					  `name` varchar(255) NOT NULL,
					  `ename` varchar(255) NOT NULL,
					  `cdesc` varchar(255) NOT NULL,
					  `type` varchar(20) NOT NULL COMMENT '模板类型',
					  `statue` int(1) NOT NULL DEFAULT '1' COMMENT '多栏目状态',
					  `num` int(10) NOT NULL DEFAULT '50' COMMENT '栏目排序',
					  `list_type` int(2) NOT NULL COMMENT '列表显示类型',
					  `list_style` int(2) NOT NULL COMMENT '列表样式',
					  `list_stylet` char(10) NOT NULL COMMENT '列表样式里的标题样式',
					  `list_tstylel` int(1) NOT NULL,
					  `content` mediumint(9) NOT NULL,
					  `pic_page_btn` int(1) NOT NULL DEFAULT '0',
					  `pic_page_btn_zt` int(1) NOT NULL DEFAULT '0',
					  `cateconf` varchar(500) NOT NULL,
					  `onlyid` varchar(255) NOT NULL,
					  PRIMARY KEY (`id`)
					)";

	$multipro ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_multipro` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `multi_id` int(11) NOT NULL,
					  `proid` int(11) NOT NULL,
					  `cid` int(11) NOT NULL,
					  `tid` int(11) NOT NULL COMMENT '顶级栏目id',
					  PRIMARY KEY (`id`)
					)";

	$duo_p_address ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_duo_products_address` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `openid` varchar(255) NOT NULL,
					  `name` varchar(255) NOT NULL,
					  `mobile` varchar(255) NOT NULL,
					  `address` varchar(1000) NOT NULL,
					  `more_address` varchar(1000) NOT NULL,
					  `postalcode` varchar(255) NOT NULL,
					  `is_mo` int(1) NOT NULL DEFAULT '1',
					  `creattime` int(11) NOT NULL,
					  `froms` varchar(255) NOT NULL,
					  PRIMARY KEY (`id`)
					)";

	$duo_p_gwc ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_duo_products_gwc` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `uid` int(11) NOT NULL,
					  `pid` int(11) NOT NULL,
					  `pvid` int(11) NOT NULL,
					  `num` int(11) NOT NULL,
					  `creattime` int(11) NOT NULL,
					  `flag` int(1) NOT NULL DEFAULT '1',
					  PRIMARY KEY (`id`)
					)";

	$duo_p_order ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_duo_products_order` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `uid` int(11) NOT NULL,
					  `openid` varchar(255) NOT NULL,
					  `order_id` varchar(255) NOT NULL,
					  `price` float NOT NULL,
					  `jsondata` text NOT NULL,
					  `coupon` int(11) NOT NULL DEFAULT '0',
					  `jf` varchar(255) NOT NULL DEFAULT '0',
					  `address` int(11) NOT NULL DEFAULT '0',
					  `m_address` varchar(1000) NOT NULL,
					  `liuyan` varchar(1000) NOT NULL,
					  `creattime` int(11) NOT NULL,
					  `hxtime` int(11) NOT NULL DEFAULT '0',
					  `nav` int(1) NOT NULL DEFAULT '1' COMMENT '1发货  2自提',
					  `kuadi` varchar(255) NOT NULL,
					  `kuaidihao` varchar(255) NOT NULL,
					  `flag` int(1) NOT NULL DEFAULT '0' COMMENT '0未支付1已支付2已结算3已过期',
					  PRIMARY KEY (`id`)
					)";

	$duo_p_value ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_duo_products_type_value` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `pid` int(11) NOT NULL,
					  `type1` varchar(255) NOT NULL,
					  `type2` varchar(255) NOT NULL,
					  `type3` varchar(255) NOT NULL,
					  `kc` varchar(255) NOT NULL,
					  `price` varchar(255) NOT NULL,
					  `hnum` varchar(255) NOT NULL,
					  `comment` varchar(255) NOT NULL,
					  `thumb` varchar(255) NOT NULL,
					  PRIMARY KEY (`id`)
					)";

	$duo_p_yunfei ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_duo_products_yunfei` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `yfei` varchar(255) NOT NULL,
					  `byou` varchar(255) NOT NULL,
					  PRIMARY KEY (`id`)
					)";

	$fx_gz ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_fx_gz` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `fx_cj` int(1) NOT NULL DEFAULT '4' COMMENT '1一级2二级3三级4不启用',
					  `sxj_gx` int(1) NOT NULL DEFAULT '1' COMMENT '1点击分享2首次下单3首次付款',
					  `fxs_sz` int(1) NOT NULL DEFAULT '1' COMMENT '1无条件2申请3消费次数4消费金额5购买商品',
					  `fxs_sz_val` varchar(255) NOT NULL DEFAULT '0' COMMENT '分销商规则值',
					  `fxs_xy` text NOT NULL,
					  `one_bili` int(11) NOT NULL DEFAULT '0' COMMENT '一级比例',
					  `two_bili` int(11) NOT NULL DEFAULT '0' COMMENT '二级比例',
					  `three_bili` int(11) NOT NULL DEFAULT '0' COMMENT '三级比例',
					  `txmoney` float NOT NULL DEFAULT '10',
					  PRIMARY KEY (`id`)
					)";

	$fx_ls ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_fx_ls` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `openid` varchar(1000) NOT NULL COMMENT '消费者openid',
					  `parent_id` varchar(1000) NOT NULL COMMENT '父级获得的钱',
					  `parent_id_get` float NOT NULL COMMENT '父级获得的钱',
					  `p_parent_id` varchar(1000) NOT NULL COMMENT '父级的父级的id',
					  `p_parent_id_get` float NOT NULL COMMENT '父级的父级获得的钱',
					  `p_p_parent_id` varchar(1000) NOT NULL COMMENT '父级的父级的父级的id',
					  `p_p_parent_id_get` float NOT NULL COMMENT '父级的父级的父级获得的钱',
					  `order_id` varchar(1000) NOT NULL COMMENT '订单id',
					  `creattime` int(11) NOT NULL,
					  `flag` int(1) NOT NULL DEFAULT '1' COMMENT '1待分成2已分成3取消分成',
					  PRIMARY KEY (`id`)
					)";

	$fx_sq ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_fx_sq` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `openid` varchar(255) NOT NULL,
					  `truename` varchar(255) NOT NULL,
					  `truetel` varchar(255) NOT NULL,
					  `creattime` int(11) NOT NULL,
					  `flag` int(1) NOT NULL DEFAULT '1' COMMENT '1申请中2已通过3不通过',
					  PRIMARY KEY (`id`)
					)";

	$fx_tx ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_fx_tx` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `openid` varchar(1000) NOT NULL,
					  `money` float NOT NULL,
					  `creattime` int(11) NOT NULL,
					  `types` int(1) NOT NULL DEFAULT '1' COMMENT '1余额2微信3支付宝',
					  `zfbzh` varchar(255) NOT NULL,
					  `zfbxm` varchar(255) NOT NULL,
					  `flag` int(1) NOT NULL DEFAULT '1' COMMENT '1申请中2已通过3已拒绝',
					  `txtime` int(11) NOT NULL DEFAULT '0',
					  PRIMARY KEY (`id`)
					)";

	$multicates ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_multicates` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `sort` int(5) NOT NULL DEFAULT '1',
					  `status` int(1) NOT NULL DEFAULT '1',
					  `varible` varchar(12) NOT NULL COMMENT '筛选值名称',
					  `pid` int(5) NOT NULL DEFAULT '0',
					  `uniacid` int(5) NOT NULL,
					  PRIMARY KEY (`id`)
					)";

	$video_pay ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_video_pay` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `openid` varchar(255) NOT NULL,
					  `pid` int(11) NOT NULL,
					  `orderid` varchar(255) NOT NULL,
					  `paymoney` float NOT NULL,
					  `creattime` int(11) NOT NULL,
					  PRIMARY KEY (`id`)
					)";

	//拼团开始180417
	$ptgz ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_pt_gz` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `types` int(1) NOT NULL DEFAULT '1',
					  `is_score` int(1) NOT NULL DEFAULT '1' COMMENT '1不启用 2启用【启用积分抵扣】',
					  `is_tuanz` int(1) NOT NULL DEFAULT '1' COMMENT '1不启用2启用【启用团长优惠】',
					  `is_pt` int(1) NOT NULL DEFAULT '2' COMMENT '1不启用2启用【是否自动成团】',
					  `pt_time` int(11) NOT NULL DEFAULT '24' COMMENT '成团时间',
					  `fahuo` int(11) NOT NULL DEFAULT '7' COMMENT '自动发货',
					  `guiz` text NOT NULL,
					  PRIMARY KEY (`id`)
					)";
	$ptcate ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_pt_cate` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `num` int(11) NOT NULL,
					  `title` varchar(255) NOT NULL,
					  `creattime` int(11) NOT NULL,
					  PRIMARY KEY (`id`)
					)";

	$ptpro ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_pt_pro` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `num` int(11) NOT NULL,
					  `cid` int(11) NOT NULL,
					  `pcid` int(11) NOT NULL,
					  `type_x` int(1) NOT NULL DEFAULT '0',
					  `type_y` int(1) NOT NULL DEFAULT '0',
					  `type_i` int(1) NOT NULL DEFAULT '0',
					  `title` varchar(255) NOT NULL,
					  `price` float NOT NULL DEFAULT '0' COMMENT '拼团价[显示用，一般设置最低]',
					  `mark_price` float NOT NULL DEFAULT '0' COMMENT '单买价[显示用]',
					  `thumb` varchar(255) NOT NULL COMMENT '缩略图',
					  `imgtext` varchar(2000) NOT NULL COMMENT '组图',
					  `descs` varchar(1000) NOT NULL COMMENT '简介',
					  `texts` text NOT NULL COMMENT '详情',
					  `types` int(1) NOT NULL DEFAULT '1' COMMENT '拼团类型1单层团2阶梯团',
					  `explains` varchar(255) NOT NULL COMMENT '标签',
					  `pt_min` int(11) NOT NULL DEFAULT '2' COMMENT '拼团最小人数',
					  `pt_max` int(11) NOT NULL DEFAULT '5' COMMENT '拼团最大人数',
					  `score` int(11) NOT NULL COMMENT '最多可抵用积分',
					  `xsl` int(11) NOT NULL DEFAULT '0',
					  `onlyid` int(11) NOT NULL,
					  PRIMARY KEY (`id`)
					)";
	$ptproval ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_pt_pro_val` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `pid` int(11) NOT NULL,
					  `type1` varchar(255) NOT NULL,
					  `type2` varchar(255) NOT NULL,
					  `type3` varchar(255) NOT NULL,
					  `kc` float NOT NULL,
					  `price` float NOT NULL,
					  `dprice` float NOT NULL,
					  `thumb` varchar(255) NOT NULL,
					  `comment` varchar(255) NOT NULL,
					  PRIMARY KEY (`id`)
					)";
	$ptshare ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_pt_share` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `shareid` varchar(255) NOT NULL,
					  `openid` varchar(255) NOT NULL,
					  `pid` int(11) NOT NULL COMMENT '商品id',
					  `creattime` int(11) NOT NULL DEFAULT '0',
					  `join_count` int(11) NOT NULL DEFAULT '1',
					  `flag` int(1) NOT NULL DEFAULT '1' COMMENT '1正在进行2已完成3已过期',
					  PRIMARY KEY (`id`)
					)";

	$ptorder ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_pt_order` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `uid` int(11) NOT NULL,
					  `openid` varchar(255) NOT NULL,
					  `order_id` varchar(255) NOT NULL,
					  `price` float NOT NULL DEFAULT '0',
					  `jsondata` text NOT NULL,
					  `coupon` int(11) NOT NULL DEFAULT '0',
					  `jf` varchar(255) NOT NULL DEFAULT '0',
					  `address` int(11) NOT NULL DEFAULT '0',
					  `m_address` varchar(1000) NOT NULL,
					  `liuyan` varchar(1000) NOT NULL,
					  `creattime` int(11) NOT NULL,
					  `hxtime` int(11) NOT NULL DEFAULT '0',
					  `nav` int(1) NOT NULL DEFAULT '1',
					  `kuadi` varchar(255) NOT NULL,
					  `kuaidihao` varchar(255) NOT NULL,
					  `flag` int(1) NOT NULL DEFAULT '0',
					  `types` int(1) NOT NULL DEFAULT '1' COMMENT '1拼团2立即购买',
					  `pt_order` varchar(255) NOT NULL COMMENT '拼团的订单id',
					  `ck` int(1) NOT NULL DEFAULT '1' COMMENT '1开团2参团',
					  `jqr` int(1) NOT NULL DEFAULT '1' COMMENT '1买家2机器人',
					  PRIMARY KEY (`id`)
					)";

	$ptrobot ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_pt_robot` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `openid` varchar(255) NOT NULL,
					  `nickname` varchar(255) NOT NULL,
					  `icon` varchar(2555) NOT NULL,
					  PRIMARY KEY (`id`)
					)";

	$ptrobot ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_pt_robot` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `openid` varchar(255) NOT NULL,
					  `nickname` varchar(255) NOT NULL,
					  `icon` varchar(2555) NOT NULL,
					  PRIMARY KEY (`id`)
					)";

	$form_dd ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_form_dd` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `cid` int(11) NOT NULL,
					  `types` varchar(255) NOT NULL,
					  `datys` int(11) NOT NULL,
					  `pagedatekey` int(11) NOT NULL,
					  `arrkey` int(11) NOT NULL,
					  `creattime` int(11) NOT NULL,
					  PRIMARY KEY (`id`)
					)";

	$usercenter_set ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_usercenter_set` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
  						`usercenterset` varchar(2000) NOT NULL,
					  PRIMARY KEY (`id`)
					)";

	$coupon_set ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_coupon_set` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
  						`flag` int(1) NOT NULL DEFAULT '1',
					  PRIMARY KEY (`id`)
					)";

	$score_get ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_pro_score_get` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `openid` varchar(255) NOT NULL,
					  `pid` int(11) NOT NULL,
					  `types` varchar(255) NOT NULL,
					  `score` int(11) NOT NULL DEFAULT '0',
					  `creattime` int(11) NOT NULL,
					  PRIMARY KEY (`id`)
					)";

	$art_navlist ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_art_navlist` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `title` varchar(255) NOT NULL,
					  `cid` int(11) NOT NULL,
					  `type` int(1) NOT NULL,
					  `bgcolor` varchar(255) NOT NULL,
					  `url` varchar(255) NOT NULL,
					  `flag` int(1) NOT NULL COMMENT '1启用 2不启用',
					  `num` int(11) NOT NULL,
					  PRIMARY KEY (`id`)
					)";

	$art_nav ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_art_nav` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `num` int(11) NOT NULL,
					  `title` varchar(255) NOT NULL,
					  `flag` int(1) NOT NULL,
					  PRIMARY KEY (`id`)
					)";

	//拼团提现
	$pt_tx ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_pt_tx` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `openid` varchar(1000) NOT NULL,
					  `ptorder` varchar(255) NOT NULL  COMMENT '拼团订单号',
					  `money` float NOT NULL,
					  `creattime` int(11) NOT NULL,
					  `flag` int(1) NOT NULL DEFAULT '1' COMMENT '1申请中2已通过3已拒绝',
					  `txtime` int(11) NOT NULL DEFAULT '0',
					  PRIMARY KEY (`id`)
					)";

	//会员卡设置 20180704
	$vip_config ="
	CREATE TABLE IF NOT EXISTS `ims_sudu8_page_vip_config` (
					  `id` int(11) NOT NULL AUTO_INCREMENT,
					  `uniacid` int(11) NOT NULL,
					  `isopen` tinyint(1) NOT NULL DEFAULT '1' COMMENT '会员卡0不开启1开启2强制开启',
					  `name` varchar(255) NOT NULL DEFAULT '会员卡' COMMENT '会员卡名称',
					  `recharge` tinyint(1) NOT NULL DEFAULT '0' COMMENT '充值0直接可用1开卡后可用',
					  `coupon` tinyint(1) NOT NULL DEFAULT '0' COMMENT '领优惠券0直接可用1开卡后可用',
					  `sign` tinyint(1) NOT NULL DEFAULT '0' COMMENT '积分签到0直接可用1开卡后可用',
					  `exchange` tinyint(1) NOT NULL DEFAULT '0' COMMENT '积分兑换0直接可用1开卡后可用',
					  PRIMARY KEY (`id`)
					)";
					
	Db::query($vip_config);  //20180704

	Db::query($pt_tx);  //180605
				
	Db::query($art_nav);  //180507

	Db::query($art_navlist);  //180507
	
	Db::query($score_get);  //180507

	Db::query($coupon_set);  //180504

	Db::query($usercenter_set);  //180504

	Db::query($form_dd);  //180420

	Db::query($ptrobot);  //180417

	Db::query($ptorder);  //180417

	Db::query($ptshare);  //180417

	Db::query($ptproval);  //180417
	
	Db::query($ptpro);  //180417

	Db::query($ptcate);  //180417

	Db::query($ptgz);  //180417

	Db::query($video_pay);  //180412
	
	Db::query($multicates);  //180412

	Db::query($fx_tx);  //180410 
	
	Db::query($fx_sq);  //180410 

	Db::query($fx_ls);  //180410 

	Db::query($fx_gz);  //180410 

	Db::query($duo_p_yunfei);  //180410 

	Db::query($duo_p_value);  //180410 

	Db::query($duo_p_gwc);  //180410 

	Db::query($duo_p_order);  //180410  

	Db::query($duo_p_address);  //180410  

	Db::query($multipro);  //180330  多栏目商品表

	Db::query($multicate);  //180330  多栏目栏目表

	Db::query($message);
	
	Db::query($printer);
	
	Db::query($comment);
	Db::query($share_user);	

	Db::query($score);
	Db::query($score_shop);
	Db::query($score_order);
	Db::query($score_cate);
	
	Db::query($sign);
	Db::query($sign_lx);
	Db::query($sign_con);

	Db::query($food);
	Db::query($foodcate);
	Db::query($foodorder);
	Db::query($foodsj);
	Db::query($foodtables);
	
	Db::query($storeconf);
	Db::query($customer_base);
	Db::query($customer_pic);
	Db::query($customer_reply);