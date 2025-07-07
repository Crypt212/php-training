<?php

include_once 'db_connect.php';
include 'query.php';

$err = null;
$userdata = null;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['id'];
    if (!isset($_GET['new_username'])) {
        $result = query("SELECT * FROM users WHERE id = " . $id, $conn);
        if (!$result) {
            $err = $conn->error;
        }
        $userdata = mysqli_fetch_array($result);
    } else {
        $username = $_GET['new_username'];
        $age = $_GET['new_age'];
        $id = $_GET['id'];
        if ($username == "") {
            $username = $_GET['old_username'];
        }
        if ( $age == "") {
            $age = $_GET['old_age'];
        }
        $result = query("UPDATE users SET username = '" . $username . "', age = " . $age . " WHERE id = " . $id, $conn);
        if (!$result) {
            $err = $result->error;
        } else {
            header("Location: index.php");
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container-fluid p-5">
        <form action="update.php">
            <div class="mb-3 row">
                <label for="new_username" class="col-sm-2 col-form-label">Username</label>
                <input class="form-control" type="text" aria-label="default input example" name="new_username"
                    id="new_username" placeholder="<?= $userdata['username'] ?>">
                <input type="hidden" name="old_username" value="<?= $userdata['username'] ?>">
            </div>
            <div class="mb-3 row">
                <label for="new_age" class="col-sm-2 col-form-label">Age</label>
                <input class="form-control" type="number" aria-label="default input example" name="new_age" id="new_age"
                    placeholder="<?= $userdata['age'] ?>">
                <input type="hidden" name="old_age" value="<?= $userdata['age'] ?>">
            </div>

            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="mb-3 row d-flex">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="index.php" class="d-grid">
                    <button type="button" class="btn btn-secondary">Back</button>
                </a>
            </div>
        </form>
    </div>
</body>

</html>
