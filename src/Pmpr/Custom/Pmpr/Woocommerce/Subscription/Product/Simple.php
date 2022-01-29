<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61f57d2a1458a             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\163\x75\x62\163\x63\162\151\x70\164\151\157\x6e"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto kymkucucyeoeikim; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\160\162\151\143\x65" => $aumscagymwyyicag]); kymkucucyeoeikim: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\x77\x6f\157\x63\157\155\155\x65\162\x63\x65\x5f\x73\x75\142\163\143\x72\151\160\x74\151\157\156\x5f\x69\163\x5f\x70\x75\x72\x63\150\x61\163\141\142\x6c\145", $ommmugiuyqwqggii, $this); } }
