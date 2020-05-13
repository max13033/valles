<?
$_SERVER['DOCUMENT_ROOT'] = realpath(dirname(__FILE__).'/..');
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

define('NO_KEEP_STATISTIC', true);
define('NOT_CHECK_PERMISSIONS',true); 
define('BX_NO_ACCELERATOR_RESET', true);

require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');

@set_time_limit(0);
@ignore_user_abort(true);

\Bitrix\Main\Loader::includeModule('main');


try{CUser::AuthActionsCleanUpAgent();}

catch(Error $err){file_put_contents('/home/bitrix/www/cron/cron_log.txt', strval(date("Y.m.d H:i"))." not OK ".__FILE__." ".$err."\r\n", FILE_APPEND);}

if(!$err){file_put_contents('/home/bitrix/www/cron/cron_log.txt', strval(date("Y.m.d H:i"))." OK ".__FILE__."\r\n", FILE_APPEND);}

?>