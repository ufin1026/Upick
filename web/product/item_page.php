<?php
//資料庫連結
require __DIR__ . '/../../__connect_db.php';
define('WEB_ROOT', '/UPICK');
session_start();

$tableid = isset($_GET['classid']) ? ($_GET['classid']) : '';

$optionkey = isset($_GET['optionkey']) ? ($_GET['optionkey']) : null;
$optionvalue = isset($_GET['optionvalue']) ? ($_GET['optionvalue']) : null;
$optionvalue2 = isset($_GET['optionvalue']) ? ($_GET['optionvalue']) : null;
if (!empty($optionkey) && !empty($optionvalue)) {
    $optiontext = "AND $optionkey = '$optionvalue'";
    $optionforpg = "optionkey=$optionkey&optionvalue=$optionvalue&";
}

if (empty($optionkey) && empty($optionvalue)) {
    $optiontext = "";
    $optionforpg = "";
}


//篩選區
//定義10項篩選條件
if ($tableid == '01cpu') {
    $selector[0]['name'] = '品牌';
    $selector[0]['option'] = "SELECT brand FROM 01cpu GROUP BY brand";
    $option1data[0] = $pdo->query($selector[0]['option'])->fetchAll();
    $selector[1]['name'] = '型號';
    $selector[1]['option'] = "SELECT model FROM 01cpu GROUP BY model";
    $option1data[1] = $pdo->query($selector[1]['option'])->fetchAll();
    $selecount = 2;
    $k = 0;
    $classname = 'CPU';
    $hotsale1 = "SELECT * FROM 01cpu WHERE id BETWEEN 6 AND 9";
    $hotsalerow1 = $pdo->query($hotsale1)->fetchAll();
    $hotsale2 = "SELECT * FROM 01cpu WHERE id BETWEEN 11 AND 14";
    $hotsalerow2 = $pdo->query($hotsale2)->fetchAll();
    $hotsale3 = "SELECT * FROM 01cpu WHERE id BETWEEN 34 AND 37";
    $hotsalerow3 = $pdo->query($hotsale3)->fetchAll();
}
if ($tableid == '02mb') {
    $selector[0]['name'] = '品牌';
    $selector[0]['option'] = "SELECT brand FROM 02mb GROUP BY brand";
    $option1data[0] = $pdo->query($selector[0]['option'])->fetchAll();
    $selector[1]['name'] = '記憶體插槽數';
    $selector[1]['option'] = "SELECT number_memory_solts FROM 02mb GROUP BY number_memory_solts";
    $option1data[1] = $pdo->query($selector[1]['option'])->fetchAll();
    $selecount = 2;
    $k = 0;
    $classname = '主機板';
    $hotsale1 = "SELECT * FROM 02mb WHERE id BETWEEN 21 AND 24";
    $hotsalerow1 = $pdo->query($hotsale1)->fetchAll();
    $hotsale2 = "SELECT * FROM 02mb WHERE id BETWEEN 16 AND 19";
    $hotsalerow2 = $pdo->query($hotsale2)->fetchAll();
    $hotsale3 = "SELECT * FROM 02mb WHERE id BETWEEN 6 AND 9";
    $hotsalerow3 = $pdo->query($hotsale3)->fetchAll();
}
if ($tableid == '04ram') {
    $selector[0]['name'] = '品牌';
    $selector[0]['option'] = "SELECT brand FROM 04ram GROUP BY brand";
    $option1data[0] = $pdo->query($selector[0]['option'])->fetchAll();
    $selector[1]['name'] = '單條容量';
    $selector[1]['option'] = "SELECT single_capacity FROM 04ram GROUP BY single_capacity";
    $option1data[1] = $pdo->query($selector[1]['option'])->fetchAll();
    $selecount = 2;
    $k = 0;
    $classname = '記憶體';
    $hotsale1 = "SELECT * FROM 04ram WHERE id BETWEEN 14 AND 17";
    $hotsalerow1 = $pdo->query($hotsale1)->fetchAll();
    $hotsale2 = "SELECT * FROM 04ram WHERE id BETWEEN 26 AND 29";
    $hotsalerow2 = $pdo->query($hotsale2)->fetchAll();
    $hotsale3 = "SELECT * FROM 04ram WHERE id BETWEEN 34 AND 37";
    $hotsalerow3 = $pdo->query($hotsale3)->fetchAll();
}
if ($tableid == '05hdd') {
    $selector[0]['name'] = '品牌';
    $selector[0]['option'] = "SELECT brand FROM 05hdd GROUP BY brand";
    $option1data[0] = $pdo->query($selector[0]['option'])->fetchAll();
    $selector[1]['name'] = '容量';
    $selector[1]['option'] = "SELECT capacity FROM 05hdd GROUP BY capacity";
    $option1data[1] = $pdo->query($selector[1]['option'])->fetchAll();
    $selector[2]['name'] = '碟盤尺寸(吋)';
    $selector[2]['option'] = "SELECT disk_size FROM 05hdd GROUP BY disk_size";
    $option1data[2] = $pdo->query($selector[2]['option'])->fetchAll();
    $selecount = 3;
    $k = 0;
    $classname = '傳統硬碟';
    $hotsale1 = "SELECT * FROM 05hdd WHERE id BETWEEN 13 AND 16";
    $hotsalerow1 = $pdo->query($hotsale1)->fetchAll();
    $hotsale2 = "SELECT * FROM 05hdd WHERE id BETWEEN 17 AND 20";
    $hotsalerow2 = $pdo->query($hotsale2)->fetchAll();
    $hotsale3 = "SELECT * FROM 05hdd WHERE id BETWEEN 26 AND 29";
    $hotsalerow3 = $pdo->query($hotsale3)->fetchAll();
}
if ($tableid == '06ssd') {
    $selector[0]['name'] = '品牌';
    $selector[0]['option'] = "SELECT brand FROM 06ssd GROUP BY brand";
    $option1data[0] = $pdo->query($selector[0]['option'])->fetchAll();
    $selector[1]['name'] = '容量';
    $selector[1]['option'] = "SELECT capacity FROM 06ssd GROUP BY capacity";
    $option1data[1] = $pdo->query($selector[1]['option'])->fetchAll();
    $selector[2]['name'] = '碟盤尺寸(吋)';
    $selector[2]['option'] = "SELECT disk_size FROM 06ssd GROUP BY disk_size";
    $option1data[2] = $pdo->query($selector[2]['option'])->fetchAll();
    $selecount = 3;
    $k = 0;
    $classname = '固態硬碟';
    $hotsale1 = "SELECT * FROM 06ssd WHERE id BETWEEN 23 AND 26";
    $hotsalerow1 = $pdo->query($hotsale1)->fetchAll();
    $hotsale2 = "SELECT * FROM 06ssd WHERE id BETWEEN 16 AND 19";
    $hotsalerow2 = $pdo->query($hotsale2)->fetchAll();
    $hotsale3 = "SELECT * FROM 06ssd WHERE id BETWEEN 31 AND 34";
    $hotsalerow3 = $pdo->query($hotsale3)->fetchAll();
}
if ($tableid == '03vga') {
    $selector[0]['name'] = '品牌';
    $selector[0]['option'] = "SELECT brand FROM 03vga GROUP BY brand";
    $option1data[0] = $pdo->query($selector[0]['option'])->fetchAll();
    $selector[1]['name'] = '系列';
    $selector[1]['option'] = "SELECT series FROM 03vga GROUP BY series";
    $option1data[1] = $pdo->query($selector[1]['option'])->fetchAll();
    $selecount = 2;
    $k = 0;
    $classname = '顯示卡';
    $hotsale1 = "SELECT * FROM 03vga WHERE id BETWEEN 26 AND 29";
    $hotsalerow1 = $pdo->query($hotsale1)->fetchAll();
    $hotsale2 = "SELECT * FROM 03vga WHERE id BETWEEN 21 AND 24";
    $hotsalerow2 = $pdo->query($hotsale2)->fetchAll();
    $hotsale3 = "SELECT * FROM 03vga WHERE id BETWEEN 12 AND 15";
    $hotsalerow3 = $pdo->query($hotsale3)->fetchAll();
}
if ($tableid == '07computercase') {
    $selector[0]['name'] = '品牌';
    $selector[0]['option'] = "SELECT brand FROM 07computercase GROUP BY brand";
    $option1data[0] = $pdo->query($selector[0]['option'])->fetchAll();
    $selector[1]['name'] = '適用主機板';
    $selector[1]['option'] = "SELECT applicable_motherboard FROM 07computercase GROUP BY applicable_motherboard";
    $option1data[1] = $pdo->query($selector[1]['option'])->fetchAll();
    $selector[2]['name'] = '顏色';
    $selector[2]['option'] = "SELECT color FROM 07computercase GROUP BY color";
    $option1data[2] = $pdo->query($selector[2]['option'])->fetchAll();
    $selecount = 3;
    $k = 0;
    $classname = '電腦機殼';
    $hotsale1 = "SELECT * FROM 07computercase WHERE id BETWEEN 19 AND 22";
    $hotsalerow1 = $pdo->query($hotsale1)->fetchAll();
    $hotsale2 = "SELECT * FROM 07computercase WHERE id BETWEEN 9 AND 12";
    $hotsalerow2 = $pdo->query($hotsale2)->fetchAll();
    $hotsale3 = "SELECT * FROM 07computercase WHERE id BETWEEN 12 AND 15";
    $hotsalerow3 = $pdo->query($hotsale3)->fetchAll();
}
if ($tableid == '08powersupply') {
    $selector[0]['name'] = '品牌';
    $selector[0]['option'] = "SELECT brand FROM 08powersupply GROUP BY brand";
    $option1data[0] = $pdo->query($selector[0]['option'])->fetchAll();
    $selector[1]['name'] = '80plus認證';
    $selector[1]['option'] = "SELECT 80plus_certification FROM 08powersupply GROUP BY 80plus_certification";
    $option1data[1] = $pdo->query($selector[1]['option'])->fetchAll();
    $selecount = 2;
    $k = 0;
    $classname = '電源供應器';
    $hotsale1 = "SELECT * FROM 08powersupply WHERE id BETWEEN 21 AND 24";
    $hotsalerow1 = $pdo->query($hotsale1)->fetchAll();
    $hotsale2 = "SELECT * FROM 08powersupply WHERE id BETWEEN 13 AND 16";
    $hotsalerow2 = $pdo->query($hotsale2)->fetchAll();
    $hotsale3 = "SELECT * FROM 08powersupply WHERE id BETWEEN 17 AND 20";
    $hotsalerow3 = $pdo->query($hotsale3)->fetchAll();
}
if ($tableid == '12fan') {
    $selector[0]['name'] = '品牌';
    $selector[0]['option'] = "SELECT brand FROM 12fan GROUP BY brand";
    $option1data[0] = $pdo->query($selector[0]['option'])->fetchAll();
    $selecount = 1;
    $k = 0;
    $classname = '散熱產品';
    $hotsale1 = "SELECT * FROM 12fan WHERE id BETWEEN 11 AND 14";
    $hotsalerow1 = $pdo->query($hotsale1)->fetchAll();
    $hotsale2 = "SELECT * FROM 12fan WHERE id BETWEEN 6 AND 9";
    $hotsalerow2 = $pdo->query($hotsale2)->fetchAll();
    $hotsale3 = "SELECT * FROM 12fan WHERE id BETWEEN 19 AND 22";
    $hotsalerow3 = $pdo->query($hotsale3)->fetchAll();
}
if ($tableid == '09screen') {
    $selector[0]['name'] = '品牌';
    $selector[0]['option'] = "SELECT brand FROM 09screen GROUP BY brand";
    $option1data[0] = $pdo->query($selector[0]['option'])->fetchAll();
    $selector[1]['name'] = '面板類型';
    $selector[1]['option'] = "SELECT panel_type FROM 09screen GROUP BY panel_type";
    $option1data[1] = $pdo->query($selector[0]['option'])->fetchAll();
    $selecount = 1;
    $k = 0;
    $classname = '週邊產品';
    $hotsale1 = "SELECT * FROM 09screen WHERE id BETWEEN 11 AND 14";
    $hotsalerow1 = $pdo->query($hotsale1)->fetchAll();
    $hotsale2 = "SELECT * FROM 09screen WHERE id BETWEEN 6 AND 9";
    $hotsalerow2 = $pdo->query($hotsale2)->fetchAll();
    $hotsale3 = "SELECT * FROM 09screen WHERE id BETWEEN 2 AND 5";
    $hotsalerow3 = $pdo->query($hotsale3)->fetchAll();
}


