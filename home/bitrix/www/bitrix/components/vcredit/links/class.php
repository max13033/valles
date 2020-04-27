<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	{
		die();
	}
use Bitrix\Main, Bitrix\Main\Loader, Bitrix\Main\Localization\Loc;

/**
 * @var $APPLICATION CMain
 * @var $USER CUser
 */

Loc::loadMessages(__FILE__);

Loader::includeModule("sale");
Loader::includeModule("catalog");
Loader::includeModule("iblock");

class vcreditLinks extends \CBitrixComponent
	{
    public function executeComponent()
	    {
		    global $APPLICATION;

		    if ($this->arParams["ELEMENT_ID"] > 0)
			    {
				    $cache_id = md5(serialize($this->arParams));
				    $cache_dir = "/tagged_getlist";
				    $obCache = new CPHPCache;
				    if ($obCache->InitCache(36000, $cache_id, $cache_dir))
					    {
						    $this->arResult["ELEMENT"] = $obCache->GetVars();
					    }
				    elseif (CModule::IncludeModule("iblock") && $obCache->StartDataCache())
					    {
						    global $CACHE_MANAGER;
						    $CACHE_MANAGER->StartTagCache($cache_dir);
						    $CACHE_MANAGER->RegisterTag("iblock_id_" . $this->arParams["ELEMENT_ID"]);
						    $result = CIBlockElement::GetByID($this->arParams["ELEMENT_ID"]);
						    $this->arResult["ELEMENT"] = $result->Fetch();
						    $arPrice = CCatalogProduct::GetOptimalPrice($this->arResult["ELEMENT"]["ID"]);
						    $this->arResult["ELEMENT"]["PRICE"] = $arPrice["RESULT_PRICE"]["DISCOUNT_PRICE"];

						    $CACHE_MANAGER->RegisterTag("iblock_id_new");
						    $CACHE_MANAGER->EndTagCache();

						    $obCache->EndDataCache($this->arResult["ELEMENT"]);
					    }

			    }

		    $this->includeComponentTemplate();
	    }
	}