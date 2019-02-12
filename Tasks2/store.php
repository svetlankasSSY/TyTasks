<?php
//$_POST

$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
$sql = "INSERT INTO tasks (title, content) VALUES (:title, :content)";
$statement = $pdo->prepare($sql);
//var_dump( $_POST); die;//
$statement->execute($_POST); //true||false 
header('Location: http://localhost/MyTasks/Tasks2/');