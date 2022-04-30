<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             626cea754a189             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\x73\x75\142\x73\143\162\151\160\x74\x69\x6f\156"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto isgwkwacoyimiauk; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\160\x72\x69\143\145" => $aumscagymwyyicag]); isgwkwacoyimiauk: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\x77\x6f\x6f\x63\x6f\x6d\x6d\145\x72\143\x65\137\x73\165\x62\163\x63\162\151\160\164\151\157\x6e\x5f\151\163\137\160\x75\x72\x63\150\x61\x73\x61\142\x6c\x65", $ommmugiuyqwqggii, $this); } }
