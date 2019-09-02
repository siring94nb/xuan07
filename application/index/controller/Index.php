<?php







namespace app\index\controller;







use think\Controller;







use think\Db;







use think\Request;







use think\Session;







use think\View;























class Index extends Controller







{







    public function index(){















        if(check_login()){















            




            



            /*首页内容正式开始*/

            if(powerget()){



        		$id = input("appletid");



        		$res = Db::table('applet')->where("id",$id)->find();



                if(!$res){



                    $this->error("找不到对应的小程序！");



                }

                $this->assign('applet',$res);



                //产品销量bug修复

                $prochsnum = Db::table('ims_sudu8_page_products')->whereOr("type","showPro")->whereOr("type","showProMore")->where("sale_num",NULL)->where("uniacid",$id)->select();

                foreach ($prochsnum as $key => $value) {

                    Db::table("ims_sudu8_page_products")->where("id",$value['id'])->update(array("sale_num"=>0));

                }





                $bases = Db::table('ims_sudu8_page_base')->where("uniacid",$id)->find();







                $slide = Db::table('image_url')->where("appletid",$id)->select();







                $slides = array();







                foreach ($slide as $k => $v) {







                    $slides[$k]['id'] = $v['id'];







                    $slides[$k]['slide'] = $v['url'];







                }







                $this->assign('slide',$slides);







        		$this->assign('bases',$bases);























        	}else{







        		$usergroup = Session::get('usergroup');







        		if($usergroup==1){







        			$this->error("您没有权限操作该小程序或找不到相应小程序！",'Applet/applet');







        		}







        		if($usergroup==2){







        			$this->error("您没有权限操作该小程序或找不到相应小程序！",'Applet/index');







        		}







                if($usergroup==3){







                    $this->error("您没有权限操作该小程序或找不到相应小程序！",'Applet/index');







                }







        		







        	}















            return $this->fetch('index');







        }else{







            $this->redirect('Login/index');







        }







    }































    public function save(){







        // var_dump($_POST);exit;







    	$appletid = input("appletid");







        $res = Db::table('ims_sudu8_page_base')->where("uniacid",$appletid)->find();







        







        $data = array();















        // 幻灯片







        $slide = Db::table('image_url')->where("appletid",$appletid)->select();







        $slides = array();







        foreach ($slide as $k => $v) {







            array_push($slides, $v['url']);







        }







        $data['slide'] = serialize($slides);















        //顶部LOGO







        $logo2 = $this->onepic_uploade("logo2");







        if($logo2){







            $data['logo2'] = $logo2;







        }







        







        //门店背景







        $banner = $this->onepic_uploade("banner");







        if($banner){







        	$data['banner'] = $banner;







        }















        //门店LOGO







        $logo = $this->onepic_uploade("logo");







        if($logo){







        	$data['logo'] = $logo;







        }







        //门店视频







        $video = $_POST['video'];







        if($video){







        	$data['video'] = $video;







        }else{







            $data['video'] = "";







        }







        //视频默认图片







        $v_img = $this->onepic_uploade("v_img");







        if($v_img){







        	$data['v_img'] = $v_img;







        }







        //门店名称







        $name = $_POST['name'];







        if($name){







        	$data['name'] = $name;







        }







        //门店特色







        $desc = $_POST['desc'];







        if($name){







        	$data['desc'] = $desc;







        }







        //门店地址







        $address = $_POST['address'];







        if($address){







        	$data['address'] = $address;







        }







        //营业时间







        $time = $_POST['time'];







        if($time){







        	$data['time'] = $time;







        }







        //联系电话







        $tel = $_POST['tel'];







        if($tel){







        	$data['tel'] = $tel;







        }







        //纬度







        $latitude = input('latitude');







        if($latitude){







        	$data['latitude'] = $latitude;







        }







        //经度







        $longitude = input('longitude');







        if($longitude){







        	$data['longitude'] = $longitude;







        }







        //门店简介







        $about = input('about');







        if($about){







        	$data['about'] = $about;







        }

        $data['gonggao'] = input('gonggao');
        $data['gonggaoUrl'] = input('gonggaoUrl');







        // //介绍板块栏目名







        // $aboutCN = input('aboutCN');







        // if($aboutCN){







        // 	$data['aboutCN'] = $aboutCN;







        // }else{

        //     $data['aboutCN'] = "";

        // }







        // //介绍板块栏目名英文







        // $aboutCNen = input('aboutCNen');







        // if($aboutCNen){







        // 	$data['aboutCNen'] = $aboutCNen;







        // }else{

        //     $data['aboutCNen'] = "";

        // }







        // //横排推荐块中文名







        // $catename_x = input('catename_x');







        // if($catename_x){







        // 	$data['catename_x'] = $catename_x;







        // }else{

        //     $data['catename_x'] = "";

        // }







        //横排推荐块中文名英文







        // $catenameen_x = input('catenameen_x');







        // if($catenameen_x){







        // 	$data['catenameen_x'] = $catenameen_x;







        // }else{

        //     $data['catenameen_x'] = "";

        // }







        // //竖排推荐块中文名







        // $catename = input('catename');







        // if($catename){







        // 	$data['catename'] = $catename;







        // }else{

        //     $data['catename'] = "";

        // }







        // //竖排推荐块中文名英文







        // $catenameen = input('catenameen');







        // if($catenameen){







        // 	$data['catenameen'] = $catenameen;







        // }else{

        //     $data['catenameen'] = "";

        // }























        $bases = Db::table('ims_sudu8_page_base')->where("uniacid",$appletid)->count();







        if($bases>0){







        	$res = Db::table('ims_sudu8_page_base')->where("uniacid",$appletid)->update($data);







        }else{







        	$data['uniacid'] = $appletid;







        	$res = Db::table('ims_sudu8_page_base')->insert($data);







        }















        if($res){







          $this->success('基础信息更新成功！');







        }else{







          $this->error('基础信息更新失败，没有修改项！');







          exit;







        }















































    }

    





















	















































    //单个图片上传操作







    function onepic_uploade($file){







    	$thumb = request()->file($file);







        if(isset($thumb)){







            $dir = upload_img();







            $info = $thumb->validate(['ext'=>'jpg,png,gif,jpeg'])->move($dir); 







            if($info){  







                $imgurl = ROOT_HOST."/upimages/".date("Ymd",time())."/".$info->getFilename();







                return $imgurl;







            }  







        }







    }







    //多图片上传







    public function imgupload(){







        $data['appletid'] = $_GET['appletid'];







        $files = request()->file('');    







        foreach($files as $file){        







            // 移动到框架应用根目录/public/upimages/ 目录下        







            $info = $file->validate(['ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'upimages');







           if($info){







                $data['url'] =  ROOT_HOST."/upimages/".date("Ymd",time())."/".$info->getFilename();







                $data['dateline'] = time();







                $res = Db::table('image_url')->insert($data);















            }else{







                // 上传失败获取错误信息







                return $this->error($file->getError()) ;







            }    







        }







    }







    //上传成功后获取图片







    public function getimg(){







    	$id = $_POST['id'];  	







    	$allimg = Db::table('image_url')->where("appletid",$id)->select();







    	if($allimg){







    		return $allimg;







    	}







		







    }















    public function del(){







        $id = input("id");







        $res = Db::table('image_url')->where('id', $id)->delete();







        if($res){







            return 1;







        }else{







            $this->error("删除失败！");







        }







    }























































}