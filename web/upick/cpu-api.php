<?php require __DIR__.'/__connect_db.php';

define('WEB_ROOT', '/UPICK');
session_start();

$sql = "SELECT `brand`, `name`, `price` FROM 01cpu";
$row = $pdo->query($sql)->fetchALL();

echo json_encode($row, JSON_UNESCAPED_UNICODE);

?>