<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61f559aede363             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\163\x75\x62\163\x63\162\151\160\164\151\157\156"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto kymkucucyeoeikim; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\x70\x72\x69\143\145" => $aumscagymwyyicag]); kymkucucyeoeikim: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\167\x6f\x6f\143\x6f\x6d\x6d\145\x72\x63\145\x5f\163\165\x62\163\x63\162\151\x70\164\151\157\x6e\x5f\151\x73\137\160\x75\162\143\150\x61\163\141\142\x6c\x65", $ommmugiuyqwqggii, $this); } }
