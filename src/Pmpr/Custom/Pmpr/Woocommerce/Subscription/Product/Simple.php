<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148fdb866c9c             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\x73\165\142\163\143\x72\151\160\164\x69\157\156"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto sockeswygwcskeuq; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\x70\162\151\x63\145" => $aumscagymwyyicag]); sockeswygwcskeuq: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\167\157\x6f\143\x6f\x6d\155\145\162\143\145\137\x73\165\142\163\x63\162\151\x70\x74\x69\x6f\156\x5f\151\x73\x5f\160\165\162\143\x68\x61\x73\141\142\154\x65", $ommmugiuyqwqggii, $this); } }
