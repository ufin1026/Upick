<?php
//資料庫連結
require __DIR__ . '/../../__connect_db.php';
define('WEB_ROOT', '/UPICK');
session_start();

$title = '購物車';
$pageName = 'cart';

$row0 = "SELECT * FROM 09screen WHERE id BETWEEN 11 and 14";
$row1 = $pdo->query($row0)->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPICK電腦零件購物網-購物車</title>

    <link rel="stylesheet" href="/Upick/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="/Upick/css/shopcart_origin_stepbar.css">
    <link rel="stylesheet" href="/Upick/css/shopcart_origin_item.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="stylesheet" href="/Upick/css/shopcart.css">
    <!--navbar style-->
    <link rel="stylesheet" href="/Upick/css/style_navbar.css">
    <!--footer style-->
    <link rel="stylesheet" href="/Upick/css/style_footer.css">
    <link rel="stylesheet" href="/Upick/css/style_navbar_phone.css">
    <style>
        * {
            /* outline: 1px solid #000; */
        }

        .navSearch-CL {
            display: none;
        }
    </style>
</head>

<body>
    <?php include __DIR__ . '/../../parts/html_navbar.php' ?>
    <?php include __DIR__ . '/../../parts/html_navbar_phone.php' ?>
    <div class="wrapper">
        <div class="main-wrapper">

            <!-- 步驟攔 請搭配shopcart_origin_stepbar.css -->
            <?php if (empty($_SESSION['cart'])) : ?>
                <div class="carCantainerOut_ZY">
                    <div class="carContainer_ZY">
                        <div class="row">
                            <div class="carNoThing_ZY">
                                <img src="" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="carNoThingText_ZY">
                                <h5>現在購物車是空的喔!</h5>
                            </div>
                        </div>
                        <div class="row carNoThingBtnGroupBoxM_ZY">
                            <div class="carNoThingBtnGroup_ZY ">
                                <button class="carGO_ZY carGoWp_ZY" value="carGoWp_ZY" onclick="location.href='http://localhost/Upick/web/wepick/wepick-0.php'">
                                    <i class="fas fa-angle-double-left"></i>
                                    <span>WEPICK</span>
                                </button>

                                <button class="carGO_ZY carGoUp_ZY" value="carGoUp_ZY" onclick="location.href='http://localhost/Upick/web/upick/upick-0.php'">
                                    <span>UPICK</span>
                                    <i class="fas fa-angle-double-right"></i>
                                </button>
                            </div>
                            <div class="carNoThingBtnGroup_ZY">

                                <button class="carGO_ZY Shop_ZY" value="carGoShop_ZY" onclick="location.href='http://localhost/Upick/shopHome.php'">
                                    <span>前往商城</span>
                                </button>

                            </div>
                        </div>

                        <div class="row carNoThingBtnGroupBox_ZY">
                            <div class="carNoThingBtnGroup_ZY">
                                <button class="carGO_ZY carGoWp_ZY" value="carGoWp_ZY" onclick="location.href='http://localhost/Upick/web/wepick/wepick-0.php'">
                                    <i class="fas fa-angle-double-left"></i>
                                    <span>前往WEPICK</span>
                                </button>
                                <button class="carGO_ZY Shop_ZY" value="carGoShop_ZY" onclick="location.href='http://localhost/Upick/shopHome.php'">
                                    <span>前往商城</span>
                                </button>
                                <button class="carGO_ZY carGoUp_ZY" value="carGoUp_ZY" onclick="location.href='http://localhost/Upick/web/upick/upick-0.php'">
                                    <span>前往UPICK</span>
                                    <i class="fas fa-angle-double-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="container carStepContainer_ZY">
                    <div class="row carStepRow_ZY">
                        <div class="carStepGroup_ZY">
                            <div class="carStep_ZY col-4 carStepArrow_ZY ">
                                <div class="carStepCircle_ZY carStepNow_ZY">1</div>
                                <div class="carStepTitle_ZY ">確認購買商品
                                </div>
                            </div>
                            <div class="carStep_ZY col-4 carStepArrow_ZY carStepArrowNotFucus_ZY">
                                <div class="carStepCircle_ZY carStepCircleNotFucus_ZY">2</div>
                                <div class="carStepTitle_ZY carStepTitleNotFucus_ZY">填寫付款配送資訊
                                </div>
                            </div>
                            <div class="carStep_ZY col-4">
                                <div class="carStepCircle_ZY carStepCircleNotFucus_ZY">3</div>
                                <div class="carStepTitle_ZY carStepTitleNotFucus_ZY">完成訂單
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <!-- 上面title -->
                    <div class="row cartTitleRow_ZY">
                        <div class="carheaderItem_ZY">
                            <div class="carTitleName_ZY col-7">
                                商品
                            </div>
                            <div class="carTitlePrice_ZY col-1">
                                單價
                            </div>
                            <div class="carTitleQuantity_ZY col-1">數量</div>
                            <div class="carTitleTotlePrice_ZY col-1">小計</div>
                            <div class="carTitleBtn_ZY col-2"></div>
                        </div>
                        <div class="carTitleNameMolible_ZY">
                            <div class="carTitleName_ZY col-12">
                                商品明細
                            </div>

                        </div>
                    </div>
                </div>
                <!-- 商品1 -->
                <div class="container">

                    <?php foreach ($_SESSION['cart'] as $v) { ?>
                        <div class="row cartItemRow_ZY" value="1">
                            <div class="carItem_ZY">
                                <div class="carItemName_ZY col-10 col-lg-7">
                                    <div class="carItemImg_ZY col-3 col-lg-2">
                                        <img src="<?= WEB_ROOT ?>/images/product/<?= $v['tableid'] ?>/<?= $v['imgs'] ?>.jpg" alt="">
                                    </div>
                                    <div class="carItemWord_ZY col-9 col-lg-10"><?= $v['name'] ?>
                                    </div>

                                </div>
                                <div class="carItemBtnM_ZY col-2">
                                    <button class="carRemoveBtnM_ZY col-12">
                                        <i class="fas fa-times cardeletePhone-CL" data-sid="<?= $v['sid'] ?>"></i>

                                    </button>
                                    <button class="carRemoveBtnM_ZY col-12">
                                        <i class="far fa-heart"></i>

                                    </button>
                                </div>
                                <div class="carItemPrice_ZY col-lg-1">$<?= $v['price'] ?></div>

                                <div class="carItemQuantityOut_Zy col-lg-1">
                                    <div class="carItemQuantity_Zy">
                                        <select class="carItemQuantitySelect_ZY" name="carItemQuantitySelect_ZY">
                                            <option value="<?= $v['quantity'] ?>"><?= $v['quantity'] ?></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="carItemTotlePriceMobile_ZY ">
                                        <p>小計<span>$99999</span></p>
                                    </div>
                                </div>
                                <div class="carItemTotlePrice_ZY col-4 col-lg-1">
                                    $99999
                                </div>

                                <div class="carItemBtn_ZY col-2" data-sid="<?= $v['sid'] ?>">
                                    <button class="carRemoveBtn_ZY carDeleteBtn-CL">
                                        <i class="fas fa-times"></i>
                                        移除商品
                                    </button>
                                    <button class="carRemoveBtn_ZY">
                                        <i class="far fa-heart"></i>
                                        追蹤清單
                                    </button>
                                </div>
                            </div>
                            <div class="row carBorderBottom_ZY"></div>
                        </div>
                    <?php } ?>

                    <!-- 商品一結束 -->

                    <!-- 商品下方結帳資訊攔 -->

                    <div class="row carFooterInfor_ZY">
                        <div class="carTotalQuti_ZY col-8">
                            <p>本次結帳共</p>
                            <span class="shopCount-CL">3</span>
                            <p>項商品</p>
                        </div>
                        <div class="carTotalPrice_ZY col-2">
                            <p>結帳金額:</p>
                            <span>$99999</span>
                        </div>

                        <div class="carCheckout_ZY col-2">
                            <button>結帳去</button>
                        </div>
                    </div>


                </div>

                <div class="row carFixedInforM_ZY">
                    <div class="carFixedInforFontM_ZY">
                        <p>共<span class="carCount-CL">0</span>項商品</p>
                        <p>合計：<span>$99999</span></p>
                    </div>
                    <div class="carFixedInforFontBtnBoxM_ZY">
                        <button class="carFixedButtonM1_ZY" onclick=" location.href='http://localhost/Upick/shopHome.php'">繼續購物</button>

                        <button class="carFixedButtonM2_ZY">結帳去</button>
                    </div>

                </div>
        </div>

        <!--  -->
        <div class="container carRecommendContainer">
            <!-- 加購商品區 -->
            <div class="row carRecommendTitle_ZY">
                <p>加購商品</p>
            </div>
            <div class="row carRecommendBox_ZY">
                <div class="row carRecommend_ZY">
                    <!-- 加購商品 -->
                    <?php foreach ($row1 as $r1) { ?>
                        <div class="carRecommendItem_ZY col-3 ">
                            <div class="carRecommendImg_ZY">
                                <img src="<?= WEB_ROOT ?>/images/product/09screen/<?= $r1['imgs'] ?>.jpg" alt="">
                            </div>
                            <div class="carRecommendInfor_ZY">
                                <p><?= $r1['name'] ?></p>
                                <div class="carRecommendBtn_ZY">
                                    <button class="carRecommendCatBtn_ZY carAddCar_ZY">
                                        <i class="fas fa-cart-plus" data-sid="<?= $r1['sid'] ?>"></i>
                                    </button>
                                    <button class="carRecommendCatBtn_ZY">
                                        <i class="far fa-heart"></i>
                                    </button>
                                    <p>$<?= $r1['price'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- 結束 -->


                </div>
            </div>
            <!-- 繼續購物按鈕 -->
            <div class="row carGoToShopRow_ZY ">
                <button class="carGoToShopBtn_ZY " onclick="location.href='http://localhost/Upick/shopHome.php'">
                    <span>繼續購物</span>
                </button>
            </div>
        </div>
        <!-- 注意事項 -->
        <div class="container carRecommendContainer">
            <div class="carNoticeSection_ZY">
                <div class="row carNoticeTitle_ZY">
                    <p>注意事項</p>
                </div>
                <div class="row carNoticeInfor_ZY">
                    <ul>
                        <li>本購物須知是UPICK購物網服務條款的補充條款，當您使用UPICK購物網時，即表示您已閱讀、瞭解並同意接受本購物須知所訂之所有內容。本須知得隨時修訂並公告於UPICK購物網上，修訂後之內容自公告時起生效。
                        </li>
                        <li>若您未滿二十歲，您應於您的家長（或監護人）閱讀、瞭解並同意本購物須知之所有內容及其後修改變更後，方得使用或繼續使用UPICK購物網。當您使用或繼續使用UPICK購物網時，即推定您的家長（或監護人）已閱讀、瞭解並同意接受本購物須知之所有內容及其後修改變更。
                        </li>
                        <li>當您訂購多筆商品並選擇以信用卡或信用卡分期付款，可能會因信用卡額度不足或系統因素等問題，導致發生當次訂購之商品無法全部取得銀行授權之情形。有此種情形發生時，UPICK購物網將會就已成功取得授權部分之商品繼續處理您的訂單，若您就其他商品仍有需要時，請重新訂購。但若當次訂購享有跨產品優惠、滿額/滿件優惠者，UPICK購物網將視為授權全部失敗，請您重新選擇付款方式。
                        </li>
                        <li>當您完成商品訂購程序後，UPICK購物網將自動發送電子郵件於您所留存的電子郵件信箱，但此一郵件僅係通知您UPICK購物網已經收到您的訂購需求，並不表示交易已經完成或契約已經成立，UPICK購物網保留接受您的訂單與否之權利。
                        </li>
                        <li>當您完成付款程序後，UPICK購物網將自動發送電子郵件於您所留存的電子郵件信箱，但此一郵件僅係通知您UPICK購物網已經收到您的付款，並不表示交易已經完成或契約已經成立，UPICK購物網保留接受您的訂單與否之權利。
                        </li>
                        <li>UPICK購物網將在確認交易條件無誤、付款完成且仍有庫存後，直接通知配合宅配出貨，或者簡訊/mail通知您到店取貨，商品寄出時我們會寄一封出貨通知信給您。您可隨時至「訂單查詢」確認訂單最新資料，並可點選該筆訂單的「訂單明細」確認付款/訂購/出貨資訊等資料。若交易條件有誤、商品無庫存或有其他UPICK購物網無法接受訂單之情形，UPICK購物網得主動通知您訂單不成立/取消訂單，並為您辦理退款，買方並同意賣方將以收的貨款價金如數退還，買方不得請求加倍退還或其他賠償。
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <!--區隔撐開頁尾的空間-->
    <div class="shpFooterSpace-CL"></div>
    <!--頁尾-->
    <?php include __DIR__ . '/../../parts/html_footer.php' ?>



    <!--SCRIPT-->
    <?php include __DIR__ . '/../../parts/scripts.php' ?>
    <?php include __DIR__ . '/cart-script.php' ?>

    <script>
        //加購商品
        const addToCartBtn = $('.carAddCar_ZY');
        addToCartBtn.click(function() {
            const card = $(this).children('.fa-cart-plus');
            const sid = card.attr('data-sid');
            const classid = '09screen';
            const qty = 1;
            $.get('cart-api.php', {
                action: 'add',
                sid,
                classid,
                qty
            }, function(data) {
                console.log(data);
                showCartCount(data); // 更新選單上數量的提示
            }, 'json');
            location.reload();
        })
        //移除商品
        const deleteFromCartBtn = $('.carDeleteBtn-CL');
        deleteFromCartBtn.click(function() {
            if (confirm('確定要移除此商品?')) {
                const sid = $(this).parent('.carItemBtn_ZY').attr('data-sid');
                const qty = 1;
                $.get('cart-api.php', {
                    action: 'delete',
                    sid
                }, function(data) {
                    console.log(data);
                    showCartCount(data); // 更新選單上數量的提示
                }, 'json');
            } else {}
            location.reload();
        })
        //手機版-移除商品
        const deleteFromCartBtnPhone = $('.cardeletePhone-CL');
        deleteFromCartBtnPhone.click(function() {
            if (confirm('確定要移除此商品?')) {
                const sid = $(this).attr('data-sid');
                $.get('cart-api.php', {
                    action: 'delete',
                    sid,
                }, function(data) {
                    console.log(data);
                    showCartCount(data); // 更新選單上數量的提示
                }, 'json');
            } else {}
            location.reload();

        })
    </script>
</body>

</html>