<?php
$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
$sql = "INSERT INTO task (title, content) VALUES (:title, :content)";
$statement = $pdo->prepare($sql);
$statement->execute($_POST);//true||false 
