<?php 
$page_title = "Димитар Георгиев - Регистрация";
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

$errors = array();

// $error1 = ['title' => 'Введите Email' ];
// $error2 = ['title' => 'Введите Пароль' ];
// $error3 = ['title' => 'Пользователь с там email уже зарегистрирован', 'desc' => 'Используйте другой Email адрес, или воспользуйтесь восстановлением пароля.' ];

// $errors = [ 
// 		['title' => 'Введите Email' ], 
// 		['title' => 'Введите Пароль' ], 
// 		['title' => 'Пользователь с там email уже зарегистрирован', 'desc' => 'Используйте другой Email адрес, или воспользуйтесь восстановлением пароля.' ]  
// 	];

// Если форма отправлена - то делаем регистрацию

if ( isset($_POST['register'])) {
	$errors = array();
	
	if ( trim($_POST['email']) == '') {
		$errors[] = ['title' => 'Введите Email' ];
	}

	if ( trim($_POST['password']) == '') {
		$errors[] = ['title' => 'Введите Пароль' ];
	}

	if ( R::count('users', 'email = ?', array($_POST['email'])) > 0 ) {
		$errors[] = ['title' => 'Пользователь с там email уже зарегистрирован', 'desc' => 'Используйте другой Email адрес, или воспользуйтесь восстановлением пароля.' ] ;
	}


	if ( empty($errors)) {
		// Alright, Register!
		$user = R::dispense('users');
		$user->email = htmlentities($_POST['email']);
		$user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		R::store($user);

		$_SESSION['logged_user'] = $user;
		$_SESSION['login'] = "1";
		$_SESSION['role'] = $user->role;

		header('Location: ' . HOST . "profile-edit");
		exit();
	}


}


// Готовим контент для центральной части
ob_start();
include ROOT . "templates/login/form-registration.tpl";
$content = ob_get_contents();
ob_end_clean();

include ROOT . "templates/login/login-page.tpl";

?>