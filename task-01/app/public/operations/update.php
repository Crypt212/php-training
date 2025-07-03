<?php

require_once 'query.php';
require_once 'filter.php';

function updateUsers($conn, $id = null, $username = null, $age = null) {
    $filter = createFilter($id, $username, $age);

    $res = query("UPDATE users SET age = 20" . $filter, $conn);
    if ($res) {
        echo "Users updated successfully<br>";
    }
}

?>
