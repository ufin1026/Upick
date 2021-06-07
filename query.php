<?php

require __DIR__ . '/__connect_db.php';

$sql1 = "SELECT `name`, `price`, `imgs` FROM 01cpu";
$sql2 = "SELECT `name`, `price`, `imgs` FROM 02mb";
/*$sql3 = "SELECT `name`, `price`, `imgs` FROM 03vga";
$sql4 = "SELECT `name`, `price`, `imgs`  FROM 04ram";
$sql5 = "SELECT `name`, `price`, `imgs`  FROM 05hdd";
$sql6 = "SELECT `name`, `price`, `imgs`  FROM 06ssd";
$sql7 = "SELECT `name`, `price`, `imgs`  FROM 07computercase";
$sql8 = "SELECT `name`, `price`, `imgs`  FROM 08powersupply";
$sql9 = "SELECT `name`, `price`, `imgs`  FROM 09screen";
$sql10 = "SELECT `name`, `price`, `imgs`  FROM 10radiator";*/

$stmt1 = $pdo->query($sql1);
$stmt2 = $pdo->query($sql2);
/*$stmt3 = $pdo->query($sql3);
$stmt4 = $pdo->query($sql4);
$stmt5 = $pdo->query($sql5);
$stmt6 = $pdo->query($sql6);
$stmt7 = $pdo->query($sql7);
$stmt8 = $pdo->query($sql8);
$stmt9 = $pdo->query($sql9);
$stmt10 = $pdo->query($sql10);*/

$row1 = $stmt1->fetchall();
$row2 = $stmt2->fetchall();
/*$row3 = $stmt3->fetchall();
$row4 = $stmt4->fetchall();
$row5 = $stmt5->fetchall();
$row6 = $stmt6->fetchall();
$row7 = $stmt7->fetchall();
$row8 = $stmt8->fetchall();
$row9 = $stmt9->fetchall();
$row10 = $stmt10->fetchall();*/

echo json_encode($row1, JSON_UNESCAPED_UNICODE);

echo json_encode($row2, JSON_UNESCAPED_UNICODE);

/*echo json_encode($row3, JSON_UNESCAPED_UNICODE);

echo json_encode($row4, JSON_UNESCAPED_UNICODE);

echo json_encode($row5, JSON_UNESCAPED_UNICODE);

echo json_encode($row6, JSON_UNESCAPED_UNICODE);

echo json_encode($row7, JSON_UNESCAPED_UNICODE);

echo json_encode($row8, JSON_UNESCAPED_UNICODE);

echo json_encode($row9, JSON_UNESCAPED_UNICODE);

echo json_encode($row10, JSON_UNESCAPED_UNICODE);

//echo json_encode($row, JSON_UNESCAPED_UNICODE);*/


//while($row = $stmt->fetch()){
    //echo "$row[name]<br>";
//}