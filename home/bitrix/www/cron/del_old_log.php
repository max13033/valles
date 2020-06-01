<?

try{unlink("/home/bitrix/www/cron/cron_log_".strval(date("Y-m-d", strtotime("-10 days"))).".txt");}

catch(Error $err){file_put_contents('/home/bitrix/www/cron/cron_log_'.strval(date("Y-m-d")).'.txt', strval(date("Y.m.d H:i"))." not OK ".__FILE__." ".$err."\r\n", FILE_APPEND);}

if(!$err){file_put_contents('/home/bitrix/www/cron/cron_log_'.strval(date("Y-m-d")).'.txt', strval(date("Y.m.d H:i"))." OK ".__FILE__."\r\n", FILE_APPEND);}

?>