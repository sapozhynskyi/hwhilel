<?php
require_once __DIR__ . '/dbConnect.php';
$queryCheckID = "SELECT id FROM users;";
$queryCheckID = $connect->prepare($queryCheckID);
$queryCheckID->execute();
$result = $queryCheckID->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/addRecord.php">Add Record</a></li>
        </ol>
    </nav>
    <div class="row">
        <dic class="col">
            <table class="table table-success table-striped">
                <tr>
                    <th>ID</th>
                </tr>
                <?php foreach ($result as $item):?>
                    <tr>
                        <td><?= $item['id']?></td>
                        <td>
                            <a href="inferenceUser.php?id=<?= $item['id']?>" class="btn btn-outline-dark  btn-sm">View user</a>
                            <a href="deleteUser.php?id=<?= $item['id']?>" class="btn btn-outline-dark  btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </table>
        </dic>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>