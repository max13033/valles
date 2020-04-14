<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "интернет-магазин, заказать, купить, valles, валес, валлес, valles.ru");
$APPLICATION->SetPageProperty("description", "Интернет-магазин строительных материалов, товаров для дома, сада и огорода. Каталог с ценами и фото на сайте. Доставка по Краснодару и РФ.");
$APPLICATION->SetPageProperty("title", "VALLES.RU - Интернет-магазин строительных и отделочных материалов в Краснодаре");
$APPLICATION->SetPageProperty("viewed_show", "Y");
$APPLICATION->SetTitle("VALLES.RU - Интернет-магазин строительных и отделочных материалов в Краснодаре ");


?>

<!doctype html>
    <html lang="en">
    <head>
        <? $APPLICATION->ShowHead(); ?>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?$APPLICATION->ShowPanel();?>
        HELLO WORLD
    </body>
</html>

<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
