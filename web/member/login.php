<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <!--檔頭外掛-->
    <?php include __DIR__ . '/../../parts/html_head.php' ?>
    <!-- login.css -->
    <link rel="stylesheet" href="/Upick/css/login.css">
</head>

<body>
    <?php include __DIR__ . '/../../parts/html_navbar.php' ?>
    <div class="container">
        <div id="memLoginTab_HC">
            <!-- Tab分頁 -->
            <div class="memTabTitle_HC">
                <a href="javascript:void(0)" class="barItem_HC memTabStyle_HC memDivider_HC memTablink_HC memTestbtn_HC"
                    onclick="openClass(event, 'tab01_HC')">會員登入
                </a>
                <a href="javascript:void(0)" class="barItem_HC memTabStyle_HC memTablink_HC memTestbtn_HC"
                    onclick="openClass(event, 'tab02_HC')">加入會員
                </a>
            </div>
            <!-- 會員登入 -->
            <div id="tab01_HC" class="memTabCon_HC memTabClass_HC">
                <!-- 帳號 -->
                <div class="memColumn_HC">
                    <p>帳號</p>
                    <input onkeyup="check()" type="text" placeholder="請輸入信箱"
                        class="memEmailCheck_HC memAccountEmail_HC">
                    <div class="memErroCSS_HC memErroEmail_HC">
                        <i class="fas fa-exclamation-circle"> 帳號格式錯誤！</i>
                    </div>
                    <div class="memErroCSS_HC">
                        <i class="fas fa-exclamation-circle"> 帳號未被註冊！</i>
                    </div>
                </div>
                <!-- 密碼 -->
                <div class="memColumn_HC memLoginPassword_HC">
                    <p>密碼</p>
                    <input id="memLoginPassword_HC" type="password" placeholder="請輸入密碼" name="password"
                        class="memNull2_HC memPassWord_HC">
                    <i toggle="#memLoginPassword_HC" class="far fa-eye-slash memPassIcon_HC memTogglePassword_HC"></i>
                    <div class="memErroCSS_HC">
                        <i class="fas fa-exclamation-circle"> 密碼輸入錯誤！</i>
                    </div>
                </div>
                <!-- 忘記密碼 -->
                <div class="memForgetArea_HC">
                    <a class="memForget_HC" href="./forget.html">忘記密碼</a>
                </div>
                <!-- 登入按鈕 -->
                <!-- <button class="wBtnLock memBtnShare_HC">登入</button> -->
                <button disabled class="wBtnNGr memBtnShare_HC memLoginBtn">登入</button>
                <div id="memQuickLog_HC">
                    <a href="#" class="memDivider_HC"><i class="fab fa-facebook-f"></i>使用Facebook登入</a>
                    <a href="#"><i class="fab fa-google"></i>使用Google登入</a>
                </div>
            </div>
            <!-- 加入會員 -->
            <div id="tab02_HC" class="memTabCon_HC memTabClass_HC">
                <!-- 帳號 -->
                <div class="memColumn_HC">
                    <p>帳號</p>
                    <input onkeyup="check2()" type="text" placeholder="請輸入信箱"
                        class="memEmailCheck2_HC memNI_HC memAccountEmail_HC">
                    <div class="memErroCSS_HC">
                        <i class="fas fa-exclamation-circle"> 帳號已被註冊過！</i>
                    </div>
                    <div class="memErroCSS_HC memErroEmail2_HC">
                        <i class="fas fa-exclamation-circle"> 帳號格式錯誤！</i>
                    </div>
                </div>
                <!-- 密碼 -->
                <div class="memColumn_HC memRegisterPassword_HC">
                    <p>密碼</p>
                    <input onkeyup="checkPass()" id="memRegisterPassword_HC" type="password" placeholder="請輸入密碼"
                        name="password" class="memCheckPswrd1_HC memPassWord_HC">
                    <i toggle="#memRegisterPassword_HC"
                        class="far fa-eye-slash memPassIcon_HC memToggleRegisterPassword_HC"></i>
                </div>
                <div class="memColumn_HC memRegisterCheckPassword_HC">
                    <p>確認密碼</p>
                    <input onkeyup="checkPass()" id="memRegisterCheckPassword_HC" type="password" placeholder="請再次輸入密碼"
                        name="password" class="memCheckPswrd2_HC">
                    <i toggle="#memRegisterCheckPassword_HC"
                        class="far fa-eye-slash memPassIcon_HC memToggleRegisterCheckPassword_HC"></i>
                    <div class="memErroCSS_HC memCheckErro_HC">
                        <i class="fas fa-exclamation-circle"> 密碼不符！</i>
                    </div>
                </div>
                <label class="memCheck_HC">
                    <input type="checkbox" class="memChecking_HC">
                    <p>我同意 UPICK 的 <a href="./memService.html">《服務條款》</a>、<a href="./memPrivacyPolicy.html">《隱私權政策》</a>。
                    </p>
                </label>
                <button class="wBtnNGr memBtnShare_HC memRegisterBtn">加入會員</button>
                <div class="memErroCSS_HC memNoInput_HC">
                    <i class="fas fa-exclamation-circle"> 帳號/密碼/確認密碼 未填寫！</i>
                </div>
                <div class="memErroCSS_HC memNotCheck_HC">
                    <i class="fas fa-exclamation-circle"> 未同意UPICK的《服務條款》、《隱私權政策》！</i>
                </div>
                <div id="memQuickLog_HC">
                    <a href="#" class="memDivider_HC"><i class="fab fa-facebook-f"></i>使用Facebook登入</a>
                    <a href="#"><i class="fab fa-google"></i>使用Google登入</a>
                </div>
            </div>
            <!-- 註冊成功彈跳窗 -->
            <div class="wSucceDark windowShare_HC memSuccess_HC">
                <div class="wWinDarkClo"><i class="fas fa-times"></i></div>
                <div class="wSucceDarkTick"><i class="fas fa-check"></i></div>
                <h4>註冊成功！<br>歡迎您加入UPICK！</h4>
            </div>
        </div>

    </div>
