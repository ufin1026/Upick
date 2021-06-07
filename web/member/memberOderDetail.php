<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>訂單明細</title>
    <!--檔頭外掛-->
    <?php include __DIR__ . '/../../parts/html_head.php' ?>
    <!-- memberOderDetail.css -->
    <link rel="stylesheet" href="/Upick/css/memberOderDetail.css">
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
                        <a href="/Upick/web/member/memberOrder.php">
                            <i class="fas fa-angle-left"></i>
                        </a>
                    </div>
                    <h1 class="memberTitleText_HC">訂單明細</h1>
                    <div class="memSquareBox_HC">
                        <div class="memSquare01_HC"></div>
                        <div class="memSquare02_HC"></div>
                    </div>
                </div>
                <!-- Web訂單明細 -->
                <div class="memWebDetail_HC">
                    <div class="memSerialNumTitle_HC">
                        <h4>訂單編號：</h4>
                        <h4 class="memSerialNum_HC">1006127192</h4>
                    </div>
                    <table id="memWebTable_HC">
                        <thead>
                            <tr>
                                <th class="memProductNam_HC">商品名稱</th>
                                <th>單價</th>
                                <th>數量</th>
                                <th>小計</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <!-- 商品名稱 -->
                                <td class="memProductNam_HC">
                                    <p class="memProductTitle_HC">HyperX FURY DDR4 3200 8G x2 桌上型超頻記憶體 HX432C16FB3K2/16
                                    </p>
                                </td>
                                <!-- 單價 -->
                                <td>
                                    <p class="memUPrice_HC">$24,798</p>
                                </td>
                                <!-- 數量 -->
                                <td>
                                    <p class="memQuantity_HC">1</p>
                                </td>
                                <!-- 小計 -->
                                <td>
                                    <p class="memSubtotal_HC">$24,798</p>
                                </td>
                            </tr>
                            <!-- 展示用可刪除↓ -->
                            <tr>
                                <td class="memProductNam_HC">
                                    <p>HyperX FURY DDR4 3200 8G x2 桌上型超頻記憶體 HX432C16FB3K2/16</p>
                                </td>
                                <td>
                                    <p>$24,798</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>$24,798</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="memTotal_HC">
                        <p>訂單總額：</p>
                        <!-- 手機 訂單總額 -->
                        <p class="memDetailPrice_HC memOrderTotal_HC">$24,798</p>
                    </div>
                    <button onclick="self.location.href='/Upick/web/member/memberOrder.php'"
                        class="wBtnNGr memDetailBtnShare_HC">回訂單列表</button>
                </div>
                <!-- 手機訂單明細 -->
                <div class="memMobileDetail_HC">
                    <div class="memDtailTitle_HC">
                        <p>訂單編號：1006127192</p>
                    </div>
                    <div class="memDetailOrderArea_HC">
                        <ul class="memDetailTitle_HC">
                            <li>
                                <p>購買日期</p>
                            </li>
                            <li>
                                <p>訂單狀態</p>
                            </li>
                            <li>
                                <p>運送狀態</p>
                            </li>
                            <li>
                                <p> 運送方式</p>
                            </li>
                            <li>
                                <p>付款方式</p>
                            </li>
                            <li>
                                <p>訂單總額</p>
                            </li>
                            <li>
                                <p>取消訂單</p>
                            </li>
                        </ul>
                        <ul class="memDetailCon_HC">
                            <li>
                                <p class="memBuyDay_HC">2021-05-01</p>
                            </li>
                            <li>
                                <p class="memOrderSta_HC">處理中</p>
                            </li>
                            <li>
                                <p class="memToteSta_HC">-</p>
                            </li>
                            <li>
                                <p class="memTote_HC">宅配</p>
                            </li>
                            <li>
                                <p class="memPayWay_HC">宅配代收</p>
                            </li>
                            <li>
                                <p class="memOrderTotal_HC">$24,798</p>
                            </li>
                            <li>
                                <a href="/Upick/web/member/memberQA.php">聯絡客服</a>
                            </li>
                        </ul>
                    </div>
                    <div class="memDtailTitle_HC">
                        <p>訂單明細</p>
                    </div>
                    <div class="memDetailArea_HC">
                        <div class="memDetailTr_HC">
                            <p class="memProductTitle_HC">HyperX FURY DDR4 3200 8G x2 桌上型超頻記憶體 HX432C16FB3K2/16</p>
                            <ul class="memDisplayMe_HC">
                                <li>
                                    <p class="memUPrice_HC">單價：$2,999</p>
                                </li>
                                <li>
                                    <p class="memQuantity_HC">數量：1</p>
                                </li>
                                <li>
                                    <p class="memSubtotal_HC">小計：$2,999</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="memDtailTitleReverse_HC">
                        <p>訂單總額：</p>
                        <p class="memPrice_HC memOrderTotal_HC">$2,999</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <a href="javascript:topMove();" class="memTop_HC">Top</a>

    <!--區隔撐開頁尾的空間-->
    <div class="shpFooterSpace-CL"></div>
    <!--頁尾-->
    <?php include __DIR__ . '/../../parts/html_footer.php' ?>


</body>
<!--SCRIPT-->
<?php include __DIR__ . '/../../parts/scripts.php' ?>
<script>
function topMove() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}
</script>

</html>