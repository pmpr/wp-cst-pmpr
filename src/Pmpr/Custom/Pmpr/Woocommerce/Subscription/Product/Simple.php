<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63977c7f964d4             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\163\x75\142\163\x63\x72\x69\160\164\x69\x6f\x6e"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto qmkaeeomgkwggoyo; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\x70\162\x69\x63\145" => $aumscagymwyyicag]); qmkaeeomgkwggoyo: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\167\x6f\157\x63\x6f\x6d\155\145\162\143\145\x5f\x73\x75\142\x73\143\x72\x69\160\164\x69\157\156\137\x69\163\137\x70\165\162\143\150\x61\163\141\x62\x6c\x65", $ommmugiuyqwqggii, $this); } }
