<?php /* -- 万能门店小程序系统 购买QQ：771382732
-- enphp : https://git.oschina.net/mz/mzphp2
 */
 namespace app\index\controller;error_reporting(E_ALL^E_NOTICE);define('�', '�');�р������������ⅻõ���⯺���ҕ���������ϯ�ѧ���������ן�ش��ʋ��Եɦ�����Ȋ�������腊��⽤���;$_GET[�] = explode('|||', gzinflate(substr('�      mS�n1�@�wr�ʅ?�i�د�k���)�r��!�V��TZT"�RO$E=4Q�?;ͩ���ߚ�&����~3�L{@7��̹<<<S�����RY�D�*��"��o�@#]Wnp��.u�~���f�\'n<u��ŷ�n�����f��;x�1<Ǯ�0���>��!��y+9��K]b����)�������P�%�p���N6-���#�I�Y\\ԥU�����5��������7�}z?�H���(y�8�	���ⱕN�o����톊�"�������eܬ�򜠬�$@��(�&���H���O�s�\'Eb�-lMLҊv�ۨ�nʬ*J� ]�V-��P��b)].C8花���~��l1z7����?��G?<p��R���������K�w~��N��i:�!���P�(+�Պ��;��Ck:("��Z�	pQ��{��D�>�0ȹ���yT�d���Y��l	  ',0x0a, -8)));��嬶����뤄���������֧�������ġ��;use think\Controller;use think\Db;use think\Request;use think\Session;use think\View;class Adv extends Controller{public function adv(){$�=&$_GET{�};if($�[0]()){if($�{0x001}()){$���=$�[0x0002]($�{0x00003});$���=Db::$�[0x000004]($�{0x05})->$�[0x006]($�{0x0007},$���)->$�[0x00008]();if(!$���){$this->$�{0x000009}($�[0x0a]);}$this->$�{0x00b}($�{0x05},$���);$��=Db::$�[0x000004]($�[0x000c])->$�[0x006]($�{0x0000d},$���)->$�[0x00008]();�������ƙ�ݙ������𕌧�;$this->$�{0x00b}($�[0x00000e],$��);���������ڇ�͂����������;$�=array();�������Ҁ���ذ�������������߱���;$�=Db::$�[0x000004]($�{0x0f})->$�[0x006]($�{0x0000d},$���)->$�[0x006]($�[0x0010],$�{0x00011})->$�[0x000012](0x0a,!1,[$�{0x0000013} =>array($�[0x014]=>$�[0x0002]($�{0x00003}))]);��з������ۢ������ے����뢟����Լ�������ֈ�������̯�������;$�䳳�=Db::$�[0x000004]($�{0x0f})->$�[0x006]($�{0x0000d},$���)->$�[0x006]($�[0x0010],$�{0x00011})->$�{0x0015}();������;$this->$�{0x00b}($�[0x00016],$�䳳�);�߫�����䤸�������餤����;$this->$�{0x00b}($�{0x000017},$�);}else{$����=Session::$�[0x0000018]($�{0x019});if($����==0x001){$this->$�{0x000009}($�[0x001a],$�{0x0001b});}if($����==0x0002){$this->$�{0x000009}($�[0x001a],$�[0x00001c]);}if($����==0x00003){$this->$�{0x000009}($�[0x001a],$�[0x00001c]);}}return $this->$�{0x000001d}($�{0x000017});}else{$this->$�[0x01e]($�{0x001f});����������ĝ˯�ﮕӗ���������������������������������̧����䧴ֵ;}}public function kadv(){$�=&$_GET{�};if($�[0]()){if($�{0x001}()){$�=$�[0x0002]($�{0x00003});$�=Db::$�[0x000004]($�{0x05})->$�[0x006]($�{0x0007},$�)->$�[0x00008]();if(!$�){$this->$�{0x000009}($�[0x0a]);}$this->$�{0x00b}($�{0x05},$�);$�=Db::$�[0x000004]($�[0x000c])->$�[0x006]($�{0x0000d},$�)->$�[0x00008]();$this->$�{0x00b}($�[0x00000e],$�);��;$��־�=array();����ܩɓ;$��־�=Db::$�[0x000004]($�{0x0f})->$�[0x006]($�{0x0000d},$�)->$�[0x006]($�[0x0010],$�[0x00020])->$�[0x000012](0x0a,!1,[$�{0x0000013} =>array($�[0x014]=>$�[0x0002]($�{0x00003}))]);����׃Յ�ً��믟�Ο;$���α=Db::$�[0x000004]($�{0x0f})->$�[0x006]($�{0x0000d},$�)->$�[0x006]($�[0x0010],$�[0x00020])->$�{0x0015}();$this->$�{0x00b}($�[0x00016],$���α);$this->$�{0x00b}($�{0x000017},$��־�);���߇��;}else{$�=Session::$�[0x0000018]($�{0x019});if($�==0x001){$this->$�{0x000009}($�[0x001a],$�{0x0001b});}if($�==0x0002){$this->$�{0x000009}($�[0x001a],$�[0x00001c]);}if($�==0x00003){$this->$�{0x000009}($�[0x001a],$�[0x00001c]);}}return $this->$�{0x000001d}($�{0x000021});��������Ӑ�������ҩ��Ԕ�ߘ��������߇ɴ����;}else{$this->$�[0x01e]($�{0x001f});�������Ǝ榦�ޝ�˹������ÿ봷�򨁅���繎�ߵ���勍;}}public function sadv(){$���=&$_GET{�};if($���[0]()){if($���{0x001}()){$��=$���[0x0002]($���{0x00003});$�=Db::$���[0x000004]($���{0x05})->$���[0x006]($���{0x0007},$��)->$���[0x00008]();if(!$�){$this->$���{0x000009}($���[0x0a]);}$this->$���{0x00b}($���{0x05},$�);$��=Db::$���[0x000004]($���[0x000c])->$���[0x006]($���{0x0000d},$��)->$���[0x00008]();$this->$���{0x00b}($���[0x00000e],$��);��љ�����ݣ������;$�ŵ�=array();$�ŵ�=Db::$���[0x000004]($���{0x0f})->$���[0x006]($���{0x0000d},$��)->$���[0x006]($���[0x0010],$���[0x0000022])->$���[0x000012](0x0a,!1,[$���{0x0000013} =>array($���[0x014]=>$���[0x0002]($���{0x00003}))]);���㈺����ݗ�˃����叚�������������Ģ�ہ��͸��爸͘Ӗ�����܈���;$�����=Db::$���[0x000004]($���{0x0f})->$���[0x006]($���{0x0000d},$��)->$���[0x006]($���[0x0010],$���[0x0000022])->$���{0x0015}();$this->$���{0x00b}($���[0x00016],$�����);��������ǜ�ܪٹ���;$this->$���{0x00b}($���{0x000017},$�ŵ�);��Ί���������Ҡ��;}else{$�����=Session::$���[0x0000018]($���{0x019});if($�����==0x001){$this->$���{0x000009}($���[0x001a],$���{0x0001b});}if($�����==0x0002){$this->$���{0x000009}($���[0x001a],$���[0x00001c]);}if($�����==0x00003){$this->$���{0x000009}($���[0x001a],$���[0x00001c]);}}return $this->$���{0x000001d}($���{0x023});���갚�������ȡ�����ڞ���;}else{$this->$���[0x01e]($���{0x001f});�ٝ;}}public function tadv(){$ڭ=&$_GET{�};if($ڭ[0]()){if($ڭ{0x001}()){$��=$ڭ[0x0002]($ڭ{0x00003});$ݝ��=Db::$ڭ[0x000004]($ڭ{0x05})->$ڭ[0x006]($ڭ{0x0007},$��)->$ڭ[0x00008]();if(!$ݝ��){$this->$ڭ{0x000009}($ڭ[0x0a]);}$this->$ڭ{0x00b}($ڭ{0x05},$ݝ��);$���=Db::$ڭ[0x000004]($ڭ[0x000c])->$ڭ[0x006]($ڭ{0x0000d},$��)->$ڭ[0x00008]();��к��Ւ�����ҋݛ������������Ἦ��躊�̀����;$this->$ڭ{0x00b}($ڭ[0x00000e],$���);$�ю�=array();�낌�憠����и;$�ю�=Db::$ڭ[0x000004]($ڭ{0x0f})->$ڭ[0x006]($ڭ{0x0000d},$��)->$ڭ[0x006]($ڭ[0x0010],$ڭ[0x0024])->$ڭ[0x000012](0x0a,!1,[$ڭ{0x0000013} =>array($ڭ[0x014]=>$ڭ[0x0002]($ڭ{0x00003}))]);$����=Db::$ڭ[0x000004]($ڭ{0x0f})->$ڭ[0x006]($ڭ{0x0000d},$��)->$ڭ[0x006]($ڭ[0x0010],$ڭ[0x0024])->$ڭ{0x0015}();$this->$ڭ{0x00b}($ڭ[0x00016],$����);$this->$ڭ{0x00b}($ڭ{0x000017},$�ю�);}else{$�ܹ��=Session::$ڭ[0x0000018]($ڭ{0x019});if($�ܹ��==0x001){$this->$ڭ{0x000009}($ڭ[0x001a],$ڭ{0x0001b});}if($�ܹ��==0x0002){$this->$ڭ{0x000009}($ڭ[0x001a],$ڭ[0x00001c]);}if($�ܹ��==0x00003){$this->$ڭ{0x000009}($ڭ[0x001a],$ڭ[0x00001c]);}}return $this->$ڭ{0x000001d}($ڭ{0x00025});}else{$this->$ڭ[0x01e]($ڭ{0x001f});��ƞ��欶�������Ա⋙��ӈ�ݽ���������ֺ��;}}public function add(){$���=&$_GET{�};if($���[0]()){if($���{0x001}()){$�=$���[0x0002]($���{0x00003});$���=Db::$���[0x000004]($���{0x05})->$���[0x006]($���{0x0007},$�)->$���[0x00008]();if(!$���){$this->$���{0x000009}($���[0x0a]);}$this->$���{0x00b}($���{0x05},$���);$��=Db::$���[0x000004]($���[0x000c])->$���[0x006]($���{0x0000d},$�)->$���[0x00008]();������ǈ�˄���հ�����񮟙�����졝����ǭ�;$this->$���{0x00b}($���[0x00000e],$��);���ܢ�Êӵ��Ϟ����������͙������;$�=$���[0x0002]($���[0x000026]);$�=array();��枆���������޵����;if($�){$�=Db::$���[0x000004]($���{0x0f})->$���[0x006]($���{0x0007},$�)->$���[0x00008]();}else{$�=0;}$this->$���{0x00b}($���{0x0000027},$�);$this->$���{0x00b}($���[0x028],$�);}else{$��=Session::$���[0x0000018]($���{0x019});���⚽ʹÂ������۫�����ꈎ���▥Ʊ;if($��==0x001){$this->$���{0x000009}($���[0x001a],$���{0x0001b});}if($��==0x0002){$this->$���{0x000009}($���[0x001a],$���[0x00001c]);}if($��==0x00003){$this->$���{0x000009}($���[0x001a],$���[0x00001c]);}}return $this->$���{0x000001d}($���{0x0029});������޿����빧���;}else{$this->$���[0x01e]($���{0x001f});}}public function save(){$���۸=&$_GET{�};$�쉄=array();��׍ò������兹ח����Ԃ����쮥�;$�=$���۸[0x0002]($���۸[0x000026]);�Ǣ����ل���ϋ;$�쉄[$���۸[0x0002a]]=$���۸[0x0002]($���۸{0x00003});����������ȫ�����գ⯨����코;$����=$_POST[$���۸{0x00002b}];if($����){$�쉄[$���۸{0x00002b}]=$����;}$���ό=$���۸[0x0002]($���۸[0x0010]);if($���ό){$�쉄[$���۸[0x000002c]]=$���ό;}$�=$���۸[0x0002]($���۸{0x02d});if($�){$�쉄[$���۸[0x002e]]=$�;}$�ɢ�=$this->$���۸{0x0002f}($���۸[0x000030]);if($�ɢ�){$�쉄[$���۸{0x0000031}]=$�ɢ�;}$��=$���۸[0x0002]($���۸[0x032]);if($��){$�쉄[$���۸{0x0033}]=$��;}$�ó=$���۸[0x0002]($���۸[0x00034]);if($�ó){$�쉄[$���۸{0x000035}]=$�ó;}if($�){$��=Db::$���۸[0x000004]($���۸{0x0f})->$���۸[0x006]($���۸{0x0007},$�)->$���۸[0x0000036]($�쉄);}else{$��=Db::$���۸[0x000004]($���۸{0x0f})->$���۸{0x037}($�쉄);}if($��){$this->$���۸[0x0038]($���۸{0x00039});}else{$this->$���۸{0x000009}($���۸[0x00003a]);exit;}}function onepic_uploade($�){$�����=&$_GET{�};$�����=$�����{0x000003b}()->$�����[0x03c]($�);if(isset($�����)){$�����=$�����{0x003d}();$џ���=$�����->$�����[0x0003e]($�����);if($џ���){$�崛�=ROOT_HOST.$�����{0x00003f}.$�����[0x0000040]($�����{0x041},$�����[0x0042]()).$�����{0x00043}.$џ���->$�����[0x000044]();return $�崛�;}}}public function del(){$�ϰ��=&$_GET{�};$��[$�ϰ��{0x0000045}]=$�ϰ��[0x0002]($�ϰ��[0x000026]);$���=Db::$�ϰ��[0x000004]($�ϰ��{0x0f})->$�ϰ��[0x006]($��)->$�ϰ��[0x046]();�߯;if($���){$this->$�ϰ��[0x0038]($�ϰ��{0x0047});}else{$this->$�ϰ��[0x0038]($�ϰ��[0x00048]);}}}