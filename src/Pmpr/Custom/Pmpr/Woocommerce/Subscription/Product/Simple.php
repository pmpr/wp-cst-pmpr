<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63281928bf268             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\163\x75\x62\163\x63\x72\x69\160\x74\x69\157\156"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto ayyweymyuuiauamo; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\x70\162\151\143\145" => $aumscagymwyyicag]); ayyweymyuuiauamo: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\x77\157\157\143\157\155\155\145\x72\143\145\137\x73\x75\142\x73\143\162\x69\x70\x74\151\x6f\156\137\x69\163\137\x70\165\x72\143\x68\141\163\141\142\x6c\145", $ommmugiuyqwqggii, $this); } }
