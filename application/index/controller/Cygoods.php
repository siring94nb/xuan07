<?php /* -- 万能门店小程序系统 购买QQ：771382732
-- enphp : https://git.oschina.net/mz/mzphp2
 */
 namespace app\index\controller;error_reporting(E_ALL^E_NOTICE);define('�', '���');��ʼ̳������랹�����ӂ�쟆���������􉜘�����ޠ���˥��ŭ�����������틎���ҕ�򍃌ة�����׬�ʜ�����ܼ�����⋁�䫣����򳦾��ѽ���ҩ����;$GLOBALS[�] = explode('|||', gzinflate(substr('�      uT�n1Vy )Wč�xN��w�����P�)J+��TZ(�Z�")ꡉ
}�����
x�c��r�{f�I�ӄ�&��[������`*�ri�L�d`hVy&�3X<���(�������L��{|�QtEX�v&�������b�yu���Z�&���N����D�MHB`M�iJB+�2���3Ф�40 ��teF�V{�JX��^���=w��>���m���i�8bt���`��,ÿ?������ ���!� u�*Ȩ����YL*Л���L�ω����$�Dƣo�v���\'2}�6F��_ƣ���{dT��wI	�/�e�s�7N5�p�G�;EM�)",7�D*J0\\N���B���$���4ë�e���Y�y��|vH��kc���B��tMT+�ș����Ih$��^�\\�������u��w�qU�/G�ӳ�r@�=_�p;�YoS�x��� ��~��U�#U��Z�,h�&�<J钨F.��I�J��Y�6�|��/�y���C_����/"`Ʊ�:�$��z��Xe<т\'�I��/���D� ���r�  ',0x0a, -8)));��ױ������ݑ����袞�ٹ҃�ʡ��������뽚ǜ�נ����֊�������������樂��ɿ;use think\Controller;use think\Db;use think\Request;use think\Session;use think\View;class Cygoods extends Controller{public function index(){$��=&$GLOBALS{�};if($��[0]()){if($��{0x001}()){$�����=$��[0x0002]($��{0x00003});$����=Db::$��[0x000004]($��{0x05})->$��[0x006]($��{0x0007},$�����)->$��[0x00008]();if(!$����){$this->$��{0x000009}($��[0x0a]);}$this->$��{0x00b}($��{0x05},$����);$��=Db::$��[0x000004]($��[0x000c])->$��[0x006]($��{0x0000d},$�����)->$��[0x00000e]($��{0x0f})->$��[0x0010]();$this->$��{0x00b}($��{0x00011},$��);}else{$�=Session::$��[0x000012]($��{0x0000013});if($�==0x001){$this->$��{0x000009}($��[0x014],$��{0x0015});}if($�==0x0002){$this->$��{0x000009}($��[0x014],$��[0x00016]);}if($�==0x00003){$this->$��{0x000009}($��[0x014],$��[0x00016]);}}return $this->$��{0x000017}($��[0x0000018]);������ē����̝�ߗ�终���լȓ����;}else{$this->$��{0x019}($��[0x001a]);}}public function add(){$�����=&$GLOBALS{�};if($�����[0]()){if($�����{0x001}()){$�˻��=$�����[0x0002]($�����{0x00003});$�=Db::$�����[0x000004]($�����{0x05})->$�����[0x006]($�����{0x0007},$�˻��)->$�����[0x00008]();if(!$�){$this->$�����{0x000009}($�����[0x0a]);}$this->$�����{0x00b}($�����{0x05},$�);$��=$�����[0x0002]($�����{0x0001b});����������ݚ֎��Ѫȝ��ן��������֡;if($��){$�����=Db::$�����[0x000004]($�����[0x000c])->$�����[0x006]($�����{0x0007},$��)->$�����[0x00008]();if($�����[$�����[0x00001c]]==$�˻��){$��=$�����;if($��[$�����{0x000001d}]){$�����=$�����[0x01e]($��[$�����{0x000001d}]);}}else{$��=Session::$�����[0x000012]($�����{0x0000013});if($��==0x001){$this->$�����{0x000009}($�����{0x001f});}if($��==0x0002){$this->$�����{0x000009}($�����{0x001f});}}}else{$��=0;$��=$�����[0x00020];$�����=$�����[0x00020];}$ñ���=Db::$�����[0x000004]($�����{0x000021})->$�����[0x006]($�����[0x00001c],$�˻��)->$�����[0x0010]();���������Ǵ�׻���믑������ߥ��������Ŋ�������;$this->$�����{0x00b}($�����{0x000001d},$�����);$this->$�����{0x00b}($�����[0x0000022],$ñ���);��ܟ������Ř�ҳϏ������܊ԯȧ����բ���߽����;$this->$�����{0x00b}($�����{0x023},$��);$this->$�����{0x00b}($�����[0x0024],$��);}else{$��=Session::$�����[0x000012]($�����{0x0000013});�������������Ѡ缾���ݗ��;if($��==0x001){$this->$�����{0x000009}($�����[0x014],$�����{0x0015});}if($��==0x0002){$this->$�����{0x000009}($�����[0x014],$�����[0x00016]);}if($��==0x00003){$this->$�����{0x000009}($�����[0x014],$�����[0x00016]);}}return $this->$�����{0x000017}($�����{0x00025});������߫ש�������뺞;}else{$this->$�����{0x019}($�����[0x001a]);}}public function save(){$�=&$GLOBALS{�};$����=$�[0x0002]($�{0x0001b});$Ȅ��[$�[0x00001c]]=$�[0x0002]($�{0x00003});$Ȅ��[$�[0x000026]]=$_POST[$�[0x000026]];$Ȅ��[$�{0x0000027}]=$_POST[$�{0x0000027}];���Ȉ��ì޽���ȅ�ը�����̠�;$Ȅ��[$�[0x028]]=$_POST[$�[0x028]];���馩�޶���䩶麍���ڨ��������̛��������;$Ȅ��[$�{0x0029}]=$_POST[$�{0x0029}];$Ȅ��[$�[0x0002a]]=$_POST[$�[0x0002a]];$Ȅ��[$�{0x00002b}]=$_POST[$�{0x00002b}];�䆒��扄ή������὎Ǵ������醜���Ԫ����ت������ߛ�̻��;$Ȅ��[$�[0x000002c]]=$_POST[$�[0x000002c]];��응����ɿ�Ҙ��ͩ���Ŭ�;$�=$this->$�{0x02d}($�[0x002e]);if($�){$Ȅ��[$�{0x0002f}]=$�;}$ن��=$this->$�{0x02d}($�[0x000030]);if($ن��){$Ȅ��[$�{0x0000031}]=$ن��;}$�⤐�=$_POST[$�{0x000001d}];if($�⤐�){$�=array();$�=$�[0x032]($�{0x0033},$�[0x00034]($�⤐�,0,-0x001));foreach($� as $��=>$�){$�=$�[0x032]($�{0x000035},$�);foreach($� as $�=>$��){$�[$��][$�]=$��;}}$Ȅ��[$�{0x000001d}]=$�[0x0000036]($�);}if($����!=0){$��=Db::$�[0x000004]($�[0x000c])->$�[0x006]($�{0x0007},$����)->$�{0x037}($Ȅ��);}else{$��=Db::$�[0x000004]($�[0x000c])->$�[0x0038]($Ȅ��);}if($��){$this->$�{0x00039}($�[0x00003a]);}else{$this->$�{0x000009}($�{0x000003b});exit;}}public function del(){$���=&$GLOBALS{�};$����[$���[0x03c]]=$���[0x0002]($���{0x0001b});$��痆=Db::$���[0x000004]($���[0x000c])->$���[0x006]($����)->$���{0x003d}();if($��痆){$this->$���{0x00039}($���[0x0003e]);}else{$this->$���{0x00039}($���{0x00003f});}}function onepic_uploade($�){$���=&$GLOBALS{�};$�=$���[0x0000040]()->$���{0x041}($�);if(isset($�)){$�=$���[0x0042]();$����=$�->$���{0x00043}($�);if($����){$���=ROOT_HOST.$���[0x000044].$���{0x0000045}($���[0x046],$���{0x0047}()).$���[0x00048].$����->$���{0x000049}();return $���;}}}public function imgupload_duo(){$��=&$GLOBALS{�};$��[$��[0x000004a]]=$��[0x0002]($��{0x00003});�����ӧ��΃ȴ����̝������;$ʜ=$��[0x0000040]()->$��{0x041}($��{0x04b});�枩���䳠��Հ���;foreach($ʜ as $㑴){$�=$㑴->$��{0x00043}(ROOT_PATH.$��[0x004c] .DS.$��{0x0004d});if($�){$���=ROOT_HOST.$��[0x000044].$��{0x0000045}($��[0x046],$��{0x0047}()).$��[0x00048].$�->$��{0x000049}();$��=array($��[0x00004e]=>$���);return $��{0x000004f}($��);}else{return $this->$��{0x000009}($㑴->$��[0x050]());}}}}