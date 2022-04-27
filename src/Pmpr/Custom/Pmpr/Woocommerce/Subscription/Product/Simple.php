<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62698904ca5b2             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\x73\165\142\163\143\162\x69\160\164\x69\157\156"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto iwsuawwqomaowuii; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\x70\162\151\143\x65" => $aumscagymwyyicag]); iwsuawwqomaowuii: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\x77\157\157\143\157\x6d\x6d\145\162\x63\145\x5f\163\165\x62\x73\x63\162\151\160\x74\151\157\156\x5f\x69\x73\x5f\160\x75\x72\x63\150\x61\x73\141\x62\x6c\x65", $ommmugiuyqwqggii, $this); } }
