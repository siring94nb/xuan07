<?php
use think\Controller;
use think\Db;
use think\Request;
use think\Session;
use think\View;
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------
// 应用公共文件
//定义上传图片的默认路径
function upload_img(){
    //1.设置上传路径
    $dir = ROOT_PATH."public/upimages/";
   	return $dir;
}
//检查是否登录
function check_login(){
	$uid = Session::get('uid');
	// 检测更新
    $version = 'index/controller/version.php';
    $ver = include($version);
    $ver = $ver['ver'];
    $ver = substr($ver,-4);
    define("VERSION_APP", $ver);
	if(!$uid){
		return false;
	}else{
		return true;
	}
}
//检测用户组
function check_group(){
	$uid = Session::get('uid');
	if(!$uid){
		return false;
	}else{
		$res = Db::table('admin')->where('uid',$uid)->find();
		if($res['group']==1){
			return false;
		}else{
			return true;
		}
	}
}
//根据uid取详情
function all_userinfo($uid){
	if(!$uid){
        return "暂无信息";
    }else{
    	$res = Db::table('admin')->where('uid',$uid)->find();
		return $res;	
    }	
}
//检测有没有权限对该小程序进行操作
function powerget(){
	$uid = Session::get('uid');
	$usergroup = Session::get('usergroup');
	$appletid = input("appletid");
	//允许条件:1.登录状态  2.管理员身份  3.小程序管理员身份
	if(!$appletid){
		return false;   //没有appletid 表示直接输入的网址，精确不到具体的小程序
	}
	if($usergroup==1){   //用户组为1的时候，为普通管理员，需判断该用户是不是该小程序的管理员
		$res = Db::table('applet')->where('id',$appletid)->find();
		if($res['adminid']==$uid){
			return  true;   
		}else{
			return false;
		}
	}
	if($usergroup==3){   //用户组为3的时候，为经销商，需判断该用户是不是该小程序的经销商管理员
		$res = Db::table('applet')->where('id',$appletid)->find();
		if($res['jxs']==$uid){
			return  true;   
		}else{
			return false;
		}
	}
	if($usergroup==2){
		return true;
	}
}