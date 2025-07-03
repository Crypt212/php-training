<?php

require_once 'query.php';
require_once 'filter.php';

function readUsers($conn, $id = null, $username = null, $age = null) {
    $filter = createFilter($id, $username, $age);

    $res = query("SELECT * FROM users" . $filter, $conn);
    if ($res) {
        echo "Users read successfully<br>";
        if ($res->num_rows === 0)
            echo "But no users found<br>";

        echo '<br><br>-------------------------------------------------------------';
        while ($row = $res->fetch_assoc()) {
            echo "<br>username: " . $row["username"] . ",       age: " . $row["age"];
        }
        echo '<br>---------------------------------------------------------<br><br>';
    }
}

?>
