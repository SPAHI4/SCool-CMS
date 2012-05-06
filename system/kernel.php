<?php
include_once "functions.php";
//if(DEBUG)error_reporting(E_WARNING);
//Автозагрузка классов
spl_autoload_register("__autoload");

function __autoload($class_name)
{
	$filename = strtolower($class_name) . '.php';
	$file = ROOT . 'system/classes/' . $filename;
	if (!file_exists($file))   return false;
	include_once ($file);
}
