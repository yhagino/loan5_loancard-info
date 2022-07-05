<?php
define('DB_DATABASE','xs082680_info');
define('DB_USERNAME','xs082680_info');
define('DB_PASSWORD','2z9Z4842h84P4j7');
define('PDO_DSN','mysql:host=localhost;dbname=' . DB_DATABASE);
try{
	$pdo = new PDO(PDO_DSN,DB_USERNAME,DB_PASSWORD);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
	echo $e->getMessage();
	exit;
}
try {
    $stmt = $pdo->query('SELECT * FROM loan where name_id = "' . $itemName .'" ');
    foreach ($stmt as $row);
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}
include( $_SERVER['DOCUMENT_ROOT'] . '/common/item.php');