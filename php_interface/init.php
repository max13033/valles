<?
AddEventHandler("shs.parser", "parserBeforeAddElementCatalog", Array("MyClass", "parserBeforeAddElementCatalogHandler"));

class MyClass
{
    // создаем обработчик события "parserBeforeAddElementCatalogHandler"
    function parserBeforeAddElementCatalogHandler(&$_this, &$el)
    {
        if ( $_this->id == 64) {
            $_this->arPrice["PRICE"] = preg_replace("/[^,0-9]/", '', $_this->arPrice["PRICE"]);
        }
    }
}

include_once ($_SERVER["DOCUMENT_ROOT"] . "/bitrix/php_interface/functions/Mobile_Detect.php");

global $mobileDetectedIO;

$mobileDetectedIO = new Mobile_Detect();

// circle through init.d dir and init all php files
foreach (glob(__DIR__ . '/init.d/*.php') as $include) {
    /** @noinspection PhpIncludeInspection */
    include_once $include;
}


AddEventHandler("search", "BeforeIndex", "BeforeIndexHandler");
function BeforeIndexHandler($arFields) {
    $arrIblock = array(17);
    $arDelFields = array("DETAIL_TEXT", "PREVIEW_TEXT") ;
    if (
        CModule::IncludeModule('iblock')
        && $arFields["MODULE_ID"] == 'iblock'
        && in_array($arFields["PARAM2"], $arrIblock)
        && intval($arFields["ITEM_ID"]) > 0){
        $dbElement = CIblockElement::GetByID($arFields["ITEM_ID"]) ;
        if ($arElement = $dbElement->Fetch()){
            //22696
            //пкрвопкпквгвшевпав
            foreach ($arDelFields as $value){
                if (isset ($arElement[$value]) && strlen($arElement[$value]) > 0){
                    $arFields["BODY"] = str_replace (CSearch::KillTags($arElement[$value]) , "", CSearch::KillTags($arFields["BODY"]) );
                }
            }
        }
        return $arFields;
    }
}

function pre($r){
    echo '<pre>';
        print_r($r);
    echo '</pre>';
}

function hasDev(){

    global $USER;

    if ($USER->IsAuthorized() && $USER->IsAdmin())

        return true;

    else
        return false;
}

function pr($r){
    if(hasDev())
        echo '<pre style="color: white">'; print_r($r); echo '</pre>';
}
function prd($r){
    echo '<pre>'; print_r($r); echo '</pre>';
    die();
}

function hasGooAgent(){
    if (strripos($_SERVER['HTTP_USER_AGENT'], 'Chrome-Lighthouse') === false)
        return false;
    else
        return true;
}

function updatePropSynonyms(){
    CModule::IncludeModule("iblock");

    $arSelect = Array("ID", "NAME", "PROPERTY_TYPE_ITEM", "PROPERTY_SEARCH_SYNONYMS", "IBLOCK_ID");
    $arFilter = Array("IBLOCK_ID"=>IntVal(17), "ACTIVE"=>"Y", "PROPERTY_SEARCH_SYNONYMS"=>false, "!PROPERTY_TYPE_ITEM"=>false);
    $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>5000), $arSelect);
    while($ob = $res->GetNextElement())
    {
        $arFields = $ob->GetFields();
        pre($arFields['NAME'].'/'.$arFields['ID']);

        if(empty($arFields['PROPERTY_SEARCH_SYNONYMS_VALUE']['TEXT'])){

            $prop = [];
            $prop["search_synonyms"] = array('VALUE'=>array('TYPE'=>'TEXT', 'TEXT'=>$arFields['PROPERTY_TYPE_ITEM_VALUE']));
            CIBlockElement::SetPropertyValuesEx($arFields['ID'], $arFields['IBLOCK_ID'], $prop);
        }
    }
}

