<?php 



if ( !isAdmin() ) {
	header("Location: " . HOST);
	die;
}



	$messages = R::find('messages', ' ORDER BY id DESC' );


// $blogPosts = ['Пост 1', 'Пост 2', 'Пост 3', 'Пост 4', 'Пост 5'];



// Готовим контент для центральной части
ob_start();
include ROOT . "templates/contacts/messages.tpl";
$content = ob_get_contents();
ob_end_clean();

// Выводим шаблоны
include ROOT . "templates/_parts/_head.tpl";
include ROOT . "templates/_parts/_header.tpl";
include ROOT . "templates/template.tpl";
include ROOT . "templates/_parts/_footer.tpl";
include ROOT . "templates/_parts/_foot.tpl";		

?>