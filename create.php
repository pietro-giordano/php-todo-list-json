<?php

$todoListString = file_get_contents('database.json');
$todoList = json_decode($todoListString, true);

$todoList[] = [
      'to_do' => $_POST['newTask']['to_do'],
      'completed' => $_POST['newTask']['completed'],
];

$newTodoList = json_encode($todoList);

file_put_contents('database.json', $newTodoList);

$response = [
      'success' => true,
      'message' => 'Ok',
      'code' => 200,
      'todoList' => $newTodoList
];

header('Content-Type: application/json');
echo json_encode($response);
