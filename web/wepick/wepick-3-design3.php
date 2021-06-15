<?php
//資料庫連結
require __DIR__ . '/../../__connect_db.php';
define('WEB_ROOT', '/UPICK');
session_start();

$cpuid = isset($_GET['classid']) ? ($_GET['classid']) : "";
$d_cpu = "SELECT * FROM $cpuid WHERE `level` = '中階'";
$d_cpu1 = $pdo->query($d_cpu)->fetchAll();

$mbid = '02mb';
$d_mb = "SELECT * FROM 02mb WHERE `level` = '中階'";
$d_mb1 = $pdo->query($d_mb)->fetchAll();

$ramid = '04ram';
$d_ram = "SELECT * FROM 04ram WHERE single_capacity = '8G'";
$d_ram1 = $pdo->query($d_ram)->fetchAll();

$hddid = '05hdd';
$d_hdd = "SELECT * FROM 05hdd WHERE `capacity` = '2TB'";
$d_hdd1 = $pdo->query($d_hdd)->fetchAll();

$ssdid = '06ssd';
$d_ssd = "SELECT * FROM 06ssd WHERE `capacity` = '960GB'";
$d_ssd1 = $pdo->query($d_ssd)->fetchAll();

$vgaid = '03vga';
$d_vga = "SELECT * FROM 03vga WHERE `level` = '中階'";
$d_vga1 = $pdo->query($d_vga)->fetchAll();

$caseid = '07computercase';
$d_case = "SELECT * FROM 07computercase WHERE `radiator fan` = '上置風扇, 下置風扇, 側置風扇'";
$d_case1 = $pdo->query($d_case)->fetchAll();

$powerid = '08powersupply';
$d_power = "SELECT * FROM 08powersupply WHERE `80plus_certification` = '金牌'";
$d_power1 = $pdo->query($d_power)->fetchAll();

$radiatorid = '10radiator';
$d_radiator = "SELECT * FROM 10radiator WHERE `fan_speed(rpm)` = '1500'";
$d_radiator1 = $pdo->query($d_radiator)->fetchAll();

$addid = '14externalharddrive';
$d_add = "SELECT * FROM 14externalharddrive WHERE `capacity` = '2TB'";
$d_add1 = $pdo->query($d_add)->fetchAll();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wepickCPU</title>

    <!--檔頭外掛-->
    <?php include __DIR__ . '/../../parts/html_head.php'?>

    <!-- wp-2.css -->
    <link rel="stylesheet" href="/Upick/css/wp-3-web.css">
    <link rel="stylesheet" href="/Upick/css/up-color.css">
    <!-- style -->
    <style>
    /* 卡片 */
    .price{
padding-right: 0;
}

    .wp-card {
            background-color: #FF98C930;
        }

        .line {
            background-color: #FF8888;
        }

        .product-info {
            height: 110px;
        }

        .wp-btn-product {
            background-color: #384449;
        }
    </style>
</head>

