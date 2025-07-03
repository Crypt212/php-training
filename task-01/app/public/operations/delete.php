<?php

require_once 'query.php';
require_once 'filter.php';

function deleteUsers($conn, $id = null, $username = null, $age = null) {
    $filter = createFilter($id, $username, $age);

    $res = query("DELETE FROM users" . $filter , $conn);
    if ($res)
        echo "Users deleted successfully<br>";
}

?>
