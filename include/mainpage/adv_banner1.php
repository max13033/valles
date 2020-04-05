<?
global $mobileDetectedIO;
if (!$mobileDetectedIO->isMobile()):
    $APPLICATION->IncludeComponent(
        "aspro:com.banners.next",
        "top_slider_banners_custom",
        array(
            "BANNER_TYPE_THEME" => "TOP2",
            "BANNER_TYPE_THEME_CHILD" => "20",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "COMPOSITE_FRAME_MODE" => "N",
            "COMPOSITE_FRAME_TYPE" => "AUTO",
            "FILTER_NAME" => "arRegionLink",
            "IBLOCK_ID" => "3",
            "IBLOCK_TYPE" => "aspro_next_content",
            "NEWS_COUNT" => "10",
            "NEWS_COUNT2" => "20",
            "PROPERTY_CODE" => array(
                0 => "NAV_COLOR",
                1 => "BANNER_SIZE",
                2 => "TEXT_POSITION",
                3 => "TARGETS",
                4 => "TEXTCOLOR",
                5 => "URL_STRING",
                6 => "BUTTON1TEXT",
                7 => "BUTTON1LINK",
                8 => "BUTTON2TEXT",
                9 => "BUTTON2LINK",
                10 => "PICTURE_SVG",
            ),
            "SET_BANNER_TYPE_FROM_THEME" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "ASC",
            "SORT_ORDER2" => "ASC",
            "TYPE_BANNERS_IBLOCK_ID" => "",
            "COMPONENT_TEMPLATE" => "top_slider_banners_custom"
        ),
        false
    );
endif;
?>
