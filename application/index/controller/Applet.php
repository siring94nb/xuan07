<?php



namespace app\index\controller;



use think\Controller;



use think\Db;



use think\Request;



use think\Session;



use think\View;











class Applet extends Controller



{



    



    // 管理员小程序显示



    public function index()



    {









        if(check_login()){



            if(check_group()){



                //新增字段180312  小程序原始id



                $applet_c = Db::query("SHOW COLUMNS FROM applet");



                if(count($applet_c)<13){



                    Db::query("ALTER table applet ADD xcxId varchar(255)");



                }

                if(count($applet_c)<14){
                    Db::query("ALTER table applet ADD sub_mchid varchar(255)");
                    Db::query("ALTER table applet ADD identity int(1) NOT NULL DEFAULT '1' COMMENT '1普通用户 2子商户'");
                }



                



                $version = 'version.php';



                $ver = include($version);



                $ver = $ver['ver'];



                $ver = substr($ver,-4);



                Session::set('ver',$ver);







                $uid = Session::get('uid');



                $usergroup = Session::get('usergroup');



                $where="";



                if($usergroup==3){



                    $where = " jxs = ". $uid;



                }



                if(input('keyworld')){



                    $res = Db::table('applet')->where('name','like','%'.input("keyworld").'%')->where($where)->order('id desc')->paginate(10,false,[ 'query' => array('keyworld'=>input("keyworld"))]);







                    $count = Db::table('applet')->where('name','like','%'.input("keyworld").'%')->where($where)->count();



                }else{



                    $res = Db::table('applet')->where($where)->order('id desc')->paginate(10);



  



                    $count = Db::table('applet')->where($where)->count();



                }





                $arr=array();



                if($res){



                    foreach($res as $rec){



                        if(!$rec["adminid"]){



                            $username = "<font style='color:red'>暂未绑定管理员</font>";



                            $tel = "<font style='color:red'>暂无手机号码</font>";



                            $isbd = 0;



                        }else{



                            $username = all_userinfo($rec["adminid"])['realname'];



                            $tel = all_userinfo($rec["adminid"])['mobile'];



                            $isbd = 1;



                        }







                        $arr[] = array(



                            "id"=>$rec['id'],



                            "name"=>$rec['name'],



                            "dateline"=>$rec['dateline'],



                            "flag"=>$rec['flag'],



                            "username"=>$username,



                            "tel"=>$tel,



                            "bangding" => $isbd



                        );



                    }



                    $this->assign('allapplet',$arr);



                }



                  // var_dump($res);exit;



                $this->assign('applet',$res);



                $this->assign('counts',$count);







                return $this->fetch('index');



            }else{



                $this->error("您没有权限操作该模块！",'Applet/applet');



            }







            



        }else{



            $this->redirect('Login/index');



        }



    }















    //用户小程序显示



    public function applet(){







        if(check_login()){







            $uid = Session::get('uid');



            $usergroup = Session::get('usergroup');



            if($usergroup==2 || $usergroup==3){



                $this->error("您是总管理员或经销商，不能访问该页面！");



            }







            if(input('keyworld')){



                $res = Db::table('applet')->where('name','like','%'.input("keyworld").'%')->where("adminid",$uid)->paginate(18,false,[ 'query' => array('keyworld'=>input("keyworld"))]);



                $count = Db::table('applet')->where('name','like','%'.input("keyworld").'%')->where("adminid",$uid)->count();



            }else{



                $res = Db::table('applet')->where("adminid",$uid)->paginate(18);



                $count = Db::table('applet')->where("adminid",$uid)->count();



            }











            $arr=array();



            if($res){



                foreach($res as $rec){



                    if(!$rec["adminid"]){



                        $username = "<font style='color:red'>暂未绑定管理员</font>";



                        $tel = "<font style='color:red'>暂无手机号码</font>";



                        $isbd = 0;



                    }else{



                        $username = all_userinfo($rec["adminid"])['realname'];



                        $tel = all_userinfo($rec["adminid"])['mobile'];



                        $isbd = 1;



                    }







                    $arr[] = array(



                        "id"=>$rec['id'],



                        "name"=>$rec['name'],



                        "thumb"=>$rec['thumb'],



                        "dateline"=>$rec['dateline'],



                        "flag"=>$rec['flag'],



                        "username"=>$username,



                        "tel"=>$tel,



                        "bangding" => $isbd



                    );



                }



                $this->assign('allapplet',$arr);



            }











            $this->assign('applet',$res);



            $this->assign('counts',$count);











            return $this->fetch('applet');



        }else{



            $this->redirect('Login/index');



        }



        



    }







