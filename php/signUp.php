<?php
require_once __DIR__ . '/helpers.php';

$avatarPath = null;
$name = $_POST['login'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$accept_password = $_POST['accept_password'] ?? null;
$avatar = $_FILES['avatar'] ?? null;

$_SESSION['validation'] = [];

$user = findUser($email);

if ($user['status'] == 'active') {
	addValidationError(fieldName: 'email', message: 'The mail already exists');
}

if ($password != $accept_password) {
	addValidationError(fieldName: 'password', message: 'Mismatch');
};

if (!empty($avatar['name'])) {

	$types = ['image/jpeg', 'image/png'];

	if (!in_array($avatar['type'], $types)) {
		addValidationError('avatar', 'Incorrect image type');
	}

	if (($avatar['size'] / 5000000) >= 1) {
		addValidationError('avatar', 'Image larger than 5 MB');
	}
}

if (!empty($_SESSION['validation'])) {
	redirect(path: '/page/sign.up.php');
};

if (!empty($avatar['name'])) {
	$avatarPath = uploadFile($avatar, 'avatar');
}

$pdo = getPDO();

$query = "INSERT INTO users (name, email, avatar, password, status, role) VALUES (:name, :email, :avatar, :password, :status, :role)";

$params = [
	'name' => $name,
	'email' => $email,
	'avatar' => $avatarPath,
	'password' => password_hash($password, PASSWORD_DEFAULT),
	'status' => 1,
	'role' => 1
];

$stmt = $pdo->prepare($query);

try {
	$stmt->execute($params);
} catch (\Exception $e) {
	die($e->getMessage());
}

$user = findUser($email);

$_SESSION['user']['id'] = $user['id'];
$_SESSION['user']['role'] = $user['role'];

redirect('/');