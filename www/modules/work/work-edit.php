<?php 

if ( !isAdmin() ) {
	header("Location: " . HOST);
	die;
}
$errors = array();
// $workId = $_GET['id'];
$work = R::load('works', $_GET['id']);


// echo "<pre>";
// print_r($_POST);
// echo "</pre>";


// echo "<pre>";
// print_r($work);
// echo "</pre>";



if ( isset($_POST['workUpdate'])) {

	if ( trim($_POST['workTitle']) == '') {
		$errors[] = ['title' => 'Введите Название работы' ];
	}

	// if ( trim($_POST['workText']) == '') {
	// 	$errors[] = ['text' => 'Введите Текст работы' ];
	// }

	if ( empty($errors)) {
		$work->title = htmlentities($_POST['workTitle']);
		$work->text = $_POST['workText'];
		$work->result = htmlentities($_POST['workDone']);
		$work->technologies = $_POST['workTech'];
		$work->link = htmlentities($_POST['workLink']);
		$work->github = htmlentities($_POST['gitHub']);
		
		if ( isset($_FILES["workImg"]["name"]) && $_FILES["workImg"]["tmp_name"] != "" ) {
			// Write file image params in variables
			$fileName = $_FILES["workImg"]["name"];
			$fileTmpLoc = $_FILES["workImg"]["tmp_name"];
			$fileType = $_FILES["workImg"]["type"];
			$fileSize = $_FILES["workImg"]["size"];
			$fileErrorMsg = $_FILES["workImg"]["error"];
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

			$workImgFolderLocation = ROOT . 'usercontent/portfolio/';

			// Перемещаем загруженный файл в нужную директорию
			$uploadfile = $workImgFolderLocation . $db_file_name;
			$moveResult = move_uploaded_file($fileTmpLoc, $uploadfile);

			if ($moveResult != true) {
				$errors[] = 'File upload failed';
			}

			include_once( ROOT . "/libs/image_resize_imagick.php");
			
			$target_file =  $workImgFolderLocation . $db_file_name;
			$resized_file = $workImgFolderLocation . $db_file_name;
			$wmax = 920;
			$hmax = 620;
			$img = createThumbnailBig($target_file, $wmax, $hmax);
			$img->writeImage($resized_file);
			$work->workImg = $db_file_name;

			$target_file =  $workImgFolderLocation . $db_file_name;
			$resized_file = $workImgFolderLocation . "320-" . $db_file_name;
			$wmax = 320;
			$hmax = 140;
			$img = createThumbnailCrop($target_file, $wmax, $hmax);

			$img->writeImage($resized_file);

			$work->workImgSmall = "320-" . $db_file_name;
		}


		if ( @$_POST['deleteImg'] === "on") {
			$imgPathBig = ROOT . 'usercontent/portfolio/' . $work->work_img;
			$imgPathSmall = ROOT . 'usercontent/portfolio/' . $work->work_img_small;

			if ( file_exists($imgPathBig) ) unlink($imgPathBig);
			if ( file_exists($imgPathSmall) ) unlink($imgPathSmall);
 
			$work->workImg = "";
			$work->workImgSmall = "";
			
		}

		R::store($work);

		header('Location: ' . HOST . "work/work-single?id=" . $work->id);
		exit();
	}
}


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