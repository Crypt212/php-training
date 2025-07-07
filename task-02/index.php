<?php

include 'read.php';

$page = 0;
$records_per_page = 10;
$data = [];
$total_records = 0;
$total_pages = 0;


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['page']))
        $page = $_GET['page'];

    $api_data = readPage($page, $records_per_page);
    if (!$api_data['success']) {
        die("unsucessful reading");
    }
    $data = $api_data['data'];
    $page = $api_data['current_page'];
    $total_records = $api_data['total_records'];
    $total_pages = $api_data['total_pages'];
}

$pages_in_nav = min($total_pages, 8);
$pagination_start = min(max(0, ceil($page - $pages_in_nav / 2)), $total_pages - $pages_in_nav);

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
    <div class="container p-3">
        <form action="create.php">
            <div class="container p-3 border mb-2">
                <div class="row gx-4 p-1">
                    <div class="col">
                        <label for="username" class="col-form-label">Username</label>
                        <input class="form-control" type="text" aria-label="default input example" name="username"
                            id="username" placeholder="Username here">
                    </div>
                    <div class="col">
                        <label for="age" class="col-form-label">Age</label>
                        <input class="form-control" type="number" aria-label="default input example" name="age" id="age"
                            placeholder="Age here">
                    </div>
                </div>
                <div class="row gx-4 p-1">
                    <div class="col gx-4 d-grid">
                        <button type="submit" class="btn btn-primary btn-success">Create</button>
                    </div>
                </div>
            </div>
        </form>
        <table class="table table-striped p-3 border">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Age</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($data)) { ?>
                <tr>
                    <td>
                        <?= $row['id'] ?>
                    </td>
                    <td>
                        <?= $row['username'] ?>
                    </td>
                    <td>
                        <?= $row['age'] ?>
                    </td>
                    <td>
                        <a href="update.php?id=<?= $row['id'] ?>">
                            <button type="button" class="btn btn-success">Update</button>
                        </a>
                        <a href="delete.php?id=<?= $row['id'] ?>">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="index.php?page=<?= max($page - 1, 0) ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php for($page_counter = $pagination_start; $page_counter < $pagination_start + $pages_in_nav; $page_counter = $page_counter + 1) { ?>
                <li class="page-item"><a class="page-link" href="index.php?page=<?= max(0, $page_counter) ?>">
                        <?= $page_counter + 1 ?>
                    </a></li>
                <?php } ?>
                <li class="page-item">
                    <a class="page-link" href="index.php?page=<?= min($page + 1, $total_pages - 1) ?>"
                        aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</body>

</html>
