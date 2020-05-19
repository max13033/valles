<?
// ini_set('mbstring.func_overload', '2'); // для версий php < 5.3
ini_set('mbstring.internal_encoding', 'UTF-8');

set_time_limit(0);
ignore_user_abort(true);

$_SERVER['DOCUMENT_ROOT'] = '/home/bitrix/www/';

define('NO_KEEP_STATISTIC', true);
define('NOT_CHECK_PERMISSIONS',true);
define('BX_CRONTAB', true);
define('BX_NO_ACCELERATOR_RESET', true);
define('SITE_ID', 's1');
define('LANG', 'ru');

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

if (!CModule::IncludeModule('search')) {
   die('Search module not included');
}

$time_start = time();

$progress = array();
$max_execution_time = 10000; // все элементы индексируются только при большом шаге

while (is_array($progress)) {
   $progress = CSearch::ReIndexAll(true, $max_execution_time, $progress);
}

$total_time = time() - $time_start;

if($progress)
{
	file_put_contents('/home/bitrix/www/cron/cron_log.txt', strval(date("Y.m.d H:i"))." OK ".__FILE__."reindex finished. total time: ". $total_time ." seconds, indexed elements: ". $progress ."\r\n", FILE_APPEND);
}
else
{
	file_put_contents('/home/bitrix/www/cron/cron_log.txt', strval(date("Y.m.d H:i"))."not OK ".__FILE__."\r\n", FILE_APPEND);	
}

// echo 'reindex finished. total time: ' . $total_time . ' seconds, indexed elements: ' . $progress . "\r\n";
?>