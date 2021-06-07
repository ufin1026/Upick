<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--檔頭外掛-->
    <?php include __DIR__ . '/../../parts/html_head.php' ?>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Freckle+Face&display=swap" rel="stylesheet">
    <!-- up style -->
    <link rel="stylesheet" href="/Upick/css/wp-0-web.css">
    <link rel="stylesheet" href="/Upick/css/wp-0-phone.css" type="text/css"
        media="only screen and (min-width: 0px) and (max-width: 767px)" />
<style>
    .wp-0-container{
        padding-top: 200px;
    }
</style>
</head>

<body>
<?php include __DIR__ . '/../../parts/html_navbar.php' ?>
     <div class="container">
        <div class="wp-0-container">
            <a href="/Upick/web/wepick/wepick-1-document.php" class="col-lg-3 col-sm-12 wp-document-hover wp-originStyle text-center">
                <div class="wp-img">
                    <img src="/Upick/images/wpimg/document.svg" alt="">
                </div>

                <h2 class="wp-document">
                    文書處理
                </h2>
                <h5 class="wp-document wp-document-info">
                    Word<br>
                    Excel<br>
                    PowerPoint
                </h5>
            </a>

            <a href="/Upick/web/wepick/wepick-1-design.php" class="col-lg-3 col-sm-12 wp-design-hover wp-originStyle text-center">
                <div class="wp-img">
                    <img src="/Upick/images/wpimg/design.svg" alt="">
                </div>
                <h2 class="wp-design">
                    繪圖設計
                </h2>
                <h5 class="wp-design wp-design-info">
                    Photoshop<br>
                    Illustrator<br>
                    Indesign<br>
                    Lightroom<br>
                    CorelDRAW
                </h5>
            </a>
            <a href="/Upick/web/wepick/wepick-1-editing.php" class="col-lg-3 col-sm-12 wp-editing-hover wp-originStyle text-center">
                <div class="wp-img">
                    <img src="/Upick/images/wpimg/editing.svg" alt="">
                </div>

                <h2 class="wp-editing">
                    影片剪輯
                </h2>
                <h5 class="wp-editing wp-editing-info">
                    Premiere<br>
                    Final cut 7<br>
                    Avid composer<br>
                    Sony Vegas<br>
                    Edius
                </h5>
            </a>
            <a href="/Upick/web/wepick/wepick-1-gaming.php" class="col-lg-3 col-sm-12 wp-gaming-hover wp-originStyle text-center">
                <div class="wp-img">
                    <img src="/Upick/images/wpimg/gaming.svg" alt="">
                </div>
                <h2 class="wp-gaming">
                    遊戲電競
                </h2>
                <h5 class="wp-gaming wp-gaming-info">
                    League of Legends<br>
                    PUBG<br>
                    R6 Rainbow Six Siege<br>
                    Cyberpunk 2077
                </h5>
            </a>


        </div>
    </div>


    <!--SCRIPT-->
    <?php include __DIR__ . '/../../parts/scripts.php' ?>
</body>

</html>