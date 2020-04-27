<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Loader;
use Bitrix\Catalog;
use Bitrix\Iblock;

if (!Loader::includeModule('sale'))
	return;


$arComponentParameters = array(

	"PARAMETERS" => array(
		"ELEMENT_ID" => array(
			"NAME" => GetMessage('ID_ELEMENT_VCREDIT'),
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"DEFAULT" => "soa-action",
		),

	)
);