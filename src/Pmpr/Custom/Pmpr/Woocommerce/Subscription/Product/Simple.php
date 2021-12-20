<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c06708965ca             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\x73\x75\142\x73\x63\162\x69\x70\164\151\x6f\x6e"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto kqqiegkuqagcqsya; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\x70\162\151\x63\x65" => $aumscagymwyyicag]); kqqiegkuqagcqsya: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\x77\157\x6f\143\157\155\155\x65\x72\143\x65\137\x73\165\142\x73\x63\162\x69\160\164\151\157\x6e\137\x69\163\x5f\160\x75\x72\143\x68\x61\163\x61\x62\x6c\x65", $ommmugiuyqwqggii, $this); } }
