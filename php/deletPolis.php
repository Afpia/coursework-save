<?php
require_once __DIR__ . '/helpers.php';

$pdo = getPDO();

$query = "UPDATE InsuranceType
    SET 
        is_delited  = 1 
    WHERE
        TypeID  = :id
    ";

$params = [
	'id' => $_POST['id']
];

$stmt = $pdo->prepare($query);

try {
	$stmt->execute($params);
} catch (\Exception $e) {
	die($e->getMessage());
}

redirect('/page/admin.php');
