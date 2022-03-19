<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             623655e5cecb6             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\163\x75\x62\x73\143\162\151\160\164\x69\x6f\156"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto eqkauqciwewmgeoi; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\x70\x72\151\143\145" => $aumscagymwyyicag]); eqkauqciwewmgeoi: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\167\157\157\x63\157\155\x6d\145\x72\143\x65\137\163\165\142\163\143\x72\151\160\164\151\x6f\x6e\x5f\x69\x73\x5f\160\165\x72\x63\x68\x61\163\x61\142\154\145", $ommmugiuyqwqggii, $this); } }
