<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6492e7a0aa824             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\163\x75\142\x73\x63\x72\151\x70\164\x69\157\x6e"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto owmuceyswmgueasi; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\x70\x72\151\143\x65" => $aumscagymwyyicag]); owmuceyswmgueasi: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\167\157\157\143\157\155\x6d\145\x72\143\x65\x5f\x73\165\x62\163\143\162\x69\x70\164\151\x6f\x6e\137\x69\x73\137\160\165\x72\x63\x68\x61\x73\x61\142\x6c\145", $ommmugiuyqwqggii, $this); } }
