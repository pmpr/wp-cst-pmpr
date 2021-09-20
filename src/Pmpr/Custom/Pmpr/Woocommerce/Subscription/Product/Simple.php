<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148eb2d1dcc1             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\163\x75\142\163\143\162\x69\x70\164\x69\157\156"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto sockeswygwcskeuq; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\x70\x72\151\x63\x65" => $aumscagymwyyicag]); sockeswygwcskeuq: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\x77\157\x6f\x63\x6f\155\155\x65\x72\143\145\137\163\165\142\163\143\x72\x69\160\164\151\x6f\x6e\x5f\151\163\137\160\x75\162\x63\x68\141\163\141\x62\154\145", $ommmugiuyqwqggii, $this); } }
