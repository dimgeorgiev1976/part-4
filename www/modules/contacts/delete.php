<?php 
if ( !isAdmin() ) {
	header("Location: " . HOST);
	die;
}

// $mess = R::load('messages', 1);
$messages = R::load('messages', $_GET['id']);

if ( isset($_POST['msgDelete'])) {
		R::trash($messages);
		header('Location: ' . HOST . "messages");
		exit();
}



// 	echo "<pre>";
// print_r($mess);
// echo "</pre>";
// Готовим контент для центральной части
ob_start();
include ROOT . "templates/_parts/_header.tpl";
include ROOT . "templates/contacts/delete.tpl";
$content = ob_get_contents();
ob_end_clean();
// Выводим шаблоны
include ROOT . "templates/_parts/_head.tpl";
include ROOT . "templates/template.tpl";
include ROOT . "templates/_parts/_footer.tpl";
include ROOT . "templates/_parts/_foot.tpl";
?>