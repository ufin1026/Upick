<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!--檔頭外掛-->
    <?php include __DIR__ . '/../../parts/html_head.php' ?>
    <!-- google font 'Freckle Face', cursive-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Freckle+Face&display=swap" rel="stylesheet">

    <!-- wp-1.css -->
    <link rel="stylesheet" href="/Upick/css/wp-1.css">
    <!-- style -->
    <style>
    .wp-button:hover {
        background-color: #BDAAFF;
    }
    </style>
</head>

<body>
    <?php include __DIR__ . '/../../parts/html_navbar.php' ?>
    <div class="wpNavSpace-CL"></div>


    <div class="row col-sm-12 justify-content-center mx-auto container">
        <div class="wp-bg wp-document d-none d-sm-block">
            <span>document</span>
            <img src="/Upick/images/wpimg/icon/document.svg" alt="">
        </div>

        <div class="wp-bg-img wp-document ">

        </div>
        <div class="text-center wp-document wp-index">
            <div class="wp-img">
                <img src="/Upick/images/wpimg/document.svg" alt="">
            </div>
            <h2 class="wp-document ">
                文書處理
            </h2>
            <div class="mx-auto wp-document wp-button-group">
                <a href="/Upick/web/wepick/wepick-2-document.php">
                    <button class="wp-button wp-document-button wp-document">一鍵組機</button>
                </a>
                <a href="/Upick/web/wepick/wepick-3-document.php">
                    <button class="wp-button wp-document-button wp-document">自選零件</button>
                </a>
            </div>
        </div>

    </div>


    <!--SCRIPT-->
    <?php include __DIR__ . '/../../parts/scripts.php' ?>
</body>

</html>