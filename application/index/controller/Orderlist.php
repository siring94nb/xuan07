<?php /* -- 万能门店小程序系统 购买QQ：771382732
-- enphp : https://git.oschina.net/mz/mzphp2
 */
 namespace app\index\controller;error_reporting(E_ALL^E_NOTICE);define('��', '���');�ۋ��Ӌ�ݔ�����������������Њ�������򢔷���͜볊����ʠ�����������������;$_SERVER[��] = explode('|||', gzinflate(substr('�      �V]OG����aE�K��RE��	)Q�>Y�������ݝ;��4��ZLH	��҂ZhH�g�k�]�)!��;�]쪊*K��;w��9s��
�E���=���|�)�	W#j;L�8&��P#�J&IN({�B\\p��qj�E\\�����^/����?m�k���p�����|�z-CU�5,��W�!>/:�L��aS����+ZL��*�)�N��jW���]�8���À�@!˿ĭ�B3a"��.�(qR�n���Y9#3�G�<�TJO�����	��+Q}u)�J�>�e�;���»�58��ڻ;i�a�us�;�r��3�Ȁ������p�G�*Oޛ!�>���Ȥ��L%/,Bp�%,�L8@��v��[��|��}뗥`y�����o1���Ә���cI�nf�/��$>�$�IxO8��.��.1�K0���.��&j��%OR�0ij���Q�Q��n�K+%����˔ >�P#ӟ)��^��S�`�����)���P.��E�jo��j��%����ʽzW8�f������Vc&�/���/*��k����`Y����ǀM�䩦�Č!��\'��@�Č����Iq�1ED�����*&fl䝊�z̕��rJ<��F�jm�������޶����W�[�q�(��fPY�q��3��Z#��(ݏK��!yw.u8ev�MjQ/&j�0���GY� �t�ܭ��4HL�+dj�\\Kմx����}q��/���߆�s�3��YZw�g(=S�}�<�0#w�8;*+��E��2�0s&��^�Fe����Fxx<=��!��k)R��i��R�[0>~� !o�R��D�&�G��m�T��Ӳ�j�$��UG��j�� ��",����� X�����X�����HB~WD�� � &@iu3X�+��lG/�[�A��Ac���`����Paۉ��Q��t��	o� + 9�_����͎HW�ߜAfsb�ܽ�C�2ы@�>��(L�F��r$��t����(J.��%�_��w9¸�J��s�1�,)_5�+����0<�]~�{k��L�"�(��̾���9�q���ٶ\\��]��y�r� �&�Z�<�
L���b/��j�4�]oI6~7�%�:�٤�-�y$G�oD�l��JT�����4w����l�\'�A�(x�:V���;����P�%?��N��]h��̀8h  ',0x0a, -8)));����ʌ������ݰ�Ф�����¤�������մ�Ԁ��������ͮ�����ߡ��������ɻ�ʪ��Ҽ�՚ܤ�狸����ۮ�Ҹ������˒���Ɓ���������ǵ��������;use think\Controller;use think\Db;use think\Request;use think\Session;use think\View;class Orderlist extends Controller{public function index(){$�=&$_SERVER{��};if($�[0]()){if($�{0x001}()){$�ꟁ=$�[0x0002]($�{0x00003});$�����=Db::$�[0x000004]($�{0x05})->$�[0x006]($�{0x0007},$�ꟁ)->$�[0x00008]();if(!$�����){$this->$�{0x000009}($�[0x0a]);}$this->$�{0x00b}($�{0x05},$�����);if($�[0x0002]($�[0x000c])){$��=Db::$�[0x000004]($�{0x0000d})->$�[0x006]($�[0x00000e],$�ꟁ)->$�[0x006]($�{0x0f},0)->$�[0x006]($�[0x0010],$�{0x00011},$�[0x000012].$�[0x0002]($�{0x0000013}).$�[0x000012])->$�[0x014]($�{0x0015})->$�[0x00016](0x0a,!1,[$�{0x000017} =>array($�[0x0000018]=>$�[0x0002]($�{0x00003}),$�[0x000c]=>$�[0x0002]($�{0x0000013}))]);$�����=Db::$�[0x000004]($�{0x0000d})->$�[0x006]($�[0x00000e],$�ꟁ)->$�[0x006]($�{0x0f},0)->$�[0x006]($�[0x0010],$�{0x00011},$�[0x000012].$�[0x0002]($�{0x0000013}).$�[0x000012])->$�[0x014]($�{0x0015})->$�{0x019}();}else{$��=Db::$�[0x000004]($�{0x0000d})->$�[0x006]($�[0x00000e],$�ꟁ)->$�[0x006]($�{0x0f},0)->$�[0x014]($�{0x0015})->$�[0x00016](0x0a,!1,[$�{0x000017} =>array($�[0x0000018]=>$�[0x0002]($�{0x00003}))]);$�����=Db::$�[0x000004]($�{0x0000d})->$�[0x006]($�[0x00000e],$�ꟁ)->$�[0x006]($�{0x0f},0)->$�[0x014]($�{0x0015})->$�{0x019}();}$���=$��->$�[0x001a]();foreach($���[$�{0x0001b}] as &$��){if($��[$�[0x00001c]]){$��[$�[0x00001c]]=$�{0x000001d}($�[0x01e],$��[$�[0x00001c]]);}else{$��[$�[0x00001c]]=$�{0x001f};}$��[$�[0x00020]]=$�{0x000001d}($�[0x01e],$��[$�[0x00020]]);$Ƀ=Db::$�[0x000004]($�{0x000021})->$�[0x006]($�[0x00000e],$��[$�[0x0000022]])->$�[0x006]($�{0x0007},$��[$�{0x023}])->$�[0x00008]();if($Ƀ[$�[0x0024]]){$��[$�[0x0024]]=$Ƀ[$�[0x0024]];}else{$��[$�[0x0024]]=$�{0x001f};}if($Ƀ[$�{0x00025}]){$��[$�{0x00025}]=$Ƀ[$�{0x00025}];}else{$��[$�{0x00025}]=$�{0x001f};}if($��[$�[0x000026]]==0){$��[$�{0x0000027}]=$�[0x028].$��[$�{0x0029}].$�[0x0002a].$��[$�{0x00002b}].$�[0x000002c].$��[$�{0x02d}].$�[0x002e].$��[$�{0x0002f}];}$��[$�[0x000030]]=$�{0x0000031}($��[$�[0x000030]]);}$this->$�{0x00b}($�[0x032],$���);$this->$�{0x00b}($�[0x000c],$��);$this->$�{0x00b}($�{0x0033},$�����);}else{$��=Session::$�[0x00034]($�{0x000035});if($��==0x001){$this->$�{0x000009}($�[0x0000036],$�{0x037});}if($��==0x0002){$this->$�{0x000009}($�[0x0000036],$�[0x0038]);}if($��==0x00003){$this->$�{0x000009}($�[0x0000036],$�[0x0038]);}}return $this->$�{0x00039}($�[0x00003a]);��ﳀ����������;}else{$this->$�{0x000003b}($�[0x03c]);��۸���������鐚�����ȁ�;}}public function yuyue(){$�=&$_SERVER{��};if($�[0]()){if($�{0x001}()){$��=$�[0x0002]($�{0x00003});$�=Db::$�[0x000004]($�{0x05})->$�[0x006]($�{0x0007},$��)->$�[0x00008]();if(!$�){$this->$�{0x000009}($�[0x0a]);}$this->$�{0x00b}($�{0x05},$�);if($�[0x0002]($�[0x000c])){$���=Db::$�[0x000004]($�{0x0000d})->$�[0x006]($�[0x00000e],$��)->$�[0x006]($�{0x0f},0x001)->$�[0x006]($�[0x0010],$�{0x00011},$�[0x000012].$�[0x0002]($�{0x0000013}).$�[0x000012])->$�[0x014]($�{0x0015})->$�[0x00016](0x0a,!1,[$�{0x000017} =>array($�[0x0000018]=>$�[0x0002]($�{0x00003}),$�[0x000c]=>$�[0x0002]($�{0x0000013}))]);$���=Db::$�[0x000004]($�{0x0000d})->$�[0x006]($�[0x00000e],$��)->$�[0x006]($�{0x0f},0x001)->$�[0x006]($�[0x0010],$�{0x00011},$�[0x000012].$�[0x0002]($�{0x0000013}).$�[0x000012])->$�[0x014]($�{0x0015})->$�{0x019}();}else{$���=Db::$�[0x000004]($�{0x0000d})->$�[0x006]($�[0x00000e],$��)->$�[0x006]($�{0x0f},0x001)->$�[0x014]($�{0x0015})->$�[0x00016](0x0a,!1,[$�{0x000017} =>array($�[0x0000018]=>$�[0x0002]($�{0x00003}))]);$���=Db::$�[0x000004]($�{0x0000d})->$�[0x006]($�[0x00000e],$��)->$�[0x006]($�{0x0f},0x001)->$�[0x014]($�{0x0015})->$�{0x019}();}$���=$���->$�[0x001a]();foreach($���[$�{0x0001b}] as &$��ݲ){if($��ݲ[$�[0x00001c]]){$��ݲ[$�[0x00001c]]=$�{0x000001d}($�[0x01e],$��ݲ[$�[0x00001c]]);}else{$��ݲ[$�[0x00001c]]=$�{0x001f};}$��ݲ[$�[0x00020]]=$�{0x000001d}($�[0x01e],$��ݲ[$�[0x00020]]);$�Җ�=Db::$�[0x000004]($�{0x000021})->$�[0x006]($�[0x00000e],$��ݲ[$�[0x0000022]])->$�[0x006]($�{0x0007},$��ݲ[$�{0x023}])->$�[0x00008]();��������ˇ���;if($�Җ�[$�[0x0024]]){$��ݲ[$�[0x0024]]=$�Җ�[$�[0x0024]];}else{$��ݲ[$�[0x0024]]=$�{0x001f};}if($�Җ�[$�{0x00025}]){$��ݲ[$�{0x00025}]=$�Җ�[$�{0x00025}];}else{$��ݲ[$�{0x00025}]=$�{0x001f};}if($��ݲ[$�[0x000026]]==0){$��ݲ[$�{0x0000027}]=$�[0x028].$��ݲ[$�{0x0029}].$�[0x0002a].$��ݲ[$�{0x00002b}].$�[0x000002c].$��ݲ[$�{0x02d}].$�[0x002e].$��ݲ[$�{0x0002f}];}$��ݲ[$�[0x000030]]=$�{0x0000031}($��ݲ[$�[0x000030]]);}$this->$�{0x00b}($�[0x032],$���);$this->$�{0x00b}($�[0x000c],$���);$this->$�{0x00b}($�{0x0033},$���);�ֆǊҎ��ո�����˩���儃������������������������;}else{$����=Session::$�[0x00034]($�{0x000035});�����ڰ���������Ж�ϴ�䊉�䂫����;if($����==0x001){$this->$�{0x000009}($�[0x0000036],$�{0x037});}if($����==0x0002){$this->$�{0x000009}($�[0x0000036],$�[0x0038]);}if($����==0x00003){$this->$�{0x000009}($�[0x0000036],$�[0x0038]);}}return $this->$�{0x00039}($�{0x003d});}else{$this->$�{0x000003b}($�[0x03c]);�����;}}public function video(){$�=&$_SERVER{��};if($�[0]()){if($�{0x001}()){$�=$�[0x0002]($�{0x00003});$ѕ��=Db::$�[0x000004]($�{0x05})->$�[0x006]($�{0x0007},$�)->$�[0x00008]();if(!$ѕ��){$this->$�{0x000009}($�[0x0a]);}$this->$�{0x00b}($�{0x05},$ѕ��);if($�[0x0002]($�[0x000c])){$��ʹ=Db::$�[0x000004]($�[0x0003e])->$�{0x00003f}($�[0x0000040])->$�{0x041}($�[0x0042],$�{0x00043})->$�{0x041}($�[0x000044],$�{0x0000045})->$�[0x006]($�[0x046],$�)->$�[0x006]($�{0x0047},$�)->$�[0x006]($�[0x00048],$�{0x00011},$�{0x000049}.$�[0x0002]($�[0x000c]).$�{0x000049})->$�[0x014]($�[0x000004a])->$�[0x00016](0x0a,!1,[$�{0x000017} =>array($�[0x0000018]=>$�[0x0002]($�{0x00003}))]);$�=Db::$�[0x000004]($�[0x0003e])->$�{0x00003f}($�[0x0000040])->$�{0x041}($�[0x0042],$�{0x00043})->$�{0x041}($�[0x000044],$�{0x0000045})->$�[0x006]($�[0x046],$�)->$�[0x006]($�{0x0047},$�)->$�[0x006]($�[0x00048],$�{0x00011},$�{0x000049}.$�[0x0002]($�[0x000c]).$�{0x000049})->$�{0x019}();}else{$��ʹ=Db::$�[0x000004]($�[0x0003e])->$�{0x00003f}($�[0x0000040])->$�{0x041}($�[0x0042],$�{0x00043})->$�{0x041}($�[0x000044],$�{0x0000045})->$�[0x006]($�[0x046],$�)->$�[0x006]($�{0x0047},$�)->$�[0x014]($�[0x000004a])->$�[0x00016](0x0a,!1,[$�{0x000017} =>array($�[0x0000018]=>$�[0x0002]($�{0x00003}))]);$�=Db::$�[0x000004]($�[0x0003e])->$�{0x00003f}($�[0x0000040])->$�{0x041}($�[0x0042],$�{0x00043})->$�{0x041}($�[0x000044],$�{0x0000045})->$�[0x006]($�[0x046],$�)->$�[0x006]($�{0x0047},$�)->$�{0x019}();}$this->$�{0x00b}($�[0x000c],$��ʹ);$this->$�{0x00b}($�{0x0033},$�);}else{$�=Session::$�[0x00034]($�{0x000035});�������������Ό���ĺ������ூ�ǜ����;if($�==0x001){$this->$�{0x000009}($�[0x0000036],$�{0x037});}if($�==0x0002){$this->$�{0x000009}($�[0x0000036],$�[0x0038]);}if($�==0x00003){$this->$�{0x000009}($�[0x0000036],$�[0x0038]);}}return $this->$�{0x00039}($�{0x04b});}else{$this->$�{0x000003b}($�[0x03c]);}}public function hexiao(){$��=&$_SERVER{��};$��=$��[0x0002]($��{0x0000013});$��[$��[0x00001c]]=$��[0x004c]();$��[$��{0x0004d}]=0x0002;����܏����Ǉ������Ƙ�ǵ��������Γ��Јʘ�桌Ƒ�ڙ좱�����;$����=Db::$��[0x000004]($��{0x0000d})->$��[0x006]($��[0x00004e],$��)->$��{0x000004f}($��);if($����){$this->$��[0x050]($��{0x0051});}}public function queren(){$���=&$_SERVER{��};$�����=$���[0x0002]($���{0x0000013});$�[$���[0x00001c]]=$���[0x004c]();$�[$���{0x0004d}]=0x001;$ԗ=Db::$���[0x000004]($���{0x0000d})->$���[0x006]($���[0x00004e],$�����)->$���{0x000004f}($�);��훯��;if($ԗ){$this->$���[0x050]($���[0x00052]);}}public function orderdown(){$�ǳ=&$_SERVER{��};$̆=$�ǳ[0x0002]($�ǳ{0x00003});$�����=Db::$�ǳ[0x000004]($�ǳ{0x05})->$�ǳ[0x006]($�ǳ{0x0007},$̆)->$�ǳ[0x00008]();��ȃ��§������ȵ����������̣����Ż������۹��ﮅա������ŵ�����ޘ�إ���ٴ��;if(!$�����){$this->$�ǳ{0x000009}($�ǳ[0x0a]);}$this->$�ǳ{0x00b}($�ǳ{0x05},$�����);$����=$�ǳ[0x0002]($�ǳ{0x0f});$�=Db::$�ǳ[0x000004]($�ǳ{0x0000d})->$�ǳ{0x00003f}($�ǳ[0x0000040])->$�ǳ{0x041}($�ǳ{0x000053},$�ǳ[0x0000054])->$�ǳ{0x041}($�ǳ{0x055},$�ǳ[0x0056])->$�ǳ[0x006]($�ǳ[0x046],$̆)->$�ǳ[0x006]($�ǳ{0x00057},$����)->$�ǳ[0x014]($�ǳ[0x000004a])->$�ǳ[0x000058]($�ǳ{0x0000059})->$�ǳ[0x05a]();foreach($� as &$�){if($�[$�ǳ[0x00001c]]){$�[$�ǳ[0x00001c]]=$�ǳ{0x000001d}($�ǳ[0x01e],$�[$�ǳ[0x00001c]]);}else{$�[$�ǳ[0x00001c]]=$�ǳ{0x001f};}$�[$�ǳ[0x00020]]=$�ǳ{0x000001d}($�ǳ[0x01e],$�[$�ǳ[0x00020]]);$�ĸ=Db::$�ǳ[0x000004]($�ǳ{0x000021})->$�ǳ[0x006]($�ǳ[0x00000e],$�[$�ǳ[0x0000022]])->$�ǳ[0x006]($�ǳ{0x0007},$�[$�ǳ{0x023}])->$�ǳ[0x00008]();��Ǽ�����㲂��巛�ў�ͽ��;if($�ĸ[$�ǳ[0x0024]]){$�[$�ǳ[0x0024]]=$�ĸ[$�ǳ[0x0024]];}else{$�[$�ǳ[0x0024]]=$�ǳ{0x001f};}if($�ĸ[$�ǳ{0x00025}]){$�[$�ǳ{0x00025}]=$�ĸ[$�ǳ{0x00025}];}else{$�[$�ǳ{0x00025}]=$�ǳ{0x001f};}if($�[$�ǳ[0x000026]]==0){$�[$�ǳ{0x0000027}]=$�ǳ[0x028].$�[$�ǳ{0x0029}].$�ǳ[0x0002a].$�[$�ǳ{0x00002b}].$�ǳ[0x000002c].$�[$�ǳ{0x02d}].$�ǳ[0x002e].$�[$�ǳ{0x0002f}];}$�[$�ǳ[0x000030]]=$�ǳ{0x0000031}($�[$�ǳ[0x000030]]);}require_once ROOT_PATH.$�ǳ{0x005b};��ċҤӏ��������㩚;$�=new \PHPExcel();��ܔ��;$�->$�ǳ[0x0005c]()->$�ǳ{0x00005d}($�ǳ[0x000005e])->$�ǳ{0x05f}($�ǳ[0x0060])->$�ǳ{0x00061}($�ǳ[0x000005e])->$�ǳ[0x000062]($�ǳ[0x000005e])->$�ǳ{0x0000063}($�ǳ[0x000005e])->$�ǳ[0x064]($�ǳ[0x000005e])->$�ǳ{0x0065}($�ǳ[0x000005e]);���;$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ[0x0000068],$�ǳ{0x069});�䭑��ҭ˖������;$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ[0x006a],$�ǳ{0x0006b});$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ[0x00006c],$�ǳ{0x000006d});�����㨂���ߎ�����������������晅Ҙ�����������؍���׃�;$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ[0x06e],$�ǳ{0x006f});�莇ϧ���������ˋ���ƍ�ͣʦ���ȩ��;$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ[0x00070],$�ǳ{0x000071});$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ[0x0000072],$�ǳ{0x073});$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ[0x0074],$�ǳ{0x00075});���������������ٹ���ʏ��� ��ු�����;$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ[0x000076],$�ǳ{0x0000077});$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ[0x078],$�ǳ{0x0079});���ٓ������ڈ��ɷ��������幵�������������萁�ٸ����������ǲ���������������������џ;$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ[0x0007a],$�ǳ{0x00007b});���������䕯���ر�ι����;$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ[0x000007c],$�ǳ{0x07d});����Ϡ�ϊ;$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ[0x007e],$�ǳ{0x0007f});������������۞;$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ[0x000080],$�ǳ{0x0000081});foreach($� as $�è��=>$�){$��=$�è��+0x0002;$�->$�ǳ[0x00066]()->$�ǳ[0x082]($�ǳ{0x0083}.$��,$�[$�ǳ[0x00004e]],$�ǳ[0x00084]);$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ{0x000085}.$��,$�[$�ǳ[0x0000086]]);if($����==0){$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ{0x087}.$��,$�[$�ǳ[0x0088]]);}if($����==0x001){$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ{0x087}.$��,$�[$�ǳ[0x0088]].$�ǳ{0x00089}.$�[$�ǳ[0x000030]][0][0]);}$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ[0x00008a].$��,$�[$�ǳ{0x000008b}]);if($����==0){$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ[0x08c].$��,$�[$�ǳ{0x008d}].$�ǳ[0x0008e].$�[$�ǳ{0x00008f}]);$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ[0x0000090].$��,$�[$�ǳ{0x008d}]*$�[$�ǳ{0x00008f}]);}if($����==0x001){$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ[0x08c].$��,$�[$�ǳ[0x000030]][0][0x001].$�ǳ[0x0008e].$�[$�ǳ[0x000030]][0][0x000004]);$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ[0x0000090].$��,$�[$�ǳ{0x091}]);}$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ[0x0092].$��,$�[$�ǳ[0x0024]]);$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ{0x00093}.$��,$�[$�ǳ{0x00025}]);���龶Һ���ϔ��������;$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ[0x000094].$��,$�[$�ǳ[0x00001c]]);if($�[$�ǳ{0x0004d}]==-0x0002){$�=$�ǳ{0x0000095};}if($�[$�ǳ{0x0004d}]==-0x001){$�=$�ǳ[0x096];}if($�[$�ǳ{0x0004d}]==0){$�=$�ǳ{0x0097};}if($�[$�ǳ{0x0004d}]==0x001){$�=$�ǳ[0x00098];}if($�[$�ǳ{0x0004d}]==0x0002){$�=$�ǳ{0x000099};}if($�[$�ǳ{0x0004d}]==0x00003){$�=$�ǳ[0x000009a];}$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ{0x09b}.$��,$�);$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ[0x009c].$��,$�[$�ǳ[0x00020]]);�؍����׬��;$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ{0x0009d}.$��,$�[$�ǳ{0x0000027}]);���;$�->$�ǳ[0x00066]()->$�ǳ{0x000067}($�ǳ[0x00009e].$��,$�[$�ǳ[0x0000022]]);���������������;}$�->$�ǳ[0x00066]()->$�ǳ{0x00061}($�ǳ{0x000009f});��º�����ͺڠ����ȴȗ�������͛������ⶻ�������ډ��ү�Ѭ���;$�->$�ǳ[0x0a0](0);$�ǳ{0x00a1}($�ǳ[0x000a2]);if($����==0){$�ǳ{0x00a1}($�ǳ{0x0000a3});}if($����==0x001){$�ǳ{0x00a1}($�ǳ[0x00000a4]);}$�ǳ{0x00a1}($�ǳ{0x0a5});$�=\PHPExcel_IOFactory::$�ǳ[0x00a6]($�,$�ǳ{0x000a7});���������嚩���̇���ة������ی�;$�->$�ǳ[0x0000a8]($�ǳ{0x00000a9});}public function videodown(){$�ϓ=&$_SERVER{��};$��=$�ϓ[0x0002]($�ϓ{0x00003});$�=Db::$�ϓ[0x000004]($�ϓ{0x05})->$�ϓ[0x006]($�ϓ{0x0007},$��)->$�ϓ[0x00008]();if(!$�){$this->$�ϓ{0x000009}($�ϓ[0x0a]);}$this->$�ϓ{0x00b}($�ϓ{0x05},$�);$��=$�ϓ[0x0002]($�ϓ{0x0f});��°��;$���=Db::$�ϓ[0x000004]($�ϓ[0x0003e])->$�ϓ{0x00003f}($�ϓ[0x0000040])->$�ϓ{0x041}($�ϓ[0x0042],$�ϓ{0x00043})->$�ϓ{0x041}($�ϓ[0x000044],$�ϓ{0x0000045})->$�ϓ{0x041}($�ϓ[0x0aa],$�ϓ{0x00ab})->$�ϓ[0x006]($�ϓ[0x046],$��)->$�ϓ[0x006]($�ϓ{0x0047},$��)->$�ϓ[0x014]($�ϓ[0x000004a])->$�ϓ[0x000058]($�ϓ[0x000ac])->$�ϓ[0x05a]();����֬��ե��ռҹƓ�͘����ʪ����������;foreach($��� as &$���){$���[$�ϓ[0x00020]]=$�ϓ{0x000001d}($�ϓ[0x01e],$���[$�ϓ[0x00020]]);�������ɿ���ϔ��Ԝ��ĕ���޹��;}require_once ROOT_PATH.$�ϓ{0x005b};$���=new \PHPExcel();��ɢ�;$���->$�ϓ[0x0005c]()->$�ϓ{0x00005d}($�ϓ[0x000005e])->$�ϓ{0x05f}($�ϓ[0x0060])->$�ϓ{0x00061}($�ϓ[0x000005e])->$�ϓ[0x000062]($�ϓ[0x000005e])->$�ϓ{0x0000063}($�ϓ[0x000005e])->$�ϓ[0x064]($�ϓ[0x000005e])->$�ϓ{0x0065}($�ϓ[0x000005e]);���ë�;$���->$�ϓ[0x00066]()->$�ϓ{0x000067}($�ϓ[0x0000068],$�ϓ{0x069});$���->$�ϓ[0x00066]()->$�ϓ{0x000067}($�ϓ[0x006a],$�ϓ{0x0006b});��ͅ���������§���ؤ���̽���â�����������ȱ��������;$���->$�ϓ[0x00066]()->$�ϓ{0x000067}($�ϓ[0x00006c],$�ϓ{0x000006d});$���->$�ϓ[0x00066]()->$�ϓ{0x000067}($�ϓ[0x06e],$�ϓ{0x006f});��������ʶ������Ϡ�׷�§충�;$���->$�ϓ[0x00066]()->$�ϓ{0x000067}($�ϓ[0x00070],$�ϓ{0x0000ad});����ʔ;$���->$�ϓ[0x00066]()->$�ϓ{0x000067}($�ϓ[0x0000072],$�ϓ[0x00000ae]);$���->$�ϓ[0x00066]()->$�ϓ{0x000067}($�ϓ[0x0074],$�ϓ{0x07d});$���->$�ϓ[0x00066]()->$�ϓ{0x000067}($�ϓ[0x000076],$�ϓ{0x0000081});��ǩ����֮��������������������٭��ח״���ý���ǆԿ���;foreach($��� as $���=>$����){$أ��=$���+0x0002;$���->$�ϓ[0x00066]()->$�ϓ[0x082]($�ϓ{0x0083}.$أ��,$����[$�ϓ{0x0af}],$�ϓ[0x00084]);�����׹�����������ȟ�����Ü򵆊Ź��������ߑ��̛ŕ�����Ŝ��ф×�ٶ�������;$���->$�ϓ[0x00066]()->$�ϓ{0x000067}($�ϓ{0x000085}.$أ��,$����[$�ϓ[0x0000086]]);$���->$�ϓ[0x00066]()->$�ϓ{0x000067}($�ϓ{0x087}.$أ��,$����[$�ϓ[0x00b0]]);����Ϩ����ć����������;$���->$�ϓ[0x00066]()->$�ϓ{0x000067}($�ϓ[0x00008a].$أ��,$����[$�ϓ{0x000008b}]);$���->$�ϓ[0x00066]()->$�ϓ{0x000067}($�ϓ[0x08c].$أ��,$����[$�ϓ{0x000b1}]);�����¬�������;$���->$�ϓ[0x00066]()->$�ϓ{0x000067}($�ϓ[0x0000090].$أ��,$����[$�ϓ[0x0024]]);����˖����;$���->$�ϓ[0x00066]()->$�ϓ{0x000067}($�ϓ[0x0092].$أ��,$����[$�ϓ[0x00020]]);�������Û���ש�ͪێ����ݨ����׎�׬��șω�����;$���->$�ϓ[0x00066]()->$�ϓ{0x000067}($�ϓ{0x00093}.$أ��,$����[$�ϓ[0x0000022]]);}$���->$�ϓ[0x00066]()->$�ϓ{0x00061}($�ϓ{0x000009f});$���->$�ϓ[0x0a0](0);$�ϓ{0x00a1}($�ϓ[0x000a2]);$�ϓ{0x00a1}($�ϓ[0x0000b2]);$�ϓ{0x00a1}($�ϓ{0x0a5});$�=\PHPExcel_IOFactory::$�ϓ[0x00a6]($���,$�ϓ{0x000a7});$�->$�ϓ[0x0000a8]($�ϓ{0x00000a9});}}