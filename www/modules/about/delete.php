<?php 

if ( !isAdmin() ) {
	header("Location: " . HOST);
	die;
}

$job = R::load('jobs', $_GET['id']);

// echo "<pre>"; 
// print_r($_POST);
// echo "</pre>";

 if ( isset($_POST['jobDelete'])) {
		R::trash($job);
		header('Location: ' . HOST . "expirience-edit");
		exit();
	}

// Готовим контент для центральной части
ob_start();
include ROOT . "templates/_parts/_header.tpl";
include ROOT . "templates/about/delete.tpl";
$content = ob_get_contents();
ob_end_clean();

// Выводим шаблоны
include ROOT . "templates/_parts/_head.tpl";
include ROOT . "templates/template.tpl";
include ROOT . "templates/_parts/_footer.tpl";
include ROOT . "templates/_parts/_foot.tpl";

?>