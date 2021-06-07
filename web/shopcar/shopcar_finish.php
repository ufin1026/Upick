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
    <link rel="stylesheet" href="/Upick/css/shopcart_finish_stepbar.css">

    <link rel="stylesheet" href="/Upick/css/shopcart_finish.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!--navbar style-->
    <link rel="stylesheet" href="/Upick/css/style_navbar.css">
    <!--footer style-->
    <link rel="stylesheet" href="/Upick/css/style_footer.css">

</head>

<body>
    <?php include __DIR__ . '/../../parts/html_navbar.php' ?>
    <!-- 步驟攔 請搭配shopcart_stepbar.css -->
    <div class="container carStepContainer_ZY">
        <div class="carStepRow_ZY">
            <div class="carStepGroup_ZY">
                <div class="carStep_ZY col-4 carStepArrow_ZY 
                carStepArrowNotFucus_ZY">
                    <div class="carStepCircle_ZY carStepCircleNotFucus_ZY">1</div>
                    <div class="carStepTitle_ZY 
                    carStepTitleNotFucus_ZY">確認購買商品
                    </div>
                </div>
                <div class="carStep_ZY col-4 carStepArrow_ZY ">
                    <div class="carStepCircle_ZY carStepCircleNotFucus_ZY">2</div>
                    <div class="carStepTitle_ZY carStepTitleNotFucus_ZY">填寫付款配送資訊
                    </div>
                </div>
                <div class="carStep_ZY col-4">
                    <div class="carStepCircle_ZY ">3</div>
                    <div class="carStepTitle_ZY ">完成訂單
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container carFinishContainer_ZY">
        <div class="row carFinishContainerTitle_ZY">
            <i class="fas fa-check"></i>
        </div>
        <div class="row carFinishContainerTitle_ZY">
            <p>太好了！您已經完成全部的付款步驟！</p>
            <p>您可以在下方查看您付款資訊
            </p>
            <p>或到會員中心 > 訂單查詢查看最新的物流進度</p>
        </div>
        <div class="row carFinishContainerBtnGroup_ZY">
            <button class="carFinishContainerBtn_ZY"><i class="fas fa-chevron-left"></i><i
                    class="fas fa-chevron-left"></i>繼續購物</button>
            <button class="carFinishContainerBtn_ZY"></i>前往訂單<i class="fas fa-chevron-right"></i><i
                    class="fas fa-chevron-right"></i></button>
        </div>
        <div class="row carFinishInforContainer_ZY">
            <div class="row carRecipientInforBox_ZY">
                <div class="row carRecipientInforTitle_ZY">
                    <p>收件人資訊</p>
                    <div class="row carRecipientInfor_ZY">
                        <table>
                            <tbody>
                                <tr>
                                    <th>收件人:</th>
                                    <td>王小名</td>
                                </tr>
                                <tr>
                                    <th>手機號碼:</th>
                                    <td>0912345678</td>
                                </tr>
                                <tr>
                                    <th>市話號碼:</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>配送地址:</th>
                                    <td>台北市大安區信義路三段123號456樓之789</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row carline_ZY carlistMobileHide_ZY"></div>

            <div class="row carRecipientInforBox_ZY">
                <div class="row carRecipientInforTitle_ZY">
                    <p>訂購人資訊</p>
                    <div class="row carRecipientInfor_ZY">
                        <table>
                            <tbody>
                                <tr>
                                    <th>訂單日期:</th>
                                    <td>2021年4月12日</td>
                                </tr>
                                <tr>
                                    <th>訂單編號:</th>
                                    <td>202104120123456</td>
                                </tr>
                                <tr>
                                    <th>付款方式:</th>
                                    <td>信用卡</td>
                                </tr>
                                <tr>
                                    <th>取貨方式:</th>
                                    <td>宅配</td>
                                </tr>
                                <tr>
                                    <th>結帳金額:</th>
                                    <td>$99999</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row carline_ZY carlistMobileHide_ZY"></div>
            <div class="row carRecipientInforBox_ZY ">
                <div class="row carRecipientInforTitle_ZY">
                    <p>訂單明細</p>
                    <div class="row carRecipientItemBox_ZY">
                        <div class="row carRecipientItem_ZY     ">
                            <div class="carMarginPadding0_ZY col-8 col-lg-6">商品</div>
                            <div class="carlistMobileHide_ZY col-lg-2">單價</div>
                            <div class="carMarginPadding0_ZY col-2 col-lg-2">數量</div>
                            <div class="carMarginPadding0_ZY col-2 col-lg-2">小計</div>
                        </div>
                        <!-- 這是條線 -->
                        <div class="row carlinebold_ZY"></div>
                        <!-- 這是條線 -->
                        <div class="row carRecipientItem_ZY carRecipientItemMobile_ZY">
                            <div class="col-8 col-lg-6 carRecipientItemText_ZY carMarginPadding0_ZY ">
                                <p class="">Antec 安鈦克 NE550 TUF聯名款 550W 80+銅牌 (全日系電容/長140mm/五年保固二年換新)</p>
                            </div>
                            <div class="col-lg-2 carListFont_ZY carlistMobileHide_ZY carListFont_ZY">99999</div>
                            <div class="col-2 col-lg-2 carMarginPadding0_ZY carListFont_ZY">1</div>
                            <div class="col-2 col-lg-2 carMarginPadding0_ZY carListFont_ZY">99999</div>
                        </div>
                        <!-- 這是條線 -->
                        <div class="row carlinebold_ZY"></div>
                        <!-- 這是條線 -->
                        <div class=" carRecipientTotleprice">
                            <div>結帳金額</div>
                            <div>
                                <p>$99999</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>



    </div>
    </div>

    <!--區隔撐開頁尾的空間-->
    <div class="shpFooterSpace-CL"></div>
    <!--頁尾-->
    <?php include __DIR__ . '/../../parts/html_footer.php' ?>


    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
    <script src="../shopcart_infor/shiocar_infor.js"></script>
    <!-- <script>
        $('#carRegister_ZY').validator().on('submit', function (e) {
            if (e.isDefaultPrevented()) { // 未驗證通過 則不處理
                return;
            } else { // 通过后，送出表单
                alert("已送出表單");
            }
            e.preventDefault(); // 防止原始 form 提交表单
        });
    </script> -->
</body>

</html>