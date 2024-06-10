<?php
require_once __DIR__ . '/helpers.php';

$user = findUserID($_SESSION['user']['id']);

$FIO = explode(" ", $user['full_name']);

$lastname = $FIO[0];
$name = $FIO[1];
$patronymic = $FIO[2];
$email = $user['email'];
$phone = $user['phone'];
$date_birth = $user['date_birth'];
$is_admin = $user['is_admin'];

echo json_encode([
	'lastname' => $lastname,
	'name' => $name,
	'patronymic' => $patronymic,
	'email' => $email,
	'phone' => $phone,
	'date_birth' => $date_birth,
	'is_admin' => $is_admin
]);