<body>
    <?php include __DIR__ . '/../../parts/html_navbar.php'?>
    <div class="wpNavSpace-CL"></div>

    <div class="container">
        <!-- 進度條 -->
        <div id="wp-progressBar" class="wp-progress">
            <div class="wp-point">
                <!-- 對話小尖尖 -->
                <div class="title-delta title-delta-0">
                </div>
                <div class="title title-0">
                    <span>CPU</span>
                    <br>
                    <span>中央處理器</span>
                </div>
            </div>
            <div class="wp-point">
                <!-- 對話小尖尖 -->
                <div class="title-delta">
                </div>
                <div class="title ">
                    <span>MB</span>
                    <br>
                    <span>主機板</span>
                </div>
            </div>
            <div class="wp-point">
                <!-- 對話小尖尖 -->
                <div class="title-delta ">
                </div>
                <div class="title">
                    <span>RAM</span>
                    <br>
                    <span>記憶體</span>
                </div>
            </div>
            <div class="wp-point">
                <!-- 對話小尖尖 -->
                <div class="title-delta">
                </div>
                <div class="title">
                    <span>HDD</span>
                    <br>
                    <span>傳統硬碟</span>
                </div>
            </div>
            <div class="wp-point">
                <!-- 對話小尖尖 -->
                <div class="title-delta">
                </div>
                <div class="title">
                    <span>SSD</span>
                    <br>
                    <span>固態硬碟</span>
                </div>
            </div>
            <div class="wp-point">
                <!-- 對話小尖尖 -->
                <div class="title-delta">
                </div>
                <div class="title">
                    <span>VGA</span>
                    <br>
                    <span>顯示卡</span>
                </div>
            </div>
            <div class="wp-point">
                <!-- 對話小尖尖 -->
                <div class="title-delta">
                </div>
                <div class="title">
                    <span>CASE</span>
                    <br>
                    <span>電腦機殼</span>
                </div>
            </div>
            <div class="wp-point">
                <!-- 對話小尖尖 -->
                <div class="title-delta">
                </div>
                <div class="title">
                    <span>POWER</span>
                    <br>
                    <span>電源供應器</span>
                </div>
            </div>
            <div class="wp-point">
                <!-- 對話小尖尖 -->
                <div class="title-delta">
                </div>
                <div class="title">
                    <span>RADITOR</span>
                    <br>
                    <span>散熱模組</span>
                </div>
            </div>
            <div class="wp-point">
                <!-- 對話小尖尖 -->
                <div class="title-delta">
                </div>
                <div class="title">
                    <span>ADD</span>
                    <br>
                    <span>加購商品</span>
                </div>
            </div>

            <div class="line-bg wp-design wp-design-bg"></div>
            <div class="line wp-design wp-design-bg"></div>

        </div>
        <!-- 內容 -->
        <div class="row wp-container d-flex">
            <!-- 商品選項 -->
            <div class="col-lg-8 d-flex flex-nowrap overflow-hidden product-index">
                <!-- CPU -->
                <div class="col-lg-12 wp-slide cpu">
                <?php foreach ($d_cpu1 as $cpu) {?>
                    <div class="col-lg-4 col-sm-12 ">
                    <div class="wp-row" data-sid="<?=$cpu['sid']?>">
                        <img src="<?=WEB_ROOT?>/images/product/<?=$cpuid?>/<?=$cpu['imgs']?>.jpg" alt="">
                        <h5 class="wp-2-producttitle"><?=$cpu['brand']?></h5>
                        <div class="product-info">
                            <p>
                            <?=$cpu['name']?>
                            </p>
                        </div>
                        <h5 class="price"><i class="fas fa-dollar-sign"></i><?=$cpu['price']?></h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    </div>
                    <?php }?>
                </div>
                <!-- MB -->
                <div class="col-lg-12 wp-slide mb">
                <?php foreach ($d_mb1 as $mb) {?>
                    <div class="col-lg-4 col-sm-12 ">
                    <div class="wp-row" data-sid="<?=$mb['sid']?>">
                        <img src="<?=WEB_ROOT?>/images/product/<?=$mbid?>/<?=$mb['imgs']?>.jpg" alt="">
                        <h5 class="wp-2-producttitle"><?=$mb['brand']?></h5>
                        <div class="product-info">
                            <p>
                            <?=$mb['name']?>
                            </p>
                        </div>
                        <h5 class="price"><i class="fas fa-dollar-sign"></i><?=$mb['price']?></h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    </div>
                    <?php }?>
                </div>
                <!-- RAM -->
                <div class="col-lg-12 wp-slide ram">
                <?php foreach ($d_ram1 as $ram) {?>
                    <div class="col-lg-4 col-sm-12 ">
                    <div class="wp-row" data-sid="<?=$ram['sid']?>">
                        <img src="<?=WEB_ROOT?>/images/product/<?=$ramid?>/<?=$ram['imgs']?>.jpg" alt="">
                        <h5 class="wp-2-producttitle"><?=$ram['brand']?></h5>
                        <div class="product-info">
                            <p>
                            <?=$ram['name']?>
                            </p>
                        </div>
                        <h5 class="price"><i class="fas fa-dollar-sign"></i><?=$ram['price']?></h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    </div>
                    <?php }?>
                </div>
                <!-- HDD -->
                <div class="col-lg-12 wp-slide hdd">
                <?php foreach ($d_hdd1 as $hdd) {?>
                    <div class="col-lg-4 col-sm-12 ">
                    <div class="wp-row" data-sid="<?=$hdd['sid']?>">
                        <img src="<?=WEB_ROOT?>/images/product/<?=$hddid?>/<?=$hdd['imgs']?>.jpg" alt="">
                        <h5 class="wp-2-producttitle"><?=$hdd['brand']?></h5>
                        <div class="product-info">
                            <p>
                            <?=$hdd['name']?>
                            </p>
                        </div>
                        <h5 class="price"><i class="fas fa-dollar-sign"></i><?=$hdd['price']?></h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    </div>
                    <?php }?>
                </div>
                <!-- SSD -->
                <div class="col-lg-12 wp-slide ssd">
                <?php foreach ($d_ssd1 as $ssd) {?>
                    <div class="col-lg-4 col-sm-12 ">
                    <div class="wp-row" data-sid="<?=$ssd['sid']?>">
                        <img src="<?=WEB_ROOT?>/images/product/<?=$ssdid?>/<?=$ssd['imgs']?>.jpg" alt="">
                        <h5 class="wp-2-producttitle"><?=$ssd['brand']?></h5>
                        <div class="product-info">
                            <p>
                            <?=$ssd['name']?>
                            </p>
                        </div>
                        <h5 class="price"><i class="fas fa-dollar-sign"></i><?=$ssd['price']?></h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    </div>
                    <?php }?>
                </div>
                <!-- VGA -->
                <div class="col-lg-12 wp-slide vga">
                <?php foreach ($d_vga1 as $vga) {?>
                    <div class="col-lg-4 col-sm-12 ">
                    <div class="wp-row" data-sid="<?=$vga['sid']?>">
                        <img src="<?=WEB_ROOT?>/images/product/<?=$vgaid?>/<?=$vga['imgs']?>.jpg" alt="">
                        <h5 class="wp-2-producttitle"><?=$vga['brand']?></h5>
                        <div class="product-info">
                            <p>
                            <?=$vga['name']?>
                            </p>
                        </div>
                        <h5 class="price"><i class="fas fa-dollar-sign"></i><?=$vga['price']?></h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    </div>
                    <?php }?>
                </div>
                <!-- CASE -->
                <div class="col-lg-12 wp-slide case">
                <?php foreach ($d_case1 as $case) {?>
                    <div class="col-lg-4 col-sm-12 ">
                    <div class="wp-row" data-sid="<?=$case['sid']?>">
                        <img src="<?=WEB_ROOT?>/images/product/<?=$caseid?>/<?=$case['imgs']?>.jpg" alt="">
                        <h5 class="wp-2-producttitle"><?=$case['brand']?></h5>
                        <div class="product-info">
                            <p>
                            <?=$case['name']?>
                            </p>
                        </div>
                        <h5 class="price"><i class="fas fa-dollar-sign"></i><?=$case['price']?></h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    </div>
                    <?php }?>
                </div>
                <!-- POWER -->
                <div class="col-lg-12 wp-slide power">
                <?php foreach ($d_power1 as $power) {?>
                    <div class="col-lg-4 col-sm-12 ">
                    <div class="wp-row" data-sid="<?=$power['sid']?>">
                        <img src="<?=WEB_ROOT?>/images/product/<?=$powerid?>/<?=$power['imgs']?>.jpg" alt="">
                        <h5 class="wp-2-producttitle"><?=$power['brand']?></h5>
                        <div class="product-info">
                            <p>
                            <?=$power['name']?>
                            </p>
                        </div>
                        <h5 class="price"><i class="fas fa-dollar-sign"></i><?=$power['price']?></h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    </div>
                    <?php }?>
                </div>
                <!-- RADITOR -->
                <div class="col-lg-12 wp-slide radiator">
                <?php foreach ($d_radiator1 as $radiator) {?>
                    <div class="col-lg-4 col-sm-12 ">
                    <div class="wp-row" data-sid="<?=$radiator['sid']?>">
                        <img src="<?=WEB_ROOT?>/images/product/<?=$radiatorid?>/<?=$radiator['imgs']?>.jpg" alt="">
                        <h5 class="wp-2-producttitle"><?=$radiator['brand']?></h5>
                        <div class="product-info">
                            <p>
                            <?=$radiator['name']?>
                            </p>
                        </div>
                        <h5 class="price"><i class="fas fa-dollar-sign"></i><?=$radiator['price']?></h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    </div>
                    <?php }?>
                </div>
                <!-- ADD -->
                <div class="col-lg-12 wp-slide add">
                <?php foreach ($d_add1 as $add) {?>
                    <div class="col-lg-4 col-sm-12 ">
                    <div class="wp-row" data-sid="<?=$add['sid']?>">
                        <img src="<?=WEB_ROOT?>/images/product/<?=$addid?>/<?=$add['imgs']?>.jpg" alt="">
                        <h5 class="wp-2-producttitle"><?=$add['brand']?></h5>
                        <div class="product-info">
                            <p>
                            <?=$add['name']?>
                            </p>
                        </div>
                        <h5 class="price"><i class="fas fa-dollar-sign"></i><?=$add['price']?></h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    </div>
                    <?php }?>
                </div>
            </div>
            <!-- 估價單 -->
            <div class="col-lg-4 col-sm-12 wp-card ">
                <div class="wp-card-contain">
                    <h5>商品清單</h5>
                    <ul id="wpList" class="list-group ">
                        <!-- <li class="list-group-item d-flex">
                            <p class="col-9 my-auto">AMD Athlon™ 3000G</p>

                            <h5 class="price col-3 my-auto">$1000</h5>
                        </li>
                        <li class="list-group-item d-flex">
                            <p class="col-9 my-auto">
                                HyperX FURY DDR4 3200 8G x2 桌上型超頻記憶體 HX432C16FB3K2/16</p>
                            <h5 class="price col-3 my-auto">$1000</h5>
                        </li> -->
                    </ul>
                    <div class="totalPrice card-body ">
                        <h5>
                            總價
                            <span class="price total-price" id="price">
                            <i class="fas fa-dollar-sign"></i>0
                            </span>
                        </h5>
                    </div>
                </div>
                <!-- 按鍵 -->
                <div class="d-flex justify-content-around ">
                    <button class="btn wp-button wBtnNGr btn-last">上一步</button>

                    <button class="btn wp-button wBtnNPk btn-next">下一步</button>
                </div>
            </div>
        </div>

    </div>



    <!--SCRIPT-->
    <?php include __DIR__ . '/../../parts/scripts.php'?>

    <script>

