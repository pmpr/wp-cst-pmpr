<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4b6266b3             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Pmpr\CPT; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class SuccessStory extends Common { const oiusooccemgqccge = 'video_url'; const oeeocoksyeeakqgk = 'order_date'; const ayckyqsqaociiawc = 'business_url'; const qwgswmacmiqkyikg = 'founder_user'; const cuyikeswockscygg = 'founder_name'; const yaweacucyyoyuska = 'business_logo'; const siiwayeesiccugqu = 'business_name'; const ccqqmygqyoeaiqoa = 'business_desc'; const aayagymqaoimqyyo = 'founder_avatar'; const wuaiakemymigasae = 'ordered_product'; const oswgseisouogooms = 'success_story_'; const akakkeawqeokgeew = self::oswgseisouogooms . 'archive_title'; const ieaueaseyueuwoew = self::oswgseisouogooms . 'avatar_placeholder'; const cmmkqikuwgigyomg = self::oswgseisouogooms . 'archive_background'; const cscuwgisgmagqikc = self::oswgseisouogooms . 'archive_description'; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('wp_head', [$this, 'iyoeiswcugemeisk'])->qcsmikeggeemccuu('template_redirect', [$this, 'agowkamuycaggoam']); $this->waqewsckuayqguos('cover_setting_generate_form', [$this, 'uwwuykyigwyucsqe'], 999); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom('cover_option', [$this, 'uemyiegkeieoymaq'], 99, 4); parent::kgquecmsgcouyaya(); } public function iyoeiswcugemeisk() { if ($this->cukiusasccucgwqc()) { $this->ewcsyqaaigkicgse('video_aparat_render_styles'); } } public function mgoeqkosywwaoqyw() { parent::mgoeqkosywwaoqyw(); $this->oyeskqayoscwciem()->wsekoqmcyeuyegam()->ckwgqocyuaysggma(Constants::ouywiegeiyuaaawo, 'success-story')->ckaeqgiaiqwsccke(17)->muuwuqssqkaieqge(__('Success Stories', PR__CST__PMPR))->guiaswksukmgageq(__('Success Story', PR__CST__PMPR))->gucwmccyimoagwcm(__('Success story post type', PR__CST__PMPR))->yioesawwewqaigow(IconInterface::sassayqqokogegcw)->wakugsseussemkka(['title', 'editor', 'excerpt', 'thumbnail']); } public function agowkamuycaggoam() { if ($this->cukiusasccucgwqc()) { header('X-Robots-Tag: nofollow'); } } public function mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii = []) { $icwicymcioeyeyek = parent::mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $yuyicamsmeoaeyom = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::qwgswmacmiqkyikg); $gcqykaowqcqwcqmy = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::cuyikeswockscygg); $imcwmiyiwcksaocu = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::aayagymqaoimqyyo); $wwgucssaecqekuek = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, 'avatar_attrs', []); $mowgokyeuymuwiew = null; $eyosseqakkugagcm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, 'avatar_image_size', Constants::meugkwqwuyoyeeqs); if ($imcwmiyiwcksaocu) { $mowgokyeuymuwiew = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->qaeeusqkgwagwaqc($imcwmiyiwcksaocu, $eyosseqakkugagcm, $wwgucssaecqekuek); } else { if ($yuyicamsmeoaeyom) { $mowgokyeuymuwiew = $yoiguusocukqeayg->ogcwgigqwycqswms($yuyicamsmeoaeyom, $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, 'avatar_size', 80), $wwgucssaecqekuek); } else { if ($iwiewowoqmoekyqi = $this->ocksiywmkyaqseou('get_cover_option', self::ieaueaseyueuwoew, '')) { $mowgokyeuymuwiew = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->qaeeusqkgwagwaqc($iwiewowoqmoekyqi, $eyosseqakkugagcm, $wwgucssaecqekuek); } } } $icwicymcioeyeyek[Constants::ceaooaoacwwcuoqm] = $mowgokyeuymuwiew; $icwicymcioeyeyek[Constants::NAME] = $gcqykaowqcqwcqmy ?: $yoiguusocukqeayg->ygwimyogyaqgumam($yuyicamsmeoaeyom, Constants::cuyqkgecokgmcwqu, true); if ($gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::ayckyqsqaociiawc)) { $icwicymcioeyeyek['business_url_text'] = __('View Website', PR__CST__PMPR); } $ocogsiouoiuuguym = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::oeeocoksyeeakqgk); $product = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, self::wuaiakemymigasae); if ($ocogsiouoiuuguym && $product) { $icwicymcioeyeyek['view_product'] = __('View Product', PR__CST__PMPR); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $icwicymcioeyeyek['date_text'] = $swqimwqeweekeusq->gmqyuaqwgiayskei(__('Buy', PR__CST__PMPR)) . $swqimwqeweekeusq->ciuuiyckmsygceis($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($product)) . $swqimwqeweekeusq->gmqyuaqwgiayskei(sprintf(__('on %s', PR__CST__PMPR), $this->caokeucsksukesyo()->gagsyqagguwwauac()->ekasyoagocygouom($ocogsiouoiuuguym, 'F Y'))); } return $icwicymcioeyeyek; } public function qyecwywaoyamkmci() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->sikqggwmmykuiymy($uuyucgkyusckoaeq->scyscgskcwukckyy('order_info')->qqqycgoaysysgiqm()->saemoowcasogykak(IconInterface::oiwmoaimmkcsooqm)->gswweykyogmsyawy(__('Order Information', PR__CST__PMPR))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::wuaiakemymigasae)->gswweykyogmsyawy(__('Product', PR__CST__PMPR))->ukqywcsoogkyoaoa(Constants::oguseymmyyoyaako))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::oeeocoksyeeakqgk)->gswweykyogmsyawy(__('Date', PR__CST__PMPR))->iccqusgqmsqaiqow()))->sikqggwmmykuiymy($uuyucgkyusckoaeq->scyscgskcwukckyy('business_info')->qewcwaikmqqqseem()->saemoowcasogykak(IconInterface::oiwmoaimmkcsooqm)->gswweykyogmsyawy(__('Business Information', PR__CST__PMPR))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::qwgswmacmiqkyikg)->gswweykyogmsyawy(__('Founder User', PR__CST__PMPR))->umokgsqqogccoouo()->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::cuyikeswockscygg)->gswweykyogmsyawy(__('Founder Name', PR__CST__PMPR))->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::siiwayeesiccugqu)->gswweykyogmsyawy(__('Business Name', PR__CST__PMPR))->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::ayckyqsqaociiawc)->xkgcwkwsqysqamic()->gswweykyogmsyawy(__('Business URL', PR__CST__PMPR))->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::oiusooccemgqccge)->xkgcwkwsqysqamic()->gswweykyogmsyawy(__('Video URL', PR__CST__PMPR))->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->quaegkgkucwyeiqg(self::aayagymqaoimqyyo)->ycueqsmmommygueu()->gswweykyogmsyawy(__('Founder Avatar', PR__CST__PMPR))->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->quaegkgkucwyeiqg(self::yaweacucyyoyuska)->ycueqsmmommygueu()->gswweykyogmsyawy(__('Business Logo', PR__CST__PMPR))->eswksowyeqcsokew(Constants::meugkwqwuyoyeeqs)->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(self::ccqqmygqyoeaiqoa)->qsecygiycssgacqs(3)->gsomueooycksswcy()->gswweykyogmsyawy(__('Business Description', PR__CST__PMPR)))); } public function uemyiegkeieoymaq($eqgoocgaqwqcimie, $uusmaiomayssaecw, $ggauoeuaesiymgee, $amakmumgguksgmum) { switch ($uusmaiomayssaecw) { case 'success_story': $eqgoocgaqwqcimie = ['last_text' => __('as he tells the story', PR__CST__PMPR), 'name_mask' => __('%s at', PR__CST__PMPR), Constants::qescuiwgsyuikume => $amakmumgguksgmum->giiuwsmyumqwwiyq(self::akakkeawqeokgeew, $this->oyeskqayoscwciem()->qeeuwmmksmqiuywg()), 'product_mask' => __('in using %s', PR__CST__PMPR), 'before_action' => __('Success story of', PR__CST__PMPR), Constants::akmgqeyqcecqukia => $amakmumgguksgmum->giiuwsmyumqwwiyq(self::cmmkqikuwgigyomg), Constants::eqkeooqcsscoggia => $amakmumgguksgmum->giiuwsmyumqwwiyq(self::cscuwgisgmagqikc)]; break; } return $eqgoocgaqwqcimie; } public function uwwuykyigwyucsqe($amakmumgguksgmum) { $useksmwkuswkwcqg = $this->miwqiiqeegeqcwis(); $amakmumgguksgmum->ogimmkwaymekmoky($amakmumgguksgmum->mkcwgaeaaweamyyg($useksmwkuswkwcqg)->gswweykyogmsyawy($this->oyeskqayoscwciem()->giiayuqckuiecosm())->saemoowcasogykak($this->oyeskqayoscwciem()->qyyikeaseoskcacm())->kwkugmqouisgkqig($amakmumgguksgmum->ycgeeoiieoiakgam(Constants::ioomakeyqiqowgmk)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__('General', PR__CST__PMPR))->mkksewyosgeumwsa($amakmumgguksgmum->quaegkgkucwyeiqg(self::ieaueaseyueuwoew)->gswweykyogmsyawy(__('Avatar Placeholder', PR__CST__PMPR))->ycueqsmmommygueu()))->kwkugmqouisgkqig($amakmumgguksgmum->ycgeeoiieoiakgam(Constants::mswmgkkakuooukme)->saemoowcasogykak(IconInterface::eqmcawggoiaogyqa)->gswweykyogmsyawy(__('Archive Options', PR__CST__PMPR))->mkksewyosgeumwsa($amakmumgguksgmum->ymuegqgyuagyucws(self::akakkeawqeokgeew)->gswweykyogmsyawy(__('Title', PR__CST__PMPR))->eyygsasuqmommkua($this->oyeskqayoscwciem()->qeeuwmmksmqiuywg()))->mkksewyosgeumwsa($amakmumgguksgmum->sciaycsmsiekqueg(self::cscuwgisgmagqikc)->gswweykyogmsyawy(__('Description', PR__CST__PMPR))->gsomueooycksswcy()->qsecygiycssgacqs(3))->mkksewyosgeumwsa($amakmumgguksgmum->quaegkgkucwyeiqg(self::cmmkqikuwgigyomg)->gswweykyogmsyawy(__('Background Image', PR__CST__PMPR))->ycueqsmmommygueu()))); return $amakmumgguksgmum; } }
