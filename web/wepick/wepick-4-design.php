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
    <link rel="stylesheet" href="/Upick/css/wp-3-web.css">
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

        .wp-btn-product {
            background-color: #384449;
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
            <div class="col-lg-8">
                <div class="row">
                    
                </div>
                <div class="row">
                    <div class="col ">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="?page=0">
                                        <i class="fas fa-arrow-circle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="?page=1">1</a>
                                </li>
                                <li class="page-item ">
                                    <a class="page-link" href="?page=2">2</a>
                                </li>
                                <li class="page-item ">
                                    <a class="page-link" href="?page=3">3</a>
                                </li>
                                <li class="page-item ">
                                    <a class="page-link" href="?page=2">
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
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
                            <span class="price" id="price">
                                $0
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
                'right': '+=700px'
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
                'right': '-=700px'
            })
        } else false;
    })
    // // 商品選單
    // $('.wp-row').hover(function() {
    //     $('.wp-btn-product').toggleClass('wp-btn-product-hover')
    // });
    // 選擇後新增li
    $(document).on('click', '#wp-btn-product', function () {
        
        $("#wpList").empty();
        $("#price").empty();

        const row = $(this).closest('.wp-row');
        const sid = row.attr('data-sid');
        const qty = 1;

        console.log('hi',{sid, qty }, row.find('.card-title').text() )
        let wp_price = $(this).prevAll()[0];
            console.log($(wp_price).text());
            let wp_name = $(this).prevAll()[1];
            console.log($(wp_name).contents()[1].innerText);


            $("#wpList").append('<div class="list-group-item d-flex"><p class= "col-9 my-auto" >'+$(wp_name).contents()[1].innerText+'</p><h5 class="price col-3 my-auto">'+$(wp_price).text()+'</h5></div >');

$("#price").append($(wp_price).text());
        })

        const productTpl = r => {
        return `<div class="col-md-4 col-sm-12">
                        <div class="wp-row">
                            <img src="<?= WEB_ROOT ?>/images/product/<?= $ramid ?>/<?= $r['imgs'] ?>.jpg" alt="">
                            <div class="card-body">
                                <h5 class="wp-2-producttitle"><?= $r['brand'] ?></h5>
                                <div class="product-info">
                                    <p>
                                    <?= $r['name'] ?>
                                    </p>
                                </div>
                                <h5 class="price">$<?= $r['price'] ?></h5>
                                <button id="wp-btn-product" class="btn wp-btn-product wBtnNormalDark">選擇</button>
                            </div>
                        </div>
                    </div>
        `;
    }
    const pageBtnTpl = n => {
        return `<li class="page-item ${ n===page ? 'active' : '' }">
                <a class="page-link" href="javascript: changePage(${n})">${n}</a>
            </li>
        `;
    }
    </script>
</body>
</html>