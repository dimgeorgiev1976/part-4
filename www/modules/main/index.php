<?php 

$details = R::find('about', 1);
//print_r($details);

$aboutName = $details[1]['name'];
$aboutDescription = $details[1]['description'];


$title = "Главная";
$content = "Содержание главной страницы";

// echo "Hi this is module Main and main page";

//готовим контент для центральной части
ob_start(); //буферизированный вывод
include ROOT . "templates/main/main.tpl";
$content = ob_get_contents(); // возвращает выведенный контент
ob_end_clean(); //прекращаем вывод

//собираем страницу из шаблонов
include ROOT . "templates/_parts/_header.tpl";
include ROOT . "templates/template.tpl";
include ROOT . "templates/_parts/_footer.tpl";

?>