<?php
//Засекаем время
$t = microtime(1);
$config=parse_ini_file("system/ini/config.ini",TRUE);
session_start();
//Объявляем корневую директорию
define('ROOT', str_replace('\\', '/', realpath(dirname (__FILE__))) .'/');
define('DEBUG', $config['settings']['debug']);
error_reporting(E_ALL);
//Инклудим ядро
include_once "system/kernel.php";
//Считываем конфиг

//Добавляем в реестр
Registry::set("config",$config);
//Подключаемся к БД
try {
	$db = new PDO("mysql:host={$config['mysql']['host']};dbname={$config['mysql']['database']}", $config['mysql']['user'], $config['mysql']['password'], array( PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}
catch(PDOException $e)
{
	echo "БД ошибка: ".$e->getMessage();
}
//Добавляем БД в реестр
Registry::set("db",$db);
//Считываем контроллеры
Router::init();