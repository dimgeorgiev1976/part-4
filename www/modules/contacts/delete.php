<?php 
if ( !isAdmin() ) {
	header("Location: " . HOST);
	die;
}
// $sql = 'SELECT messages.text, messages.date_time, 
// messages.user_id, users.name, users.secondname, 
// users.avatar_small FROM messages INNER JOIN users 
// ON messages.user_id = users.id WHERE 
// messages.post_id = ' . $_GET['id'] ;
// $comments = R::getAll( $sql );


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