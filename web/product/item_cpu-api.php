
    <?php
    require __DIR__ . '/../../__connect_db.php';
    define('WEB_ROOT', '/UPICK');
    session_start();


    $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
    $cores = isset($_GET['cores']) ? intval($_GET['cores']) : 0;
    $brand = isset($_GET['brand']) ? $_GET['brand'] : '';

    //取得cpu表格有資料欄位
    $cpu1 = "SELECT * FROM 01cpu";
    $cpurow1 = $pdo->query($cpu1)->fetchAll();


    // 分類
    $qs = [];
    $where = ' WHERE 1 ';

    if (!empty($cores)) {
        $where .= " AND `cores`=$cores ";
    }
    if (!empty($brand)) {
        $where .= " AND `brand`=" . $pdo->quote($brand);
    }

    // 取得總筆數, 總頁數, 該頁的商品資料
    $perPage = 12; // 每一頁有幾筆
    // 用戶要看第幾頁的商品
    $page = isset($_GET['page']) ? intval($_GET['page']) : 1;

    $t_sql = "SELECT COUNT(id) FROM 01cpu $where";
    $totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
    $totalPages = ceil($totalRows / $perPage);

    if ($page < 1) $page = 1;
    if ($page > $totalPages) $page = $totalPages;

    $p_sql = sprintf("SELECT * FROM 01cpu $where LIMIT %s, %s ", ($page - 1) * $perPage, $perPage);

    $rows = $pdo->query($p_sql)->fetchAll();

    echo json_encode($rows, JSON_UNESCAPED_UNICODE);
