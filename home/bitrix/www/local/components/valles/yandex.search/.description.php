<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentDescription = array(
    "NAME" => "АПИ Яндекс поиск",
    "DESCRIPTION" => "Поиск на сайте через Яндекс",
    "PATH" => array(
        "ID" => "yandex_search",
        "CHILD" => array(
            "ID" => "communication",
            "NAME" => "АПИ Яндекс поиск"
        )
    ),
    "ICON" => "/images/icon.gif",
);
?>