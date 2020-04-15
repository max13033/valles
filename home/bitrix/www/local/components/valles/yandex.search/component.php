<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if ($_REQUEST['action_ya_search']=='Y'){


    $url = 'https://catalogapi.site.yandex.net/v1.0?';
    $url .= 'apikey=81cd995f-5d34-4a43-8705-763d38a89c03';
    $url .= '&searchid=2339090';
    $url .= '&text='.$_REQUEST['q'];
    $url .= '&per_page=32';

    if (isset($_REQUEST['page']))
        $url .= '&page='.$_REQUEST['page'];

    $find = file_get_contents($url);
    $find = json_decode($find);

    $arResult["SEARCH"] = $find;
    $arResult["PRODUCTS"] = Array();
    $arResult["FILTER"] = Array();

    if(isset($arResult["SEARCH"]->documents)){

        foreach ($arResult["SEARCH"]->documents as $product){
            $arResult["PRODUCTS"][] = $product;
            $arResult["FILTER"][] = $product->id;
        }

        // paginate
        $arResult["COUNT_PAGES"] = floor($find->docsTotal/$find->perPage);

    }

    //pr($arResult["SEARCH"]);
}

$this->IncludeComponentTemplate();



/*
if($iblockSaveID<1){
    echo "Ошибка, укажите ID инфоблока для сохранения данных";
}else{

    if($_REQUEST['dsc-action']=='send-form'){

        $arResult["VIEW"] = "RESULT";

        $rName = mb_convert_encoding(strip_tags($_REQUEST['name']), "windows-1251");
        $rPhone = mb_convert_encoding(strip_tags($_REQUEST['phone']), "windows-1251");

        if($_COOKIE["send_sms_coupon"]=='Y'){

            $arResult["RESULT_ALERT_CLASS"] = "danger";
            $arResult["RESULT_ALERT_MESSAGE"] = $arParams["ERROR_TEXT"];

            $APPLICATION->RestartBuffer();
            $this->IncludeComponentTemplate();

            die();
        }

        CModule::IncludeModule('iblock');

        $el = new CIBlockElement;

        $arSelect = Array("ID", "NAME");
        $arFilter = Array("IBLOCK_ID"=>IntVal($iblockSaveID), "PREVIEW_TEXT"=>$rPhone);
        $res = $el->GetList(Array(), $arFilter, false, Array("nPageSize"=>1), $arSelect);

        if($ob = $res->GetNextElement())
        {
            $arFields = $ob->GetFields();

            $name = $arFields['NAME'][0];
            $coupon = $name."-".$arFields['ID'];

            $arResult["RESULT_ALERT_CLASS"] = "success";
            $arResult["RESULT_ALERT_MESSAGE"] = $arParams["SUCCESS_TEXT"];

        }else{
            $createdUserID = $USER->GetID();
            $createdUserID = $createdUserID?$createdUserID:1;

            $arLoadProductArray = Array(
                "MODIFIED_BY"    => $createdUserID ,
                "IBLOCK_SECTION_ID" => false,
                "IBLOCK_ID"      => IntVal($iblockSaveID),
                "NAME"           => $rName,
                "ACTIVE"         => "Y",
                "PREVIEW_TEXT"   => $rPhone,
            );

            if($PRODUCT_ID = $el->Add($arLoadProductArray)){
                $arResult["RESULT_ALERT_CLASS"] = "success";
                $name = $rName[0];
                $coupon = $name."-".$PRODUCT_ID;
                $arResult["RESULT_ALERT_MESSAGE"] = $arParams["SUCCESS_TEXT"];
            }
            else{
                $arResult["RESULT_ALERT_CLASS"] = "danger";
                $arResult["RESULT_ALERT_MESSAGE"] = "Возникла ошибка: ".$el->LAST_ERROR;
            }
        }

        $APPLICATION->RestartBuffer();


        $sendPhone = preg_replace("/[^0-9]/", '', $rPhone);

        $textCoupon = isset($arParams['SMS_TEXT'])?$arParams['SMS_TEXT']:'tgsmit.ru ваш купон на доставку #coupon#';
        $textCoupon = str_replace('#coupon#', $coupon, $textCoupon);

        $data = array(
            'login' => 'tgsmit',
            'psw' => '727251648qwe',
            'phones' => $sendPhone,
            'mes' => $textCoupon,
        );

        //pr($data);

        $smsSend =  file_get_contents("https://smsc.ru/sys/send.php?".http_build_query($data));

        if(!strstr($smsSend, 'OK')){
            $arResult["RESULT_ALERT_CLASS"] = "danger";
            $arResult["RESULT_ALERT_MESSAGE"] = "SMS не отправлено, $smsSend";
        }else{
            setcookie ("send_sms_coupon", "Y",time()+(60*15));
        }

        $this->IncludeComponentTemplate();

        die();
    }else{
        $arResult['DATE'] = date($arParams["TEMPLATE_FOR_DATE"]);

        $arResult["CUR_PAGE"] = $APPLICATION->GetCurPage();
        $arResult["VIEW"] = "TPL";

        $this->IncludeComponentTemplate();
    }
}*/

?>