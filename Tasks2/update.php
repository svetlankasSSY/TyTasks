<?php

$data = [
    "id"    => $_GET['id'],
    "title" => $_POST['title'],
    "content"  => $_POST['content']
        ];
$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
$sql = 'UPDATE tasks SET title=:title, content=:content WHERE id=:id';
$statement = $pdo->prepare($sql);
$statement->execute($data);//true||false

header("Location: http://localhost/MyTasks/Tasks2/"); exit;
