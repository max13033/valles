<?
if(file_exists("cron_log_".strval(date("Y-m-d", strtotime("-10 day"))).".txt"))
{	
	unlink("cron_log_".strval(date("Y-m-d", strtotime("-10 day"))).".txt");
}

?>