<?php
require __DIR__ . '/../../__connect_db.php';
define('WEB_ROOT', '/UPICK');
session_start();

if (!isset($_SESSION['itemcard'])) {
    $_SESSION['itemcard'] = [];
}


// 1.列表, 2.加入, 3.變更數量, 4.移除項目
// 1.list, 2.add, 3.update, 4.delete

$action = isset($_GET['action']) ? $_GET['action'] : 'list'; // 操作的動作
$itemid = isset($_GET['cardid']) ? ($_GET['cardid']) : 0; // 商品 id

$dtlPage = "SELECT * FROM 01cpu WHERE sid = $itemid";
$dtlPage2 = $pdo->query($dtlPage)->fetchAll();

echo $dtlPage2['id'];


switch ($action) {
    case 'list':
        $_SESSION['itemcard'] = $dtlPage;
}

echo json_encode($_SESSION['itemcard'], JSON_UNESCAPED_UNICODE);
