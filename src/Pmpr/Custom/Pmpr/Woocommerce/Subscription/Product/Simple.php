<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624c191697c05             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\163\x75\142\x73\x63\x72\x69\x70\164\x69\x6f\156"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto egasokooagakisiy; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\x70\162\x69\x63\x65" => $aumscagymwyyicag]); egasokooagakisiy: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\167\x6f\x6f\x63\x6f\155\155\x65\x72\143\145\137\163\165\x62\163\x63\x72\x69\160\164\151\157\x6e\x5f\x69\x73\137\160\x75\162\x63\150\x61\163\141\142\x6c\x65", $ommmugiuyqwqggii, $this); } }
