<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61f555dabdf45             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\Woocommerce\Subscription\Product; use Pmpr\Common\Foundation\Decorator\DecoratorHook; use Pmpr\Custom\Pmpr\Woocommerce\Subscription\Manipulate; use WC_Product_Simple; class Simple extends WC_Product_Simple { public function get_type() : string { return "\163\x75\142\163\x63\x72\x69\x70\164\x69\x6f\156"; } public function get_price_html($swmyguasagkcmaeo = '') : string { $aumscagymwyyicag = parent::get_price_html($swmyguasagkcmaeo); if (!$aumscagymwyyicag) { goto kymkucucyeoeikim; } $aumscagymwyyicag = Manipulate::giouwewgcickgaeu($this, ["\160\162\151\x63\x65" => $aumscagymwyyicag]); kymkucucyeoeikim: return $aumscagymwyyicag; } public function is_purchasable() : bool { $ommmugiuyqwqggii = WCS_Limiter::is_purchasable(parent::is_purchasable(), $this); return DecoratorHook::sscegwueamckwmcy("\167\157\157\x63\157\155\x6d\145\x72\x63\145\x5f\163\165\142\x73\x63\162\151\160\164\x69\x6f\x6e\x5f\x69\x73\x5f\x70\x75\x72\x63\150\x61\x73\141\x62\x6c\x65", $ommmugiuyqwqggii, $this); } }
