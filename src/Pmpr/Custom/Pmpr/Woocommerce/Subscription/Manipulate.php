<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62698904ca5b2             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; class Manipulate extends ManipulateWoocommerce { const wgcaoueuaisewigg = "\163\x75\x62\163\143\162\151\160\x74\151\157\x6e"; const mcoqqeswsggueuwe = "\166\141\x72\151\141\x62\x6c\x65\x5f\x73\165\142\x73\x63\162\151\x70\x74\151\157\156"; const syeuqcqgqwucymio = "\163\165\x62\x73\x63\x72\x69\x70\164\151\157\156\x5f\166\141\162\x69\x61\x74\x69\x6f\156"; public static function owuaywucuaiyocum($product) { $aumscagymwyyicag = ''; $product = self::aqasygcsqysmmyke($product); if (!$product) { goto asiqwuoswmigcaki; } $eyuymeqcioasuyyi = self::asaycagaeksiumkw($product); $ceywwemkggagsska = self::kymakekgqcqyqgmy("\163\x75\142\163\x63\162\x69\160\164\151\157\x6e\137\160\162\x69\143\x65", $product, 0); $aqsowwgoqccksmes = $ceywwemkggagsska ?? self::scgumisucgwskyqk($product); if (!($product->is_on_sale() && '' !== $eyuymeqcioasuyyi && $ceywwemkggagsska > $eyuymeqcioasuyyi)) { goto wcugqegqsuuuwqao; } $aqsowwgoqccksmes = $eyuymeqcioasuyyi; wcugqegqsuuuwqao: $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\167\157\x6f\143\157\155\x6d\145\162\x63\145\137\x73\x75\142\163\x63\x72\x69\160\164\x69\x6f\x6e\163\137\x70\162\157\144\x75\143\164\137\160\162\151\x63\x65", $aqsowwgoqccksmes, $product); asiqwuoswmigcaki: return $aumscagymwyyicag; } public static function aguoqkeigqooqwco($ymmgciamciieaysq = '') { static $kygiqocyyqukaikg = []; if (is_string($ymmgciamciieaysq)) { goto ciykoyeioqgyaeqo; } $ymmgciamciieaysq = ''; ciykoyeioqgyaeqo: $locale = DecoratorUser::iyouigcsiacgwksc(); if (isset($kygiqocyyqukaikg[$locale])) { goto mqicocmqegwukkwg; } $kygiqocyyqukaikg[$locale] = self::gywoouyaaigoskoc(); mqicocmqegwukkwg: $mayqaoqwuwwgssiy = DecoratorHook::sscegwueamckwmcy("\167\157\x6f\143\x6f\155\155\145\x72\x63\145\x5f\163\165\142\163\143\162\151\160\x74\151\x6f\x6e\x5f\x6c\145\156\147\164\x68\x73", $kygiqocyyqukaikg[$locale], $ymmgciamciieaysq); if (!$ymmgciamciieaysq) { goto qgeugwymkkiacwoc; } $mayqaoqwuwwgssiy = $mayqaoqwuwwgssiy[$ymmgciamciieaysq]; qgeugwymkkiacwoc: return $mayqaoqwuwwgssiy; } public static function qamkswcgsoeggmau($product) : int { return DecoratorHook::sscegwueamckwmcy("\167\157\157\x63\157\155\155\x65\x72\143\145\137\163\x75\x62\x73\x63\x72\x69\160\x74\x69\x6f\x6e\x73\x5f\x70\x72\157\x64\165\x63\x74\137\x6c\145\x6e\147\x74\x68", self::kymakekgqcqyqgmy($product, "\x73\165\142\x73\143\162\x69\x70\x74\x69\157\156\x5f\x6c\x65\x6e\147\164\150", 0, "\x75\x73\x65\x5f\144\x65\x66\141\165\154\164\137\x76\x61\x6c\x75\145"), self::aqasygcsqysmmyke($product)); } public static function wciqcqwsswuayouy($product) : int { return DecoratorHook::sscegwueamckwmcy("\167\x6f\x6f\143\x6f\155\x6d\x65\x72\x63\145\137\x73\165\142\163\x63\162\x69\x70\x74\151\x6f\156\x73\x5f\x70\162\157\x64\x75\143\x74\137\x70\x65\162\x69\x6f\144\x5f\151\x6e\x74\145\x72\166\141\154", self::kymakekgqcqyqgmy($product, "\163\x75\142\163\x63\162\x69\x70\x74\151\157\156\x5f\x70\x65\x72\x69\157\x64\137\x69\x6e\x74\145\162\x76\141\154", 1, "\x75\x73\145\137\x64\145\x66\x61\x75\154\164\x5f\166\141\154\165\x65"), self::aqasygcsqysmmyke($product)); } public static function cskqgsqgkquceimo($product) : string { return DecoratorHook::sscegwueamckwmcy("\167\x6f\157\x63\x6f\x6d\155\145\x72\143\x65\137\x73\x75\142\x73\x63\x72\x69\x70\x74\x69\157\x6e\x73\137\x70\x72\x6f\x64\x75\x63\x74\137\160\x65\x72\x69\157\144", self::kymakekgqcqyqgmy($product, "\163\165\142\163\143\x72\x69\x70\x74\151\157\x6e\x5f\x70\145\x72\151\x6f\x64", ''), self::aqasygcsqysmmyke($product)); } public static function gywoouyaaigoskoc() : array { $scumyeasgcsssmko = ["\144\x61\171", "\x77\145\x65\x6b", "\x6d\x6f\x6e\164\150", "\171\145\141\x72"]; foreach ($scumyeasgcsssmko as $ymmgciamciieaysq) { $isuywoqqseygywkq = []; $mckmacgukqcegscg = [_x("\116\x65\x76\145\x72\x20\x65\170\x70\151\x72\x65", "\x53\165\x62\163\x63\x72\151\x70\x74\151\157\x6e\x20\154\x65\x6e\147\x74\x68", PR__CST__PMPR)]; switch ($ymmgciamciieaysq) { case "\x64\141\171": $mckmacgukqcegscg[] = _x("\x31\40\x64\x61\171", "\123\x75\142\163\143\x72\151\160\164\x69\157\x6e\40\x6c\x65\x6e\147\164\x68\163\x2e\40\x65\x2e\x67\56\x20\42\x46\157\162\x20\61\40\144\141\171\56\56\x2e\42", PR__CST__PMPR); $isuywoqqseygywkq = range(2, 90); goto mugqyyeayeyggqqk; case "\167\145\145\153": $mckmacgukqcegscg[] = _x("\61\40\167\x65\x65\153", "\x53\x75\142\x73\x63\x72\x69\160\164\x69\157\156\40\x6c\x65\156\x67\164\x68\163\56\40\145\x2e\147\56\x20\42\106\157\x72\40\61\40\167\145\x65\x6b\x2e\x2e\x2e\x22", PR__CST__PMPR); $isuywoqqseygywkq = range(2, 52); goto mugqyyeayeyggqqk; case "\x6d\x6f\x6e\164\x68": $mckmacgukqcegscg[] = _x("\x31\x20\155\157\156\x74\150", "\123\x75\142\x73\143\x72\151\x70\x74\x69\x6f\x6e\x20\x6c\145\x6e\x67\x74\150\163\56\40\x65\56\x67\56\x20\42\x46\157\x72\40\61\x20\x6d\x6f\x6e\x74\150\56\56\x2e\42", PR__CST__PMPR); $isuywoqqseygywkq = range(2, 24); goto mugqyyeayeyggqqk; case "\x79\x65\x61\x72": $mckmacgukqcegscg[] = _x("\61\40\x79\145\x61\x72", "\123\165\142\163\143\x72\x69\160\164\151\157\156\x20\x6c\145\156\x67\x74\150\163\x2e\x20\x65\56\147\56\x20\42\106\157\x72\x20\x31\x20\x79\x65\141\x72\x2e\x2e\56\42", PR__CST__PMPR); $isuywoqqseygywkq = range(2, 5); goto mugqyyeayeyggqqk; } acsqgiuageaasiyy: mugqyyeayeyggqqk: foreach ($isuywoqqseygywkq as $eusockqasqqmoess) { $isuywoqqseygywkq[$eusockqasqqmoess] = self::qwkgiacgsiuokomo($eusockqasqqmoess, $ymmgciamciieaysq); samwkqgwouggsguc: } oomguqikqokqwgku: $mckmacgukqcegscg += $isuywoqqseygywkq; $mayqaoqwuwwgssiy[$ymmgciamciieaysq] = $mckmacgukqcegscg; ouamogymawucwswu: } emmsycooskoqmgeg: return $mayqaoqwuwwgssiy; } public static function geeyaumoyycymeks($product = null) : bool { $geeyaumoyycymeks = $eoioyuyammuoecgs = false; $product = self::aqasygcsqysmmyke($product); if (!$product) { goto guykyqecgswcsmws; } $eoioyuyammuoecgs = self::omwkqcuwceweymcc($product); if (!$product->is_type([self::wgcaoueuaisewigg, self::syeuqcqgqwucymio, self::mcoqqeswsggueuwe])) { goto wyuemgggaqogsmsq; } $geeyaumoyycymeks = true; wyuemgggaqogsmsq: guykyqecgswcsmws: return DecoratorHook::sscegwueamckwmcy("\x77\x6f\x6f\143\x6f\x6d\x6d\x65\x72\x63\145\137\x69\163\x5f\163\x75\142\x73\143\162\151\x70\164\x69\x6f\156", $geeyaumoyycymeks, $eoioyuyammuoecgs, $product); } public static function qwkgiacgsiuokomo($eusockqasqqmoess = 1, $ymmgciamciieaysq = '') { $scumyeasgcsssmko = DecoratorHook::sscegwueamckwmcy("\167\x6f\x6f\x63\x6f\155\x6d\x65\162\143\145\x5f\163\165\x62\163\143\162\151\160\x74\x69\157\x6e\x5f\160\145\162\x69\x6f\144\x73", [ "\x64\x61\171" => sprintf(_nx("\144\141\171", "\45\163\40\144\141\171\x73", $eusockqasqqmoess, "\123\165\142\x73\143\162\x69\160\164\151\157\x6e\x20\x62\151\x6c\154\151\x6e\x67\40\160\145\162\151\157\144\56", PR__CST__PMPR), $eusockqasqqmoess), "\167\x65\145\x6b" => sprintf(_nx("\167\x65\145\153", "\x25\163\40\167\x65\x65\x6b\163", $eusockqasqqmoess, "\x53\165\x62\163\x63\x72\151\x70\164\x69\157\x6e\x20\142\151\x6c\x6c\x69\x6e\147\x20\x70\x65\x72\151\157\144\x2e", PR__CST__PMPR), $eusockqasqqmoess), "\x6d\157\156\164\x68" => sprintf(_nx("\x6d\157\x6e\164\x68", "\x25\163\x20\155\157\156\x74\150\163", $eusockqasqqmoess, "\123\x75\142\163\x63\x72\151\x70\x74\x69\157\x6e\40\x62\x69\x6c\154\x69\x6e\147\40\160\x65\x72\x69\157\144\56", PR__CST__PMPR), $eusockqasqqmoess), "\171\x65\141\162" => sprintf(_nx("\x79\145\141\162", "\x25\x73\x20\171\145\x61\x72\x73", $eusockqasqqmoess, "\x53\165\142\x73\143\162\151\160\x74\x69\x6f\x6e\40\142\151\x6c\154\151\x6e\147\40\x70\x65\162\x69\157\144\x2e", PR__CST__PMPR), $eusockqasqqmoess), ], $eusockqasqqmoess); return !empty($ymmgciamciieaysq) ? $scumyeasgcsssmko[$ymmgciamciieaysq] : $scumyeasgcsssmko; } public static function giouwewgcickgaeu($product, $ooiewiwkegguusum = []) : ?string { $aumscagymwyyicag = ''; $product = self::aqasygcsqysmmyke($product); if (!self::geeyaumoyycymeks($product)) { goto ikqqskkqqwmwssoo; } $ooiewiwkegguusum = ManipulateFormat::omaawkkwwyesqwcc($ooiewiwkegguusum, ["\164\x61\x78\x5f\x63\141\x6c\143\165\x6c\x61\164\x69\x6f\x6e" => DecoratorOption::get("\167\x6f\x6f\x63\157\x6d\x6d\x65\x72\x63\x65\137\x74\141\170\x5f\x64\x69\163\160\x6c\x61\171\137\163\x68\x6f\x70"), "\x73\165\142\x73\143\x72\151\160\164\151\x6f\x6e\137\x70\162\151\x63\145" => true]); $ooiewiwkegguusum = DecoratorHook::sscegwueamckwmcy("\167\x6f\157\x63\x6f\155\x6d\145\x72\x63\145\137\163\x75\142\x73\x63\162\x69\160\x74\x69\x6f\x6e\x73\137\160\162\x6f\x64\165\x63\164\x5f\x70\162\151\143\145\x5f\x73\x74\162\x69\x6e\x67\x5f\x69\156\x63\x6c\x75\x73\151\157\x6e\x73", $ooiewiwkegguusum, $product); $owwksgagiossaooa = self::owuaywucuaiyocum($product); if ($ooiewiwkegguusum["\x74\x61\x78\137\143\141\x6c\143\x75\x6c\141\164\x69\x6f\156"]) { goto kqqiegkuqagcqsya; } $aumscagymwyyicag = $ooiewiwkegguusum["\x70\162\151\143\x65"] ?? DecoratorWoocommerce::aumscagymwyyicag($owwksgagiossaooa); goto ousiuuwgwkiyikyq; kqqiegkuqagcqsya: if (in_array($ooiewiwkegguusum["\164\141\x78\137\x63\x61\154\143\x75\154\141\164\x69\157\156"], ["\x65\x78\x63\154\x75\x64\145\x5f\x74\141\170", "\145\x78\143\154"], true)) { goto kkumywowcoycymeo; } $aumscagymwyyicag = $ooiewiwkegguusum["\x70\x72\x69\x63\x65"] ?? DecoratorWoocommerce::oeiymaksaoqaeqkk($product); goto miweggwqeiaeweia; kkumywowcoycymeo: $aumscagymwyyicag = $ooiewiwkegguusum["\160\x72\x69\x63\145"] ?? DecoratorWoocommerce::uewkmqiiguwwscwy($product); miweggwqeiaeweia: ousiuuwgwkiyikyq: $aumscagymwyyicag .= "\40\x3c\x73\160\x61\x6e\40\143\x6c\x61\163\163\x3d\x22\163\x75\x62\163\x63\x72\151\x70\164\x69\157\x6e\x2d\x64\x65\x74\x61\x69\x6c\x73\x22\x3e"; if ($ooiewiwkegguusum["\163\165\x62\x73\143\162\151\x70\164\x69\157\x6e\137\x70\162\x69\x63\x65"]) { goto ogsaaqsaogcqiouy; } $meyskcssumkecyqm = "\74\x73\160\x61\x6e\x20\143\154\141\163\163\x3d\42\163\165\142\x73\143\x72\x69\x70\164\151\x6f\x6e\x2d\144\x65\164\x61\151\x6c\163\x22\x3e"; goto iwekmyyccgiyuecc; ogsaaqsaogcqiouy: $meyskcssumkecyqm = $aumscagymwyyicag; iwekmyyccgiyuecc: $meyskcssumkecyqm .= "\x3c\57\163\x70\x61\x6e\76"; $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\x77\x6f\x6f\x63\157\155\155\x65\x72\143\145\137\163\x75\142\x73\x63\162\x69\160\x74\x69\157\156\x73\137\x70\162\x6f\x64\x75\143\164\x5f\160\x72\x69\x63\x65\x5f\163\x74\162\151\156\x67", $meyskcssumkecyqm, $product, $ooiewiwkegguusum); ikqqskkqqwmwssoo: return $aumscagymwyyicag; } public static function kymakekgqcqyqgmy(string $uusmaiomayssaecw, $product, $ggauoeuaesiymgee = null, $empty_handling = "\x61\154\x6c\157\x77\137\x65\155\x70\x74\x79") { $product = self::aqasygcsqysmmyke($product); $eqgoocgaqwqcimie = $ggauoeuaesiymgee; if (!self::geeyaumoyycymeks($product)) { goto ykomgumacooyomsk; } if (method_exists($product, "\155\x65\164\141\137\145\170\x69\x73\x74\x73")) { goto awoaooyoeoyeeqee; } if (!isset($product->{$uusmaiomayssaecw})) { goto cwwmimggaaecmucw; } $eqgoocgaqwqcimie = $product->{$uusmaiomayssaecw}; cwwmimggaaecmucw: goto ogqmesokykywseys; awoaooyoeoyeeqee: $mqokiegceimuwcum = ManipulateString::yaaoeasygeggswcq($uusmaiomayssaecw); if (!$product->meta_exists($mqokiegceimuwcum)) { goto aomysykcgikegiau; } $eqgoocgaqwqcimie = $product->get_meta($mqokiegceimuwcum, true); aomysykcgikegiau: ogqmesokykywseys: ykomgumacooyomsk: if (!("\x75\163\145\x5f\144\145\146\x61\165\x6c\x74\x5f\166\141\154\x75\x65" === $empty_handling && empty($eqgoocgaqwqcimie))) { goto mqkmcysgoiaouiwm; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; mqkmcysgoiaouiwm: return $eqgoocgaqwqcimie; } public static function yaawkocgyswmsiqg($product) : bool { $product = self::aqasygcsqysmmyke($product); $ommmugiuyqwqggii = true; switch ($product->get_type()) { case self::wgcaoueuaisewigg: case self::mcoqqeswsggueuwe: if (!(false === self::is_purchasable_product($product))) { goto iikiiioqiyegyaak; } $ommmugiuyqwqggii = false; iikiiioqiyegyaak: goto kosaqwikueyksqmw; case self::syeuqcqgqwucymio: $kwmywaaoacqyqymc = self::aqasygcsqysmmyke($product->get_parent_id()); if (!("\156\157" != wcs_get_product_limitation($kwmywaaoacqyqymc) && !empty(WC()->cart->cart_contents) && !wcs_is_order_received_page() && !wcs_is_paypal_api_page())) { goto ocaguquugeamqckq; } if ("\156\x6f" === get_option(WC_Subscriptions_Admin::$option_prefix . "\137\x6d\x75\154\164\151\160\x6c\x65\137\160\165\162\143\x68\141\163\145", "\156\157")) { goto qmkaeeomgkwggoyo; } foreach (WC()->cart->cart_contents as $cart_item) { if (!($product->get_parent_id() == wcs_get_objects_property($cart_item["\x64\x61\x74\x61"], "\160\x61\x72\145\156\x74\x5f\x69\144") && $product->get_id() != $cart_item["\144\141\x74\x61"]->get_id())) { goto gcckqucukawcasgk; } $ommmugiuyqwqggii = false; goto uiosisocuwokwkie; gcckqucukawcasgk: cuumeogeomowqisc: } uiosisocuwokwkie: goto csammceowmqwaamq; qmkaeeomgkwggoyo: $ommmugiuyqwqggii = true; csammceowmqwaamq: ocaguquugeamqckq: goto kosaqwikueyksqmw; } gicyayswqyuoekcq: kosaqwikueyksqmw: return $ommmugiuyqwqggii; } public static function is_purchasable_product($is_purchasable, $product) { if (isset(self::$is_purchasable_cache[$product->get_id()]["\163\164\x61\x6e\x64\141\x72\144"])) { goto gmwykkouysyaqwqm; } self::$is_purchasable_cache[$product->get_id()]["\163\x74\x61\x6e\144\x61\x72\144"] = $is_purchasable; if (!(WC_Subscriptions_Product::is_subscription($product->get_id()) && "\x6e\x6f" != wcs_get_product_limitation($product) && !wcs_is_order_received_page() && !wcs_is_paypal_api_page())) { goto cogywoqcqummsyus; } if (!(wcs_is_product_limited_for_user($product) && !self::order_awaiting_payment_for_product($product->get_id()))) { goto eekcoeikaeaaeyii; } self::$is_purchasable_cache[$product->get_id()]["\163\x74\141\x6e\144\x61\162\144"] = false; eekcoeikaeaaeyii: cogywoqcqummsyus: gmwykkouysyaqwqm: return self::$is_purchasable_cache[$product->get_id()]["\163\164\x61\x6e\144\x61\162\x64"]; } }
