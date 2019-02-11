<?php
$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
$statement = $pdo->prepare("SELECT * FROM tasks WHERE id=:id");
$statement->bindParam(":id", $_GET['id']);
$statement->execute();
$tasks = $statement->fetch(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Go to the store</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    </p>
                    <a href="/">Go Back</a>
                </div>
            </div>
        </div>
    </body>
</html>
