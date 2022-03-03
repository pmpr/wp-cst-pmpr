<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6220692b53b2b             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\x73\x75\x62\163\143\x72\x69\x70\164\151\x6f\156"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto eqkauqciwewmgeoi; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\x70\162\151\x63\145" => $aumscagymwyyicag]); eqkauqciwewmgeoi: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\x77\157\157\x63\x6f\x6d\x6d\145\x72\143\145\x5f\x73\x75\142\163\x63\162\151\160\x74\x69\x6f\x6e\x5f\x69\163\137\160\x75\x72\143\x68\141\163\x61\x62\x6c\x65", $ommmugiuyqwqggii, $this); } }
