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
        .up-back {
            width: 100%;
            height: 60px;
            background-color: #383E44;
            top: 0;
            position: fixed;
            z-index: 5;
        }

        .up-back a {
            color: #fff;
            font-size: 28px;
            padding: 20px;
        }
    </style>
</head>


<body  style="background-color:#383E44">
   <!-- last step -->
   <div class="up-back ">
        <a class="wWhitePgLink" href="/Upick/web/upick/upick-0.php"><i class="fas fa-angle-left"></i></a>
    </div>
   <!-- 分享頁面 -->
   <div class="wWhitePgAreaHTML9">
        <div class="wShareDark windowShare">
            <div class="wWinDarkClo"><i class="fas fa-times"></i></div>
            <h4>分享</h4>
            <div class="wShareMedia">
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-instagram-square"></i>
                <i class="fab fa-twitter-square"></i>
            </div>
            <div class="wShareArea">
                <!--網址要出現的區域-->
                <div class="wShareText"></div>
                <!--拷貝網址的按鈕-->
                <button class="wShareCopy"><i class="far fa-copy"></i></button>
            </div>
        </div>
    </div>

    <!-- <div class="cover"> -->
    <div>
        <div class="container up-container">
            <!-- 商品清單 -->
            <div class="up-productlist ">
                <h5 class="up-productlist-title">商品清單</h5>
                <div class="up-productlist-product ">
                    <p class="my-auto"> AMD AMD Ryzen 5-3500X 3.6GHz六核心 中央處理器 </p>
                    <h5 class="price my-auto"><i class="fas fa-dollar-sign"></i>4670</h5>
                </div>
                <div class="up-productlist-product ">
                    <p class="my-auto"> ASUS華碩 GT710-4H-SL-2GD5 顯示卡 </p>
                    <h5 class="price my-auto"><i class="fas fa-dollar-sign"></i>2390</h5>
                </div>
                <div class="up-productlist-product ">
                    <p class="my-auto"> Seagate希捷 新梭魚 8TB 3.5吋 SATAIII 5400轉 HDD桌上型硬碟  </p>
                    <h5 class="price my-auto"><i class="fas fa-dollar-sign"></i>5550</h5>
                </div>
                <div class="up-productlist-product ">
                    <p class="my-auto"> ANACOMDA巨蟒 巨蟒 ANACOMDA DDR4 3200 8GB 桌上型記憶體 </p>
                    <h5 class="price my-auto"><i class="fas fa-dollar-sign"></i>1499</h5>
                </div>

                <div class="d-flex justify-content-center">
                    <h4 class="m-1 up-productlist-totleprice">
                        總價
                    </h4>
                    <h4 class="price m-1 web-price">
                    <i class="fas fa-dollar-sign"></i>14109
                    </h4>
                    <h4 class="price m-1 d-lg-none">
                    <i class="fas fa-dollar-sign"></i>0
                    </h4>
                </div>
                <!-- 按鍵 -->
                <div class="d-flex justify-content-around">
                    <button class="btn wp-button wBtnNGr btn-share">分享清單</button>
                    <a href="">
                        <button class="btn wp-button wBtnNPk">結帳</button>
                    </a>

                </div>


            </div>
        </div>
    </div>


    <!--SCRIPT-->
    <?php include __DIR__ . '/../../parts/scripts.php'?>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script>

        $('.wWhitePgAreaHTML9').hide();

        $(document).ready(function(){
            $('.btn-share').on('click',function () {
                console.log('hi');
                $('.wWhitePgAreaHTML9').show();
                $('.windowShare').show();
                $('.up-container').parent().addClass('cover'); //顯示遮罩層
            });

            $('.fa-times').on('click',function () {
                $('.wWhitePgAreaHTML9').hide();
                console.log('hello');
                $('.up-container').parent().removeClass('cover');
            });
        });

    </script>
</body>

</html>