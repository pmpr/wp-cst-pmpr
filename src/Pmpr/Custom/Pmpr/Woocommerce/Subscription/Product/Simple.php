<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             626e65a4450cc             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\x73\x75\x62\x73\x63\x72\x69\160\164\151\157\x6e"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto isgwkwacoyimiauk; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\160\x72\151\x63\145" => $aumscagymwyyicag]); isgwkwacoyimiauk: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\x77\157\157\143\157\x6d\x6d\145\x72\x63\145\x5f\163\x75\x62\163\x63\x72\x69\160\164\x69\157\x6e\x5f\x69\x73\x5f\160\x75\162\143\150\141\163\141\x62\x6c\145", $ommmugiuyqwqggii, $this); } }
