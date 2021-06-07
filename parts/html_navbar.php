<div class="navbarAll">
    <nav class="navbar navbar-expand-lg navbar-upick">
        <div class="upick-navbar-container row">
            <!-- logo -->
            <a class="navbar-brand" href="#"> <img src="/Upick/icon/logo-w.svg" alt="UPick" height="30" width="30"></a>
            <!-- 三明治按鈕 -->
            <button class="navbar-toggler navbar-toggler-upick" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <!-- 左邊的 三明治收合的內容 -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item up-nav-left">
                        <a class="nav-link navHome-CL" href="/Upick/shopHome.php">首頁</a>
                    </li>
                    <li class="nav-item up-nav-left">
                        <a class="nav-link " href="#">商場</a>
                    </li>
                    <li class="nav-item up-nav-left">
                        <a class="nav-link" href="/Upick/web/wepick/wepick-0.php">WePick</a>
                    </li>
                    <li class="nav-item up-nav-left">
                        <a class="nav-link" href="/Upick/web/upick/upick-0.php">UPick</a>
                    </li>
                </ul>
            </div>
            <!-- 右邊的 保留icon就好 -->
            <form class="form-inline my-2 my-lg-0 navbar-expand-lg">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item up-nav-right">
                        <a class="nav-link" href="#"><i class="fas fa-heart"></i> 追蹤清單</a>
                    </li>
                    <li class="nav-item up-nav-right">
                        <a class="nav-link" href="#"><i class="fas fa-shopping-cart "></i> 購物車
                        </a>
                    </li>

                    <li class="nav-item up-nav-right">
                        <a class="nav-link" href="#"><i class="fas fa-user"></i> 會員中心
                        </a>
                    </li>
                    <li class="nav-item up-nav-right">
                        <a class="nav-link" href="#">
                            <i class="fas fa-search"></i> 搜尋
                        </a>
                    </li>
                    <button class=" wBtnNav my-2 my-sm-0" type="submit">登入 / 註冊</button>

                </ul>
            </form>
        </div>

    </nav>

    <!-- 彩虹條 -->
    <div class="colorspace"></div>

    <!--白色搜尋bar區-->
    <div class="navSearch-CL">
        <!--搜尋輸入框-->
        <div class="wSearchInput">
            <!--文字輸入框-->
            <input class="wSearchInputBox wInputShare" type="text" placeholder="顯示卡、記憶體...">
            <!--搜尋按鈕-->
            <button class="wSearcBtn"><i class="fas fa-search"></i> 搜尋</button>
        </div>
        <div class="navSearchClass-CL">
            <div class="navSearchText-CL">
                <div class="navSearchColor-CL"></div>
                <span>精選熱銷</span>
            </div>
            <div class="navSearchText-CL">
                <div class="navSearchColor-CL"></div>
                <span>主題機</span>
            </div>
            <a href="/Upick/web/product/item_cpu.php">
                <div class="navSearchText-CL">
                    <div class="navSearchColor-CL"></div>
                    <span>CPU</span>
            </a>
        </div>
        <div class="navSearchText-CL">
            <div class="navSearchColor-CL"></div>
            <span>主機板</span>
        </div>
        <div class="navSearchText-CL">
            <div class="navSearchColor-CL"></div>
            <span>記憶體</span>
        </div>
        <div class="navSearchText-CL">
            <div class="navSearchColor-CL"></div>
            <span>傳統硬碟</span>
        </div>
        <div class="navSearchText-CL">
            <div class="navSearchColor-CL"></div>
            <span>固態硬碟</span>
        </div>
        <div class="navSearchText-CL">
            <div class="navSearchColor-CL"></div>
            <span>顯示卡</span>
        </div>
        <div class="navSearchText-CL">
            <div class="navSearchColor-CL"></div>
            <span>電腦機殼</span>
        </div>
        <div class="navSearchText-CL">
            <div class="navSearchColor-CL"></div>
            <span>電源供應器</span>
        </div>
        <div class="navSearchText-CL">
            <div class="navSearchColor-CL"></div>
            <span>散熱模組</span>
        </div>
        <div class="navSearchText-CL">
            <div class="navSearchColor-CL"></div>
            <span>周邊零件</span>
        </div>
    </div>
</div>

</div>

<!--SCRIPT-->
<?php include __DIR__ . '/../parts/scripts.php' ?>
<script>
    $('.navSearchText-CL').mouseover(function() {
        $(this).css('marginTop', '-5px').css('transition', '0.2s').siblings().css('marginTop', '0px');

        $(this).mouseout(function() {
            $(this).css('marginTop', '0px');
        })
    })
</script>