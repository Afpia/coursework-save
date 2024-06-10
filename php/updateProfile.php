<?php
require_once __DIR__ . '/helpers.php';

$F = $_POST['F'] ?? null;
$I = $_POST['I'] ?? null;
$O = $_POST['O'] ?? null;
$email = $_POST['email'] ?? null;
$phone = $_POST['phone'] ?? null;
$date_birth = $_POST['date_birth'] ?? null;
$id = $_SESSION['user']['id'];

$full_name = "$F $I $O";

$pdo = getPDO();

$query = "UPDATE users 
    SET 
        full_name = :full_name, 
        email = :email, 
        phone = :phone,
        date_birth = :date_birth
    WHERE
        id = :id
    ";

$params = [
	'full_name' => $full_name,
	'email' => $email,
	'phone' => $phone,
	'date_birth' => $date_birth,
	'id' => $id,
];

$stmt = $pdo->prepare($query);

try {
	$stmt->execute($params);
} catch (\Exception $e) {
	die($e->getMessage());
}

redirect('/page/profile.php');
