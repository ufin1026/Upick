<?php require __DIR__.'/../../__connect_db.php';

define('WEB_ROOT', '/UPICK');
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <!--檔頭外掛-->
    <?php include __DIR__ . '/../../parts/html_head.php' ?>
    <?php include __DIR__ . '/../../parts/html_navbar_phone.php' ?>
    <!-- login.css -->
    <link rel="stylesheet" href="/Upick/css/login.css">
</head>

<body>
    <?php include __DIR__ . '/../../parts/html_navbar.php' ?>
    <div class="container">
        <div id="memLoginTab_HC">
            <!-- Tab分頁 -->
            <div class="memTabTitle_HC">
                <a href="javascript:void(0)" class="barItem_HC memTabStyle_HC memDivider_HC memTablink_HC memTestbtn_HC"
                    onclick="openClass(event, 'tab01_HC')">會員登入
                </a>
                <a href="javascript:void(0)" class="barItem_HC memTabStyle_HC memTablink_HC memTestbtn_HC"
                    onclick="openClass(event, 'tab02_HC')">加入會員
                </a>
            </div>
            <!-- 會員登入 -->
            <div id="tab01_HC" class="memTabCon_HC memTabClass_HC">
                <form name="form1" id="form1" onsubmit="return false" action="##" method="post">
                    <!-- 帳號 -->
                    <div class="memColumn_HC">
                        <p>帳號</p>                    
                        <input onkeyup="check()" type="email" placeholder="請輸入信箱"
                            class="memEmailCheck_HC memAccountEmail_HC" name="email"  required>
                        <div class="memErroCSS_HC memErroEmail_HC">
                            <i class="fas fa-exclamation-circle"> 帳號格式錯誤！</i>
                        </div>
                        <!-- <div class="memErroCSS_HC">
                            <i class="fas fa-exclamation-circle"> 帳號未被註冊！</i>
                        </div> -->
                    </div>
                    <!-- 密碼 -->
                    <div class="memColumn_HC memLoginPassword_HC">
                        <p>密碼</p>
                        <input id="memLoginPassword_HC" type="password" placeholder="請輸入密碼" name="password"
                            class="memNull2_HC memLogPass_HC memPassWord_HC" required>
                        <i toggle="#memLoginPassword_HC" class="far fa-eye-slash memPassIcon_HC memTogglePassword_HC"></i>                        
                    </div>
                    <!-- 忘記密碼 -->
                    <!-- <div class="memForgetArea_HC">
                        <a class="memForget_HC" href="./forget.php">忘記密碼</a>
                    </div> -->
                    <!-- 登入按鈕 -->
                    <button class="wBtnNGr memBtnShare_HC memLoginBtn" onclick="LoginUser()">登入</button>
                    <div class="memErroCSS_HC memLogNoInput_HC">
                        <i class="fas fa-exclamation-circle"> 帳號/密碼 未填寫！</i>
                    </div>
                    <div class="memErroCSS_HC memWrongLog_HC">
                            <i class="fas fa-exclamation-circle"> 帳號或密碼輸入錯誤！</i>
                    </div>
                </form>
                <!-- <div id="memQuickLog_HC">
                    <a href="#" class="memDivider_HC"><i class="fab fa-facebook-f"></i>使用Facebook登入</a>
                    <a href="#"><i class="fab fa-google"></i>使用Google登入</a>
                </div> -->
            </div>
            <!-- 加入會員 -->
            <div id="tab02_HC" class="memTabCon_HC memTabClass_HC">
                <form name="form2" id="form2" onsubmit="return false" action="##" method="post">
                    <!-- 帳號 -->
                    <div class="memColumn_HC">
                        <p>帳號</p>
                        <input onkeyup="check2()" type="email" placeholder="請輸入信箱"
                            class="memEmailCheck2_HC memNI_HC memAccountEmail_HC" name="email" required>
                        <div class="memErroCSS_HC memHasReg_HC">
                            <i class="fas fa-exclamation-circle"> 帳號已被註冊過！</i>
                        </div>
                        <div class="memErroCSS_HC memErroEmail2_HC">
                            <i class="fas fa-exclamation-circle"> 帳號格式錯誤！</i>
                        </div>
                    </div>
                    <!-- 密碼 -->
                    <div class="memColumn_HC memRegisterPassword_HC">
                        <p>密碼</p>
                        <input onkeyup="checkPass()" id="memRegisterPassword_HC" type="password" placeholder="請輸入密碼"
                            name="password" class="memCheckPswrd1_HC memPassWord_HC" required>
                        <i toggle="#memRegisterPassword_HC"
                            class="far fa-eye-slash memPassIcon_HC memToggleRegisterPassword_HC"></i>
                    </div>
                    <!-- 確認密碼 -->
                    <div class="memColumn_HC memRegisterCheckPassword_HC">
                        <p>確認密碼</p>
                        <input onkeyup="checkPass()" id="memRegisterCheckPassword_HC" type="password" placeholder="請再次輸入密碼"
                            name="password" class="memCheckPswrd2_HC" required>
                        <i toggle="#memRegisterCheckPassword_HC"
                            class="far fa-eye-slash memPassIcon_HC memToggleRegisterCheckPassword_HC"></i>
                        <div class="memErroCSS_HC memCheckErro_HC">
                            <i class="fas fa-exclamation-circle"> 密碼不符！</i>
                        </div>
                    </div>
                    <div class="memCheck_HC">
                        <p>加入會員表示您已同意了 UPICK 的<button class="memServBox_HC" type="button">《服務條款》</button>以及<button class="memPrivacyBox_HC" type="button">《隱私權政策》</button>。
                        </p>
                    </div>
                    <button class="wBtnNGr memBtnShare_HC memRegisterBtn" onclick="RegisterUser()">加入會員</button>
                </form>
                <div class="memErroCSS_HC memNoInput_HC">
                    <i class="fas fa-exclamation-circle"> 帳號/密碼/確認密碼 未填寫！</i>
                </div>
                <!-- <div id="memQuickLog_HC">
                    <a href="#" class="memDivider_HC"><i class="fab fa-facebook-f"></i>使用Facebook登入</a>
                    <a href="#"><i class="fab fa-google"></i>使用Google登入</a>
                </div> -->
            </div>            
            <!-- 服務條款 -->
            <div class="memTermsBox_HC">                
                <button class="memClose_HC" type="button">
                    <i class="fas fa-times"></i>
                </button>
                <div class="memTermsArea_HC">                    
                    <ul>
                        <li>
                            <h4>一、認知與接受條款</h4>
                            <p>1.UPICK數位科技股份有限公司係依據本服務條款提供UPICK服務
                                (以下簡稱「本服務」)。當會員完成UPICK之會員註冊手續、或開始使用本服務時，即表示已閱讀、瞭解並同意接受本服務條款之所有內容，並完全接受本服務現有與未來衍生的服務項目及內容。UPICK公司有權於任何時間修改或變更本服務條款之內容，修改後的服務條款內容將公佈網站上，UPICK將不會個別通知會員，建議會員隨時注意該等修改或變更。會員於任何修改或變更後繼續使用本服務時，視為會員已閱讀、瞭解並同意接受該等修改或變更。若不同意上述的服務條款修訂或更新方式，或不接受本服務條款的其他任一約定，會員應立即停止使用本服務。
                            </p>
                            <p>2.若會員為未滿二十歲之未成年人，應於會員的家長（或監護人）閱讀、瞭解並同意本約定書之所有內容及其後修改變更後，方得註冊為會員、使用或繼續使用本服務。當會員使用或繼續使用UPICK時，即推定會員的家長（或監護人）已閱讀、瞭解並同意接受本約定書之所有內容及其後修改變更。
                            </p>
                            <p>3.會員及UPICK雙方同意使用本服務之所有內容包括意思表示等，以電子文件作為表示方式。
                            </p>
                            <p>4.為了確保會員之個人資料、隱私及消費者權益之保護，於交易過程中將使用會員之個人資料，謹依個人資料保護法第8條規定告知以下事項：</p>
                            <ul>
                                <li class="memListStyle_HC">
                                    <p>
                                        蒐集之目的：<br>
                                        蒐集之目的在於進行行銷業務、消費者、客戶管理與服務、網路購物及其他電子商務服務及與調查、統計與研究分析(法定特定目的項目編號為Ｏ四Ｏ、Ｏ九Ｏ、一四八、一五七)。UPICK將藉由加入會員之過程或進行交易之過程來蒐集個人資料。
                                    </p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>
                                        蒐集之個人資料類別：<br>
                                        UPICK於網站內蒐集的個人資料包括，<br>
                                        (1) C001辨識個人者： 如會員之姓名、地址、電話、電子郵件等資訊。<br>
                                        (2) C002辨識財務者： 如信用卡或金融機構帳戶資訊。<br>
                                        (3) C011個人描述：例如：性別、出生年月日等。
                                    </p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>
                                        利用期間、地區、對象及方式：<br>
                                        (1) 期間：會員當事人要求停止使用或UPICK停止提供服務之日為止。<br>
                                        (2) 地區：會員之個人資料將使用於台灣地區。<br>
                                        (3)
                                        利用對象及方式：會員之個人資料蒐集除用於UPICK之會員管理、客戶管理之檢索查詢等功能外，亦將利用於辨識身份、金流服務、物流服務、行銷廣宣等。例示如下：<br>
                                        a. 以會員身份使用UPICK提供之各項服務時，於頁面中自動顯示會員資訊。<br>
                                        b.
                                        為遂行交易行為：會員對商品或勞務為預約、下標、購買、參與贈獎等之活動或從事其他交易時，關於商品配送、勞務提供、價金給付、回覆客戶之詢問、UPICK對會員之詢問、相關售後服務及其他遂行交易所必要之業務。<br>
                                        c.
                                        宣傳廣告或行銷等：提供會員各種電子雜誌等資訊、透過電子郵件、郵件、電話等提供與服務有關之資訊。將會員所瀏覽之內容或廣告，依客戶之個人屬性或購買紀錄、UPICK網站之瀏覽紀錄等項目，進行個人化作業、會員使用服務之分析、新服務之開發或既有服務之改善等。針對民調、活動、留言版等之意見，或其他服務關連事項，與會員進行聯繫。<br>
                                        d. 回覆客戶之詢問：針對會員透過電子郵件、郵件、、傳真、電話或其他任何直接間接連絡方式向UPICK所提出之詢問進行回覆。<br>
                                        e. 其他業務附隨之事項：附隨於上述a至d.之利用目的而為UPICK提供服務所必要之使用。<br>
                                        f.
                                        對於各別服務提供者之資訊提供：會員對服務提供者之商品或勞務為預約、下標、購買、參加贈獎活動或申請其他交易時，UPICK於該交易所必要之範圍內，得將會員之個人資料檔案提供予服務提供者，並由服務提供者負責管理該個人資料檔案。UPICK將以規約課予服務提供者依保障會員隱私權之原則處理個人資料之義務，但無法保證服務提供者會必然遵守。詳細內容，請向各別服務提供者洽詢。<br>
                                        g. 其他：提供個別服務時，亦可能於上述規定之目的以外，利用個人資料。此時將在該個別服務之網頁載明其要旨。<br>
                                    </p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>
                                        會員就個人資料之權利：<br>
                                        UPICK所蒐集個人資料之當事人，依個人資料保護法得對UPICK行使以下權利：<br>
                                        (1) 查詢或請求閱覽。<br>
                                        (2) 請求製給複製本。<br>
                                        (3) 請求補充或更正。<br>
                                        (4) 請求停止蒐集、處理或利用。<br>
                                        (5) 請求刪除。<br>
                                        會員如欲行使上述權利，可與UPICK客服連絡進行申請。<br>
                                    </p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>
                                        請注意！如拒絕提供加入會員所需必要之資料，將可能導致無法享受完整服務或完全無法使用該項服務。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>二、會員的註冊義務</h4>
                            <p>
                                為了能使用本服務，會員同意以下事項：
                            </p>
                            <ul>
                                <li class="memListStyle_HC">
                                    <p>
                                        依本服務註冊表之提示提供會員本人正確、最新的資料，且不得以第三人之名義註冊為會員。每位會員僅能註冊登錄一個帳號，不可重覆註冊登錄。
                                    </p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>即時維持並更新會員個人資料，確保其正確性，以獲取最佳之服務。
                                    </p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>若會員提供任何錯誤或不實的資料、或未按指示提供資料、或欠缺必要之資料、或有重覆註冊帳號等情事時，UPICK有權不經事先通知，逕行暫停或終止會員的帳號，並拒絕會員使用本服務之全部或一部。
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>三、UPICK隱私權政策</h4>
                            <p>
                                關於會員的註冊以及其他特定資料依UPICK「<a href="./memPrivacyPolicy.html">隱私權政策</a>」受到保護與規範。
                            </p>
                        </li>
                        <li>
                            <h4>四、會員帳號、密碼及安全</h4>
                            <p>
                                1.完成本服務的登記程序之後，會員將取得一個特定之密碼及會員帳號，維持密碼及帳號之機密安全，是會員的責任。任何依照規定方法輸入會員帳號及密碼與登入資料一致時，無論是否由本人親自輸入，均將推定為會員本人所使用，利用該密碼及帳號所進行的一切行動，會員本人應負完全責任。
                            </p>
                            <p>
                                2.會員同意以下事項：
                            </p>
                            <ul>
                                <li class="memListStyle_HC">
                                    <p>會員的密碼或帳號遭到盜用或有其他任何安全問題發生時，會員將立即通知UPICK
                                    </p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>每次連線完畢，均結束會員的帳號使用。</p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>會員的帳號、密碼及會員權益均僅供會員個人使用及享有，不得轉借、轉讓他人或與他人合用。</p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>帳號及密碼遭盜用、不當使用或其他UPICK無法辯識是否為本人親自使用之情況時，對此所致之損害，除證明係因可歸責於UPICK之事由所致，UPICK將不負任何責任。
                                    </p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>UPICK若知悉會員之帳號密碼確係遭他人冒用時，將立即暫停該帳號之使用(含該帳號所生交易之處理)。</p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>五、兒童及青少年之保護</h4>
                            <p>
                                為確保兒童及青少年使用網路的安全，並避免隱私權受到侵犯，家長（或監護人）應盡到下列義務：
                                未滿十二歲之兒童使用本服務時時，應全程在旁陪伴，十二歲以上未滿十八歲之青少年使用本服務前亦應斟酌是否給予同意。
                            </p>
                        </li>
                        <li>
                            <h4>六、使用者的守法義務及承諾</h4>
                            <p>
                                會員承諾絕不為任何非法目的或以任何非法方式使用本服務，並承諾遵守中華民國相關法規及一切使用網際網路之國際慣例。會員若係中華民國以外之使用者，並同意遵守所屬國家或地域之法令。會員同意並保證不得利用本服務從事侵害他人權益或違法之行為，包括但不限於：
                            </p>
                            <ul>
                                <li class="memListStyle_HC">
                                    <p>公布或傳送任何誹謗、侮辱、具威脅性、攻擊性、不雅、猥褻、不實、違反公共秩序或善良風俗或其他不法之文字、圖片或任何形式的檔案</p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>侵害或毀損UPICK或他人名譽、隱私權、營業秘密、商標權、著作權、專利權、其他智慧財產權及其他權利
                                    </p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>違反依法律或契約所應負之保密義務</p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>冒用他人名義使用本服務</p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>傳輸或散佈電腦病毒</p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>從事未經UPICK事前授權的商業行為</p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>刊載、傳輸、發送垃圾郵件、連鎖信、違法或未經UPICK許可之多層次傳銷訊息及廣告等；或儲存任何侵害他人智慧財產權或違反法令之資料</p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>對本服務其他用戶或第三人產生困擾、不悅或違反一般網路禮節致生反感之行為
                                    </p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>其他不符本服務所提供的使用目的之行為或UPICK有正當理由認為不適當之行為</p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>七、服務內容之變更與電子報及EDM發送</h4>
                            <p>
                                1.會員同意UPICK所提供本服務之範圍，UPICK均得視業務需要及實際情形，增減、變更或終止相關服務的項目或內容，且無需個別通知會員。<br>
                                2.會員同意UPICK得依實際執行情形，增加、修改或終止相關活動，並選擇最適方式告知會員。<br>
                                3.會員同意UPICK得不定期發送電子報或商品訊息(EDM)至會員所登錄的電子信箱帳號。當會員收到訊息後表示拒絕接受行銷時，UPICK將停止繼續發送行銷訊息。
                            </p>
                        </li>
                        <li>
                            <h4>八、服務之停止、中斷</h4>
                            <p>
                                UPICK將依一般合理之技術及方式，維持系統及服務之正常運作。但於以下各項情況時，UPICK有權可以停止、中斷提供本服務：
                            </p>
                            <ul>
                                <li class="memListStyle_HC">
                                    <p>
                                        UPICK網站電子通信設備進行必要之保養及施工時
                                    </p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>發生突發性之電子通信設備故障時</p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>UPICK網站申請之電子通信服務被停止，無法提供服務時</p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>由於天災等不可抗力之因素或其他不可歸責於UPICK致使UPICK網站無法提供服務時</p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>九、交易行為</h4>
                            <p>
                                1.會員使用本服務進行交易時，應依據UPICK所提供之確認商品數量及價格機制進行。<br>
                                2.會員同意使用本服務訂購產品時，於UPICK通知確認交易成立前，UPICK仍保有不接受訂單或取消出貨之權利。會員向UPICK發出訂購通知後，系統將自動發出接受通知，但此通知並非訂單確認通知，關於交易成立與否UPICK將另行告知。若因訂單內容之標的商品或服務，其交易條件(包括但不限於規格、內容說明、圖片、)有誤時，UPICK仍得於下單後二工作日內拒絕該筆訂單。<br>
                                3.會員若於使用本服務訂購產品後倘任意退換貨、取消訂單、或有任何UPICK認為不適當而造成UPICK作業上之困擾或損害之行為，UPICK將可視情況採取拒絕交易、暫停取消7-11或客樂得配送付款方式，或永久取消會員資格辦理。若會員訂購之產品若屬於以下情形：（１）預購類商品（２）商品頁顯示無庫存（３）須向供應商調貨（４）轉由廠商出貨，因商品交易特性之故，倘商品缺絕、或廠商因故無法順利供貨導致訂單無法成立時，UPICK將以最適方式(以電子郵件為主，再輔以電話、郵遞或傳真等)告知。<br>
                                4.會員使用本服務進行交易時，得依照消費者保護法之規定行使權利。因會員之交易行為而對本服務條款產生疑義時，應為有利於消費者之解釋。
                            </p>
                        </li>
                        <li>
                            <h4>十、責任之限制與排除</h4>
                            <p>
                                1.本服務所提供之各項功能，均依該功能當時之現況提供使用，UPICK對於其效能、速度、完整性、可靠性、安全性、正確性等，皆不負擔任何明示或默示之擔保責任。<br>
                                2.UPICK並不保證本服務之網頁、伺服器、網域等所傳送的電子郵件或其內容不會含有電腦病毒等有害物；亦不保證郵件、檔案或資料之傳輸儲存均正確無誤不會斷線和出錯等，因各該郵件、檔案或資料傳送或儲存失敗、遺失或錯誤等所致之損害，UPICK不負賠償責任。
                            </p>
                        </li>
                        <li>
                            <h4>十一、智慧財產權的保護</h4>
                            <p>
                                1.UPICK所使用之軟體或程式、網站上所有內容，包括但不限於著作、圖片、檔案、資訊、資料、網站架構、網站畫面的安排、網頁設計，均由UPICK或其他權利人依法擁有其智慧財產權，包括但不限於商標權、專利權、著作權、營業秘密與專有技術等。任何人不得逕自使用、修改、重製、公開播送、改作、散布、發行、公開發表、進行還原工程、解編或反向組譯。若會員欲引用或轉載前述軟體、程式或網站內容，必須依法取得UPICK或其他權利人的事前書面同意。尊重智慧財產權是會員應盡的義務，如有違反，會員應對UPICK負損害賠償責任（包括但不限於訴訟費用及律師費用等）。<br>
                                2.在尊重他人智慧財產權之原則下，會員同意在使用UPICK之服務時，不作侵害他人智慧財產權之行為。<br>
                                3.若會員有涉及侵權之情事，UPICK可暫停全部或部份之服務，或逕自以取消會員帳號之方式處理。<br>
                                4.若有發現智慧財產權遭侵害之情事，請將所遭侵權之情形及聯絡方式，並附具真實陳述及擁有合法智慧財產權之聲明，以下列方式聯絡UPICK： 以電子郵件(E-mail)寄送至：
                                UPICK@gmail.com.tw <br>
                                (請注意！此為限定用途之信箱，非關侵權事項通知之信件寄送至此將不獲受理，UPICK會員有任何疑問請至<a href="./memberQA.html">客服中心</a>詢問)

                            </p>
                        </li>
                        <li>
                            <h4>十二、會員對UPICK之授權</h4>
                            <p>
                                對於會員上載、傳送、輸入或提供之資料，會員同意UPICK網站得於合理之範圍內蒐集、處理、保存、傳遞及使用該等資料，以提供使用者其他資訊或服務、或作成會員統計資料、或進行關於網路行為之調查或研究，或為任何之合法使用。
                                若會員無合法權利得授權他人使用、修改、重製、公開播送、改作、散布、發行、公開發表某資料，並將前述權利轉授權第三人，請勿擅自將該資料上載、傳送、輸入或提供至UPICK。任何資料一經會員上載、傳送、輸入或提供至UPICK時，視為會員已允許UPICK無條件使用、修改、重製、公開播送、改作、散布、發行、公開發表該等資料，並得將前述權利轉授權他人，會員對此絕無異議。會員並應保證UPICK使用、修改、重製、公開播送、改作、散布、發行、公開發表、轉授權該等資料，不致侵害任何第三人之智慧財產權，否則應對UPICK負損害賠償責任（包括但不限於訴訟費用及律師費用等）。

                            </p>
                        </li>
                        <li>
                            <h4>十三、特別授權事項</h4>
                            <p>
                                因使用本服務所提供之網路交易或活動，可能須透過宅配或貨運業者始能完成貨品(或贈品等)之配送或取回，因此，會員同意並授權UPICK得視該次網路交易或活動之需求及目的，將由會員所提供且為配送所必要之個人資料(如收件人姓名、配送地址、連絡電話等)，提供予宅配貨運業者及相關配合之廠商，以利完成該次貨品(或贈品等)之配送、取回。

                            </p>
                        </li>
                        <li>
                            <h4>十四、拒絕或終止會員的使用</h4>
                            <p>
                                會員同意UPICK得基於維護交易安全之考量，因任何理由，包含但不限於缺乏使用，或違反本服務條款的明文規定及精神，終止會員的密碼、帳號（或其任何部分）或本服務（或其任何部分）之使用，或將本服務內任何「會員內容」加以移除並刪除。此外，會員同意若本服務（或其任何部分）之使用被終止，UPICK對會員或任何第三人均不承擔責任。
                            </p>
                        </li>
                        <li>
                            <h4>十五、準據法與管轄法院</h4>
                            <p>
                                本服務條款之解釋與適用，以及與本服務條款有關或會員與UPICK間因交易行為而產生之爭議或糾紛，應依照中華民國法律予以處理，並以台灣台北地方法院為第一審管轄法院，但若法律對於管轄法院另有強制規定者，仍應依其規定。
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- 隱私權政策 -->
            <div class="memTermsPBox_HC">
                <button class="memCloseP_HC" type="button">
                    <i class="fas fa-times"></i>
                </button> 
                <div class="memTermsArea_HC">
                    <ul>
                        <li>
                            <h4>個人資料之安全</h4>
                            <p>保護會員的個人隱私是UPICK重要的經營理念，在未經會員同意之下，我們絕不會將會員的個人資料提供予任何與本購物網站服務無關之第三人。會員應妥善保密自己的網路密碼及個人資料，不要將任何個人資料，尤其是網路密碼提供給任何人。在使用完UPICK網站所提供的各項服務功能後，務必記得登出帳戶，若是與他人共享電腦或使用公共電腦，切記要關閉瀏覽器視窗。
                            </p>
                        </li>
                        <li>
                            <h4>個人資料的蒐集、處理、利用</h4>
                            <p>
                                UPICK相關網站所取得的個人資料，都僅供UPICK於其內部、依照原來所說明的使用目的和範圍，除非事先說明、或依照相關法律規定，否則UPICK不會將資料提供給第三人、或移作其他目的使用。
                            </p>
                            <ul>
                                <li class="memListStyle_HC">
                                    <p>
                                        蒐集之目的：<br>
                                        蒐集之目的在於進行行銷業務、消費者、客戶管理與服務、網路購物及其他電子商務服務及與調查、統計與研究分析(法定特定目的項目編號為Ｏ四Ｏ、Ｏ九Ｏ、一四八、一五七)。UPICK將藉由加入會員之過程或進行交易之過程來蒐集個人資料。
                                    </p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>蒐集之個人資料類別：<br>
                                        UPICK於網站內蒐集的個人資料包括，<br>
                                        (1) C001辨識個人者： 如會員之姓名、地址、電話、電子郵件等資訊。<br>
                                        (2) C002辨識財務者： 如信用卡或金融機構帳戶資訊。<br>
                                        (3) C011個人描述：例如：性別、出生年月日等。<br>
                                    </p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>利用期間、地區、對象及方式：<br>
                                        (1) 期間：會員當事人要求停止使用或UPICK停止提供服務之日為止。<br>
                                        (2) 地區：會員之個人資料將用於台灣地區。<br>
                                        (3)
                                        利用對象及方式：會員之個人資料蒐集除用於UPICK之會員管理、客戶管理之檢索查詢等功能外，亦將利用於辨識身份、金流服務、物流服務、行銷廣宣等。例示如下：<br>
                                        a. 以會員身份使用UPICK提供之各項服務時，於頁面中自動顯示會員資訊。<br>
                                        b.
                                        為遂行交易行為：會員對商品或勞務為預約、下標、購買、參與贈獎等之活動或從事其他交易時，關於商品配送、勞務提供、價金給付、回覆客戶之詢問、UPICK對會員之詢問、相關售後服務及其他遂行交易所必要之業務。<br>
                                        c.
                                        宣傳廣告或行銷等：提供會員各種電子雜誌等資訊、透過電子郵件、郵件、電話等提供與服務有關之資訊。將會員所瀏覽之內容或廣告，依客戶之個人屬性或購買紀錄、UPICK網站之瀏覽紀錄等項目，進行個人化作業、會員使用服務之分析、新服務之開發或既有服務之改善等。針對民調、活動、留言版等之意見，或其他服務關連事項，與會員進行聯繫。<br>
                                        d. 回覆客戶之詢問：針對會員透過電子郵件、郵件、、傳真、電話或其他任何直接間接連絡方式向UPICK所提出之詢問進行回覆。<br>
                                        e. 其他業務附隨之事項：附隨於上述a至d.之利用目的而為UPICK提供服務所必要之使用。<br>
                                        f.
                                        對於各別服務提供者之資訊提供：會員對服務提供者之商品或勞務為預約、下標、購買、參加贈獎活動或申請其他交易時，UPICK於該交易所必要之範圍內，得將會員之個人資料檔案提供予服務提供者，並由服務提供者負責管理該個人資料檔案。UPICK將以規約課予服務提供者依保障會員隱私權之原則處理個人資料之義務，但無法保證服務提供者會必然遵守。詳細內容，請向各別服務提供者洽詢。<br>
                                        g. 其他：提供個別服務時，亦可能於上述規定之目的以外，利用個人資料。此時將在該個別服務之網頁載明其要旨。
                                    </p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>
                                        會員就個人資料之權利：<br>
                                        UPICK所蒐集個人資料之當事人，依個人資料保護法得對UPICK行使以下權利：<br>
                                        (1) 查詢或請求閱覽。<br>
                                        (2) 請求製給複製本。<br>
                                        (3) 請求補充或更正。<br>
                                        (4) 請求停止蒐集、處理或利用。<br>
                                        (5) 請求刪除。<br>
                                        會員如欲行使上述權利，可與UPICK客服連絡進行申請。<br>
                                    </p>
                                </li>
                                <li class="memListStyle_HC">
                                    <p>請注意！如拒絕提供加入會員所需必要之資料，將可能導致無法享受完整服務或完全無法使用該項服務。</p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>資料安全</h4>
                            <p>
                                為保障會員的隱私及安全，UPICK會員帳號資料會用密碼保護。UPICK並盡力以合理之技術及程序，保障所有個人資料之安全。
                            </p>
                        </li>
                        <li>
                            <h4>個人資料查詢或更正的方式全</h4>
                            <p>
                                會員對於其個人資料，有查詢及閱覽、製給複製本、補充或更正、停止電腦處理及利用、刪除等需求時，可以與客服中心聯絡，UPICK將迅速進行處理。
                            </p>
                        </li>
                        <li>
                            <h4>Cookie</h4>
                            <p>
                                為了便利會員使用，UPICK網站會使用cookie技術，以便於提供會員所需要的服務；cookie是網站伺服器用來和會員瀏覽器進行溝通的一種技術，它可能在會員的電腦中隨機儲存字串，用以辨識區別使用者，若會員關閉cookie有可能導致無法順利登入網站或無法使用購物車等狀況。
                            </p>
                        </li>
                        <li>
                            <h4>隱私權保護政策修訂</h4>
                            <p>
                                隨著市場環境的改變本公司將會不時修訂網站政策。會員如果對於UPICK網站隱私權聲明、或與個人資料有關之相關事項有任何疑問，可以利用電子郵件和 <a
                                    href="./memberQA.html">UPICK客服中心</a>聯絡。
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</body>

