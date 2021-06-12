<?php require __DIR__ . '/../../__connect_db.php';

define('WEB_ROOT', '/UPICK');
session_start();

if (!isset($_SESSION['cart'])) {
     $_SESSION['cart'] = [];
}

$action = isset($_GET['action']) ? $_GET['action'] : 'list'; //操作的動作
$pid = isset($_GET['pid']) ? intval($_GET['pid']) : 0; // 商品 id
$qty = isset($_GET['qty']) ? intval($_GET['qty']) : 0; // 數量
$tableid = isset($_GET['classid']) ? ($_GET['classid']) : "";

switch ($action) {
     case 'add':
          if (!empty($pid)) {
               if ($qty > 0) {
                    // 購物車內已經有這個商品資料
                    if (!empty($_SESSION['cart'][$pid])) {
                         $_SESSION['cart'][$pid]['quantity'] = $qty;
                    } else {
                         // 如果是新加入的商品
                         $sql = "SELECT * FROM $tableid WHERE sid=$pid";
                         $row = $pdo->query($sql)->fetch();

                         if (!empty($row)) {
                              $row['quantity'] = $qty;
                              $_SESSION['cart'][$row['sid']] = $row; // 放到購物車裡
                         }
                    }
               } else {
                    unset($_SESSION['cart'][$pid]); // 移除該項商品
               }
          }
          break;
}

echo json_encode($_SESSION['cart'], JSON_UNESCAPED_UNICODE);
