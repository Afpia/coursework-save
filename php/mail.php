<?php
require_once __DIR__ . '/helpers.php';

$message = json_decode(file_get_contents('php://input'));
$email = $message->email ?? null;
$user = findUser($email);

if (!$user) {
	$message = 1;
	echo $message;
} else {

	$_SESSION['restoreEmail'] = $user['email'];

	$subject = "Новый пароль";
	$newPassword = '<a href="http://save/page/new.password.php">Подтвердите что это вы</a>';
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	mail($email, $subject, $newPassword, $headers);

	$message = 'true';
	echo json_encode($message);
}
