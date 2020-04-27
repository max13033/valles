<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

use \Bitrix\Main\Localization\Loc;
$this->setFrameMode(true);
?>
<? if (isset($arResult["ELEMENT"]) && !empty($arResult["ELEMENT"])): ?>
	<? $this->addExternalJs("https://v-credit.su/services/easycredit/inc.js") ?>
	<div>
		<div style="display: none">
			<div class="creditgoods"><?= $arResult["ELEMENT"]["NAME"] ?></div>
			<div class="creditprice"><?= $arResult["ELEMENT"]["PRICE"] ?></div>
		</div>
		<a href="javascript:void(0);"
		   class="gocredit"
		   data-tpl="<?= Loc::getMessage("VCREDIT_TPL_PRICE") ?>"><span><?= Loc::getMessage("VCREDIT_NAME_PRICE") ?></span></a>
	</div>
<? endif ?>