//取得cpu表格有資料欄位
// 分類
$qs = [];
$where = ' WHERE 1';

// 取得總筆數, 總頁數, 該頁的商品資料
$perPage = 12; // 每一頁有幾筆
// 用戶要看第幾頁的商品
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$sort = isset($_GET['sort']) ? ($_GET['sort']) : "id";

$t_sql = "SELECT COUNT(id) FROM $tableid $where $optiontext ORDER BY $sort ASC";

$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$totalPages = ceil($totalRows / $perPage);

if ($page < 1) $page = 1;
if ($page > $totalPages) $page = $totalPages;

$p_sql = sprintf("SELECT * FROM $tableid $where $optiontext ORDER BY $sort ASC LIMIT %s, %s ", ($page - 1) * $perPage, $perPage);

$rows = $pdo->query($p_sql)->fetchAll();

?>

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
    <?php include __DIR__ . '/../../parts/html_navbar_phone.php' ?>
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
                            <img src="/Upick/images/topCaro_01.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/Upick/images/topCaro_02.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/Upick/images/topCaro_03.jpg" class="d-block w-100" alt="...">
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
                    <h1><?= $classname ?></h1>
                </div>

                <!--面包屑-->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <i class="fas fa-map-marker-alt"></i>
                        <li class="breadcrumb-item"><a href="/Upick/shopHome.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $classname ?></li>
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
                                    <?php foreach ($hotsalerow1 as $r) { ?>
                                        <div class="col">
                                            <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=<?= $tableid ?>" data-sid="<?= $r['sid'] ?>" data-tbid="<?= $tableid ?>">
                                                <img class="itemShopCaroImg_CL" src="<?= WEB_ROOT ?>/images/product/<?= $tableid ?>/<?= $r['imgs'] ?>.jpg" alt="">
                                                <p class="itemShopCaroName_CL"><?= $r['name'] ?></p>
                                            </a>
                                            <!--加入追蹤之愛心,購物車,金額-->
                                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL" value="1"></i> <span class="shpItemDollor-CL itemShopCaroDollor_CL"><?= $r['price'] ?></span></div>

                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="carousel-item shpHotItemCaro-CL">
                                <div class="row">
                                    <?php foreach ($hotsalerow2 as $r) { ?>
                                        <div class="col">
                                            <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=<?= $tableid ?>" data-sid="<?= $r['sid'] ?>" data-tbid="<?= $tableid ?>">
                                                <img class="itemShopCaroImg_CL" src="<?= WEB_ROOT ?>/images/product/<?= $tableid ?>/<?= $r['imgs'] ?>.jpg" alt="">
                                                <p class="itemShopCaroName_CL"><?= $r['name'] ?></p>
                                            </a>
                                            <!--加入追蹤之愛心,購物車,金額-->
                                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL itemShopCaroDollor_CL"><?= $r['price'] ?></span></div>

                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="carousel-item shpHotItemCaro-CL">
                                <div class="row">
                                    <?php foreach ($hotsalerow3 as $r) { ?>
                                        <div class="col">
                                            <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=<?= $tableid ?>" data-sid="<?= $r['sid'] ?>" data-tbid="<?= $tableid ?>">
                                                <img class="itemShopCaroImg_CL" src="<?= WEB_ROOT ?>/images/product/<?= $tableid ?>/<?= $r['imgs'] ?>.jpg" alt="">
                                                <p class="itemShopCaroName_CL"><?= $r['name'] ?></p>
                                            </a>
                                            <!--加入追蹤之愛心,購物車,金額-->
                                            <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL itemShopCaroDollor_CL"><?= $r['price'] ?></span></div>

                                        </div>
                                    <?php } ?>
                                </div>
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
                        <span>您所選擇的關鍵字為：<?= $optionvalue ?></span>
                    </div>
                    <table class="table">
                        <tbody>
                            <?php for ($i = 0; $i < $selecount; $i++) { ?>
                                <tr>
                                    <th scope="row" calss="itemTh-CL"><?= $selector[$i]['name'] ?></th>
                                    <td>
                                        <?php foreach ($option1data[$i] as $key2 => $value2) { ?>
                                            <div>
                                                <?php
                                                foreach ($value2 as $optionkey => $optionvalue) { ?>
                                                    <a href="item_page.php?classid=<?= $tableid ?>&optionkey=<?= $optionkey ?>&optionvalue=<?= $optionvalue ?>">
                                                        <label class="form-check-label" for="inlineCheckbox<?= $k ?>" data-key="<?= $optionkey ?>"><?= $optionvalue ?></label>
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <!--篩選區收合btn-->
                    <div class="itemCollapse-CL">
                        <p>點擊以收合或開啟</p>
                    </div>
                </div>

                <!--手機版-零件篩選-->
                <div class="itemFilterPhone-CL">
                    <h4>請選擇商品篩選條件</h3>
                        <span>您所選擇的關鍵字為：<?= $optionvalue2 ?></span>
                        <?php for ($i = 0; $i < $selecount; $i++) { ?>
                            <ul><?= $selector[$i]['name'] ?><i class="fas  fa-chevron-up"></i>
                                <?php foreach ($option1data[$i] as $key2 => $value2) { ?>
                                    <?php
                                    foreach ($value2 as $optionkey => $optionvalue) { ?>
                                        <div>
                                            <a href="item_page.php?classid=<?= $tableid ?>&optionkey=<?= $optionkey ?>&optionvalue=<?= $optionvalue ?>">
                                                <label class="form-check-label" for="inlineCheckbox<?= $k ?>" data-key="<?= $optionkey ?>"><?= $optionvalue ?></label>
                                            </a>
                                        </div>


                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                </div>


                <!--排序按鈕-->
                <div class="itemSort-CL">
                    <button class="itemSortId-CL">最新上架</button>
                    <button class="itemSortPrice-CL">價格<i class=" fas fa-chevron-up"></i></button>
                    <button class="itemSortName-CL">名稱</button>
                    <button class=" itemCount-CL"><?= $totalRows ?></button>
                </div>

                <div class="itemSortOption-CL">目前排序方式依<span> '<?php if ($sort == 'price') {
                                                                    echo '價格';
                                                                }
                                                                if ($sort == 'id') {
                                                                    echo '上架日期';
                                                                }
                                                                if ($sort == 'name') {
                                                                    echo '名稱';
                                                                } ?>'</span></div>

                <!--商品展示區-->
                <section id="shpCpuSection_CL"></section>
                <div class="shpItem-CL">

                    <div class="row">
                        <?php foreach ($rows as $r) : ?>
                            <div class="col-xl col-6">

                                <a href="dtl_page.php?classid=<?= $tableid ?>&pid=<?= $r['sid'] ?>" data-sid="<?= $r['sid'] ?>" data-tbid="<?= $tableid ?>">
                                    <img class="itemShowImg_CL" src="<?= WEB_ROOT ?>/images/product/<?= $tableid ?>/<?= $r['imgs'] ?>.jpg" alt="">
                                    <p class="itemShowName_CL"><?= $r['name'] ?></p>
                                </a>
                                <!--加入追蹤之愛心,購物車,金額-->
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL" value="1"></i><i class="fas fa-shopping-cart shpShopCar-CL" value="1"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>

                            </div>
                        <?php endforeach; ?>
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
                    <?php for ($i = $page - 2; $i <= $page + 2; $i++) :
                        if ($i >= 1 and $i <= $totalPages) :
                            $qs['page'] = $i;
                    ?>
                            <!--頁數號碼-->
                            <li class="wWhitePgItem wWhitePGnumber <?= $i == $page ? 'wWhitePgColor' : '' ?>"><a class="wWhitePgLink" href="?classid=<?= $tableid ?>&<?= $optionforpg ?>&sort=<?= $sort ?>&<?= http_build_query($qs) ?>"><?= $i ?></a></li>

                        <?php endif; ?>
                    <?php endfor; ?>


                    <!--橫向顯示頁碼終止-->
                    <!--下一頁button-->
                    <li class="wWhitePgItem"><a class="wWhitePgLink" href="#"><i class="fas fa-angle-right"></i></a></li>
                    <!--最後一頁button-->
                    <li class="wWhitePgItem"><a class="wWhitePgLink" href="#"><i class="fas fa-angle-double-right"></i></a>
                    </li>

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
    <?php include __DIR__ . '/../../web/shopcar/cart-script.php' ?>
    <?php include __DIR__ . '/../../web/member/follow-script.php' ?>

    <script>
        //開啟商品細節頁
        const openDtlPgBtn = $('.itemShowImg_CL');
        openDtlPgBtn.click(function() {
            const card = $(this).closest('a');
            const cardid = card.attr('data-sid');
            console.log('cardid is ', cardid);
            $.get('dtl_api.php', {
                action: 'list',
                cardid
            }, function(data) {
                console.log(data);
            }, 'json');

        })

        //網頁初始元件呈現
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
                    $('.navSearch-CL').css('transform', 'translateY(0vh)').css('transition', '0.6s')
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
                    $('.umaHelper-CL').css('display', 'block');
                    $('.umaConvert-CL').css('display', 'block');
                }
                if ((mouseScroll >= itemTop) || (mouseScroll <= itemCaroTop)) {
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

        //增加排序標籤
        var sort = 'sort=price';
        var url = [window.location.href];
        $('.itemSortPrice-CL').click(function() {
            if (url.indexOf(sort) == -1) {
                url = [window.location.href, sort];
                url = url.join('&');
            }
            window.location.href = url;
        })
        var sort2 = 'sort=name';
        $('.itemSortName-CL').click(function() {
            if (url.indexOf(sort) == -1) {
                url = [window.location.href, sort2];
                url = url.join('&');
            }
            window.location.href = url;
        })
        var sort3 = 'sort=id';
        $('.itemSortId-CL').click(function() {
            if (url.indexOf(sort) == -1) {
                url = [window.location.href, sort3];
                url = url.join('&');
            }
            window.location.href = url;
        })



        //加入購物車
        const addToCartBtn = $('.shpShopCar-CL');
        addToCartBtn.click(function() {
            const card = $(this).parent().prev('a');
            const sid = card.attr('data-sid');
            const classid = card.attr('data-tbid');
            const qty = 1;
            $.get('/Upick/web/shopcar/cart-api.php', {
                action: 'add',
                sid,
                classid,
                qty
            }, function(data) {
                console.log(data);
                showCartCount(data); // 更新選單上數量的提示
            }, 'json');
        })

        //加入追蹤
        const addToFollowtBtn = $('.shpHeart-CL');
        addToFollowtBtn.click(function() {
            const card = $(this).parent().prev('a');
            const sid = card.attr('data-sid');
            const classid = card.attr('data-tbid');
            const qty = 1;
            $.get('/Upick/web/member/follow-api.php', {
                action: 'add',
                sid,
                classid,
                qty
            }, function(data) {
                console.log(data);
            }, 'json');
        })

        //手機版-篩選功能
        $('.fa-chevron-up').toggle();
        $('.itemFilterPhone-CL ul').click(function() {
            $(this).children('i.fa-chevron-up').toggle();
            $(this).children('div').toggle(function() {
                $('.itemFilterPhone-CL li').click(function() {
                    $(this).css('display', 'block').siblings().css('display', 'none');
                    return false;
                })
            });
        })

        //分類文字搜尋
        const itemTextSearch = $('.wSearcBtn');
        itemTextSearch.click(function() {

        })
    </script>



</body>

</html>