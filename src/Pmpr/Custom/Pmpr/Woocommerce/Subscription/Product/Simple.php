<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61f573a56b368             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\163\x75\x62\x73\143\x72\x69\160\x74\151\157\156"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto kymkucucyeoeikim; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\x70\162\x69\x63\145" => $aumscagymwyyicag]); kymkucucyeoeikim: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\167\x6f\157\x63\157\x6d\x6d\x65\x72\143\145\x5f\163\165\142\163\143\162\x69\160\x74\x69\x6f\x6e\137\151\x73\137\160\x75\x72\x63\x68\141\163\141\x62\154\x65", $ommmugiuyqwqggii, $this); } }
