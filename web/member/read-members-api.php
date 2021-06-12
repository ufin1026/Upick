<?php require __DIR__.'../../__connect_db.php';

define('WEB_ROOT', '/UPICK');
session_start();

$row = [];
$email = $_SESSION['loginUser'];

$sql = "SELECT `mobile`, `phone`, `address`, `birthday`, `nickname` FROM members WHERE email=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$email]);

if($stmt->rowCount()){
    $row = $stmt->fetch();    
}

header('Content-Type: application/json');

echo json_encode($row);

?>





