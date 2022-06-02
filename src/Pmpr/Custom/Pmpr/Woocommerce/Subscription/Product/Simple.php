<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62993144311af             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\163\165\x62\163\143\x72\151\x70\164\x69\157\x6e"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto ogqmesokykywseys; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\160\162\x69\x63\x65" => $aumscagymwyyicag]); ogqmesokykywseys: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\x77\157\x6f\143\157\155\155\145\x72\143\145\x5f\x73\x75\x62\163\143\162\x69\x70\x74\151\157\x6e\137\x69\x73\137\x70\165\162\x63\150\x61\x73\x61\142\154\x65", $ommmugiuyqwqggii, $this); } }
