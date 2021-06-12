<?php require __DIR__.'/../../__connect_db.php';

define('WEB_ROOT', '/UPICK');

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

// 檢查 Email 是否重複
$e_sql = "SELECT 1 FROM members WHERE email=?";
$e_stmt = $pdo->prepare($e_sql);
$e_stmt->execute([$_POST['email']]);

if( $e_stmt->rowCount() ){
    $output['error'] = 'Email 重複了';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

$sql = "INSERT INTO `members`(`email`, `password`, `created_at`) VALUES ( ?, ?, NOW())";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['email'],
    md5($_POST['password']),
]);

if($stmt->rowCount()){
    $output['success'] = true;
    $output['error'] = '';
    } else {
      $output['error'] = '新增資料發生錯誤';
    }

header('Content-Type: application/json');

echo json_encode($output);

?>
    