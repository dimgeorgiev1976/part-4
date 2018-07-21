<?php 

if ( !isAdmin() ) {
	header("Location: " . HOST);
	die;
}

$cat = R::load('categories', $_GET['id']);

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

$errors = array();

if ( isset($_POST['catEdit'])) {

	if ( trim($_POST['catTitle']) == '') {
		$errors[] = ['title' => 'Введите Название категории' ];
	}



	if ( empty($errors)) {
		$cat->cat_title = htmlentities($_POST['catTitle']);

		R::store($cat);

		header('Location: ' . HOST . "blog/categories");
		exit();
	}
}

// $blogPost = ['title' => 'Заголовок поста', 'text' =>  'Текст поста'];

// Готовим контент для центральной части
ob_start();
include ROOT . "templates/_parts/_header.tpl";
include ROOT . "templates/categories/edit.tpl";
$content = ob_get_contents();
ob_end_clean();

// Выводим шаблоны
include ROOT . "templates/_parts/_head.tpl";
include ROOT . "templates/template.tpl";
include ROOT . "templates/_parts/_footer.tpl";
include ROOT . "templates/_parts/_foot.tpl";

?>