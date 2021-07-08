<nav class="navOne_ZY">
    <div class="navbar">
        <div class="navHamburgerBox_ZY">
            <div class="navHamburgerBtn_ZY">
                <div class="navHamburger_ZY"></div>
            </div>
        </div>
        <div class="navLogo_ZY">
            <img src="/UPICK/icon/logo-w.svg" alt="">
        </div>
        <!-- 這裡I標籤請塞入網址 -->
        <?php if (isset($_SESSION['loginUser'])) : ?>
            <!-- 已登入 -->
            <div class="navShopCart_ZY" onclick="location.href=
        '/Upick/web/shopcar/shopcart_origin.php';">
                <i class="fas fa-shopping-cart"><span class="badge badge-pill badge-danger cart-count">0</span></i>
            </div>
        <?php else : ?>
            <!-- 未登入 -->
            <div class="navShopCart_ZY" onclick="location.href=
        '/Upick/web/member/login.php';">
                <i class="fas fa-shopping-cart"><span class="badge badge-pill badge-danger cart-count">0</span></i>
            </div>
        <?php endif; ?>
        <?php if (isset($_SESSION['loginUser'])) : ?>
            <!-- 已登入 -->
            <div class="navmember_ZY" onclick="location.href=
        '/Upick/web/member/memberCentre.php';">
                <i class="fas fa-user"></i>
            </div>
        <?php else : ?>
            <!-- 未登入 -->
            <div class="navmember_ZY" onclick="location.href=
        '/Upick/web/member/login.php';">
                <i class="fas fa-user"></i>
            </div>
        <?php endif; ?>
    </div>

    <div class="navbarLinkUl_ZY">
        <div class="navUser_ZY">
            <!-- <div class="navUserPhoto">
                <img
                    src="../icon/user.png"
                    alt="#"
                >
            </div> -->
            <!-- 這裡要判斷有無登入會員 變更navHidden_ZY標籤 -->
            <!-- <div class="navUserInfor navHidden_ZY">
                <p>陳金魚</p>
                <p>jinyu@gmail.com</p>
            </div>
            <div class="navUserInfor">
                <p>請登入會員</p>
            </div> -->

        </div>
        <?php if (isset($_SESSION['loginUser'])) : ?>
            <!-- 已登入 -->
            <div class="navbarLinkLi_ZY">
                <a class="" href="/Upick/shopHome.php?aniarea=none&shparea=block">商場</a>
                <div class="navUnderscore_ZY"></div>
            </div>
            <div class="navbarLinkLi_ZY">
                <a class="" href="/Upick/web/wepick/wepick-0.php">WePick</a>
                <div class="navUnderscore_ZY"></div>
            </div>
            <div class="navbarLinkLi_ZY">
                <a class="" href="/Upick/web/upick/upick-0.php">UPick</a>
                <div class="navUnderscore_ZY"></div>
            </div>
            <div class="navbarLinkLi_ZY">
                <a class="" href="/Upick/web/member/memberCentre.php">會員中心</a>
                <div class="navUnderscore_ZY"></div>
            </div>
            <div class="navbarLinkLi_ZY">
                <a class="" href="logout.php">登出</a>
                <div class="navUnderscore_ZY"></div>
            </div>

        <?php else : ?>
            <!-- 未登入 -->
            <div class="navbarLinkLi_ZY">
                <a class="" href="/Upick/shopHome.php?aniarea=none&shparea=block">商場</a>
                <div class="navUnderscore_ZY"></div>
            </div>
            <div class="navbarLinkLi_ZY">
                <a class="" href="/Upick/web/wepick/wepick-0.php">WePick</a>
                <div class="navUnderscore_ZY"></div>
            </div>
            <div class="navbarLinkLi_ZY">
                <a class="" href="/Upick/web/upick/upick-0.php">UPick</a>
                <div class="navUnderscore_ZY"></div>
            </div>
            <div class="navbarLinkLi_ZY">
                <a class="" href="/Upick/web/member/login.php">會員中心</a>
                <div class="navUnderscore_ZY"></div>
            </div>
            <div class="navbarLinkLi_ZY navHidden_ZY">
                <a class="" href="/Upick/web/member/login.php">登入/註冊</a>
                <div class="navUnderscore_ZY"></div>
            </div>
        <?php endif; ?>

    </div>
</nav>

