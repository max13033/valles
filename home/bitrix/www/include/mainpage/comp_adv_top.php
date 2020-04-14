<?$APPLICATION->IncludeComponent(
	"bitrix:advertising.banner",
	"custom_banner_on_main",
	Array(
		"CACHE_TIME" => "360000",
		"CACHE_TYPE" => "A",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"NOINDEX" => "Y",
		"QUANTITY" => "5",
		"TYPE" => "banner_on_main_custom"
	)
);?> <?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?> <?global $isShowTopAdvBottomBanner;?> <?if($isShowTopAdvBottomBanner):?>
<h2>Готовые решения интерьеров</h2>
	<?$APPLICATION->IncludeComponent(
	"aspro:com.banners.next",
	"adv_top",
	Array(
		"BANNER_TYPE_THEME" => "UNDER_MAIN_BANNER",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "aspro_next_adv",
		"NEWS_COUNT" => "10",
		"PROPERTY_CODE" => array(0=>"URL",1=>"",),
		"SET_BANNER_TYPE_FROM_THEME" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC",
		"TYPE_BANNERS_IBLOCK_ID" => "1"
	)
);?>
<?endif;?>