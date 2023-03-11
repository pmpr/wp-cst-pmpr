<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             640cfea216676             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\163\x75\142\163\x63\162\x69\160\x74\151\157\x6e"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto iiiccouaaqsyikae; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\x70\162\x69\x63\x65" => $aumscagymwyyicag]); iiiccouaaqsyikae: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\167\157\x6f\143\x6f\155\x6d\145\162\x63\145\x5f\163\x75\142\163\x63\x72\151\x70\164\151\x6f\156\137\151\163\137\x70\165\162\x63\x68\x61\x73\x61\142\x6c\145", $ommmugiuyqwqggii, $this); } }
