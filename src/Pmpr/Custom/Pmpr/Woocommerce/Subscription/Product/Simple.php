<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62421af2919de             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\163\165\x62\x73\x63\x72\x69\x70\x74\151\157\156"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto eqkauqciwewmgeoi; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\x70\162\151\x63\x65" => $aumscagymwyyicag]); eqkauqciwewmgeoi: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\167\157\157\143\x6f\155\155\145\x72\143\145\x5f\x73\x75\142\x73\143\162\x69\x70\x74\151\157\x6e\x5f\151\163\x5f\160\x75\162\x63\x68\141\163\141\x62\x6c\x65", $ommmugiuyqwqggii, $this); } }
