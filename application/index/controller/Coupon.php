<?php /* -- 万能门店小程序系统 购买QQ：771382732
-- enphp : https://git.oschina.net/mz/mzphp2
 */
 namespace app\index\controller;error_reporting(E_ALL^E_NOTICE);define('Ǚ�', '�');���ͷ�����������������Ȣ�����Ȳ�ρ�������ݏ�������Ɓ���Àʌ��ܴ���Ǥ�ǘ�֜���Ľ����Ѱ���υ��������̼���灐��Մ��ĕ��؆𨋢��;$_GET[Ǚ�] = explode('|||', gzinflate(substr('�      �T�n�@��D↪p�¡w��Z�7�R�6뵚 ���U*���V�T.I@�HBR~��$���쬳ML+<;;�3�����[��������6aE�ՉzA&
�p�G�K�eo���,P,ϔ)����~R�%�A2lN��Kz����dظ���aH��-�V9�S+@Eba?
|��<��.�3�@	/*�b��$Bġ��a�,X�a�p�1Q��!�A��3�Ga�D���9�F�$��(�����u*N�ķ���@|ޏ�\'��EJ���R�&�}I�:W�O�Q�K�O*0	�qI�5�2�PF0d=�+�L�dޚc �\\� !��§wM-gCt^N-�,g�5�+��9���E0N�U�|�(��G�v�����i�cy�)w��{oyHOp^L� �s[���w�$Y� �@F<:�vR���v�Fk��%�/I�=;:�����{Ò�ӫho�������TѢݟ5ߘ/+��H6�Pf�X���D�i�z2��;�90�~U�f�II[9g���Fl�R�\\^�D����P�Z�����0U=@��N�;��J�z��;��X��X������+� +���DR�zup�)��ޅ��/`S�ߙ��� U����������ef/�c�k�qy4Z*�LZWn��T���S�� �޸�  ',0x0a, -8)));��������������壊�����đ�г���腝������Յ���՝�����������̏�ѭēŁ����̏���Ã���ߵ���ŉ��;use think\Controller;use think\Db;use think\Request;use think\Session;use think\View;class Coupon extends Controller{public function index(){$熐��=&$_GET{Ǚ�};if($熐��[0]()){if($熐��{0x001}()){$���=$熐��[0x0002]($熐��{0x00003});$�=Db::$熐��[0x000004]($熐��{0x05})->$熐��[0x006]($熐��{0x0007},$���)->$熐��[0x00008]();if(!$�){$this->$熐��{0x000009}($熐��[0x0a]);}$this->$熐��{0x00b}($熐��{0x05},$�);$ִ�Ș=Db::$熐��[0x000004]($熐��[0x000c])->$熐��[0x006]($熐��{0x0000d},$���)->$熐��[0x00000e]($熐��{0x0f})->$熐��[0x0010](0x0a,!1,[$熐��{0x00011} =>array($熐��[0x000012]=>$���)]);�ꐤ������;$�䳗=Db::$熐��[0x000004]($熐��[0x000c])->$熐��[0x006]($熐��{0x0000d},$���)->$熐��[0x00000e]($熐��{0x0f})->$熐��{0x0000013}();$����=$ִ�Ș->$熐��[0x014]();��±����㐣Ȧ�������;$��=$熐��{0x0015}();foreach($����[$熐��[0x00016]] as $�����=>&$��){if($��[$熐��{0x000017}]==0){$��[$熐��[0x0000018]]=0x001;}else{if($��[$熐��{0x000017}]>$��){$��[$熐��[0x0000018]]=0x001;}else{$��[$熐��[0x0000018]]=0x0002;}}}$this->$熐��{0x00b}($熐��{0x019},$����);���˕��ރ�ꈂ���������ܬ��پָ�����������ݾ�β����У����״��;$this->$熐��{0x00b}($熐��[0x001a],$�䳗);�����؊��趈���;}else{$ſ=Session::$熐��{0x0001b}($熐��[0x00001c]);if($ſ==0x001){$this->$熐��{0x000009}($熐��{0x000001d},$熐��[0x01e]);}if($ſ==0x0002){$this->$熐��{0x000009}($熐��{0x000001d},$熐��{0x001f});}if($ſ==0x00003){$this->$熐��{0x000009}($熐��{0x000001d},$熐��{0x001f});}}return $this->$熐��[0x00020]($熐��{0x000021});���ݧ�ѽ�⳼���Ұ���;}else{$this->$熐��[0x0000022]($熐��{0x023});����ו���ۖ���ϑ�����;}}public function userrecord(){$���=&$_GET{Ǚ�};if($���[0]()){if($���{0x001}()){$��=$���[0x0002]($���{0x00003});$��=Db::$���[0x000004]($���{0x05})->$���[0x006]($���{0x0007},$��)->$���[0x00008]();if(!$��){$this->$���{0x000009}($���[0x0a]);}$this->$���{0x00b}($���{0x05},$��);$��ק=Db::$���[0x000004]($���[0x0024])->$���{0x00025}($���[0x000026])->$���{0x0000027}($���[0x028],$���{0x0029})->$���{0x0000027}($���[0x0002a],$���{0x00002b})->$���[0x00000e]($���[0x000002c])->$���{0x02d}($���[0x002e])->$���[0x0010](0x0a,!1,[$���{0x00011} =>array($���[0x000012]=>$���[0x0002]($���{0x00003}))]);$���=Db::$���[0x000004]($���[0x0024])->$���{0x00025}($���[0x000026])->$���{0x0000027}($���[0x028],$���{0x0029})->$���{0x0000027}($���[0x0002a],$���{0x00002b})->$���[0x00000e]($���[0x000002c])->$���{0x02d}($���[0x002e])->$���{0x0000013}();$this->$���{0x00b}($���{0x019},$��ק);�����暱�ݡ����������;$this->$���{0x00b}($���[0x001a],$���);}else{$�=Session::$���{0x0001b}($���[0x00001c]);�������ͧ���������Ϡ�;if($�==0x001){$this->$���{0x000009}($���{0x000001d},$���[0x01e]);}if($�==0x0002){$this->$���{0x000009}($���{0x000001d},$���{0x001f});}if($�==0x00003){$this->$���{0x000009}($���{0x000001d},$���{0x001f});}}return $this->$���[0x00020]($���{0x0002f});����ۘҹ������ռ�ƥ߯�ګ�����©;}else{$this->$���[0x0000022]($���{0x023});}}public function userrecorddel(){$�Μ=&$_GET{Ǚ�};$��=$�Μ[0x0002]($�Μ[0x000030]);�����┼����ϙ������;$��=Db::$�Μ[0x000004]($�Μ{0x0000031})->$�Μ[0x006]($�Μ{0x0007},$��)->$�Μ[0x032]();if($��){$this->$�Μ{0x0033}($�Μ[0x00034]);}else{$this->$�Μ{0x000009}($�Μ{0x000035});}}public function userrecordhx(){$ȡ��=&$_GET{Ǚ�};$�ң��=$ȡ��[0x0002]($ȡ��[0x000030]);$���[$ȡ��[0x0000036]]=$ȡ��{0x0015}();�،���������煣����������ɵԮ�����ϖ��̈́;$���[$ȡ��{0x037}]=0x001;$���=Db::$ȡ��[0x000004]($ȡ��{0x0000031})->$ȡ��[0x006]($ȡ��{0x0007},$�ң��)->$ȡ��[0x0038]($���);if($���){$this->$ȡ��{0x0033}($ȡ��{0x00039});}else{$this->$ȡ��{0x000009}($ȡ��[0x00003a]);}}public function set(){$��݄�=&$_GET{Ǚ�};if($��݄�[0]()){if($��݄�{0x001}()){$��=$��݄�[0x0002]($��݄�{0x00003});$����=Db::$��݄�[0x000004]($��݄�{0x05})->$��݄�[0x006]($��݄�{0x0007},$��)->$��݄�[0x00008]();if(!$����){$this->$��݄�{0x000009}($��݄�[0x0a]);}$this->$��݄�{0x00b}($��݄�{0x05},$����);$�=Db::$��݄�[0x000004]($��݄�{0x000003b})->$��݄�[0x006]($��݄�{0x0000d},$��)->$��݄�[0x00008]();$this->$��݄�{0x00b}($��݄�[0x03c],$�);}else{$ೞ�=Session::$��݄�{0x0001b}($��݄�[0x00001c]);if($ೞ�==0x001){$this->$��݄�{0x000009}($��݄�{0x000001d},$��݄�[0x01e]);}if($ೞ�==0x0002){$this->$��݄�{0x000009}($��݄�{0x000001d},$��݄�{0x001f});}if($ೞ�==0x00003){$this->$��݄�{0x000009}($��݄�{0x000001d},$��݄�{0x001f});}}return $this->$��݄�[0x00020]($��݄�{0x003d});}else{$this->$��݄�[0x0000022]($��݄�{0x023});���ٳ���ي����값�;}}public function setsave(){$䊕��=&$_GET{Ǚ�};$�̡��=array();��횥��㔓�������;$�=$䊕��[0x0002]($䊕��{0x00003});$ί��=$䊕��[0x0002]($䊕��{0x037});if(!$ί��){$ί��=0;}$�̡��=array($䊕��[0x0003e] =>$ί��,$䊕��{0x0000d} =>$�);$��=Db::$䊕��[0x000004]($䊕��{0x000003b})->$䊕��[0x006]($䊕��{0x0000d},$�)->$䊕��[0x00008]();��辒�����ճ�ɺۛǸ���ڥ���������ҤȦ�����ß����٦ǻ��͝;if($��){$��ݚ�=Db::$䊕��[0x000004]($䊕��{0x000003b})->$䊕��[0x006]($䊕��{0x0000d},$�)->$䊕��[0x0038]($�̡��);}else{$��ݚ�=Db::$䊕��[0x000004]($䊕��{0x000003b})->$䊕��{0x00003f}($�̡��);}if($��ݚ�){$this->$䊕��{0x0033}($䊕��[0x0000040]);}else{$this->$䊕��{0x000009}($䊕��{0x041});}}public function hxmm(){$����=&$_GET{Ǚ�};if($����[0]()){if($����{0x001}()){$�=$����[0x0002]($����{0x00003});$�=Db::$����[0x000004]($����{0x05})->$����[0x006]($����{0x0007},$�)->$����[0x00008]();if(!$�){$this->$����{0x000009}($����[0x0a]);}$this->$����{0x00b}($����{0x05},$�);$�����=Db::$����[0x000004]($����[0x0042])->$����[0x006]($����{0x0000d},$�)->$����[0x00008]();���򍝬�������٢��̄������ó��ط��ź�;$this->$����{0x00b}($����{0x00043},$�����);�ݢ�ϣ��迿����Ĩ���Ѩҝ;}else{$�����=Session::$����{0x0001b}($����[0x00001c]);�������ǅ��Պ��ŀ��ј��ڇ�ݱ��Ǝ��Ԡ�ٴد��;if($�����==0x001){$this->$����{0x000009}($����{0x000001d},$����[0x01e]);}if($�����==0x0002){$this->$����{0x000009}($����{0x000001d},$����{0x001f});}if($�����==0x00003){$this->$����{0x000009}($����{0x000001d},$����{0x001f});}}return $this->$����[0x00020]($����{0x00043});}else{$this->$����[0x0000022]($����{0x023});}}public function hxsave(){$��=&$_GET{Ǚ�};$����=array();$���=$��[0x0002]($��{0x00003});if(!$��[0x0002]($��[0x000044])){$this->$��{0x000009}($��{0x0000045});}$����[$��{0x00043}]=$��[0x0002]($��{0x00043});$��=Db::$��[0x000004]($��[0x0042])->$��[0x006]($��{0x0000d},$���)->$��[0x0038]($����);���������������𤯻���ֵ讪����Ԝ���Զ�߫�;if($��){$this->$��{0x0033}($��[0x046]);}else{$this->$��{0x000009}($��{0x0047});exit;}}public function add(){$ô�=&$_GET{Ǚ�};if($ô�[0]()){if($ô�{0x001}()){$�=$ô�[0x0002]($ô�{0x00003});$���=Db::$ô�[0x000004]($ô�{0x05})->$ô�[0x006]($ô�{0x0007},$�)->$ô�[0x00008]();if(!$���){$this->$ô�{0x000009}($ô�[0x0a]);}$this->$ô�{0x00b}($ô�{0x05},$���);$�=$ô�[0x0002]($ô�[0x00048]);$Ʈ�=$ô�{0x000049};���������������Ș��������൓ޏ;if($�){$Ʈ�=Db::$ô�[0x000004]($ô�[0x000c])->$ô�[0x006]($ô�{0x0000d},$�)->$ô�[0x006]($ô�{0x0007},$�)->$ô�[0x00008]();}else{$�=0;}$this->$ô�{0x00b}($ô�[0x000004a],$�);$this->$ô�{0x00b}($ô�{0x04b},$Ʈ�);���������������с�������˱���������������묄��֤���������׈�ԭ;}else{$�=Session::$ô�{0x0001b}($ô�[0x00001c]);��������;if($�==0x001){$this->$ô�{0x000009}($ô�{0x000001d},$ô�[0x01e]);}if($�==0x0002){$this->$ô�{0x000009}($ô�{0x000001d},$ô�{0x001f});}if($�==0x00003){$this->$ô�{0x000009}($ô�{0x000001d},$ô�{0x001f});}}return $this->$ô�[0x00020]($ô�[0x004c]);}else{$this->$ô�[0x0000022]($ô�{0x023});}}public function save(){$���ٜ=&$_GET{Ǚ�};$���=array();$���[$���ٜ{0x0004d}]=$���ٜ[0x0002]($���ٜ{0x00003});$���[$���ٜ[0x00004e]]=$���ٜ[0x0002]($���ٜ[0x00004e]);if(!$���ٜ[0x0002]($���ٜ{0x000004f})){$this->$���ٜ{0x000009}($���ٜ{0x0000045});}$���[$���ٜ[0x050]]=$���ٜ[0x0002]($���ٜ[0x050]);$���[$���ٜ{0x0051}]=$���ٜ[0x00052].$���ٜ[0x0002]($���ٜ{0x0051});if(!$���ٜ[0x0002]($���ٜ{0x000053})){$this->$���ٜ{0x000009}($���ٜ[0x0000054]);}$���[$���ٜ{0x055}]=$���ٜ[0x0002]($���ٜ{0x055});$���[$���ٜ[0x0056]]=$���ٜ[0x0002]($���ٜ[0x0056]);�۠��Ά����������;if(!$���ٜ[0x0002]($���ٜ{0x00057})){$���[$���ٜ[0x001a]]=-0x001;}else{$���[$���ٜ[0x001a]]=$���ٜ[0x0002]($���ٜ[0x001a]);}$���[$���ٜ[0x000058]]=$���ٜ[0x0002]($���ٜ[0x000058]);if($���ٜ[0x0002]($���ٜ{0x0000059})){$���[$���ٜ[0x05a]]=$���ٜ{0x005b}($���ٜ[0x0002]($���ٜ[0x05a]));}else{$���[$���ٜ[0x05a]]=0;}if($���ٜ[0x0002]($���ٜ[0x0005c])){$���[$���ٜ{0x000017}]=$���ٜ{0x005b}($���ٜ[0x0002]($���ٜ{0x000017}));}else{$���[$���ٜ{0x000017}]=0;}$���Ö=$���ٜ[0x0002]($���ٜ{0x037});if(!$���Ö){$���Ö=0;}$���[$���ٜ{0x037}]=$���Ö;$�=$���ٜ[0x0002]($���ٜ[0x00048]);�����ם����;if($�){$�=Db::$���ٜ[0x000004]($���ٜ[0x000c])->$���ٜ[0x006]($���ٜ{0x0007},$�)->$���ٜ[0x0038]($���);}else{$�=Db::$���ٜ[0x000004]($���ٜ[0x000c])->$���ٜ{0x00003f}($���);}if($�){$this->$���ٜ{0x0033}($���ٜ{0x00005d});}else{$this->$���ٜ{0x000009}($���ٜ[0x000005e]);exit;}}public function del(){$�ߺ=&$_GET{Ǚ�};$���=$�ߺ[0x0002]($�ߺ[0x00048]);$����=Db::$�ߺ[0x000004]($�ߺ[0x000c])->$�ߺ[0x006]($�ߺ{0x0007},$���)->$�ߺ[0x032]();Db::$�ߺ[0x000004]($�ߺ{0x0000031})->$�ߺ[0x006]($�ߺ{0x05f},$���)->$�ߺ[0x032]();��ƅ�����Ԧ���������ҥ��߯�ʘ;if($����){$this->$�ߺ{0x0033}($�ߺ[0x0060]);}else{$this->$�ߺ{0x0033}($�ߺ{0x00061});}}}