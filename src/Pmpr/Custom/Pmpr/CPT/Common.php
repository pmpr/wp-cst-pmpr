<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6261a868a7f41             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\CPT; use Pmpr\Common\Foundation\CPT; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Cover\Traits\BootstrapTrait; abstract class Common extends CPT { use BootstrapTrait; const sqqyeeuekayswqko = "\x5f\145\x6e\144\x5f\x64\x61\164\x65"; const wauscokyyiokqmyc = "\x5f\163\164\x61\162\x74\x5f\x64\141\164\145"; const ouoikemiewkimcyq = "\137\x6f\x72\147\x61\x6e\151\172\141\x74\151\157\156"; const oomeqcwgcuseimeg = "\151\x63\x6f\x6e"; const gsciggmwkagcscik = self::oomeqcwgcuseimeg . "\x5f\143\157\154\x6f\x72"; const uuommcgmywwiokgm = "\160\x6d\x70\162\137\x64\x65\x73\143\162\x69\160\164\151\x6f\156"; public function kuguueoauawomcga() : array { return ["\145\143\150\x6f" => true, "\160\x6f\163\x74" => '', "\x74\171\160\145" => "\x63\150\151\154\144\x72\145\x6e", "\x74\151\x74\x6c\145" => __("\x53\165\x62\163\145\164\x20\x6f\146\40\45\x73\x20\45\163", PR__CST__PMPR), "\143\150\x69\154\144\162\145\x6e" => [], "\x74\145\155\x70\154\141\164\x65" => '', "\x69\155\x61\x67\145\x5f\163\x69\172\x65" => "\66\x35\170\x36\65", "\151\x6d\141\x67\145\137\x63\154\x61\163\x73" => '', "\x74\151\164\154\145\137\x63\x6c\x61\x73\x73" => '', "\154\x69\x6e\153\x5f\143\x6c\141\x73\x73" => "\x74\x65\x78\x74\55\144\145\143\157\162\x61\164\151\157\x6e\55\156\157\x6e\x65", "\x62\141\143\x6b\x67\162\157\x75\x6e\x64" => "\154\151\147\x68\x74"]; } public function uqewcuuiggccuqia($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, $this->kuguueoauawomcga()); $okcscwesammossuq = $ywmkwiwkosakssii["\143\150\x69\154\144\x72\x65\156"]; $post = $ywmkwiwkosakssii["\x70\x6f\163\x74"]; if ($okcscwesammossuq) { goto gswcoeiisamakwii; } $okcscwesammossuq = ManipulatePost::mmoaikqueyiwcesm($post); gswcoeiisamakwii: $qqscaoyqikuyeoaw = $ywmkwiwkosakssii["\x74\145\155\160\154\141\x74\145"]; if ($qqscaoyqikuyeoaw) { goto yuimwyoywaiiqacs; } $qqscaoyqikuyeoaw = $ywmkwiwkosakssii["\x74\x79\160\x65"]; yuimwyoywaiiqacs: if (!$okcscwesammossuq) { goto ocywegekakimmwcq; } $ywmkwiwkosakssii["\x74\x69\x74\154\145"] = sprintf($ywmkwiwkosakssii["\164\151\x74\x6c\145"], $this->oyeskqayoscwciem()->giiayuqckuiecosm(), ManipulatePost::qcgakseyaikigqco($post)); $ywmkwiwkosakssii["\x69\x74\x65\155\163"] = $okcscwesammossuq; $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $ywmkwiwkosakssii, $ywmkwiwkosakssii); ocywegekakimmwcq: } public function ccuukukgiqciqaiu() { $this->iaoasmqysuqgasos(); $this->ecsqcmkgoyomscea(["\x63\154\x61\163\x73" => "\x72\157\167\40\144\x2d\146\154\x65\x78\x20\x6a\x75\x73\164\151\x66\171\55\x63\157\x6e\164\x65\x6e\x74\55\x63\145\156\x74\145\162"]); $this->ecsqcmkgoyomscea(["\x63\154\x61\163\x73" => "\x63\157\x6c\x2d\x31\62\40\143\x6f\x6c\55\x6d\144\55\x39\x20\160\x79\x2d\63\x20\160\171\x2d\x6d\144\x2d\x35"]); comments_template(); $this->oaukoisuwcsqyuug(); $this->oaukoisuwcsqyuug(); $this->gkoaykwoyeacuuaa(); } public static function cwiyqyuayeqieick() : array { return [MetaBox::scgissgkcwaumgky(self::oomeqcwgcuseimeg), MetaBox::eqmqmmymowieiqwm(self::gsciggmwkagcscik)->usuqmwksoeaayaig(__("\x49\x63\157\x6e\40\x43\x6f\x6c\x6f\162", PR__CST__PMPR))]; } public static function qssocqsywyigkyyi($useksmwkuswkwcqg) : array { return [MetaBox::ymuegqgyuagyucws($useksmwkuswkwcqg . self::ouoikemiewkimcyq, __("\x43\157\155\x70\x61\x6e\x79\x20\x6f\x72\40\117\x72\x67\141\156\x69\172\141\164\151\x6f\156", PR__CST__PMPR)), MetaBox::ymuegqgyuagyucws($useksmwkuswkwcqg . self::wauscokyyiokqmyc, __("\x53\x74\141\162\x74\x20\x64\x61\164\145", PR__CST__PMPR))->qigsyyqgewgskemg("\x64\x61\x74\145\160\x69\143\153\145\x72")->masauymeceuiyceo(), MetaBox::sgsesoiwcgqgckoo($useksmwkuswkwcqg . self::sqqyeeuekayswqko, __("\x45\x6e\144\40\144\141\164\x65", PR__CST__PMPR))->masauymeceuiyceo()]; } }
