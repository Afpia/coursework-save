<?php
require_once __DIR__ . '/helpers.php';

$message = json_decode(file_get_contents('php://input'));

if (isset($message->email)) {

	$user = findUser($message->email);

	if (!$user) {
		$message = 1;
	}
}
echo json_encode($message);

if (isset($message->emailAccept)) {

	$user = findUser($message->emailAccept);
	$password = $message->password;


	$pdo = getPDO();

	$query = "UPDATE users SET password = :password WHERE id = :userID";

	$params = [
		'password' => password_hash($password, PASSWORD_DEFAULT),
		'userID' => $user['id']
	];

	$stmt = $pdo->prepare($query);

	try {
		$stmt->execute($params);
	} catch (\Exception $e) {
		die($e->getMessage());
	}
}
