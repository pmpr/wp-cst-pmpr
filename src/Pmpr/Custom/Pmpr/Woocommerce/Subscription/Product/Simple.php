<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6261a868a7f41             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\x73\x75\x62\x73\x63\x72\151\x70\164\151\157\156"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto iwsuawwqomaowuii; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\160\x72\151\x63\145" => $aumscagymwyyicag]); iwsuawwqomaowuii: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\x77\x6f\157\143\x6f\155\155\x65\162\143\x65\137\x73\x75\x62\x73\x63\x72\x69\x70\x74\151\x6f\x6e\137\x69\163\x5f\160\x75\x72\143\x68\x61\x73\141\x62\x6c\x65", $ommmugiuyqwqggii, $this); } }
