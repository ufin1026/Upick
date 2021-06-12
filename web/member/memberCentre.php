<?php require __DIR__.'/../../__connect_db.php';

define('WEB_ROOT', '/UPICK');
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
    <!--檔頭外掛-->
    <?php include __DIR__ . '/../../parts/html_head.php' ?>
    <?php include __DIR__ . '/../../parts/html_navbar_phone.php' ?>
    <!-- memberCentre.css -->
    <link rel="stylesheet" href="/Upick/css/memberCentre.css">
</head>

<body>
    <?php include __DIR__ . '/../../parts/html_navbar.php' ?>
    <div class="container">
        <div class="memberCen_HC">
            <div class="memberTitle_HC">
                <h1 class="memberTitleText_HC">會員中心</h1>
                <div class="memSquareBox_HC">
                    <div class="memSquare01_HC"></div>
                    <div class="memSquare02_HC"></div>
                </div>
            </div>
            <div class="memberCardGroup_HC">
                <div class="memberCard_HC">
                    <a href="/Upick/web/member/memberEdit.php"><i class="fas fa-user-edit"></i>
                        <h3>會員資料</h3>
                    </a>
                </div>
                <div class="memberCard_HC">
                    <a href="/Upick/web/member/memberEditPass.php"><i class="fas fa-user-lock"></i>
                        <h3>修改密碼</h3>
                    </a>
                </div>
                <div class="memberCard_HC">
                    <a href="/Upick/web/member/memberOrder.php"><i class="fas fa-list-alt"></i>
                        <h3>查詢訂單</h3>
                    </a>
                </div>
                <div class="memberCard_HC">
                    <a href="/Upick/web/member/memberFollow.php"><i class="fas fa-heart"></i>
                        <h3>追蹤清單</h3>
                    </a>
                </div>
                <div class="memberCard_HC">
                    <a href="/Upick/web/member/memberBranch.php"><i class="fas fa-store"></i>
                        <h3>分店資訊</h3>
                    </a>
                </div>
                <div class="memberCard_HC">
                    <a href="/Upick/web/member/memService.php"><i class="fas fa-user-shield"></i>
                        <h3>服務條款</h3>
                    </a>
                </div>
                <div class="memberCard_HC">
                    <a href="/Upick/web/member/memPrivacyPolicy.php"><i class="fas fa-user-shield"></i>
                        <h3>隱私權政策</h3>
                    </a>
                </div>
                <div class="memberCard_HC">
                    <a href="/Upick/web/member/memberQA.php"><i class="fas fa-question"></i>
                        <h3>客服中心</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--區隔撐開頁尾的空間-->
    <div class="shpFooterSpace-CL"></div>
    <!--頁尾-->
    <?php include __DIR__ . '/../../parts/html_footer.php' ?>
    <!--SCRIPT-->
    <?php include __DIR__ . '/../../parts/scripts.php' ?>

</body>


</html>