<?php 

require "config.php";
require "db.php";


// echo HOST;
// echo "<br><br>";

//print_r($_SERVER['HTTP_HOST']);

// echo dirname(__FILE__);

// echo ROOT;
// echo "<br><br>";
// echo $_SERVER['REQUEST_URI'];
// echo "<br><br>";

//********************************************************************

//РОУТЕР - блок кода, к-й рассматривает запросы, переданные пользователем и на их основе выводит разные блоки кода или подключает разные части сайта(модули)

//********************************************************************

// echo $_SERVER["REQUEST_URI"];
// echo "<br><br>";

// request URL = http://project/blog/post?id=15  ;   // request URL = http://project/portfolio/   
$uri =  $_SERVER["REQUEST_URI"]; //   /portfolio/ ; глоб.массив $_SERVER элемент ["REQUEST_URI"] передает запрашиваемый адрес пользователя; 

$uri = rtrim($uri, "/"); //rtrim()- обрежем слэши если есть в нач/конце строки и перезапишем; /portfolio
// echo $uri; 
// echo "<br><br>";

$uri = filter_var($uri, FILTER_SANITIZE_URL); //обработаем $uri с пом фильтра FILTER_SANITIZE_URL на случай если переданы опасные для нас данные (нап кавычки) 

$uri = substr($uri, 1); //вырезаем 1й символ
// echo $uri;
// echo "<br><br>"; 

$uri = explode('?', $uri); //отделяем основную часть запроса от гетзапроса раздеялемого "?" с пом explode() - разбивает и превращает в массив
// print_r($uri); // http://project/blog/post?id=15  ==> Array ( [0] => blog/post [1] => id=15 ) 
// echo "<br><br>";

// echo $uri[0];
// echo "<br><br>";

//проверяем какой раздел запрашивает пользователь и в зависимости от этого будем указывать какой модуль нашего сайта будет запущен
switch ( $uri[0]) {
	case '':
		include "modules/main/index.php";
		break;

	case 'about':
		include "modules/about/index.php";
		break;

	case 'contacts':
		include "modules/contacts/index.php";
		break;

	case 'blog':
		include "modules/blog/index.php";
		break;

	default:
		include "modules/main/index.php";
		break;

}


?>