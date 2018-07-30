<?php 

if ( !isAdmin() ) {
	header("Location: " . HOST);
	die;
}


// echo "<pre>"; 
// print_r($_POST);
// echo "</pre>";

$work = R::load('works', $_GET['id']);

// $mess = R::load('messages', $_GET["id"]);

 if ( isset($_POST['workDelete'])) {
		R::trash($work);

		header('Location: ' . HOST . "work");
		exit();
			}

// Готовим контент для центральной части
ob_start();
include ROOT . "templates/_parts/_header.tpl";
include ROOT . "templates/work/delete.tpl";
$content = ob_get_contents();
ob_end_clean();

// Выводим шаблоны
include ROOT . "templates/_parts/_head.tpl";
include ROOT . "templates/template.tpl";
include ROOT . "templates/_parts/_footer.tpl";
include ROOT . "templates/_parts/_foot.tpl";

?>




