<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c032c4073ec             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\x73\165\142\163\x63\162\151\160\x74\151\157\x6e"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto kqqiegkuqagcqsya; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\x70\x72\x69\x63\x65" => $aumscagymwyyicag]); kqqiegkuqagcqsya: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\x77\157\x6f\143\x6f\155\x6d\145\162\x63\x65\x5f\x73\x75\x62\x73\x63\x72\x69\x70\164\151\x6f\x6e\137\151\163\x5f\160\x75\162\x63\150\141\163\141\142\154\145", $ommmugiuyqwqggii, $this); } }
