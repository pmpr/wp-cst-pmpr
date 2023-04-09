<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64326fb30c7a5             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\163\165\x62\x73\x63\162\151\160\x74\x69\x6f\156"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto cewmoqyysgsmuiya; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\160\x72\151\x63\145" => $aumscagymwyyicag]); cewmoqyysgsmuiya: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\167\x6f\x6f\143\x6f\155\155\x65\x72\143\145\137\x73\165\x62\x73\143\162\151\160\x74\x69\157\x6e\x5f\x69\163\137\x70\x75\x72\143\x68\x61\x73\141\x62\154\145", $ommmugiuyqwqggii, $this); } }
