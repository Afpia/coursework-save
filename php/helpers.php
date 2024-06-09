<?php
session_start();

require_once __DIR__ . '/config.php';

function redirect(string $path)
{
	header(header: "Location:$path");
	die();
}

function getPDO()
{
	try {
		return new \PDO('mysql:host=' . DB_HOST . ';charset=utf8;dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
	} catch (\PDOException $e) {
		die("Connection error: {$e->getMessage()}");
	}
}

function addOldValues(string $key, mixed $value)
{
	$_SESSION['old'][$key] = $value;
}

function addValidationError(string $fieldName, string $message)
{
	$_SESSION['validation'][$fieldName] = $message;
}

function findUser(string $email): array|bool
{
	$pdo = getPDO();

	$stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email AND status_id = :status");
	$stmt->execute(['email' => $email, 'status' => '1']);

	$result = $stmt->fetch(\PDO::FETCH_ASSOC);

	return $result ? $result : false;
}

function FindInsurance(string $name): array|bool
{
	$pdo = getPDO();

	$stmt = $pdo->prepare(
		"SELECT 
        it.TypeName,
        it.Price
    FROM 
      InsuranceCategory ic
    JOIN 
        InsuranceType it ON ic.CategoryID = it.CategoryID
    WHERE
      ic.CategoryName = :name
    "
	);
	$stmt->execute(['name' => $name]);

	$result = $stmt->fetchAll();

	return $result ? $result : false;
}

function FindType(string $name): array|bool
{
	$pdo = getPDO();

	$stmt = $pdo->prepare(
		"SELECT 
        tp.ParameterName,
        tp.ParameterValue
    FROM 
      InsuranceType it
    JOIN 
        TypeParameter tp ON tp.TypeID = it.TypeID
    WHERE
      it.TypeName = :name"
	);
	$stmt->execute(['name' => $name]);

	$result = $stmt->fetchAll();

	return $result ? $result : false;
}
