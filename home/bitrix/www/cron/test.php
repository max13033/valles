<?

file_put_contents('/home/bitrix/www/cron/cron_log.txt', strval(date("Y.m.d H:i"))."  TEST \r\n", FILE_APPEND);

?>