    //新增小程序



    public function add(){







        if(check_login()){







            if(check_group()){







                // 添加之前判断身份,经销商身份判断个数限制



                $uid = Session::get('uid');



                $usergroup = Session::get('usergroup');



                if($usergroup==3){



                    $appcount = Db::table('applet')->where("jxs",$uid)->count();  //已创建小程序个数



                    $jxsnum = Db::table('admin')->where("uid",$uid)->find();  //经销商信息



                    if($jxsnum['num']>0 && $jxsnum['num']==$appcount){



                        $this->error("您代理的小程序个数已用完，请联系管理员进行扩容！",'Applet/index');



                    }



                }











                if(input("id")){



                    $id = input("id");



                    $res = Db::table('applet')->where("id",$id)->find();



                    $this->assign('applet',$res);



                    $this->assign('appletid',$id);



                }else{



                    $this->assign('applet',"");



                    $this->assign('appletid',"");



                }











                return $this->fetch('add');







            }else{



                $this->error("您没有权限操作该模块！",'Applet/applet');



            }







            



        }else{



            $this->redirect('Login/index');



        }



        



    }











    // 新增小程序保存操作



    public function save(){



        if(!$_POST['name']){



            $this->error('请设置小程序的名称！');



        }else{



            $data['name'] = $_POST['name'];



        }







        if(!$_POST['comment']){



            $this->error('请填写小程序描述！');



        }else{



            $data['comment'] = $_POST['comment'];



        }







        if(!$_POST['xcxId']){



            $this->error('请设置小程序原始id！');



        }else{



            $data['xcxId'] = trim($_POST['xcxId']);



        }



        



        if(!$_POST['appID']){



            $this->error('请设置小程序AppId！');



        }else{



            $data['appID'] = trim($_POST['appID']);



        }







        if(!$_POST['appSecret']){



            $this->error('请设置小程序AppSecret！');



        }else{



            $data['appSecret'] = trim($_POST['appSecret']);



        }







        $data['jxs'] = Session::get('uid');







        $data['mchid'] = trim(input("mchid"));
        $data['identity'] = input("identity");
        $data['sub_mchid'] = trim(input("sub_mchid"));



        $data['signkey'] = input("signkey");



        



        if(input("id")){







            $thumb = request()->file('thumb');



            if(isset($thumb)){



                $dir = upload_img();



                $info = $thumb->move($dir); 



                if($info){  



                    $data['thumb']= ROOT_HOST."/upimages/".date("Ymd",time())."/".$info->getFilename();



                }  



            }







            $id= input("id");



            $res = Db::table('applet')->where('id', $id)->update($data);



            if($res){



              $this->success('更新成功！','Applet/index');



            }else{



              $this->error('更新失败！');



              exit;



            }



        }else{



            $data['dateline'] = time();



            $thumb = request()->file('thumb');



            if(isset($thumb)){



                $dir = upload_img();



                $info = $thumb->move($dir); 



                if($info){  



                    $data['thumb']= ROOT_HOST."/upimages/".date("Ymd",time())."/".$info->getFilename();



                }  



            }else{



                $this->error('请设置小程序LOGO！');



            }







            $res = Db::table('applet')->insert($data);



            if($res){



              $this->success('创建成功！','Applet/index');



            }else{



              $this->error('创建失败！');



              exit;



            }



        }







    }











    // 显示普通用户



    public function user(){







        if(check_login()){







            if(check_group()){







                $uid = Session::get('uid');



                $usergroup = Session::get('usergroup');



                $where="";



                if($usergroup==3){



                    $where = " jxs = ". $uid;



                }











                if(input('keyworld')){



                    $rec = Db::table('admin')->where('realname','like','%'.input("keyworld").'%')->where("group",1)->where($where)->paginate(10,false,[ 'query' => array('keyworld'=>input("keyworld"))]);







                    $resarr = $rec->toArray();







                    foreach ($resarr['data'] as &$res) {



                        $user = Db::table('admin')->where("uid",$res['jxs'])->find();



                        $res['jxs'] = $user['username'];



                    }



                    $count = Db::table('admin')->where('realname','like','%'.input("keyworld").'%')->where("group",1)->where($where)->count();



                }else{



                    $rec = Db::table('admin')->where("group",1)->where($where)->paginate(10);







                    $resarr = $rec->toArray();







                    foreach ($resarr['data'] as &$res) {



                        $user = Db::table('admin')->where("uid",$res['jxs'])->find();



                        $res['jxs'] = $user['username'];



                    }







                    $count = Db::table('admin')->where("group",1)->where($where)->count();



                }















                $this->assign('admin_arr',$resarr['data']);



                $this->assign('admins',$rec);



                $this->assign('counts',$count);







                return $this->fetch('user');







            }else{



                $this->error("您没有权限操作该模块！",'Applet/applet');



            }  







           



        }else{



            $this->redirect('Login/index');



        }







    }







