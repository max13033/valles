<?global $arTheme;?>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"top_content_row",
	Array(
		"ALLOW_MULTI_SELECT" => "Y",
		"CACHE_SELECTED_ITEMS" => "N",
		"CHILD_MENU_TYPE" => "top",
		"COUNT_ITEM" => "10",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y"
	)
);?>