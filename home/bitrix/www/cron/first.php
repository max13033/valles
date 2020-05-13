<?
$_SERVER['DOCUMENT_ROOT'] = realpath(dirname(__FILE__).'/..');
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

define('NO_KEEP_STATISTIC', true);
define('NOT_CHECK_PERMISSIONS',true); 
define('BX_NO_ACCELERATOR_RESET', true);

require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');

@set_time_limit(0);
@ignore_user_abort(true);

//	require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/tools/backup.php');



// require_once "/home/bitrix/www/bitrix/modules/main/include/prolog_before.php";

// require_once '/home/bitrix/www/bitrix/modules/main/lib/io/path.php';

// require_once '/home/bitrix/www/bitrix/modules/main/lib/localization/loc.php';

// require_once '/home/bitrix/www/bitrix/modules/yandex.market/lib/export/run/agent.php';

// require_once '/home/bitrix/www/bitrix/modules/yandex.market/lib/reference/agent/base.php';

// use Yandex\Market\Export\Run\Agent;

// define(‘NO_AGENT_CHECK’, true);
// require_once '/home/bitrix/www/bitrix/modules/main/lib/loader.php';

\Bitrix\Main\Loader::includeModule('yandex.market');


try{Yandex\Market\Export\Run\Agent::callAgent('change');}

catch(Error $err){file_put_contents('/home/bitrix/www/cron/cron_log.txt', strval(date("Y.m.d H:i"))." ".$err." not OK \r\n", FILE_APPEND);}

//	if(!$err){file_put_contents('/home/bitrix/www/cron/cron_log.txt', strval(date("Y.m.d H:i"))."  OK \r\n", FILE_APPEND);}


?>