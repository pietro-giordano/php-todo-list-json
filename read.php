<?php

$todoListString = file_get_contents('database.json');
$todoList = json_decode($todoListString, true);


$jsonTodoList = json_encode($todoList);
header('Content-Type: application/json');

echo $jsonTodoList;
