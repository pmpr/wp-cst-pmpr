<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6492e7a0aa824             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Attribute; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Custom\Pmpr\Container; class Attribute extends Container { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\151\164", [$this, "\x72\145\x67\x69\x73\164\x65\x72"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x61\164\x74\162\151\142\x75\164\x65\137\162\145\x6e\x64\x65\x72\x5f\x76\x61\x6c\x75\145\163"), [$this, "\163\165\x61\161\x6f\141\163\157\x75\x6f\155\157\141\165\151\x71"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x61\164\164\x72\x69\x62\x75\x74\x65\x5f\147\145\x74\x5f\142\171\x5f\x70\x6f\163\x74"), [$this, "\151\157\141\x79\x6b\x75\147\x65\x63\171\157\x63\171\x67\147\143"], 10, 2); } public function iemaakgqgqosiecm() { Setting::symcgieuakksimmu(); } public function ioaykugecyocyggc($oammesyieqmwuwyi = [], $post = null) : array { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); $siquossayskcwkea = ManipulatePost::weescwwgqgiyumyw($post, array_keys($seyqqsmuaiegkeeq)); return array_merge($oammesyieqmwuwyi, $siquossayskcwkea); } public function suaqoasouomoauiq($post) { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); $yygmoeguaqyumuui = array_keys($seyqqsmuaiegkeeq); $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $yygmoeguaqyumuui); if (!$uyuaosigqymaqsaa) { goto suqcsgaosywaauuu; } echo $this->iuygowkemiiwqmiw("\x76\141\x6c\165\145\x73", ["\x74\145\x72\x6d\x73" => $uyuaosigqymaqsaa, "\164\x61\x78\x6f\156\x6f\155\x69\145\x73" => $seyqqsmuaiegkeeq]); suqcsgaosywaauuu: } public function register() { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); if (!($seyqqsmuaiegkeeq && is_array($seyqqsmuaiegkeeq))) { goto qikaewekoecykeou; } foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya => $ywmkwiwkosakssii) { $qgweosiseeogigso = ManipulateArray::get($ywmkwiwkosakssii, "\157\x62\152\145\x63\164\137\164\x79\x70\x65"); if (!$qgweosiseeogigso) { goto yqagomygmeoecwey; } $ywmkwiwkosakssii[self::eoaiagsgqsmskugs] = $this->eoemoqciaweskqkk($ywmkwiwkosakssii); $kesssewsiegssiya = substr($kesssewsiegssiya, 0, 32); if (!ManipulateValidation::qeegmakycwwycmcm($kesssewsiegssiya)) { goto qsgqwyqaqiowkmco; } register_taxonomy($kesssewsiegssiya, $qgweosiseeogigso, $ywmkwiwkosakssii); qsgqwyqaqiowkmco: yqagomygmeoecwey: gsygwgsiawgmqiyi: } wwukgaquuyoissgy: qikaewekoecykeou: } public function eoemoqciaweskqkk($ywmkwiwkosakssii) : array { $kcumookcwskcyqak = ManipulateArray::get($ywmkwiwkosakssii, "\x70\154\x75\162\x61\154"); $sisssumicskyceeg = ManipulateArray::get($ywmkwiwkosakssii, "\x73\151\x6e\x67\x75\x6c\141\162"); return ["\x6e\141\x6d\145" => _x($kcumookcwskcyqak, "\164\141\x78\x6f\x6e\x6f\155\x79\x20\x67\x65\156\145\162\x61\x6c\x20\x6e\141\x6d\x65", PR__CST__PMPR), "\155\x65\156\165\x5f\156\x61\155\145" => $kcumookcwskcyqak, "\145\x64\x69\x74\x5f\x69\x74\x65\x6d" => sprintf(__("\105\144\151\164\40\x25\x73", PR__CST__PMPR), $sisssumicskyceeg), "\x61\x6c\x6c\137\151\164\145\x6d\163" => sprintf(__("\101\x6c\x6c\x20\x25\x73", PR__CST__PMPR), $kcumookcwskcyqak), "\x6e\x6f\164\137\146\157\165\156\x64" => sprintf(__("\x4e\x6f\x20\45\163\x20\x66\157\x75\156\x64\x2e", PR__CST__PMPR), $kcumookcwskcyqak), "\x75\x70\144\x61\x74\145\x5f\x69\x74\x65\x6d" => sprintf(__("\x55\x70\x64\x61\164\x65\x20\45\x73", PR__CST__PMPR), $sisssumicskyceeg), "\160\x61\x72\145\156\x74\x5f\x69\x74\x65\155" => sprintf(__("\120\x61\x72\x65\156\164\x20\45\163", PR__CST__PMPR), $sisssumicskyceeg), "\x73\x65\141\x72\143\150\137\x69\x74\x65\155\163" => sprintf(__("\x53\145\x61\x72\143\x68\40\x25\x73", PR__CST__PMPR), $kcumookcwskcyqak), "\141\144\144\x5f\x6e\145\x77\137\151\164\x65\155" => sprintf(__("\x41\x64\144\x20\116\145\x77\x20\x25\163", PR__CST__PMPR), $sisssumicskyceeg), "\163\x69\x6e\x67\165\x6c\x61\x72\x5f\x6e\x61\155\x65" => _x($sisssumicskyceeg, "\x74\141\x78\x6f\x6e\x6f\x6d\x79\x20\x73\x69\x6e\x67\x75\x6c\141\162\x20\156\141\155\145", PR__CST__PMPR), "\x6e\145\167\x5f\151\164\x65\x6d\x5f\156\x61\x6d\145" => sprintf(__("\x4e\x65\167\x20\45\163", PR__CST__PMPR), $sisssumicskyceeg), "\160\157\160\x75\154\141\162\137\151\164\145\155\163" => sprintf(__("\120\x6f\x70\x75\154\141\x72\40\x25\x73", PR__CST__PMPR), $kcumookcwskcyqak), "\x70\141\162\145\156\164\137\151\x74\145\155\137\143\157\154\x6f\x6e" => sprintf(__("\120\141\162\x65\x6e\x74\x20\45\x73", PR__CST__PMPR), $sisssumicskyceeg), "\x61\x64\144\137\x6f\162\x5f\162\145\155\x6f\166\x65\137\x69\x74\x65\155\x73" => sprintf(__("\x41\x64\144\x20\157\x72\x20\162\145\x6d\157\x76\145\x20\x25\x73", PR__CST__PMPR), $kcumookcwskcyqak), "\143\x68\x6f\157\x73\145\x5f\x66\x72\157\x6d\137\155\x6f\x73\x74\x5f\x75\x73\145\144" => sprintf(__("\x43\150\157\x6f\163\145\x20\146\162\x6f\x6d\x20\x74\150\x65\x20\155\157\163\164\40\165\x73\145\x64\x20\45\x73", PR__CST__PMPR), $kcumookcwskcyqak), "\x73\145\x70\x61\162\141\164\145\137\x69\x74\145\155\163\137\167\x69\x74\150\x5f\x63\157\155\155\x61\163" => sprintf(__("\x53\x65\160\x61\162\x61\x74\x65\40\45\163\x20\167\151\164\x68\40\143\x6f\x6d\155\x61\x73", PR__CST__PMPR), $kcumookcwskcyqak)]; } public function mqmocoguqcyymgqu($aqykuigiuwmmcieu = OBJECT) : array { $sogksuscggsicmac = []; $oammesyieqmwuwyi = (array) $this->weysguygiseoukqw(Setting::emcyuiagkcgsckma, []); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $aaokuekaimigoyue = ManipulateArray::get($igqsaukqcqscimok, Setting::ouywiegeiyuaaawo); $ymqmyyeuycgmigyo = ManipulateArray::get($igqsaukqcqscimok, Setting::NAME); if (!($ymqmyyeuycgmigyo && $aaokuekaimigoyue)) { goto aueaceeyommgkicu; } if (!ManipulateArray::get($igqsaukqcqscimok, Setting::iccwcygaeqmomooo, false)) { goto zayqqeqgcwkekwws; } if ($aqykuigiuwmmcieu == OBJECT) { goto sqyokemumceysegy; } $sogksuscggsicmac[$ymqmyyeuycgmigyo] = $aaokuekaimigoyue; goto oqousikwiiqagoyw; sqyokemumceysegy: $sciomagaqmgggsiu = ManipulateArray::get($igqsaukqcqscimok, Setting::miemwgakuokqyoqo, []); if (!$sciomagaqmgggsiu) { goto aiccyaswigkaycqk; } $sogksuscggsicmac[$ymqmyyeuycgmigyo] = ["\x70\154\x75\x72\x61\154" => ManipulateArray::get($igqsaukqcqscimok, Setting::mmieaueggwwaokig), "\x73\x69\x6e\x67\165\x6c\141\x72" => ManipulateArray::get($igqsaukqcqscimok, Setting::egyqyoogakommguc), self::ouywiegeiyuaaawo => $aaokuekaimigoyue, self::qgqyauaqwqmqseim => ManipulateArray::get($igqsaukqcqscimok, Setting::qgqyauaqwqmqseim), "\x6f\x62\x6a\145\x63\x74\x5f\x74\171\x70\x65" => $sciomagaqmgggsiu, "\144\145\163\143\x72\x69\160\x74\x69\x6f\156" => ManipulateArray::get($igqsaukqcqscimok, self::eqkeooqcsscoggia), "\x73\151\x6e\147\154\x65\137\166\141\154\165\145" => ManipulateArray::get($igqsaukqcqscimok, "\163\151\x6e\x67\x6c\x65\137\x76\x61\154\x75\145", false), "\150\x69\145\162\x61\x72\x63\150\x69\143\141\154" => true, "\151\x73\137\141\164\x74\162\151\142\x75\x74\145" => true]; aiccyaswigkaycqk: oqousikwiiqagoyw: zayqqeqgcwkekwws: aueaceeyommgkicu: usymasgsyqgsuocg: } eucqomyqykgoiuge: return $sogksuscggsicmac; } }
