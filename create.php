<?php

$todoListString = file_get_contents('database.json');      //prendo contenuto database
$todoList = json_decode($todoListString, true);              //decodifico

$todoList[] = [                          //aggiungo nuovo oggetto 
      'to_do' => $_POST['newTask'],
      'completed' => false,
];

file_put_contents('database.json', json_encode($todoList));          //e rimando in database con aggiunta tutto encodato

$response = [                      //costruisco risposta per il client
      'success' => true,
      'message' => 'Ok',
      'code' => 200,
      'todoList' => $todoList             //da inserire decodificato perchè poi verrà encodato
];

header('Content-Type: application/json');                      //glie lo faccio capire che è json
echo json_encode($response);                                     //stampo risposta encodata
