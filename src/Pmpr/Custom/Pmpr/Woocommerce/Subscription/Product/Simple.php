<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148f12d2fddd             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\163\165\x62\x73\143\162\151\x70\x74\151\157\156"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto sockeswygwcskeuq; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\160\x72\151\143\145" => $aumscagymwyyicag]); sockeswygwcskeuq: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\167\x6f\157\x63\157\155\155\145\x72\x63\x65\137\163\x75\142\x73\143\x72\x69\x70\164\151\x6f\x6e\137\151\x73\x5f\x70\x75\x72\143\x68\141\x73\141\142\x6c\x65", $ommmugiuyqwqggii, $this); } }