<!--SCRIPT-->
<?php include __DIR__ . '/../../parts/scripts.php' ?>
<script>
// 帳號格式錯誤
const email = document.querySelector('.memEmailCheck_HC');
const email2 = document.querySelector('.memEmailCheck2_HC');
const Erro = document.querySelector('.memErroEmail_HC');
const Erro2 = document.querySelector('.memErroEmail2_HC');
let regExp = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

// 會員登入-帳號格式錯誤
function check() {
    if (email.value.match(regExp)) {
        email.style.borderColor = "#7FFFE1";
        Erro.style.display = "none";
    } else {
        email.style.borderColor = "#FF8888";
        Erro.style.display = "block";
    }
    if (email.value == "") {
        email.style.borderColor = "#7FFFE1";
        Erro.style.display = "none";
    }
};

// 加入會員-帳號格式錯誤
function check2() {
    if (email2.value.match(regExp)) {
        email2.style.borderColor = "#7FFFE1";
        Erro2.style.display = "none";
    } else {
        email2.style.borderColor = "#FF8888";
        Erro2.style.display = "block";
    }
    if (email2.value == "") {
        email2.style.borderColor = "#7FFFE1";
        Erro2.style.display = "none";
    }
};

// 確認密碼
const CP1 = document.querySelector('.memCheckPswrd1_HC');
const CP2 = document.querySelector('.memCheckPswrd2_HC');
const passErro = document.querySelector('.memCheckErro_HC');
const passCheck = document.querySelector('.memRegisterBtn');

