<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f86d02804             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\CPT; use Pmpr\Common\Foundation\Interfaces\Constants; class News extends Common { public function mgoeqkosywwaoqyw() { parent::mgoeqkosywwaoqyw(); $this->oyeskqayoscwciem()->wsekoqmcyeuyegam()->ckwgqocyuaysggma(Constants::ouywiegeiyuaaawo, 'news')->ckaeqgiaiqwsccke(17)->swwukuywuokaeeoa(true)->muuwuqssqkaieqge(_x('News', 'plural', PR__CST__PMPR))->guiaswksukmgageq(_x('News', 'singular', PR__CST__PMPR))->gucwmccyimoagwcm(__('News post type', PR__CST__PMPR))->yioesawwewqaigow('dashicons-rss')->wakugsseussemkka(['slug', 'title', 'editor', 'excerpt', 'subtitles', 'thumbnail']); } public function uqewmqqccgukyisu($squgkkgwywimowua, $ymqmyyeuycgmigyo) : array { $useksmwkuswkwcqg = $this->miwqiiqeegeqcwis(); add_permastruct($useksmwkuswkwcqg, "/{$useksmwkuswkwcqg}/%year%/%monthnum%/%day%/%{$useksmwkuswkwcqg}%/"); return [["{$useksmwkuswkwcqg}\\/([0-9]{4})\\/([0-9]{1,2})\\/([0-9]{1,2})\\/(.*)\\/?\$", "index.php?post_type={$useksmwkuswkwcqg}&year=\$matches[1]&monthnum=\$matches[2]&day=\$matches[3]&name=\$matches[4]", 'top'], ["{$useksmwkuswkwcqg}\\/([0-9]{4})\\/([0-9]{1,2})\\/([0-9]{1,2})\\/?\$", "index.php?post_type={$useksmwkuswkwcqg}&year=\$matches[1]&monthnum=\$matches[2]&day=\$matches[3]", 'top'], ["{$useksmwkuswkwcqg}\\/([0-9]{4})\\/([0-9]{1,2})\\/?\$", "index.php?post_type={$useksmwkuswkwcqg}&year=\$matches[1]&monthnum=\$matches[2]", 'top'], ["{$useksmwkuswkwcqg}\\/([0-9]{4})\\/?\$", "index.php?post_type={$useksmwkuswkwcqg}&year=\$matches[1]", 'top']]; } }
