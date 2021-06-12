<?php require __DIR__.'/__connect_db.php';

define('WEB_ROOT', '/UPICK');
session_start();

$title = '感謝購買';

// 判斷是否登入
if(! isset($_SESSION['loginUser']) or empty($_SESSION['cart'])){
    header('Location: shopHome.php'); //回首頁
    exit;
}


$total = 0;
foreach($_SESSION['cart'] as $v){

    $total += $v['price'] * $v['quantity'];
}

$o_sql = "INSERT INTO `orders`
(`member_id`, `amount`, `order_date`) 
VALUES 
(?, ?, NOW() )";
$o_stmt = $pdo->prepare($o_sql);
$o_stmt->execite([
    $_SESSION['loginUser']['id'],
    $total,

]);

$order_id = $pdo->lastInsertId();

$d_sql = "INSERT INTO `order_details`(`order_id`, `category_id`, `price`, `quantity`) 
VALUES 
(?, ?, ?, ?)" ;
$d_stmt = $pdo->prepare($d_sql);

foreach($_SESSION['cart'] as $v){
    $d_stmt->execute([
        $order_id,
        $v['sid'],
        $v['price'],
        $v['quantity'],
    ]);
}

unset($_SESSION['cart']); // 清除購物車