function checkPass() {
    if (CP1.value != CP2.value) {
        passErro.style.display = "block";
        CP1.style.borderColor = "#FF8888";
        CP2.style.borderColor = "#FF8888";
        passCheck.style.background = "#E4E8EE";
        // passCheck.disabled = "true";
        $(".memRegisterBtn").attr("disabled",true);

    } else {
        passErro.style.display = "none";
        CP1.style.borderColor = "#7FFFE1";
        CP2.style.borderColor = "#7FFFE1";
        passCheck.style.background = "#7FE0DC";
        // passCheck.disabled = "false";
        $(".memRegisterBtn").attr("disabled",false);
    }
};

// 登入註冊Tab切換
function openClass(evt, className) {
    var i, x, memTablink_HCs;
    x = document.getElementsByClassName("memTabClass_HC");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }

    memTablink_HCs = document.getElementsByClassName("memTablink_HC");
    for (i = 0; i < x.length; i++) {
        memTablink_HCs[i].classList.remove("memActive_HC");
    }
    document.getElementById(className).style.display = "block";
    evt.currentTarget.classList.add("memActive_HC");
};
var mybtn = document.getElementsByClassName("memTestbtn_HC")[0];
mybtn.click();

// 會員登入-顯示隱藏密碼
$(".memTogglePassword_HC").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});
// 加入會員 - 顯示隱藏密碼
$(".memToggleRegisterPassword_HC").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});
// 加入會員 - 顯示隱藏確認密碼
$(".memToggleRegisterCheckPassword_HC").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});