    // 显示经销商



    public function jxs(){







        if(check_login()){







            if(check_group()){











                // 1.判断有没有过期用户组



        $alljxs = Db::table('admin')->where("flag",1)->where("group",3)->select();



        $nowtime = time();



        foreach ($alljxs as  $rec) {



            if($nowtime > $rec['overtime']){



                Db::table('admin')->where("uid",$rec['uid'])->update(['flag' => 0]);



            }



        }











                $usergroup = Session::get('usergroup');



                if($usergroup==3){



                    $this->error("您没有权限操作该模块！",'Applet/index');



                }



                if(input('keyworld')){



                    $res = Db::table('admin')->where('realname','like','%'.input("keyworld").'%')->where("group",3)->paginate(10,false,[ 'query' => array('keyworld'=>input("keyworld"))]);



                    $count = Db::table('admin')->where('realname','like','%'.input("keyworld").'%')->where("group",3)->count();



                }else{



                    $res = Db::table('admin')->where("group",3)->paginate(10);



                    $count = Db::table('admin')->where("group",3)->count();



                }











                $this->assign('admins',$res);



                $this->assign('counts',$count);







                return $this->fetch('jxs');







            }else{



                $this->error("您没有权限操作该模块！",'Applet/applet');



            }  







           



        }else{



            $this->redirect('Login/index');



        }







    }







    // 根据手机号查询用户信息



    public function userinfo(){



        if(!$_POST['tel']){



            $this->error("请提供手机号码！");



        }else{







            $res = Db::table('admin')->where("mobile",$_POST['tel'])->where("group","1")->find();       



            if($res){



                return $res;



            }else{



                $arr = array("message"=>"暂未查询到对应的用户！");



                return $arr;



            }











        }



    }











    // 绑定管理员操作



    public function admin_add(){







        $id = $_POST['appletid'];



        $uid = $_POST['userid'];







        if(!$id){



            $this->error("未找到小程序信息！请核实");



        }



        if(!$uid){



            $this->error("未找到用户信息！请核实");



        }







        $data['adminid'] = $uid;







        $rec = Db::table('applet')->where("id",$id)->update($data);



        







        if($rec){



            $this->success("绑定成功！");



        }else{



            $this->error("绑定失败！");



        }











    }







    // 解绑管理员



    public function del_admin(){







        $id = $_POST['appletid'];



        if(!$id){



            $this->error("未找到小程序信息！请核实");



        }







        $data['adminid'] = "";



        $rec = Db::table('applet')->where("id",$id)->update($data);



        if($rec){



            echo 1;



        }else{



            echo 0;



        }











    }



















     // 新增用户



    public function add_admin(){







        if(check_login()){







            if(check_group()){



                



                $uid = input("uid");



                $userinfo=array();



                if($uid){



                    $userinfo = Db::table('admin')->where("uid",$uid)->find();



                    if(!$userinfo){



                        $this->error("找不到对应的用户！",'Applet/user');



                    }



                }            







                $this->assign('userinfo',$userinfo);

                return $this->fetch('add_admin');







            }else{



                $this->error("您没有权限操作该模块！",'Applet/applet');



            }  







           



        }else{



            $this->redirect('Login/index');



        }







    }







     // 新增经销商



    public function add_jxs(){







        if(check_login()){







            if(check_group()){



                



                $uid = input("uid");



                $userinfo=array();



                if($uid){



                    $userinfo = Db::table('admin')->where("uid",$uid)->find();



                    if(!$userinfo){



                        $this->error("找不到对应的用户！",'Applet/user');



                    }



                }            







                $this->assign('userinfo',$userinfo);

                



                return $this->fetch('add_jxs');







            }else{



                $this->error("您没有权限操作该模块！",'Applet/applet');



            }  







           



        }else{



            $this->redirect('Login/index');



        }







    }











