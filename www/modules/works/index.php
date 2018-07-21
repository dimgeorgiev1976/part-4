

<?php 



if ( @$_GET['cat_id'] != '') {
	$posts = R::find('posts', 'cat = ' . $_GET['cat_id'] . ' ORDER BY id DESC' );

} else {
$jobs = R::find('jobs', 'ORDER BY id DESC');
}


// $blogPosts = ['Пост 1', 'Пост 2', 'Пост 3', 'Пост 4', 'Пост 5'];



// Готовим контент для центральной части
ob_start();
include ROOT . "templates/_parts/_header.tpl";
include ROOT . "templates/about/_parts/_about-jobs.tpl";
$content = ob_get_contents();
ob_end_clean();

// Выводим шаблоны
include ROOT . "templates/_parts/_head.tpl";
include ROOT . "templates/template.tpl";
include ROOT . "templates/_parts/_footer.tpl";
include ROOT . "templates/_parts/_foot.tpl";		

?>