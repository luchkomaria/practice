<?php
$includePath =array(LIB_PATH, APP_PATH.DS.'classes',get_include_path()); //путь к папке classes
$includePath = implode(PATH_SEPARATOR, $includePath); //разделение директорий при помощи разделителя PATH_SEPARATOR(DS)
set_include_path($includePath); //устанавливает значение конфигурации include_path

require_once 'PEAR'.DS.'NameScheme'.DS.'Autoload.php';

include_once APP_PATH.DS.'config'.DS.'app_conf.php'; //включает app_conf.php
include_once APP_PATH.DS.'config'.DS.'routes.php'; //включает routes.php
include_once LIB_PATH.DS.'function.php'; //включает function.php
include_once APP_PATH.DS.'config'.DS.'db_conf.php'; //включает db_conf.php

$router = Routing_Router::instance();
$route = $router->getRoute($_SERVER['REQUEST_URI']);

errorReporting();
dispatch($route); //запускаем функцию dispatch

?>