<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) { die(); }

use Yandex\Market;
use Bitrix\Main\Localization\Loc;

/** @var $component \Yandex\Market\Components\AdminFormEdit */

Market\Ui\Library::load('jquery');

Market\Ui\Assets::loadPlugin('admin', 'css');
Market\Ui\Assets::loadPlugin('base', 'css');

Market\Ui\Assets::loadPluginCore();
Market\Ui\Assets::loadFieldsCore();
Market\Ui\Assets::loadPlugin('Ui.Form.NotifyUnsaved');

if (!empty($arResult['CONTEXT_MENU']))
{
	$context = new CAdminContextMenu($arResult['CONTEXT_MENU']);
	$context->Show();
}

if ($component->hasErrors())
{
	$component->showErrors();
}

$langNotifyUnsaved = [
	'MESSAGE' => Loc::getMessage('YANDEX_MARKET_T_ADMIN_FORM_EDIT_NOTIFY_UNSAVED_MESSAGE')
];

$tabControl = new \CAdminTabControl($arParams['FORM_ID'], $arResult['TABS'], false, true);

if ($arParams['FORM_BEHAVIOR'] === 'steps')
{
	foreach ($arResult['TABS'] as $tab)
	{
		if ($tab['STEP'] === $arResult['STEP'])
		{
			if (isset($tab['DATA']['METRIKA_GOAL']))
			{
				Market\Metrika::reachGoal($tab['DATA']['METRIKA_GOAL']);
			}

			$_REQUEST[$arParams['FORM_ID'] . '_active_tab'] = $tab['DIV'];
			break;
		}
	}
}

include __DIR__ . '/partials/check-javascript.php';

?>
<form class="js-plugin" method="POST" action="<?echo $APPLICATION->GetCurPageParam(); ?>" data-plugin="Ui.Form.NotifyUnsaved" <?= $arResult['HAS_REQUEST'] ? 'data-changed="true"' : ''; ?> enctype="multipart/form-data">
	<?php
	if ($arParams['FORM_BEHAVIOR'] === 'steps')
	{
		?>
		<input type="hidden" name="STEP" value="<?= $arResult['STEP']; ?>" />
		<?php
	}

	$tabControl->Begin();

	echo bitrix_sessid_post();

	foreach ($arResult['TABS'] as $tab)
	{
		$tabControl->BeginNextTab([ 'showTitle' => false ]);

		$isActiveTab = ($arParams['FORM_BEHAVIOR'] !== 'steps' || $tab['STEP'] === $arResult['STEP']);
		$tabLayout = $tab['LAYOUT'] ?: 'default';
		$fields = $tab['FIELDS'];

		include __DIR__ . '/partials/hidden.php';
		include __DIR__ . '/partials/tab-' . $tabLayout . '.php';
	}

	$tabControl->Buttons();

	include __DIR__ . '/partials/buttons.php';

	$tabControl->End();
	?>
</form>
<script>
	(function() {
		var utils = BX.namespace('YandexMarket.Utils');

		utils.registerLang(<?= Market\Utils::jsonEncode($langNotifyUnsaved, JSON_UNESCAPED_UNICODE); ?>, 'YANDEX_MARKET_FORM_NOTIFY_UNSAVED_');
	})();
</script>
<?
if ($arParams['FORM_BEHAVIOR'] === 'steps')
{
	?>
	<script>
		<?
		foreach ($arResult['TABS'] as $tab)
		{
			if ($tab['STEP'] !== $arResult['STEP'])
			{
				?>
				<?= $arParams['FORM_ID']; ?>.DisableTab('<?= $tab['DIV']; ?>');
				<?
			}
		}
		?>
	</script>
	<?
}
