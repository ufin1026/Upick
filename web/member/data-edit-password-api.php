<?php require __DIR__.'/../../__connect_db.php';

define('WEB_ROOT', '/UPICK');
session_start();

header('Content-Type: application/json');

$output = [
    'success' => false,
    'error' => '',
    'code' => 0,
    'postData' => $_POST
];

$email = $_SESSION['loginUser'];

$sql = "SELECT * FROM members WHERE email=? AND password=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $email,
    md5($_POST['oldpassword']),
]);


if($stmt->rowCount()){
    $sql = "UPDATE `members` SET `password`=? WHERE `email`=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        md5($_POST['checkpassword']),
        $email,
    ]);
    $output['success'] = true;
    echo json_encode($output);
}else{
    echo json_encode($output);
}

?>