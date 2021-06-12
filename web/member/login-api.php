<?php require __DIR__.'/../../__connect_db.php';

define('WEB_ROOT', '/UPICK');
session_start();

$output = [
    'success' => false,
    'post' => $_POST,
];

$email = isset($_POST["email"]) ? $_POST["email"] : "";
$pw = isset($_POST['password']) ? $_POST['password'] : '';
$password = md5($pw);

if(empty($email) or empty($password)){
    echo json_encode($output);
    exit;
}

$sql = "SELECT * FROM members WHERE email=? AND password=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['email'],
    md5($_POST['password']),
]);

if($stmt->rowCount()){
    $row = $stmt->fetch();
    $_SESSION['loginUser'] = $email;
    $output['success'] = true;
    $output['data'] = $row;
}
header('Content-Type: application/json');

echo json_encode($output);

?>