var none_selector = false;

     let nowItem = 0;
        // 下一步
        $(document).on('click', '.btn-next', function () {
            none_selector = false;
            console.log(none_selector);
            if (nowItem < 9) {

                nowItem = nowItem + 1;
                console.log(nowItem);

                if (nowItem === 9) {
                $('.btn-next').text('結帳')
            }else{
                $('.btn-next').text('下一步')
            };
                // 進度條長度
                let lineWidth = nowItem * 11.1 + '%';
                console.log(lineWidth);
                $('.line').css('width', lineWidth);
                // 進度條對話框
                $('.wp-point').eq(nowItem).children('.title-delta').addClass('title-delta-0');
                $('.wp-point').eq(nowItem).children('.title').addClass('title-0');
                $('.wp-point').eq(nowItem).prevAll().children('.title-delta.title-delta-0').removeClass('title-delta-0').addClass('title-delta-1');
                $('.wp-point').eq(nowItem).prevAll().children('.title.title-0').removeClass('title-0').addClass('title-1');
                // 商品內容
                $('.wp-slide').css({
                    'right': '+=700px'
                })
            } else false;

        })
        // 上一步
        $(document).on('click', '.btn-last', function () {
            if (nowItem > 0) {

                nowItem = nowItem - 1;
                console.log(nowItem);

                if (nowItem === 9) {
                $('.btn-next').text('結帳')
            }else{
                $('.btn-next').text('下一步')
            };
                // 進度條長度
                let lineWidth = nowItem * 11.1 + '%';
                console.log(lineWidth);
                $('.line').css('width', lineWidth);
                // 進度條對話框
                $('.wp-point').eq(nowItem).children('.title-delta').removeClass('title-delta-1').addClass('title-delta-0');
                $('.wp-point').eq(nowItem).children('.title').removeClass('title-1').addClass('title-0');
                $('.wp-point').eq(nowItem).nextAll().children('.title-delta.title-delta-0').removeClass('title-delta-0');
                $('.wp-point').eq(nowItem).nextAll().children('.title.title-0').removeClass('title-0');
                // 商品內容頁
                $('.wp-slide').css({
                    'right': '-=700px'
                })
            }
            else false;
        })

