<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>客服中心</title>
    <!--檔頭外掛-->
    <?php include __DIR__ . '/../../parts/html_head.php' ?>
    <!-- memberQA.css -->
    <link rel="stylesheet" href="/Upick/css/memberQA.css">

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
                    <li><a href="/Upick/web/member/memberFollow.php">追蹤清單</a></li>
                    <li><a href="/Upick/web/member/memberBranch.php">分店資訊</a></li>
                    <li><a href="/Upick/web/member/memService.php">服務條款</a></li>
                    <li><a href="/Upick/web/member/memPrivacyPolicy.php">隱私權政策</a></li>
                    <li><a href="/Upick/web/member/memberQA.php" class="memChange_HC">客服中心</a></li>
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
                    <h1 class="memberTitleText_HC">客服中心</h1>
                    <div class="memSquareBox_HC">
                        <div class="memSquare01_HC"></div>
                        <div class="memSquare02_HC"></div>
                    </div>
                </div>
                <div id="memQATab_HC">
                    <!-- Tab分頁 -->
                    <div class="memQATabTitle_HC">
                        <a href="javascript:void(0)" class="barItem_HC memQATabStyle_HC memQATablink_HC memQATestbtn_HC"
                            onclick="openClass(event, 'QAtab01_HC')">提出問題
                        </a>
                        <a href="javascript:void(0)" class="barItem_HC memQATabStyle_HC memQATablink_HC memQATestbtn_HC"
                            onclick="openClass(event, 'QAtab02_HC')">退換貨問題
                        </a>
                        <a href="javascript:void(0)" class="barItem_HC memQATabStyle_HC memQATablink_HC memQATestbtn_HC"
                            onclick="openClass(event, 'QAtab03_HC')">運送問題
                        </a>
                        <a href="javascript:void(0)" class="barItem_HC memQATabStyle_HC memQATablink_HC memQATestbtn_HC"
                            onclick="openClass(event, 'QAtab04_HC')">付款問題
                        </a>
                        <a href="javascript:void(0)" class="barItem_HC memQATabStyle_HC memQATablink_HC memQATestbtn_HC"
                            onclick="openClass(event, 'QAtab05_HC')">其他問題
                        </a>
                    </div>
                    <!-- Tab分頁內容 -->
                    <!-- 提出問題 -->
                    <div id="QAtab01_HC" class="memQATabCon_HC memQATabClass_HC">
                        <div class="memQAFormArea_HC">
                            <form action="" class="memQAForm_HC">
                                <h3>提出問題</h3>
                                <div class="memQFormArea_HC">
                                    <div class="memColumnWhite_HC">
                                        <p>姓名</p>
                                        <input type="text" placeholder="請輸入姓名">
                                    </div>
                                    <div class="memColumnWhite_HC">
                                        <p>聯絡信箱</p>
                                        <input type="text" placeholder="請輸入聯絡信箱">
                                    </div>
                                    <div class="memColumnWhite_HC">
                                        <p>聯絡電話</p>
                                        <input type="text" placeholder="請輸入聯絡電話">
                                    </div>
                                    <div class="memColumnWhite_HC">
                                        <p>訂單編號</p>
                                        <input type="text" placeholder="請輸入訂單編號 (選填)">
                                    </div>
                                    <div class="memColumnWhite_HC">
                                        <p>內容</p>
                                        <textarea name="" id="" class="memTextArea_HC"
                                            placeholder="請輸入您想詢問的內容"></textarea>
                                    </div>
                                    <button class="wBtnNGr memQAFormBtnShare_HC">送出</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- 退換貨問題 -->
                    <div id="QAtab02_HC" class="memQATabCon_HC memQATabClass_HC">
                        <div class="memQAGroup_HC">
                            <div class="memQABox_HC">
                                <h4>Q：鑑賞期說明</h4>
                                <p>依照消費者保護法規定，消費者均享有產品到貨七天鑑賞期之權益(注意！鑑賞期非試用期)，故若收到的商品是可以看到內容物的則不可拆開，若看不到內容物者始得拆封。<br>
                                    但退回產品(包含主機、附件、內外包裝、包材、隨機文件、贈品等)必須是全新狀態不得有刮傷且包裝完整，否則恕不接受退貨；任一贈品或附件或包材因皆為原廠原裝無法另行取得，價值無法衡量，若有缺件或毀損，產品無法退貨。<br>
                                    消耗性商品(如食品、耗材、墨水、網頁上有特別載明之商品、、等)，由於商品屬性特殊，或有保存期限問題，無法退訂，但仍享有新品瑕疵無條件退換貨的售後服務。<br>
                                    CPU新品不良無當場換新服務，需送修代理商檢測，敬請知悉。
                                </p>
                            </div>
                            <div class="memQABox_HC">
                                <h4>Q：該如何退換貨？</h4>
                                <p>請至訂單查詢頁，確認所要取消或辦理退貨的商品後，按下取消訂單中的「聯絡我們」鈕，則本公司將有專人立即為您辦理訂單取消、退貨事宜。
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- 運送問題 -->
                    <div id="QAtab03_HC" class="memQATabCon_HC memQATabClass_HC">
                        <div class="memQAGroup_HC">
                            <div class="memQABox_HC">
                                <h4>Q：發票收到了，我的商品怎麼還沒送到？</h4>
                                <p>發票與商品為分開寄送，因此不會同時到達，商品寄送時間請依商品網頁上說明敬請稍等！或是您可至本站「<a href="./memberOrder.html">查詢訂單</a>
                                    」功能查詢出貨進度。</p>
                            </div>
                            <div class="memQABox_HC">
                                <h4>Q：已經完成付款，商品約何時送達？</h4>
                                <p>目前尚無法指定到貨時間。</p>
                            </div>
                            <div class="memQABox_HC">
                                <h4>Q：可以指定時段、夜間或週日送貨嗎？</h4>
                                <p>訂單查詢如有顯示【完成付款】，表示我們收到您的帳款了，商品將會在付款完成日算起的 7個工作天內送達。或是您可至本站「<a
                                        href="./memberOrder.html">查詢訂單</a> 」功能查詢出貨進度。</p>
                            </div>
                        </div>
                    </div>
                    <!-- 付款問題 -->
                    <div id="QAtab04_HC" class="memQATabCon_HC memQATabClass_HC">
                        <div class="memQAGroup_HC">
                            <div class="memQABox_HC">
                                <h4>Q：請問付款方式有哪些？有匯款、貨到付款、支票和現金嗎？</h4>
                                <p>本站付款方式為「信用卡」、「貨到付款」、「到店付款」；另針對行動裝置提供兩種行動支付：「LINE Pay」、「街口支付」。</p>
                            </div>
                            <div class="memQABox_HC">
                                <h4>Q：可以接受國外的信用卡嗎？</h4>
                                <p>使用國外信用卡消費時只須通過「信用卡3D驗證」即可完成購買。</p>
                            </div>
                            <div class="memQABox_HC">
                                <h4>Q：請問信用卡線上分期付款方便嗎？</h4>
                                <p>信用卡線上分期付款機制可在數秒鐘之內授權完成，相較於下載申請書的方式便利許多。UPICK線上購物與各家銀行( 請參考網頁標示 ) 合作推出這項服務希望顧客能更便利。
                                </p>
                            </div>
                            <div class="memQABox_HC">
                                <h4>Q：我是選擇分期付款，為什麼銀行簡訊或是網路帳單通知總金額？</h4>
                                <p>銀行簡訊或是網路帳單通知消費總金額是沒錯，因為銀行需要對持卡者做授權額度的控管，並且安全完善的通知消費者核對總金額，不過在信用卡帳單是會分期扣款，敬請放心！</p>
                            </div>
                            <div class="memQABox_HC">
                                <h4>Q：我刷卡失敗，持卡行告知請貴公司打電話去確認？</h4>
                                <p>銀行是一般實體商店的作法，客戶正好在刷卡機旁邊，店家可以直接打電話並請客戶與銀行確認身份，可是本站是網路訂購方式非上述情況，請客戶向持卡行要求放寬「網路單筆消費額度」，或是直接在網路訂購時選擇ATM轉帳的方式。
                                </p>
                            </div>
                            <div class="memQABox_HC">
                                <h4>Q：如果信用卡換新卡，那分期付款帳單如何計算？</h4>
                                <p>目前若您的訂單是選擇分期付款的方式，信用卡年度更換新卡，對於您在PChome的消費資料是不會有影響的。信用卡中心會將您舊的消費轉換至新卡，敬請放心。若仍有疑問，建議您與原發卡銀行聯絡較為清楚。
                                </p>
                            </div>
                            <div class="memQABox_HC">
                                <h4>Q：商品未送達，信用卡帳單來了怎辦？需先繳款嗎？</h4>
                                <p>本站受限銀行請款時效，因此需要先請款，訂單方能完整成立，若待商品送達再請款則時效不及，訂單將會失效。因此本站統一作業，訂購者均需先完成付款，故訂購者若已收到帳單是需要先行繳款。
                                </p>
                            </div>
                            <div class="memQABox_HC">
                                <h4>Q：查詢訂單狀態為授權失敗，銀行會請款嗎？</h4>
                                <p>如確認訂單為授權失敗，原因可能為網路壅塞或是系統機制..等等不明因素，導致未接獲此筆訂單授權碼，而我們現行電子商務與銀行端無人工授權，故無法向您的發卡銀行辦理請款事宜，因此訂單如為失效亦不會做請款作業。<br>
                                    在此，請您與發卡行確認提供授權碼，我們可以協助透過銀行與銀行間取消此筆授權金額，盡快歸還您的信用額度，以利您再消費使用，如您尚需此商品，請網站上重新下訂單即可，如有不便之處，尚祈見諒！
                                </p>
                            </div>
                            <div class="memQABox_HC">
                                <h4>Q：使用行動支付注意事項</h4>
                                <p>行動裝置透過PChome 24h購物APP、Chrome瀏覽器或Android內建瀏覽器訂購方可使用「LINE Pay」、「街口支付」。</p>
                            </div>
                        </div>
                    </div>
                    <!-- 其他問題 -->
                    <div id="QAtab05_HC" class="memQATabCon_HC memQATabClass_HC">
                        <div class="memQAGroup_HC">
                            <div class="memQABox_HC">
                                <h4>Q：如何與客服中心聯絡？</h4>
                                <p>訂單如有訂購、付款、發票、運送、商品等問題，在常見問題Q&A中仍無法為您解答，請依發票上的客服專線連絡我們或是至本站「<a
                                        href="./memberQA.html">客服中心</a>」透過填寫表單聯絡客服，我們將在1-2個工作天內
                                    (不含週六日)確認結果後，儘速回覆在帳戶中「問答紀錄」，並隨後寄發一封Email或是電話通知。</p>
                            </div>
                            <div class="memQABox_HC">
                                <h4>Q：補貨中的商品約何時到貨？請貨到通知我好嗎？</h4>
                                <p>補貨約需1-2週，敬請稍稍等候！如有需商品貨到通知，請將該商品加入「<a
                                        href="./memberFollow.html">追蹤清單</a>」功能，待商品一到貨開放訂購，系統將自動寄發E-Mail通知。倘若確定補貨不到，商品將進行下架。
                                </p>
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
// 客服中心Tab切換
function openClass(evt, className) {
    var i, x, memQATablink_HCs;
    x = document.getElementsByClassName("memQATabClass_HC");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }

    memQATablink_HCs = document.getElementsByClassName("memQATablink_HC");
    for (i = 0; i < x.length; i++) {
        memQATablink_HCs[i].classList.remove("memQAActive_HC");
    }
    document.getElementById(className).style.display = "block";
    evt.currentTarget.classList.add("memQAActive_HC");
}
var QAmybtn = document.getElementsByClassName("memQATestbtn_HC")[0];
QAmybtn.click();

// Top
function topMove() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}
</script>

</html>