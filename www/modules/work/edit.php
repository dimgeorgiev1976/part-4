<?php 

if ( !isAdmin() ) {
	header("Location: " . HOST);
	die;
}

$cats = R::find('works', 'ORDER BY id DESC');

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

$errors = array();

if ( isset($_POST['workUpdate'])) {

	if ( trim($_POST['workTitle']) == '') {
		$errors[] = ['title' => 'Введите Название поста' ];
	}

	if ( trim($_POST['workText']) == '') {
		$errors[] = ['text' => 'Введите Текст поста' ];
	}

	if ( empty($errors)) {
		$post = R::dispense('posts');
		$post->title = htmlentities($_POST['postTitle']);
		$post->text = $_POST['postText'];
		$post->date = time();
		$post->authorId = $_SESSION['logged_user']['id'];
		$post->dateTime = R::isoDateTime();
		$post->cat = htmlentities($_POST['cat']);

		
		if ( isset($_FILES["photo"]["name"]) && $_FILES["photo"]["tmp_name"] != "" ) {
			// Write file image params in variables
			$fileName = $_FILES["photo"]["name"];
			$fileTmpLoc = $_FILES["photo"]["tmp_name"];
			$fileType = $_FILES["photo"]["type"];
			$fileSize = $_FILES["photo"]["size"];
			$fileErrorMsg = $_FILES["photo"]["error"];
			$kaboom = explode(".", $fileName);
			$fileExt = end($kaboom);
			// Check file propertties on different conditions
			list($width, $height) = getimagesize($fileTmpLoc);
			if($width < 10 || $height < 10){
				$errors[] = 'That image has no dimensions';
			}
			$db_file_name = rand(100000000000,999999999999) . "." . $fileExt;
			if($fileSize > 4194304) {
				$errors[] = 'Your image file was larger than 4mb';
			} else if (!preg_match("/\.(gif|jpg|png)$/i", $fileName) ) {
				$errors[] = 'Your image file was not jpg, gif or png type';
			} else if ($fileErrorMsg == 1) {
				$errors[] = 'An unknown error occurred';
			}

			$postImgFolderLocation = ROOT . 'usercontent/blog/';

			// Перемещаем загруженный файл в нужную директорию
			$uploadfile = $postImgFolderLocation . $db_file_name;
			$moveResult = move_uploaded_file($fileTmpLoc, $uploadfile);

			if ($moveResult != true) {
				$errors[] = 'File upload failed';
			}

			include_once( ROOT . "/libs/image_resize_imagick.php");
			
			$target_file =  $postImgFolderLocation . $db_file_name;
			$resized_file = $postImgFolderLocation . $db_file_name;
			$wmax = 920;
			$hmax = 620;
			$img = createThumbnailBig($target_file, $wmax, $hmax);
			$img->writeImage($resized_file);
			$work->postImg = $db_file_name;

			$target_file =  $postImgFolderLocation . $db_file_name;
			$resized_file = $postImgFolderLocation . "320-" . $db_file_name;
			$wmax = 320;
			$hmax = 140;
			$img = createThumbnailCrop($target_file, $wmax, $hmax);

			$img->writeImage($resized_file);

			$work->postImgSmall = "320-" . $db_file_name;

		}

		R::store($work);

		header('Location: ' . HOST . "work");
		exit();
	}
}

// $blogPost = ['title' => 'Заголовок поста', 'text' =>  'Текст поста'];

// Готовим контент для центральной части
ob_start();
include ROOT . "templates/_parts/_header.tpl";
include ROOT . "templates/work/edit.tpl";
$content = ob_get_contents();
ob_end_clean();

// Выводим шаблоны
include ROOT . "templates/_parts/_head.tpl";
include ROOT . "templates/template.tpl";
include ROOT . "templates/_parts/_footer.tpl";
include ROOT . "templates/_parts/_foot.tpl";

?>