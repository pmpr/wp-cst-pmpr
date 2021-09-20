<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             614901dad4ab6             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\x73\x75\142\163\143\162\151\160\164\151\157\x6e"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto sockeswygwcskeuq; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\x70\162\151\x63\x65" => $aumscagymwyyicag]); sockeswygwcskeuq: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\167\157\157\143\157\x6d\155\145\x72\143\145\137\x73\165\142\163\143\162\151\x70\164\x69\x6f\x6e\137\151\163\137\x70\x75\x72\143\x68\141\163\x61\142\x6c\145", $ommmugiuyqwqggii, $this); } }
