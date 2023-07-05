<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64a5341f73bde             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\x73\x75\142\163\x63\162\151\x70\164\151\x6f\x6e"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto gcckqucukawcasgk; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\160\x72\151\x63\x65" => $aumscagymwyyicag]); gcckqucukawcasgk: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\167\157\x6f\x63\157\x6d\155\x65\x72\143\x65\x5f\x73\165\x62\x73\143\162\151\x70\x74\151\x6f\156\137\x69\163\x5f\x70\165\x72\x63\150\141\163\141\x62\154\145", $ommmugiuyqwqggii, $this); } }
