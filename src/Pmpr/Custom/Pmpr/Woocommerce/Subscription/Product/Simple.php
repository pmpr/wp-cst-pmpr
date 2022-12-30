<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ae2fe979657             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\163\x75\142\x73\x63\162\x69\x70\x74\x69\x6f\x6e"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto qkcyqocqqwmqgqww; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\160\x72\x69\x63\x65" => $aumscagymwyyicag]); qkcyqocqqwmqgqww: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\167\157\x6f\x63\157\x6d\x6d\x65\x72\143\x65\137\163\165\x62\x73\143\x72\x69\160\164\151\x6f\156\x5f\151\163\137\x70\x75\x72\143\150\x61\163\141\x62\x6c\145", $ommmugiuyqwqggii, $this); } }
