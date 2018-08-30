<?php 
$page_title = "Димитар Георгиев - Блог";
if(isset($_GET['cat_id']) && $_GET['cat_id'] != '') {
  $posts = R::find('posts', 'cat = ' . $_GET['cat_id'] . ' ORDER BY id DESC' );
} else {
  $posts = R::find('posts', ' ORDER BY id DESC' );
}


$sql = 'Select title as top_title from `posts`';
$top_title = R::getAll( $sql );
$top_title =  $top_title[0];
$top_title = $top_title['top_title'];


// Готовим контент для центральной части
ob_start();
include ROOT . "templates/_parts/_header.tpl";
include ROOT . "templates/blog/blog-all-posts.tpl";
$content = ob_get_contents();
ob_end_clean();

// Выводим шаблоны
include ROOT . "templates/_parts/_head.tpl";
include ROOT . "templates/template.tpl";
include ROOT . "templates/_parts/_footer.tpl";
include ROOT . "templates/_parts/_foot.tpl";		

?>