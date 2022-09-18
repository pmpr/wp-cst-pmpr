<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6327527564737             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\163\165\142\163\x63\x72\151\x70\164\151\157\x6e"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto ayyweymyuuiauamo; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\160\x72\151\143\x65" => $aumscagymwyyicag]); ayyweymyuuiauamo: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\167\157\157\x63\x6f\155\155\x65\162\x63\x65\x5f\x73\x75\x62\x73\x63\162\151\x70\x74\x69\x6f\x6e\x5f\x69\163\x5f\160\165\162\143\150\x61\x73\141\142\154\x65", $ommmugiuyqwqggii, $this); } }