// 服務條款、隱私權政策
const openServ = document.querySelector('.memServBox_HC');
const openPrivacy = document.querySelector('.memPrivacyBox_HC');
const TermBox = document.querySelector('.memTermsBox_HC');
const TermPBox = document.querySelector('.memTermsPBox_HC');
const closeBox = document.querySelector('.memClose_HC');
const closePBox = document.querySelector('.memCloseP_HC');
openServ.onclick = function(){
    TermBox.style.display = "block";
};
openPrivacy.onclick = function(){
    TermPBox.style.display = "block";
};
closeBox.onclick = function () {
    TermBox.style.display = "none";
    TermPBox.style.display = "none";
};
closePBox.onclick = function () {
    TermPBox.style.display = "none";
};

// 註冊判定
const Succ = document.querySelector('.memRegisterBtn');
const noInput = document.querySelector('.memNoInput_HC');
const hasReg = document.querySelector('.memHasReg_HC');
function RegisterUser() {
    $.ajax({
        type: "POST", //方法
        url: "register-api.php", //表單接收url
        data: $('#form2').serialize(),
        dataType: "json",
        success: function(data) {
            console.log("OK")                
            if (data.success == true) {
                alert("註冊成功！歡迎您加入UPICK！請重新登入會員。");
                location.href = 'login.php';
            } else if (data.success == false) {
                hasReg.style.display = "block";
            }
        },
        error: function(data) {
            console.log("NOK");
            alert("註冊失敗");
        }
    });
};

// 登入判定
const logSucc = document.querySelector('.memLoginBtn');
const logNoInput = document.querySelector('.memLogNoInput_HC');
const logPass = document.querySelector('.memLogPass_HC');
const WrongLog = document.querySelector('.memWrongLog_HC');

function LoginUser() {
    $.ajax({
        type: "POST", //方法
        url: "login-api.php", //表單接收url
        data: $('#form1').serialize(),
        dataType: "json",
        success: function(data) {
            console.log("OK")
            if (data.success == true) {
                alert("登入成功！");
                location.href = '../../shopHome.php';
            } else if (data.success == false) {
                WrongLog.style.display = "block";
            }
        },
        error: function(data) {
            console.log("NOK");
        }
    });
};
</script>

</html>