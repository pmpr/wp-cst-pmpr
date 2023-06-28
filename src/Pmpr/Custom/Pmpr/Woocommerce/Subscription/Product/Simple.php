<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             649c4c137aba2             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\163\x75\x62\x73\x63\162\151\160\164\x69\157\156"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto owmuceyswmgueasi; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\160\x72\x69\x63\x65" => $aumscagymwyyicag]); owmuceyswmgueasi: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\x77\x6f\x6f\143\x6f\x6d\155\145\x72\x63\x65\x5f\x73\x75\x62\163\x63\x72\151\x70\x74\x69\x6f\156\x5f\151\163\137\x70\165\162\143\x68\x61\163\141\x62\x6c\x65", $ommmugiuyqwqggii, $this); } }
