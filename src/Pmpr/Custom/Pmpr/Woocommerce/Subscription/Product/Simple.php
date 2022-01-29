<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61f56effcd9a1             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\x73\x75\x62\x73\x63\x72\151\x70\x74\151\157\156"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto kymkucucyeoeikim; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\160\162\151\143\145" => $aumscagymwyyicag]); kymkucucyeoeikim: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\167\x6f\157\143\x6f\x6d\155\145\162\143\145\137\x73\165\x62\x73\x63\162\151\160\164\x69\157\x6e\137\x69\163\137\x70\165\x72\143\x68\x61\x73\x61\x62\x6c\x65", $ommmugiuyqwqggii, $this); } }
