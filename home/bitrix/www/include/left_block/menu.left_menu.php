<?global $arTheme;?>
<?$bHideCatalogMenu = (isset($arParams["HIDE_CATALOG"]) && $arParams["HIDE_CATALOG"] == "N");?>
<?if(!CNext::IsMainPage()):?>
	<?if(CNext::IsCatalogPage()):
		$bHideCatalogMenu = true;?>
		<?if(!$bHideCatalogMenu):?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"left_front_catalog_custom_lvl_2",
				Array(
					"ALLOW_MULTI_SELECT" => "N",
					"CACHE_SELECTED_ITEMS" => "N",
					"CHILD_MENU_TYPE" => "left",
					"COMPONENT_TEMPLATE" => "left_front_catalog",
					"COMPOSITE_FRAME_MODE" => "A",
					"COMPOSITE_FRAME_TYPE" => "AUTO",
					"DELAY" => "N",
					"MAX_LEVEL" => "2",
					"MENU_CACHE_GET_VARS" => "",
					"MENU_CACHE_TIME" => "3600000",
					"MENU_CACHE_TYPE" => "A",
					"MENU_CACHE_USE_GROUPS" => "N",
					"ROOT_MENU_TYPE" => "left",
					"USE_EXT" => "Y"
				),
				false,
				Array(
					'ACTIVE_COMPONENT' => 'Y'
				)
			);?>
		<?endif;?>
	<?else:?>
		<?$APPLICATION->IncludeComponent(
			"bitrix:menu",
			"left_menu",
			Array(
				"ALLOW_MULTI_SELECT" => "N",
				"CHILD_MENU_TYPE" => "left",
				"DELAY" => "N",
				"MAX_LEVEL" => "1",
				"MENU_CACHE_GET_VARS" => "",
				"MENU_CACHE_TIME" => "3600000",
				"MENU_CACHE_TYPE" => "A",
				"MENU_CACHE_USE_GROUPS" => (CNext::IsPersonalPage()?"Y":"N"),
				"ROOT_MENU_TYPE" => (CNext::IsPersonalPage()?"cabinet":"left"),
				"USE_EXT" => "Y"
			),
			false,
			Array(
				'ACTIVE_COMPONENT' => 'Y'
			)
		);?>
	<?endif;?>
<?elseif(!$bHideCatalogMenu):?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:menu",
		"left_front_catalog_custom_lvl_2",
		Array(
			"ALLOW_MULTI_SELECT" => "N",
			"CACHE_SELECTED_ITEMS" => "N",
			"CHILD_MENU_TYPE" => "left",
			"COMPONENT_TEMPLATE" => "left_front_catalog",
			"COMPOSITE_FRAME_MODE" => "A",
			"COMPOSITE_FRAME_TYPE" => "AUTO",
			"DELAY" => "N",
			"MAX_LEVEL" => "2",
			"MENU_CACHE_GET_VARS" => "",
			"MENU_CACHE_TIME" => "3600000",
			"MENU_CACHE_TYPE" => "A",
			"MENU_CACHE_USE_GROUPS" => "N",
			"ROOT_MENU_TYPE" => "top",
			"USE_EXT" => "Y"
		),
		false,
		Array(
			'ACTIVE_COMPONENT' => 'Y'
		)
	);?>
<?endif;?>