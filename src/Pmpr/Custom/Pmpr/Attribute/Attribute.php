<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             626cea754a189             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Attribute; use Pmpr\Common\Foundation\Manipulate\ManipulateValidation; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Custom\Pmpr\Container; class Attribute extends Container { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\156\151\x74", [$this, "\162\145\147\x69\163\164\x65\162"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\141\x74\164\x72\x69\x62\165\164\x65\x5f\x72\x65\156\144\x65\162\137\166\141\x6c\165\145\x73"), [$this, "\163\165\x61\x71\x6f\x61\163\x6f\165\157\x6d\157\x61\x75\x69\x71"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\141\x74\x74\162\x69\142\x75\164\145\x5f\147\145\x74\137\142\x79\137\160\x6f\x73\x74"), [$this, "\151\157\x61\x79\x6b\165\147\x65\143\x79\157\x63\x79\x67\147\x63"], 10, 2); } public function iemaakgqgqosiecm() { Setting::symcgieuakksimmu(); } public function ioaykugecyocyggc($oammesyieqmwuwyi = [], $post = null) : array { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); $siquossayskcwkea = ManipulatePost::weescwwgqgiyumyw($post, array_keys($seyqqsmuaiegkeeq)); return array_merge($oammesyieqmwuwyi, $siquossayskcwkea); } public function suaqoasouomoauiq($post) { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); $yygmoeguaqyumuui = array_keys($seyqqsmuaiegkeeq); $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $yygmoeguaqyumuui); if (!$uyuaosigqymaqsaa) { goto wmmggowmigekyoso; } echo $this->iuygowkemiiwqmiw("\166\141\154\x75\145\x73", ["\164\x65\x72\155\163" => $uyuaosigqymaqsaa, "\164\x61\x78\157\x6e\x6f\x6d\151\x65\163" => $seyqqsmuaiegkeeq]); wmmggowmigekyoso: } public function register() { $seyqqsmuaiegkeeq = $this->mqmocoguqcyymgqu(); if (!($seyqqsmuaiegkeeq && is_array($seyqqsmuaiegkeeq))) { goto oqugqwcyomiaaoqu; } foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya => $ywmkwiwkosakssii) { $qgweosiseeogigso = ManipulateArray::get($ywmkwiwkosakssii, "\x6f\x62\152\x65\143\x74\x5f\164\x79\160\x65"); if (!$qgweosiseeogigso) { goto eeqesooyqagwawae; } $ywmkwiwkosakssii[self::eoaiagsgqsmskugs] = $this->eoemoqciaweskqkk($ywmkwiwkosakssii); $kesssewsiegssiya = substr($kesssewsiegssiya, 0, 32); if (!ManipulateValidation::qeegmakycwwycmcm($kesssewsiegssiya)) { goto suswcqoyyqkkquuo; } register_taxonomy($kesssewsiegssiya, $qgweosiseeogigso, $ywmkwiwkosakssii); suswcqoyyqkkquuo: eeqesooyqagwawae: acaqummmoyiemqss: } soqqemyioggmoakg: oqugqwcyomiaaoqu: } public function eoemoqciaweskqkk($ywmkwiwkosakssii) : array { $kcumookcwskcyqak = ManipulateArray::get($ywmkwiwkosakssii, "\160\x6c\x75\x72\x61\x6c"); $sisssumicskyceeg = ManipulateArray::get($ywmkwiwkosakssii, "\x73\x69\x6e\147\x75\x6c\141\162"); return ["\x6e\x61\155\x65" => _x($kcumookcwskcyqak, "\x74\x61\x78\x6f\156\x6f\x6d\171\x20\147\x65\x6e\145\x72\x61\x6c\x20\x6e\x61\155\145", PR__CST__PMPR), "\155\x65\156\x75\x5f\156\141\x6d\145" => $kcumookcwskcyqak, "\145\x64\x69\x74\x5f\x69\164\x65\155" => sprintf(__("\x45\144\x69\x74\x20\45\x73", PR__CST__PMPR), $sisssumicskyceeg), "\x61\154\154\137\151\164\145\155\x73" => sprintf(__("\101\x6c\154\x20\45\x73", PR__CST__PMPR), $kcumookcwskcyqak), "\x6e\157\x74\x5f\x66\x6f\165\x6e\x64" => sprintf(__("\116\x6f\40\x25\163\x20\x66\157\165\156\x64\56", PR__CST__PMPR), $kcumookcwskcyqak), "\x75\x70\x64\141\164\x65\x5f\151\x74\x65\155" => sprintf(__("\x55\x70\144\x61\x74\x65\x20\45\163", PR__CST__PMPR), $sisssumicskyceeg), "\160\141\162\145\156\x74\x5f\151\164\x65\x6d" => sprintf(__("\120\141\x72\x65\156\164\40\x25\x73", PR__CST__PMPR), $sisssumicskyceeg), "\163\145\141\x72\143\150\x5f\151\164\x65\x6d\163" => sprintf(__("\x53\x65\x61\162\x63\x68\x20\x25\163", PR__CST__PMPR), $kcumookcwskcyqak), "\x61\x64\144\x5f\x6e\x65\x77\137\x69\x74\145\x6d" => sprintf(__("\x41\144\x64\40\116\x65\x77\40\x25\163", PR__CST__PMPR), $sisssumicskyceeg), "\163\151\x6e\x67\x75\154\x61\162\137\156\141\155\x65" => _x($sisssumicskyceeg, "\164\141\x78\x6f\x6e\157\x6d\x79\x20\x73\x69\156\147\165\154\x61\162\40\156\141\x6d\145", PR__CST__PMPR), "\156\145\x77\137\x69\x74\x65\155\137\156\141\x6d\x65" => sprintf(__("\116\x65\x77\x20\x25\163", PR__CST__PMPR), $sisssumicskyceeg), "\x70\x6f\160\x75\x6c\x61\x72\137\151\x74\x65\x6d\163" => sprintf(__("\120\x6f\160\x75\154\141\162\40\45\163", PR__CST__PMPR), $kcumookcwskcyqak), "\160\141\x72\x65\x6e\164\x5f\x69\x74\x65\155\137\x63\157\154\157\156" => sprintf(__("\120\x61\162\145\156\x74\40\x25\x73", PR__CST__PMPR), $sisssumicskyceeg), "\141\144\144\137\157\162\137\162\x65\155\x6f\166\x65\137\x69\x74\145\155\x73" => sprintf(__("\101\x64\x64\x20\157\162\x20\x72\x65\x6d\157\166\145\40\45\x73", PR__CST__PMPR), $kcumookcwskcyqak), "\143\x68\157\x6f\x73\x65\x5f\x66\162\x6f\155\137\x6d\157\x73\x74\x5f\165\x73\x65\144" => sprintf(__("\x43\150\157\157\163\145\x20\x66\x72\157\155\x20\164\150\x65\40\x6d\x6f\x73\164\x20\165\x73\x65\x64\x20\45\x73", PR__CST__PMPR), $kcumookcwskcyqak), "\x73\x65\x70\x61\162\141\164\145\137\151\x74\x65\x6d\x73\x5f\x77\151\164\x68\x5f\x63\x6f\x6d\155\x61\x73" => sprintf(__("\123\145\x70\x61\x72\x61\x74\145\40\x25\163\40\167\151\164\x68\40\143\157\155\155\x61\x73", PR__CST__PMPR), $kcumookcwskcyqak)]; } public function mqmocoguqcyymgqu($aqykuigiuwmmcieu = OBJECT) : array { $sogksuscggsicmac = []; $oammesyieqmwuwyi = (array) $this->weysguygiseoukqw(Setting::emcyuiagkcgsckma, []); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $aaokuekaimigoyue = ManipulateArray::get($igqsaukqcqscimok, Setting::ouywiegeiyuaaawo); $ymqmyyeuycgmigyo = ManipulateArray::get($igqsaukqcqscimok, Setting::NAME); if (!($ymqmyyeuycgmigyo && $aaokuekaimigoyue)) { goto uguigkcmukuouway; } if (!ManipulateArray::get($igqsaukqcqscimok, Setting::iccwcygaeqmomooo, false)) { goto qicwaskssogcokgm; } if ($aqykuigiuwmmcieu == OBJECT) { goto kymkucucyeoeikim; } $sogksuscggsicmac[$ymqmyyeuycgmigyo] = $aaokuekaimigoyue; goto usquiuuyiyqaeyiu; kymkucucyeoeikim: $sciomagaqmgggsiu = ManipulateArray::get($igqsaukqcqscimok, Setting::miemwgakuokqyoqo, []); if (!$sciomagaqmgggsiu) { goto hoeeyiowekaeemko; } $sogksuscggsicmac[$ymqmyyeuycgmigyo] = ["\x70\x6c\x75\x72\x61\x6c" => ManipulateArray::get($igqsaukqcqscimok, Setting::mmieaueggwwaokig), "\163\151\x6e\147\165\154\x61\162" => ManipulateArray::get($igqsaukqcqscimok, Setting::egyqyoogakommguc), self::ouywiegeiyuaaawo => $aaokuekaimigoyue, self::qgqyauaqwqmqseim => ManipulateArray::get($igqsaukqcqscimok, Setting::qgqyauaqwqmqseim), "\x6f\x62\152\x65\x63\164\137\164\171\160\145" => $sciomagaqmgggsiu, "\144\x65\163\x63\162\x69\x70\164\x69\x6f\156" => ManipulateArray::get($igqsaukqcqscimok, self::eqkeooqcsscoggia), "\163\x69\156\147\154\x65\x5f\166\141\154\x75\x65" => ManipulateArray::get($igqsaukqcqscimok, "\163\x69\156\147\154\x65\x5f\166\141\154\x75\145", false), "\x68\x69\145\x72\141\x72\x63\x68\x69\x63\141\154" => true, "\151\163\137\141\x74\164\x72\151\142\x75\164\x65" => true]; hoeeyiowekaeemko: usquiuuyiyqaeyiu: qicwaskssogcokgm: uguigkcmukuouway: iekumemscwieugqw: } foeeqckqsyockkak: return $sogksuscggsicmac; } }
