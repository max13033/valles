<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="module-form-block-wr lk-page border_block">

<?ShowError($arResult["strProfileError"]);?>
<?if( $arResult['DATA_SAVED'] == 'Y' ) {?><?ShowNote(GetMessage('PROFILE_DATA_SAVED'))?><br /><?; }?>
	<?global $arTheme?>
	<div class="form-block-wr">
		<? 	if($arResult["SOCSERV_ENABLED"]){ 
				$APPLICATION->IncludeComponent(
					"bitrix:socserv.auth.split", 
					"main", 
					array(
						"SUFFIX"=>"form", 
						"SHOW_PROFILES" => "Y",
						"ALLOW_DELETE" => "Y"
				),false);
			}?>
	</div>
</div>