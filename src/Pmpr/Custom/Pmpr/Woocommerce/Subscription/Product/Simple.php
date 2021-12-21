<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c1fc63453b2             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\x73\165\x62\163\x63\162\151\x70\x74\x69\x6f\x6e"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto kqqiegkuqagcqsya; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\x70\x72\x69\143\x65" => $aumscagymwyyicag]); kqqiegkuqagcqsya: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\167\x6f\157\x63\157\x6d\x6d\x65\x72\x63\145\x5f\x73\x75\x62\163\143\x72\151\160\x74\151\x6f\156\x5f\x69\x73\137\x70\x75\x72\143\x68\141\x73\141\142\154\145", $ommmugiuyqwqggii, $this); } }
