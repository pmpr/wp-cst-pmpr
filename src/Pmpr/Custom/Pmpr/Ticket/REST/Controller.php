<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae8b2b8f5a             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Ticket\REST; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\Ticket\Model\Ticket; use Pmpr\Module\Ticket\Setting as TicketSetting; use Pmpr\Module\Ticket\Traits\SubmissionTrait; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { use SubmissionTrait; public function __construct() { $this->rest_base = "\x74\151\143\x6b\x65\x74"; parent::__construct(); $this->namespace .= "\x2f\x70\x6d\x70\162"; } public function register_routes() { $this->register("\x2f\147\x65\x74\55\143\157\x6e\x66\151\x67\163", [Constants::wwgusigoaksqmwsm => [$this, "\164\x6b\x67\x61\167\x79\153\147\145\x63\x6d\163\141\145\x69\x73"]]); $this->register("\57\x61\x64\144\55\164\151\x63\x6b\145\164", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\157\x6f\x63\x65\x73\147\x69\x67\x65\x71\x71\161\171\x75\157\147"]]); $this->register("\x2f\x61\x64\x64\x2d\162\145\161\165\145\x73\x74", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x63\x6f\157\151\157\143\x6b\x69\167\x65\x73\171\x77\161\145\x67"]]); } public function cooiockiwesywqeg(WP_REST_Request $aqmwamyiwgeeymqa) { $icwicymcioeyeyek = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::qgeesceacsmeqacu); if ($icwicymcioeyeyek) { goto iwsuawwqomaowuii; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); goto wcugqegqsuuuwqao; iwsuawwqomaowuii: $mokawwccycoiqeka = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); if ($mokawwccycoiqeka) { goto wagqgeqymeqoeuyi; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x43\x61\156\40\x6e\157\164\40\x64\x65\x74\145\143\x74\40\x73\145\156\144\x65\162\x20\157\162\x69\x67\151\x6e", PR__CST__PMPR), 400); goto qoqskyuuwueqkquk; wagqgeqymeqoeuyi: $kmekouwmygismoku = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, "\164\x69\x63\x6b\x65\164\137\151\144"); if ($kmekouwmygismoku) { goto eogwckcymuugikuy; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\x54\x69\x63\153\x65\x74\40\111\x44", PR__CST__PMPR)); goto msemumccgceyugmg; eogwckcymuugikuy: $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $kqowykcomaagagow = $mmqcgecamywacuwe->akkkoiiymmamsauc($kmekouwmygismoku); if ($kqowykcomaagagow) { goto mwsmsguqqkcwiiuk; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x52\x65\161\165\145\x73\164\x65\144\40\x74\x69\x63\x6b\x65\164\x20\156\x6f\164\x20\x65\x78\x69\163\164\56", PR__CST__PMPR)); goto eeauyscekuckoues; mwsmsguqqkcwiiuk: if ($mokawwccycoiqeka == $mmqcgecamywacuwe->igawqaomowicuayw($kqowykcomaagagow, Constants::weayyoewessosyko)) { goto qmuwoecuacmkwgem; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\157\x72\162\171\x20\x79\x6f\165\x20\143\141\x6e\40\x6e\x6f\x74\x20\x73\165\142\155\x69\164\40\156\x65\x77\x20\x72\x65\161\165\x65\x73\x74\x20\x74\x6f\x20\x74\150\151\x73\40\x74\x69\x63\153\145\164\x2e", PR__CST__PMPR)); goto owmuceyswmgueasi; qmuwoecuacmkwgem: $sogksuscggsicmac = $this->nsswikmyaucycmcw($uamcoiueqaamsqma, $icwicymcioeyeyek); if ($sogksuscggsicmac) { goto wkeuuycukmuqiaom; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($uamcoiueqaamsqma)); goto wakmayaoqoskekqy; wkeuuycukmuqiaom: $siquossayskcwkea = $sogksuscggsicmac[Constants::iikosyqiawkweouo]; if ($siquossayskcwkea) { goto ueigkucgaucgeimc; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\x6f\155\145\164\x68\151\x6e\x67\x20\167\162\157\156\147\40\160\x6c\145\141\163\145\40\143\157\x6e\x74\x61\143\x74\40\x75\x73\x2e", PR__CST__PMPR)); goto sggawugoykqcmsug; ueigkucgaucgeimc: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\122\x65\161\x75\145\163\x74\40\x73\165\142\155\151\164\164\x65\144\x20\163\x75\143\x63\x65\x73\x73\x66\165\154\154\x79\56", PR__CST__PMPR), [Constants::TEXT => $icwicymcioeyeyek[Constants::TEXT], Constants::IDENTIFIER => $sogksuscggsicmac[Constants::gouqcwikiiygyasc]]); sggawugoykqcmsug: wakmayaoqoskekqy: owmuceyswmgueasi: eeauyscekuckoues: msemumccgceyugmg: qoqskyuuwueqkquk: wcugqegqsuuuwqao: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function oocesgigeqqqyuog(WP_REST_Request $aqmwamyiwgeeymqa) { $icwicymcioeyeyek = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::yeaekcacwwyyqigq); if ($icwicymcioeyeyek) { goto mugqyyeayeyggqqk; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); goto acsqgiuageaasiyy; mugqyyeayeyggqqk: $mokawwccycoiqeka = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); if ($mokawwccycoiqeka) { goto emmsycooskoqmgeg; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x43\x61\156\40\x6e\x6f\164\x20\x64\x65\164\x65\143\164\40\163\x65\156\144\145\x72\x20\x6f\162\151\x67\x69\x6e", PR__CST__PMPR), 400); goto ouamogymawucwswu; emmsycooskoqmgeg: $icwicymcioeyeyek[Constants::weayyoewessosyko] = $mokawwccycoiqeka; if ($sogksuscggsicmac = $this->gkwywsooooucwuiy($uamcoiueqaamsqma, $icwicymcioeyeyek, true)) { goto mqicocmqegwukkwg; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($uamcoiueqaamsqma)); goto qgeugwymkkiacwoc; mqicocmqegwukkwg: $siquossayskcwkea = $sogksuscggsicmac[Constants::iikosyqiawkweouo]; if ($siquossayskcwkea) { goto asiqwuoswmigcaki; } $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\157\155\145\164\x68\151\x6e\x67\40\x77\162\x6f\156\x67\x20\160\x6c\x65\x61\163\145\40\x63\157\x6e\x74\141\x63\164\40\x75\x73\x2e", PR__CST__PMPR)); goto ciykoyeioqgyaeqo; asiqwuoswmigcaki: $kuguwoaesuqsqysu = $sogksuscggsicmac[Constants::ckcuiukmyisueqeo]; $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\124\151\x63\153\x65\x74\40\163\x75\x62\155\x69\164\164\145\144\x20\x73\165\x63\x63\145\x73\x73\146\165\154\154\171\56", PR__CST__PMPR), [Constants::TEXT => $icwicymcioeyeyek[Constants::TEXT] ?? '', Constants::squoamkioomemiyi => $siquossayskcwkea[Constants::squoamkioomemiyi] ?? $icwicymcioeyeyek[Constants::squoamkioomemiyi], Constants::qkimemawswowsmoa => $siquossayskcwkea[Constants::qkimemawswowsmoa] ?? $icwicymcioeyeyek[Constants::qkimemawswowsmoa], Constants::IDENTIFIER => $sogksuscggsicmac[Constants::gouqcwikiiygyasc] ?? '', Constants::sgsawoooocqwouiy => $kuguwoaesuqsqysu[Constants::sgsawoooocqwouiy] ?? '']); ciykoyeioqgyaeqo: qgeugwymkkiacwoc: ouamogymawucwswu: acsqgiuageaasiyy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function tkgawykgecmsaeis(WP_REST_Request $aqmwamyiwgeeymqa) { $ykquycoiqesuckco = TicketSetting::symcgieuakksimmu(); $oksqskmgoqiqciis = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas(Constants::oguseymmyyoyaako, [Constants::goqgcigmiawyauai => -1], Constants::eoaiagsgqsmskugs); $igegswkgwguamwaa = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->ciugwooasaqcywas(Constants::cmckeoksigiaqykc, [Constants::eymwucuaaiiciymc => -1, Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]); return $this->ewmkmmsuiuwmmwoy($this->qasywwyamoesisyi('', [Constants::mscgqqsgosmsqygq => $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->iaykyouimqoikagg($ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::mgmyymogcioqgawq)), Constants::NAME => $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::mmkswwqeoquyuwok), Constants::cyswwqgckkwiwyww => $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::iacggommisowkuic), Constants::okuwysqsegmimaie => $ykquycoiqesuckco->sgyoqqqusyecsuam(), Constants::ygyiacciqgemekwc => $ykquycoiqesuckco->ywmckiemeswqgeig(), Constants::ykywsqyeckcgqyik => [], Constants::kqeokggqcsesmqco => [], Constants::aqikuweekkucgqoy => $this->ocksiywmkyaqseou("\147\x65\x74\137\x63\157\155\x70\157\156\x65\156\x74\x73\137\x62\171\137\150\157\x73\164", [], [Constants::squoamkioomemiyi => Constants::aqikuweekkucgqoy, Constants::ckiaowgkqoewoseo => $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa), Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]), Constants::oguseymmyyoyaako => $oksqskmgoqiqciis, Constants::cmckeoksigiaqykc => $igegswkgwguamwaa])); } }
