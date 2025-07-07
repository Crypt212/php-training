<?php

function readPage($page, $records_per_page) {
    require_once 'db_connect.php';
    require_once 'query.php';

    $data = [];
    $success = false;
    $total_records = mysqli_fetch_array(query("SELECT COUNT(*) FROM users", $conn))[0];
    $total_pages = 0;

    if (isset($page) && isset($records_per_page)) {
        $success = true;
        $records_per_page = $records_per_page;
        $total_pages = ceil($total_records / $records_per_page);

        $page = max(min($page, $total_pages - 1), 0);

        $data = query("SELECT * FROM users ORDER BY id LIMIT " . $records_per_page . " OFFSET " . $page * $records_per_page, $conn);
    }

    return [
        'success' => $success,
        'data' => $data,
        'current_page' => $page,
        'total_records' => $total_records,
        'total_pages' => $total_pages
    ];
}
