<?php
require_once __DIR__ . '/helpers.php';

$TypeID = $_POST['TypeID'];
$UserID = $_SESSION['user']['id'];
$Today = (new DateTime())->format('Y-m-d');
$EndDate = $today->format('Y-m-d');

$pdo = getPDO();

$query = "INSERT INTO Policies (TypeID, UserID , Started_at, Endet_at) VALUES (:TypeID, :UserID, :Started_at, :Endet_at)";

$params = [
	'TypeID' => $TypeID,
	'UserID' => $UserID,
	'Started_at' => $Today,
	'Endet_at' => $EndDate,
];

$stmt = $pdo->prepare($query);

try {
	$stmt->execute($params);
} catch (\Exception $e) {
	die($e->getMessage());
}

redirect('/page/catalog.php');
