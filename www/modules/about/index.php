<?php 

$about = R::load('about', 1);
$technologies = R::find('technologies');

$skills = array();
foreach ($technologies as $technology) {
	$skills[] = $technology;
} 


// echo "<pre>";
// print_r($about);
// echo "</pre>";

// Готовим контент для центральной части
ob_start();
include ROOT . "templates/_parts/_header.tpl";
include ROOT . "templates/about/about.tpl";
$content = ob_get_contents();
ob_end_clean();

// Выводим шаблоны
include ROOT . "templates/_parts/_head.tpl";
include ROOT . "templates/template.tpl";
include ROOT . "templates/_parts/_footer.tpl";
include ROOT . "templates/_parts/_foot.tpl";		
		
 ?>