<?php
//資料庫連結
require __DIR__ . '/../../__connect_db.php';
define('WEB_ROOT', '/UPICK');
session_start();

//取得01cpu品牌名稱
$cpu1 = "SELECT `brand` FROM 01cpu GROUP BY brand";
$stmt1 = $pdo->query($cpu1);
$row1 = $stmt1->fetchall();

//取得02mb品牌名稱
$mb1 = "SELECT `brand` FROM 02mb GROUP BY brand";
$stmt2 = $pdo->query($mb1);
$row2 = $stmt2->fetchall();

//取得03vga品牌名稱
$vga1 = "SELECT `brand` FROM 03vga GROUP BY brand";
$stmt3 = $pdo->query($vga1);
$row3 = $stmt3->fetchall();

//取得04ram品牌名稱
$vga1 = "SELECT `brand` FROM 04ram GROUP BY brand";
$stmt4 = $pdo->query($vga1);
$row4 = $stmt4->fetchall();

//取得05hdd品牌名稱
$vga1 = "SELECT `brand` FROM 05hdd GROUP BY brand";
$stmt5 = $pdo->query($vga1);
$row5 = $stmt5->fetchall();

//取得06ssd品牌名稱
$vga1 = "SELECT `brand` FROM 06ssd GROUP BY brand";
$stmt6 = $pdo->query($vga1);
$row6 = $stmt6->fetchall();

//取得07computercase品牌名稱
$vga1 = "SELECT `brand` FROM 07computercase GROUP BY brand";
$stmt7 = $pdo->query($vga1);
$row7 = $stmt7->fetchall();

//取得08powersupply品牌名稱
$vga1 = "SELECT `brand` FROM 08powersupply GROUP BY brand";
$stmt8 = $pdo->query($vga1);
$row8 = $stmt8->fetchall();


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--檔頭外掛-->
    <?php include __DIR__ . '/../../parts/html_head.php' ?>

    <!-- up style -->
    <link rel="stylesheet" href="/Upick/css/up-color.css">
    <link rel="stylesheet" href="/Upick/css/upick-web.css">
    <link rel="stylesheet" href="/Upick/css/upick-phone.css" type="text/css"
        media="only screen and (min-width: 0px) and (max-width: 767px)" />
    <style>
 .up-footer {
            width: 100%;
            height: 80px;
            background-color: #383E44;
            bottom: 0;
            position: fixed;
            z-index: 5;
        }
    </style>
</head>


