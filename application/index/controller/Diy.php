<?php /* -- 万能门店小程序系统 购买QQ：771382732
-- enphp : https://git.oschina.net/mz/mzphp2
 */
 namespace app\index\controller;error_reporting(E_ALL^E_NOTICE);define('ɲ�', '�');�����Ƈ�ה��Ŕ������������̲���������������񥈙�ŭƛ���̥�㗏���ء�Һ��Ԅ�ݞ֤˞��Ũ�갖�������⬤����㺓���変���ξ��Ծ����;$GLOBALS[ɲ�] = explode('|||', gzinflate(substr('�      m�KJA�Q<�7�֍�{�0��eR8/�Ad�c�(!%�&H!;� ��8MfbV^�N��3`6�_��U�5����2����f}+�� ˠ��ؐdq�F�E��P<�t�����#I����d����[Ic���\'����e2jφ�ɤ��yFu��2M���fǋY<��,oBd<�IT�K`Zc �\'g̚d��;1 k��Ȅ�ƶQ�$i�(KJF&&O���u���i�b~�IoZӯ��˳s�6����al}�7����TdJ)�N	)h^��J���`���#&�fu�ǂDQ��c�TT��8�;ĠJ����E�b�h��+�����+-ܼ��џ�����;J>&i��\\=:v���%��\\Vf"�����H\\Q�  ',0x0a, -8)));塭��㊔������;use think\Controller;use think\Db;use think\Request;use think\Session;use think\View;class Diy extends Controller{public function index(){$���Ƅ=&$GLOBALS{ɲ�};if($���Ƅ[0]()){if($���Ƅ{0x001}()){$�ً=$���Ƅ[0x0002]($���Ƅ{0x00003});$�����=Db::$���Ƅ[0x000004]($���Ƅ{0x05})->$���Ƅ[0x006]($���Ƅ{0x0007},$�ً)->$���Ƅ[0x00008]();if(!$�����){$this->$���Ƅ{0x000009}($���Ƅ[0x0a]);}$this->$���Ƅ{0x00b}($���Ƅ{0x05},$�����);$��=Db::$���Ƅ[0x000004]($���Ƅ[0x000c])->$���Ƅ[0x006]($���Ƅ{0x0000d},$�ً)->$���Ƅ[0x00000e]($���Ƅ{0x0f})->$���Ƅ[0x0010](0x0a,!1,[$���Ƅ{0x00011} =>array($���Ƅ[0x000012]=>$���Ƅ[0x0002]($���Ƅ{0x00003}))]);���;$�ω=Db::$���Ƅ[0x000004]($���Ƅ[0x000c])->$���Ƅ[0x006]($���Ƅ{0x0000d},$�ً)->$���Ƅ[0x00000e]($���Ƅ{0x0f})->$���Ƅ{0x0000013}();$this->$���Ƅ{0x00b}($���Ƅ[0x014],$��);$this->$���Ƅ{0x00b}($���Ƅ{0x0015},$�ω);}else{$ѽ��=Session::$���Ƅ[0x00016]($���Ƅ{0x000017});if($ѽ��==0x001){$this->$���Ƅ{0x000009}($���Ƅ[0x0000018],$���Ƅ{0x019});}if($ѽ��==0x0002){$this->$���Ƅ{0x000009}($���Ƅ[0x0000018],$���Ƅ[0x001a]);}if($ѽ��==0x00003){$this->$���Ƅ{0x000009}($���Ƅ[0x0000018],$���Ƅ[0x001a]);}}return $this->$���Ƅ{0x0001b}($���Ƅ[0x00001c]);��򇅐���������ӳ�����˧�̼ʦ��;}else{$this->$���Ƅ{0x000001d}($���Ƅ[0x01e]);}}public function add(){$���=&$GLOBALS{ɲ�};if($���[0]()){if($���{0x001}()){$��ȷ=$���[0x0002]($���{0x00003});$�=Db::$���[0x000004]($���{0x05})->$���[0x006]($���{0x0007},$��ȷ)->$���[0x00008]();if(!$�){$this->$���{0x000009}($���[0x0a]);}$this->$���{0x00b}($���{0x05},$�);}else{$��=Session::$���[0x00016]($���{0x000017});����󰺿ח�ᆹ����Ǟ;if($��==0x001){$this->$���{0x000009}($���[0x0000018],$���{0x019});}if($��==0x0002){$this->$���{0x000009}($���[0x0000018],$���[0x001a]);}if($��==0x00003){$this->$���{0x000009}($���[0x0000018],$���[0x001a]);}}return $this->$���{0x0001b}($���{0x001f});����㰊���߭��ޙ;}else{$this->$���{0x000001d}($���[0x01e]);}}public function save(){$�=&$GLOBALS{ɲ�};$э�[$�[0x00020]]=$�[0x0002]($�{0x00003});����������݃��;$э�[$�{0x000021}]=$�[0x0002]($�[0x0000022]);��������蠶��;$�=Db::$�[0x000004]($�[0x000c])->$�[0x00000e]($�{0x023})->$�[0x0024](0x001)->$�{0x00025}();�����ɬ�̸����芈���Ñҹ�ܵ�ק����ܞ�����ʰ�չ�����鮡��џ�ٻ����ꛨ���������ي�ĸ;$��«�=0;if($�[0x000026]($�)==0){$��«�=0x001;}else{$��«�=$�[0x000026]($�)+0x001;}$э�[$�{0x0000027}]=$�[0x028].$��«�;$э�[$�{0x0029}]=$�[0x0002]($�[0x0002a]);�������󧙻�����ثޝ�Ω��ԭ������슳�����乓�ۣ�����;$э�[$�{0x00002b}]=$�[0x000002c]();��ڟ�����ژ���;$���=Db::$�[0x000004]($�[0x000c])->$�{0x02d}($э�);if($���){$this->$�[0x002e]($�{0x0002f});}}public function pages(){$�=&$GLOBALS{ɲ�};if($�[0]()){if($�{0x001}()){$�=$�[0x0002]($�{0x00003});$�ꁜ�=Db::$�[0x000004]($�{0x05})->$�[0x006]($�{0x0007},$�)->$�[0x00008]();if(!$�ꁜ�){$this->$�{0x000009}($�[0x0a]);}$this->$�{0x00b}($�{0x05},$�ꁜ�);}else{$�ɷ�=Session::$�[0x00016]($�{0x000017});����ݐ�쯳���;if($�ɷ�==0x001){$this->$�{0x000009}($�[0x0000018],$�{0x019});}if($�ɷ�==0x0002){$this->$�{0x000009}($�[0x0000018],$�[0x001a]);}if($�ɷ�==0x00003){$this->$�{0x000009}($�[0x0000018],$�[0x001a]);}}return $this->$�{0x0001b}($�[0x000030]);���Ӈ�գ��;}else{$this->$�{0x000001d}($�[0x01e]);��ݬ�ߣ���������͕�����͇��̼؏�������ަ������Ά���찖�����ډ��Ò;}}public function newpages(){$��Ş=&$GLOBALS{ɲ�};if($��Ş[0]()){if($��Ş{0x001}()){$����=$��Ş[0x0002]($��Ş{0x00003});$��=Db::$��Ş[0x000004]($��Ş{0x05})->$��Ş[0x006]($��Ş{0x0007},$����)->$��Ş[0x00008]();if(!$��){$this->$��Ş{0x000009}($��Ş[0x0a]);}$this->$��Ş{0x00b}($��Ş{0x05},$��);$Η�=Db::$��Ş[0x000004]($��Ş{0x0000031})->$��Ş{0x00025}();������������;$this->$��Ş{0x00b}($��Ş[0x032],$Η�);}else{$��=Session::$��Ş[0x00016]($��Ş{0x000017});if($��==0x001){$this->$��Ş{0x000009}($��Ş[0x0000018],$��Ş{0x019});}if($��==0x0002){$this->$��Ş{0x000009}($��Ş[0x0000018],$��Ş[0x001a]);}if($��==0x00003){$this->$��Ş{0x000009}($��Ş[0x0000018],$��Ş[0x001a]);}}return $this->$��Ş{0x0001b}($��Ş{0x0033});�����޼Ě�ǌ������ٞ;}else{$this->$��Ş{0x000001d}($��Ş[0x01e]);�����Ȑ�ġ�������ٗ;}}}