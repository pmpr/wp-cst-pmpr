<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621faa65a0c61             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\x73\x75\142\x73\x63\162\151\x70\x74\151\157\156"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto eqkauqciwewmgeoi; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\x70\x72\x69\x63\x65" => $aumscagymwyyicag]); eqkauqciwewmgeoi: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\167\157\157\x63\157\x6d\155\x65\x72\x63\145\x5f\163\x75\x62\x73\x63\162\x69\160\164\151\157\156\x5f\x69\x73\137\x70\x75\x72\143\150\141\163\141\x62\x6c\145", $ommmugiuyqwqggii, $this); } }
