<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>忘記密碼</title>
    <!--檔頭外掛-->
    <?php include __DIR__ . '/../../parts/html_head.php' ?>
    <!-- gorget.css -->
    <link rel="stylesheet" href="/Upick/css/forget.css">
</head>

<body>
    <?php include __DIR__ . '/../../parts/html_navbar.php' ?>
    <div class="container">
        <div id="memForget_HC">
            <div class="memTitle_HC">
                <h1 class="">忘記密碼</h1>
                <p>輸入電子信箱我們將寄送密碼重設信件給您。</p>
            </div>
            <div class="memForgetCon_HC">
                <p>信箱</p>
                <input onkeyup="check()" type="text" placeholder="請輸入信箱" class="memEmailCheck_HC">
                <div class="memErroCSS_HC memErroEmail_HC">
                    <i class="fas fa-exclamation-circle"> 信箱格式不正確！</i>
                </div>
                <button class="wBtnNGr memBtnShare_HC memSendBtn">寄送</button>
            </div>
        </div>
        <!-- 寄送成功彈跳窗 -->
        <div class="wSucceDark windowShare_HC">
            <div class="wWinDarkClo"><i class="fas fa-times"></i></div>
            <div class="wSucceDarkTick"><i class="fas fa-check"></i></div>
            <h4>寄送成功！<br>請至信箱收取重設密碼信件</h4>
        </div>
</body>

<!--SCRIPT-->
<?php include __DIR__ . '/../../parts/scripts.php' ?>
<script>
const email = document.querySelector('.memEmailCheck_HC');
const Erro = document.querySelector('.memErroEmail_HC');
const checkBtn = document.querySelector('.memSendBtn');
let regExp = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

function check() {
    if (email.value.match(regExp)) {
        email.style.borderColor = "#7FFFE1";
        Erro.style.display = "none";
    } else {
        email.style.borderColor = "#FF8888";
        Erro.style.display = "block";
    }
    if (email.value == "") {
        email.style.borderColor = "#7FFFE1";
        Erro.style.display = "none";
    }
}
checkBtn.onclick = function() {
    if (email.value.match(regExp)) {
        passErro.style.display = "block";
        CP1.style.borderColor = "#FF8888";
        CP2.style.borderColor = "#FF8888";
    } else {
        passErro.style.display = "none";
    }
}
</script>

</html>