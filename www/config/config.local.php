<?php
/*-------------------------------------------------------
*
*   LiveStreet Engine Social Networking
*   Copyright © 2008 Mzhelskiy Maxim
*
*--------------------------------------------------------
*
*   Official site: www.livestreet.ru
*   Contact e-mail: rus.engine@gmail.com
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*/
/**
 * Настройки для локального сервера.
 * Для использования - переименовать файл в config.local.php
 */

/**
 * Настройка базы данных
 */
$config['db']['params']['host'] = 'localhost';
$config['db']['params']['port'] = '3306';
$config['db']['params']['user'] = 'root';
$config['db']['params']['pass'] = '';
$config['db']['params']['type']   = 'mysql';
$config['db']['params']['dbname'] = 'kprf';
$config['db']['table']['prefix'] = 'prefix_';

$config['path']['root']['web'] = 'http://kprf.dev';
$config['path']['root']['server'] = 'D:\OpenServer\domains\kprf.dev\www';
$config['path']['offset_request_url'] = '0';
$config['db']['tables']['engine'] = 'InnoDB';
$config['view']['name'] = 'КПРФ';
$config['view']['description'] = 'Единый портал депутатов МГД. ГД. МСУ партии КПРФ';
$config['view']['keywords'] = 'site, google, internet';
$config['view']['skin'] = 'synio';
$config['sys']['mail']['from_email'] = 'admin@admin.adm';
$config['sys']['mail']['from_name'] = 'Почтовик Your Site';
$config['general']['close'] = false;
$config['general']['reg']['activation'] = false;
$config['general']['reg']['invite'] = false;
$config['lang']['current'] = 'russian';
$config['lang']['default'] = 'russian';
return $config;
?>