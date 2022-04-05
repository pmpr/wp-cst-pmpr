<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624bf91c0b214             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\x73\x75\x62\163\143\162\x69\x70\164\151\x6f\156"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto egasokooagakisiy; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\160\x72\x69\x63\145" => $aumscagymwyyicag]); egasokooagakisiy: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\x77\x6f\157\x63\x6f\155\x6d\145\x72\x63\x65\137\163\x75\142\x73\143\162\x69\x70\164\151\157\x6e\137\151\163\x5f\160\x75\x72\143\x68\x61\x73\141\x62\x6c\145", $ommmugiuyqwqggii, $this); } }