<body style="background-color:#383E44">
    <!--navbar-->
    <?php include __DIR__ . '/../../parts/html_navbar.php' ?>
 
    <div class="container up-container d-flex">
        <!-- 商品表格 -->
        <div class="col-lg-8 col-sm-12 up-table-frame ">
            <!-- title -->
            <div class="up-table-title row">
                <div class="item">品項</div>
                <div class="brand">品牌</div>
                <div class="productname">商品名稱</div>
                <div class="itemprice">單價</div>
                <div class="amount">數量</div>
                <div class="sub">小計</div>
                <div class="add"></div>
            </div>
            <!-- 主題機 -->
            <div class="up-table row">
                <div class="item">主題機</div>
                <div class="brand">
                    <form class="widget brand">
                        <select name="brand">
                            <option>商品名稱</option>
                           
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="itemprice">$1000</div>
                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                            <option>數量</option>
                            <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option>
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price">$1000</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- subtitle -->
            <div class="up-table-subtitle row">
                <div class="col-12 item">電腦零組件</div>
            </div>
            <!-- CPU -->
            <div class="up-table row">
                <div class="item">中央處理器</div>
                <div class="brand">
                    <form class="widget brand">
                        <select name="brand">
                            <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <?php foreach ($row1 as $key => $value) {
                                    foreach ($value as $key2 => $value2) {
                                ?>
                                        <li class="option"><?= $value2 ?></li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="itemprice">$1000</div>
                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                            <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price">$1000</div>
                <div class="add" id="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 主機板 MB -->
            <div class="up-table row">
                <div class="item">主機板 MB</div>
                <div class="brand">
                    <form class="widget brand">
                        <select name="brand">
                           <option>商品名稱</option>
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <?php foreach ($row2 as $key => $value) {
                                    foreach ($value as $key2 => $value2) {
                                ?>
                                        <li class="option"><?= $value2 ?></li>

                                <?php }
                                } ?>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                           <option>商品名稱</option>
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="itemprice">$1000</div>
                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price">$1000</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 顯示卡 VGA -->
            <div class="up-table row">
                <div class="item">顯示卡 VGA</div>
                <div class="brand">
                    <form class="widget brand">
                        <select name="brand">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <?php foreach ($row3 as $key => $value) {
                                    foreach ($value as $key2 => $value2) {
                                ?>
                                        <li class="option"><?= $value2 ?></li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="itemprice">$1000</div>
                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price">$1000</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 記憶體 RAM -->
            <div class="up-table row">
                <div class="item">記憶體 RAM</div>
                <div class="brand">
                    <form class="widget brand">
                        <select name="brand">
                           <option>商品名稱</option>
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <?php foreach ($row4 as $key => $value) {
                                    foreach ($value as $key2 => $value2) {
                                ?>
                                        <li class="option"><?= $value2 ?></li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="itemprice">$1000</div>
                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price">$1000</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 傳統硬碟 HDD -->
            <div class="up-table row">
                <div class="item">傳統硬碟 HDD</div>
                <div class="brand">
                    <form class="widget brand">
                        <select name="brand">
                           <option>商品名稱</option>
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <?php foreach ($row5 as $key => $value) {
                                    foreach ($value as $key2 => $value2) {
                                ?>
                                        <li class="option"><?= $value2 ?></li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="itemprice">$1000</div>
                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price">$1000</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 固態硬碟 SSD -->
            <div class="up-table row">
                <div class="item">固態硬碟 SSD</div>
                <div class="brand">
                    <form class="widget brand">
                        <select name="brand">
                           <option>商品名稱</option>
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <?php foreach ($row6 as $key => $value) {
                                    foreach ($value as $key2 => $value2) {
                                ?>
                                        <li class="option"><?= $value2 ?></li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="itemprice">$1000</div>
                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price">$1000</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 電腦機殼 CASE -->
            <div class="up-table row">
                <div class="item">電腦機殼 CASE</div>
                <div class="brand">
                    <form class="widget brand">
                        <select name="brand">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <?php foreach ($row7 as $key => $value) {
                                    foreach ($value as $key2 => $value2) {
                                ?>
                                        <li class="option"><?= $value2 ?></li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="itemprice">$1000</div>
                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price">$1000</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 電源供應器 powersupply-->
            <div class="up-table row">
                <div class="item">電源供應器</div>
                <div class="brand">
                    <form class="widget brand">
                        <select name="brand">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <?php foreach ($row8 as $key => $value) {
                                    foreach ($value as $key2 => $value2) {
                                ?>
                                        <li class="option"><?= $value2 ?></li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="itemprice">$1000</div>
                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price">$1000</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            
            <!-- 鍵盤 / 滑鼠 -->
            <div class="up-table row">
                <div class="item">鍵盤 / 滑鼠</div>
                <div class="brand">
                    <form class="widget brand">
                        <select name="brand">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="itemprice">$1000</div>
                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price">$1000</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- subtitle -->
            <div class="up-table-subtitle row">
                <div class="col-12 item">散熱模組</div>
            </div>
            <!-- 散熱器 -->
            <div class="up-table row">
                <div class="item">散熱器</div>
                <div class="brand">
                    <form class="widget brand">
                        <select name="brand">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="itemprice">$1000</div>
                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price">$1000</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 散熱膏 -->
            <div class="up-table row">
                <div class="item">散熱膏</div>
                <div class="brand">
                    <form class="widget brand">
                        <select name="brand">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="itemprice">$1000</div>
                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price">$1000</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 水冷 -->
            <div class="up-table row">
                <div class="item">水冷</div>
                <div class="brand">
                    <form class="widget brand">
                        <select name="brand">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="itemprice">$1000</div>
                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price">$1000</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- subtitle -->
            <div class="up-table-subtitle row">
                <div class="col-12 item">周邊零件</div>
            </div>
            <!-- 外接硬碟 -->
            <div class="up-table row">
                <div class="item">外接硬碟</div>
                <div class="brand">
                    <form class="widget brand">
                        <select name="brand">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="itemprice">$1000</div>
                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price">$1000</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 隨身碟 USB -->
            <div class="up-table row">
                <div class="item">隨身碟 USB</div>
                <div class="brand">
                    <form class="widget brand">
                        <select name="brand">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="itemprice">$1000</div>
                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price">$1000</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 記憶卡 -->
            <div class="up-table row">
                <div class="item">記憶卡</div>
                <div class="brand">
                    <form class="widget brand">
                        <select name="brand">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value"></span>
                            <ul class="optList hidden">
                                <li class="option">品牌</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">商品名稱</li>
                                <li class="option">pro2</li>
                                <li class="option">pro3</li>
                                <li class="option">pro4</li>
                                <li class="option">pro5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="itemprice">$1000</div>
                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option>商品名稱</option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">
                                <li class="option">0</li>
                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price">$1000</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>



        </div>
        <!-- 估價單 -->
        <div class="col-lg-4 col-sm-12 up-card">
            <div class="d-flex justify-content-between">
                <h5>商品清單</h5>
                <a class="up-card-clear my-auto">
                    <h5>清空</h5>
                </a>
            </div>

            <div id="upList" class="up-list-group">
                <div class=" list-group-item d-flex">
                    <div class="col-11">
                        <p class="my-auto "> HyperX FURY DDR4 3200 8G x2 桌上型超頻記憶體 HX432C16FB3K2/16</p>
                        <div class="d-flex justify-content-between">
                            <form class="widget amount">
                                <select name="amount">
                                    <option>數量</option>
                                    <option>pro2</option>
                                    <option>pro3</option>
                                    <option>pro4</option>
                                    <option>pro5</option>
                                </select>
                                <div class="select">
                                    <span class="value"></span>
                                    <ul class="optList hidden">
                                        <li class="option">0</li>
                                        <li class="option">1</li>
                                        <li class="option">2</li>
                                        <li class="option">3</li>
                                        <li class="option">4</li>
                                        <li class="option">5</li>
                                    </ul>
                                </div>
                            </form>
                            <span class="price my-auto">$1000</span>
                        </div>
                    </div>
                    <div class="col-1 my-auto trashcan">
                        <i class=" fas fa-trash "></i>
                    </div>
                </div>

            </div>

            <div class="totalPrice d-flex justify-content-center">
                <h5>
                    總價
                    <span class="price">
                        $3000
                    </span>
                </h5>
            </div>
            <!-- 按鍵 -->
            <div class="d-flex justify-content-around">
                <a href="/Upick/web/upick/upick-list.php"><button class="btn wp-button wBtnNGr">匯出清單</button>
                </a>
                <button class="btn wp-button wBtnNPk">結帳</button>
            </div>
        </div>
    </div>
    <!-- footer for smartphone -->
    <div class="up-footer d-lg-none">
        <div class="d-flex justify-content-around pt-3">
            <a href="/Upick/web/upick/upick-list.php"><button class="btn wp-button wBtnNGr">匯出清單</button>
            </a>
            <button class="btn wp-button wBtnNPk">結帳</button>
        </div>
    </div>

    <!--SCRIPT-->
    <?php include __DIR__ . '/../../parts/scripts.php' ?>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script>
    
      
        // 下拉選單
        NodeList.prototype.forEach = function (callback) {
            Array.prototype.forEach.call(this, callback);
        }
        function deactivateSelect(select) {
            if (!select.classList.contains('active')) return;

            var optList = select.querySelector('.optList');

            optList.classList.add('hidden');
            select.classList.remove('active');
        }

        function activeSelect(select, selectList) {
            if (select.classList.contains('active')) return;

            selectList.forEach(deactivateSelect);
            select.classList.add('active');
        };

        function toggleOptList(select, show) {
            var optList = select.querySelector('.optList');

            optList.classList.toggle('hidden');
        }

        function highlightOption(select, option) {
            var optionList = select.querySelectorAll('.option');

            optionList.forEach(function (other) {
                other.classList.remove('highlight');
            });

            option.classList.add('highlight');
        };

        function updateValue(select, index) {
            var nativeWidget = select.previousElementSibling;
            var value = select.querySelector('.value');
            var optionList = select.querySelectorAll('.option');

            nativeWidget.selectedIndex = index;
            value.innerHTML = optionList[index].innerHTML;
            highlightOption(select, optionList[index]);
        };

        function getIndex(select) {
            var nativeWidget = select.previousElementSibling;

            return nativeWidget.selectedIndex;
        };

        window.addEventListener("load", function () {
            var form = document.querySelector('form');

            form.classList.remove("no-widget");
            form.classList.add("widget");
        });

        window.addEventListener('load', function () {
            var selectList = document.querySelectorAll('.select');

            selectList.forEach(function (select) {
                var optionList = select.querySelectorAll('.option');

                optionList.forEach(function (option) {
                    option.addEventListener('mouseover', function () {
                        highlightOption(select, option);
                    });
                });

                select.addEventListener('click', function (event) {
                    toggleOptList(select);
                });

                select.addEventListener('focus', function (event) {
                    activeSelect(select, selectList);
                });

                select.addEventListener('blur', function (event) {
                    deactivateSelect(select);
                });
            });
        });

        window.addEventListener('load', function () {
            var selectList = document.querySelectorAll('.select');

            selectList.forEach(function (select) {
                var optionList = select.querySelectorAll('.option'),
                    selectedIndex = getIndex(select);

                select.tabIndex = 0;
                select.previousElementSibling.tabIndex = -1;

                updateValue(select, selectedIndex);

                optionList.forEach(function (option, index) {
                    option.addEventListener('click', function (event) {
                        updateValue(select, index);
                    });
                });

                select.addEventListener('keyup', function (event) {
                    var length = optionList.length,
                        index = getIndex(select);

                    if (event.keyCode === 27) { deactivateSelect(select); }
                    if (event.keyCode === 40 && index < length - 1) { index++; }
                    if (event.keyCode === 38 && index > 0) { index--; }

                    updateValue(select, index);
                });
            });
        });


        // 新增

        $(document).on('click', '.add', function () {
            console.log('hi')
            $("#upList").append('<div class=" list-group-item d-flex"><div class="col-11"><p class="my-auto "> HyperX FURY DDR4 3200 8G x2 桌上型超頻記憶體 HX432C16FB3K2/16</p><div class="d-flex justify-content-between"><form class="widget amount"><select name="amount"><option>數量</option><option>pro2</option><option>pro3</option><option>pro4</option><option>pro5</option></select><div class="select"><span class="value"></span><ul class="optList hidden"><li class="option">0</li><li class="option">1</li><li class="option">2</li><li class="option">3</li><li class="option">4</li><li class="option">5</li></ul></div></form><span class="price my-auto">$1000</span></div></div><div class="col-1 my-auto trashcan"><i class=" fas fa-trash "></i></div></div></div>');
        })
        // var upList = document.getElementById('upList');
        // var newList = document.createElement('div');
        // var textNode = document.createTextNode("Hello");
        // newList.appendChild(textNode);
        // upList.appendChild(newList);

        $(document).on('click', '.trashcan', function () {
            console.log('remove')
            $(this).parent().remove()
        })
        // 清空
        $(document).on('click', '.up-card-clear', function () {
            console.log('clear')
            $('#upList').children().remove()
        })
    </script>
</body>

</html>