</body>

<!--SCRIPT-->
<?php include __DIR__ . '/../../parts/scripts.php' ?>
<script>
// 帳號格式錯誤
const email = document.querySelector('.memEmailCheck_HC');
const email2 = document.querySelector('.memEmailCheck2_HC');
const Erro = document.querySelector('.memErroEmail_HC');
const Erro2 = document.querySelector('.memErroEmail2_HC');
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

function check2() {
    if (email2.value.match(regExp)) {
        email2.style.borderColor = "#7FFFE1";
        Erro2.style.display = "none";
    } else {
        email2.style.borderColor = "#FF8888";
        Erro2.style.display = "block";
    }
    if (email2.value == "") {
        email2.style.borderColor = "#7FFFE1";
        Erro2.style.display = "none";
    }
}

// 確認密碼
const CP1 = document.querySelector('.memCheckPswrd1_HC');
const CP2 = document.querySelector('.memCheckPswrd2_HC');
const passErro = document.querySelector('.memCheckErro_HC');
const passCheck = document.querySelector('.memRegisterBtn');

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

// 登入註冊Tab切換
function openClass(evt, className) {
    var i, x, memTablink_HCs;
    x = document.getElementsByClassName("memTabClass_HC");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }

    memTablink_HCs = document.getElementsByClassName("memTablink_HC");
    for (i = 0; i < x.length; i++) {
        memTablink_HCs[i].classList.remove("memActive_HC");
    }
    document.getElementById(className).style.display = "block";
    evt.currentTarget.classList.add("memActive_HC");
}
var mybtn = document.getElementsByClassName("memTestbtn_HC")[0];
mybtn.click();

// 會員登入-顯示隱藏密碼
$(".memTogglePassword_HC").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});
// 加入會員 - 顯示隱藏密碼
$(".memToggleRegisterPassword_HC").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});
// 加入會員 - 顯示隱藏確認密碼
$(".memToggleRegisterCheckPassword_HC").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});

// 註冊成功
const Succ = document.querySelector('.memRegisterBtn');
const SuccBox = document.querySelector('.memSuccess_HC');
const noInput = document.querySelector('.memNoInput_HC');
const noCon = document.querySelector('input');
Succ.onclick = function() {
    SuccBox.style.display = "block";
    if (noCon.value == "") {
        email2.style.borderColor = "#FF8888";
        CP1.style.borderColor = "#FF8888";
        CP2.style.borderColor = "#FF8888";
        noInput.style.display = "block";
    }

    if (noCon.value != "") {
        SuccBox.style.display = "block";
    } else {
        email2.style.borderColor = "#7FFFE1";
        CP1.style.borderColor = "#7FFFE1";
        CP2.style.borderColor = "#7FFFE1";
        // noInput.style.display = "block";
    }
}

// const checkbox = document.querySelector('.memNotCheck_HC');
// Succ.onclick = function(){
//     if($(".memChecking_HC").attr('checked')){
//         SuccBox.style.display = "block";
//     }else{
//         checkBox.style.display = "block";
//     }
// }
</script>

</html>