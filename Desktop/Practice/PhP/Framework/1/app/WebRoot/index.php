<?php
define('APP_PATH', realpath('../')); //определет местоположение APP_PATH

define('LIB_PATH', realpath('../../lib'));//определет местоположение библиотеки

define('DS', DIRECTORY_SEPARATOR);//определение способа задания пути к файлу

define('CACHE_ROOT',APP_PATH.DS.'temp'.DS.'cache');//определение местоположения папки кэша. /APP_PATH/temp/cache 
define('LOGS_ROOT',APP_PATH.DS.'temp'.DS.'logs');//определение местоположения логов. /APP_PATH/temp/logs 
define('TEMP',APP_PATH.DS.'temp');//определение местоположения временных файлов. APP_PATH/temp/temp 

define('TABLE_PREFIX','');
define('SERVER','https://luchko.000webhostapp.com/');// определение веб-сервера
ini_set('session.cookie_lifetime',0); //установка времени сессии
include_once APP_PAth.DS.'config'.DS.'bootstrap.php'; //подключение bootstrap.php
?>