<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc4f0f0ab4             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Ticket\REST; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\Ticket\Model\Ticket; use Pmpr\Module\Ticket\Setting as TicketSetting; use Pmpr\Module\Ticket\Traits\SubmissionTrait; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { use SubmissionTrait; public function __construct() { $this->rest_base = "\x74\x69\143\x6b\145\164"; parent::__construct(); $this->namespace .= "\57\x70\x6d\160\162"; } public function register_routes() { $this->register("\x2f\x67\145\x74\55\x63\157\x6e\146\151\147\x73", [Constants::wwgusigoaksqmwsm => [$this, "\164\153\147\141\x77\171\153\x67\x65\x63\x6d\163\141\145\151\163"]]); $this->register("\57\x61\144\144\x2d\x74\x69\x63\x6b\145\164", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\x6f\157\x63\145\x73\x67\x69\147\x65\x71\x71\161\171\x75\x6f\x67"]]); $this->register("\x2f\x61\x64\144\55\162\x65\161\x75\x65\x73\x74", [Constants::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, Constants::wwgusigoaksqmwsm => [$this, "\143\x6f\x6f\x69\x6f\x63\x6b\x69\x77\x65\163\x79\167\161\145\147"]]); } public function cooiockiwesywqeg(WP_REST_Request $aqmwamyiwgeeymqa) { $icwicymcioeyeyek = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::qgeesceacsmeqacu); if ($icwicymcioeyeyek) { $mokawwccycoiqeka = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); if ($mokawwccycoiqeka) { $kmekouwmygismoku = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($icwicymcioeyeyek, "\164\151\x63\x6b\145\164\x5f\x69\x64"); if ($kmekouwmygismoku) { $mmqcgecamywacuwe = Ticket::symcgieuakksimmu(); $kqowykcomaagagow = $mmqcgecamywacuwe->akkkoiiymmamsauc($kmekouwmygismoku); if ($kqowykcomaagagow) { if ($mokawwccycoiqeka == $mmqcgecamywacuwe->igawqaomowicuayw($kqowykcomaagagow, Constants::weayyoewessosyko)) { $sogksuscggsicmac = $this->nsswikmyaucycmcw($uamcoiueqaamsqma, $icwicymcioeyeyek); if ($sogksuscggsicmac) { $siquossayskcwkea = $sogksuscggsicmac[Constants::iikosyqiawkweouo]; if ($siquossayskcwkea) { $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x52\x65\x71\x75\x65\163\164\x20\x73\x75\x62\x6d\151\164\164\145\x64\40\163\165\x63\x63\x65\163\163\146\x75\154\x6c\x79\x2e", PR__CST__PMPR), [Constants::TEXT => $icwicymcioeyeyek[Constants::TEXT], Constants::IDENTIFIER => $sogksuscggsicmac[Constants::gouqcwikiiygyasc]]); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\157\155\145\x74\x68\x69\156\x67\x20\x77\x72\157\156\x67\40\160\154\145\141\163\145\40\x63\x6f\156\164\x61\x63\x74\x20\165\x73\x2e", PR__CST__PMPR)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($uamcoiueqaamsqma)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\123\x6f\x72\162\x79\40\x79\x6f\165\x20\x63\141\x6e\40\156\157\x74\40\163\165\x62\155\x69\164\x20\x6e\145\x77\x20\x72\145\161\165\x65\x73\x74\x20\164\x6f\x20\x74\150\151\x73\x20\164\151\143\153\x65\164\x2e", PR__CST__PMPR)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\122\x65\161\165\145\x73\164\145\x64\40\x74\151\143\x6b\145\x74\40\156\157\x74\x20\x65\170\151\x73\164\56", PR__CST__PMPR)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__("\x54\x69\143\153\x65\164\40\x49\x44", PR__CST__PMPR)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x43\x61\x6e\x20\x6e\x6f\x74\x20\x64\x65\164\145\143\164\x20\x73\145\156\144\145\x72\x20\157\x72\151\147\x69\156", PR__CST__PMPR), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function oocesgigeqqqyuog(WP_REST_Request $aqmwamyiwgeeymqa) { $icwicymcioeyeyek = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, Constants::yeaekcacwwyyqigq); if ($icwicymcioeyeyek) { $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); if ($iakkeikwceeomgyq) { $icwicymcioeyeyek[Constants::weayyoewessosyko] = $iakkeikwceeomgyq; if ($sogksuscggsicmac = $this->gkwywsooooucwuiy($uamcoiueqaamsqma, $icwicymcioeyeyek, true)) { $siquossayskcwkea = $sogksuscggsicmac[Constants::iikosyqiawkweouo]; if ($siquossayskcwkea) { $kuguwoaesuqsqysu = $sogksuscggsicmac[Constants::ckcuiukmyisueqeo]; $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\124\x69\x63\x6b\x65\164\x20\x73\x75\x62\x6d\151\x74\164\145\144\x20\x73\x75\143\143\145\x73\x73\x66\x75\x6c\154\171\56", PR__CST__PMPR), [Constants::TEXT => $icwicymcioeyeyek[Constants::TEXT] ?? '', Constants::squoamkioomemiyi => $siquossayskcwkea[Constants::squoamkioomemiyi] ?? $icwicymcioeyeyek[Constants::squoamkioomemiyi], Constants::qkimemawswowsmoa => $siquossayskcwkea[Constants::qkimemawswowsmoa] ?? $icwicymcioeyeyek[Constants::qkimemawswowsmoa], Constants::IDENTIFIER => $sogksuscggsicmac[Constants::gouqcwikiiygyasc] ?? '', Constants::sgsawoooocqwouiy => $kuguwoaesuqsqysu[Constants::sgsawoooocqwouiy] ?? '']); } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x53\157\x6d\145\164\x68\151\x6e\147\40\167\162\x6f\156\147\40\x70\154\145\x61\163\x65\x20\x63\157\x6e\164\141\143\164\40\165\163\56", PR__CST__PMPR)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($uamcoiueqaamsqma)); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis(__("\x43\141\156\x20\x6e\x6f\x74\40\x64\145\x74\x65\x63\164\x20\x73\145\x6e\x64\x65\162\40\157\162\x69\147\x69\x6e", PR__CST__PMPR), 400); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function tkgawykgecmsaeis(WP_REST_Request $aqmwamyiwgeeymqa) { $ykquycoiqesuckco = TicketSetting::symcgieuakksimmu(); $oksqskmgoqiqciis = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas(Constants::oguseymmyyoyaako, [Constants::goqgcigmiawyauai => -1], Constants::eoaiagsgqsmskugs); $igegswkgwguamwaa = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->ciugwooasaqcywas(Constants::cmckeoksigiaqykc, [Constants::eymwucuaaiiciymc => -1, Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); return $this->ewmkmmsuiuwmmwoy($this->qasywwyamoesisyi('', [Constants::mscgqqsgosmsqygq => $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->iaykyouimqoikagg($ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::mgmyymogcioqgawq)), Constants::NAME => $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::mmkswwqeoquyuwok), Constants::cyswwqgckkwiwyww => $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::iacggommisowkuic), Constants::okuwysqsegmimaie => $ykquycoiqesuckco->sgyoqqqusyecsuam(), Constants::ygyiacciqgemekwc => $ykquycoiqesuckco->ywmckiemeswqgeig(), Constants::aqikuweekkucgqoy => $this->ocksiywmkyaqseou("\147\145\164\137\143\157\155\160\x6f\x6e\145\156\x74\x73\x5f\142\x79\x5f\150\x6f\x73\164", [], [Constants::squoamkioomemiyi => Constants::aqikuweekkucgqoy, Constants::ckiaowgkqoewoseo => $iakkeikwceeomgyq, Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]), Constants::ykywsqyeckcgqyik => $this->ocksiywmkyaqseou("\147\x65\164\137\x63\x6f\155\x70\157\x6e\145\156\164\163\137\x62\171\x5f\x68\157\x73\164", [], [Constants::squoamkioomemiyi => Constants::ykywsqyeckcgqyik, Constants::ckiaowgkqoewoseo => $iakkeikwceeomgyq, Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]), Constants::kqeokggqcsesmqco => $this->ocksiywmkyaqseou("\147\x65\x74\x5f\x63\157\155\x70\157\x6e\145\x6e\x74\x73\x5f\x62\x79\x5f\x68\157\163\x74", [], [Constants::squoamkioomemiyi => Constants::kqeokggqcsesmqco, Constants::ckiaowgkqoewoseo => $iakkeikwceeomgyq, Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]), Constants::oguseymmyyoyaako => $oksqskmgoqiqciis, Constants::cmckeoksigiaqykc => $igegswkgwguamwaa])); } }
