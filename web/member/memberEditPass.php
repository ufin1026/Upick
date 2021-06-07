<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>修改密碼</title>
    <!--檔頭外掛-->
    <?php include __DIR__ . '/../../parts/html_head.php' ?>
    <!-- memberEditPass.css -->
    <link rel="stylesheet" href="/Upick/css/memberEditPass.css">
</head>

<body>
    <?php include __DIR__ . '/../../parts/html_navbar.php' ?>
    <div class="container">
        <div class="memberCen_HC">
            <!-- 左側Menu -->
            <div class="memLeftMenu_HC">
                <ul>
                    <li class="memLeftMenuTitle_HC">
                        <p>會員中心</p>
                    </li>
                    <li><a href="/Upick/web/member/memberEdit.php">會員資料</a></li>
                    <li><a href="/Upick/web/member/memberEditPass.php" class="memChange_HC">修改密碼</a></li>
                    <li><a href="/Upick/web/member/memberOrder.php">查詢訂單</a></li>
                    <li><a href="/Upick/web/member/memberFollow.php">追蹤清單</a></li>
                    <li><a href="/Upick/web/member/memberBranch.php">分店資訊</a></li>
                    <li><a href="/Upick/web/member/memService.php">服務條款</a></li>
                    <li><a href="/Upick/web/member/memPrivacyPolicy.php">隱私權政策</a></li>
                    <li><a href="/Upick/web/member/memberQA.php">客服中心</a></li>
                </ul>
            </div>
            <!-- 右側內容 -->
            <div class="memRightCon">
                <div class="memberTitle_HC">
                    <div class="memBackBtn_HC">
                        <a href="./memberCentre.html">
                            <i class="fas fa-angle-left"></i>
                        </a>
                    </div>
                    <h1 class="memberTitleText_HC">修改密碼</h1>
                    <div class="memSquareBox_HC">
                        <div class="memSquare01_HC"></div>
                        <div class="memSquare02_HC"></div>
                    </div>
                </div>
                <div class="memEditPassArea_HC">
                    <form action="">
                        <div class="memColumnWhite_HC memOldPassword_HC">
                            <!-- 舊密碼 -->
                            <p>舊密碼</p>
                            <input id="memOldPassword_HC" type="password" placeholder="請輸入舊密碼" name="password"
                                class="memPassWord_HC">
                            <i toggle="#memOldPassword_HC"
                                class="far fa-eye-slash memPassIcon_HC memToggleOldPassword_HC"></i>
                        </div>
                        <div class="memColumnWhite_HC memNewPassword_HC">
                            <!-- 新密碼 -->
                            <p>新密碼</p>
                            <input onkeyup="checkPass()" id="memNewPassword_HC" type="password" placeholder="請輸入新密碼"
                                name="password" class="memCheckPswrd1_HC memPassWord_HC">
                            <i toggle="#memNewPassword_HC"
                                class="far fa-eye-slash memPassIcon_HC memToggleNewPassword_HC"></i>
                        </div>
                        <div class="memColumnWhite_HC memCheckPassword_HC">
                            <!-- 確認新密碼 -->
                            <p>確認新密碼</p>
                            <input onkeyup="checkPass()" id="memCheckPassword_HC" type="password" placeholder="請再次輸入新密碼"
                                name="password" class="memCheckPswrd2_HC">
                            <i toggle="#memCheckPassword_HC"
                                class="far fa-eye-slash memPassIcon_HC memToggleCheckPassword_HC"></i>
                        </div>
                        <div class="memErroCSS_HC memCheckErro_HC">
                            <i class="fas fa-exclamation-circle"> 密碼不符！</i>
                        </div>
                        <button class="wBtnNGr memEditPassBtnShare_HC">確認修改</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--區隔撐開頁尾的空間-->
    <div class="shpFooterSpace-CL"></div>
    <!--頁尾-->
    <?php include __DIR__ . '/../../parts/html_footer.php' ?>


</body>
<!--SCRIPT-->
<?php include __DIR__ . '/../../parts/scripts.php' ?>
<script>
// 確認密碼
const CP1 = document.querySelector('.memCheckPswrd1_HC');
const CP2 = document.querySelector('.memCheckPswrd2_HC');
const passErro = document.querySelector('.memCheckErro_HC');

function checkPass() {
    if (CP1.value != CP2.value) {
        passErro.style.display = "block";
        CP1.style.borderColor = "#FF8888";
        CP2.style.borderColor = "#FF8888";
    } else {
        passErro.style.display = "none";
        CP1.style.borderColor = "#7FFFE1";
        CP2.style.borderColor = "#7FFFE1";
    }
}

// 隱藏顯示舊密碼
$(".memToggleOldPassword_HC").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});
// 隱藏顯示新密碼
$(".memToggleNewPassword_HC").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});
// 隱藏顯示確認新密碼
$(".memToggleCheckPassword_HC").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});
</script>

</html>