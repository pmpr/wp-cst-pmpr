<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eec5576ed96             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\x73\165\x62\163\x63\x72\x69\x70\x74\151\157\x6e"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto ssoucoucsgccekwe; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\160\162\151\x63\145" => $aumscagymwyyicag]); ssoucoucsgccekwe: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\x77\x6f\157\143\x6f\x6d\155\x65\162\143\145\x5f\x73\165\x62\x73\143\162\151\160\164\151\157\x6e\137\151\x73\x5f\160\x75\162\143\150\141\x73\141\142\154\x65", $ommmugiuyqwqggii, $this); } }
