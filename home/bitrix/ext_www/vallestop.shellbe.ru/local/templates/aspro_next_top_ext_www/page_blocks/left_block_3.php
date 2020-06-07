<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<? global $arTheme, $APPLICATION;?>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	"main", 
	array(
		"COMPONENT_TEMPLATE" => "main",
		"PATH" => SITE_DIR."include/left_block/menu.left_menu.php",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "",
		"AREA_FILE_RECURSIVE" => "Y",
		"HIDE_CATALOG" => "Y",
		"EDIT_TEMPLATE" => "include_area.php",
		"PRICE_CODE" => array(
			0 => "",
			1 => "",
		),
		"STORES" => array(
			0 => "",
			1 => "",
		),
		"STIKERS_PROP" => "HIT",
		"SALE_STIKER" => "SALE_TEXT",
		"SHOW_DISCOUNT_PERCENT_NUMBER" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>

<?$APPLICATION->ShowViewContent('left_menu');?>
<?$APPLICATION->ShowViewContent('under_sidebar_content');?>

<?CNext::get_banners_position('SIDE', 'Y');?>