<?php 

//Настройка БД
define('DB_HOST', 'localhost');
define('DB_NAME', 'part-4');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

/**
* Устанавливает путь до корневой директории скрипта
* по протоколу HTTP
*/

define('HOST', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/');

/**
* Устанавливает физический путь до корневой директории скрипта
*/
define('ROOT', dirname(__FILE__).'/');


?>