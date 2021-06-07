<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPICK電腦零件購物網</title>

    <link rel="stylesheet" href="/Upick/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="/Upick/css/style.css">
    <link rel="stylesheet" href="/Upick/css/shopcart.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">

    <!--navbar style-->
    <link rel="stylesheet" href="/Upick/css/style_navbar.css">
    <!--footer style-->
    <link rel="stylesheet" href="/Upick/css/style_footer.css">

</head>

<body>
    <?php include __DIR__ . '/../../parts/html_navbar.php' ?>

    <div class="carContainer_ZY">
        <div class="row">
            <div class="carNoThing_ZY">
                <img src="" alt="">
            </div>
        </div>
        <div class="row">
            <div class="carNoThingText_ZY">
                <h5>現在購物車是空的喔!</h5>
            </div>
        </div>
        <div class="row carNoThingBtnGroupBoxM_ZY">
            <div class="carNoThingBtnGroup_ZY ">
                <button class="carGO_ZY carGoWp_ZY" value="carGoWp_ZY" onclick="location.href='https://tw.yahoo.com/'">
                    <i class="fas fa-angle-double-left"></i>
                    <span>WEPICK</span>
                </button>

                <button class="carGO_ZY carGoUp_ZY" value="carGoUp_ZY" onclick="location.href='https://tw.yahoo.com/'">
                    <span>UPICK</span>
                    <i class="fas fa-angle-double-right"></i>
                </button>
            </div>
            <div class="carNoThingBtnGroup_ZY">

                <button class="carGO_ZY Shop_ZY" value="carGoShop_ZY" onclick="location.href='https://tw.yahoo.com/'">
                    <span>前往商城</span>
                </button>

            </div>
        </div>

        <div class="row carNoThingBtnGroupBox_ZY">
            <div class="carNoThingBtnGroup_ZY">
                <button class="carGO_ZY carGoWp_ZY" value="carGoWp_ZY" onclick="location.href='https://tw.yahoo.com/'">
                    <i class="fas fa-angle-double-left"></i>
                    <span>前往WEPICK</span>
                </button>
                <button class="carGO_ZY Shop_ZY" value="carGoShop_ZY" onclick="location.href='https://tw.yahoo.com/'">
                    <span>前往商城</span>
                </button>
                <button class="carGO_ZY carGoUp_ZY" value="carGoUp_ZY" onclick="location.href='https://tw.yahoo.com/'">
                    <span>前往UPICK</span>
                    <i class="fas fa-angle-double-right"></i>
                </button>
            </div>
        </div>
    </div>

    <!--區隔撐開頁尾的空間-->
    <div class="shpFooterSpace-CL"></div>
    <!--頁尾-->
    <?php include __DIR__ . '/../../parts/html_footer.php' ?>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
</body>

</html>