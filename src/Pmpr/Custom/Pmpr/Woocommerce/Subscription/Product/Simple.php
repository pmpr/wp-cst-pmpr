<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62698744b8bb4             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\163\x75\x62\163\143\162\151\x70\x74\151\157\156"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto iwsuawwqomaowuii; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\x70\x72\x69\143\x65" => $aumscagymwyyicag]); iwsuawwqomaowuii: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\x77\157\x6f\143\157\x6d\155\x65\162\x63\145\137\x73\x75\142\x73\x63\162\x69\x70\x74\151\x6f\x6e\137\151\x73\x5f\x70\165\162\x63\150\x61\163\x61\142\x6c\x65", $ommmugiuyqwqggii, $this); } }