function getBasketProductByID($productID){
    if (!CModule::IncludeModule("sale"))
        return false;

    $arID = array();
    $arBasketItems = array();
    $dbBasketItems = CSaleBasket::GetList(
        array(
            "NAME" => "ASC",
            "ID" => "ASC"
        ),
        array(
            "FUSER_ID" => CSaleBasket::GetBasketUserID(),
            "LID" => "s1",
            "PRODUCT_ID" => $productID,
            "ORDER_ID" => "NULL"
        ),
        false,
        false,
        array("ID", "CALLBACK_FUNC", "MODULE", "PRODUCT_ID", "QUANTITY", "PRODUCT_PROVIDER_CLASS")
    );
    if ($arItems = $dbBasketItems->Fetch()) {
       return $arItems;
    }

    return false;
}

$eventManager = \Bitrix\Main\EventManager::getInstance();
$eventManager->addEventHandler('sale', 'OnBeforeBasketAdd', 'OnBeforeBasketAddHandler');
function OnBeforeBasketAddHandler($arFields) {
    //если товар добаляется из какого-то набора
    if(intval($_POST['set_product_id'])>0){
        //смотрим. есть ли данный набор в корзине
        $findInBasket = getBasketProductByID(intval($arFields['PRODUCT_ID']));
        if($findInBasket){
            if(CSaleBasket::Delete($findInBasket['ID'])){
          //      AddMessage2Log('Basket ITEM DELETE');
            };
        }
        //AddMessage2Log([$_REQUEST, $arFields], 'set_product_id');
    }
}

function sort_smart_filter($a, $b)
{
    if ($a['ELEMENT_COUNT'] == $b['ELEMENT_COUNT']) {
        return 0;
    }
    return ($a['ELEMENT_COUNT'] > $b['ELEMENT_COUNT']) ? -1 : 1;
}


function enc($n) {
    return SITE_TEMPLATE_PATH.'/include/areas/'.$n.'.php';
}

function area($tpl, $data=array()) {

    global  $APPLICATION;

    $file =  enc($tpl);
    $path = $_SERVER['DOCUMENT_ROOT'] . $file;

    if(!file_exists( $path)){

        $fp = fopen($path, "w");
        fwrite($fp, "File will be auto created");
        fclose($fp);

    }

    $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        ".default",
        Array(
            "AREA_FILE_SHOW" => "file",
            "EDIT_TEMPLATE" => "",
            "PATH" => enc($tpl)
        )
    );
}


function check_mobile_2(){

    global $APPLICATION;
    global $USER;

    $arAgents = array(
        "iPhone",
        "Android",
        "webOS",
        "iPod",
        "HTC",
        "LG",
        "Lenovo",
        "NOKIA",
        "Symbian",
        "Windows Mobile",
        "SymbOS",
        "SAMSUNG",
        "SonyEricsson",
        "Alcatel",
        "BlackBerry",
        "WindowsMobile"
    );

    if(isset($_GET["FullVersion"])){
        $_SESSION["mobile_template"] = "N";
        return false;
    }

    if(isset($_GET["MobileVersion"])){
        $_SESSION["mobile_template"] = "Y";
        return true;
    }

    if(!empty($_SESSION["mobile_template"]) && $_SESSION["mobile_template"] == 'N'){
        return false;
    }

    if(!empty($_SESSION["mobile_template"]) && $_SESSION["mobile_template"] == 'Y'){
        return true;
    }

    foreach ($arAgents as $agent) {
        if(stripos($_SERVER["HTTP_USER_AGENT"], $agent)){
            $_SESSION["mobile_template"] = "Y";
            return true;
        }
    }

    return false;
}

function viewNewMobileTemplate(){

    global $APPLICATION;
    global $USER;

    $isMobile = check_mobile_2();

    $arNewPages = array(
        '/',
    );

    if(in_array($APPLICATION->getCurPage(), $arNewPages) && $isMobile)  return true;

    foreach ($arNewPages as $page){

        if(substr_count($page, '/*')){

            $page = str_replace('*', '', $page);

            $match = preg_match("($page)", $APPLICATION->getCurPage(), $matches, PREG_OFFSET_CAPTURE);

            if($match && $isMobile){
                return true;
            }

        }
    }
}
?>
