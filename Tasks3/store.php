<?php
require 'database/QueryBuilder.php';
$db = new QueryBuilder;
$tasks = $db->addTask($data);
header('Location: http://localhost/MyTasks/Tasks3/');