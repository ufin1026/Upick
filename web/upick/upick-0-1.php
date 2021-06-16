<?php
//資料庫連結
require __DIR__ . '/../../__connect_db.php';
define('WEB_ROOT', '/UPICK');
session_start();

//取得17document_com品牌名稱
$computer1 = "SELECT * FROM 17document_com ";
$row_computer = $pdo->query($computer1)->fetchall();

//取得01cpu品牌名稱
$cpu1 = "SELECT * FROM 01cpu ";
$row_cpu = $pdo->query($cpu1)->fetchall();

//取得02mb品牌名稱
$mb1 = "SELECT * FROM 02mb ";
$row_mb = $pdo->query($mb1)->fetchall();

//取得03vga品牌名稱
$vga1 = "SELECT * FROM 03vga ";
$row_vga = $pdo->query($vga1)->fetchall();

//取得04ram品牌名稱
$ram1 = "SELECT * FROM 04ram ";
$row_ram = $pdo->query($ram1)->fetchall();

//取得05hdd品牌名稱
$hdd1 = "SELECT * FROM 05hdd ";
$row_hdd = $pdo->query($hdd1)->fetchall();

//取得06ssd品牌名稱
$ssd1 = "SELECT * FROM 06ssd ";
$row_ssd = $pdo->query($ssd1)->fetchall();

//取得07computercase品牌名稱
$case1 = "SELECT * FROM 07computercase ";
$row_case = $pdo->query($case1)->fetchall();

//取得08powersupply品牌名稱
$power1 = "SELECT * FROM 08powersupply ";
$row_power = $pdo->query($power1)->fetchall();

//取得10radiator品牌名稱
$radiator1 = "SELECT * FROM 10radiator ";
$row_radiator = $pdo->query($radiator1)->fetchall();

//取得11thermalgrease品牌名稱
$thermalgrease1 = "SELECT * FROM 11thermalgrease ";
$row_thermalgrease = $pdo->query($thermalgrease1)->fetchall();

//取得13watercooled品牌名稱
$watercooled1 = "SELECT * FROM 13watercooled ";
$row_watercooled = $pdo->query($watercooled1)->fetchall();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--檔頭外掛-->
    <?php include __DIR__ . '/../../parts/html_head.php'?>

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

    .select .option {
    padding: 5px 10px;
        }

    .select .optList{
    max-height: 300px;
        }

    .product-option {
    display: flex;
    justify-content: space-between;
    wrap: nowrap;
        }
    </style>
</head>


