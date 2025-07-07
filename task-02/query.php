<?php

function query($sql_query, $conn) {

    $result = $conn->query($sql_query);
    if (!$result)
        die("Error: " . $sql_query . "<br>" . $conn->error);
    return $result;
}

