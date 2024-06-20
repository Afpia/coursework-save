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

function findUser(string $email): array|bool
{
	$pdo = getPDO();

	$stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email AND status_id = :status");
	$stmt->execute(['email' => $email, 'status' => '1']);

	$result = $stmt->fetch(\PDO::FETCH_ASSOC);

	return $result ? $result : false;
}

function findUserID(int $id): array|bool
{
	$pdo = getPDO();

	$stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
	$stmt->execute(['id' => $id]);

	$result = $stmt->fetch(\PDO::FETCH_ASSOC);

	return $result ? $result : false;
}

function FindInsurance(string $name): array|bool
{
	$pdo = getPDO();

	$stmt = $pdo->prepare(
		"SELECT 
    		it.TypeName,
    		it.Price,
			it.TypeID
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

function MyInsurance($value, $table, $sort = null)
{
	if (!empty($sort)) {
		$allowedSortValues = ['ASC', 'DESC'];
		$sort = in_array(strtoupper($sort), $allowedSortValues) ? strtoupper($sort) : 'ASC';
	}

	$where = '';
	$params = [];

	if (!empty($value) && !empty($table)) {
		$where = "WHERE $table = :value";
		$params['value'] = $value;
	}

	$pdo = getPDO();

	$stmt = $pdo->prepare(
		"SELECT 
            p.Started_at,
            p.Endet_at,
            p.PolisID,
            ps.StatusName,
            ps.StatusID,   
            ic.CategoryName,
            ic.CategoryImg,
            it.TypeName,
            u.full_name
        FROM 
            Policies p
        JOIN 
            InsuranceType it ON it.TypeID = p.TypeID
        JOIN 
            users u ON u.id = p.UserID 
        JOIN
            PoliciStatus ps ON ps.StatusID = p.PoliciStatus
        JOIN
            InsuranceCategory ic ON ic.CategoryID = it.CategoryID
        $where
        ORDER BY
            p.Started_at $sort"
	);

	$stmt->execute($params);

	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return $result ? $result : false;
}

function outStatus(string $status)
{
	$pdo = getPDO();

	$stmt = $pdo->prepare(
		"SELECT 
    		ps.StatusName,
			ps.StatusID
		FROM 
			PoliciStatus ps
		WHERE
			ps.StatusID <> :status"
	);
	$stmt->execute(['status' => $status]);

	$result = $stmt->fetchAll();

	return $result ? $result : false;
}

function fullNameExtract(string $full_name): array|false
{
	$FIO = explode(" ", $full_name);

	$FIO = [
		'lastname' => $FIO[0],
		'name' => $FIO[1],
		'patronomic' => $FIO[2]
	];

	return $FIO ?  $FIO : false;
}
