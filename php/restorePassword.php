<?php
require_once __DIR__ . '/helpers.php';

$message = json_decode(file_get_contents('php://input'));

$password = $message->password ?? null;
$email = $message->email ?? null;

$pdo = getPDO();

$query = "UPDATE users SET password = :password WHERE email = :email";

$params = [
	'password' => password_hash($password, PASSWORD_DEFAULT),
	'email' => $email
];

$stmt = $pdo->prepare($query);

try {
	$stmt->execute($params);
} catch (\Exception $e) {
	die($e->getMessage());
}

$message = 1;
echo json_encode($message);
