<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>分店資訊</title>
    <!--檔頭外掛-->
    <?php include __DIR__ . '/../../parts/html_head.php' ?>
    <!-- memberBranch.css -->
    <link rel="stylesheet" href="/Upick/css/memberBranch.css">
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
                    <li><a href="/Upick/web/member/memberBranch.php" class="memChange_HC">分店資訊</a></li>
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
                    <h1 class="memberTitleText_HC">分店資訊</h1>
                    <div class="memSquareBox_HC">
                        <div class="memSquare01_HC"></div>
                        <div class="memSquare02_HC"></div>
                    </div>
                </div>
                <!-- 分店資訊 -->
                <div class="memBranchCardArea_HC">
                    <div class="memBranchCard">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.673344249422!2d121.52584611544705!3d25.045157343997197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a97ad152f70f%3A0x6546dc141dae7bd5!2zMTAw5Y-w5YyX5biC5Lit5q2j5Y2A5YWr5b636Lev5LiA5q61MeiZnw!5e0!3m2!1szh-TW!2stw!4v1620360705592!5m2!1szh-TW!2stw"
                            style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                        <div class="memBranchAdd_HC">
                            <h4>光華數位店</h4>
                            <p>
                                電話：02-8288-8968 <br>
                                地址：100台北市中正區八德路一段1號<br>
                                營業時間：10:00~21:00 <br>
                            </p>
                        </div>
                    </div>
                    <div class="memBranchCard">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.67013693314!2d121.52906981544693!3d25.0452661439927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a964a9d32645%3A0x6cbe1c7387579bd7!2zMTAwNTjlj7DljJfluILkuK3mraPljYDluILmsJHlpKfpgZPkuInmrrUy6JmfIOiZn--8jDJG!5e0!3m2!1szh-TW!2stw!4v1620364118311!5m2!1szh-TW!2stw"
                            style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                        <div class="memBranchAdd_HC">
                            <h4>光華數位2店</h4>
                            <p>
                                電話：02-8288-8966 <br>
                                地址：100台北市中正區八德路一段2號2F <br>
                                營業時間：10:00~21:00 <br>
                            </p>
                        </div>
                    </div>
                    <div class="memBranchCard">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.664609827259!2d120.66324231543614!3d24.148413879370676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d9e2fad01ad%3A0x29e43f5e86555103!2zNDAz5Y-w5Lit5biC6KW_5Y2A6Iux5omN6LevNTAx6Jmf!5e0!3m2!1szh-TW!2stw!4v1620364214975!5m2!1szh-TW!2stw"
                            style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                        <div class="memBranchAdd_HC">
                            <h4>台中nova店</h4>
                            <p>
                                電話：04-8295-0668 <br>
                                地址：403台中市西區英才路501號 <br>
                                營業時間：10:00~21:00 <br>
                            </p>
                        </div>
                    </div>
                    <div class="memBranchCard">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.8589573296294!2d120.20967481542301!3d22.99221342323072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e768edb38e245%3A0x9579868878b3a6f!2zNzAx5Y-w5Y2X5biC5p2x5Y2A5YyX6ZaA6Lev5LiA5q61MTIw6JmfMg!5e0!3m2!1szh-TW!2stw!4v1620364325238!5m2!1szh-TW!2stw"
                            style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                        <div class="memBranchAdd_HC">
                            <h4>台南北門店</h4>
                            <p>
                                電話：06-8968-1324 <br>
                                地址：700台南市中西區北門路一段120號2樓 <br>
                                營業時間：10:00~21:00 <br>
                            </p>
                        </div>
                    </div>
                    <div class="memBranchCard">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.4323732651474!2d120.30635431541916!3d22.637662436283385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e04f29d0471ef%3A0xf3e652a23f962fa8!2zODA36auY6ZuE5biC5LiJ5rCR5Y2A5bu65ZyL5LqM6LevMTUw6Jmf!5e0!3m2!1szh-TW!2stw!4v1620364406659!5m2!1szh-TW!2stw"
                            style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                        <div class="memBranchAdd_HC">
                            <h4>高雄建國店</h4>
                            <p>
                                電話：07-8394-0842 <br>
                                地址：807高雄市三民區建國二路150號 <br>
                                營業時間：10:00~21:00 <br>
                            </p>
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