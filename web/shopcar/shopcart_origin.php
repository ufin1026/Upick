<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPICK電腦零件購物網-購物車</title>

    <link rel="stylesheet" href="/Upick/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="/Upick/css/shopcart_origin_stepbar.css">
    <link rel="stylesheet" href="/Upick/css/shopcart_origin_item.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">

    <!--navbar style-->
    <link rel="stylesheet" href="/Upick/css/style_navbar.css">
    <!--footer style-->
    <link rel="stylesheet" href="/Upick/css/style_footer.css">

</head>

<body>
    <?php include __DIR__ . '/../../parts/html_navbar.php' ?>
    <div class="wrapper">
        <div class="main-wrapper">

            <!-- 步驟攔 請搭配shopcart_origin_stepbar.css -->
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
                <div class="row cartItemRow_ZY" value="1">
                    <div class="carItem_ZY">
                        <div class="carItemName_ZY col-10 col-lg-7">
                            <div class="carItemImg_ZY col-3 col-lg-2">
                                <img src="/Upick/images/item_01.png" alt="">
                            </div>
                            <div class="carItemWord_ZY col-9 col-lg-10">
                                Antec 安鈦克 NE550 TUF聯名款 550W 80+銅牌 (全日系電容/長140mm/五年保固二年換新)
                            </div>

                        </div>
                        <div class="carItemBtnM_ZY col-2">
                            <button class="carRemoveBtnM_ZY col-12">
                                <i class="fas fa-times"></i>

                            </button>
                            <button class="carRemoveBtnM_ZY col-12">
                                <i class="far fa-heart"></i>

                            </button>
                        </div>
                        <div class="carItemPrice_ZY col-lg-1">$99999</div>

                        <div class="carItemQuantityOut_Zy col-lg-1">
                            <div class="carItemQuantity_Zy">
                                <select class="carItemQuantitySelect_ZY" name="carItemQuantitySelect_ZY">
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

                        <div class="carItemBtn_ZY col-2">
                            <button class="carRemoveBtn_ZY ">
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
                <!-- 商品一結束 -->
                <!-- 商品1 -->
                <div class="container">
                    <div class="row cartItemRow_ZY" value="1">
                        <div class="carItem_ZY">
                            <div class="carItemName_ZY col-10 col-lg-7">
                                <div class="carItemImg_ZY col-3 col-lg-2">
                                    <img src="/Upick/images/item_01.png" alt="">
                                </div>
                                <div class="carItemWord_ZY col-9 col-lg-10">
                                    Antec 安鈦克 NE550 TUF聯名款 550W 80+銅牌 (全日系電容/長140mm/五年保固二年換新)
                                </div>

                            </div>
                            <div class="carItemBtnM_ZY col-2">
                                <button class="carRemoveBtnM_ZY col-12">
                                    <i class="fas fa-times"></i>

                                </button>
                                <button class="carRemoveBtnM_ZY col-12">
                                    <i class="far fa-heart"></i>

                                </button>
                            </div>
                            <div class="carItemPrice_ZY col-lg-1">$99999</div>

                            <div class="carItemQuantityOut_Zy col-lg-1">
                                <div class="carItemQuantity_Zy">
                                    <select class="carItemQuantitySelect_ZY" name="carItemQuantitySelect_ZY">
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

                            <div class="carItemBtn_ZY col-2">
                                <button class="carRemoveBtn_ZY ">
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
                    <!-- 商品一結束 -->


                    <!-- 商品下方結帳資訊攔 -->

                    <div class="row carFooterInfor_ZY">
                        <div class="carTotalQuti_ZY col-8">
                            <p>本次結帳共</p>
                            <span>3</span>
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

            </div>

            <div class="row carFixedInforM_ZY">
                <div class="carFixedInforFontM_ZY">
                    <p>共1項商品</p>
                    <p>合計：<span>$99999</span></p>
                </div>
                <div class="carFixedInforFontBtnBoxM_ZY">
                    <button class="carFixedButtonM1_ZY">繼續購物</button>
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
                    <div class="carRecommendItem_ZY col-3 ">
                        <div class="carRecommendImg_ZY">
                            <img src="/Upick/images/item_01.png" alt="">
                        </div>
                        <div class="carRecommendInfor_ZY">
                            <p>Antec 安鈦克 NE550 TUF聯名款 550W 80+銅牌 (全日系電容/長140mm/五年保固二年換新)</p>
                            <div class="carRecommendBtn_ZY">
                                <button class="carRecommendCatBtn_ZY">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                                <button class="carRecommendCatBtn_ZY">
                                    <i class="far fa-heart"></i>
                                </button>
                                <p>$99999</p>
                            </div>
                        </div>
                    </div>
                    <!-- 結束 -->
                    <!-- 加購商品 -->
                    <div class="carRecommendItem_ZY col-3 ">
                        <div class="carRecommendImg_ZY">
                            <img src="/Upick/images/item_01.png" alt="">
                        </div>
                        <div class="carRecommendInfor_ZY">
                            <p>Antec 安鈦克 NE550 TUF聯名款 550W 80+銅牌 (全日系電容/長140mm/五年保固二年換新)</p>
                            <div class="carRecommendBtn_ZY">
                                <button class="carRecommendCatBtn_ZY">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                                <button class="carRecommendCatBtn_ZY">
                                    <i class="far fa-heart"></i>
                                </button>
                                <p>$99999</p>
                            </div>
                        </div>
                    </div>
                    <!-- 結束 -->
                    <!-- 加購商品 -->
                    <div class="carRecommendItem_ZY col-3 ">
                        <div class="carRecommendImg_ZY">
                            <img src="/Upick/images/item_01.png" alt="">
                        </div>
                        <div class="carRecommendInfor_ZY">
                            <p>Antec 安鈦克 NE550 TUF聯名款 550W 80+銅牌 (全日系電容/長140mm/五年保固二年換新)</p>
                            <div class="carRecommendBtn_ZY">
                                <button class="carRecommendCatBtn_ZY">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                                <button class="carRecommendCatBtn_ZY">
                                    <i class="far fa-heart"></i>
                                </button>
                                <p>$99999</p>
                            </div>
                        </div>
                    </div>
                    <!-- 結束 -->
                    <!-- 加購商品 -->
                    <div class="carRecommendItem_ZY col-3 ">
                        <div class="carRecommendImg_ZY">
                            <img src="/Upick/images/item_01.png" alt="">
                        </div>
                        <div class="carRecommendInfor_ZY">
                            <p>Antec 安鈦克 NE550 TUF聯名款 550W 80+銅牌 (全日系電容/長140mm/五年保固二年換新)</p>
                            <div class="carRecommendBtn_ZY">
                                <button class="carRecommendCatBtn_ZY">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                                <button class="carRecommendCatBtn_ZY">
                                    <i class="far fa-heart"></i>
                                </button>
                                <p>$99999</p>
                            </div>
                        </div>
                    </div>
                    <!-- 結束 -->

                </div>
            </div>
            <!-- 繼續購物按鈕 -->
            <div class="row carGoToShopRow_ZY ">
                <button class="carGoToShopBtn_ZY ">
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
                        <li>本購物須知是欣亞購物網服務條款的補充條款，當您使用欣亞購物網時，即表示您已閱讀、瞭解並同意接受本購物須知所訂之所有內容。本須知得隨時修訂並公告於欣亞購物網上，修訂後之內容自公告時起生效。
                        </li>
                        <li>若您未滿二十歲，您應於您的家長（或監護人）閱讀、瞭解並同意本購物須知之所有內容及其後修改變更後，方得使用或繼續使用欣亞購物網。當您使用或繼續使用欣亞購物網時，即推定您的家長（或監護人）已閱讀、瞭解並同意接受本購物須知之所有內容及其後修改變更。
                        </li>
                        <li>當您訂購多筆商品並選擇以信用卡或信用卡分期付款，可能會因信用卡額度不足或系統因素等問題，導致發生當次訂購之商品無法全部取得銀行授權之情形。有此種情形發生時，欣亞購物網將會就已成功取得授權部分之商品繼續處理您的訂單，若您就其他商品仍有需要時，請重新訂購。但若當次訂購享有跨產品優惠、滿額/滿件優惠者，欣亞購物網將視為授權全部失敗，請您重新選擇付款方式。
                        </li>
                        <li>當您完成商品訂購程序後，欣亞購物網將自動發送電子郵件於您所留存的電子郵件信箱，但此一郵件僅係通知您欣亞購物網已經收到您的訂購需求，並不表示交易已經完成或契約已經成立，欣亞購物網保留接受您的訂單與否之權利。
                        </li>
                        <li>當您完成付款程序後，欣亞購物網將自動發送電子郵件於您所留存的電子郵件信箱，但此一郵件僅係通知您欣亞購物網已經收到您的付款，並不表示交易已經完成或契約已經成立，欣亞購物網保留接受您的訂單與否之權利。
                        </li>
                        <li>欣亞購物網將在確認交易條件無誤、付款完成且仍有庫存後，直接通知配合宅配出貨，或者簡訊/mail通知您到店取貨，商品寄出時我們會寄一封出貨通知信給您。您可隨時至「訂單查詢」確認訂單最新資料，並可點選該筆訂單的「訂單明細」確認付款/訂購/出貨資訊等資料。若交易條件有誤、商品無庫存或有其他欣亞購物網無法接受訂單之情形，欣亞購物網得主動通知您訂單不成立/取消訂單，並為您辦理退款，買方並同意賣方將以收的貨款價金如數退還，買方不得請求加倍退還或其他賠償。
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--區隔撐開頁尾的空間-->
        <div class="shpFooterSpace-CL"></div>
        <!--頁尾-->
        <?php include __DIR__ . '/../../parts/html_footer.php' ?>



        <!--SCRIPT-->
        <?php include __DIR__ . '/../../parts/scripts.php' ?>
</body>

</html>