<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624ea755f130b             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\x73\165\142\163\x63\x72\151\160\164\151\157\x6e"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto egasokooagakisiy; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\160\x72\x69\143\145" => $aumscagymwyyicag]); egasokooagakisiy: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\x77\x6f\157\143\157\x6d\x6d\x65\x72\x63\145\137\x73\x75\142\x73\x63\x72\151\160\164\x69\x6f\156\137\x69\x73\137\x70\x75\x72\x63\150\141\x73\141\x62\154\x65", $ommmugiuyqwqggii, $this); } }
