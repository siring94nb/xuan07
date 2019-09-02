<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;
use think\Session;
use think\View;


class Pt extends Controller
{
    public function set(){
        if(check_login()){
            if(powerget()){
                $appletid = input("appletid");
                $res = Db::table('applet')->where("id",$appletid)->find();
                if(!$res){
                    $this->error("找不到对应的小程序！");
                }
                $this->assign('applet',$res);
                $pintuan = Db::table('ims_sudu8_page_pt_gz')->where('uniacid',$appletid)->find();
                $this->assign('pintuan',$pintuan);
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
            return $this->fetch('set');
        }else{
            $this->redirect('Login/index');
        }
    }
    function printf_info($data)
    {
        foreach($data as $key=>$value){
            echo "<font color='#f00;'>$key</font> : $value <br/>";
        }
    }
    //退款管理
    public function tuikuan(){
        if(check_login()){
            if(powerget()){
                $appletid = input("appletid");
                $res = Db::table('applet')->where("id",$appletid)->find();
                if(!$res){
                    $this->error("找不到对应的小程序！");
                }
                $this->assign('applet',$res);
                $op = input('op');
                if($op){
                    if($op == "shenhe"){
                        $id = input('id');
                        $val = input('val');
                        if($val==2){
                            $app = Db::table('applet')->where("id",$appletid)->find();
                            $mchid = $app['mchid'];   //商户号
                            $apiKey = $app['signkey'];    //商户的秘钥
                            $appid = $app['appID'];                 //小程序的id
                            $appkey = $app['appSecret'];            //小程序的秘钥
                            // 更新信息
                            $sqtx = Db::table('ims_sudu8_page_pt_tx')->where("uniacid",$appletid)->where("id",$id)->find();
                            $openid= $sqtx['openid'];    //申请者的openid
                            $outTradeNo = $sqtx['ptorder'];
                            $totalFee= $sqtx['money']*100;  //申请了提现多少钱
                            $outRefundNo = $sqtx['ptorder']; //商户订单号
                            $refundFee= $sqtx['money']*100;  //申请了提现多少钱
                            $SSLCERT_PATH = ROOT_PATH.'public/Cert/'.$appletid.'/apiclient_cert.pem';//证书路径
                            $SSLKEY_PATH =  ROOT_PATH.'public/Cert/'.$appletid.'/apiclient_key.pem';//证书路径
                            $opUserId = $mchid;//商户号
                            include "WinXinRefund.php";
                            $weixinpay = new WinXinRefund($openid,$outTradeNo,$totalFee,$outRefundNo,$refundFee,$SSLCERT_PATH,$SSLKEY_PATH,$opUserId,$appid,$apiKey);
                            $return = $weixinpay->refund();
                            if(!$return){
                                $this->error("退款失败 请检查证书是否正常");
                            }else if($return['result_code'] == "SUCCESS"){
                                Db::table('ims_sudu8_page_pt_tx')->where("id",$id)->update(array("flag"=>2,"txtime"=>time()));
                                $this->success("退款成功 状态修改成功");
                            }else{
                                $this->error("退款失败 非微信支付订单或商户余额不足");
                            }
                        }
                        if($val==3){
                            Db::table('ims_sudu8_page_pt_tx')->where("id",$id)->update(array("flag"=>3,"txtime"=>time()));
                            $this->success("提现状态 修改成功");
                        }
                    }
                }else{
                    $sqtx = Db::table('ims_sudu8_page_pt_tx')->where("uniacid",$appletid)->order("id desc")->select();
                    foreach ($sqtx as $key => &$res) {
                        $user = Db::table('ims_sudu8_page_user')->where("uniacid",$appletid)->where('openid',$res['openid'])->find();
                        $res['userinfo'] = $user;
                        $res['creattime'] = date("Y-m-d H:i:s", $res['creattime']);
                    }
                    $this->assign("sqtx",$sqtx);
                }
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
            return $this->fetch('tkreply');
        }else{
            $this->redirect('Login/index');
        }
    }


    public function setsave(){
        $data = array();
        //小程序ID
        $data['uniacid'] = input("appletid");
        $data['types'] = input("types");
        $data['is_pt'] = input("is_pt");
        $data['pt_time'] = input("pt_time");
        $data['fahuo'] = input("fahuo");
        $data['guiz'] = input('content');
        $pintuan = Db::table('ims_sudu8_page_pt_gz')->where('uniacid',$data['uniacid'])->find();

        if(!$pintuan){
            $res = Db::table('ims_sudu8_page_pt_gz')->insert($data);
        }else{
            $res = Db::table('ims_sudu8_page_pt_gz')->where('uniacid',$data['uniacid'])->update($data);
        }
        if($res){
          $this->success('拼团规则新增/更新成功!');
        }else{
          $this->error('拼团规则新增/更新更新失败，没有修改项！');
          exit;
        }
    }

    public function yaoqing(){
        if(check_login()){
            if(powerget()){
                $appletid = input("appletid");

                $res = Db::table('applet')->where("id",$appletid)->find();
                if(!$res){
                    $this->error("找不到对应的小程序！");
                }
                $this->assign('applet',$res);

                $this->doovershare($appletid);
                $orders = Db::table('ims_sudu8_page_pt_share')->where('uniacid',$appletid)->order('id desc')->paginate(10,false,[ 'query' => array('appletid'=>input("appletid"))]);
                $plist = $orders->all();

                $count = Db::table('ims_sudu8_page_pt_share')->where('uniacid',$appletid)->order('id desc')->count();

                $guiz = Db::table('ims_sudu8_page_pt_gz')->where("uniacid",$appletid)->find();

                foreach ($plist as $key => &$res) {
                    
                    // 商品
                    $pro = Db::table('ims_sudu8_page_pt_pro')->where("uniacid",$appletid)->where("id",$res['pid'])->find();
                    $res['pro'] = $pro;

                    $overtime = $res['creattime']*1 + ($guiz['pt_time'] * 3600);
                    $res['creattime'] = date("Y-m-d H:i:s",$res['creattime']);
                    $res['overtime'] = date("Y-m-d H:i:s",$overtime);
                    // 团员
                    $res['team'] = $this->getmytd($appletid,$res['shareid']);
                } 
                $this->assign('plist',$plist);
                $this->assign('orders',$orders);
                $this->assign('counts',$count);
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
            return $this->fetch('yaoqing');
        }else{
            $this->redirect('Login/index');
        }
    }

    function getmytd($uniacid,$shareid){

        $alllist = Db::table('ims_sudu8_page_pt_order')->where("uniacid",$uniacid)->where("flag",1)->where('pt_order',$shareid)->order('creattime desc')->select();

        foreach ($alllist as $key => &$res) {
            $userinfo = Db::table('ims_sudu8_page_user')->where("uniacid",$uniacid)->where('openid',$res['openid'])->find();
            $res['team'] = $userinfo;
        }
        return $alllist;

    }

    public function cate(){
        if(check_login()){
            if(powerget()){
                $appletid = input("appletid");
                $res = Db::table('applet')->where("id",$appletid)->find();
                if(!$res){
                    $this->error("找不到对应的小程序！");
                }
                $this->assign('applet',$res);
                $cates = Db::table('ims_sudu8_page_pt_cate')->where('uniacid',$appletid)->order('num desc')->paginate(10,false,[ 'query' => array('appletid'=>input("appletid"))]);
                $count = Db::table('ims_sudu8_page_pt_cate')->where("uniacid",$appletid)->order('num desc')->count();
                $this->assign('cates',$cates);
                $this->assign('counts',$count);
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
            return $this->fetch('cate');
        }else{
            $this->redirect('Login/index');
        }
    }
    public function cateadd(){
        $appletid = input("appletid");
        $res = Db::table('applet')->where("id",$appletid)->find();
        if(!$res){
            $this->error("找不到对应的小程序！");
        }
        $this->assign('applet',$res);
        $cateid = intval(input('cateid'));
        $cate = Db::table('ims_sudu8_page_pt_cate')->where("uniacid",$appletid)->where('id',$cateid)->find();
        if(!$cateid){
            $cateid = 0;
        }
        $this->assign('cate',$cate);
        $this->assign('cateid',$cateid);
        return $this->fetch('cateadd');
    }
    public function catesave(){
        $data = array();
        //小程序ID
        $uniacid = input("appletid");
        $num = input("num");
        if($num){
            $data['num'] = $num;
        }else{
            $data['num'] = 1;
        }
        $title = input("title");
        if($title){
            $data['title'] = $title;
        }else{
            $this->error('栏目名称不能为空！');
            exit; 
        }
        $data['creattime'] = time();
        $cateid = intval(input('cateid'));
        if (!$cateid) {
            $data['uniacid'] = $uniacid;
            $res = Db::table('ims_sudu8_page_pt_cate')->insert($data);
        } else {
            $res = Db::table('ims_sudu8_page_pt_cate')->where('id',$cateid)->where('uniacid',$uniacid)->update($data);
        }

        if($res){
          $this->success('拼团分类新增/更新成功!');
        }else{
          $this->error('拼团分类新增/更新更新失败，没有修改项！');
          exit;
        }
    }

    public function catedel(){

        $appletid = input("appletid");

        $cateid = input("cateid");

        $data = array(

            "uniacid"=>$appletid,

            "id"=>$cateid

        );

        $res = Db::table('ims_sudu8_page_pt_cate')->where($data)->delete();

        if($res){

            $this->success('拼团栏目删除成功');

        }else{

            $this->success('拼团栏目删除失败');

        }
    }
    public function pro(){
        if(check_login()){
            if(powerget()){
                $appletid = input("appletid");
                $res = Db::table('applet')->where("id",$appletid)->find();
                if(!$res){
                    $this->error("找不到对应的小程序！");
                }
                $this->assign('applet',$res);

                $products = Db::table('ims_sudu8_page_pt_pro')->where('uniacid',$appletid)->paginate(10,false,[ 'query' => array('appletid'=>input("appletid"))]);
                $prolist = $products->all();
                if($prolist){
                    foreach ($prolist as $key => &$res) {
                        $cate = Db::table('ims_sudu8_page_pt_cate')->where('uniacid',$appletid)->where('id',$res['cid'])->find();
                        $res['cate'] = $cate['title'];
                    }
                }
                $count = Db::table('ims_sudu8_page_pt_pro')->where("uniacid",$appletid)->count();
                $this->assign('products',$products);
                $this->assign('prolist',$prolist);
                $this->assign('counts',$count);
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
            return $this->fetch('pro');
        }else{
            $this->redirect('Login/index');
        }
    }
    // 新增拼团产品
    public function proadd(){

        if(check_login()){

            if(powerget()){
                $appletid = input("appletid");
                $res = Db::table('applet')->where("id",$appletid)->find();
                if(!$res){
                    $this->error("找不到对应的小程序！");
                }
                $this->assign('applet',$res);

                $id = input('pid');
                $listV = Db::table('ims_sudu8_page_pt_cate')->where("uniacid",$appletid)->order('num desc')->order('id desc')->select();
                if($id){
                    $products = Db::table('ims_sudu8_page_pt_pro')->where("uniacid",$appletid)->where('id',$id)->find();

                    $allimg = Db::table('products_url')->where('randid',$products['onlyid'])->select();  
                        $proarr = Db::table('ims_sudu8_page_pt_pro_val')->where('pid',$id)->order('id desc')->select();
                        if($proarr){
                            $types = $proarr[0]['comment'];    
                            //构建规格组
                            $typesarr = explode(",", $types);  
                            $counttypes = count($typesarr);

                            // 构建规格组json
                            $typesjson = [];
                            foreach ($typesarr as $key => &$rec) {
                                $str = "type".($key+1);
                                $ziji = Db::table('ims_sudu8_page_pt_pro_val')->where('pid',$id)->group($str)->field($str)->select(); 
                                $xarr = array();
                                foreach ($ziji as $key => $res) {
                                    array_push($xarr, $res[$str]);
                                }
                                $typesjson[$rec] = $xarr;
                            }
                            // 构建对应的数值
                            $datajson = [];
                            foreach ($proarr as $key => &$rec) {
                                $strs = $rec['type1'].$rec['type2'].$rec['type3'];
                                $strv = $rec['kc'].",".$rec['price'].",".$rec['dprice'].",".$rec['thumb'];
                                $datajson[$strs]=$strv;
                            }
                        }else{
                            $counttypes = 0;
                        }
                    }else{
                        $products = "";
                        $id = 0; 
                        $allimg = "";
                        $counttypes = 0;
                        $typesarr = [];
                        $typesjson = [];
                        $datajson = [];
                    }
                $this->assign('counttypes',$counttypes);
                $this->assign('typesarr',$typesarr);
                $this->assign('typesjson',$typesjson);
                $this->assign('datajson',$datajson);
                $this->assign('allimg',$allimg);
                $this->assign('id',$id);
                $this->assign('products',$products);
                $this->assign('listAll',$listV);
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

            return $this->fetch('proadd');

        }else{

            $this->redirect('Login/index');

        }
    }
    public function prosave(){
        $appletid = input("appletid");
        $pid = input("pid");
        $cid = intval(input('cid'));

        $onlyid = input('onlyid');
        $imgs = Db::table('products_url')->where('randid',$onlyid)->select();
        $imgtext = array();
        foreach($imgs as $k => $v){
            array_push($imgtext,$v['url']);
        }

        $pcid = Db::table('ims_sudu8_page_pt_cate')->where('uniacid',$appletid)->where('id',$cid)->find();
        $tz_yh = input('tz_yh');

        if(!$tz_yh){
            $tz_yh = 10;
        }
        $type_x = input('type_x');
        if(!$type_x){
            $type_x = 0;
        }
        $type_y = input('type_y');
        if(!$type_y){
            $type_y = 0;
        }
        $type_i = input('type_i');
        if(!$type_i){
            $type_i = 0;
        }

        $kuaidi = input('kuaidi');
        if(!$kuaidi){
            $kuaidi = 0;
        }

        if($pcid){
            $data = array(
                "uniacid" => $appletid,
                "num" => input('num'),
                "cid" => input('cid'),
                "type_x" => $type_x,
                "type_y" => $type_y,
                "type_i" => $type_i,
                "title" => input('title'),
                "price" => input('price'),
                "mark_price" => input('mark_price'),
                "imgtext" => serialize($imgtext),
                "descs" => input('descs'),
                'explains' => input('explains'),
                "score" => input('score'),
                "onlyid" => $onlyid,
                "texts" => input('texts'),
                "pt_min" => input('pt_min'),
                "pt_max" => input('pt_max'),
                "tz_yh" => $tz_yh,
                "kuaidi" => $kuaidi
            );

            //缩略图
            $thumb = $this->onepic_uploade("thumb");
            if($thumb){
                $data['thumb'] = $thumb;
            }
            $shareimg = $this->onepic_uploade("shareimg");
            if($shareimg){
                $data['shareimg'] = $shareimg;
            }

            $guig = input('ischeck');
            $data["types"] = intval($guig);
            if($pid){
                Db::table('ims_sudu8_page_pt_pro')->where('id',$pid)->update($data);
                // 全部删除已有数据
                // Db::table('ims_sudu8_page_pt_pro_val')->where('pid',$pid)->delete();
                $newsid = $pid;
            }else{
                $newsid = Db::table('ims_sudu8_page_pt_pro')->insertGetId($data);
            }

            // 规格组长度
            $typelen = input('typelen');
            // 规格数组
            $types = input('typesarr');
            $typezz = $types;
            $typesarr = explode(",", $types);
            // 子商品
            // $ggarr = input('biaogedata');
            $ggarr = stripslashes(html_entity_decode(input('biaogedata')));
            $proarr = json_decode($ggarr,true);
            $count = 0;
            $valcount = Db::table('ims_sudu8_page_pt_pro_val')->where('pid',$newsid)->count();
            foreach ($proarr as $key => $rec) {
                if($typelen == 1){
                    $type1 = $rec[$typesarr[0]];
                    $type2 = "";
                    $type3 = "";
                }
                if($typelen == 2){
                    $type1 = $rec[$typesarr[0]];
                    $type2 = $rec[$typesarr[1]];
                    $type3 = "";
                }
                if($typelen == 3){
                    $type1 = $rec[$typesarr[0]];
                    $type2 = $rec[$typesarr[1]];
                    $type3 = $rec[$typesarr[2]];
                }

                $datas = array(
                    "pid" => $newsid,
                    "type1" => $type1,
                    "type2" => $type2,
                    "type3" => $type3,
                    "kc" => $rec['库存'],
                    "price" => $rec['拼团价'],
                    "dprice" => $rec['单买价'],
                    "thumb" => $rec['规格图片'],
                    "comment" => $typezz,
                    "updatetime" => time()
                );
                

                if($valcount>0){
                    $cha =  $valcount - $key;
                    if($key<$valcount){
                        $ids = Db::table('ims_sudu8_page_pt_pro_val')->where("pid",$newsid)->select();
                        $res = Db::table('ims_sudu8_page_pt_pro_val')->where("id",$ids[$key]['id'])->update($datas);
                    }else{
                      $res = Db::table('ims_sudu8_page_pt_pro_val')->insert($datas); 
                    }
                }else{
                    $res = Db::table('ims_sudu8_page_pt_pro_val')->insert($datas);
                }

                if($res){
                    $count++;
                    // var_dump($count);
                    if($count == count($proarr)){
                        $this->success('拼团商品更新成功');
                    }
                }
            }
            
        }
    }

    public function prodel(){

        $appletid = input("appletid");

        $pid = input("pid");

        $data = array(

            "uniacid"=>$appletid,

            "id"=>$pid

        );

        $res = Db::table('ims_sudu8_page_pt_pro')->where($data)->delete();

        if($res){

            $this->success('拼团商品删除成功');

        }else{

            $this->success('拼团商品删除失败');

        }
    }

    // 拼团订单管理
    public function order(){
        if(check_login()){

            if(powerget()){
                $appletid = input("appletid");
                $res = Db::table('applet')->where("id",$appletid)->find();
                if(!$res){
                    $this->error("找不到对应的小程序！");
                }
                $this->assign('applet',$res);

                $op = input('op');
                if($op == "hx"){  //核销
                    $order = input('orderid');
                    $data['hxtime'] = time();
                    $data['flag'] = 2;
                    $res = Db::table('ims_sudu8_page_pt_order')->where("id",$order)->update($data);
                    if($res){
                        $this->success("核销成功");
                    }
                }
                if($op == "fh"){  
                    $order = input('orderid');
                    $data['flag'] = 2;
                    $res = Db::table('ims_sudu8_page_pt_order')->where("id",$order)->update($data);
                    if($res){
                        $this->success("操作成功");
                    }
                }
                if($op == "fahuo"){  //发货
                    $order = input('orderid');
                    $data['hxtime'] = time();
                    $data['kuadi'] = input('kuadi');
                    $data['kuaidihao'] = input('kuaidihao');
                    $data['flag'] = 4;
                    $res = Db::table('ims_sudu8_page_pt_order')->where("id",$order)->update($data);
                    if($res){
                        $this->success("发货成功");
                    }
                }


                // 处理已发货并且过了7天还没有确定的订单
                $clorders = Db::table('ims_sudu8_page_pt_order')->where('uniacid',$appletid)->where('flag',4)->select();
               
                foreach ($clorders as $key => &$res) {
                    $st = $res['hxtime'] + 3600*24*7;
                    if($st < time()){
                        $adata = array(
                            "hxtime" => $st,
                            "flag" => 2
                        );

                        Db::table('ims_sudu8_page_pt_order')->where('id',$res['id'])->update($adata);
                        // 核销完成后去检测要不要进行分销商返现
                        $order_id = $res['order_id'];
                        $openid = $res['openid'];

                        $fxsorder = Db::table('ims_sudu8_page_fx_ls')->where('uniacid',$appletid)->where('order_id',$order_id)->find();

                        if($fxsorder){
                            $this->dopagegivemoney($appletid,$openid,$order_id);
                        }

                    }
                }
                // 处理30分钟未付款的订单
                $wforders = Db::table('ims_sudu8_page_pt_order')->where('uniacid',$appletid)->where('flag',0)->select();

                foreach ($wforders as $key => &$res) {

                    $st = $res['creattime'] + 1800;
                    if($st < time()){
                        $adata = array(
                            "flag" => 3
                        );
                        Db::table('ims_sudu8_page_pt_order')->where('id',$res['id'])->update($adata);
                    }
                }


                $order_id = input('order_id');
                $ptorder = input('ptorder');
                if($order_id){
                    $olist = Db::table('ims_sudu8_page_pt_order')->where('uniacid',$appletid)->where('order_id',$order_id)->where('jqr',1)->order('creattime desc')->paginate(10,false,[ 'query' => array('appletid'=>input("appletid"))]);
                    $orders = $olist->all();
                    $counts = Db::table('ims_sudu8_page_pt_order')->where('uniacid',$appletid)->where('order_id',$order_id)->where('jqr',1)->order('creattime desc')->count();

                    foreach ($orders as $key => &$res) {
                        $res['jsondata'] = unserialize($res['jsondata']);
                        $res['creattime'] = date("Y-m-d H:i:s",$res['creattime']);
                        $res['userinfo'] = Db::table('ims_sudu8_page_user')->where('uniacid',$appletid)->where('openid',$res['openid'])->find();
                        $res['counts'] = count($res['jsondata']);
                        $coupon =  Db::table('ims_sudu8_page_coupon_user')->where('uniacid',$appletid)->where('id',$res['coupon'])->find();

                        $couponinfo = Db::table('ims_sudu8_page_coupon')->where('uniacid',$appletid)->where('id',$coupon['cid'])->find();
                        $res['couponinfo'] = $couponinfo;

                        $ptinfo = Db::table('ims_sudu8_page_pt_share')->where('uniacid',$appletid)->where("shareid",$res['pt_order'])->field("flag,join_count,pid")->find();
                        $proinfo = Db::table('ims_sudu8_page_pt_pro')->where('uniacid',$appletid)->where("id",$ptinfo['pid'])->field("pt_min")->find(); 
                        if($res['flag']==1 && ($ptinfo['join_count'] < $proinfo['pt_min'])){
                            $res['flag'] = 10;
                        }
                        // 重新算总价
                        $allprice = 0;
                        foreach ($res['jsondata'] as $key2 => &$reb) {
                            $allprice += ($reb['num']*1)*($reb['proinfo']['price']);
                            if(!isset($reb['baseinfo2'])){
                                $reb['baseinfo2']=Db::table('ims_sudu8_page_pt_pro')->where("id",$reb['baseinfo'])->find();
                                $reb['proinfo']=Db::table('ims_sudu8_page_pt_pro_val')->where("id",$reb['proinfo'])->find();
                                if($reb['proinfo']){
                                    $reb['proinfo']['ggz']=$reb['proinfo']['comment'].":".$reb['proinfo']['type1'];
                                }
                            }
                        }
                        $res['allprice'] = $allprice;

                        // 积分转钱
                        //积分转换成金钱
                        $jf_gz = Db::table('ims_sudu8_page_rechargeconf')->where('uniacid',$appletid)->find();



                        if(!$jf_gz){
                            $gzscore = 10000;
                            $gzmoney = 1;
                        }else{
                            $gzscore = $jf_gz['score'];
                            $gzmoney = $jf_gz['money'];
                        }
                        $res['jfmoney'] = $res['jf']*$gzmoney/$gzscore;

                        // 转换地址
                        if($res['address']!=0){
                            $res['address_get'] = Db::table('ims_sudu8_page_duo_products_address')->where('openid',$res['openid'])->where('id',$res['address'])->find();

                        }else{
                            $res['address_get'] = $res['m_address'];
                        }
                    }
                }else if($ptorder){
                    $olist = Db::table('ims_sudu8_page_pt_order')->where('uniacid',$appletid)->where('pt_order',$ptorder)->where('jqr',1)->order('creattime desc')->paginate(10,false,[ 'query' => array('appletid'=>input("appletid"))]);
                    $orders = $olist->all();
                    $counts = Db::table('ims_sudu8_page_pt_order')->where('uniacid',$appletid)->where('pt_order',$ptorder)->where('jqr',1)->order('creattime desc')->count();



                    foreach ($orders as $key => &$res) {
                        $res['jsondata'] = unserialize($res['jsondata']);
                        $res['creattime'] = date("Y-m-d H:i:s",$res['creattime']);
                        $res['userinfo'] = Db::table('ims_sudu8_page_user')->where('uniacid',$appletid)->where('openid',$res['openid'])->find();
                        $res['counts'] = count($res['jsondata']);
                        $coupon =  Db::table('ims_sudu8_page_coupon_user')->where('uniacid',$appletid)->where('id',$res['coupon'])->find();

                        $couponinfo = Db::table('ims_sudu8_page_coupon')->where('uniacid',$appletid)->where('id',$coupon['cid'])->find();
                        $res['couponinfo'] = $couponinfo;

                        $ptinfo = Db::table('ims_sudu8_page_pt_share')->where('uniacid',$appletid)->where("shareid",$res['pt_order'])->field("flag,join_count,pid")->find();
                        $proinfo = Db::table('ims_sudu8_page_pt_pro')->where('uniacid',$appletid)->where("id",$ptinfo['pid'])->field("pt_min")->find(); 
                        if($res['flag']==1 && ($ptinfo['join_count'] < $proinfo['pt_min'])){
                            $res['flag'] = 10;
                        }
                        // 重新算总价
                        $allprice = 0;
                        foreach ($res['jsondata'] as $key2 => &$reb) {
                            $allprice += ($reb['num']*1)*($reb['proinfo']['price']);
                            if(!isset($reb['baseinfo2'])){
                                $reb['baseinfo2']=Db::table('ims_sudu8_page_pt_pro')->where("id",$reb['baseinfo'])->find();
                                $reb['proinfo']=Db::table('ims_sudu8_page_pt_pro_val')->where("id",$reb['proinfo'])->find();
                                if($reb['proinfo']){
                                    $reb['proinfo']['ggz']=$reb['proinfo']['comment'].":".$reb['proinfo']['type1'];
                                }
                            }
                        }
                        $res['allprice'] = $allprice;

                        // 积分转钱
                        //积分转换成金钱
                        $jf_gz = Db::table('ims_sudu8_page_rechargeconf')->where('uniacid',$appletid)->find();



                        if(!$jf_gz){
                            $gzscore = 10000;
                            $gzmoney = 1;
                        }else{
                            $gzscore = $jf_gz['score'];
                            $gzmoney = $jf_gz['money'];
                        }
                        $res['jfmoney'] = $res['jf']*$gzmoney/$gzscore;

                        // 转换地址
                        if($res['address']!=0){
                            $res['address_get'] = Db::table('ims_sudu8_page_duo_products_address')->where('openid',$res['openid'])->where('id',$res['address'])->find();

                        }else{
                            $res['address_get'] = $res['m_address'];
                        }
                    }
                }else{
                    $olist = Db::table('ims_sudu8_page_pt_order')->where('uniacid',$appletid)->where('jqr',1)->order('creattime desc')->paginate(10,false,[ 'query' => array('appletid'=>input("appletid"))]);
                    $orders = $olist->all();
                    $counts = Db::table('ims_sudu8_page_pt_order')->where('uniacid',$appletid)->where('jqr',1)->order('creattime desc')->count();

                    foreach ($orders as $key => &$res) {
                        $res['jsondata'] = unserialize($res['jsondata']);
                        $res['creattime'] = date("Y-m-d H:i:s",$res['creattime']);
                        $res['hxtime'] = $res['hxtime'] == 0?"未核销":date("Y-m-d H:i:s",$res['hxtime']);
                        $res['userinfo'] = Db::table('ims_sudu8_page_user')->where('uniacid',$appletid)->where('openid',$res['openid'])->find();

                        $res['counts'] = count($res['jsondata']);
                        $coupon =  Db::table('ims_sudu8_page_coupon_user')->where('uniacid',$appletid)->where('id',$res['coupon'])->find();
                        $couponinfo = Db::table('ims_sudu8_page_coupon')->where('uniacid',$appletid)->where('id',$coupon['cid'])->find();
                        $res['couponinfo'] = $couponinfo;

                        $ptinfo = Db::table('ims_sudu8_page_pt_share')->where('uniacid',$appletid)->where("shareid",$res['pt_order'])->field("flag,join_count,pid")->find();
                        $proinfo = Db::table('ims_sudu8_page_pt_pro')->where('uniacid',$appletid)->where("id",$ptinfo['pid'])->field("pt_min")->find(); 
                        if($res['flag']==1 && ($ptinfo['join_count'] < $proinfo['pt_min'])){
                            $res['flag'] = 10;
                        }

                        // 重新算总价
                        $allprice = 0;
                        foreach ($res['jsondata'] as $key2 => &$reb) {
                            $allprice += ($reb['num']*1)*($reb['proinfo']['price']);
                            if(!isset($reb['baseinfo2'])){
                                $reb['baseinfo2']=Db::table('ims_sudu8_page_pt_pro')->where("id",$reb['baseinfo'])->find();
                                $reb['proinfo']=Db::table('ims_sudu8_page_pt_pro_val')->where("id",$reb['proinfo'])->find();
                                if($reb['proinfo']){
                                    $reb['proinfo']['ggz']=$reb['proinfo']['comment'].":".$reb['proinfo']['type1'];
                                }
                            }

                        }
                        $res['allprice'] = $allprice;

                        // 积分转钱
                        //积分转换成金钱
                        $jf_gz = Db::table('ims_sudu8_page_rechargeconf')->where('uniacid',$appletid)->find();
                        if(!$jf_gz){
                            $gzscore = 10000;
                            $gzmoney = 1;
                        }else{ 
                            $gzscore = $jf_gz['score'];
                            $gzmoney = $jf_gz['money'];
                        }
                        $res['jfmoney'] = $res['jf']*$gzmoney/$gzscore;

                        // 转换地址
                        if($res['address']!=0){
                            $res['address_get'] = Db::table('ims_sudu8_page_duo_products_address')->where('openid',$res['openid'])->where('id',$res['address'])->find();
                        }else{
                            $res['address_get'] = $res['m_address'];
                        }
                    }
                }
                if($order_id){
                    $this->assign('order_id',$order_id);
                }else{
                    $order_id = "";
                    $this->assign('order_id',$order_id);  
                }
                $this->assign('orders',$orders);
                $this->assign('olist',$olist);
                $this->assign('counts',$counts);

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

            return $this->fetch('order');

        }else{

            $this->redirect('Login/index');

        }
    }
     // 向我的上级返钱操作
    public function dopagegivemoney($uniacid,$openid,$orderid){
        $guiz = Db::table('ims_sudu8_page_fx_gz')->where('uniacid',$uniacid)->order('creattime desc')->find();
        $order = Db::table('ims_sudu8_page_fx_ls')->where('uniacid',$uniacid)->where('order_id',$orderid)->find();
        Db::table('ims_sudu8_page_fx_ls')->where('order_id',$orderid)->update(array("flag"=>2));
        $me = Db::table('ims_sudu8_page_user')->where('uniacid',$uniacid)->where('openid',$order['openid'])->find();

        $me_p_get_money = $me['p_get_money'];
        $me_p_p_get_money = $me['p_p_get_money'];
        $me_p_p_p_get_money = $me['p_p_p_get_money'];
        // 启动一级分销提成
        if($guiz['fx_cj'] == 1){

            if($order['parent_id']){

                $puser = Db::table('ims_sudu8_page_user')->where('uniacid',$uniacid)->where('openid',$order['parent_id'])->find();

                $kdata = array(
                    "fx_allmoney" => $puser['fx_allmoney'] + $order['parent_id_get'],
                    "fx_money" => $puser['fx_money'] + $order['parent_id_get']
                );
                Db::table('ims_sudu8_page_user')->where('uniacid',$uniacid)->where('openid',$order['parent_id'])->update($kdata);

                // 我给我的父级贡献的钱
                $new_p_get_money = $me_p_get_money*1 + $order['parent_id_get']*1;  
                Db::table('ims_sudu8_page_user')->where('uniacid',$uniacid)->where('openid',$order['openid'])->update(array("p_get_money" => $new_p_get_money));
            }
        }
        // 启动二级分销提成
        if($guiz['fx_cj'] == 2){

            if($order['parent_id']){

                $puser = Db::table('ims_sudu8_page_user')->where('uniacid',$uniacid)->where('openid',$order['parent_id'])->find();
                $kdata = array(
                    "fx_allmoney" => $puser['fx_allmoney'] + $order['parent_id_get'],
                    "fx_money" => $puser['fx_money'] + $order['parent_id_get']
                );
                Db::table('ims_sudu8_page_user')->where('uniacid',$uniacid)->where('openid',$order['parent_id'])->update($kdata);

                // 我给我的父级贡献的钱
                $new_p_get_money = $me_p_get_money*1 + $order['parent_id_get']*1;
                Db::table('ims_sudu8_page_user')->where('uniacid',$uniacid)->where('openid',$order['openid'])->update(array("p_get_money" => $new_p_get_money));

            }

            if($order['p_parent_id']){
                $puser = Db::table('ims_sudu8_page_user')->where('uniacid',$uniacid)->where('openid',$order['p_parent_id'])->find();
                $kdata = array(
                    "fx_allmoney" => $puser['fx_allmoney'] + $order['p_parent_id_get'],
                    "fx_money" => $puser['fx_money'] + $order['p_parent_id_get']
                );
                Db::table('ims_sudu8_page_user')->where('uniacid',$uniacid)->where('openid',$order['p_parent_id'])->update($kdata);

                // 我给我的父级的父级贡献的钱
                $new_p_p_get_money = $me_p_p_get_money*1 + $order['p_parent_id_get']*1;
                Db::table('ims_sudu8_page_user')->where('uniacid',$uniacid)->where('openid',$order['openid'])->update(array("p_p_get_money" => $new_p_p_get_money));
            }
        }
        // 启动三级分销提成
        if($guiz['fx_cj'] == 3){

            if($order['parent_id']){

                $puser = Db::table('ims_sudu8_page_user')->where('uniacid',$uniacid)->where('openid',$order['parent_id'])->find();

                $kdata = array(
                    "fx_allmoney" => $puser['fx_allmoney'] + $order['parent_id_get'],
                    "fx_money" => $puser['fx_money'] + $order['parent_id_get']
                );
                Db::table('ims_sudu8_page_user')->where('uniacid',$uniacid)->where('openid',$order['parent_id'])->update($kdata);

                // 我给我的父级贡献的钱
                $new_p_get_money = $me_p_get_money*1 + $order['parent_id_get']*1;
                Db::table('ims_sudu8_page_user')->where('uniacid',$uniacid)->where('openid',$order['openid'])->update(array("p_get_money" => $new_p_get_money));

            }

            if($order['p_parent_id']){

                $puser = Db::table('ims_sudu8_page_user')->where('uniacid',$uniacid)->where('openid',$order['p_parent_id'])->find();

                $kdata = array(
                    "fx_allmoney" => $puser['fx_allmoney'] + $order['p_parent_id_get'],
                    "fx_money" => $puser['fx_money'] + $order['p_parent_id_get']
                );
                Db::table('ims_sudu8_page_user')->where('uniacid',$uniacid)->where('openid',$order['p_parent_id'])->update($kdata);

                // 我给我的父级的父级贡献的钱
                $new_p_p_get_money = $me_p_p_get_money*1 + $order['p_parent_id_get']*1;
                Db::table('ims_sudu8_page_user')->where('uniacid',$uniacid)->where('openid',$order['openid'])->update(array("p_p_get_money" => $new_p_p_get_money));

            }

            if($order['p_p_parent_id']){

                $puser =  Db::table('ims_sudu8_page_user')->where('uniacid',$uniacid)->where('openid',$order['p_p_parent_id'])->find();
                $kdata = array(
                    "fx_allmoney" => $puser['fx_allmoney'] + $order['p_p_parent_id_get'],
                    "fx_money" => $puser['fx_money'] + $order['p_p_parent_id_get']
                );
                Db::table('ims_sudu8_page_user')->where('uniacid',$uniacid)->where('openid',$order['p_p_parent_id'])->update($kdata);


                // 我给我的父级的父级的附近贡献的钱
                $new_p_p_p_get_money = $me_p_p_p_get_money*1 + $order['p_p_parent_id_get']*1;
                Db::table('ims_sudu8_page_user')->where('uniacid',$uniacid)->where('openid',$order['openid'])->update(array("p_p_p_get_money" => $new_p_p_p_get_money));
            }

        }

    }
    
   

    // 处理过期的订单
    function doovershare($uniacid){
        $now = time();
        $guiz = Db::table('ims_sudu8_page_pt_gz')->where('uniacid',$uniacid)->find();
        $allshare = Db::table('ims_sudu8_page_pt_share')->where('uniacid',$uniacid)->select();

        if($allshare){
            foreach ($allshare as $key => &$res) {
                $pro = Db::table('ims_sudu8_page_pt_pro')->where('uniacid',$uniacid)->where('id',$res['pid'])->find();
                $max = $pro['pt_max']*1;
                $min = $pro['pt_min']*1;

                $ct = $res['creattime'];
                $overtime = $ct*1 + ($guiz['pt_time'] * 3600);  //拼团结束的时间


                // var_dump($res['join_count']);
                // var_dump($min);
                // var_dump($max);
                // die();

                // 订单没过期
                if($overtime >= $now){
                    // 拼团成功
                    if($res['join_count']>=$min){
                        Db::table('ims_sudu8_page_pt_share')->where('id',$res['id'])->update(array("flag"=>2));
                    }
                }

                // 订单已过期
                if($overtime < $now){
                    // 拼团失败
                    if($res['join_count']<$min){
                        // 自动成团
                        if($guiz['is_pt']==2){
                            // 生成机器人并完成订单
                            Db::table('ims_sudu8_page_pt_share')->where('id',$res['id'])->update(array("flag"=>2,"join_count"=>$min));
                            // 生成机器人订单
                            $xhjc = $min - $res['join_count'];
                
                            $tmp = range(1,30);
                            $arr = array_rand($tmp,$xhjc);

                            for($i=0; $i<$xhjc; $i++){
                                // 获取机器人信息
                                $jqr = Db::table('ims_sudu8_page_pt_robot')->where('id',$arr[$i])->find();
                                $jqrarr = array(
                                    "uniacid" => $uniacid,
                                    "openid" => $jqr['openid'],
                                    "pt_order" => $res['shareid'],
                                    "ck" => 2,
                                    "jqr" => 2
                                );
                                Db::table('ims_sudu8_page_pt_order')->insert();
                            }

                        }else{
                            // 结束订单并退还所有的钱到余额
                            Db::table('ims_sudu8_page_pt_share')->where('id',$res['id'])->update(array("flag"=>3));

                            $lists = Db::table('ims_sudu8_page_pt_order')->where('uniacid',$uniacid)->where('pt_order',$res['shareid'])->where('jqr',1)->select();

                            foreach ($lists as $key1 => &$reb) {
                                Db::table('ims_sudu8_page_pt_order')->where('id',$reb['id'])->update(array("flag"=>3));

                                $user = $user = Db::table('ims_sudu8_page_user')->where('uniacid',$uniacid)->where('openid',$reb['openid'])->find();


                                // 返回钱
                                $nowmoney = $user['money'];
                                $newmoney = $nowmoney*1 + $reb['price']*1;
                                // 返回积分
                                $nowscore = $user['score'];
                                $newscore = $nowscore*1 + $reb['jf']*1;
                                Db::table('ims_sudu8_page_user')->where('openid',$user['openid'])->update(array("money"=>$newmoney,"score"=>$newscore));
                                // 返回优惠券
                                if($reb['coupon']!=0){
                                    // 先判断优惠券有没有过期了
                                    $coupon = Db::table('ims_sudu8_page_coupon_user')->where('uniacid',$uniacid)->where('id',$reb['coupon'])->find();

                                    // 如果没有过期更改优惠券状态
                                    if($now <= $coupon['etime']){
                                        Db::table('ims_sudu8_page_coupon_user')->where('id',$reb['coupon'])->update(array("utime"=>0,"flag"=>0));
                                    }
                                }
                            }    
                        }
                    }else{
                        Db::table('ims_sudu8_page_pt_share')->where('id',$res['id'])->update(array("flag"=>2));
                    }
                }
            }
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
    //富文本图片上传

    public function imgupload(){

        $files = request()->file('');  

        foreach($files as $file){        

            // 移动到框架应用根目录/public/upimages/ 目录下        
            $info = $file->validate(['ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'upimages');

            if($info){

                $url =  ROOT_HOST."/upimages/".date("Ymd",time())."/".$info->getFilename();

                $arr = array("url"=>$url);

                return json_encode($arr);



            }else{

                // 上传失败获取错误信息

                return $this->error($file->getError()) ;

            }    

        }



    }
     //多图片上传

    public function imgupload_duo(){

        $data['randid'] = input('randid');



        $files = request()->file('');    

        foreach($files as $file){        

            // 移动到框架应用根目录/public/upimages/ 目录下        

            $info = $file->validate(['ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'upimages');

           if($info){

                $data['url'] =  ROOT_HOST."/upimages/".date("Ymd",time())."/".$info->getFilename();

                $data['dateline'] = time();

                $res = Db::table('products_url')->insert($data);



            }else{

                // 上传失败获取错误信息

                return $this->error($file->getError()) ;

            }    

        }

    }

    //上传成功后获取图片

    public function getimg(){

        $id = $_POST['id'];     

        $allimg = Db::table('products_url')->where("randid",$id)->select();

        if($allimg){

            return $allimg;

        }
    }
    public function del_img(){

        $id = input("id");

        $res = Db::table('products_url')->where('id', $id)->delete();

        if($res){

            return 1;

        }else{

            $this->error("删除失败！");

        }

    }
}