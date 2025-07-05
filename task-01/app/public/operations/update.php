<?php

require_once 'query.php';
require_once 'filter.php';

function updateUser($conn, $id, $newUsername, $newAge) {
    $res = query("UPDATE users SET age = " . $newAge . " SET username " . $newUsername . " WHERE id = " . $id, $conn);
    if ($res)
        echo "Users updated successfully<br>";
}

?>
