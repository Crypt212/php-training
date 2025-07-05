<?php

require_once 'query.php';

function readUsers($conn) {
    $res = query("SELECT * FROM users", $conn);
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
