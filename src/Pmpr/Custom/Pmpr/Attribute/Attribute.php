<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621faa65a0c61             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Attribute; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Custom\Pmpr\Container; class Attribute extends Container { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\151\164", [$this, "\x72\145\x67\x69\x73\x74\x65\x72"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\141\x74\x74\162\151\142\165\164\x65\137\162\x65\156\144\145\162\x5f\166\141\x6c\x75\145\163"), [$this, "\x73\x75\141\x71\157\x61\x73\157\x75\x6f\x6d\x6f\141\165\151\161"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\141\x74\x74\x72\x69\142\165\x74\x65\x5f\147\x65\x74\x5f\x62\171\137\160\x6f\x73\164"), [$this, "\x69\157\x61\x79\x6b\x75\147\145\x63\171\157\x63\x79\x67\147\143"], 10, 2); } public function iemaakgqgqosiecm() { Setting::symcgieuakksimmu(); } public function ioaykugecyocyggc($oammesyieqmwuwyi = [], $post = null) : array { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); $siquossayskcwkea = ManipulatePost::weescwwgqgiyumyw($post, array_keys($seyqqsmuaiegkeeq)); return array_merge($oammesyieqmwuwyi, $siquossayskcwkea); } public function suaqoasouomoauiq($post) { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); $yygmoeguaqyumuui = array_keys($seyqqsmuaiegkeeq); $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $yygmoeguaqyumuui); if (!$uyuaosigqymaqsaa) { goto mwysseaekcsiesmm; } echo $this->iuygowkemiiwqmiw("\166\141\154\165\x65\163", ["\164\x65\x72\x6d\163" => $uyuaosigqymaqsaa, "\x74\141\170\157\156\x6f\155\151\145\163" => $seyqqsmuaiegkeeq]); mwysseaekcsiesmm: } public function register() { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); if (!($seyqqsmuaiegkeeq && is_array($seyqqsmuaiegkeeq))) { goto ukqocwewouckikso; } foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya => $ywmkwiwkosakssii) { $qgweosiseeogigso = ManipulateArray::get($ywmkwiwkosakssii, "\157\x62\152\x65\x63\x74\x5f\x74\x79\x70\x65"); if (!$qgweosiseeogigso) { goto gommacygsykyussk; } $ywmkwiwkosakssii[self::eoaiagsgqsmskugs] = $this->eoemoqciaweskqkk($ywmkwiwkosakssii); $kesssewsiegssiya = substr($kesssewsiegssiya, 0, 32); if (!ManipulateValidation::qeegmakycwwycmcm($kesssewsiegssiya)) { goto uougwgeyiokewkkm; } register_taxonomy($kesssewsiegssiya, $qgweosiseeogigso, $ywmkwiwkosakssii); uougwgeyiokewkkm: gommacygsykyussk: gygwewcqsmwqismo: } amgsueumgaguceaa: ukqocwewouckikso: } public function eoemoqciaweskqkk($ywmkwiwkosakssii) : array { $kcumookcwskcyqak = ManipulateArray::get($ywmkwiwkosakssii, "\160\154\165\162\x61\154"); $sisssumicskyceeg = ManipulateArray::get($ywmkwiwkosakssii, "\x73\151\x6e\147\165\x6c\141\x72"); return ["\x6e\141\155\145" => _x($kcumookcwskcyqak, "\164\x61\170\157\x6e\x6f\x6d\171\x20\x67\x65\156\145\x72\x61\154\40\156\141\155\x65", PR__CTM__PMPR), "\155\x65\156\165\137\156\x61\x6d\145" => $kcumookcwskcyqak, "\x65\x64\151\x74\137\x69\x74\145\x6d" => sprintf(__("\x45\x64\x69\164\x20\x25\163", PR__CTM__PMPR), $sisssumicskyceeg), "\141\154\x6c\x5f\151\x74\x65\155\x73" => sprintf(__("\x41\x6c\x6c\40\x25\163", PR__CTM__PMPR), $kcumookcwskcyqak), "\156\157\x74\x5f\x66\x6f\165\x6e\x64" => sprintf(__("\116\x6f\40\45\x73\40\146\157\x75\156\144\56", PR__CTM__PMPR), $kcumookcwskcyqak), "\165\x70\144\x61\x74\145\x5f\151\x74\x65\155" => sprintf(__("\x55\160\144\x61\x74\x65\40\45\163", PR__CTM__PMPR), $sisssumicskyceeg), "\x70\141\162\145\x6e\x74\x5f\151\164\x65\155" => sprintf(__("\120\141\162\145\156\x74\40\x25\x73", PR__CTM__PMPR), $sisssumicskyceeg), "\163\145\141\162\x63\x68\x5f\151\164\x65\155\163" => sprintf(__("\x53\145\x61\162\x63\150\40\x25\163", PR__CTM__PMPR), $kcumookcwskcyqak), "\x61\x64\x64\x5f\x6e\145\x77\137\151\164\x65\155" => sprintf(__("\x41\144\x64\40\116\x65\x77\x20\45\163", PR__CTM__PMPR), $sisssumicskyceeg), "\163\151\x6e\x67\x75\154\x61\x72\137\156\x61\155\145" => _x($sisssumicskyceeg, "\x74\141\x78\x6f\156\x6f\x6d\x79\x20\163\151\x6e\x67\x75\154\141\162\x20\156\x61\155\145", PR__CTM__PMPR), "\x6e\x65\x77\137\x69\164\145\x6d\137\156\141\155\x65" => sprintf(__("\x4e\x65\x77\40\x25\x73", PR__CTM__PMPR), $sisssumicskyceeg), "\x70\x6f\x70\165\154\141\x72\x5f\151\164\145\155\x73" => sprintf(__("\x50\x6f\x70\x75\154\141\x72\x20\45\163", PR__CTM__PMPR), $kcumookcwskcyqak), "\x70\141\x72\145\x6e\164\x5f\151\x74\145\x6d\137\143\157\x6c\x6f\156" => sprintf(__("\x50\141\162\145\156\x74\x20\45\163", PR__CTM__PMPR), $sisssumicskyceeg), "\x61\x64\144\x5f\x6f\162\x5f\162\x65\x6d\157\x76\145\137\x69\x74\x65\155\163" => sprintf(__("\101\144\144\x20\x6f\162\40\162\x65\x6d\157\x76\145\40\45\x73", PR__CTM__PMPR), $kcumookcwskcyqak), "\143\150\157\x6f\x73\x65\x5f\x66\162\x6f\x6d\x5f\155\157\163\164\137\x75\x73\x65\144" => sprintf(__("\103\x68\x6f\157\163\x65\40\x66\162\157\155\40\164\150\145\40\x6d\157\163\x74\x20\165\163\145\144\40\45\x73", PR__CTM__PMPR), $kcumookcwskcyqak), "\x73\145\x70\x61\x72\141\x74\145\137\x69\164\145\x6d\163\137\x77\151\164\x68\x5f\143\157\x6d\x6d\141\x73" => sprintf(__("\123\145\160\x61\162\141\x74\145\40\45\163\x20\167\151\x74\x68\x20\143\x6f\155\155\x61\163", PR__CTM__PMPR), $kcumookcwskcyqak)]; } public function mqmocoguqcyymgqu($aqykuigiuwmmcieu = OBJECT) : array { $sogksuscggsicmac = []; $oammesyieqmwuwyi = (array) $this->weysguygiseoukqw(Setting::emcyuiagkcgsckma, []); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $aaokuekaimigoyue = ManipulateArray::get($igqsaukqcqscimok, Setting::ouywiegeiyuaaawo); $ymqmyyeuycgmigyo = ManipulateArray::get($igqsaukqcqscimok, Setting::NAME); if (!($ymqmyyeuycgmigyo && $aaokuekaimigoyue)) { goto qukocuwgakemmyga; } if (!ManipulateArray::get($igqsaukqcqscimok, Setting::iccwcygaeqmomooo, false)) { goto uqokiksoqcwwqgio; } if ($aqykuigiuwmmcieu == OBJECT) { goto iuuuususuuuaieem; } $sogksuscggsicmac[$ymqmyyeuycgmigyo] = $aaokuekaimigoyue; goto kocqqoyymosmuksu; iuuuususuuuaieem: $sciomagaqmgggsiu = ManipulateArray::get($igqsaukqcqscimok, Setting::miemwgakuokqyoqo, []); if (!$sciomagaqmgggsiu) { goto uimeeckqksqeekqq; } $sogksuscggsicmac[$ymqmyyeuycgmigyo] = ["\160\x6c\165\x72\x61\154" => ManipulateArray::get($igqsaukqcqscimok, Setting::mmieaueggwwaokig), "\x73\x69\156\147\165\x6c\141\x72" => ManipulateArray::get($igqsaukqcqscimok, Setting::egyqyoogakommguc), self::ouywiegeiyuaaawo => $aaokuekaimigoyue, self::qgqyauaqwqmqseim => ManipulateArray::get($igqsaukqcqscimok, Setting::qgqyauaqwqmqseim), "\x6f\142\x6a\x65\143\x74\x5f\x74\x79\160\x65" => $sciomagaqmgggsiu, "\x64\145\x73\143\x72\x69\160\x74\x69\x6f\x6e" => ManipulateArray::get($igqsaukqcqscimok, self::eqkeooqcsscoggia), "\x73\151\x6e\x67\x6c\x65\x5f\166\141\154\x75\145" => ManipulateArray::get($igqsaukqcqscimok, "\163\151\x6e\x67\154\x65\137\x76\141\154\165\145", false), "\x68\x69\x65\162\x61\162\143\x68\x69\x63\141\x6c" => true, "\151\x73\x5f\141\164\x74\162\x69\x62\165\164\145" => true]; uimeeckqksqeekqq: kocqqoyymosmuksu: uqokiksoqcwwqgio: qukocuwgakemmyga: uykousayyomcaeaa: } ucqmumuygcywwqma: return $sogksuscggsicmac; } }
