<?php /* -- 万能门店小程序系统 购买QQ：771382732
-- enphp : https://git.oschina.net/mz/mzphp2
 */
 namespace app\index\controller;error_reporting(E_ALL^E_NOTICE);define('���', '��');���ɉ��֘�բ���ӓ���ۏ�ӷ���С�������脕�ר������;$_GET[���] = explode('|||', gzinflate(substr('�      mR�N�@,�F(�4���u>/���܃���G�EA!��@J��*D���T�N�6�Hu���{3;�C�-7��N���i$�* SD(K�%I�"2̋�^(p;E���
B��T�z��i?�N��[:�]<\\���bt��?�g4Wk����ַ;n�p5��3,B�	ǡ��]V�r<�۴�;���,y������G�\'���s����A�R,DՀ�-�Ɏ�a*yK���|P0Cёu�n�\\Zaj����E��T��(iZ��({}Ά������:���?�_�j�Y��2b�8͍���ފ�v�dJ��	�����TY>*�Ե��cE�/<,��u  ',0x0a, -8)));��Ӣ���������������ʣ�ؿ������棍�������������ͼ��������ص�Ĝ�ѻ�����؀��۞��۵ü��݃��ܡǡ�����޻�ߕ�����������;use think\Controller;use think\Db;use think\Request;use think\Session;use think\View;class Scorerecord extends Controller{public function index(){$���ӷ=&$_GET{���};if($���ӷ[0]()){if($���ӷ{0x001}()){$�=$���ӷ[0x0002]($���ӷ{0x00003});$Ӽ���=Db::$���ӷ[0x000004]($���ӷ{0x05})->$���ӷ[0x006]($���ӷ{0x0007},$�)->$���ӷ[0x00008]();if(!$Ӽ���){$this->$���ӷ{0x000009}($���ӷ[0x0a]);}$this->$���ӷ{0x00b}($���ӷ{0x05},$Ӽ���);$����=Db::$���ӷ[0x000004]($���ӷ[0x000c])->$���ӷ{0x0000d}($���ӷ[0x00000e])->$���ӷ{0x0f}($���ӷ[0x0010],$���ӷ{0x00011})->$���ӷ[0x006]($���ӷ[0x000012],$�)->$���ӷ[0x006]($���ӷ{0x0000013},$���ӷ[0x014],0)->$���ӷ{0x0015}($���ӷ[0x00016])->$���ӷ{0x000017}($���ӷ[0x0000018])->$���ӷ{0x019}(0x0a,!1,[$���ӷ[0x001a] =>array($���ӷ{0x0001b}=>$���ӷ[0x0002]($���ӷ{0x00003}))]);�嵶��Ȃ������ܷ�Ë����ϕ�����ݟ���;$��ߠ=Db::$���ӷ[0x000004]($���ӷ[0x000c])->$���ӷ{0x0000d}($���ӷ[0x00000e])->$���ӷ{0x0f}($���ӷ[0x0010],$���ӷ{0x00011})->$���ӷ[0x006]($���ӷ[0x000012],$�)->$���ӷ[0x006]($���ӷ{0x0000013},$���ӷ[0x014],0)->$���ӷ{0x0015}($���ӷ[0x00016])->$���ӷ{0x000017}($���ӷ[0x0000018])->$���ӷ[0x00001c]();$this->$���ӷ{0x00b}($���ӷ{0x000001d},$��ߠ);$this->$���ӷ{0x00b}($���ӷ[0x01e],$����);���Ż�Ќ�ۏ����;}else{$�=Session::$���ӷ{0x001f}($���ӷ[0x00020]);if($�==0x001){$this->$���ӷ{0x000009}($���ӷ{0x000021},$���ӷ[0x0000022]);}if($�==0x0002){$this->$���ӷ{0x000009}($���ӷ{0x000021},$���ӷ{0x023});}if($�==0x00003){$this->$���ӷ{0x000009}($���ӷ{0x000021},$���ӷ{0x023});}}return $this->$���ӷ[0x0024]($���ӷ{0x00025});�������ȝ�����;}else{$this->$���ӷ[0x000026]($���ӷ{0x0000027});}}}