<?php require __DIR__.'/../../__connect_db.php';

define('WEB_ROOT', '/UPICK');
session_start();

$email = $_SESSION['loginUser'];
$sql = "SELECT `id`, `order_date`, `commodity_status`, `shipping_status`, `shipping_method`, `payment`, `amount` FROM orders WHERE email=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$email]);
// $order = $pdo->query($sql)->fetchAll();

if($stmt->rowCount()){
    $row = $stmt->fetchAll();
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>查詢訂單</title>
    <!--檔頭外掛-->
    <?php include __DIR__ . '/../../parts/html_head.php' ?>
    <?php include __DIR__ . '/../../parts/html_navbar_phone.php' ?>
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
                            <?php foreach ($row as $oderR): ?>
                            <tr class="memOder_HC">                                
                                <td class="memSerialNumTd_HC">
                                    <!-- 訂單編號 -->
                                    <a href="/Upick/web/member/memberOderDetail.php"
                                        class="memSerialNum_HC">100612719<?= htmlentities($oderR['id']) ?></a>
                                </td>
                                <td>
                                    <!-- 訂購日期 -->
                                    <p class="memBuyDay_HC"><?= htmlentities($oderR['order_date']) ?></p>
                                </td>
                                <td>
                                    <!-- 訂單狀態 -->
                                    <p class="memOrderSta_HC"><?= htmlentities($oderR['commodity_status']) ?></p>
                                </td>
                                <td class="memDisplay_HC memToteSta_HC">
                                    <!-- 運送狀態 -->
                                    <p class="memToteSta_HC"><?= htmlentities($oderR['shipping_status']) ?></p>
                                </td>
                                <td class="memDisplay_HC memTote_HC">
                                    <!-- 運送方式 -->
                                    <p class="memTote_HC"><?= htmlentities($oderR['shipping_method']) ?></p>
                                </td>
                                <td class="memDisplay_HC">
                                    <!-- 付款方式 -->
                                    <p class="memPayWay_HC"><?= htmlentities($oderR['payment']) ?></p>
                                </td>
                                <td class="memDisplay_HC memOrderTotal_HC">
                                    <!-- 訂單總額 -->
                                    <p class="memOrderTotal_HC">$<?= htmlentities($oderR['amount']) ?></p>
                                </td>
                                <td class="memDisplay_HC"><a href="./memberQA.html">聯絡我們</a></td>                                
                            </tr>
                            <?php endforeach; ?>                            
                        </tbody>
                    </table>
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
$(document).ready(function (){
    GetMemberOrder();
});

function GetMemberOrder(){
    $.ajax({
        type: "POST", //方法
        url: "read-members-api.php", //表單接收url
        dataType: "json",
    });

    $.ajax({
        type: POST,
        url: "order-api.php",
        dataType: "json",
        success:function(data){
            console.log("OK");
        },
        error: function(data) {
            console.log("NOK");
        }
    });
}

//網頁版頁碼focus顏色
$('.wWhitePGnumber').click(function() {
    $(this).css('backgroundColor', '#7FE0DC').siblings().css('backgroundColor', '#FFFFFF');
    newPg1 = $(this).text();
    $('.wWhiteNewPG').text(newPg1);
})


</script>

</html>