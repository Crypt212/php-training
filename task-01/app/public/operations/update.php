<?php

require_once 'query.php';

function updateUser($conn, $id, $newUsername, $newAge) {
    $res = query("UPDATE users SET age = " . $newAge . " AND username = '" . $newUsername . "' WHERE id = " . $id, $conn);
    if ($res)
        echo "Users updated successfully<br>";
}

?>
