<?php

include_once 'db_connect.php';
require_once 'query.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['id'])) {
        $res = query("DELETE FROM users WHERE id = " . $_GET['id'], $conn);
    }
    header("Location: index.php");
}
