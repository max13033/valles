<?
ini_set("memory_limit", "1024M"); 
// define("BX_CRONTAB_SUPPORT", true);
define("BX_USE_MYSQLI", true); 
define("DBPersistent", false);
$DBType = "mysql";
$DBHost = "localhost";
$DBLogin = "root";
$DBPassword = "QCa1W6v~D{";
$DBName = "vallesru2";
$DBDebug = true;
$DBDebugToFile = false;

define("DELAY_DB_CONNECT", true);
define("CACHED_b_file", 3600);
define("CACHED_b_file_bucket_size", 10);
define("CACHED_b_lang", 3600);
define("CACHED_b_option", 3600);
define("CACHED_b_lang_domain", 3600);
define("CACHED_b_site_template", 3600);
define("CACHED_b_event", 3600);
define("CACHED_b_agent", 3660);
define("CACHED_menu", 3600);

define("BX_UTF", true);
define("BX_FILE_PERMISSIONS", 0644);
define("BX_DIR_PERMISSIONS", 0755);
define("BX_TEMPORARY_FILES_DIRECTORY", "/home/bitrix/tmp/www");
@umask(~(BX_FILE_PERMISSIONS|BX_DIR_PERMISSIONS)&0777);
define("BX_DISABLE_INDEX_PAGE", true);
define("BX_COMPOSITE_DEBUG", true);
define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"]."/log.txt");

@set_time_limit(php_sapi_name() == "cli" ? 600 : 60);
?>
