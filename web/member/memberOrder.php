<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>查詢訂單</title>
    <!--檔頭外掛-->
    <?php include __DIR__ . '/../../parts/html_head.php' ?>
    <!-- memberOrder.css -->
    <link rel="stylesheet" href="/Upick/css/memberOrder.css">
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
                    <li><a href="/Upick/web/member/memberEditPass.php">修改密碼</a></li>
                    <li><a href="/Upick/web/member/memberOrder.php" class="memChange_HC">查詢訂單</a></li>
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
                        <a href="/Upick/web/member/memberCentre.php">
                            <i class="fas fa-angle-left"></i>
                        </a>
                    </div>
                    <h1 class="memberTitleText_HC">查詢訂單</h1>
                    <div class="memSquareBox_HC">
                        <div class="memSquare01_HC"></div>
                        <div class="memSquare02_HC"></div>
                    </div>
                </div>
                <!-- 訂單列表 -->
                <div class="memTableArea_HC">
                    <table id="memWebTable_HC">
                        <thead>
                            <tr>
                                <th class="memSerialNumTh_HC">訂單編號</th>
                                <th>訂購日期</th>
                                <th>訂單狀態</th>
                                <th class="memDisplay_HC">運送狀態</th>
                                <th class="memDisplay_HC">運送方式</th>
                                <th class="memDisplay_HC">付款方式</th>
                                <th class="memDisplay_HC">訂單總額</th>
                                <th class="memDisplay_HC">取消訂單</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- 尚無訂單 -->
                            <tr id="memNoOder_HC">
                                <td colspan="8">
                                    <h3>目前尚無訂單</h3>
                                </td>
                            </tr>
                            <tr class="memOder_HC">
                                <td class="memSerialNumTd_HC">
                                    <a href="/Upick/web/member/memberOderDetail.php"
                                        class="memSerialNum_HC">1006127192</a>
                                </td>
                                <td>
                                    <p class="memBuyDay_HC">2021-05-01</p>
                                </td>
                                <td>
                                    <p class="memOrderSta_HC">處理中</p>
                                </td>
                                <td class="memDisplay_HC memToteSta_HC">
                                    <p class="memToteSta_HC">-</p>
                                </td>
                                <td class="memDisplay_HC memTote_HC">
                                    <p class="memTote_HC">宅配</p>
                                </td>
                                <td class="memDisplay_HC">
                                    <p class="memPayWay_HC">宅配代收</p>
                                </td>
                                <td class="memDisplay_HC memOrderTotal_HC">
                                    <p class="memOrderTotal_HC">$24,798</p>
                                </td>
                                <td class="memDisplay_HC"><a href="./memberQA.html">聯絡我們</a></td>
                            </tr>
                            <!-- 第二筆展示效果用 刪除不影響 -->
                            <tr class="memOder_HC">
                                <td class="memSerialNumTd_HC memSerialNum_HC">
                                    <a href="/Upick/web/member/memberOderDetail.php">1006127086</a>
                                </td>
                                <td class="">
                                    <p>2021-01-27</p>
                                </td>
                                <td>
                                    <p>訂單完成</p>
                                </td>
                                <td class="memDisplay_HC">
                                    <p>已出貨</p>
                                </td>
                                <td class="memDisplay_HC">
                                    <p>到店取貨</p>
                                </td>
                                <td class="memDisplay_HC">
                                    <p>信用卡</p>
                                </td>
                                <td class="memDisplay_HC">
                                    <p>$13,452</p>
                                </td class="memDisplay_HC">
                                <td class="memDisplay_HC">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- 分頁 -->
                <div class="memPagenation_HC">
                    <div class="wWhitePgAreaHTML1">
                        <ul class="wWhitePgArea">
                            <!--最前頁button-->
                            <li class="wWhitePgItem">
                                <a class="wWhitePgLink" href="#">
                                    <i class="fas fa-angle-double-left"></i>
                                </a>
                            </li>
                            <!--前一頁button-->
                            <li class="wWhitePgItem">
                                <a class="wWhitePgLink" href="#">
                                    <i class="fas fa-angle-left"></i>
                                </a>
                            </li>
                            <!--橫向顯示頁碼-->
                            <li class="wWhitePgItem wWhitePGnumber">
                                <a class="wWhitePgLink" href="#">1</a>
                            </li>
                            <li class="wWhitePgItem wWhitePGnumber">
                                <a class="wWhitePgLink" href="#">2</a>
                            </li>
                            <li class="wWhitePgItem wWhitePGnumber">
                                <a class="wWhitePgLink" href="#">3</a>
                            </li>
                            <!--橫向顯示頁碼終止-->
                            <!--下一頁button-->
                            <li class="wWhitePgItem">
                                <a class="wWhitePgLink" href="#">
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </li>
                            <!--最後一頁button-->
                            <li class="wWhitePgItem">
                                <a class="wWhitePgLink" href="#">
                                    <i class="fas fa-angle-double-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
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
//網頁版頁碼focus顏色
$('.wWhitePGnumber').click(function() {
    $(this).css('backgroundColor', '#7FE0DC').siblings().css('backgroundColor', '#FFFFFF');
    newPg1 = $(this).text();
    $('.wWhiteNewPG').text(newPg1);
})
</script>

</html>