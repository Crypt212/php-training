<?php

require_once 'query.php';

function deleteUser($conn, $id) {
    $res = query("DELETE FROM users WHERE id = " . $id, $conn);
    if ($res)
        echo "Users deleted successfully<br>";
}

?>
