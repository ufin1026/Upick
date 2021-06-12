<?php require __DIR__.'/../../__connect_db.php';

define('WEB_ROOT', '/UPICK');
session_start();

$email = $_SESSION['loginUser'];
$sql = "SELECT `mobile`, `phone`, `address`, `birthday`, nickname FROM members WHERE email=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$email]);

if($stmt->rowCount()){
    $row = $stmt->fetch();
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員資料</title>
    <!--檔頭外掛-->
    <?php include __DIR__ . '/../../parts/html_head.php' ?>
    <?php include __DIR__ . '/../../parts/html_navbar_phone.php' ?>
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
                    <form class="memForm_HC" id="form1" onsubmit="return false" action="##" method="post">                    
                        <div class="memColumnWhite_HC">
                            <p>會員帳號</p>
                            <input type="text" name="email" disabled placeholder="請輸入姓名" value="<?= $_SESSION['loginUser'] ?>">
                        </div>
                        <div class="memColumnWhite_HC">
                            <p>姓名</p>
                            <input type="text" name="nickname" placeholder="請輸入姓名" value="<?= htmlentities($row['nickname']) ?>">
                        </div>
                        <div class="memColumnWhite_HC">
                            <p>生日</p>
                            <input type="date" name="birthday" value="<?= htmlentities($row['birthday']) ?>">
                        </div>
                        <div class="memColumnWhite_HC">
                            <p>手機號碼</p>
                            <input type="text" name="mobile" oninput="value=value.replace(/[^\d]/g,'')" placeholder="請輸入手機號碼" value="<?= htmlentities($row['mobile']) ?>">
                        </div>
                        <div class="memColumnWhite_HC">
                            <p>市話號碼</p>
                            <input type="text" name="phone" oninput="value=value.replace(/[^\d]/g,'')" placeholder="請輸入市話號碼" value="<?= htmlentities($row['phone']) ?>">
                        </div>
                        <div class="memColumnWhite_HC">
                            <p>地址</p>
                            <input type="text" name="address" placeholder="請輸入詳細地址" value="<?= htmlentities($row['address']) ?>">
                        </div>
                        <button class="wBtnNGr memEditBtnShare_HC" value="修改" onclick="EditUser()">確認修改</button>
                    
                        
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
function EditUser() {
    $.ajax({
        type: "POST", //方法
        url: "read-members-api.php", //表單接收url
        dataType: "json",
    });

    $.ajax({
        type: "POST", //方法
        url: "data-edit-api.php", //表單接收url
        data: $('#form1').serialize(),
        dataType: "json",
        success: function(data) {
            alert("資料修改成功！");
            console.log("OK")
        },
        error: function(data) {
            console.log("NOK");
        }
    });    
}
</script>

</html>