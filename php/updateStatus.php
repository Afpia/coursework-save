<?php
require_once __DIR__ . '/helpers.php';

$polis = $_POST['polis'];
$status = $_POST['status'];

$pdo = getPDO();

$query = "UPDATE Policies 
    SET 
        PoliciStatus  = :status 
    WHERE
        PolisID  = :polis
    ";

$params = [
	'status' => $status,
	'polis' => $polis,
];

$stmt = $pdo->prepare($query);

try {
	$stmt->execute($params);
} catch (\Exception $e) {
	die($e->getMessage());
}

redirect('/page/admin.php');
