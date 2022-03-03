<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62206bc37ddd6             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\163\x75\x62\163\143\162\x69\160\164\151\157\156"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto eqkauqciwewmgeoi; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\x70\x72\151\143\x65" => $aumscagymwyyicag]); eqkauqciwewmgeoi: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\x77\x6f\x6f\143\x6f\155\x6d\145\162\143\145\137\163\165\142\163\143\162\x69\x70\164\x69\157\156\137\x69\x73\x5f\x70\165\x72\143\x68\141\163\x61\142\x6c\145", $ommmugiuyqwqggii, $this); } }
