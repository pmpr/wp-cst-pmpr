<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6261a868a7f41             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; class User extends Container { const eugksqiuqmouqmws = "\x73\x6b\x69\x6c\x6c\163"; const kscoikwuqiwqoqww = "\143\141\160\x74\x69\x6f\156"; const owgygmaagyewgioi = "\145\x64\165\143\141\x74\151\x6f\156"; const uykygsyyykscocgs = "\151\x73\137\155\x61\x6e\141\147\145\162"; const eaiouuukogwockeq = "\145\x78\x70\145\162\151\x65\x6e\143\x65\x5f\171\145\x61\x72"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\x69\x74", [$this, "\x69\x6e\x69\x74"])->qcsmikeggeemccuu("\x73\150\157\162\164\x63\x6f\144\x65\x5f\x74\145\141\x6d\x5f\165\x73\145\x72\137\x69\x6e\146\157", [$this, "\x75\143\165\x65\x73\161\x75\x79\x73\x77\x67\x79\171\x6b\x6d\x63"], 1, 2)->qcsmikeggeemccuu("\x73\x68\x6f\162\164\143\x6f\144\x65\137\164\145\x61\x6d\x5f\x75\163\145\x72\x5f\x63\141\160\164\x69\157\x6e", [$this, "\167\141\165\x77\167\151\x6f\151\x77\155\x71\x6d\163\x73\x73\153"])->qcsmikeggeemccuu("\x73\x68\157\162\x74\x63\x6f\144\145\x5f\164\145\141\x6d\137\165\163\145\162\137\145\x78\160\x65\162\x69\145\156\143\145", [$this, "\x6d\161\171\145\163\153\153\161\x61\x65\163\163\165\147\x6f\165"], 1, 2); } public function init() { $this->giiwgiqqoicuqcuw(); $this->ogmgcumcoomekiuy(); } public function cogiwegesawkwomk() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto emqswoaawgeyosmi; } emqswoaawgeyosmi: } public function giiwgiqqoicuqcuw() { add_role("\x6d\x65\x6d\x62\145\x72", __("\x4d\145\x6d\x62\145\x72", PR__CST__PMPR), ["\x72\x65\141\x64" => true, "\145\144\x69\x74\137\x70\157\163\x74\x73" => true, "\x64\145\154\145\164\145\x5f\x70\157\x73\164\163" => false]); } public function ogmgcumcoomekiuy() { $smgioooysaacyigy = ["\143\x6f\156\164\x72\x69\142\x75\164\157\162" => "\165\160\154\x6f\x61\144\x5f\x66\x69\x6c\x65\x73", "\x65\x64\x69\164\x6f\x72" => ["\160\x75\142\x6c\x69\163\150\x5f\x70\x6f\x73\x74\x73"]]; global $wp_roles; foreach ($smgioooysaacyigy as $oeucsuyqysaciasy => $gkswkiicccswksiq) { if ($oeucsuyqysaciasy && is_array($gkswkiicccswksiq)) { goto esaqcqqwuussiiwo; } $wp_roles->add_cap($oeucsuyqysaciasy, $gkswkiicccswksiq); goto ikqeeaysmqgcgawq; esaqcqqwuussiiwo: foreach ($gkswkiicccswksiq as $igqsaukqcqscimok) { $wp_roles->add_cap($oeucsuyqysaciasy, $igqsaukqcqscimok); qiiigwkqeoewsuwm: } okkmcocqokkskasy: ikqeeaysmqgcgawq: esikeyqyuikmaiek: } iwsmmkqaoksmocok: } public function wauwwioiwmqmsssk($mkucggyaiaukqoce) { $oeceqaaausgeosyu = ManipulateUser::igawqaomowicuayw(self::kscoikwuqiwqoqww, $mkucggyaiaukqoce, true); echo esc_html($oeceqaaausgeosyu); } public function ucuesquyswgyykmc($mkucggyaiaukqoce, $emwagqamysmyeigc = false) { $oeceqaaausgeosyu = ManipulateUser::igawqaomowicuayw(self::kscoikwuqiwqoqww, $mkucggyaiaukqoce, true); $geysycsisgaocukc = ManipulateUser::igawqaomowicuayw(self::owgygmaagyewgioi, $mkucggyaiaukqoce, true); echo $this->iuygowkemiiwqmiw("\164\145\x61\155\137\163\x68\157\162\x74\x63\x6f\144\145\137\151\156\x66\x6f", ["\x63\x61\160\x74\x69\x6f\156" => $oeceqaaausgeosyu, "\x65\144\165\x63\x61\164\151\157\x6e" => $geysycsisgaocukc, "\151\x73\x5f\155\x61\x6e\141\147\145\162" => $emwagqamysmyeigc]); } public function iwowkiqkseykocsk($mkucggyaiaukqoce, $ggauoeuaesiymgee = null) { $qcgkuqesqqymcuui = $ggauoeuaesiymgee; if (!$mkucggyaiaukqoce) { goto suqcsgaosywaauuu; } $ksskkagoieiyuuwe = true; $ggkaciewmeqmgckg = ManipulateUser::igawqaomowicuayw(self::eaiouuukogwockeq, $mkucggyaiaukqoce, true); if ($ggkaciewmeqmgckg) { goto mscgewkcqcoowweg; } $ksskkagoieiyuuwe = false; $ggkaciewmeqmgckg = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce, "\x75\x73\x65\x72\137\x72\x65\147\151\x73\164\145\162\x65\144"); mscgewkcqcoowweg: $qcgkuqesqqymcuui = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\147\145\164\137\141\147\145"), $ggkaciewmeqmgckg, $ksskkagoieiyuuwe); suqcsgaosywaauuu: return $qcgkuqesqqymcuui; } public function mqyeskkqaessugou($mkucggyaiaukqoce, $emwagqamysmyeigc = false) { if (!$mkucggyaiaukqoce) { goto wwukgaquuyoissgy; } $cimomgqukyyywkws = $this->iwowkiqkseykocsk($mkucggyaiaukqoce, 1); echo $this->iuygowkemiiwqmiw("\x74\145\141\x6d\137\163\150\157\162\164\143\x6f\x64\145\137\x65\x78\160\145\x72\x69\145\x6e\143\x65", ["\145\x78\x70\x65\162\x69\x65\x6e\143\145" => sprintf(__("\45\163\x20\x59\x65\x61\x72\163", PR__CST__PMPR), $this->sscegwueamckwmcy("\x77\150\157\x5f\163\x68\157\162\164\x63\x6f\x64\x65\137\171\x65\x61\162", $cimomgqukyyywkws)), "\x74\145\170\x74" => __("\105\170\160\145\162\x69\145\156\143\145", PR__CST__PMPR), "\x69\163\x5f\x6d\141\x6e\141\x67\145\162" => $emwagqamysmyeigc]); wwukgaquuyoissgy: } }
