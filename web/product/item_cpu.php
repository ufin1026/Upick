<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__ . '/../../parts/html_head.php' ?>
    <!--固定元件:UMA小幫手style-->
    <link rel="stylesheet" href="/Upick/css/style_fixed_element.css">

    <!--item style-->
    <link rel="stylesheet" href="/Upick/css/style_item.css">
</head>

<body>
    <?php include __DIR__ . '/../../parts/html_navbar.php' ?>
    <!--固定元件:UMA小幫手html-->
    <?php include __DIR__ . '/../../parts/html_fixed_element.php' ?>

    <!--SiteButton,此為固定元件-->
    <div class="siteBtn-CL">
        <a class="sitBtnGo-CL" href="#shpTopSection_CL">
            <div class="siteBtnInnerTop-CL">
                <p>TOP</p>
            </div>
        </a>
    </div>

    <!--手機版-SiteButton,此為固定元件-->
    <div class="siteBtn-CL2">
        <a class="sitBtnGo-CL" href="#shpTopSection_CL">
            TOP
        </a>
    </div>


    <div class="aniContainerOut-CL">
        <!--商場區首頁-->
        <div class="shpTop-CL">
            <section id="shpTopSection_CL"></section>
            <!--商場頂部預留200px給navbar-->
            <div class="shpTopSpace-CL"></div>
            <!--商場內容區-->
            <div class="container shpContainer-CL">

                <!--頂部輪播牆-修改輪播牆寬度-->
                <div id="carouselExampleIndicators" class="carousel slide shpCarouselOut-CL" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                    </ol>
                    <!--修改輪播牆內容高度-->
                    <div class="carousel-inner shpCarousel-CL">
                        <div class="carousel-item active">
                            <img src="/Upick/images/topCaro_01.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/Upick/images/topCaro_01.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/Upick/images/topCaro_01.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                        <!--修改商品輪播牆上一頁之icon與顏色-->
                        <i class="fas fa-angle-left shpCaroBtnIcon-CL"></i>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                        <!--修改商品輪播牆下一頁之icon與顏色-->
                        <i class="fas fa-angle-right shpCaroBtnIcon-CL"></i>
                    </a>
                </div>

                <!--精選熱銷標題-->
                <div class="shpHotTitle-CL">
                    <h1>主機板 / CPU</h1>
                </div>

                <!--面包屑-->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <i class="fas fa-map-marker-alt"></i>
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>


                <!--熱銷商品區-->
                <div class="shpHotSale-CL">
                    <!--熱銷商品標題-->
                    <div class="shpHotSaleTitle-CL">
                        <h1>熱銷商品</h1>
                    </div>
                    <!--熱銷商品內容-商品輪播牆-->
                    <div id="carouselExampleControls" class="carousel slide shpHotSaleContain-CL" data-bs-ride="carousel">
                        <!--商品輪播牆內容-修改商品內容顯示區總高度-->
                        <div class="carousel-inner shpHotSaleInner-CL">
                            <!--商品輪播牆單頁內容-->
                            <div class="carousel-item active shpHotItemCaro-CL">
                                <div class="row">
                                    <div class="col">
                                        <a href="">
                                            <img class="itemShopCaroImg_CL" src="/Upick/images/item_01.png" alt="">
                                            <p class="itemShopCaroName_CL">Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                            <!--加入追蹤之愛心,購物車,金額-->
                                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL itemShopCaroDollor_CL">8790</span></div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <img src="/Upick/images/item_01.png" alt="">
                                        <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                        <!--加入追蹤之愛心,購物車,金額-->
                                        <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                                    </div>
                                    <div class="col">
                                        <img src="/Upick/images/item_01.png" alt="">
                                        <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                        <!--加入追蹤之愛心,購物車,金額-->
                                        <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                                    </div>
                                    <div class="col">
                                        <img src="/Upick/images/item_01.png" alt="">
                                        <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                        <!--加入追蹤之愛心,購物車,金額-->
                                        <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">

                            </div>

                        </div>
                        <a class="carousel-control-prev shpCaroBtn-CL" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                            <!--修改商品輪播牆上一頁之icon與顏色-->
                            <i class="fas fa-angle-left shpCaroBtnIcon-CL"></i>
                        </a>
                        <a class="carousel-control-next shpCaroBtn-CL" href="#carouselExampleControls" role="button" data-bs-slide="next">
                            <!--修改商品輪播牆下一頁之icon與顏色-->
                            <i class="fas fa-angle-right shpCaroBtnIcon-CL"></i>
                        </a>
                    </div>
                </div>

                <!--零件篩選區-->
                <div class="itemFilter-CL">
                    <div class="itemFilterClear-CL">
                        <button>篩選項目</button>
                        <button>篩選項目</button>
                        <button>篩選項目</button>
                    </div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">核心數<span>(cores(INT))</span></th>
                                <td>
                                    <div>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">2 core</label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">4 core</label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">6 core</label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">8 core</label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">10 core</label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">12 core</label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">16 core</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">型號<span>model(VARCHAR)</span></th>
                                <td>
                                    <div>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">AMD</label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">i3</label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">i5</label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">i7</label>
                                    </div>
                                    <div>
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">i9</label>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="itemFilterBrandImg-CL">
                        <a href="">
                            <div class="itemFilterBrand-CL"><img src="" alt="">AMD</div>
                        </a>
                        <a href="">
                            <div class="itemFilterBrand-CL"><img src="" alt="">Intel</div>
                        </a>
                    </div>
                    <!--篩選區收合btn-->
                    <div class="itemCollapse-CL">
                        <p>點擊以收合或開啟</p>
                    </div>
                </div>


                <!--手機版-零件篩選-->
                <div class="itemFilterPhone-CL">
                    <h4>請選擇商品篩選條件</h3>
                        <ul>核心數(cores(INT)) <i class="fas  fa-chevron-up"></i>
                            <li>2 core</li>
                            <li>4 core</li>
                            <li>6 core</li>
                            <li>8 core</li>
                            <li>10 core</li>
                            <li>12 core</li>
                            <li>16 core</li>
                        </ul>
                        <ul>型號model(VARCHAR) <i class="fas fa-chevron-up"></i>
                            <li>AMD</li>
                            <li>i3</li>
                            <li>i5</li>
                            <li>i7</li>
                            <li>i9</li>
                        </ul>
                        <ul>品牌 <i class="fas fa-chevron-up"></i>
                            <li>AMD</li>
                            <li>Intel</li>
                        </ul>
                </div>



                <!--排序按鈕-->
                <div class="itemSort-CL">
                    <button>最新上架</button>
                    <button>價格 <i class="fas fa-chevron-up"></i></button>
                    <button>銷量</button>
                    <button class="itemCount-CL">79</button>
                </div>

                <!--CPU零件區-->
                <section id="shpCpuSection_CL"></section>
                <div class="shpItem-CL shpCpu-CL">

                    <div class="row">
                        <div class="col-xl col-6">
                            <a href="">
                                <img class="itemShowImg_CL" src="/Upick/images/item_01.png" alt="">
                                <p class="itemShowName_CL">Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <!--加入追蹤之愛心,購物車,金額-->
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </a>
                        </div>
                        <div class="col-xl col-6">
                            <img src="/Upick/images/item_01.png" alt="">
                            <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                            <!--加入追蹤之愛心,購物車,金額-->
                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                        </div>
                        <div class="col-xl col-6">
                            <img src="/Upick/images/item_01.png" alt="">
                            <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                            <!--加入追蹤之愛心,購物車,金額-->
                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                        </div>
                        <div class="col-xl col-6">
                            <img src="/Upick/images/item_01.png" alt="">
                            <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                            <!--加入追蹤之愛心,購物車,金額-->
                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-xl col-6">
                            <a href="">
                                <img src="/Upick/images/item_01.png" alt="">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <!--加入追蹤之愛心,購物車,金額-->
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </a>
                        </div>
                        <div class="col-xl col-6">
                            <img src="/Upick/images/item_01.png" alt="">
                            <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                            <!--加入追蹤之愛心,購物車,金額-->
                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                        </div>
                        <div class="col-xl col-6">
                            <img src="/Upick/images/item_01.png" alt="">
                            <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                            <!--加入追蹤之愛心,購物車,金額-->
                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                        </div>
                        <div class="col-xl col-6">
                            <img src="/Upick/images/item_01.png" alt="">
                            <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                            <!--加入追蹤之愛心,購物車,金額-->
                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-xl col-6">
                            <a href="">
                                <img src="/Upick/images/item_01.png" alt="">
                                <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                <!--加入追蹤之愛心,購物車,金額-->
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                            </a>
                        </div>
                        <div class="col-xl col-6">
                            <img src="/Upick/images/item_01.png" alt="">
                            <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                            <!--加入追蹤之愛心,購物車,金額-->
                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                        </div>
                        <div class="col-xl col-6">
                            <img src="/Upick/images/item_01.png" alt="">
                            <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                            <!--加入追蹤之愛心,購物車,金額-->
                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                        </div>
                        <div class="col-xl col-6">
                            <img src="/Upick/images/item_01.png" alt="">
                            <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                            <!--加入追蹤之愛心,購物車,金額-->
                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
                        </div>
                    </div>

                </div>

                <!--頁碼-->
                <ul class="wWhitePgArea itemPage-CL">
                    <!--最前頁button-->
                    <li class="wWhitePgItem"><a class="wWhitePgLink" href="#"><i class="fas fa-angle-double-left"></i></a>
                    </li>
                    <!--前一頁button-->
                    <li class="wWhitePgItem"><a class="wWhitePgLink" href="#"><i class="fas fa-angle-left"></i></a></li>
                    <!--橫向顯示頁碼-->
                    <li class="wWhitePgItem wWhitePGnumber"><a class="wWhitePgLink" href="#">1</a></li>
                    <li class="wWhitePgItem wWhitePGnumber"><a class="wWhitePgLink" href="#">2</a></li>
                    <li class="wWhitePgItem wWhitePGnumber"><a class="wWhitePgLink" href="#">3</a></li>
                    <!--橫向顯示頁碼終止-->
                    <!--下一頁button-->
                    <li class="wWhitePgItem"><a class="wWhitePgLink" href="#"><i class="fas fa-angle-right"></i></a></li>
                    <!--最後一頁button-->
                    <li class="wWhitePgItem"><a class="wWhitePgLink" href="#"><i class="fas fa-angle-double-right"></i></a>
                    </li>
                    <span class="wWhiteText">跳轉至</span>
                    <div class="wWhitePGJPareaL">
                        <div class="wWhitePGJParea">
                            <!--顯示跳轉頁數的方框-->
                            <div class="wWhiteNewPG"></div>
                            <!--選擇欲跳轉頁數的下拉選單按鈕-->
                            <div class="wWhiteSlePG"><i class="fas fa-chevron-down"></i></div>
                        </div>
                        <ul class="wWhiteJPPGarea">
                            <!--下拉選單頁碼-->
                            <li class="wWhiteJPPG"><a class="wWhitePgLink2" href="#">1</a></li>
                            <li class="wWhiteJPPG"><a class="wWhitePgLink2" href="#">2</a></li>
                            <li class="wWhiteJPPG"><a class="wWhitePgLink2" href="#">3</a></li>
                            <!--下拉選單頁碼終止-->
                        </ul>
                    </div>
                </ul>

                <!--區隔撐開頁尾的空間-->
                <div class="shpFooterSpace-CL"></div>

            </div>
            <!--頁尾-->
            <?php include __DIR__ . '/../../parts/html_footer.php' ?>

        </div>
    </div>



    <!--SCRIPT-->
    <?php include __DIR__ . '/../../parts/scripts.php' ?>
    <script>
        $(document).ready(function() {
            //手機版-小於1200則searchbar不出現
            if ($(window).width() < 1200) {
                $('.navSearch-CL').css('display', 'none');
                //熱銷商品標題不出現
                $('.shpHotSaleTitle-CL').css('display', 'none');
                //手機版-出現手機版篩選功能
                $('.itemFilterPhone-CL').css('display', 'block');

            }
            if ($(window).width() >= 1200) {
                //searchBar出現
                $('.navSearch-CL').css('display', 'block');
                //searchBar下滑效果
                setTimeout(function() {
                    $('.navSearch-CL').css('transform', 'translateY(0vh)').css('transition', '1s')
                        .css('opacity', '1');
                }, 1000);
                $('.umaHelper-CL').css('display', 'none');
                $('.umaConvert-CL').css('display', 'none');
                //WEB版不出現手機版篩選功能
                $('.itemFilterPhone-CL').css('display', 'none');

                //searhBar分類區CPU按鈕在初始畫面效果
                $('.navSearchText-CL').eq(2).css('marginTop', '0px');
                $('.navSearchColor-CL').eq(2).css('width', '120%').css('opacity', '1');
                $('.navSearchColor-CL').eq(2).siblings().children('.navSearchColor-CL').css('width', '0%').css('opacity', '0.2');
            }
        })

        //排序按鈕btn click效果
        $('.itemSort-CL button').click(function() {
            $(this).css('boxShadow', 'inset 1px 1px 2px gray').siblings().css('boxShadow', 'none');
        })
        $('.itemCount-CL').click(function() {
            $(this).css('boxShadow', 'inset 1px 1px 3px #000');
        })

        //手機版-固定元件出現時機
        if ($(window).width() < 1200) {
            //umahelper在手機版時不出現
            $('.umaHelper-CL').css('display', 'none');
            $('.umaConvert-CL').css('display', 'none');
        }
        //WEB版-固定元件出現時機
        if ($(window).width() >= 1200) {
            $(window).scroll(function() {
                var mouseScroll = $(window).scrollTop();
                var itemCaroTop = $('.shpCarouselOut-CL').offset().top;
                //siteBtn在一開始不出現,當mouse scroll超過輪播牆才出現
                if (mouseScroll > itemCaroTop) {
                    console.log(`itemCaroTop`, itemCaroTop);
                    $('.siteBtn-CL').css('transform', 'translateY(0vh)');
                } else {
                    $('.siteBtn-CL').css('transform', 'translateY(150vh)');
                }


                //umahelper在超過輪播牆時出現,超過商品區第一列時消失
                var itemTop = $('.shpItem-CL').offset().top;
                if ((mouseScroll > itemCaroTop) && (mouseScroll < itemTop)) {
                    console.log('hi already');
                    $('.umaHelper-CL').css('display', 'block');
                    $('.umaConvert-CL').css('display', 'block');
                }
                if ((mouseScroll >= itemTop) || (mouseScroll <= itemCaroTop)) {
                    console.log('hi not yat');
                    $('.umaHelper-CL').css('display', 'none');
                    $('.umaConvert-CL').css('display', 'none');
                }
            })
        }



        //點選零件篩選區收合btn,則收合至只剩下已選擇之篩選項目
        let uP = 0;
        $('.itemCollapse-CL').click(function() {
            $('.itemFilterBrandImg-CL').toggle();
            $('.itemFilter-CL table').toggle();
        })


        //siteBtn按鈕選擇效果
        $('.siteBtnInner-CL').click(function() {
            $(this).css('backgroundColor', '#383E44').children('p').css('color', '#ffffff');
            $(this).parent('.sitBtnGo-CL').siblings().children('.siteBtnInner-CL').css('backgroundColor', '#ffffff')
                .children('p').css('color', '#383E44');
        })

        //上滑至商場特效
        $('.sitBtnGo-CL').click(function() {
            //取得點選按鈕的href屬性的內容, 也就是連結的目標
            var result = $(this).attr('href');
            //偵測對應前往的section的top距離(減200是因為navbar佔了200的高度,若不減掉當到達指定位置時會被navBar蓋掉內容)
            targetTop = $(result).position().top - 200;
            //滑動整頁到指定的位置     
            $('html,body,.aniContainerOut-CL').animate({
                scrollTop: targetTop
            }, 500);

        });

        //手機版-篩選功能
        $('.fa-chevron-up').toggle();
        $('.itemFilterPhone-CL ul').click(function() {
            $(this).children('i.fa-chevron-up').toggle();
            $(this).children('li').toggle(function() {
                $('.itemFilterPhone-CL li').click(function() {
                    $(this).css('display', 'block').siblings().css('display', 'none');
                    return false;
                })
            });
        })
    </script>



</body>

</html>