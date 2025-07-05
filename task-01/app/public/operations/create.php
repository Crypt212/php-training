<?php

function createUser($conn, $username, $age) {

    $res = query("INSERT INTO users (username, age) VALUES ('{$username}', {$age})", $conn);
    if ($res)
        echo "User created successfully<br>";
}

?>
