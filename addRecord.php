<?php
require_once __DIR__ . '/dbConnect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $queryAddRecord = "INSERT INTO users( name, surname, age, email) Values (:name, :surname, :age, :email);";
    $result = $connect->prepare($queryAddRecord);
    $result->bindValue(':name', $_POST['name']);
    $result->bindValue(':surname', $_POST['surname']);
    $result->bindValue(':age', $_POST['age']);
    $result->bindValue(':email', $_POST['email']);
    $result->execute();
}

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
            <li class="breadcrumb-item"><a href="/checkID.php">check ID</a></li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        <dic class="col-6">
            <form action="addRecord.php" method="POST">
                <div class="container">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="age" class="form-label">age</label>
                            <input type="number" class="form-control" id="age" name="age">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="surname" class="form-label">surname</label>
                            <input type="text" class="form-control" id="surname" name="surname">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Create</button>
            </form>
        </dic>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