<nav class="navTwo_ZY">
    <div class="navtop_ZY">
        <div class="navBreadCrumb_ZY">
            <p id="navSearch_ZY">查找商品請點選此處</p>
            <!-- <i class="fas fa-map-marker-alt"></i>
            <ol class="navBreadCrumbLine_ZY">
                <li class="navBreadCrumbItem_ZY">home</li>
                <li class="navBreadCrumbItem_ZY">Library</li>
                <li class="navBreadCrumbItem_ZY">Data</li>
            </ol> -->
        </div>
        <div class="navDownBar_ZY">
            <div class="navBottomIcon_ZY">
            </div>
            <!-- <i class="fas fa-angle-down"></i> -->
        </div>
    </div>

</nav>
<div class="navBottom_ZY">
    <form action="">
        <input type="search" name="" id="" placeholder="我想找... EX: ASUS OC RTX 3070">
        <div>

        </div>
        <button><i class="fas fa-search"> 搜尋</i></button>
    </form>
    <a class="navBtn_ZY" href="#" role="button">精選熱銷</a>
    <a class="navBtn_ZY" href="#" role="button">主題機</a>
    <a class="navBtn_ZY" href="/Upick/web/product/item_page.php?classid=01cpu" role="button">CPU</a>
    <a class="navBtn_ZY" href="/Upick/web/product/item_page.php?classid=02mb" role="button">主機板</a>
    <a class="navBtn_ZY" href="/UPICK/web/product/item_page.php?classid=04ram" role="button">記憶體</a>
    <a class="navBtn_ZY" href="/UPICK/web/product/item_page.php?classid=05hdd" role="button">傳統硬碟</a>
    <a class="navBtn_ZY" href="/UPICK/web/product/item_page.php?classid=06ssd" role="button">固態硬碟</a>
    <a class="navBtn_ZY" href="/UPICK/web/product/item_page.php?classid=03vga" role="button">顯示卡</a>
    <a class="navBtn_ZY" href="/UPICK/web/product/item_page.php?classid=07computercase" role="button">電腦機殼</a>
    <a class="navBtn_ZY" href="/UPICK/web/product/item_page.php?classid=08powersupply" role="button">電源供應器</a>
    <a class="navBtn_ZY" href="/UPICK/web/product/item_page.php?classid=12fan" role="button">散熱模組</a>
    <a class="navBtn_ZY" href="/UPICK/web/product/item_page.php?classid=09screen" role="button">周邊零件</a>



</div>

<!-- navbarjs -->
<script>
    const navHamburger = document.querySelector(".navHamburgerBox_ZY");
    const navburgerBtn = document.querySelector(".navHamburgerBtn_ZY")
    const navLinksUl = document.querySelector(".navbarLinkUl_ZY");
    const navLinkLi = document.querySelectorAll(".navbarLinkLi_ZY");
    const navUser = document.querySelector(".navUser_ZY")
    const navTwo = document.querySelector(".navTwo_ZY")
    const navBtm = document.querySelector(".navBottom_ZY")
    const navDownBar = document.querySelector(".navDownBar_ZY")
    const searchP = document.getElementById("navSearch_ZY")
    let navOneOpen = false;
    let navTwoOpen = false;

    navHamburger.addEventListener("click", () => {
        navLinksUl.classList.toggle("open");
        navLinkLi.forEach(navLinkLi => {
            navLinkLi.classList.toggle("navfade_ZY");
        });
        navUser.classList.toggle("navfade_ZY")
        document.body.classList.toggle("navlock_ZY")
        if (!navOneOpen) {
            navburgerBtn.classList.add('open');
            navOneOpen = true;
        } else {
            navburgerBtn.classList.remove('open');
            navOneOpen = false;
        };
        if (!navTwoOpen) {} else {
            navBtm.classList.toggle('navOpen_ZY');
            navDownBar.classList.remove('open');
            navTwoOpen = false;
        }

    });

    navTwo.addEventListener("click", () => {
        navBtm.classList.toggle('navOpen_ZY');

        document.body.classList.toggle("navlock_ZY")
        if (!navTwoOpen) {
            navDownBar.classList.add('open');
            searchP.innerText = "點選此處收合";
            navTwoOpen = true;

        } else {
            navDownBar.classList.remove('open');
            searchP.innerText = "查找商品請點選此處";
            navTwoOpen = false;
        }

    });
</script>