// 還沒選擇的為False
var none_selector = false;
console.log(none_selector);
        var totalPrice = Number(0);
    $(document).on('click', '#wp-btn-product', function () {
        let wp_price = $(this).prevAll()[0];

        let val_price = Number($(wp_price).text());
        console.log('totalPrice:',totalPrice);
        console.log('val_price:',val_price);

        console.log('totalPrice+val_price:',totalPrice+val_price);

        $("#price").empty();

        const row = $(this).closest('.wp-row');
        const sid = row.attr('data-sid');
        const qty = 1;

        console.log('hi',{sid, qty }, row.find('.card-title').text() )

        //     // console.log(Number($(wp_price).text()));
            let wp_name = $(this).prevAll()[1];
        //     // console.log($(wp_name).contents()[1].innerText);
        //     var totalPrice = Number(0);
        //     let val_price = Number($(wp_price).text());
        //     console.log('val : '+val_price);
            if (none_selector){
                $("#wpList div:last").remove();
                $("#wpList").append('<div class="list-group-item d-flex"><p class= "col-9 my-auto" >'+$(wp_name).contents()[1].innerText+'</p><h5 class="price col-3 my-auto"><i class="fas fa-dollar-sign"></i>'+$(wp_price).text()+'</h5></div >'
                );
                console.log('換東西',none_selector);
                val_price;
                console.log(totalPrice);

            }
            else{
            // 選擇之後變為TRUE
                $("#wpList").append('<div class="list-group-item d-flex"><p class= "col-9 my-auto" >'+$(wp_name).contents()[1].innerText+'</p><h5 class="price col-3 my-auto"><i class="fas fa-dollar-sign"></i>'+$(wp_price).text()+'</h5></div >'
                );
                none_selector = true;
                console.log('新增',none_selector );

                totalPrice = totalPrice + val_price;
                console.log(totalPrice);
                // totalPrice = totalPrice + val_price;
            }

        // console.log('total : ',totalPrice,'+',val_price,'=',totalPrice + val_price);

        $("#price").append('<i class="fas fa-dollar-sign"></i>'+totalPrice);

        })
    </script>
</body>
</html>