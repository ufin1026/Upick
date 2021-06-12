<?php
require __DIR__ . '/../../__connect_db.php';
define('WEB_ROOT', '/UPICK');
session_start();

$pid = isset($_GET['pid']) ? $_GET['pid'] : '';
$tableid = isset($_GET['classid']) ? ($_GET['classid']) : '';

$sql = "SELECT * FROM $tableid WHERE `sid`=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$pid]);
$row = $stmt->fetch();

foreach ($row as $key => $value) {
    echo '<br>';
    echo $key;
    echo '<br>';
    echo $value;
}


// echo json_encode($row);
// exit;
if (empty($row)) {
    header('Location: item_cpu.php');
    exit;
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__ . '/../../parts/html_head.php' ?>
    <!--固定元件:UMA小幫手style-->
    <link rel="stylesheet" href="/Upick/css/style_fixed_element.css">
    <!--商品細節頁 style-->
    <link rel="stylesheet" href="/Upick/css/style_dtl_pg.css">
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

    <!--手機版-加入追蹤清單與購物車-->
    <div class="dtlAddCarPhone-CL">
        <span>19,800</span>
        <button><i class="far fa-heart"></i> 加入追蹤清單</button>
        <button><i class="fas fa-shopping-cart"></i> 加入購物車</button>
    </div>



    <div class="aniContainerOut-CL">

        <!--商場區首頁-->
        <div class="shpTop-CL">
            <section id="shpTopSection_CL"></section>
            <!--商場頂部預留200px給navbar-->
            <div class="shpTopSpace-CL"></div>
            <!--商場內容區-->
            <div class="container shpContainer-CL">
                <!--面包屑-->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <i class="fas fa-map-marker-alt"></i>
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
                <!--細節頁頂部區域(圖片商品標題金額等資訊區)-->
                <div class="row dtlTop-CL">
                    <!--左邊區域-商品圖與小輪播-->
                    <div class="col-lg-5">
                        <!--頂部區域商品圖-大-->
                        <div class="dtlTopImg-CL">
                            <img src="<?= WEB_ROOT ?>/images/product/<?= $tableid ?>/<?= $row['imgs'] ?>.jpg" alt="">
                        </div>
                        <!--手機版-面包屑-->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb2">
                                <i class="fas fa-map-marker-alt"></i>
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                        <!--頂部區域商品圖-小-->
                        <div class="dtlTopImgMore-CL">
                            <!--小輪播上下頁btn-->
                            <div class="dtlImgBtn-CL">
                                <div class="dtlImgPre-CL"><i class="fas fa-angle-left"></i></div>
                                <div class="dtlImgNext-CL"><i class="fas fa-angle-right"></i></div>
                            </div>
                            <!--小輪播小圖區-->
                            <div class="dtlImgCaro-CL">
                                <img src="<?= WEB_ROOT ?>/images/product/<?= $tableid ?>/<?= $row['imgs'] ?>.jpg" alt="">

                            </div>
                        </div>

                    </div>
                    <!--右邊區域-商品名稱金額等資訊-->
                    <div class="col-lg-6">
                        <!--右邊區域-商品標題-->
                        <h1 class="dtlTopName-CL"><?= $row['name'] ?></h1>
                        <?php  ?>
                        <span class="dtlId-CL">編號：<?= $row['sid'] ?></span>
                        <?php ?>
                        <div class="dtlSpec-CL">
                            <div class="dtlItemInfo-CL">
                                商品特色<br>
                                RAZER CYNOSA LITE<br>
                                • 柔軟緩衝的電競級按鍵<br>
                                • 10鍵齊發不衝突防鬼鍵<br>
                                • 1000Hz超快輪詢率<br>
                                • 防潑水耐用設計<br>
                                <br>
                                RAZER VIPER<br>
                                • RAZER™ 光學滑鼠按鍵軸<br>
                                • RAZER 5G 光學感測器<br>
                                • 69 公克輕量設計<br>
                                •RAZER™ SPEEDFLEX 纜線<br>
                                •內建 DPI 儲存<br>
                                • 8 顆可編程按鍵<br>
                                <br>
                                優惠　--<br>
                                贈品　--<br>
                                配送　宅配 UPICK門市取貨<br>
                                付款　信用卡 / LinePay / 街口支付 / 門市付款<br>
                            </div>
                            <!--商品保固與數量選擇區-->
                            <div class="dtlItemWarranty-CL">
                                • <?= isset($row['warranty']) ? ($row['warranty']) : '保固 N/A' ?><br>
                                • 6期0利率<br>
                                <div class="dtlQt-CL">
                                    <i class="fas fa-minus"></i>
                                    <select name="dtlQtSelec-CL" id="dtlQtSelec-CL">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                        <option value="">5</option>
                                    </select>
                                    <i class="fas fa-plus"></i>
                                </div>
                                <div class="dtlDollor-CL">
                                    $ <?= $row['price'] ?>
                                </div>
                            </div>
                        </div>
                        <!--加入追蹤清單與購物車-->
                        <div class="dtlAddCar-CL">
                            <button class="wBtnAddTrace btnShare"><i class="far fa-heart shpHeart"></i> 加入追蹤清單</button>
                            <br>
                            <button class="wBtnAddCar btnShare"><i class="fas fa-shopping-cart"></i> 加入購物車</button>
                        </div>
                    </div>
                </div>

                <!--中間其他商品輪播牆-->
                <h2 class="dtlOther-CL">其他人也看了...</h2>

                <!--其他熱銷商品區-->
                <div class="shpHotSale-CL">
                    <!--熱銷商品內容-商品輪播牆-->
                    <div id="carouselExampleControls" class="carousel slide shpHotSaleContain-CL" data-bs-ride="carousel">
                        <!--商品輪播牆內容-修改商品內容顯示區總高度-->
                        <div class="carousel-inner shpHotSaleInner-CL">
                            <!--商品輪播牆單頁內容-->
                            <div class="carousel-item active shpHotItemCaro-CL">
                                <div class="row">
                                    <div class="col">
                                        <a href="">
                                            <img src="/Upick/images/item_01.png" alt="">
                                            <p>Corsair HX1200 80Plus白金牌電源供應器白金牌電源供應器</p>
                                            <!--加入追蹤之愛心,購物車,金額-->
                                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL">8790</span></div>
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




                <!--商品詳細內容區-->
                <section id="shpCpuSection_CL"></section>
                <div class="dtlItemContain-CL">
                    <!--商品說明切換btn-->
                    <div class="dtlSwitchBtn-CL">
                        <div class="dtlSwitchBG-CL"></div>
                        <span>商品介紹</span>
                        <span>商品規格</span>
                    </div>
                    <!--商品詳細內容-圖片區-->
                    <div class="dtlContainImg-CL">
                        <img src="<?= WEB_ROOT ?>/images/product/<?= $tableid ?>/<?= $row['imgs'] ?>.jpg" alt="">
                    </div>
                    <!--商品詳細內容-規格表格區-->
                    <div class="dtlContainTable-CL">
                        <div class="dtlContainTbHead-CL">
                            <h4><?= $row['name'] ?></h4>
                        </div>
                        <table>
                            <tr>
                                <td>品牌</td>
                                <td><?= isset($row['brand']) ? ($row['brand']) : 'N/A' ?></td>
                            </tr>
                            <tr>
                                <td>名稱</td>
                                <td><?= isset($row['name']) ? ($row['name']) : 'N/A' ?></td>
                            </tr>
                            <tr>
                                <td>核心數</td>
                                <td><?= isset($row['cores']) ? ($row['cores']) : 'N/A' ?></td>
                            </tr>
                            <tr>
                                <td>執行緒數量</td>
                                <td><?= isset($row['threads']) ? ($row['threads']) : 'N/A' ?></td>
                            </tr>
                            <tr>
                                <td>型號</td>
                                <td><?= isset($row['model']) ? ($row['model']) : 'N/A' ?></td>
                            </tr>
                            <tr>
                                <td>系列</td>
                                <td><?= isset($row['series']) ? ($row['series']) : 'N/A' ?></td>
                            </tr>
                            <tr>
                                <td>處理器編號</td>
                                <td><?= isset($row['processor number']) ? ($row['processor number']) : 'N/A' ?></td>
                            </tr>
                            <tr>
                                <td>預設時脈(GHz)</td>
                                <td><?= isset($row['base_frequency(GHz)']) ? ($row['base_frequency(GHz)']) : 'N/A' ?></td>
                            </tr>
                            <tr>
                                <td>最大超頻(GHz)</td>
                                <td><?= isset($row['max_turbo_frequency(GHz)']) ? ($row['max_turbo_frequency(GHz)']) : 'N/A' ?></td>
                            </tr>
                            <tr>
                                <td>支援記憶體頻率(MHz)</td>
                                <td><?= isset($row['support_memory_frequency(MHz)']) ? ($row['support_memory_frequency(MHz)']) : 'N/A' ?></td>
                            </tr>
                            <tr>
                                <td>內建顯示晶片GPU</td>
                                <td><?= isset($row['is_graphics']) ? ($row['is_graphics']) : 'N/A' ?></td>
                            </tr>
                            <tr>
                                <td>內建顯示晶片GPU型號</td>
                                <td><?= isset($row['processor_graphics']) ? ($row['processor_graphics']) : 'N/A' ?></td>
                            </tr>
                            <tr>
                                <td>內建顯示晶片GPU頻率(MHz)</td>
                                <td><?=
                                    isset($row['processor_graphics_frequency']) ? ($row['processor_graphics_frequency']) : 'N/A'; ?></td>
                            </tr>
                            <tr>
                                <td>晶片</td>
                                <td><?= isset($row['chip']) ? ($row['chip']) : 'N/A' ?></td>
                            </tr>
                            <tr>
                                <td>晶片組</td>
                                <td><?= isset($row['chipset']) ? ($row['chipset']) : 'N/A' ?></td>
                            </tr>
                            <tr>
                                <td>繪圖核心</td>
                                <td><?= isset($row['graphics core']) ? ($row['graphics core']) : 'N/A' ?></td>
                            </tr>
                            <tr>
                                <td>記憶體插槽數</td>
                                <td><?= isset($row['number_memory solts']) ? ($row['number_memory solts']) : 'N/A' ?></td>
                            </tr>
                            <tr>
                                <td>內建顯示支援</td>
                                <td><?= isset($row['support_built-in display']) ? ($row['support_built-in display']) : 'N/A' ?></td>
                            </tr>
                            <tr>
                                <td>主機板結構規格</td>
                                <td><?= isset($row['vga_specification']) ? ($row['vga_specification']) : 'N/A' ?></td>
                            </tr>
                            <tr>
                                <td>尺寸(長x寬)(mm)</td>
                                <td><?= isset($row['size(L*W)']) ? ($row['size(L*W)']) : 'N/A' ?></td>
                            </tr>
                            <tr>
                                <td>記憶體容量(GB)</td>
                                <td><?= isset($row['memory capacity']) ? ($row['memory capacity']) : 'N/A' ?></td>
                            </tr>
                            <tr>
                                <td>最大支援記憶體容量</td>
                                <td><?= isset($row['max_support_memory capacity']) ? ($row['max_support_memory capacity']) : 'N/A' ?></td>
                            </tr>
                            <tr>
                                <td>圖形記憶體類型</td>
                                <td><?= isset($row['graphics memory_type']) ? ($row['graphics memory_type']) : 'N/A' ?></td>
                            </tr>



                        </table>
                    </div>


                </div>



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
                $('.umaHelper-CL').css('display', 'none');
                $('.umaConvert-CL').css('display', 'none');
                $('.navSearch-CL').css('display', 'none');
            }


            //WEB版-大於1200
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
            }


        })

        //商品說明區切換btn效果
        let btnBgLeft = $('.dtlSwitchBG-CL').offset().left;
        $('.dtlSwitchBtn-CL span:nth-child(2)').css('color', '#383E44');
        $('.dtlSwitchBtn-CL span').click(function() {
            var btnTextLeft = $(this).offset().left;
            var btnBgGo = btnTextLeft - btnBgLeft;
            $('.dtlSwitchBG-CL').css('transform', 'translateX(' + btnBgGo + 'px)').css('transition', '0.3s');
            $(this).css('color', '#383E44').siblings().css('color', '#ffffff');
        })

        //點選規格按鈕的切換
        /*手機板不出現圖片只出現表格*/
        if ($(window).width() < 1200) {
            $('.dtlContainTable-CL').css('display', 'block');
        }
        /*WEB版有規格說明切換btn*/
        if ($(window).width() >= 1200) {
            $('.dtlContainTable-CL').css('display', 'none');
            $('.dtlSwitchBtn-CL span:nth-child(3)').click(function() {
                $('.dtlContainTable-CL').css('display', 'block');
                $('.dtlContainImg-CL').css('display', 'none');
            })

            //點選圖片按鈕的切換
            $('.dtlSwitchBtn-CL span:nth-child(2)').click(function() {
                $('.dtlContainTable-CL').css('display', 'none');
                $('.dtlContainImg-CL').css('display', 'block');
            })

        }



        //固定元件出現時機
        $(window).scroll(function() {
            var mouseScroll = $(window).scrollTop();

            if ($(window).width() < 1200) {
                $('.siteBtn-CL').css('display', 'none');
                $('.umaHelper-CL').css('display', 'none');
                $('.umaConvert-CL').css('display', 'none');
                //手機版加入購物車橫條出現時機
                var h4Top = $('.dtlContainTable-CL table').offset().top;
                if (mouseScroll > h4Top) {
                    $('.dtlAddCarPhone-CL').css('display', 'none');
                }
                if (mouseScroll <= h4Top) {
                    $('.dtlAddCarPhone-CL').css('display', 'flex');
                }
            }

            if ($(window).width() >= 1200) {
                var dtlTop = $('.dtlTop-CL').offset().top;
                //siteBtn在一開始不出現,當mouse scroll超過頂端商品資料區才出現
                if (mouseScroll > dtlTop) {
                    $('.siteBtn-CL').css('transform', 'translateY(0vh)');
                } else {
                    $('.siteBtn-CL').css('transform', 'translateY(150vh)');
                }

                //umahelper在超過輪播牆時出現,超過商品區第一列時消失
                var switchBtn = $('.dtlSwitchBtn-CL').offset().top;
                if ((mouseScroll > dtlTop) && (mouseScroll < switchBtn)) {
                    $('.umaHelper-CL').css('display', 'block');
                    $('.umaConvert-CL').css('display', 'block');
                }
                if ((mouseScroll >= switchBtn) || (mouseScroll <= dtlTop)) {
                    $('.umaHelper-CL').css('display', 'none');
                    $('.umaConvert-CL').css('display', 'none');
                }
            }
        })



        //siteBtn按鈕選擇效果
        $('.siteBtnInner-CL').click(function() {
            $(this).css('backgroundColor', '#374052').children('p').css('color', '#ffffff');
            $(this).parent('.sitBtnGo-CL').siblings().children('.siteBtnInner-CL').css('backgroundColor', '#ffffff')
                .children('p').css('color', '#374052');

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
    </script>



</body>

</html>