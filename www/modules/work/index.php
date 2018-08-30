<?php
$page_title = "Димитар Георгиев - Работы";
if(isset($_GET['id']) && $_GET['id'] != '') {
  $works = R::find('works', 'category = ' . $_GET['id'] . ' ORDER BY id DESC' );
} else {
  $works = R::find('works', ' ORDER BY id DESC' );
}
// Готовим контент для центральной части Карточек блога
ob_start();
include ROOT . "templates/_parts/_header.tpl";
include ROOT . "templates/work/work-all-works.tpl";
$content = ob_get_contents();
ob_end_clean();
// Выводим шаблоны
include ROOT . "templates/_parts/_head.tpl";
include ROOT . "templates/template.tpl";
include ROOT . "templates/_parts/_footer.tpl";
include ROOT . "templates/_parts/_foot.tpl";		

?>