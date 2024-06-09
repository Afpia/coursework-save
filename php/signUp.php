<?php
require_once __DIR__ . '/helpers.php';

$message = json_decode(file_get_contents('php://input'));

$full_name = $message->full_name ?? null;
$email = $message->email ?? null;
$phone = $message->phone ?? null;
$date_birth = $message->date_birth ?? null;
$password = $message->password ?? null;

$user = findUser($email);

if ($user) {
	$message = 1;
	echo $message;
} else {


	$pdo = getPDO();

	$query = "INSERT INTO users (full_name, email, phone, date_birth, password) VALUES (:name, :email, :phone, :date_birth, :password)";

	$params = [
		'name' => $full_name,
		'email' => $email,
		'phone' => $phone,
		'date_birth' => $date_birth,
		'password' => password_hash($password, PASSWORD_DEFAULT),
	];

	$stmt = $pdo->prepare($query);

	try {
		$stmt->execute($params);
	} catch (\Exception $e) {
		die($e->getMessage());
	}

	$user = findUser($email);

	$_SESSION['user']['id'] = $user['id'];
	if ($user['is_admin']) {
		$_SESSION['user']['admin'] = true;
	}

	$message = 'true';
	echo json_encode($message);
}
