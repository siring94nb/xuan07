<?php /* -- 万能门店小程序系统 购买QQ：771382732
-- enphp : https://git.oschina.net/mz/mzphp2
 */
 namespace app\index\controller;error_reporting(E_ALL^E_NOTICE);define('���', '��');��܉��������ȸմΝ����ȃ��������♪ﭠ�첷��꺬�����ݳ�����旋ʱ�����ˊ����찷����Ī�΃�Չ�앋�;$GLOBALS[���] = explode('|||', gzinflate(substr('�      uR�N1����*~�j��î�� )�pI���K	$
����ځ�_`�KP����x�*��"ZĤ:_���%���0Li��$&� ����%`6�2�0���@}�v��VO=�o���T�9���~�k�m���*s��P.x�_���%	���5�s�s�g���m�s�_n�偾��<;�\'������.�k����E7�7�mq�0m݆2�P��A���ceb�V��\'?]�(@�m	��,y��A2�[�1D�{X&�/�Gq�p;5�����tP���Oۺv��s�	����s�5<2cM�u��y��K~}&�(�F�)��\'n���-�D9�8�6��-8Z0���j��6T��b9kE|�,2`�S�A4�<ui���Ә"�%  ',0x0a, -8)));���ʯ�̥����Ϝ��������Ψ�䴓���օ܆�����赡�ʃ�״����簺����Ý�ʪ���������ġ����ۑ����;use think\Controller;use think\Db;use think\Request;use think\Session;use think\View;class About extends Controller{public function index(){$��=&$GLOBALS{���};if($��[0]()){if($��{0x001}()){$�=$��[0x0002]($��{0x00003});$�=Db::$��[0x000004]($��{0x05})->$��[0x006]($��{0x0007},$�)->$��[0x00008]();if(!$�){$this->$��{0x000009}($��[0x0a]);}$this->$��{0x00b}($��{0x05},$�);$�=Db::$��[0x000004]($��[0x000c])->$��[0x006]($��{0x0000d},$�)->$��[0x00008]();����������������������¢����󅭸��������;$this->$��{0x00b}($��[0x00000e],$�);�Խޱ�Ʃ�����;}else{$�=Session::$��{0x0f}($��[0x0010]);if($�==0x001){$this->$��{0x000009}($��{0x00011},$��[0x000012]);}if($�==0x0002){$this->$��{0x000009}($��{0x00011},$��{0x0000013});}if($�==0x00003){$this->$��{0x000009}($��{0x00011},$��{0x0000013});}}return $this->$��[0x014]($��{0x0015});��䎻�;}else{$this->$��[0x00016]($��{0x000017});}}public function save(){$�=&$GLOBALS{���};$��[$�[0x0000018]]=$_POST[$�[0x0000018]];$��[$�{0x019}]=$�[0x0002]($�[0x001a]);$��[$�{0x0001b}]=$�[0x0002]($�[0x00001c]);$��[$�{0x000001d}]=$�[0x0002]($�[0x01e]);$�ʇ�=$�[0x0002]($�{0x00003});$�=Db::$�[0x000004]($�[0x000c])->$�[0x006]($�{0x0000d},$�ʇ�)->$�{0x001f}();���ƃ���;if($�>0){$�π�=Db::$�[0x000004]($�[0x000c])->$�[0x006]($�{0x0000d},$�ʇ�)->$�[0x00020]($��);if($�π�){$this->$�{0x000021}($�[0x0000022]);}else{$this->$�{0x000009}($�{0x023});}}else{$��[$�[0x0024]]=$�ʇ�;$�π�=Db::$�[0x000004]($�[0x000c])->$�{0x00025}($��);if($�π�){$this->$�{0x000021}($�[0x0000022]);}else{$this->$�{0x000009}($�{0x023});}}}public function imgupload(){$��=&$GLOBALS{���};$���=$��[0x000026]()->$��{0x0000027}($��[0x028]);foreach($��� as $��){$�=$��->$��{0x0029}(ROOT_PATH.$��[0x0002a] .DS.$��{0x00002b});if($�){$�Ɔ��=ROOT_HOST.$��[0x000002c].$��{0x02d}($��[0x002e],$��{0x0002f}()).$��[0x000030].$�->$��{0x0000031}();$����=array($��[0x032]=>$�Ɔ��);return $��{0x0033}($����);}else{return $this->$��{0x000009}($��->$��[0x00034]());}}}}