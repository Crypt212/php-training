<?php

include_once 'db_connect.php';
require_once 'query.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['username']) && isset($_GET['age']) && $_GET['username'] != "" && $_GET['age'] != "") {
        $res = query("INSERT INTO users (username, age) VALUES ('{$_GET['username']}', {$_GET['age']})", $conn);
    }
    header("Location: index.php");
}

