-- MySQL dump 10.13  Distrib 5.5.40, for Win32 (x86)
--
-- Host: localhost    Database: mendian
-- ------------------------------------------------------
-- Server version	5.5.40

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `uid` mediumint(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(32) NOT NULL DEFAULT 'e10adc3949ba59abbe56e057f20f883e' COMMENT '密码',
  `icon` varchar(255) DEFAULT NULL COMMENT '头像',
  `group` int(11) DEFAULT '1' COMMENT '所属分组  1普通用户（小程序管理员【分配，未分配】）    2总管理员',
  `lastloginip` int(10) NOT NULL DEFAULT '0',
  `lastlogintime` int(10) unsigned NOT NULL DEFAULT '0',
  `email` varchar(40) NOT NULL DEFAULT '',
  `mobile` varchar(11) NOT NULL DEFAULT '',
  `realname` varchar(50) NOT NULL DEFAULT '',
  `openid` varchar(255) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否有效(2:无效,1:有效)',
  `updatetime` int(10) NOT NULL DEFAULT '0',
  `num` int(11) DEFAULT '0' COMMENT '0不做限制',
  `jxs` int(11) DEFAULT '0',
  `overtime` int(11) DEFAULT NULL,
  `flag` int(11) DEFAULT '1' COMMENT '0不允许1允许',
  PRIMARY KEY (`uid`),
  KEY `username` (`username`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','4b871c40db6339036895aa5752c1469c','http://127.0.0.1/upimages/20181123/ee234d1dd8e04342b7111d201c35058b301.png',2,1270,1542979623,'','12365456598','莎莎','',1,0,0,0,NULL,1);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_group`
--

DROP TABLE IF EXISTS `admin_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_group` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text,
  `rules` varchar(500) NOT NULL DEFAULT '' COMMENT '用户组拥有的规则id，多个规则 , 隔开',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `listorder` (`listorder`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_group`
--

LOCK TABLES `admin_group` WRITE;
/*!40000 ALTER TABLE `admin_group` DISABLE KEYS */;
INSERT INTO `admin_group` VALUES (1,'普通管理员','管理本用户的小程序','',0,1477622552),(2,'总管理员','管理所有用户及小程序','',0,1476067479),(3,'代理商','管理旗下生成的小程序','',0,1476067479);
/*!40000 ALTER TABLE `admin_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `applet`
--

DROP TABLE IF EXISTS `applet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `applet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '小程序名称',
  `thumb` varchar(255) DEFAULT NULL COMMENT '小程序LOGO',
  `comment` varchar(255) DEFAULT NULL COMMENT '小程序描述',
  `appID` varchar(255) DEFAULT NULL,
  `appSecret` varchar(255) DEFAULT NULL COMMENT '秘钥',
  `mchid` varchar(255) DEFAULT NULL COMMENT '微信支付商户号',
  `signkey` varchar(255) DEFAULT NULL COMMENT '支付秘钥',
  `adminid` int(11) DEFAULT NULL,
  `jxs` int(11) DEFAULT '0',
  `dateline` int(11) DEFAULT NULL,
  `flag` int(11) DEFAULT '0' COMMENT '0开发中   1正常使用',
  `xcxId` varchar(255) DEFAULT NULL,
  `sub_mchid` varchar(255) DEFAULT NULL,
  `identity` int(1) NOT NULL DEFAULT '1' COMMENT '1普通用户 2子商户',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `applet`
--

LOCK TABLES `applet` WRITE;
/*!40000 ALTER TABLE `applet` DISABLE KEYS */;
/*!40000 ALTER TABLE `applet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image_url`
--

DROP TABLE IF EXISTS `image_url`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image_url` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appletid` int(11) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `dateline` int(11) DEFAULT NULL,
  `flag` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image_url`
--

LOCK TABLES `image_url` WRITE;
/*!40000 ALTER TABLE `image_url` DISABLE KEYS */;
/*!40000 ALTER TABLE `image_url` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_model`
--

DROP TABLE IF EXISTS `ims_model`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_model` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_model`
--

LOCK TABLES `ims_model` WRITE;
/*!40000 ALTER TABLE `ims_model` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_model` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_model_type`
--

DROP TABLE IF EXISTS `ims_model_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_model_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) DEFAULT NULL,
  `datas` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_model_type`
--

LOCK TABLES `ims_model_type` WRITE;
/*!40000 ALTER TABLE `ims_model_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_model_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_about`
--

DROP TABLE IF EXISTS `ims_sudu8_page_about`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_about` (
  `content` mediumtext,
  `uniacid` int(11) NOT NULL,
  `header` int(11) DEFAULT '0',
  `tel_box` int(11) DEFAULT '0',
  `serv_box` int(11) DEFAULT '0',
  PRIMARY KEY (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_about`
--

LOCK TABLES `ims_sudu8_page_about` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_about` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_about` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_art_nav`
--

DROP TABLE IF EXISTS `ims_sudu8_page_art_nav`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_art_nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `flag` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_art_nav`
--

LOCK TABLES `ims_sudu8_page_art_nav` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_art_nav` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_art_nav` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_art_navlist`
--

DROP TABLE IF EXISTS `ims_sudu8_page_art_navlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_art_navlist` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_art_navlist`
--

LOCK TABLES `ims_sudu8_page_art_navlist` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_art_navlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_art_navlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_banner`
--

DROP TABLE IF EXISTS `ims_sudu8_page_banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_banner` (
  `uniacid` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` char(20) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `flag` int(1) NOT NULL,
  `num` int(10) NOT NULL,
  `descp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_banner`
--

LOCK TABLES `ims_sudu8_page_banner` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_banner` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_base`
--

DROP TABLE IF EXISTS `ims_sudu8_page_base`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_base` (
  `uniacid` int(11) NOT NULL DEFAULT '0',
  `index_style` varchar(255) DEFAULT NULL,
  `about_style` varchar(255) DEFAULT NULL,
  `prolist_style` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `longitude` varchar(20) DEFAULT NULL,
  `latitude` varchar(20) DEFAULT NULL,
  `about` text,
  `aboutCN` varchar(255) DEFAULT '门店介绍',
  `aboutCNen` varchar(255) DEFAULT 'About Store',
  `index_about_title` varchar(255) DEFAULT NULL,
  `catename` varchar(255) DEFAULT '产品 & 服务',
  `catenameen` varchar(255) DEFAULT 'Products and Services',
  `copyright` varchar(255) DEFAULT '技术支持：小程序科技',
  `copyimg` varchar(255) NOT NULL,
  `tel_b` varchar(255) DEFAULT NULL,
  `footer_style` varchar(255) DEFAULT NULL,
  `base_color` varchar(255) DEFAULT NULL,
  `base_color2` varchar(255) DEFAULT NULL,
  `index_pro_btn` varchar(255) DEFAULT NULL,
  `index_pro_lstyle` varchar(255) DEFAULT NULL,
  `index_pro_tstyle` varchar(255) DEFAULT NULL,
  `index_pro_ts_al` varchar(255) DEFAULT NULL,
  `base_color_t` text NOT NULL,
  `c_title` int(2) NOT NULL,
  `video` varchar(255) NOT NULL,
  `v_img` varchar(255) NOT NULL,
  `i_b_x_ts` int(2) NOT NULL,
  `i_b_y_ts` int(2) NOT NULL,
  `catename_x` varchar(255) NOT NULL,
  `catenameen_x` varchar(255) NOT NULL,
  `tel_box` int(1) NOT NULL,
  `tabbar_bg` char(10) NOT NULL,
  `tabbar_tc` char(10) NOT NULL,
  `tabbar` text NOT NULL,
  `tabnum` int(1) NOT NULL,
  `copy_do` int(1) NOT NULL,
  `copy_id` int(5) NOT NULL,
  `base_tcolor` varchar(10) NOT NULL,
  `color_bar` char(8) DEFAULT NULL,
  `c_b_bg` varchar(255) DEFAULT NULL,
  `c_b_btn` varchar(255) DEFAULT NULL,
  `i_b_x_iw` varchar(255) DEFAULT NULL,
  `form_index` int(1) DEFAULT NULL,
  `tabbar_tca` char(10) DEFAULT NULL,
  `tabbar_time` int(11) DEFAULT NULL,
  `config` varchar(1000) DEFAULT NULL,
  `tabbar_t` int(11) NOT NULL DEFAULT '1',
  `slide` varchar(2000) DEFAULT NULL,
  `hxmm` varchar(255) DEFAULT NULL,
  `logo2` varchar(255) DEFAULT NULL,
  `sharejf` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_base`
--

LOCK TABLES `ims_sudu8_page_base` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_base` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_base` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_beizhu`
--

DROP TABLE IF EXISTS `ims_sudu8_page_beizhu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_beizhu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `creattime` int(11) NOT NULL,
  `beizhu` varchar(500) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_beizhu`
--

LOCK TABLES `ims_sudu8_page_beizhu` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_beizhu` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_beizhu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_cate`
--

DROP TABLE IF EXISTS `ims_sudu8_page_cate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `cid` int(11) NOT NULL COMMENT '父栏目ID',
  `uniacid` int(11) NOT NULL COMMENT 'uniacid',
  `name` varchar(255) NOT NULL COMMENT '栏目名',
  `ename` varchar(255) NOT NULL COMMENT '栏目英文名',
  `cdesc` varchar(255) NOT NULL,
  `type` varchar(20) NOT NULL COMMENT '栏目类型',
  `show_i` int(1) NOT NULL DEFAULT '0' COMMENT '首页显示',
  `statue` int(1) NOT NULL DEFAULT '1' COMMENT '栏目状态',
  `num` int(3) NOT NULL DEFAULT '50' COMMENT '栏目排序',
  `catepic` varchar(255) NOT NULL COMMENT '栏目图片',
  `list_type` int(2) NOT NULL COMMENT '列表显示类型',
  `list_style` int(2) NOT NULL COMMENT '列表样式',
  `list_stylet` char(10) NOT NULL COMMENT '列表样式里的标题样式',
  `list_tstyle` int(2) NOT NULL COMMENT '首页标题样式',
  `list_tstylel` int(2) NOT NULL,
  `content` mediumtext NOT NULL,
  `pic_page_btn` int(1) DEFAULT '0',
  `pic_page_btn_zt` int(1) NOT NULL DEFAULT '0',
  `cateconf` varchar(500) DEFAULT NULL,
  `onlyid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_cate`
--

LOCK TABLES `ims_sudu8_page_cate` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_cate` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_cate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_collect`
--

DROP TABLE IF EXISTS `ims_sudu8_page_collect`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_collect` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `cid` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_collect`
--

LOCK TABLES `ims_sudu8_page_collect` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_collect` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_collect` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_comment`
--

DROP TABLE IF EXISTS `ims_sudu8_page_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `aid` int(11) NOT NULL COMMENT '文章id',
  `text` text NOT NULL COMMENT '评论内容',
  `openid` varchar(255) NOT NULL,
  `flag` int(1) DEFAULT '0' COMMENT '0未审  1通过  2不通过',
  `createtime` int(11) NOT NULL,
  `follow` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_comment`
--

LOCK TABLES `ims_sudu8_page_comment` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_copyright`
--

DROP TABLE IF EXISTS `ims_sudu8_page_copyright`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_copyright` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `copycon` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_copyright`
--

LOCK TABLES `ims_sudu8_page_copyright` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_copyright` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_copyright` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_coupon`
--

DROP TABLE IF EXISTS `ims_sudu8_page_coupon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_coupon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL DEFAULT '50' COMMENT '序号排序',
  `title` varchar(255) DEFAULT NULL,
  `uniacid` int(11) NOT NULL COMMENT '小程序编号',
  `price` varchar(255) NOT NULL DEFAULT '0' COMMENT '优惠价格',
  `pay_money` varchar(255) NOT NULL DEFAULT '0' COMMENT '使用条件价格',
  `btime` int(11) NOT NULL DEFAULT '0' COMMENT '使用开始日期',
  `etime` int(11) NOT NULL DEFAULT '0' COMMENT '优惠券结束日期',
  `counts` int(11) NOT NULL DEFAULT '-1' COMMENT '优惠券总数',
  `xz_count` int(11) NOT NULL DEFAULT '0' COMMENT '每人限制领取数',
  `creattime` int(11) NOT NULL COMMENT '优惠券创建时间',
  `flag` int(1) NOT NULL DEFAULT '1' COMMENT '0关闭   1开启',
  `color` char(10) NOT NULL DEFAULT '#ff6600	',
  `nownum` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_coupon`
--

LOCK TABLES `ims_sudu8_page_coupon` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_coupon` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_coupon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_coupon_set`
--

DROP TABLE IF EXISTS `ims_sudu8_page_coupon_set`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_coupon_set` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_coupon_set`
--

LOCK TABLES `ims_sudu8_page_coupon_set` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_coupon_set` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_coupon_set` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_coupon_user`
--

DROP TABLE IF EXISTS `ims_sudu8_page_coupon_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_coupon_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT NULL COMMENT '小程序id',
  `uid` int(11) DEFAULT NULL COMMENT '用户id',
  `cid` int(11) DEFAULT NULL COMMENT '优惠券id',
  `ltime` int(11) DEFAULT '0' COMMENT '领取时间',
  `utime` int(11) DEFAULT '0' COMMENT '使用时间',
  `btime` int(11) DEFAULT '0' COMMENT '开始时间',
  `etime` int(11) DEFAULT '0' COMMENT '结束时间',
  `flag` int(11) NOT NULL DEFAULT '0' COMMENT '0未使用1已使用2已过期',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_coupon_user`
--

LOCK TABLES `ims_sudu8_page_coupon_user` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_coupon_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_coupon_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_customer_base`
--

DROP TABLE IF EXISTS `ims_sudu8_page_customer_base`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_customer_base` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `openid` varchar(255) NOT NULL,
  `uniacid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_customer_base`
--

LOCK TABLES `ims_sudu8_page_customer_base` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_customer_base` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_customer_base` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_customer_pic`
--

DROP TABLE IF EXISTS `ims_sudu8_page_customer_pic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_customer_pic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `openid` varchar(255) NOT NULL COMMENT '用户openid',
  `uniacid` int(11) NOT NULL,
  `flag` int(1) NOT NULL COMMENT '1发 2',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_customer_pic`
--

LOCK TABLES `ims_sudu8_page_customer_pic` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_customer_pic` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_customer_pic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_customer_reply`
--

DROP TABLE IF EXISTS `ims_sudu8_page_customer_reply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_customer_reply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(1) DEFAULT NULL COMMENT '1文本 2图片 3图文 4小程序卡片',
  `content` text NOT NULL,
  `uniacid` int(11) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '1' COMMENT '1开启 2不开启',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_customer_reply`
--

LOCK TABLES `ims_sudu8_page_customer_reply` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_customer_reply` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_customer_reply` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_diy`
--

DROP TABLE IF EXISTS `ims_sudu8_page_diy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_diy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL COMMENT '页面名称',
  `url` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `creattime` int(11) DEFAULT NULL,
  `flag` int(11) DEFAULT '1' COMMENT '0关闭 1 发布',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_diy`
--

LOCK TABLES `ims_sudu8_page_diy` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_diy` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_diy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_diy_md`
--

DROP TABLE IF EXISTS `ims_sudu8_page_diy_md`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_diy_md` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT NULL COMMENT '小程序ID',
  `did` int(11) DEFAULT NULL COMMENT 'DIY表对应的id',
  `mid` int(11) DEFAULT NULL COMMENT '模块对应的id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_diy_md`
--

LOCK TABLES `ims_sudu8_page_diy_md` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_diy_md` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_diy_md` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_duo_products_address`
--

DROP TABLE IF EXISTS `ims_sudu8_page_duo_products_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_duo_products_address` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_duo_products_address`
--

LOCK TABLES `ims_sudu8_page_duo_products_address` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_duo_products_address` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_duo_products_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_duo_products_gwc`
--

DROP TABLE IF EXISTS `ims_sudu8_page_duo_products_gwc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_duo_products_gwc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pvid` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `creattime` int(11) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_duo_products_gwc`
--

LOCK TABLES `ims_sudu8_page_duo_products_gwc` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_duo_products_gwc` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_duo_products_gwc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_duo_products_order`
--

DROP TABLE IF EXISTS `ims_sudu8_page_duo_products_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_duo_products_order` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_duo_products_order`
--

LOCK TABLES `ims_sudu8_page_duo_products_order` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_duo_products_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_duo_products_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_duo_products_type_value`
--

DROP TABLE IF EXISTS `ims_sudu8_page_duo_products_type_value`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_duo_products_type_value` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_duo_products_type_value`
--

LOCK TABLES `ims_sudu8_page_duo_products_type_value` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_duo_products_type_value` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_duo_products_type_value` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_duo_products_yunfei`
--

DROP TABLE IF EXISTS `ims_sudu8_page_duo_products_yunfei`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_duo_products_yunfei` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `yfei` varchar(255) NOT NULL,
  `byou` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_duo_products_yunfei`
--

LOCK TABLES `ims_sudu8_page_duo_products_yunfei` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_duo_products_yunfei` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_duo_products_yunfei` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_food`
--

DROP TABLE IF EXISTS `ims_sudu8_page_food`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_food` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_food`
--

LOCK TABLES `ims_sudu8_page_food` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_food` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_food` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_food_cate`
--

DROP TABLE IF EXISTS `ims_sudu8_page_food_cate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_food_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `dateline` int(11) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_food_cate`
--

LOCK TABLES `ims_sudu8_page_food_cate` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_food_cate` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_food_cate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_food_order`
--

DROP TABLE IF EXISTS `ims_sudu8_page_food_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_food_order` (
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
  `zh` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_food_order`
--

LOCK TABLES `ims_sudu8_page_food_order` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_food_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_food_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_food_printer`
--

DROP TABLE IF EXISTS `ims_sudu8_page_food_printer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_food_printer` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_food_printer`
--

LOCK TABLES `ims_sudu8_page_food_printer` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_food_printer` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_food_printer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_food_sj`
--

DROP TABLE IF EXISTS `ims_sudu8_page_food_sj`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_food_sj` (
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
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `tags` varchar(100) DEFAULT NULL,
  `notice` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_food_sj`
--

LOCK TABLES `ims_sudu8_page_food_sj` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_food_sj` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_food_sj` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_food_tables`
--

DROP TABLE IF EXISTS `ims_sudu8_page_food_tables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_food_tables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT NULL,
  `tnum` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_food_tables`
--

LOCK TABLES `ims_sudu8_page_food_tables` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_food_tables` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_food_tables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_form_config`
--

DROP TABLE IF EXISTS `ims_sudu8_page_form_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_form_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `val` varchar(255) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_form_config`
--

LOCK TABLES `ims_sudu8_page_form_config` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_form_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_form_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_form_dd`
--

DROP TABLE IF EXISTS `ims_sudu8_page_form_dd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_form_dd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `types` varchar(255) NOT NULL,
  `datys` int(11) NOT NULL,
  `pagedatekey` int(11) NOT NULL,
  `arrkey` int(11) NOT NULL,
  `creattime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_form_dd`
--

LOCK TABLES `ims_sudu8_page_form_dd` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_form_dd` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_form_dd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_form_duo`
--

DROP TABLE IF EXISTS `ims_sudu8_page_form_duo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_form_duo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `formname` varchar(255) NOT NULL,
  `formid` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `name` varchar(255) NOT NULL COMMENT '字段名称',
  `ismust` int(1) NOT NULL DEFAULT '1' COMMENT '是否必填0非必填 1必填',
  `default_val` varchar(500) NOT NULL,
  `prompt` varchar(500) NOT NULL,
  `tp_text` varchar(500) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_form_duo`
--

LOCK TABLES `ims_sudu8_page_form_duo` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_form_duo` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_form_duo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_formcon`
--

DROP TABLE IF EXISTS `ims_sudu8_page_formcon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_formcon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `creattime` int(11) NOT NULL,
  `val` varchar(2000) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '0',
  `beizhu` varchar(255) NOT NULL,
  `vtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_formcon`
--

LOCK TABLES `ims_sudu8_page_formcon` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_formcon` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_formcon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_formlist`
--

DROP TABLE IF EXISTS `ims_sudu8_page_formlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_formlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `formname` varchar(255) NOT NULL,
  `tp_text` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_formlist`
--

LOCK TABLES `ims_sudu8_page_formlist` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_formlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_formlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_forms`
--

DROP TABLE IF EXISTS `ims_sudu8_page_forms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_forms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `wechat` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `single` varchar(255) DEFAULT NULL,
  `checkbox` varchar(255) DEFAULT NULL,
  `content` text,
  `time` int(10) DEFAULT NULL,
  `status` int(1) DEFAULT '0',
  `vtime` int(10) DEFAULT NULL,
  `sss_beizhu` varchar(255) DEFAULT NULL,
  `timef` varchar(10) DEFAULT NULL,
  `t5` varchar(255) DEFAULT NULL,
  `t6` varchar(255) DEFAULT NULL,
  `c2` varchar(255) DEFAULT NULL,
  `s2` varchar(255) DEFAULT NULL,
  `con2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_forms`
--

LOCK TABLES `ims_sudu8_page_forms` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_forms` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_forms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_forms_config`
--

DROP TABLE IF EXISTS `ims_sudu8_page_forms_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_forms_config` (
  `uniacid` int(11) NOT NULL DEFAULT '0',
  `forms_head` varchar(255) DEFAULT NULL,
  `forms_head_con` text,
  `forms_name` varchar(255) DEFAULT NULL,
  `forms_ename` varchar(255) DEFAULT NULL,
  `forms_title_s` varchar(255) DEFAULT NULL,
  `success` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT '姓名',
  `name_must` int(1) DEFAULT '1',
  `tel` varchar(255) DEFAULT '手机',
  `tel_use` int(1) DEFAULT '1',
  `tel_must` int(1) DEFAULT '1',
  `wechat` varchar(255) DEFAULT '微信',
  `wechat_use` int(1) DEFAULT '1',
  `wechat_must` int(1) DEFAULT '1',
  `address` varchar(255) DEFAULT '地址',
  `address_use` int(1) DEFAULT '1',
  `address_must` int(1) DEFAULT '1',
  `date` varchar(255) DEFAULT '预约时间',
  `date_use` int(1) DEFAULT '1',
  `date_must` int(1) DEFAULT '1',
  `single_n` varchar(255) DEFAULT '性别',
  `single_num` int(2) DEFAULT '2',
  `single_v` varchar(255) DEFAULT '男,女',
  `single_use` int(1) DEFAULT '1',
  `single_must` int(1) DEFAULT '1',
  `checkbox_n` varchar(255) DEFAULT '类型',
  `checkbox_num` int(2) DEFAULT '2',
  `checkbox_v` varchar(255) DEFAULT '栏目一,栏目二',
  `checkbox_use` int(1) DEFAULT '1',
  `content_n` varchar(255) DEFAULT '留言内容',
  `content_use` int(1) DEFAULT '1',
  `content_must` int(1) DEFAULT '1',
  `checkbox_must` int(1) DEFAULT '1',
  `mail_user` varchar(255) DEFAULT NULL,
  `mail_password` varchar(255) DEFAULT NULL,
  `mail_sendto` varchar(255) DEFAULT NULL,
  `forms_btn` varchar(255) DEFAULT NULL,
  `mail_user_name` varchar(255) DEFAULT NULL,
  `forms_style` int(2) DEFAULT '1',
  `forms_inps` int(2) DEFAULT '1',
  `subtime` int(2) DEFAULT '1',
  `time_use` int(1) DEFAULT '1',
  `time_must` int(1) DEFAULT '1',
  `time` varchar(255) DEFAULT NULL,
  `tel_i` int(1) DEFAULT '0',
  `wechat_i` int(1) DEFAULT '0',
  `address_i` int(1) DEFAULT '0',
  `date_i` int(1) DEFAULT '0',
  `time_i` int(1) DEFAULT '0',
  `single_i` int(1) DEFAULT '0',
  `checkbox_i` int(1) DEFAULT '0',
  `content_i` int(1) DEFAULT '0',
  `t5` varchar(255) DEFAULT NULL,
  `t6` varchar(255) DEFAULT NULL,
  `c2` varchar(255) DEFAULT NULL,
  `s2` varchar(255) DEFAULT NULL,
  `con2` varchar(255) DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img1not` varchar(255) NOT NULL,
  PRIMARY KEY (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_forms_config`
--

LOCK TABLES `ims_sudu8_page_forms_config` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_forms_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_forms_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_formt`
--

DROP TABLE IF EXISTS `ims_sudu8_page_formt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_formt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `val` varchar(50) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_formt`
--

LOCK TABLES `ims_sudu8_page_formt` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_formt` DISABLE KEYS */;
INSERT INTO `ims_sudu8_page_formt` VALUES (1,'单行文本','0',1),(2,'多行文本','1',0),(3,'下拉框','2',1),(4,'多选框','3',1),(5,'单选框','4',1),(6,'图片','5',1),(7,'身份证号码','6',0),(8,'日期','7',1),(9,'日期范围','8',0),(10,'城市','9',0),(11,'确认文本','10',0),(12,'时间','11',1),(13,'时间范围','12',0),(14,'提示文本','13',0);
/*!40000 ALTER TABLE `ims_sudu8_page_formt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_fx_gz`
--

DROP TABLE IF EXISTS `ims_sudu8_page_fx_gz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_fx_gz` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_fx_gz`
--

LOCK TABLES `ims_sudu8_page_fx_gz` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_fx_gz` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_fx_gz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_fx_ls`
--

DROP TABLE IF EXISTS `ims_sudu8_page_fx_ls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_fx_ls` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_fx_ls`
--

LOCK TABLES `ims_sudu8_page_fx_ls` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_fx_ls` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_fx_ls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_fx_sq`
--

DROP TABLE IF EXISTS `ims_sudu8_page_fx_sq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_fx_sq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `openid` varchar(255) NOT NULL,
  `truename` varchar(255) NOT NULL,
  `truetel` varchar(255) NOT NULL,
  `creattime` int(11) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '1' COMMENT '1申请中2已通过3不通过',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_fx_sq`
--

LOCK TABLES `ims_sudu8_page_fx_sq` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_fx_sq` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_fx_sq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_fx_tx`
--

DROP TABLE IF EXISTS `ims_sudu8_page_fx_tx`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_fx_tx` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_fx_tx`
--

LOCK TABLES `ims_sudu8_page_fx_tx` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_fx_tx` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_fx_tx` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_message`
--

DROP TABLE IF EXISTS `ims_sudu8_page_message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `mid` varchar(255) NOT NULL COMMENT '模板消息id',
  `url` varchar(255) NOT NULL COMMENT '页面路径',
  `flag` int(1) NOT NULL COMMENT '1支付通知 2系统表单通知 3预约通知  4点餐支付通知 5积分兑换成功通知',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_message`
--

LOCK TABLES `ims_sudu8_page_message` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_money`
--

DROP TABLE IF EXISTS `ims_sudu8_page_money`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_money` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `orderid` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `type` varchar(255) NOT NULL COMMENT '操作',
  `score` varchar(255) NOT NULL COMMENT '金钱',
  `message` varchar(255) NOT NULL COMMENT '说明',
  `creattime` int(11) NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_money`
--

LOCK TABLES `ims_sudu8_page_money` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_money` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_money` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_multicate`
--

DROP TABLE IF EXISTS `ims_sudu8_page_multicate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_multicate` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_multicate`
--

LOCK TABLES `ims_sudu8_page_multicate` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_multicate` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_multicate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_multicates`
--

DROP TABLE IF EXISTS `ims_sudu8_page_multicates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_multicates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sort` int(5) NOT NULL DEFAULT '1',
  `status` int(1) NOT NULL DEFAULT '1',
  `varible` varchar(12) NOT NULL COMMENT '筛选值名称',
  `pid` int(5) NOT NULL DEFAULT '0',
  `uniacid` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_multicates`
--

LOCK TABLES `ims_sudu8_page_multicates` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_multicates` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_multicates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_multipro`
--

DROP TABLE IF EXISTS `ims_sudu8_page_multipro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_multipro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `multi_id` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `tid` int(11) NOT NULL COMMENT '顶级栏目id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_multipro`
--

LOCK TABLES `ims_sudu8_page_multipro` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_multipro` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_multipro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_nav`
--

DROP TABLE IF EXISTS `ims_sudu8_page_nav`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `uniacid` int(11) NOT NULL COMMENT 'UID',
  `statue` int(1) NOT NULL,
  `type` int(2) NOT NULL COMMENT '首页，列表，单页，文章',
  `style` int(2) NOT NULL,
  `url` varchar(999) NOT NULL COMMENT '链接',
  `box_p_tb` float NOT NULL COMMENT '外边距',
  `box_p_lr` float NOT NULL COMMENT '左右间距',
  `number` int(2) NOT NULL COMMENT '数量',
  `img_size` float NOT NULL COMMENT '图片大小',
  `title_color` varchar(10) NOT NULL COMMENT '标题颜色',
  `title_position` int(1) NOT NULL COMMENT '标题样式',
  `title_bg` varchar(15) NOT NULL COMMENT '标题背景色',
  `color_bar` varchar(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `ename` varchar(255) DEFAULT NULL,
  `name_s` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_nav`
--

LOCK TABLES `ims_sudu8_page_nav` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_nav` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_nav` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_navlist`
--

DROP TABLE IF EXISTS `ims_sudu8_page_navlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_navlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '1',
  `type` int(2) NOT NULL COMMENT '0链接 1电话 2导航 3客服 4小程序 5.网页',
  `title` varchar(40) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `url2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_navlist`
--

LOCK TABLES `ims_sudu8_page_navlist` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_navlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_navlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_order`
--

DROP TABLE IF EXISTS `ims_sudu8_page_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `openid` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `product` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `num` int(11) NOT NULL,
  `yhq` varchar(255) NOT NULL,
  `true_price` varchar(255) NOT NULL,
  `creattime` int(11) NOT NULL,
  `custime` int(11) DEFAULT NULL,
  `flag` int(11) NOT NULL DEFAULT '0',
  `pro_user_name` varchar(255) DEFAULT NULL,
  `pro_user_tel` varchar(255) DEFAULT NULL,
  `pro_user_txt` text NOT NULL,
  `overtime` int(11) DEFAULT NULL,
  `reback` int(11) DEFAULT '0' COMMENT '0未还  1已还',
  `is_more` int(1) DEFAULT '0',
  `order_duo` text,
  `coupon` int(11) DEFAULT NULL,
  `proaddress` text,
  `pro_user_add` varchar(100) DEFAULT NULL,
  `beizhu` varchar(500) NOT NULL,
  `beizhu_val` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_order`
--

LOCK TABLES `ims_sudu8_page_order` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_ordering`
--

DROP TABLE IF EXISTS `ims_sudu8_page_ordering`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_ordering` (
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_ordering`
--

LOCK TABLES `ims_sudu8_page_ordering` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_ordering` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_ordering` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_ordering_cate`
--

DROP TABLE IF EXISTS `ims_sudu8_page_ordering_cate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_ordering_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `dateline` int(11) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_ordering_cate`
--

LOCK TABLES `ims_sudu8_page_ordering_cate` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_ordering_cate` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_ordering_cate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_ordering_order`
--

DROP TABLE IF EXISTS `ims_sudu8_page_ordering_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_ordering_order` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_ordering_order`
--

LOCK TABLES `ims_sudu8_page_ordering_order` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_ordering_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_ordering_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_ordering_sj`
--

DROP TABLE IF EXISTS `ims_sudu8_page_ordering_sj`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_ordering_sj` (
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_ordering_sj`
--

LOCK TABLES `ims_sudu8_page_ordering_sj` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_ordering_sj` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_ordering_sj` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_page`
--

DROP TABLE IF EXISTS `ims_sudu8_page_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL,
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_page`
--

LOCK TABLES `ims_sudu8_page_page` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_page` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_pro_score_get`
--

DROP TABLE IF EXISTS `ims_sudu8_page_pro_score_get`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_pro_score_get` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `openid` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  `types` varchar(255) NOT NULL,
  `score` int(11) NOT NULL DEFAULT '0',
  `creattime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_pro_score_get`
--

LOCK TABLES `ims_sudu8_page_pro_score_get` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_pro_score_get` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_pro_score_get` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_products`
--

DROP TABLE IF EXISTS `ims_sudu8_page_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT NULL,
  `pcid` int(11) DEFAULT NULL,
  `uniacid` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `type_x` int(1) DEFAULT NULL,
  `type_y` int(1) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` mediumtext,
  `thumb` varchar(255) DEFAULT NULL,
  `ctime` int(10) DEFAULT NULL,
  `etime` int(10) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `type_i` int(1) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL COMMENT '门店价',
  `market_price` varchar(255) DEFAULT NULL COMMENT '市场价',
  `label_1` int(11) DEFAULT '1' COMMENT '标签',
  `label_2` int(11) DEFAULT '0' COMMENT '标签2',
  `sale_num` int(11) DEFAULT NULL COMMENT '卖出量',
  `score` int(11) DEFAULT NULL COMMENT '评分',
  `product_txt` text,
  `pro_flag` int(11) NOT NULL DEFAULT '0',
  `pro_flag_tel` int(1) DEFAULT '0',
  `pro_flag_data_name` varchar(255) DEFAULT '时间',
  `pro_flag_data` int(1) DEFAULT '0',
  `pro_flag_time` int(1) DEFAULT '0',
  `pro_flag_ding` int(1) DEFAULT '0' COMMENT '是否确认订单',
  `pro_kc` int(11) NOT NULL DEFAULT '-1' COMMENT '库存',
  `pro_xz` int(11) NOT NULL DEFAULT '0' COMMENT '限购',
  `sale_tnum` int(11) NOT NULL DEFAULT '0' COMMENT '总库存不变',
  `sale_type` int(11) DEFAULT '1' COMMENT '0下架  1上架',
  `sale_time` int(11) DEFAULT '0',
  `labels` varchar(255) DEFAULT NULL,
  `is_more` int(1) DEFAULT '0' COMMENT '0不开启多规格 1开启多规格',
  `more_type` text COMMENT '多规格数据',
  `more_type_x` text,
  `more_type_num` text,
  `flag` int(1) DEFAULT '1' COMMENT '0下架1上架',
  `buy_type` varchar(255) NOT NULL DEFAULT '购买',
  `pro_flag_add` int(1) DEFAULT '0',
  `onlyid` varchar(255) DEFAULT NULL,
  `lanmu` varchar(255) DEFAULT NULL,
  `formset` varchar(255) NOT NULL,
  `is_score` int(1) NOT NULL DEFAULT '0',
  `score_num` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_products`
--

LOCK TABLES `ims_sudu8_page_products` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_pt_cate`
--

DROP TABLE IF EXISTS `ims_sudu8_page_pt_cate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_pt_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `creattime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_pt_cate`
--

LOCK TABLES `ims_sudu8_page_pt_cate` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_pt_cate` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_pt_cate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_pt_gz`
--

DROP TABLE IF EXISTS `ims_sudu8_page_pt_gz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_pt_gz` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_pt_gz`
--

LOCK TABLES `ims_sudu8_page_pt_gz` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_pt_gz` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_pt_gz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_pt_order`
--

DROP TABLE IF EXISTS `ims_sudu8_page_pt_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_pt_order` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_pt_order`
--

LOCK TABLES `ims_sudu8_page_pt_order` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_pt_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_pt_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_pt_pro`
--

DROP TABLE IF EXISTS `ims_sudu8_page_pt_pro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_pt_pro` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_pt_pro`
--

LOCK TABLES `ims_sudu8_page_pt_pro` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_pt_pro` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_pt_pro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_pt_pro_val`
--

DROP TABLE IF EXISTS `ims_sudu8_page_pt_pro_val`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_pt_pro_val` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_pt_pro_val`
--

LOCK TABLES `ims_sudu8_page_pt_pro_val` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_pt_pro_val` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_pt_pro_val` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_pt_robot`
--

DROP TABLE IF EXISTS `ims_sudu8_page_pt_robot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_pt_robot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `openid` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `icon` varchar(2555) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_pt_robot`
--

LOCK TABLES `ims_sudu8_page_pt_robot` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_pt_robot` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_pt_robot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_pt_share`
--

DROP TABLE IF EXISTS `ims_sudu8_page_pt_share`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_pt_share` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `shareid` varchar(255) NOT NULL,
  `openid` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL COMMENT '商品id',
  `creattime` int(11) NOT NULL DEFAULT '0',
  `join_count` int(11) NOT NULL DEFAULT '1',
  `flag` int(1) NOT NULL DEFAULT '1' COMMENT '1正在进行2已完成3已过期',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_pt_share`
--

LOCK TABLES `ims_sudu8_page_pt_share` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_pt_share` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_pt_share` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_pt_tx`
--

DROP TABLE IF EXISTS `ims_sudu8_page_pt_tx`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_pt_tx` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `openid` varchar(1000) NOT NULL,
  `ptorder` varchar(255) NOT NULL COMMENT '拼团订单号',
  `money` float NOT NULL,
  `creattime` int(11) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '1' COMMENT '1申请中2已通过3已拒绝',
  `txtime` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_pt_tx`
--

LOCK TABLES `ims_sudu8_page_pt_tx` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_pt_tx` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_pt_tx` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_recharge`
--

DROP TABLE IF EXISTS `ims_sudu8_page_recharge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_recharge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `money` varchar(255) NOT NULL DEFAULT '0',
  `getmoney` varchar(255) NOT NULL DEFAULT '0',
  `getscore` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_recharge`
--

LOCK TABLES `ims_sudu8_page_recharge` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_recharge` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_recharge` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_rechargeconf`
--

DROP TABLE IF EXISTS `ims_sudu8_page_rechargeconf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_rechargeconf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `score` varchar(255) NOT NULL,
  `money` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '充值有礼',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_rechargeconf`
--

LOCK TABLES `ims_sudu8_page_rechargeconf` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_rechargeconf` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_rechargeconf` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_score`
--

DROP TABLE IF EXISTS `ims_sudu8_page_score`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `orderid` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `creattime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_score`
--

LOCK TABLES `ims_sudu8_page_score` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_score` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_score` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_score_cate`
--

DROP TABLE IF EXISTS `ims_sudu8_page_score_cate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_score_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `catepic` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_score_cate`
--

LOCK TABLES `ims_sudu8_page_score_cate` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_score_cate` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_score_cate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_score_order`
--

DROP TABLE IF EXISTS `ims_sudu8_page_score_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_score_order` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_score_order`
--

LOCK TABLES `ims_sudu8_page_score_order` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_score_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_score_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_score_shop`
--

DROP TABLE IF EXISTS `ims_sudu8_page_score_shop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_score_shop` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_score_shop`
--

LOCK TABLES `ims_sudu8_page_score_shop` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_score_shop` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_score_shop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_share_user`
--

DROP TABLE IF EXISTS `ims_sudu8_page_share_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_share_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `creattime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_share_user`
--

LOCK TABLES `ims_sudu8_page_share_user` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_share_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_share_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_sign`
--

DROP TABLE IF EXISTS `ims_sudu8_page_sign`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_sign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `openid` varchar(255) NOT NULL,
  `creattime` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_sign`
--

LOCK TABLES `ims_sudu8_page_sign` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_sign` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_sign` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_sign_con`
--

DROP TABLE IF EXISTS `ims_sudu8_page_sign_con`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_sign_con` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `score` varchar(255) NOT NULL DEFAULT '10/20',
  `max_score` int(11) NOT NULL DEFAULT '10000',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_sign_con`
--

LOCK TABLES `ims_sudu8_page_sign_con` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_sign_con` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_sign_con` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_sign_lx`
--

DROP TABLE IF EXISTS `ims_sudu8_page_sign_lx`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_sign_lx` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `openid` varchar(255) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  `max_count` int(11) NOT NULL DEFAULT '0',
  `all_count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_sign_lx`
--

LOCK TABLES `ims_sudu8_page_sign_lx` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_sign_lx` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_sign_lx` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_store`
--

DROP TABLE IF EXISTS `ims_sudu8_page_store`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `lat` varchar(20) NOT NULL,
  `lon` varchar(20) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `times` varchar(20) NOT NULL,
  `score` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `dateline` int(11) NOT NULL,
  `title1` varchar(50) NOT NULL,
  `title2` varchar(50) NOT NULL,
  `descp` varchar(255) NOT NULL,
  `onlyid` varchar(255) NOT NULL,
  `province` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `proid` int(10) DEFAULT NULL,
  `cityid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_store`
--

LOCK TABLES `ims_sudu8_page_store` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_store` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_store` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_storeconf`
--

DROP TABLE IF EXISTS `ims_sudu8_page_storeconf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_storeconf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `search` int(1) NOT NULL,
  `flag` int(1) NOT NULL,
  `mapkey` varchar(255) NOT NULL,
  `ctime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_storeconf`
--

LOCK TABLES `ims_sudu8_page_storeconf` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_storeconf` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_storeconf` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_system_base`
--

DROP TABLE IF EXISTS `ims_sudu8_page_system_base`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_system_base` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `top_banner` varchar(255) NOT NULL,
  `foot_logo` varchar(255) NOT NULL,
  `ptel` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `ftime` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `qq` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `erweima` varchar(255) NOT NULL,
  `beianxx` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_system_base`
--

LOCK TABLES `ims_sudu8_page_system_base` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_system_base` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_system_base` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_system_cate`
--

DROP TABLE IF EXISTS `ims_sudu8_page_system_cate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_system_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_system_cate`
--

LOCK TABLES `ims_sudu8_page_system_cate` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_system_cate` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_system_cate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_system_news`
--

DROP TABLE IF EXISTS `ims_sudu8_page_system_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_system_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate` varchar(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `creattime` int(11) NOT NULL,
  `text` text NOT NULL,
  `hits` int(11) NOT NULL DEFAULT '0',
  `num` int(11) NOT NULL DEFAULT '50',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_system_news`
--

LOCK TABLES `ims_sudu8_page_system_news` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_system_news` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_system_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_user`
--

DROP TABLE IF EXISTS `ims_sudu8_page_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) unsigned DEFAULT NULL COMMENT '小程序ID',
  `openid` varchar(255) NOT NULL COMMENT '用户的唯一身份ID',
  `createtime` int(11) unsigned NOT NULL COMMENT '加入时间',
  `realname` varchar(255) DEFAULT NULL COMMENT '真实姓名',
  `nickname` varchar(255) NOT NULL DEFAULT '' COMMENT '昵称',
  `avatar` varchar(255) NOT NULL DEFAULT '' COMMENT '头像',
  `icon` varchar(255) DEFAULT NULL COMMENT 'PC版头像',
  `qq` varchar(255) DEFAULT NULL COMMENT 'QQ号',
  `mobile` varchar(255) DEFAULT NULL COMMENT '手机号码',
  `gender` tinyint(1) DEFAULT '0' COMMENT '性别(0:保密 1:男 2:女)',
  `telephone` varchar(15) DEFAULT '' COMMENT '固定电话',
  `idcardtype` tinyint(1) DEFAULT '1' COMMENT '证件类型：身份证 护照 军官证等',
  `idcard` varchar(255) DEFAULT NULL COMMENT '证件号码',
  `address` varchar(255) DEFAULT '' COMMENT '邮寄地址',
  `zipcode` varchar(255) DEFAULT NULL COMMENT '邮编',
  `nationality` varchar(30) DEFAULT '' COMMENT '国籍',
  `resideprovince` varchar(30) DEFAULT '' COMMENT '居住省份',
  `residecity` varchar(30) DEFAULT '' COMMENT '居住城市',
  `residedist` varchar(30) DEFAULT '' COMMENT '居住行政区/县',
  `residecommunity` varchar(30) DEFAULT '' COMMENT '居住小区',
  `residesuite` varchar(30) DEFAULT '' COMMENT '小区、写字楼门牌号',
  `graduateschool` varchar(50) DEFAULT '' COMMENT '毕业学校',
  `company` varchar(50) DEFAULT '' COMMENT '公司',
  `education` varchar(10) DEFAULT '' COMMENT '学历',
  `occupation` varchar(30) DEFAULT '' COMMENT '职业',
  `position` varchar(30) DEFAULT '' COMMENT '职位',
  `revenue` varchar(10) DEFAULT '' COMMENT '年收入',
  `affectivestatus` varchar(30) DEFAULT '' COMMENT '情感状态',
  `lookingfor` varchar(255) DEFAULT '' COMMENT ' 交友目的',
  `bloodtype` varchar(5) DEFAULT '' COMMENT '血型',
  `height` varchar(5) DEFAULT '' COMMENT '身高',
  `weight` varchar(5) DEFAULT '' COMMENT '体重',
  `alipay` varchar(30) DEFAULT '' COMMENT '支付宝帐号',
  `msn` varchar(30) DEFAULT '' COMMENT 'MSN',
  `taobao` varchar(30) DEFAULT '' COMMENT '阿里旺旺',
  `site` varchar(30) DEFAULT '' COMMENT '主页',
  `bio` text COMMENT '自我介绍',
  `interest` text COMMENT '兴趣爱好',
  `money` varchar(255) NOT NULL DEFAULT '0',
  `score` varchar(255) NOT NULL DEFAULT '0',
  `flag` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_user`
--

LOCK TABLES `ims_sudu8_page_user` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_usercenter_set`
--

DROP TABLE IF EXISTS `ims_sudu8_page_usercenter_set`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_usercenter_set` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `usercenterset` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_usercenter_set`
--

LOCK TABLES `ims_sudu8_page_usercenter_set` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_usercenter_set` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_usercenter_set` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_video_pay`
--

DROP TABLE IF EXISTS `ims_sudu8_page_video_pay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_video_pay` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `openid` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  `orderid` varchar(255) NOT NULL,
  `paymoney` float NOT NULL,
  `creattime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_video_pay`
--

LOCK TABLES `ims_sudu8_page_video_pay` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_video_pay` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_video_pay` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_vip_config`
--

DROP TABLE IF EXISTS `ims_sudu8_page_vip_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_vip_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `isopen` tinyint(1) NOT NULL DEFAULT '1' COMMENT '会员卡0不开启1开启2强制开启',
  `name` varchar(255) NOT NULL DEFAULT '会员卡' COMMENT '会员卡名称',
  `recharge` tinyint(1) NOT NULL DEFAULT '0' COMMENT '充值0直接可用1开卡后可用',
  `coupon` tinyint(1) NOT NULL DEFAULT '0' COMMENT '领优惠券0直接可用1开卡后可用',
  `sign` tinyint(1) NOT NULL DEFAULT '0' COMMENT '积分签到0直接可用1开卡后可用',
  `exchange` tinyint(1) NOT NULL DEFAULT '0' COMMENT '积分兑换0直接可用1开卡后可用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_vip_config`
--

LOCK TABLES `ims_sudu8_page_vip_config` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_vip_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_vip_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_page_wxapps`
--

DROP TABLE IF EXISTS `ims_sudu8_page_wxapps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_page_wxapps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT NULL,
  `pcid` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `uniacid` int(11) DEFAULT NULL,
  `type_i` int(1) DEFAULT NULL,
  `appId` varchar(20) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_page_wxapps`
--

LOCK TABLES `ims_sudu8_page_wxapps` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_page_wxapps` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_page_wxapps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_shop_base`
--

DROP TABLE IF EXISTS `ims_sudu8_shop_base`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_shop_base` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `tel` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `xz` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_shop_base`
--

LOCK TABLES `ims_sudu8_shop_base` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_shop_base` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_shop_base` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_shop_cate`
--

DROP TABLE IF EXISTS `ims_sudu8_shop_cate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_shop_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_shop_cate`
--

LOCK TABLES `ims_sudu8_shop_cate` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_shop_cate` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_shop_cate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_shop_orders`
--

DROP TABLE IF EXISTS `ims_sudu8_shop_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_shop_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `mid` int(11) NOT NULL,
  `openid` varchar(255) NOT NULL,
  `allprice` varchar(255) NOT NULL,
  `creattime` int(11) NOT NULL,
  `val` text NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_shop_orders`
--

LOCK TABLES `ims_sudu8_shop_orders` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_shop_orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_shop_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_shop_products`
--

DROP TABLE IF EXISTS `ims_sudu8_shop_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_shop_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `desc` varchar(255) NOT NULL,
  `product_txt` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `w_kc` int(11) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_shop_products`
--

LOCK TABLES `ims_sudu8_shop_products` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_shop_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_shop_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_shop_shops`
--

DROP TABLE IF EXISTS `ims_sudu8_shop_shops`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_shop_shops` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `ewm` varchar(255) NOT NULL,
  `products` varchar(255) NOT NULL,
  `products_kc` text NOT NULL,
  `creattime` int(11) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_shop_shops`
--

LOCK TABLES `ims_sudu8_shop_shops` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_shop_shops` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_shop_shops` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_shop_user`
--

DROP TABLE IF EXISTS `ims_sudu8_shop_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_shop_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) unsigned DEFAULT NULL COMMENT '小程序ID',
  `openid` varchar(255) NOT NULL COMMENT '用户的唯一身份ID',
  `createtime` int(11) unsigned NOT NULL COMMENT '加入时间',
  `realname` varchar(255) DEFAULT NULL COMMENT '真实姓名',
  `nickname` varchar(255) NOT NULL DEFAULT '' COMMENT '昵称',
  `avatar` varchar(255) NOT NULL DEFAULT '' COMMENT '头像',
  `icon` varchar(255) DEFAULT NULL COMMENT 'PC版头像',
  `qq` varchar(255) DEFAULT NULL COMMENT 'QQ号',
  `mobile` varchar(255) DEFAULT NULL COMMENT '手机号码',
  `gender` tinyint(1) DEFAULT '0' COMMENT '性别(0:保密 1:男 2:女)',
  `telephone` varchar(15) DEFAULT '' COMMENT '固定电话',
  `idcardtype` tinyint(1) DEFAULT '1' COMMENT '证件类型：身份证 护照 军官证等',
  `idcard` varchar(255) DEFAULT NULL COMMENT '证件号码',
  `address` varchar(255) DEFAULT '' COMMENT '邮寄地址',
  `zipcode` varchar(255) DEFAULT NULL COMMENT '邮编',
  `nationality` varchar(30) DEFAULT '' COMMENT '国籍',
  `resideprovince` varchar(30) DEFAULT '' COMMENT '居住省份',
  `residecity` varchar(30) DEFAULT '' COMMENT '居住城市',
  `residedist` varchar(30) DEFAULT '' COMMENT '居住行政区/县',
  `residecommunity` varchar(30) DEFAULT '' COMMENT '居住小区',
  `residesuite` varchar(30) DEFAULT '' COMMENT '小区、写字楼门牌号',
  `graduateschool` varchar(50) DEFAULT '' COMMENT '毕业学校',
  `company` varchar(50) DEFAULT '' COMMENT '公司',
  `education` varchar(10) DEFAULT '' COMMENT '学历',
  `occupation` varchar(30) DEFAULT '' COMMENT '职业',
  `position` varchar(30) DEFAULT '' COMMENT '职位',
  `revenue` varchar(10) DEFAULT '' COMMENT '年收入',
  `affectivestatus` varchar(30) DEFAULT '' COMMENT '情感状态',
  `lookingfor` varchar(255) DEFAULT '' COMMENT ' 交友目的',
  `bloodtype` varchar(5) DEFAULT '' COMMENT '血型',
  `height` varchar(5) DEFAULT '' COMMENT '身高',
  `weight` varchar(5) DEFAULT '' COMMENT '体重',
  `alipay` varchar(30) DEFAULT '' COMMENT '支付宝帐号',
  `msn` varchar(30) DEFAULT '' COMMENT 'MSN',
  `taobao` varchar(30) DEFAULT '' COMMENT '阿里旺旺',
  `site` varchar(30) DEFAULT '' COMMENT '主页',
  `bio` text COMMENT '自我介绍',
  `interest` text COMMENT '兴趣爱好',
  `money` varchar(255) NOT NULL DEFAULT '0',
  `score` varchar(255) NOT NULL DEFAULT '0',
  `flag` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_shop_user`
--

LOCK TABLES `ims_sudu8_shop_user` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_shop_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_shop_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ims_sudu8_webpage_base`
--

DROP TABLE IF EXISTS `ims_sudu8_webpage_base`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ims_sudu8_webpage_base` (
  `uniacid` int(10) NOT NULL DEFAULT '0',
  `url` varchar(800) DEFAULT NULL,
  `c_t` varchar(10) DEFAULT '#ffffff',
  `c_bg` varchar(10) DEFAULT '#E64340',
  `title` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`uniacid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ims_sudu8_webpage_base`
--

LOCK TABLES `ims_sudu8_webpage_base` WRITE;
/*!40000 ALTER TABLE `ims_sudu8_webpage_base` DISABLE KEYS */;
/*!40000 ALTER TABLE `ims_sudu8_webpage_base` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_url`
--

DROP TABLE IF EXISTS `products_url`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_url` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `randid` varchar(255) DEFAULT NULL,
  `appletid` int(11) DEFAULT NULL,
  `typeid` int(11) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `dateline` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_url`
--

LOCK TABLES `products_url` WRITE;
/*!40000 ALTER TABLE `products_url` DISABLE KEYS */;
/*!40000 ALTER TABLE `products_url` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-23 21:36:23
