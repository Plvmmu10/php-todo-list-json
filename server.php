<?php

$content = file_get_contents('data/data.json');

$apiArray = json_decode($content, true);

if (isset($_POST['todoItem'])) {
    $todoItem = $_POST['todoItem'];
    array_push($apiArray, $todoItem);

    file_put_contents('data/data.json', json_encode($apiArray));
}


header('Content-Type: application/json');

echo json_encode($apiArray);