<?php
require_once __DIR__ . '/dbConnect.php';
$queryInferenceUser = "SELECT users.name, users.surname, users.age, users.email FROM users where users.id = :id;";
$queryInferenceUser = $connect->prepare($queryInferenceUser);
$queryInferenceUser->bindParam(':id', $_GET['id']);
$queryInferenceUser->execute();
$result = $queryInferenceUser->fetchAll(PDO::FETCH_ASSOC);
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
            <li class="breadcrumb-item"><a href="/addRecord.php">Add record</a></li>
            <li class="breadcrumb-item"><a href="/checkID.php">check ID</a></li>
        </ol>
    </nav>
    <input type="hidden" name="id" value="<?= $result['id']?>">
    <div class="row">
        <dic class="col">
            <table class="table table-success table-striped">
                <tr>
                    <td>Name</td>
                    <td><?= $result[0]['name']?></td>
                </tr>
                <tr>
                    <td>Surname</td>
                    <td><?= $result[0]['surname']?></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><?= $result[0]['age']?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?= $result[0]['email']?></td>
                </tr>
            </table>
        </dic>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
