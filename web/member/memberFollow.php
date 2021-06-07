<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>追蹤清單</title>
    <!--檔頭外掛-->
    <?php include __DIR__ . '/../../parts/html_head.php' ?>
    <!-- memberFollow.css -->
    <link rel="stylesheet" href="/Upick/css/memberFollow.css">

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
                    <li><a href="/Upick/web/member/memberOrder.php">查詢訂單</a></li>
                    <li><a href="/Upick/web/member/memberFollow.php" class="memChange_HC">追蹤清單</a></li>
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
                    <h1 class="memberTitleText_HC">追蹤清單</h1>
                    <div class="memSquareBox_HC">
                        <div class="memSquare01_HC"></div>
                        <div class="memSquare02_HC"></div>
                    </div>
                </div>
                <!-- 網頁追蹤清單 -->
                <div class="memWebFollowArea_HC">
                    <table id="memWebTable_HC">
                        <thead>
                            <tr>
                                <th class="memProductTh_HC">追蹤商品</th>
                                <th>庫存狀態</th>
                                <th>商品價格</th>
                                <th>購買狀態</th>
                                <th class="memTrashTh_HC"><i class="fas fa-trash"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="memNoFollow_HC">
                                <td colspan="5">
                                    <h3>目前尚無追蹤商品</h3>
                                </td>
                            </tr>
                            <tr class="memFollow_HC">
                                <!-- 追蹤商品 -->
                                <td class="memProductTd_HC">
                                    <img src="/Upick/images/item_01.png" alt="">
                                    <a href="#" class="memProductTitle_HC">
                                        Antec 安鈦克 NE550 TUF聯名款 550W 80+銅牌
                                        (全日系電容/長140mm/五年保固二年換新)
                                    </a>
                                </td>
                                <!-- 庫存狀態 -->
                                <td>
                                    <p class="memStock_HC">貨量充足</p>
                                </td>
                                <!-- 商品價格 -->
                                <td>
                                    <p class="memUPrice_HC">$2,029</p>
                                </td>
                                <!-- 購買狀態 -->
                                <td>
                                    <a href="#">加入購物車</a>
                                    <br>
                                    <a href="#">立即購買</a>
                                </td>
                                <!-- 取消追蹤 -->
                                <td>
                                    <a href="#">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>

                        </tbody>
                    </table>
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
                <!-- 手機追蹤清單 -->
                <div class="memMobileFollowArea_HC">
                    <div class="memMbFollowCardArea_HC">
                        <img src="/Upick/images/item_01.png" alt="">
                        <div class="memMbFollowCardCon_HC">
                            <!-- 商品名稱 -->
                            <a href="#" class="memProductTitle_HC">
                                Antec 安鈦克 NE550 TUF聯名款 550W 80+銅牌 (全日系電容/長140mm/五年保固二年換新)
                            </a>
                            <div class="memMbFollowCardDown_HC">
                                <!-- 手機 庫存狀態 -->
                                <p class="memStock_HC">貨量充足</p>
                                <!-- 手機 商品價格 -->
                                <p class="memUPrice_HC">$2,029</p>
                                <!-- 手機 加入購物車 -->
                                <a href="#">
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                                <!-- 手機 取消追蹤 -->
                                <a href="#">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </div>
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