<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148eb2d1dcc1             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Qualification; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting as BaseClass; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; class Setting extends BaseClass { const SHOW_FOR_ANONYMOUS = "\x73\x68\157\167\x5f\x66\157\162\x5f\141\156\x6f\x6e\x79\x6d\x6f\x75\163"; const META_KEY_PREFIX = "\161\x75\141\x6c\x69\x66\x69\143\141\164\151\157\x6e\137"; public function __construct() { $this->title = __("\x51\165\141\x6c\151\x66\151\143\x61\x74\151\157\x6e", PR__CTM__PMPR); $this->name = "\x71\x75\x61\154\151\x66\151\x63\141\164\151\157\x6e"; parent::__construct(); } public function ecwgiiuacoaokqkw() { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($ymqmyyeuycgmigyo . self::_GENERAL, __("\x47\x65\156\x65\162\x61\x6c", PR__CTM__PMPR))->sikqggwmmykuiymy(self::cgygmuguceeosoey($ymqmyyeuycgmigyo . self::_GENERAL, __("\107\145\x6e\145\x72\141\154", PR__CTM__PMPR))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ENABLE, __("\105\x6e\x61\142\x6c\x65", PR__CTM__PMPR)))->mkksewyosgeumwsa(self::iseogkiymousogom(self::ITEMS, __("\x49\164\x65\x6d\163", PR__CTM__PMPR))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ENABLE, __("\105\x6e\141\x62\154\145", PR__CTM__PMPR))->iyouqgqicyqkiswi(6))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::SHOW_FOR_ANONYMOUS, __("\101\x6e\x6f\156\x79\155\157\x75\163\x20\165\163\x65\x72\163", PR__CTM__PMPR))->iyouqgqicyqkiswi(6))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::TITLE, __("\124\x69\164\x6c\145", PR__CTM__PMPR))->iyouqgqicyqkiswi(6))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::SLUG, __("\123\x6c\165\x67", PR__CTM__PMPR))->iyouqgqicyqkiswi(6))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::TYPE, __("\x4c\x61\x79\157\165\x74", PR__CTM__PMPR), ["\162\141\164\151\x6e\147" => __("\x52\x61\x74\x69\156\x67", PR__CTM__PMPR), "\x64\x72\x6f\160\x64\x6f\167\x6e" => __("\104\x72\157\x70\x64\x6f\x77\156", PR__CTM__PMPR)])->eyygsasuqmommkua("\162\141\164\151\156\x67"))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::TARGET_POST_TYPES, __("\120\157\x73\164\x20\124\171\x70\x65\x73", PR__CTM__PMPR), ManipulatePost::mwoyqeeigwqoamiw([self::OUTPUT => self::LABELS]))->oikgogcweiiaocka())->usosgsaaimqcysyk())->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR))->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR)); } public static function sowiegkcqieiqwgs($qeqooyuoiasweuck = null) : array { $agkmksicugiqcucq = []; $oammesyieqmwuwyi = Setting::eiwcuqigayigimak(self::ITEMS, [], $qeqooyuoiasweuck); if (!is_array($oammesyieqmwuwyi)) { goto ocokwuuquaokmasc; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!isset($igqsaukqcqscimok[self::ENABLE], $igqsaukqcqscimok[self::SLUG])) { goto cggowoquuiwqkyew; } $agkmksicugiqcucq[self::META_KEY_PREFIX . $igqsaukqcqscimok[self::SLUG]] = $igqsaukqcqscimok; cggowoquuiwqkyew: uukumskkeggaowck: } eequksumcoogyoem: ocokwuuquaokmasc: return $agkmksicugiqcucq; } public static function weakeqaiqccuysuk($post, $qeqooyuoiasweuck = null) : array { $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $oammesyieqmwuwyi = self::sowiegkcqieiqwgs($qeqooyuoiasweuck); foreach ($oammesyieqmwuwyi as $aaokuekaimigoyue => $igqsaukqcqscimok) { if (!(!isset($igqsaukqcqscimok[self::TARGET_POST_TYPES]) || !in_array($useksmwkuswkwcqg, $igqsaukqcqscimok[self::TARGET_POST_TYPES]) || !DecoratorUser::ksgkoukcicwkkaum() && (!isset($igqsaukqcqscimok[self::SHOW_FOR_ANONYMOUS]) || isset($igqsaukqcqscimok[self::SHOW_FOR_ANONYMOUS]) && !$igqsaukqcqscimok[self::SHOW_FOR_ANONYMOUS]))) { goto meawswgwagoqgkye; } unset($oammesyieqmwuwyi[$aaokuekaimigoyue]); meawswgwagoqgkye: goacqqsgaaigyuaw: } yiwiqaqmwiogawym: return $oammesyieqmwuwyi; } }
