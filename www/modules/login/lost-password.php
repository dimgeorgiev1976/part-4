<?php 
$errors = array();

if ( isset($_POST['lost'])) {
	
	if ( trim($_POST['email']) == '') {
		$errors[] = ['title' => 'Введите Email' ];
	}

	if ( empty($errors)) {

		$user = R::findOne('users', 'email = ?', array($_POST['email']) );

		// Проверка на пароль
		if ( $user ) {

			// Генерация кода и сохранение кода в БД
			// Генерация кода и сохранение кода в БД
			function random_str( $num = 30 ) {
				return substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, $num);
			}
			$recovery_code = random_str(15);
			$user->recovery_code = $recovery_code;
			$user->recovery_code_times = 3;
			R::store($user);

			// Высылаем инструкции на почту
			$recovery_message = "<p>Код для сброса пароля: <b>$recovery_code</b></p>";
			$recovery_message .= "<p>Для сброса пароля перейдите по ссылке ниже, и установите новый пароль:</p>";
			$recovery_message .= '<p><a href="' . HOST;
			$recovery_message .= "set-new-password?email=" . $_POST['email'] . "&code=" . $recovery_code;
			$recovery_message .= '" target="_blank">';
			$recovery_message .= "Установить новый пароль</a></p>";
			mail($_POST['email'], 'Восстановление доступа', $recovery_message);
			$success[] = "Инструкции по восстановлению доступа высланы на " . $_POST['email'];

		} else {
			$errors[] = "Пользователь с таким email не зарегистрирован";
		}

	}
}

// Готовим контент для центральной части
ob_start();
include ROOT . "templates/login/lost-password.tpl";
$content = ob_get_contents();
ob_end_clean();

include ROOT . "templates/login/login-page.tpl";

?>