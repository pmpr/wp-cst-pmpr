<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c06708965ca             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\CPT; use Pmpr\Common\Foundation\CPT; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Theme\Traits\BootstrapTrait; abstract class Common extends CPT { use BootstrapTrait; const _END_DATE = "\x5f\x65\x6e\x64\x5f\x64\141\164\x65"; const _START_DATE = "\137\x73\x74\141\162\164\137\144\141\164\145"; const _ORGANIZATION = "\x5f\157\162\147\x61\156\x69\172\x61\x74\151\x6f\156"; const METADATA_ICON = "\x69\x63\x6f\x6e"; const METADATA_ICON_COLOR = self::METADATA_ICON . "\x5f\x63\157\154\157\x72"; const META_DATE_DESCRIPTION = "\160\x6d\x70\162\137\144\145\163\x63\162\151\x70\164\151\157\x6e"; public function kuguueoauawomcga() : array { return ["\145\143\x68\157" => true, "\160\x6f\x73\x74" => '', "\x74\x79\x70\x65" => "\x63\x68\x69\154\144\x72\145\156", "\164\x69\164\x6c\x65" => __("\123\x75\142\163\x65\164\40\157\146\x20\45\x73\x20\45\x73", PR__CTM__PMPR), "\x63\x68\151\154\144\162\145\x6e" => [], "\164\x65\x6d\160\154\x61\164\x65" => '', "\151\155\141\x67\145\x5f\163\151\172\145" => "\x36\x35\170\66\x35", "\x69\x6d\x61\x67\145\137\143\x6c\141\163\x73" => '', "\164\x69\x74\x6c\x65\x5f\143\x6c\141\163\163" => '', "\x6c\151\x6e\153\137\143\x6c\x61\163\x73" => "\x74\x65\x78\x74\x2d\144\x65\x63\x6f\162\x61\x74\x69\157\x6e\55\156\x6f\x6e\x65", "\x62\141\x63\x6b\147\x72\x6f\165\156\x64" => "\154\x69\x67\x68\164"]; } public function uqewcuuiggccuqia($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $this->kuguueoauawomcga()); $okcscwesammossuq = $ywmkwiwkosakssii["\x63\x68\151\154\x64\162\145\156"]; $post = $ywmkwiwkosakssii["\x70\157\x73\164"]; if ($okcscwesammossuq) { goto esuiysskoweawsue; } $okcscwesammossuq = ManipulatePost::mmoaikqueyiwcesm($post); esuiysskoweawsue: $qqscaoyqikuyeoaw = $ywmkwiwkosakssii["\x74\145\155\160\154\141\164\145"]; if ($qqscaoyqikuyeoaw) { goto gaomwagkcciesyqy; } $qqscaoyqikuyeoaw = $ywmkwiwkosakssii["\164\171\160\145"]; gaomwagkcciesyqy: if (!$okcscwesammossuq) { goto aegysmeecgcgayyw; } $ywmkwiwkosakssii["\x74\x69\x74\154\145"] = sprintf($ywmkwiwkosakssii["\164\x69\164\154\x65"], $this->oyeskqayoscwciem()->giiayuqckuiecosm(), ManipulatePost::qcgakseyaikigqco($post)); $ywmkwiwkosakssii["\151\x74\145\x6d\x73"] = $okcscwesammossuq; $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $ywmkwiwkosakssii, $ywmkwiwkosakssii); aegysmeecgcgayyw: } public function ccuukukgiqciqaiu() { $this->iaoasmqysuqgasos(); $this->ecsqcmkgoyomscea(["\x63\154\x61\163\163" => "\x72\x6f\x77\40\144\x2d\146\154\x65\x78\x20\152\x75\x73\x74\151\x66\x79\55\143\157\156\164\x65\156\x74\x2d\x63\145\156\x74\x65\x72"]); $this->ecsqcmkgoyomscea(["\x63\154\141\163\163" => "\x63\157\154\x2d\61\x32\x20\143\157\x6c\55\x6d\144\55\x39\x20\x70\x79\55\63\x20\x70\171\x2d\155\x64\x2d\65"]); comments_template(); $this->oaukoisuwcsqyuug(); $this->oaukoisuwcsqyuug(); $this->gkoaykwoyeacuuaa(); } public static function cwiyqyuayeqieick() { return [MetaBox::scgissgkcwaumgky(self::METADATA_ICON), MetaBox::eqmqmmymowieiqwm(self::METADATA_ICON_COLOR)->usuqmwksoeaayaig(__("\x49\143\157\x6e\40\x43\157\x6c\157\162", PR__CTM__PMPR))]; } public static function qssocqsywyigkyyi($useksmwkuswkwcqg) : array { return [MetaBox::ymuegqgyuagyucws($useksmwkuswkwcqg . self::_ORGANIZATION, __("\103\x6f\x6d\160\x61\x6e\171\x20\x6f\162\x20\x4f\162\x67\141\156\x69\172\x61\164\151\157\156", PR__CTM__PMPR)), MetaBox::ymuegqgyuagyucws($useksmwkuswkwcqg . self::_START_DATE, __("\123\164\141\162\164\x20\x64\x61\164\145", PR__CTM__PMPR))->qigsyyqgewgskemg("\144\141\164\145\x70\151\143\153\145\x72")->masauymeceuiyceo(), MetaBox::sgsesoiwcgqgckoo($useksmwkuswkwcqg . self::_END_DATE, __("\105\x6e\x64\40\x64\x61\164\x65", PR__CTM__PMPR))->masauymeceuiyceo()]; } }
