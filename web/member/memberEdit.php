<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員資料</title>
    <!--檔頭外掛-->
    <?php include __DIR__ . '/../../parts/html_head.php' ?>
    <!-- memberEdit.css -->
    <link rel="stylesheet" href="/Upick/css/memberEdit.css">
</head>

<body>
    <?php include __DIR__ . '/../../parts/html_navbar.php' ?>
    <div class="container">
        <div class="memberCen_HC testest">
            <!-- 左側Menu -->
            <div class="memLeftMenu_HC">
                <ul>
                    <li class="memLeftMenuTitle_HC">
                        <p>會員中心</p>
                    </li>
                    <li><a href="/Upick/web/member/memberEdit.php" class="memChange_HC">會員資料</a></li>
                    <li><a href="/Upick/web/member/memberEditPass.php">修改密碼</a></li>
                    <li><a href="/Upick/web/member/memberOrder.php">查詢訂單</a></li>
                    <li><a href="/Upick/web/member/memberFollow.php">追蹤清單</a></li>
                    <li><a href="/Upick/web/member/memberBranch.php">分店資訊</a></li>
                    <li><a href="/Upick/web/member/memService.php">服務條款</a></li>
                    <li><a href="/Upick/web/member/memPrivacyPolicy.php">隱私權政策</a></li>
                    <li><a href="/Upick/web/member/memberQA.php">客服中心</a></li>
                </ul>
            </div>
            <!-- 右側內容 -->
            <div class="memRightCon_HC">
                <div class="memberTitle_HC">
                    <div class="memBackBtn_HC">
                        <a href="/Upick/web/member/memberCentre.php">
                            <i class="fas fa-angle-left"></i>
                        </a>
                    </div>
                    <h1 class="memberTitleText_HC">會員資料</h1>
                    <div class="memSquareBox_HC">
                        <div class="memSquare01_HC"></div>
                        <div class="memSquare02_HC"></div>
                    </div>
                </div>
                <div class="memEditArea_HC">
                    <form class="memForm_HC" action="">
                        <div class="memColumnWhite_HC">
                            <p>會員帳號</p>
                            <p class="memAccount_HC memAccountEmail_HC">XiaoMing@gmail.com</p>
                        </div>
                        <div class="memColumnWhite_HC">
                            <p>姓名</p>
                            <input type="text" placeholder="請輸入姓名">
                        </div>
                        <div class="memColumnWhite_HC">
                            <p>生日</p>
                            <input type="date">
                        </div>
                        <div class="memColumnWhite_HC">
                            <p>手機號碼</p>
                            <input type="text" oninput="value=value.replace(/[^\d]/g,'')" placeholder="請輸入手機號碼">
                        </div>
                        <div class="memColumnWhite_HC">
                            <p>市話號碼</p>
                            <input type="text" oninput="value=value.replace(/[^\d]/g,'')" placeholder="請輸入市話號碼">
                        </div>
                        <div class="memColumnWhite_HC">
                            <p>地址</p>
                            <div id="zipcode2"></div>
                            <input type="text" placeholder="請輸入詳細地址">
                        </div>
                        <button class="wBtnNGr memEditBtnShare_HC">確認修改</button>
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
$("#twzipcode").twzipcode();

$("#zipcode2").twzipcode({
    zipcodeIntoDistrict: true, // 郵遞區號自動顯示在地區
    css: ["city memChooseAdd_HC", "town memChooseAdd_HC"], // 自訂 "城市"、"地區" class 名稱
    countyName: "city", // 自訂城市 select 標籤的 name 值
    districtName: "town" // 自訂地區 select 標籤的 name 值
});
</script>

</html>