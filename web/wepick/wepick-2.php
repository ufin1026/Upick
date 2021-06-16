<?php
//資料庫連結
require __DIR__ . '/../../__connect_db.php';
define('WEB_ROOT', '/UPICK');
session_start();

$tableid = isset($_GET['classid']) ? ($_GET['classid']) : "";
$step = isset($_GET['step']) ? ($_GET['step']) : "";

if ($step == '1') {
    $tableid = '01cpu';
    $where = "AND level='中階'";
}

if ($tableid == '18drawing_com') {
    $where = "AND id BETWEEN 1 AND 3";
}

$row = "SELECT * FROM $tableid WHERE 1 $where";
echo $row;
$row1 = $pdo->query($row)->fetchAll();

foreach ($row1 as $r) {
    echo $r['imgs'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wepickCPU</title>

    <!--檔頭外掛-->
    <?php include __DIR__ . '/../../parts/html_head.php' ?>

    <!-- wp-2.css -->
    <link rel="stylesheet" href="/Upick/css/wp-2.css">
    <link rel="stylesheet" href="/Upick/css/up-color.css">
    <!-- style -->
    <style>
        /* 卡片 */
        .wp-card {
            background-color: #FF98C930;
        }

        .line {
            background-color: #FF8888;
        }

        .product-info {
            height: 110px;
        }
    </style>
</head>

<body>
    <?php include __DIR__ . '/../../parts/html_navbar.php' ?>
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
                    <span>FAN</span>
                    <br>
                    <span>散熱零件</span>
                </div>
            </div>
            <div class="wp-point">
                <!-- 對話小尖尖 -->
                <div class="title-delta">
                </div>
                <div class="title">
                    <span>CHART</span>
                    <br>
                    <span>結帳</span>
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
                <div class="col-lg-12 wp-slide CPU">
                    <?php foreach ($row1 as $r) { ?>
                        <div class="wp-row col-4 ">
                            <img src="<?= WEB_ROOT ?>/images/product/<?= $tableid ?>/<?= $r['imgs'] ?>.jpg" alt="">
                            <h5><?= $r['name'] ?></h5>
                            <div class="product-info">
                                <p>
                                    11111111111
                                </p>
                            </div>

                            <h5 class="price">$<?= $r['price'] ?></h5>
                            <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                        </div>
                    <?php } ?>
                </div>
                <!-- MB -->
                <div class="col-lg-12 wp-slide">
                    <div class="wp-row col-4 ">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                222222222
                            </p>
                        </div>

                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    <div class="col-4 wp-row">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,adipisicin
                            </p>
                        </div>

                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    <div class="wp-row col-4">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,adipisicin
                            </p>
                        </div>
                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                </div>
                <!-- RAM -->
                <div class="col-lg-12 wp-slide">
                    <div class="wp-row col-4 ">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                333333333
                            </p>
                        </div>

                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    <div class="col-4 wp-row">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,adipisicin
                            </p>
                        </div>

                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    <div class="wp-row col-4">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,adipisicin
                            </p>
                        </div>
                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                </div>
                <!-- HDD -->
                <div class="col-lg-12 wp-slide">
                    <div class="wp-row col-4 ">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                444444
                            </p>
                        </div>

                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    <div class="col-4 wp-row">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,adipisicin
                            </p>
                        </div>

                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    <div class="wp-row col-4">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,adipisicin
                            </p>
                        </div>
                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                </div>
                <!-- SSD -->
                <div class="col-lg-12 wp-slide">
                    <div class="wp-row col-4 ">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                555555
                            </p>
                        </div>

                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    <div class="col-4 wp-row">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,adipisicin
                            </p>
                        </div>

                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    <div class="wp-row col-4">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,adipisicin
                            </p>
                        </div>
                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                </div>
                <!-- VGA -->
                <div class="col-lg-12 wp-slide">
                    <div class="wp-row col-4 ">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                6666666
                            </p>
                        </div>

                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    <div class="col-4 wp-row">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,adipisicin
                            </p>
                        </div>

                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    <div class="wp-row col-4">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,adipisicin
                            </p>
                        </div>
                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                </div>
                <!-- CASE -->
                <div class="col-lg-12 wp-slide">
                    <div class="wp-row col-4 ">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                777777
                            </p>
                        </div>

                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    <div class="col-4 wp-row">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,adipisicin
                            </p>
                        </div>

                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    <div class="wp-row col-4">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,adipisicin
                            </p>
                        </div>
                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                </div>
                <!-- POWER -->
                <div class="col-lg-12 wp-slide">
                    <div class="wp-row col-4 ">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                888888
                            </p>
                        </div>

                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    <div class="col-4 wp-row">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,adipisicin
                            </p>
                        </div>

                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    <div class="wp-row col-4">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,adipisicin
                            </p>
                        </div>
                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                </div>
                <!-- FAN -->
                <div class="col-lg-12 wp-slide">
                    <div class="wp-row col-4 ">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                9999999
                            </p>
                        </div>

                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    <div class="col-4 wp-row">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,adipisicin
                            </p>
                        </div>

                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    <div class="wp-row col-4">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,adipisicin
                            </p>
                        </div>
                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                </div>
                <!-- chart -->
                <div class="col-lg-12 wp-slide">
                    <div class="wp-row col-4 ">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                00000
                            </p>
                        </div>

                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    <div class="col-4 wp-row">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,adipisicin
                            </p>
                        </div>

                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                    <div class="wp-row col-4">
                        <img src="/Upick/images/wpimg/AMD01.jpg" alt="">
                        <h5>AMD Athlon™ 3000G</h5>
                        <div class="product-info">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,adipisicin
                            </p>
                        </div>
                        <h5 class="price">$1000</h5>
                        <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                    </div>
                </div>
            </div>
            <!-- 表單 -->
            <div class="col-lg-4 wp-card ">
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
                            <span class="price">
                                $3000
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
    <?php include __DIR__ . '/../../parts/scripts.php' ?>

    <script>
        let nowItem = 0;
        // 下一步
        $('.btn-next').click(function() {
            if (nowItem < 9) {
                console.log(nowItem);
                nowItem = nowItem + 1;
                // 進度條長度
                let lineWidth = nowItem * 11.1 + '%';
                console.log(lineWidth);
                $('.line').css('width', lineWidth);
                // 進度條對話框
                $('.wp-point').eq(nowItem).children('.title-delta').addClass('title-delta-0');
                $('.wp-point').eq(nowItem).children('.title').addClass('title-0');
                $('.wp-point').eq(nowItem).prevAll().children('.title-delta.title-delta-0').removeClass(
                    'title-delta-0').addClass('title-delta-1');
                $('.wp-point').eq(nowItem).prevAll().children('.title.title-0').removeClass('title-0').addClass(
                    'title-1');
                // 商品內容
                $('.wp-slide').css({
                    'right': '+=100%'
                })
            } else false;
        })
        // 上一步
        $('.btn-last').click(function() {
            if (nowItem > 0) {
                console.log(nowItem);
                nowItem = nowItem - 1;
                // 進度條長度
                let lineWidth = nowItem * 11.1 + '%';
                console.log(lineWidth);
                $('.line').css('width', lineWidth);
                // 進度條對話框
                $('.wp-point').eq(nowItem).children('.title-delta').removeClass('title-delta-1').addClass(
                    'title-delta-0');
                $('.wp-point').eq(nowItem).children('.title').removeClass('title-1').addClass('title-0');
                $('.wp-point').eq(nowItem).nextAll().children('.title-delta.title-delta-0').removeClass(
                    'title-delta-0');
                $('.wp-point').eq(nowItem).nextAll().children('.title.title-0').removeClass('title-0');
                // 商品內容頁
                $('.wp-slide').css({
                    'right': '-=100%'
                })
            } else false;
        })
        // 商品選單
        $('.wp-row').hover(function() {
            $('.wp-btn-product').toggleClass('wp-btn-product-hover')
        });
        // 選擇後新增li
        $('.wp-btn-product').click(function() {
            console.log('hi')
            $("#menu").append(
                '<li class="list-group-item d-flex"><p class= "col-9 my-auto" > HyperX FURY DDR4 3200 8G x2 桌上型超頻記憶體 HX432C16FB3K2 / 16 </p><h5 class="price col-3 my-auto">$1000</h5></li >'
            );
        })
    </script>
</body>

</html>