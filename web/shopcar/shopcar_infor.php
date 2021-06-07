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
    <link rel="stylesheet" href="/Upick/css/shopcart_infor_stepbar.css">

    <link rel="stylesheet" href="/Upick/css/shopcart_infor.css">
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
                    <div class="carStepCircle_ZY ">2</div>
                    <div class="carStepTitle_ZY ">填寫付款配送資訊
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

    <div class="container carContainerM_ZY">
        <!-- 上面title -->
        <div class="row cartTitleRow_ZY">
            <div class="carheaderItem_ZY">
                <div class="carTitleName_ZY col-9">
                    商品
                </div>
                <div class="carTitlePrice_ZY col-1">
                    單價
                </div>
                <div class="carTitleQuantity_ZY col-1">數量</div>
                <div class="carTitleTotlePrice_ZY col-1">小計</div>
            </div>
        </div>
        <!-- 商品1 -->
        <div class="row cartItemRow_ZY" value="1">
            <div class="carItem_ZY">
                <div class="carItemName_ZY ">
                    <div class="carItemImg_ZY col-2">
                        <img src="/Upick/images/item_01.png" alt="">
                    </div>
                    <div class="carItemWord_ZY ">
                        Antec 安鈦克 NE550 TUF聯名款 550W 80+銅牌 (全日系電容/長140mm/五年保固二年換新)
                    </div>
                </div>
                <div class="carItemPrice_ZY col-1">$99999</div>
                <div class="carItemQuantityOut_Zy col-1">
                    <div class="carInforItemQuantity_Zy">
                        <p>
                            1
                        </p>
                    </div>
                </div>
                <div class="carItemTotlePrice_ZY col-1">$99999</div>
            </div>
        </div>
        <div class="row carBorderBottom_ZY"></div>


        <!-- 商品下方結帳資訊攔 -->
        <div class="row carFooterInfor_ZY">
            <div class="carTotalQuti_ZY col-10">
                <p>本次結帳共</p>
                <span>3</span>
                <p>項商品</p>
            </div>
            <div class="carTotalPrice_ZY col-2">
                <p>結帳金額:</p>
                <span>$99999</span>
            </div>

        </div>
    </div>


    <!-- 表單開始 -->
    <form id="carRegister_ZY" role="form" data-toggle="validator">
        <div class="container carInforcontainer_ZY">
            <div class="row carInforTitle_ZY">
                <h5>訂購資訊</h5>
            </div>

            <div class="row carOrdererInfor_ZY">
                <h4>訂購人資訊</h4>
            </div>
            <div class="row carOrdererName_ZY">
                <table>
                    <tbody>
                        <tr>
                            <th>
                                姓名：
                            </th>
                            <td>
                                王小名
                            </td>
                        </tr>
                        <tr>
                            <th>
                                信箱：
                            </th>
                            <td>
                                123456798@gmail.com
                            </td>
                        </tr>
                        <tr>
                            <th>
                                手機：
                            </th>
                            <td>
                                0912345678
                            </td>
                        </tr>
                        <tr>
                            <th>
                                地址：
                            </th>
                            <td>
                                台北市大安區復興南路一段
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row carOrdererInfor_ZY">
                <h4>收件人資訊</h4>
                <div class="carOrdererCheckbox_ZY">
                    <input type="checkbox" id="sameMember">
                    <label for="sameMember">
                        <p>同會員資料</p>
                    </label>
                </div>
            </div>


            <div class="row carOrdererInforBox">

                <div class="carInputContainer_ZY col-12 col-lg-6 ">
                    <p>姓名</p>
                    <div class="form-group">
                        <input type="text" class="input" name="name" placeholder="姓名" data-error=" 姓名尚未填寫或格式有誤"
                            required="required" value="">
                        <div class="help-block with-errors "></div>
                    </div>
                </div>
                <div class="carInputContainer_ZY  col-12 col-lg-6">
                    <p>信箱</p>
                    <div class="form-group">
                        <input type="email" class="input" name="email" placeholder="example123@gmail.com"
                            data-error="信箱尚未填寫或格式有誤" required="required">
                        <div class="help-block with-errors "></div>
                    </div>
                </div>
                <div class="carInputContainer_ZY  col-12 col-lg-6">
                    <p>手機</p>
                    <div class="form-group">
                        <input type="text" class="input" name="moblie" placeholder="手機" data-error="手機號碼尚未填寫或格式有誤"
                            required="required" pattern="09\d{2}-?\d{3}-?\d{3}">
                        <div class="help-block with-errors "></div>
                    </div>
                </div>

                <div class="carInputContainer_ZY  col-12 col-lg-6">
                    <p>市話</p>
                    <div class="form-group">
                        <input type="text" class="input" placeholder="市話" data-error="市話號碼格式有誤"
                            pattern="0\d{1,2}-?(\d{6,8})(#\d{1,5}){0,1}">
                        <div class="help-block with-errors "></div>
                    </div>
                </div>
                <div class="carInputContainer_ZY  col-12 col-lg-12">
                    <p>配送地址</p>
                    <div class="form-group">
                        <input type="text" class="input" placeholder="台北市文山區信義路四段123號" data-error="請填寫正確的配送地址"
                            required="required" minlength="13">
                        <div class="help-block with-errors "></div>
                    </div>
                </div>
                <!-- 信用卡資訊 -->
            </div>
            <div class="row carInforPaycontainer_ZY">
                <div class="carInforTitle_ZY">
                    <h5>付款資訊</h5>
                </div>

                <div class="carInforPayGroup_ZY">
                    <div class="carInforPayRadioBox_ZY">
                        <input type="radio" id="creditCard" value="creditCard" name="pay" checked class="true">

                        <label for="creditCard">信用卡</label>
                    </div>
                    <div class="carInforPayRadioBox_ZY">
                        <input type="radio" id="mobilePay" value="mobilePay" name="pay">
                        <label for="mobilePay">虛擬支付</label>
                    </div>
                </div>

                <div class="carInforCreditGroup_ZY carCreditbox boxhideZY" style="display: block;">
                    <div class="carInforPayBox_ZY">
                        <div class="carInforInputBox_ZY">
                            <div>信用卡號碼</div>
                            <div class="form-group">
                                <input type="tel" placeholder="請輸入16碼信用卡號" required class="CarNumber_ZY" maxlength="16"
                                    data-error="信用卡尚未填寫或格式有誤" pattern="\d{4}-?\d{4}-?\d{4}-?\d{4}" required="required">
                                <div class="help-block with-errors "></div>
                            </div>
                        </div>
                        <div class="carInforCreditCardNumberBox_ZY">
                            <div class="carInforInputNumber_ZY ">
                                <div>驗證碼</div>
                                <div class="form-group">
                                    <input type="tel" placeholder="123" required class=" CarCsvNumber_ZY " maxlength="3"
                                        data-error="格式有誤" pattern="\d{3}" required="required">
                                    <div class="help-block with-errors "></div>
                                </div>
                            </div>
                            <div class="carInforInputDate_ZY">
                                <div>有效日期</div>
                                <div class="carInforInputDateBoxOut_ZY">
                                    <div class="carInforInputDateBox_ZY">
                                        <select class="carInforInputDateSelect_ZY">
                                            <option value="">--</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                    <div class="carInforInputDateBox_ZY">
                                        <select class="carInforInputDateSelect_ZY">
                                            <option value="">--</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="30">30</option>
                                            <option value="32">32</option>
                                            <option value="33">33</option>
                                            <option value="34">34</option>
                                            <option value="35">35</option>
                                            <option value="36">36</option>
                                            <option value="37">37</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carInforCreditGroup_ZY boxhideZY carMobileBox">
                    <div class="carInforMobileText_ZY ">
                        訂單送出後三日內完成付款
                    </div>
                </div>

            </div>


            <div class="row carInforInvoicecontainer_ZY">
                <div class="row carInforTitle_ZY">
                    <h5>發票資訊</h5>
                </div>

                <div class="row carInvoiceBox_ZY">

                    <div class="carInvoicebtn_ZY">
                        <input type="radio" name="invoice" id="personal" checked="personal" value="personal">
                        <label for="personal">個人發票</label>

                    </div>
                    <div class="carInvoicebtn_ZY">
                        <input type="radio" name="invoice" id="company" value="company">
                        <label for="company">公司發票</label>
                    </div>
                </div>
                <div class="row carInvoiceInforBox_ZY invoicehideZY carPersonalBox" style="display: block;">
                    <div class="carInvoiceInforItem_ZY">
                        <input type="radio" name="invoiceinfor" id="member" checked="true" value="memberID">
                        <label for="member">UPICK會員載具</label>
                    </div>
                    <div class="carInvoiceInforItem_ZY form-group">
                        <input type="radio" name="invoiceinfor" id="mobile" value="mobileID">

                        <label for="mobile">手機載具</label>
                        <input type="tel" placeholder="/Y1+-JM2" id="mobilenum" maxlength="8" data-error="格式有誤"
                            class="mobilenum invoiceinforhideZY" required="required">
                        <div class="help-block with-errors"></div>

                    </div>
                    <div class="carInvoiceInforItem_ZY form-group">
                        <input type="radio" name="invoiceinfor" id="DigitalCertificate" value="DigitalCertificateID">
                        <label for="DigitalCertificate">自然人憑證</label>
                        <input type="tel" id="DigitalCertificatenum" class="DigitalCertificatenum invoiceinforhideZY"
                            maxlength="16" data-error="格式有誤">
                        <div class="help-block with-errors"></div>
                    </div>

                </div>
                <div class="row carInvoiceInforBox_ZY invoicehideZY carCompanyBox " style="display: none;">
                    <div class="carInvoiceInforCompanyItem_ZY">
                        <label for="taxID">統一編號</label>
                        <input type="text" name="invoiceinforCompany" id="taxID">

                    </div>
                    <div class="carInvoiceInforCompanyItem_ZY">
                        <label for="companyName">公司名稱</label>
                        <input type="text" name="invoiceinforCompany" id="companyName">
                    </div>
                </div>
            </div>

            <div class="row carInforRemark_ZY">
                <div class="row carInforTitle_ZY">
                    <h5>備註</h5>
                </div>

                <div class="row carInforRemarkBox_ZY">
                    <div class="carInforRemarkTitle_ZY">對商品有任何問題，請至 <span>會員中心>客服中心</span> 填寫表單發問 我們會盡快回覆您！</div>
                    <div class="carInforRemark_ZY">
                        <input type="text" name="remarks" id="remarks" placeholder="請輸入...">
                    </div>
                </div>
                <div class="container carSubmitBtnBox_ZY">

                    <button type="submit" class="carSubmitBtn_ZY" name="submitbtn" value="註冊">完成購買</button>
                </div>
            </div>
        </div>

        <div class="row carFixedInforM_ZY">
            <div class="carFixedInforFontM_ZY">
                <p>共1項商品</p>
                <p>合計：<span>$99999</span></p>
            </div>
            <div class="carFixedInforFontBtnBoxM_ZY">
                <button class="carFixedButtonM1_ZY">回購物車</button>
                <button class="carFixedButtonM2_ZY" type="submit" name="submitbtn" value="註冊">確定結帳</button>
            </div>

        </div>
    </form>
    <!-- 表單結束 -->






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