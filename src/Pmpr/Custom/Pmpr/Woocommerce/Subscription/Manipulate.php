<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6492e7a0aa824             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Decorator\DecoratorUser; use Pmpr\Common\Foundation\Decorator\Plugin\DecoratorWoocommerce; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; class Manipulate extends ManipulateWoocommerce { const wgcaoueuaisewigg = "\163\x75\x62\x73\143\162\151\x70\x74\x69\157\x6e"; const mcoqqeswsggueuwe = "\166\x61\x72\151\141\x62\154\x65\137\163\165\x62\163\x63\x72\151\x70\164\x69\157\x6e"; const syeuqcqgqwucymio = "\x73\165\x62\163\143\x72\x69\160\164\151\x6f\156\x5f\x76\141\162\x69\141\164\151\x6f\156"; public static function owuaywucuaiyocum($product) { $aumscagymwyyicag = ''; $product = self::aqasygcsqysmmyke($product); if (!$product) { goto oqugqwcyomiaaoqu; } $eyuymeqcioasuyyi = self::asaycagaeksiumkw($product); $ceywwemkggagsska = self::kymakekgqcqyqgmy("\163\165\142\163\x63\162\151\x70\164\x69\x6f\x6e\137\x70\x72\x69\143\145", $product, 0); $aqsowwgoqccksmes = $ceywwemkggagsska ?? self::scgumisucgwskyqk($product); if (!($product->is_on_sale() && '' !== $eyuymeqcioasuyyi && $ceywwemkggagsska > $eyuymeqcioasuyyi)) { goto eeqesooyqagwawae; } $aqsowwgoqccksmes = $eyuymeqcioasuyyi; eeqesooyqagwawae: $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\x77\157\157\x63\157\x6d\x6d\145\162\143\145\137\x73\165\142\163\x63\162\x69\160\164\151\157\156\x73\137\160\162\x6f\144\165\x63\x74\x5f\160\162\151\143\145", $aqsowwgoqccksmes, $product); oqugqwcyomiaaoqu: return $aumscagymwyyicag; } public static function aguoqkeigqooqwco($ymmgciamciieaysq = '') { static $kygiqocyyqukaikg = []; if (is_string($ymmgciamciieaysq)) { goto foeeqckqsyockkak; } $ymmgciamciieaysq = ''; foeeqckqsyockkak: $locale = DecoratorUser::iyouigcsiacgwksc(); if (isset($kygiqocyyqukaikg[$locale])) { goto iekumemscwieugqw; } $kygiqocyyqukaikg[$locale] = self::gywoouyaaigoskoc(); iekumemscwieugqw: $mayqaoqwuwwgssiy = DecoratorHook::sscegwueamckwmcy("\167\157\x6f\x63\x6f\x6d\x6d\x65\x72\x63\145\x5f\x73\x75\142\163\143\x72\151\x70\164\x69\x6f\x6e\137\x6c\x65\x6e\147\164\x68\163", $kygiqocyyqukaikg[$locale], $ymmgciamciieaysq); if (!$ymmgciamciieaysq) { goto hoeeyiowekaeemko; } $mayqaoqwuwwgssiy = $mayqaoqwuwwgssiy[$ymmgciamciieaysq]; hoeeyiowekaeemko: return $mayqaoqwuwwgssiy; } public static function qamkswcgsoeggmau($product) : int { return DecoratorHook::sscegwueamckwmcy("\167\157\157\143\x6f\x6d\155\x65\162\x63\x65\x5f\163\x75\x62\163\143\x72\151\160\164\x69\x6f\x6e\x73\x5f\160\162\x6f\x64\x75\x63\164\x5f\154\145\156\147\164\x68", self::kymakekgqcqyqgmy($product, "\x73\x75\142\x73\x63\x72\151\x70\x74\x69\157\x6e\x5f\154\145\156\x67\x74\x68", 0, "\165\163\x65\x5f\144\x65\146\141\x75\x6c\164\x5f\x76\x61\154\165\145"), self::aqasygcsqysmmyke($product)); } public static function wciqcqwsswuayouy($product) : int { return DecoratorHook::sscegwueamckwmcy("\167\x6f\x6f\x63\157\x6d\155\145\x72\x63\145\137\x73\165\142\x73\143\162\x69\160\164\x69\157\x6e\x73\137\160\162\157\x64\x75\143\x74\137\160\x65\162\151\x6f\x64\137\x69\156\164\145\162\166\x61\x6c", self::kymakekgqcqyqgmy($product, "\163\x75\142\163\x63\162\151\160\164\151\157\156\x5f\160\145\x72\x69\x6f\x64\x5f\151\156\x74\x65\x72\x76\141\x6c", 1, "\x75\x73\145\x5f\x64\x65\x66\141\165\x6c\164\x5f\x76\x61\154\x75\145"), self::aqasygcsqysmmyke($product)); } public static function cskqgsqgkquceimo($product) : string { return DecoratorHook::sscegwueamckwmcy("\167\x6f\157\x63\157\x6d\x6d\x65\x72\143\145\x5f\163\x75\x62\x73\x63\162\x69\x70\x74\x69\157\x6e\x73\137\x70\x72\x6f\x64\x75\143\164\137\x70\145\x72\151\157\x64", self::kymakekgqcqyqgmy($product, "\x73\165\x62\163\143\x72\151\x70\x74\x69\x6f\156\x5f\160\145\x72\151\157\x64", ''), self::aqasygcsqysmmyke($product)); } public static function gywoouyaaigoskoc() : array { $scumyeasgcsssmko = ["\144\141\171", "\167\145\145\x6b", "\x6d\x6f\x6e\164\x68", "\x79\x65\x61\162"]; foreach ($scumyeasgcsssmko as $ymmgciamciieaysq) { $isuywoqqseygywkq = []; $mckmacgukqcegscg = [_x("\116\145\166\145\x72\x20\145\x78\x70\151\x72\x65", "\123\x75\x62\163\143\162\x69\160\164\x69\x6f\x6e\40\154\x65\x6e\x67\x74\150", PR__CST__PMPR)]; switch ($ymmgciamciieaysq) { case "\x64\x61\171": $mckmacgukqcegscg[] = _x("\x31\40\x64\141\171", "\x53\165\142\x73\143\x72\x69\x70\x74\x69\x6f\x6e\x20\154\x65\x6e\x67\x74\150\163\56\x20\145\x2e\147\x2e\x20\x22\106\157\162\40\x31\40\x64\141\171\x2e\56\x2e\42", PR__CST__PMPR); $isuywoqqseygywkq = range(2, 90); goto qicwaskssogcokgm; case "\167\x65\x65\153": $mckmacgukqcegscg[] = _x("\x31\x20\167\145\x65\153", "\123\x75\x62\x73\143\162\x69\160\x74\x69\x6f\156\40\x6c\x65\x6e\147\x74\x68\163\x2e\x20\145\x2e\x67\x2e\x20\42\106\157\x72\40\x31\x20\167\x65\145\153\56\x2e\x2e\42", PR__CST__PMPR); $isuywoqqseygywkq = range(2, 52); goto qicwaskssogcokgm; case "\x6d\157\156\164\150": $mckmacgukqcegscg[] = _x("\x31\x20\x6d\x6f\x6e\164\x68", "\x53\x75\142\x73\x63\x72\151\160\x74\151\157\x6e\x20\x6c\145\156\147\x74\150\163\56\x20\145\56\x67\56\x20\42\106\157\162\40\61\40\155\x6f\156\164\x68\x2e\56\x2e\x22", PR__CST__PMPR); $isuywoqqseygywkq = range(2, 24); goto qicwaskssogcokgm; case "\171\145\x61\x72": $mckmacgukqcegscg[] = _x("\x31\40\x79\145\141\162", "\x53\x75\142\x73\143\162\x69\160\164\151\157\156\40\154\x65\x6e\147\164\150\x73\56\x20\145\x2e\147\x2e\40\42\x46\157\162\x20\61\x20\171\x65\141\162\56\56\56\42", PR__CST__PMPR); $isuywoqqseygywkq = range(2, 5); goto qicwaskssogcokgm; } uguigkcmukuouway: qicwaskssogcokgm: foreach ($isuywoqqseygywkq as $eusockqasqqmoess) { $isuywoqqseygywkq[$eusockqasqqmoess] = self::qwkgiacgsiuokomo($eusockqasqqmoess, $ymmgciamciieaysq); esuiysskoweawsue: } uqqaiagaeqgqgaiy: $mckmacgukqcegscg += $isuywoqqseygywkq; $mayqaoqwuwwgssiy[$ymmgciamciieaysq] = $mckmacgukqcegscg; usquiuuyiyqaeyiu: } kymkucucyeoeikim: return $mayqaoqwuwwgssiy; } public static function geeyaumoyycymeks($product = null) : bool { $geeyaumoyycymeks = $eoioyuyammuoecgs = false; $product = self::aqasygcsqysmmyke($product); if (!$product) { goto aegysmeecgcgayyw; } $eoioyuyammuoecgs = self::omwkqcuwceweymcc($product); if (!$product->is_type([self::wgcaoueuaisewigg, self::syeuqcqgqwucymio, self::mcoqqeswsggueuwe])) { goto gaomwagkcciesyqy; } $geeyaumoyycymeks = true; gaomwagkcciesyqy: aegysmeecgcgayyw: return DecoratorHook::sscegwueamckwmcy("\167\x6f\x6f\143\157\155\x6d\x65\162\143\145\137\151\x73\x5f\x73\x75\x62\x73\x63\x72\x69\x70\x74\151\157\156", $geeyaumoyycymeks, $eoioyuyammuoecgs, $product); } public static function qwkgiacgsiuokomo($eusockqasqqmoess = 1, $ymmgciamciieaysq = '') { $scumyeasgcsssmko = DecoratorHook::sscegwueamckwmcy("\x77\157\x6f\143\x6f\155\155\x65\x72\x63\x65\x5f\x73\165\142\x73\x63\x72\151\160\x74\x69\x6f\x6e\x5f\160\x65\162\x69\157\144\163", [ "\144\141\x79" => sprintf(_nx("\x64\141\x79", "\x25\x73\x20\x64\x61\x79\x73", $eusockqasqqmoess, "\123\165\x62\x73\143\x72\x69\160\x74\151\x6f\156\x20\x62\151\x6c\154\151\156\x67\40\x70\x65\162\151\157\144\x2e", PR__CST__PMPR), $eusockqasqqmoess), "\x77\x65\145\153" => sprintf(_nx("\167\x65\x65\x6b", "\x25\x73\x20\x77\x65\145\153\x73", $eusockqasqqmoess, "\x53\x75\x62\163\x63\x72\151\x70\x74\x69\x6f\x6e\x20\x62\151\x6c\x6c\x69\156\x67\40\160\x65\x72\151\157\144\56", PR__CST__PMPR), $eusockqasqqmoess), "\x6d\157\156\x74\150" => sprintf(_nx("\155\x6f\x6e\164\150", "\x25\x73\x20\155\x6f\156\164\150\x73", $eusockqasqqmoess, "\x53\165\x62\163\143\x72\151\160\x74\151\x6f\x6e\x20\142\151\x6c\x6c\151\156\147\x20\x70\x65\162\151\x6f\144\x2e", PR__CST__PMPR), $eusockqasqqmoess), "\171\x65\x61\162" => sprintf(_nx("\x79\145\x61\162", "\x25\163\x20\x79\145\x61\x72\163", $eusockqasqqmoess, "\123\165\142\163\143\162\151\x70\164\x69\157\156\x20\x62\x69\154\x6c\x69\156\x67\x20\x70\145\162\x69\157\144\x2e", PR__CST__PMPR), $eusockqasqqmoess), ], $eusockqasqqmoess); return !empty($ymmgciamciieaysq) ? $scumyeasgcsssmko[$ymmgciamciieaysq] : $scumyeasgcsssmko; } public static function giouwewgcickgaeu($product, $ooiewiwkegguusum = []) : ?string { $aumscagymwyyicag = ''; $product = self::aqasygcsqysmmyke($product); if (!self::geeyaumoyycymeks($product)) { goto giaacoqqqsekcayy; } $ooiewiwkegguusum = ManipulateFormat::omaawkkwwyesqwcc($ooiewiwkegguusum, ["\x74\141\x78\x5f\143\x61\154\143\165\154\141\x74\x69\157\x6e" => DecoratorOption::get("\167\x6f\x6f\143\x6f\x6d\x6d\145\162\x63\x65\137\164\141\170\x5f\144\x69\163\160\x6c\x61\171\137\x73\150\157\160"), "\163\165\x62\163\x63\x72\151\160\x74\x69\x6f\x6e\x5f\x70\162\151\x63\145" => true]); $ooiewiwkegguusum = DecoratorHook::sscegwueamckwmcy("\x77\x6f\x6f\x63\157\155\155\145\162\143\145\x5f\163\x75\142\x73\x63\x72\151\160\x74\151\x6f\156\163\x5f\x70\x72\157\x64\165\143\164\137\160\x72\151\x63\x65\137\x73\x74\162\x69\x6e\147\x5f\x69\156\x63\x6c\165\163\x69\x6f\156\x73", $ooiewiwkegguusum, $product); $owwksgagiossaooa = self::owuaywucuaiyocum($product); if ($ooiewiwkegguusum["\x74\141\x78\137\143\x61\x6c\143\x75\154\x61\x74\151\157\x6e"]) { goto wiysogeqqwgioyka; } $aumscagymwyyicag = $ooiewiwkegguusum["\x70\x72\x69\143\x65"] ?? DecoratorWoocommerce::aumscagymwyyicag($owwksgagiossaooa); goto skkamseieeusycye; wiysogeqqwgioyka: if (in_array($ooiewiwkegguusum["\x74\x61\x78\x5f\x63\141\x6c\x63\165\154\141\x74\151\157\156"], ["\x65\170\143\154\165\x64\145\x5f\164\141\x78", "\x65\x78\143\154"], true)) { goto suqkuqygkkgwyaie; } $aumscagymwyyicag = $ooiewiwkegguusum["\x70\162\x69\143\145"] ?? DecoratorWoocommerce::oeiymaksaoqaeqkk($product); goto soaccwqimeksgwiw; suqkuqygkkgwyaie: $aumscagymwyyicag = $ooiewiwkegguusum["\x70\x72\151\143\x65"] ?? DecoratorWoocommerce::uewkmqiiguwwscwy($product); soaccwqimeksgwiw: skkamseieeusycye: $aumscagymwyyicag .= "\x20\74\x73\x70\x61\x6e\x20\x63\154\141\163\163\75\42\163\165\142\x73\143\162\151\160\164\151\x6f\x6e\55\144\x65\164\x61\151\154\x73\x22\x3e"; if ($ooiewiwkegguusum["\163\x75\x62\163\143\162\151\x70\164\151\157\x6e\137\x70\162\151\143\145"]) { goto cgiscsqwwgqqaeqi; } $meyskcssumkecyqm = "\x3c\x73\x70\141\156\40\143\x6c\x61\163\163\75\42\163\165\x62\163\143\x72\x69\160\164\x69\157\156\x2d\144\x65\164\x61\x69\x6c\163\x22\76"; goto syiqkaasoueowwui; cgiscsqwwgqqaeqi: $meyskcssumkecyqm = $aumscagymwyyicag; syiqkaasoueowwui: $meyskcssumkecyqm .= "\x3c\57\163\160\141\x6e\x3e"; $aumscagymwyyicag = DecoratorHook::sscegwueamckwmcy("\x77\157\157\x63\x6f\x6d\x6d\145\162\x63\x65\x5f\163\x75\x62\x73\x63\x72\151\160\164\151\157\156\163\137\x70\162\157\x64\x75\143\164\137\160\162\151\x63\x65\137\163\x74\162\151\156\147", $meyskcssumkecyqm, $product, $ooiewiwkegguusum); giaacoqqqsekcayy: return $aumscagymwyyicag; } public static function kymakekgqcqyqgmy(string $uusmaiomayssaecw, $product, $ggauoeuaesiymgee = null, $empty_handling = "\141\x6c\154\x6f\x77\x5f\x65\155\160\164\x79") { $product = self::aqasygcsqysmmyke($product); $eqgoocgaqwqcimie = $ggauoeuaesiymgee; if (!self::geeyaumoyycymeks($product)) { goto ooeausyowguqicuo; } if (method_exists($product, "\x6d\x65\x74\x61\x5f\145\170\x69\163\164\163")) { goto wmywuusgukmmaams; } if (!isset($product->{$uusmaiomayssaecw})) { goto cmegwsegsosyqcai; } $eqgoocgaqwqcimie = $product->{$uusmaiomayssaecw}; cmegwsegsosyqcai: goto gkyawqqcmigqgaiq; wmywuusgukmmaams: $mqokiegceimuwcum = ManipulateString::yaaoeasygeggswcq($uusmaiomayssaecw); if (!$product->meta_exists($mqokiegceimuwcum)) { goto ewymsmkkiksgwysk; } $eqgoocgaqwqcimie = $product->get_meta($mqokiegceimuwcum, true); ewymsmkkiksgwysk: gkyawqqcmigqgaiq: ooeausyowguqicuo: if (!("\165\163\x65\x5f\x64\x65\x66\x61\165\154\164\x5f\x76\141\154\165\x65" === $empty_handling && empty($eqgoocgaqwqcimie))) { goto egyyiccaeeiooaua; } $eqgoocgaqwqcimie = $ggauoeuaesiymgee; egyyiccaeeiooaua: return $eqgoocgaqwqcimie; } public static function yaawkocgyswmsiqg($product) : bool { $product = self::aqasygcsqysmmyke($product); $ommmugiuyqwqggii = true; switch ($product->get_type()) { case self::wgcaoueuaisewigg: case self::mcoqqeswsggueuwe: if (!(false === self::is_purchasable_product($product))) { goto igooksugieceoege; } $ommmugiuyqwqggii = false; igooksugieceoege: goto scisgsyemmsekgos; case self::syeuqcqgqwucymio: $kwmywaaoacqyqymc = self::aqasygcsqysmmyke($product->get_parent_id()); if (!("\x6e\x6f" != wcs_get_product_limitation($kwmywaaoacqyqymc) && !empty(WC()->cart->cart_contents) && !wcs_is_order_received_page() && !wcs_is_paypal_api_page())) { goto sggawugoykqcmsug; } if ("\156\157" === get_option(WC_Subscriptions_Admin::$option_prefix . "\137\x6d\165\x6c\x74\151\x70\x6c\145\x5f\160\165\x72\x63\x68\141\163\145", "\156\157")) { goto kqgcyoscsusgoaqi; } foreach (WC()->cart->cart_contents as $cart_item) { if (!($product->get_parent_id() == wcs_get_objects_property($cart_item["\144\x61\x74\141"], "\160\x61\x72\145\156\164\x5f\x69\x64") && $product->get_id() != $cart_item["\x64\141\x74\x61"]->get_id())) { goto wgewmqieuamsoayy; } $ommmugiuyqwqggii = false; goto omqiayeucoioqoao; wgewmqieuamsoayy: ugqaaewwmkocwwgy: } omqiayeucoioqoao: goto ueigkucgaucgeimc; kqgcyoscsusgoaqi: $ommmugiuyqwqggii = true; ueigkucgaucgeimc: sggawugoykqcmsug: goto scisgsyemmsekgos; } cewmoqyysgsmuiya: scisgsyemmsekgos: return $ommmugiuyqwqggii; } public static function is_purchasable_product($is_purchasable, $product) { if (isset(self::$is_purchasable_cache[$product->get_id()]["\163\164\141\156\144\141\x72\x64"])) { goto qmuwoecuacmkwgem; } self::$is_purchasable_cache[$product->get_id()]["\x73\164\141\156\x64\x61\162\x64"] = $is_purchasable; if (!(WC_Subscriptions_Product::is_subscription($product->get_id()) && "\x6e\157" != wcs_get_product_limitation($product) && !wcs_is_order_received_page() && !wcs_is_paypal_api_page())) { goto wakmayaoqoskekqy; } if (!(wcs_is_product_limited_for_user($product) && !self::order_awaiting_payment_for_product($product->get_id()))) { goto wkeuuycukmuqiaom; } self::$is_purchasable_cache[$product->get_id()]["\163\x74\141\x6e\x64\x61\162\x64"] = false; wkeuuycukmuqiaom: wakmayaoqoskekqy: qmuwoecuacmkwgem: return self::$is_purchasable_cache[$product->get_id()]["\163\x74\x61\x6e\x64\x61\162\144"]; } }
