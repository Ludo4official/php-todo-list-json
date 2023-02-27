<?php

    $toDoListString = file_get_contents('database.json');
    $toDoListDecoded = json_decode($toDoListString, true);

   $newTask = [
        'taskName' => $_POST['task']['taskName'],
        'done' => $_POST['task']['done'] == 'true' ? true : false
   ];

   $toDoListDecoded[] = $newTask;


   $toDoListEncoded = json_encode($toDoListDecoded);
   file_put_contents('database.json', $toDoListEncoded);

   header('Content-Type: application/json');

   $response = [
    'todos' => $toDoListDecoded
   ];
   
   echo json_encode($response);