<body style="background-color:#383E44">
    <!--navbar-->
    <?php include __DIR__ . '/../../parts/html_navbar.php'?>

    <div class="container up-container d-flex">
        <!-- 商品表格 -->
        <div class="col-lg-8 col-sm-12 up-table-frame ">
            <!-- title -->
            <div class="up-table-title row">
                <div class="item">品項</div>
                <div class="productname">商品名稱</div>
                <div class="amount">數量</div>
                <div class="sub">小計</div>
                <div class="add"></div>
            </div>
            <!-- 主題機 -->
            <div class="up-table row">
                <div class="item">主題機</div>

               <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select" name="productname" id="productname">
                            <span class="value"></span>
                            <ul class="optList hidden ">
                            <li class="option " >商品名稱</li>
                            <?php foreach ($row_computer as $com) {?>
                                <li class="option product-option" data-sid="<?=$com['sid']?>" data-name="<?=$com['name']?>" data-price="<?=$com['price']?>"  >
                                    <span class="product-brand">
                                        <?=$com['brand']?>
                                    </span>
                                    <span class="product-name">
                                        <?=$com['name']?>
                                    </span>
                                   <span class="price product-price" >
                                       <i class="fas fa-dollar-sign"></i><?=$com['price']?>
                                   </span>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </form>
                </div>

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

                                <li class="option" value="1">1</li>
                                <li class="option" value="2">2</li>
                                <li class="option" value="3">3</li>
                                <li class="option" value="4">4</li>
                                <li class="option" value="5">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price"><i class="fas fa-dollar-sign"></i>0</div>
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
                <div class="item">中央處理器 CPU</div>
                <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select" name="productname" id="productname">
                            <span class="value"></span>
                            <ul class="optList hidden ">
                            <li class="option " >商品名稱</li>
                            <?php foreach ($row_cpu as $cpu) {?>
                                <li class="option product-option" data-sid="<?=$cpu['sid']?>" data-name="<?=$cpu['name']?>" data-price="<?=$cpu['price']?>"  >
                                    <span class="product-brand">
                                        <?=$cpu['brand']?>
                                    </span>
                                    <span class="product-name">
                                        <?=$cpu['name']?>
                                    </span>
                                   <span class="price product-price" >
                                       <i class="fas fa-dollar-sign"></i><?=$cpu['price']?>
                                   </span>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                            <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select qty">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">

                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price"><i class="fas fa-dollar-sign"></i>0</div>
                <div class="add" id="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 主機板 MB -->
            <div class="up-table row">
                <div class="item">主機板 MB</div>
                <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select" name="productname" id="productname">
                            <span class="value"></span>
                            <ul class="optList hidden ">
                            <li class="option " >商品名稱</li>
                            <?php foreach ($row_mb as $mb) {?>
                                <li class="option product-option" data-sid="<?=$mb['sid']?>"data-name="<?=$mb['name']?>" data-price="<?=$mb['price']?>" ><span>
                                    <?=$mb['brand']?>
                                </span>
                                   <?=$mb['name']?><span class="price">
                                       <i class="fas fa-dollar-sign"></i><?=$mb['price']?>
                                   </span>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">

                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price"><i class="fas fa-dollar-sign"></i>0</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 顯示卡 VGA -->
            <div class="up-table row">
                <div class="item">顯示卡 VGA</div>
                <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select" name="productname" id="productname">
                            <span class="value"></span>
                            <ul class="optList hidden ">
                            <li class="option " >商品名稱</li>
                            <?php foreach ($row_vga as $vga) {?>
                                <li class="option product-option" data-sid="<?=$vga['sid']?>"data-name="<?=$vga['name']?>" data-price="<?=$vga['price']?>" ><span>
                                    <?=$vga['brand']?>
                                </span>
                                   <?=$vga['name']?><span class="price">
                                       <i class="fas fa-dollar-sign"></i><?=$vga['price']?>
                                   </span>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">

                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price"><i class="fas fa-dollar-sign"></i>0</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 記憶體 RAM -->
            <div class="up-table row">
                <div class="item">記憶體 RAM</div>
                <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select" name="productname" id="productname">
                            <span class="value"></span>
                            <ul class="optList hidden ">
                            <li class="option " >商品名稱</li>
                            <?php foreach ($row_ram as $ram) {?>
                                <li class="option product-option" data-sid="<?=$ram['sid']?>"data-name="<?=$ram['name']?>" data-price="<?=$ram['price']?>" ><span>
                                    <?=$ram['brand']?>
                                </span>
                                   <?=$ram['name']?><span class="price">
                                       <i class="fas fa-dollar-sign"></i><?=$ram['price']?>
                                   </span>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">

                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price"><i class="fas fa-dollar-sign"></i>0</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 傳統硬碟 HDD -->
            <div class="up-table row">
                <div class="item">傳統硬碟 HDD</div>
                <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select" name="productname" id="productname">
                            <span class="value"></span>
                            <ul class="optList hidden ">
                            <li class="option " >商品名稱</li>
                            <?php foreach ($row_hdd as $hdd) {?>
                                <li class="option product-option" data-sid="<?=$hdd['sid']?>"data-name="<?=$hdd['name']?>" data-price="<?=$hdd['price']?>" ><span>
                                    <?=$hdd['brand']?>
                                </span>
                                   <?=$hdd['name']?><span class="price">
                                       <i class="fas fa-dollar-sign"></i><?=$hdd['price']?>
                                   </span>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">

                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price"><i class="fas fa-dollar-sign"></i>0</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 固態硬碟 SSD -->
            <div class="up-table row">
                <div class="item">固態硬碟 SSD</div>
                <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select" name="productname" id="productname">
                            <span class="value"></span>
                            <ul class="optList hidden ">
                            <li class="option " >商品名稱</li>
                            <?php foreach ($row_ssd as $ssd) {?>
                                <li class="option product-option" data-sid="<?=$ssd['sid']?>"data-name="<?=$ssd['name']?>" data-price="<?=$ssd['price']?>" ><span>
                                    <?=$ssd['brand']?>
                                </span>
                                   <?=$ssd['name']?><span class="price">
                                       <i class="fas fa-dollar-sign"></i><?=$ssd['price']?>
                                   </span>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">

                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price"><i class="fas fa-dollar-sign"></i>0</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 電腦機殼 CASE -->
            <div class="up-table row">
                <div class="item">電腦機殼 CASE</div>
               <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select" name="productname" id="productname">
                            <span class="value"></span>
                            <ul class="optList hidden ">
                            <li class="option " >商品名稱</li>
                            <?php foreach ($row_case as $case) {?>
                                <li class="option product-option" data-sid="<?=$case['sid']?>"data-name="<?=$case['name']?>" data-price="<?=$case['price']?>" ><span>
                                    <?=$case['brand']?>
                                </span>
                                   <?=$case['name']?><span class="price">
                                       <i class="fas fa-dollar-sign"></i><?=$case['price']?>
                                   </span>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </form>
                </div>

                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">

                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price"><i class="fas fa-dollar-sign"></i>0</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 電源供應器 powersupply-->
            <div class="up-table row">
                <div class="item">電源供應器 POWER</div>
               <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select" name="productname" id="productname">
                            <span class="value"></span>
                            <ul class="optList hidden ">
                            <li class="option " >商品名稱</li>
                            <?php foreach ($row_power as $power) {?>
                                <li class="option product-option" data-sid="<?=$power['sid']?>"data-name="<?=$power['name']?>" data-price="<?=$power['price']?>" ><span>
                                    <?=$power['brand']?>
                                </span>
                                   <?=$power['name']?><span class="price">
                                       <i class="fas fa-dollar-sign"></i><?=$power['price']?>
                                   </span>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </form>
                </div>

                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">

                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price"><i class="fas fa-dollar-sign"></i>0</div>
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
            <!-- 散熱器 radiator-->
            <div class="up-table row">
                <div class="item">散熱器 RADIATOR</div>
               <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select" name="productname" id="productname">
                            <span class="value"></span>
                            <ul class="optList hidden ">
                            <li class="option " >商品名稱</li>
                            <?php foreach ($row_radiator as $radiator) {?>
                                <li class="option product-option" data-sid="<?=$radiator['sid']?>"data-name="<?=$radiator['name']?>" data-price="<?=$radiator['price']?>" ><span>
                                    <?=$radiator['brand']?>
                                </span>
                                   <?=$radiator['name']?><span class="price">
                                       <i class="fas fa-dollar-sign"></i><?=$radiator['price']?>
                                   </span>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </form>
                </div>

                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">

                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price"><i class="fas fa-dollar-sign"></i>0</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 散熱膏 thermalgrease-->
            <div class="up-table row">
                <div class="item">散熱膏 THERMAL GREASE</div>
               <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select" name="productname" id="productname">
                            <span class="value"></span>
                            <ul class="optList hidden ">
                            <li class="option " >商品名稱</li>
                            <?php foreach ($row_thermalgrease as $grease) {?>
                                <li class="option product-option" data-sid="<?=$grease['sid']?>"data-name="<?=$grease['name']?>" data-price="<?=$grease['price']?>" ><span>
                                    <?=$grease['brand']?>
                                </span>
                                   <?=$grease['name']?><span class="price">
                                       <i class="fas fa-dollar-sign"></i><?=$grease['price']?>
                                   </span>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </form>
                </div>

                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">

                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price"><i class="fas fa-dollar-sign"></i>0</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>

            <!-- 水冷 watercooled-->
            <div class="up-table row">
                <div class="item">水冷 WATER COOLING</div>
               <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select" name="productname" id="productname">
                            <span class="value"></span>
                            <ul class="optList hidden ">
                            <li class="option " >商品名稱</li>
                            <?php foreach ($row_watercooled as $cooled) {?>
                                <li class="option product-option" data-sid="<?=$cooled['sid']?>"data-name="<?=$cooled['name']?>" data-price="<?=$cooled['price']?>" ><span>
                                    <?=$cooled['brand']?>
                                </span>
                                   <?=$cooled['name']?><span class="price">
                                       <i class="fas fa-dollar-sign"></i><?=$cooled['price']?>
                                   </span>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </form>
                </div>

                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">

                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price"><i class="fas fa-dollar-sign"></i>0</div>
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
            <!-- 外接硬碟 externalharddrive-->
            <div class="up-table row">
                <div class="item">外接硬碟</div>
               <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select" name="productname" id="productname">
                            <span class="value"></span>
                            <ul class="optList hidden ">
                            <li class="option " >商品名稱</li>
                            <?php foreach ($row_ram as $ram) {?>
                                <li class="option product-option" data-sid="<?=$ram['sid']?>"><span>
                                    <?=$ram['brand']?>
                                </span>
                                   <?=$ram['name']?><span class="price">
                                       <i class="fas fa-dollar-sign"></i><?=$ram['price']?>
                                   </span>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </form>
                </div>

                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">

                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price"><i class="fas fa-dollar-sign"></i>0</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 隨身碟 USB -->
            <div class="up-table row">
                <div class="item">隨身碟 USB</div>
               <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select" name="productname" id="productname">
                            <span class="value"></span>
                            <ul class="optList hidden ">
                            <li class="option " >商品名稱</li>
                            <?php foreach ($row_ram as $ram) {?>
                                <li class="option product-option" data-sid="<?=$ram['sid']?>"><span>
                                    <?=$ram['brand']?>
                                </span>
                                   <?=$ram['name']?><span class="price">
                                       <i class="fas fa-dollar-sign"></i><?=$ram['price']?>
                                   </span>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </form>
                </div>

                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">

                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price"><i class="fas fa-dollar-sign"></i>0</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>
            <!-- 記憶卡 MEMORY CARD-->
            <div class="up-table row">
                <div class="item">記憶卡 MEMORY CARD</div>
               <div class="productname">
                    <form class="widget productname">
                        <select name="productname">
                            <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>

                        <div class="select" name="productname" id="productname">
                            <span class="value"></span>
                            <ul class="optList hidden ">
                            <li class="option " >商品名稱</li>
                            <?php foreach ($row_ram as $ram) {?>
                                <li class="option product-option" data-sid="<?=$ram['sid']?>"><span>
                                    <?=$ram['brand']?>
                                </span>
                                   <?=$ram['name']?><span class="price">
                                       <i class="fas fa-dollar-sign"></i><?=$ram['price']?>
                                   </span>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </form>
                </div>

                <div class="amount">
                    <form class="widget amount">
                        <select name="amount">
                           <option></option>
                            <!-- <option>pro2</option>
                            <option>pro3</option>
                            <option>pro4</option>
                            <option>pro5</option> -->
                        </select>
                        <div class="select">
                            <span class="value">品牌</span>
                            <ul class="optList hidden">

                                <li class="option">1</li>
                                <li class="option">2</li>
                                <li class="option">3</li>
                                <li class="option">4</li>
                                <li class="option">5</li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="sub price"><i class="fas fa-dollar-sign"></i>0</div>
                <div class="add">
                    <span>
                        <i class="fas fa-plus-circle "></i>
                    </span>
                </div>
            </div>

        </div>
        <!-- 估價單 -->
        <div class="col-lg-4 col-sm-6 up-card">
            <div class="d-flex justify-content-between">
                <h5>商品清單</h5>
                <a class="up-card-clear my-auto">
                    <h5>清空</h5>
                </a>
            </div>
            <div id="upList" class="up-list-group">
            </div>
            <div class="totalPrice d-flex justify-content-center">
                <h5>
                    總價
                    <span class="price" id="price" >
                    <i class="fas fa-dollar-sign"></i>
                                0
                    </span>
                </h5>
            </div>
            <!-- 按鍵 -->
            <div class="d-flex justify-content-around">
                <a href="/Upick/web/upick/upick-list.php"><button class="btn wp-button wBtnNGr">匯出清單</button>
                </a>
                <button class="btn wp-button wBtnNPk">加入購物車</button>
            </div>
        </div>
    </div>
    <!-- footer for smartphone -->
    <div class="up-footer d-lg-none">
        <div class="d-flex justify-content-around pt-3">
            <a href="/Upick/web/upick/upick-list.php"><button class="btn wp-button wBtnNGr">匯出清單</button>
            </a>
            <button class="btn wp-button wBtnNPk">加入購物車</button>
        </div>
    </div>

    <!--SCRIPT-->
    <?php include __DIR__ . '/../../parts/scripts.php'?>
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

        var totalPrice = Number(0);


        // 清空
        $(document).on('click', '.up-card-clear', function () {
            console.log('clear')
            $('#upList').children().remove();
            totalPrice = 0
            $("#price").empty();
        $("#price").append('<i class="fas fa-dollar-sign"></i>'+totalPrice);
        })


        // 點商品改價錢
        $(document).on('click', '.product-option', function () {

            // $("#price").empty();

        const row = $(this).closest('.product-option');
        const sid = row.attr('data-sid');
        const name = row.attr('data-name');
        const price = row.attr('data-price');
        const qty = 1;

        console.log('hi',{sid, qty , name , price }, row.find('.card-title').text() )
        let up_price = price;
        console.log(up_price);

        $($(this).parents().siblings('.sub')[0]).empty();
        $($(this).parents().siblings('.sub')[0]).append('<i class="fas fa-dollar-sign"></i>'+up_price);

})

// 新增商品到清單
var totalPrice = Number(0);
$(document).on('click', '.add', function () {

    let wp_price = $(this).prevAll()[0];

        let val_price = Number($(wp_price).text());
        console.log('totalPrice:',totalPrice);
        console.log('val_price:',val_price);
        totalPrice = totalPrice + val_price;
        console.log(totalPrice);

console.log($(this).siblings()[3].innerText);
console.log($(this).siblings()[1].innerText);
let price = $(this).siblings()[3].innerText
let name = $(this).siblings()[1].innerText
$("#upList").append('<div class=" list-group-item d-flex"><div class="col-11"><p class="my-auto ">' +name+' </p><div class="d-flex justify-content-between"><span class="price my-auto"><i class="fas fa-dollar-sign"></i>'+price+'</span></div></div><div class="col-1 my-auto trashcan"><i class=" fas fa-trash "></i></div></div></div>');
$("#price").empty();
$("#price").append('<i class="fas fa-dollar-sign"></i>'+totalPrice);

    })

    // 改總金額
    $(document).on('click', '.trashcan', function () {
            console.log('remove')
            wp_price = $(this).prevAll()[0];

            // console.log($($(wp_price).children()[1]).text());

            this_price = Number($($(wp_price).children()[1]).text())
            console.log('thisprice:',this_price);

                // this_price = Number(price.text())

                console.log('thistotal',totalPrice);
                totalPrice = totalPrice - this_price;
                console.log(totalPrice-this_price);
            $(this).parent().remove();
            $("#price").empty();
                $("#price").append('<i class="fas fa-dollar-sign"></i>'+totalPrice);
        })



</script>
// </body>

</html>