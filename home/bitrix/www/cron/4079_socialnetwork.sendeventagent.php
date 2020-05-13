<?
$_SERVER['DOCUMENT_ROOT'] = realpath(dirname(__FILE__).'/..');
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

define('NO_KEEP_STATISTIC', true);
define('NOT_CHECK_PERMISSIONS',true); 
define('BX_NO_ACCELERATOR_RESET', true);

require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');

@set_time_limit(0);
@ignore_user_abort(true);

\Bitrix\Main\Loader::includeModule('socialnetwork');

try{CSocNetMessages::SendEventAgent();}

catch(Error $err){file_put_contents('/home/bitrix/www/cron/cron_log.txt', strval(date("Y.m.d H:i"))." ".__FILE__." ".$err." not OK \r\n", FILE_APPEND);}

if(!$err){file_put_contents('/home/bitrix/www/cron/cron_log.txt', strval(date("Y.m.d H:i"))." ".__FILE__." OK \r\n", FILE_APPEND);}

?>