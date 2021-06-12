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
    <title>重設密碼</title>
    <!--檔頭外掛-->
    <?php include __DIR__ . '/../../parts/html_head.php' ?>
    <!-- resetPass.css -->
    <link rel="stylesheet" href="/Upick/css/resetPass.css">
</head>

<body>
    <?php include __DIR__ . '/../../parts/html_navbar.php' ?>
    <div class="container">
        <div id="memReset_HC">
            <div class="memTitle_HC">
                <h1 class="">重設密碼</h1>
            </div>
            <div class="memRestPassCon_HC">
                <div class="memColumn_HC memRestPassword_HC">
                    <p>密碼</p>
                    <input onkeyup="checkPass()" id="memRestPassword_HC" type="password" placeholder="請輸入密碼"
                        name="password" class="memCheckPswrd1_HC">
                    <i toggle="#memRestPassword_HC"
                        class="far fa-eye-slash memPassIcon_HC memToggleRestPassword_HC"></i>
                </div>
                <div class="memColumn_HC memCheckRestPassword_HC">
                    <p>確認密碼</p>
                    <input onkeyup="checkPass()" id="memCheckRestPassword_HC" type="password" placeholder="請再次輸入密碼"
                        name="password" class="memCheckPswrd2_HC">
                    <i toggle="#memCheckRestPassword_HC"
                        class="far fa-eye-slash memPassIcon_HC memToggleCheckRestPassword_HC"></i>
                    <div class="memErroCSS_HC memCheckErro_HC">
                        <i class="fas fa-exclamation-circle"> 密碼不符！</i>
                    </div>
                </div>
                <button class="wBtnNGr memBtnShare_HC memResetBtn">送出</button>
            </div>
        </div>
        <!-- 重設成功彈跳窗 -->
        <div class="wSucceDark windowShare_HC">
            <div class="wWinDarkClo"><i class="fas fa-times"></i></div>
            <div class="wSucceDarkTick"><i class="fas fa-check"></i></div>
            <h4>密碼重設成功！</h4>
        </div>
</body>
<!--SCRIPT-->
<?php include __DIR__ . '/../../parts/scripts.php' ?>
<script>
// 確認密碼
const CP1 = document.querySelector('.memCheckPswrd1_HC');
const CP2 = document.querySelector('.memCheckPswrd2_HC');
const passErro = document.querySelector('.memCheckErro_HC');
const passCheck = document.querySelector('.memResetBtn');
passCheck.onclick = function() {
    if (CP1.value != CP2.value) {
        passErro.style.display = "block";
        CP1.style.borderColor = "#FF8888";
        CP2.style.borderColor = "#FF8888";
    } else {
        passErro.style.display = "none";
    }
}

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

// 顯示隱藏密碼
$(".memToggleRestPassword_HC").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});
// 顯示隱藏確認密碼
$(".memToggleCheckRestPassword_HC").click(function() {
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