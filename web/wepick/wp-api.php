<?php require __DIR__ . '/../../__connect_db.php';

define('WEB_ROOT', '/UPICK');
session_start();

if (!isset($_SESSION['wp-cart'])) {
     $_SESSION['wp-cart'] = [];
}

$action = isset($_GET['action']) ? $_GET['action'] : 'list'; //操作的動作
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0; // 商品 id
$qty = isset($_GET['qty']) ? intval($_GET['qty']) : 0; // 數量
$tableid = isset($_GET['classid']) ? ($_GET['classid']) : "";

switch ($action) {
     case 'add':
          if (!empty($sid)) {
               if ($qty > 0) {
                    // 購物車內已經有這個商品資料
                    if (!empty($_SESSION['wp-cart'][$sid])) {
                         $_SESSION['wp-cart'][$sid]['quantity'] = $qty;
                    } else {
                         // 如果是新加入的商品
                         $sql = "SELECT * FROM $tableid WHERE sid=$sid";
                         $row = $pdo->query($sql)->fetch();

                         if (!empty($row)) {
                              $row['quantity'] = $qty;
                              $_SESSION['wp-cart'][$row['sid']] = $row; // 放到購物車裡
                         }
                    }
               } else {
                    unset($_SESSION['wp-cart'][$sid]); // 移除該項商品
               }
          }
          break;
}

echo json_encode($_SESSION['wp-cart'], JSON_UNESCAPED_UNICODE);
