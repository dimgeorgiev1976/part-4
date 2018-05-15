<!-- файл для постоянных переменных, define-->

<?php 

//Настройка БД
define('DB_HOST', 'localhost');
define('DB_NAME', 'part-4');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

//путь до корневой директории скрипта по протоколу HTTP
//define('HOST', 'http://'. $_SERVER['HTTP_HOST'] .'/'); //или
define('HOST', $_SERVER['REQUEST_SCHEME'] . '://'. $_SERVER['HTTP_HOST'] .'/');

//физичекий путь до корневой директории скрипта
define('ROOT', dirname(__FILE__) . '/'); //dirname(__FILE__) распечатывает путь к текущему файлу




 ?>