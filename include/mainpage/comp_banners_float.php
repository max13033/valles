<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?> <?global $isShowFloatBanner;?> <?if($isShowFloatBanner):?>
<div class="wrapper_inner1 wides float_banners">
	<h3><span style="color: #107bb1;"><a href="/projects/">Готовые решения интерьеров:</a></span></h3>
	 <?$APPLICATION->IncludeComponent(
	"aspro:com.banners.next",
	"next",
	Array(
		"BANNER_TYPE_THEME" => "FLOAT",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "aspro_next_adv",
		"NEWS_COUNT" => "6",
		"PROPERTY_CODE" => array(0=>"TEXT_POSITION",1=>"TARGETS",2=>"TEXTCOLOR",3=>"URL_STRING",4=>"BUTTON1TEXT",5=>"BUTTON1LINK",6=>"BUTTON2TEXT",7=>"BUTTON2LINK",8=>"",),
		"SET_BANNER_TYPE_FROM_THEME" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC",
		"TYPE_BANNERS_IBLOCK_ID" => "1"
	)
);?>
</div>
<div class="clearfix">
</div>
<?endif;?>