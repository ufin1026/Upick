<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$linkitem = isset($_GET['linkid']) ? ($_GET['linkid']) : '';

$_SESSION['array'] = $_SESSION['array'] . 'linkid=' . $linkitem . '&';

echo $_SESSION['array'];
echo '<br>';
echo $_SESSION['array'];

if ($linkitem == 'clear') {
    session_destroy();
}



$optionkey = isset($_GET['optionkey']) ? ($_GET['optionkey']) : '';
$optionvalue = isset($_GET['optionvalue']) ? ($_GET['optionvalue']) : '';
$optiontext = "$optionkey" . '=' . $optionvalue;


$t_sql = "SELECT COUNT(id) FROM $tableid WHERE ?=?";
$totalRows2 = $pdo->prepare($t_sql);
$totalRows2->bindParam(1, $getoptionkey, PDO::PARAM_STR);
$totalRows2->bindParam(2, $getoptionvalue, PDO::PARAM_STR);

$totalRows2->execute();
$totalRows = $totalRows2->fetch(PDO::FETCH_NUM)[0];
$totalPages = ceil($totalRows / $perPage);





if ($page < 1) $page = 1;
if ($page > $totalPages) $page = $totalPages;

$p_sql = sprintf("SELECT * FROM $tableid $where LIMIT %s, %s ", ($page - 1) * $perPage, $perPage);

$rows = $pdo->query($p_sql)->fetchAll();



?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a {
            display: block;
            font-size: 20px;
            margin: 10px;
        }
    </style>
</head>

<body>

    <a href="test.php?<?= $_SESSION['array']; ?>linkid=001">link1</a>
    <a href="test.php?<?= $_SESSION['array']; ?>linkid=002">link2</a>

    <a href="test.php?linkid=clear">clear</a>





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

    </div>




    <?php
    //熱銷商品sql query
    $hotsale1 = "SELECT * FROM 06ssd WHERE id BETWEEN 11 AND 14";
    $hsrow1 = $pdo->query($hotsale1)->fetchAll();
    $hotsale2 = "SELECT * FROM 01cpu WHERE id BETWEEN 21 AND 24";
    $hsrow2 = $pdo->query($hotsale2)->fetchAll();
    $hotsale3 = "SELECT * FROM 03vga WHERE id BETWEEN 15 AND 18";
    $hsrow3 = $pdo->query($hotsale3)->fetchAll();
    ?>


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
                        <?php foreach ($hsrow1 as $r) { ?>
                            <div class="col-lg">
                                <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=06ssd">
                                    <img src="<?= WEB_ROOT ?>/images/product/06ssd/<?= $r['imgs'] ?>.jpg" alt="" class="shpCaroImg_CL">
                                    <p class="shpCaroName_CL"><?= $r['name'] ?></p>
                                </a>
                                <!--加入追蹤之愛心,購物車,金額-->
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="carousel-item shpHotItemCaro-CL">
                    <div class="row">
                        <?php foreach ($hsrow2 as $r) { ?>
                            <div class="col-lg">
                                <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=01cpu">
                                    <img src="<?= WEB_ROOT ?>/images/product/01cpu/<?= $r['imgs'] ?>.jpg" alt="" class="shpCaroImg_CL">
                                    <p class="shpCaroName_CL"><?= $r['name'] ?></p>
                                </a>
                                <!--加入追蹤之愛心,購物車,金額-->
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
                            </div>
                        <?php } ?>
                    </div>
                </div>



                <div class="carousel-item shpHotItemCaro-CL">
                    <div class="row">
                        <?php foreach ($hsrow3 as $r) { ?>
                            <div class="col-lg">
                                <a href="/Upick/web/product/dtl_page.php?pid=<?= $r['sid'] ?>&classid=03vga">
                                    <img src="<?= WEB_ROOT ?>/images/product/03vga/<?= $r['imgs'] ?>.jpg" alt="" class="shpCaroImg_CL">
                                    <p class="shpCaroName_CL"><?= $r['name'] ?></p>
                                </a>
                                <!--加入追蹤之愛心,購物車,金額-->
                                <div class="shpHotCartInfo-CL"><i class="far fa-heart shpHeart-CL"></i><i class="fas fa-shopping-cart shpShopCar-CL"></i> <span class="shpItemDollor-CL"><?= $r['price'] ?></span></div>
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


    <script>
        //取得篩選項目文字
        $(document).ready(function() {
            let searchURL = window.location.search.substring(1);
            console.log('search：', searchURL);

            var optionitem = [searchURL, '&'];
            if (!sessionStorage.getItem('optionitem')) {
                $('.itemFilter-CL table td label').click(function() {
                    $optiontext = $(this).text();
                    $optionkey = $(this).attr('data-key');
                    $optioncontent = $optionkey + `=` + $optiontext;
                    optionitem.push($optioncontent);
                    optionitem2 = optionitem.join('&');
                    sessionStorage.setItem('optionitem', optionitem2);

                    window.location.href = `http://localhost/Upick/web/product/item_page.php?` + optionitem2;

                })
            } else {
                var optionitem = [sessionStorage.getItem('optionitem')];
                $('.itemFilter-CL table td label').click(function() {
                    $optiontext = $(this).text();
                    $optionkey = $(this).attr('data-key');
                    $optioncontent = $optionkey + `=` + $optiontext;
                    optionitem.push($optioncontent);
                    optionitem2 = optionitem.join('&');
                    sessionStorage.setItem('optionitem', optionitem2);

                    window.location.href = `http://localhost/Upick/web/product/item_page.php?` + optionitem2;
                })
            }
        })

        $('.navSearchText-CL').click(function() {
            sessionStorage.removeItem('optionitem');
        })
    </script>


</body>



</html>