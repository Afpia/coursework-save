<?php
require_once __DIR__ . '/helpers.php';

$polisId = $_POST['polisId'] ?? null;
$polisName = $_POST['polisName'] ?? null;
$polisPrice = $_POST['polisPrice'] ?? null;

$typeId = $_POST['typeId'] ?? null;
$typeNames = $_POST['typeNames'] ?? null;
$typeValues = $_POST['typeValues'] ?? null;

$pdo = getPDO();
echo $polisPrice;
print_r($_POST);
$query = "UPDATE InsuranceType
    SET 
        TypeName = :polisName, 
        price = :polisPrice
    WHERE
        TypeID = :polisId   
    ";

$params = [
	'polisId' => $polisId,
	'polisName' => $polisName,
	'polisPrice' => $polisPrice,
];

$stmt = $pdo->prepare($query);

try {
	$stmt->execute($params);
} catch (\Exception $e) {
	die($e->getMessage());
}

for ($i = 0; count($typeId) > $i; $i++) {

	$query = "UPDATE TypeParameter
    SET 
        ParameterName = :typeNames, 
        ParameterValue = :typeValues
    WHERE
        ParameterID = :typeId   
    ";

	$params = [
		'typeNames' => $typeNames[$i],
		'typeValues' => $typeValues[$i],
		'typeId' => $typeId[$i],
	];

	$stmt = $pdo->prepare($query);

	try {
		$stmt->execute($params);
	} catch (\Exception $e) {
		die($e->getMessage());
	}
}

redirect('/page/admin.php');
