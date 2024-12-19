<?php

//Отображаем все ошибки
ini_set('display_errors', 1);
error_reporting(E_ALL);
//Запускаем сессию на всех страницах
session_start();
//Подключяем системные файлы
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/SiteController.php');
require_once(ROOT.'/db.php');
//require_once(ROOT.'/components/autoload.php');
//Вызов роутера

$run = new SiteController();
$run->actionIndex();
//Подключаем футер на все страницы
 