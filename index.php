<?php
require_once __DIR__ . '/dbConnect.php';

try {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        require_once __DIR__ . '/create.php';
    } } catch (PDOException $e) {
    die($e);
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
<div class="container p-5 my-5 bg-primary text-white">
    <form action="index.php" method="POST">
        <label>Create table "Users" and go to filling</label>
        <button type="submit" class="btn btn-warning">Create</button>
    </form>
</div>
</body>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>