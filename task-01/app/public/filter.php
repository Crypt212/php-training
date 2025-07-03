<?php

function createFilter($id = null, $username = null, $age = null) {

    $filter = "";
    if ($id)
        $filter = $filter . " id = " . (string)$id . " AND ";

    if ($username)
        $filter = $filter . " username = '" . (string)$username . "' AND ";

    if ($age)
        $filter = $filter . " age = " . (string)$age . " AND ";

    if ($filter != "") {
        $filter = " WHERE " . $filter;
        $filter = substr($filter, 0, -5); // cut extra " AND "
    }

    return $filter;
}
?>
