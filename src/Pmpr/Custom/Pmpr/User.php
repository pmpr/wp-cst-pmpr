<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148fdb866c9c             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; class User extends Container { const SKILLS = "\163\x6b\x69\x6c\x6c\163"; const CAPTION = "\x63\141\160\x74\x69\157\156"; const EDUCATION = "\x65\144\165\143\x61\164\151\x6f\x6e"; const IS_MANAGER = "\x69\x73\137\155\141\x6e\x61\147\145\x72"; const EXPERIENCE_YEAR = "\x65\x78\160\145\x72\151\x65\x6e\143\x65\x5f\x79\x65\141\x72"; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\x69\164", [$this, "\151\156\x69\x74"])->qcsmikeggeemccuu("\163\x68\x6f\x72\x74\x63\157\144\x65\x5f\x74\145\141\x6d\137\x75\x73\x65\x72\x5f\151\x6e\146\x6f", [$this, "\x75\143\165\x65\163\x71\x75\x79\x73\167\147\171\x79\153\x6d\143"], 1, 2)->qcsmikeggeemccuu("\x73\150\x6f\162\164\x63\157\x64\x65\x5f\164\145\141\x6d\137\165\x73\x65\x72\x5f\143\141\160\164\151\x6f\156", [$this, "\x77\x61\x75\x77\167\x69\157\151\x77\155\x71\x6d\x73\163\x73\x6b"])->qcsmikeggeemccuu("\x73\x68\x6f\x72\164\143\157\144\145\137\164\x65\x61\x6d\x5f\x75\x73\145\162\x5f\145\x78\x70\x65\162\151\x65\x6e\x63\145", [$this, "\155\161\171\x65\x73\x6b\x6b\161\x61\x65\163\163\x75\147\x6f\x75"], 1, 2); } public function init() { $this->giiwgiqqoicuqcuw(); $this->ogmgcumcoomekiuy(); } public function cogiwegesawkwomk() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto hoeeyiowekaeemko; } hoeeyiowekaeemko: } public function giiwgiqqoicuqcuw() { add_role("\x6d\x65\x6d\x62\x65\162", __("\x4d\145\x6d\142\145\162", PR__CTM__PMPR), ["\162\145\x61\x64" => true, "\x65\144\x69\164\x5f\x70\157\163\164\x73" => true, "\144\145\x6c\x65\164\145\x5f\x70\x6f\x73\x74\x73" => false]); } public function ogmgcumcoomekiuy() { $smgioooysaacyigy = ["\x63\157\156\164\x72\151\142\x75\x74\157\x72" => "\165\160\154\157\141\x64\137\x66\151\154\x65\x73", "\x65\144\151\164\157\x72" => ["\160\165\x62\154\151\x73\150\137\160\157\x73\x74\163"]]; global $wp_roles; foreach ($smgioooysaacyigy as $oeucsuyqysaciasy => $gkswkiicccswksiq) { if ($oeucsuyqysaciasy && is_array($gkswkiicccswksiq)) { goto uqqaiagaeqgqgaiy; } $wp_roles->add_cap($oeucsuyqysaciasy, $gkswkiicccswksiq); goto esuiysskoweawsue; uqqaiagaeqgqgaiy: foreach ($gkswkiicccswksiq as $igqsaukqcqscimok) { $wp_roles->add_cap($oeucsuyqysaciasy, $igqsaukqcqscimok); uguigkcmukuouway: } qicwaskssogcokgm: esuiysskoweawsue: usquiuuyiyqaeyiu: } kymkucucyeoeikim: } public function wauwwioiwmqmsssk($mkucggyaiaukqoce) { $oeceqaaausgeosyu = ManipulateUser::igawqaomowicuayw(self::CAPTION, $mkucggyaiaukqoce, true); echo esc_html($oeceqaaausgeosyu); } public function ucuesquyswgyykmc($mkucggyaiaukqoce, $emwagqamysmyeigc = false) { $oeceqaaausgeosyu = ManipulateUser::igawqaomowicuayw(self::CAPTION, $mkucggyaiaukqoce, true); $geysycsisgaocukc = ManipulateUser::igawqaomowicuayw(self::EDUCATION, $mkucggyaiaukqoce, true); echo $this->iuygowkemiiwqmiw("\x74\145\x61\155\137\163\150\157\162\x74\143\x6f\x64\145\137\x69\156\x66\x6f", ["\143\x61\160\164\151\x6f\156" => $oeceqaaausgeosyu, "\145\x64\165\143\x61\x74\151\157\156" => $geysycsisgaocukc, "\x69\x73\137\x6d\141\156\x61\x67\145\162" => $emwagqamysmyeigc]); } public function iwowkiqkseykocsk($mkucggyaiaukqoce, $ggauoeuaesiymgee = null) { $qcgkuqesqqymcuui = $ggauoeuaesiymgee; if (!$mkucggyaiaukqoce) { goto aegysmeecgcgayyw; } $ksskkagoieiyuuwe = true; $ggkaciewmeqmgckg = ManipulateUser::igawqaomowicuayw(self::EXPERIENCE_YEAR, $mkucggyaiaukqoce, true); if ($ggkaciewmeqmgckg) { goto gaomwagkcciesyqy; } $ksskkagoieiyuuwe = false; $ggkaciewmeqmgckg = ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce, "\x75\163\145\x72\137\162\145\x67\x69\163\x74\x65\x72\x65\x64"); gaomwagkcciesyqy: $qcgkuqesqqymcuui = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\147\x65\x74\137\x61\x67\145"), $ggkaciewmeqmgckg, $ksskkagoieiyuuwe); aegysmeecgcgayyw: return $qcgkuqesqqymcuui; } public function mqyeskkqaessugou($mkucggyaiaukqoce, $emwagqamysmyeigc = false) { if (!$mkucggyaiaukqoce) { goto suqkuqygkkgwyaie; } $cimomgqukyyywkws = $this->iwowkiqkseykocsk($mkucggyaiaukqoce, 1); echo $this->iuygowkemiiwqmiw("\164\x65\141\155\137\x73\x68\x6f\162\x74\x63\157\144\145\137\145\x78\160\x65\162\151\x65\x6e\x63\x65", ["\x65\170\x70\x65\x72\x69\x65\x6e\x63\145" => sprintf(__("\x25\163\40\131\x65\x61\162\x73", PR__CTM__PMPR), $this->sscegwueamckwmcy("\x77\x68\157\x5f\x73\x68\x6f\x72\164\x63\157\x64\145\x5f\171\x65\141\x72", $cimomgqukyyywkws)), "\164\x65\170\x74" => __("\x45\170\x70\145\162\151\145\156\143\x65", PR__CTM__PMPR), "\151\163\137\155\x61\x6e\x61\x67\x65\x72" => $emwagqamysmyeigc]); suqkuqygkkgwyaie: } }
