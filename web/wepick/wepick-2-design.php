<?php
//資料庫連結
require __DIR__ . '/../../__connect_db.php';
define('WEB_ROOT', '/UPICK');
session_start();

$tableid = isset($_GET['classid']) ? ($_GET['classid']) : "";

if ($tableid == '18drawing_com' or '19gaming_com') {
    $between1 = 1;
    $between2 = 10;
}
if ($tableid != ('18drawing_com' or '19gaming_com')) {
    $between1 = "";
    $between2 = "";
}
$draw = "SELECT * FROM $tableid WHERE id BETWEEN $between1 AND $between2";
$draw1 = $pdo->query($draw)->fetchAll();

if(! isset($_SESSION))

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
       




.wp-card {
    height: 500px;
    background-color: #FF98C930;
    border-radius: 4px;
    padding: 16px;
    margin-top: 20px;
    margin-bottom: 20px;
    /* justify-content: center;
    align-self: center; */
}

.wp-row-p {
    background-color: #FF98C960;
    color: #fafafa;
}
    </style>
</head>

<body>
    <?php include __DIR__ . '/../../parts/html_navbar.php' ?>
    <div class="wpNavSpace-CL"></div>

    <div class="container">
        <div class="wp d-flex flex-wrap ">
            <!-- 小卡片 -->
            <div class="col-lg-8 col-sm-4 wp-product-index">
            <!-- 箭頭 -->
                <div class="wp-arrow ">
                    <div class="arrow left-arrow">
                    <i class="fas fa-angle-left"></i>
                    </div>
                    <div class="arrow right-arrow">
                    <i class="fas fa-angle-right"></i>
                    </div>
                </div>
                <div class="wp-slide">
                    <div class="list-unstyled d-flex wp-wrap ">
                        <?php foreach ($draw1 as $r) { ?>
                        <div class="col-lg-4 col-sm-12">
                            <div class="wp-row" data-sid="<?= $r['sid'] ?>">
                                <img src="<?= WEB_ROOT ?>/images/product/<?= $tableid ?>/<?= $r['imgs'] ?>.jpg" alt="">
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
                    <?php } ?>  
                    </div>
                </div>
            </div>
            <!-- 估價單 -->
            <div class="col-lg-4 col-sm-6 wp-product-index">
                <div class="wp-card">
                    <h5>商品清單</h5>
                    <ul id="wpList" class="list-group ">

                    </ul>
                    <div class="totalPrice">
                        <h5>
                            總價
                            <span class="price" id="price">
                                $0
                            </span>
                        </h5>
                    </div>
                    <!-- 按鍵 -->
                    <div class="d-flex justify-content-center">
                        <button class="btn wp-button wBtnNPk">結帳</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--SCRIPT-->
    <?php include __DIR__ . '/../../parts/scripts.php' ?>

    <script>
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

        let newsPage = 0;

        $('.wp-arrow .left-arrow').click(function () {
            console.log('hi')
            newsPage--;
            if (newsPage < 0) {
                newsPage = 6;
            };
            $('.wp-wrap').css('left', -235 * newsPage + 'px');
        })
        $('.wp-arrow .right-arrow').click(function () {
            console.log('hi')
            newsPage++;
            if (newsPage > 6) {
                newsPage = 0;
            };
            $('.wp-wrap').css('left', -235 * newsPage + 'px');
        })

        $('.wp-row').odd().addClass('wp-row-p')

        
    </script>
</body>

</html>