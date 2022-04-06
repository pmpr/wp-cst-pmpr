<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624d81b58dcfe             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\x73\165\x62\163\143\162\151\x70\x74\x69\157\156"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto egasokooagakisiy; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\160\162\x69\143\145" => $aumscagymwyyicag]); egasokooagakisiy: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\167\x6f\157\143\x6f\155\x6d\145\x72\143\145\137\163\165\142\x73\143\x72\151\x70\x74\x69\x6f\156\137\x69\163\137\160\x75\162\143\x68\x61\x73\x61\x62\x6c\145", $ommmugiuyqwqggii, $this); } }
