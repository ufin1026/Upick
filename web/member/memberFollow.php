<?php require __DIR__ . '/../../__connect_db.php';

define('WEB_ROOT', '/UPICK');
session_start();

$title = '會員中心';
$pageName = 'member';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>追蹤清單</title>
    <!--檔頭外掛-->
    <?php include __DIR__ . '/../../parts/html_head.php' ?>
    <?php include __DIR__ . '/../../parts/html_navbar_phone.php' ?>
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
                <?php if (empty($_SESSION['follow'])) : ?>                                
                    <div class="memNoFollow_HC">
                        <h1>目前尚無追蹤商品</h1>
                    </div>
                <?php else : ?>
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
                            <?php foreach ($_SESSION['follow'] as $v) { ?>
                                <tr class="memFollow_HC" data-sid="<?= $v['sid'] ?>" data-tbid="<?= $v['tableid'] ?>">
                                    <!-- 追蹤商品 -->
                                    <td class="memProductTd_HC">
                                        <img src="<?= WEB_ROOT ?>/images/product/<?= $v['tableid'] ?>/<?= $v['imgs'] ?>.jpg" alt="">
                                        <a href="<?= WEB_ROOT ?>/web/product/dtl_page.php?classid=<?= $v['tableid'] ?>&pid=<?= $v['sid'] ?>" class="memProductTitle_HC"><?= $v['name'] ?></a>
                                    </td>
                                    <!-- 庫存狀態 -->
                                    <td>
                                        <p class="memStock_HC">貨量充足</p>
                                    </td>
                                    <!-- 商品價格 -->
                                    <td>
                                        <p class="memUPrice_HC">$<?= $v['price'] ?></p>
                                    </td>
                                    <!-- 購買狀態 -->
                                    <td>
                                        <a href="" class="memAddCart-CL">加入購物車</a>
                                        <br>
                                        <a href="/Upick/web/shopcar/shopcart_origin.php" class="memAddCart-CL">立即購買</a>
                                    </td>
                                    <!-- 取消追蹤 -->
                                    <td>
                                        <a href="#" class="memAddCart-CL">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                <?php endif; ?>
                        </tbody>
                    </table>                    
                </div>
                <!-- 手機追蹤清單 -->
                <div class="memMobileFollowArea_HC">
                    <?php if (empty($_SESSION['follow'])) : ?>
                        <div class="memNoFollow_HC">
                            <h5>目前尚無追蹤商品</h5>
                        </div>
                    <?php else : ?>
                        <?php foreach ($_SESSION['follow'] as $v) { ?>
                            <div class="memMbFollowCardArea_HC">
                                <img src="<?= WEB_ROOT ?>/images/product/<?= $v['tableid'] ?>/<?= $v['imgs'] ?>.jpg" alt="">
                                <div class="memMbFollowCardCon_HC">
                                    <!-- 商品名稱 -->
                                    <a href="<?= WEB_ROOT ?>/web/product/dtl_page.php?classid=<?= $v['tableid'] ?>&pid=<?= $v['sid'] ?>" class="memProductTitle_HC"><?= $v['name'] ?>
                                    </a>
                                    <div class="memMbFollowCardDown_HC memFollow_HC" data-sid="<?= $v['sid'] ?>">
                                        <!-- 手機 庫存狀態 -->
                                        <p class="memStock_HC">貨量充足</p>
                                        <!-- 手機 商品價格 -->
                                        <p class="memUPrice_HC">$<?= $v['price'] ?></p>
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
                        <?php } ?>
                    <?php endif; ?>
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
<?php include __DIR__ . '/../../web/shopcar/cart-script.php' ?>
<?php include __DIR__ . '/../../web/member/follow-script.php' ?>
<script>
    function topMove() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }
    //移除追蹤商品
    const deleteFollowBtn = $('.fa-trash');
    deleteFollowBtn.click(function() {
        const card = $(this).closest('.memFollow_HC');
        const sid = card.attr('data-sid');
        $.get('/Upick/web/member/follow-api.php', {
            action: 'delete',
            sid
        }, function(data) {
            console.log(data);
            showCartCount(data); // 更新選單上數量的提示
            location.reload();
        }, 'json');
    })

    //加入購物車
    const addToCartBtn = $('.memAddCart-CL');
    addToCartBtn.click(function() {
        const card = $(this).closest('.memFollow_HC');
        const sid = card.attr('data-sid');
        const classid = card.attr('data-tbid');
        const qty = 1;
        $.get('/Upick/web/shopcar/cart-api.php', {
            action: 'add',
            sid,
            classid,
            qty
        }, function(data) {
            console.log(data);
            showCartCount(data); // 更新選單上數量的提示
        }, 'json');
    })
</script>

</html>