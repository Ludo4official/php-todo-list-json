<?php

    $toDoListString = file_get_contents('database.json');
    $toDoListDecoded = json_decode($toDoListString, true);

    header('Content-Type: application/json');

    $toDoListEncoded = json_encode($toDoListDecoded);

    echo $toDoListString;
    