    public function save_admin(){





        //用户名



        $username = $_POST['username'];



        if($username){



            $data['username'] = $username;



        }

        $uid = input("uid");

        if(!$uid){



        // 新增判断用户名唯一

           $yhm = Db::table('admin')->where("username",$username)->count();



            if($yhm>0){



                $this->error("该用户名已被注册，请换个再试！");

                exit;



            } 

        }



       









        







        //头像



        $icon = $this->onepic_uploade("icon");



        if($icon){



            $data['icon'] = $icon;



        }



        //真实名字



        $realname = $_POST['realname'];



        if($realname){



            $data['realname'] = $realname;



        }



        //手机



        $mobile = $_POST['mobile'];



        if($mobile){



            $data['mobile'] = $mobile;



        }



        //email



        $email = $_POST['email'];



        if($email){



            $data['email'] = $email;



        }



        //用户组



        $group = $_POST['group'];



        if($group){



            $data['group'] = $group;



        }







        //代理商限制



        $num = input("num");



        if($num){



            $data['num'] = $num;



        }else{



            $data['num'] = 0;



        }







    









        if($uid){



            $res = Db::table('admin')->where("uid",$uid)->update($data);



        }else{



            $data['jxs'] = Session::get('uid');



            $data['updatetime'] = time();



            $res = Db::table('admin')->insert($data);



        }















        if($res){



          $this->success('用户信息更新成功！','Applet/user');



        }else{



          $this->error('用户信息更新失败，没有更新项目！');



          exit;



        }















    }



















    public function save_jxs(){











        //用户名



        $username = $_POST['username'];



        if($username){



            $data['username'] = $username;



        }







        // 新增判断用户名唯一



        $yhm = Db::table('admin')->where("username",$username)->count();



        if($yhm>0){



            $this->error("该用户名已被注册，请换个再试！");



        }



        //头像



        $icon = $this->onepic_uploade("icon");



        if($icon){



            $data['icon'] = $icon;



        }



        //真实名字



        $realname = $_POST['realname'];



        if($realname){



            $data['realname'] = $realname;



        }



        //手机



        $mobile = $_POST['mobile'];



        if($mobile){



            $data['mobile'] = $mobile;



        }



        //email



        $email = $_POST['email'];



        if($email){



            $data['email'] = $email;



        }



        //用户组



        $group = $_POST['group'];



        if($group){



            $data['group'] = $group;



        }







        //代理商限制



        $num = input("num");



        if($num){



            $data['num'] = $num;



        }else{



            $data['num'] = 0;



        }







        //代理商过期时间



        $overtime = input("overtime");



        if($overtime){



            $data['overtime'] = strtotime($overtime);



        }else{



            $data['overtime'] = strtotime("+1 year");



        }











        //代理商账号状态



        $flag = input("flag");



        $data['flag'] = $flag;



        







        $data['jxs'] = Session::get('uid');







        $uid = input("uid");







        if($uid){



            $res = Db::table('admin')->where("uid",$uid)->update($data);



        }else{



            $data['updatetime'] = time();



            $res = Db::table('admin')->insert($data);



        }















        if($res){



          $this->success('用户信息更新成功！','Applet/jxs');



        }else{



          $this->error('用户信息更新失败，没有更新项目！');



          exit;



        }















    }











    // 重置密码



    public function czmm(){



        $uid = input("uid");



        $data['password'] = "e10adc3949ba59abbe56e057f20f883e";



        $res = Db::table('admin')->where("uid",$uid)->update($data);



        if($res){



          $this->success('重置密码成功！','Applet/user');



        }else{



          $this->error('重置密码失败！');



          exit;



        }







    }















    //单个图片上传操作



    function onepic_uploade($file){



        $thumb = request()->file($file);



        if(isset($thumb)){



            $dir = upload_img();



            $info = $thumb->move($dir); 



            if($info){  



                $imgurl = ROOT_HOST."/upimages/".date("Ymd",time())."/".$info->getFilename();



                return $imgurl;



            }  



        }



    }











    //删除普通用户



    function del_user(){



        $uid = input("uid");



        $res = Db::table('admin')->where("uid",$uid)->delete();



        if($res){



            $this->success('删除用户成功！','Applet/user');



        }



    }



















    // 删除经销商



    function del_jxs(){



        $uid = input("uid");



        $res = Db::table('admin')->where("uid",$uid)->delete();



        if($res){



            $this->success('删除经销商成功！','Applet/jxs');



        }



    }











   



}