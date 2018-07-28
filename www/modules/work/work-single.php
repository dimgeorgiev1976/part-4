<?php 

// $workSingle = ['title' => 'Заголовок pаботy', 'title' =>  'Текст pаботy',
// 'description' => 'Введите Oписание работы', 'tech' =>  'Введите Teхнологии работы'];

// $workId = $_GET['id'];
// $work = R::load('works', $workId);


$sql = 'SELECT works.id, works.title, works.text, works.work_img, works.result, 
works.technologies, works.link,works.github, works.date_time, works.author_id,
users.name, users.secondname
FROM works  INNER JOIN users 
ON works.author_id = users.id 
WHERE works.id  = ' . $_GET['id'] . ' LIMIT 1';
$work = R::getAll( $sql );
$work = $work[0];

// $work = R::findAll('works', "work_id = $workId ORDER BY id DESC");


// echo "<pre>";
// print_r($works);
// echo "</pre>";

// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

// echo "<pre>";
// echo($_SESSION['logged_user']['id']);
// echo "</pre>";



// Готовим контент для центральной части
ob_start();
include ROOT . "templates/work/work-single.tpl";
$content = ob_get_contents();
ob_end_clean();

// Выводим шаблоны
include ROOT . "templates/_parts/_head.tpl";
include ROOT . "templates/template.tpl";
include ROOT . "templates/_parts/_footer.tpl";
include ROOT . "templates/_parts/_foot.tpl";		

?>