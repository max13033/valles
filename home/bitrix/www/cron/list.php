# 2 minutes

*/2 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/128092_yandex.market.callagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
*/2 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/128093_yandex.market.callagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
*/2 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/128094_yandex.market.callagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
*/2 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/07_main.submitdata.php > /home/bitrix/www/cron/cron_log.txt 2>&1
*/2 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/49689_subscribe.execute.php > /home/bitrix/www/cron/cron_log.txt 2>&1
*/2 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/51496_techart.currencyupdater.updatecurrencyrates.php > /home/bitrix/www/cron/cron_log.txt 2>&1
*/2 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/127886_sale.preparedata.php > /home/bitrix/www/cron/cron_log.txt 2>&1
*/2 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/4053_suppotr.agentfunction.php > /home/bitrix/www/cron/cron_log.txt 2>&1
*/2 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/125975_socialservices.getteitmessages.php > /home/bitrix/www/cron/cron_log.txt 2>&1
*/2 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/125973_socialservices.sendsocialservicesmessages.php > /home/bitrix/www/cron/cron_log.txt 2>&1

# 4 minutes
*/4 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/44_pull.checkonlinechannel.php > /home/bitrix/www/cron/cron_log.txt 2>&1

# 10 min
0,10,20,30,40,50 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/47_pull.checkexpireagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
2,12,22,32,42,52 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/4011_im.mailnotifyagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
4,14,24,34,44,54 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/4012_im.mailmessageagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
6,16,26,36,46,56 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/4079_socialnetwork.sendeventagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1

# 15 min
*/15 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/128097_calendar.renewwatchchannels.php > /home/bitrix/www/cron/cron_log.txt 2>&1

# 30 min
15,45 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/47025_security.cleanupagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1

# 1 hour
9 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/03_main.deleteoldcaptcha.php > /home/bitrix/www/cron/cron_log.txt 2>&1
15 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/33_seo.updateagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
21 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/35_seo.checkquantityagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
27 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/926_security.cleanupagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
33 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/4029_im.cleaningagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
44 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/4042_statistic.cleanuppathcache.php > /home/bitrix/www/cron/cron_log.txt 2>&1
53 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/85736_techdir.redirector.autoredirectstoquicktable.php > /home/bitrix/www/cron/cron_log.txt 2>&1
57 * * * * nice /usr/bin/php -f /home/bitrix/www/cron/4077_landing.clearfiles.php > /home/bitrix/www/cron/cron_log.txt 2>&1

# 2 hours
00 0,2,4,6,8,10,12,14,16,18,20,22 * * * nice /usr/bin/php -f /home/bitrix/www/cron/20_sale.agentcheckrecurring.php > /home/bitrix/www/cron/cron_log.txt 2>&1
30 0,2,4,6,8,10,12,14,16,18,20,22 * * * nice /usr/bin/php -f /home/bitrix/www/cron/4041_statistic.cleanupsessiondata.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 1,3,5,7,9,11,13,15,17,19,21,23 * * * nice /usr/bin/php -f /home/bitrix/www/cron/4073_advertising.sendinfo.php > /home/bitrix/www/cron/cron_log.txt 2>&1
30 1,3,5,7,9,11,13,15,17,19,21,23 * * * nice /usr/bin/php -f /home/bitrix/www/cron/4073_advertising.sendinfo.php > /home/bitrix/www/cron/cron_log.txt 2>&1

# 8 hours
* */8 * * * nice /usr/bin/php -f /home/bitrix/www/cron/32426_sale.deleteoldagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1

# 12 hours
* 3,15 * * * nice /usr/bin/php -f /home/bitrix/www/cron/45_pull.checkexpireagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
* 4,16 * * * nice /usr/bin/php -f /home/bitrix/www/cron/4019_im.removetmpfilegent.php > /home/bitrix/www/cron/cron_log.txt 2>&1

# 1 day 
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/01_main.cleanupagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/02_main.cleanuphitauthagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
45 1 * * * nice /usr/bin/php -f /home/bitrix/www/cron/04_main.cleanupold.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/05_main.authactionscleanupagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/06_main.commontest.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 00 * * * nice /usr/bin/php -f /home/bitrix/www/cron/09_currency.currencybaserateagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/10_forum.cleanup.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/11_forum.cleanup.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 00 * * * nice /usr/bin/php -f /home/bitrix/www/cron/12_messageservice.cleanupagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/16_rest.getnumupdates.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/17_rest.cleanprocessagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/22_.sale.clearviewed.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 1 * * * nice /usr/bin/php -f /home/bitrix/www/cron/125974_socialservices.cleanup.php > /home/bitrix/www/cron/cron_log.txt 2>&1
15 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/26_search.cleanupagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
15 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/27_search.cleanupagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/34_seo.clean.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/38_storeassist.agentcountdayorders.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/40_subscribe.cleanup.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/46_pull.checkexpireagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/7216_main.deleteoldagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/46174_yandexmarket.callagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/32662_sale.cleanupagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/32663_sale.deactivateagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/127857_yandex.market.callagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/126_main.deleteold.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/6782_rest.cleanupagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/46466_clouds.cleanup.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 9 * * * nice /usr/bin/php -f /home/bitrix/www/cron/49304_statistic.senddailystatistic.cleanupagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/32427_sale.remindpayment.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/4023_im.deleteexpiredtokenagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/4034_main.deleteoldagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/56004_rest.sendagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/197_main.cleanupagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/56005_rest.cleanupagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 1 * * * nice /usr/bin/php -f /home/bitrix/www/cron/4038_statistic.setnewday.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 3 * * * nice /usr/bin/php -f /home/bitrix/www/cron/4039_statistic.cleanupstatistic_1.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 4 * * * nice /usr/bin/php -f /home/bitrix/www/cron/4040_statistic.cleanupstatistic_2.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/4047_workflow.cleanup.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/4054_suppotr.cleanuponline.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/4055_suppotr.autoclose.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/4058_mail.cleanup.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/4059_mail.resyncdomainusersagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/125416_yandex.market.callagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/4074_advertising.cleanupdynamics.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 2 * * * nice /usr/bin/php -f /home/bitrix/www/cron/85747_sale.cleanproductreservedquantity.php > /home/bitrix/www/cron/cron_log.txt 2>&1

# 4 days
00 11 */4 * * nice /usr/bin/php -f /home/bitrix/www/cron/1022_sale.refreshproductlist.php > /home/bitrix/www/cron/cron_log.txt 2>&1

# 5 days
00 11 */5 * * nice /usr/bin/php -f /home/bitrix/www/cron/08_catalog.clearagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1

# 7 days
32 01 */7 * * nice /usr/bin/php -f /home/bitrix/www/cron/5452_yandexmarket.callagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1
00 15 */7 * * nice /usr/bin/php -f /home/bitrix/www/cron/86122_yandex.market.callagent.php > /home/bitrix/www/cron/cron_log.txt 2>&1

# 10 days
00 11 */10 * * nice /usr/bin/php -f /home/bitrix/www/cron/32428_sale.deleteoldproducts.php > /home/bitrix/www/cron/cron_log.txt 2>&1
