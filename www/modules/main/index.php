<?php

$about = R::findOne('about', 1);
$posts = R::find('posts', 'ORDER BY id DESC LIMIT 3');
$jobs = R::find('jobs', 'ORDER BY id DESC LIMIT 3');
// echo "<pre>";
// print_r($jobs); 
// echo "</pre>";

// $aboutName = $details[1]['name'];
// $aboutDescription = $details[1]['description'];


$title = "Главная";
$content ="Содержимое главной страницы";
// готовим контент для центральной части
ob_start();
include ROOT . "templates/_parts/_header.tpl";
include ROOT . "templates/main/main.tpl";
$content = ob_get_contents();
ob_end_clean();

// выводим шаблоны
include ROOT . "templates/_parts/_head.tpl";
include ROOT . "templates/template.tpl";
include ROOT . "templates/_parts/_foot.tpl";
include ROOT . "templates/_parts/_footer.tpl";
