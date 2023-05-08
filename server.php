<?php

$content = file_get_contents('data/data.json');

$apiArray = json_decode($content, true);

if (isset($_POST['todoItem'])) {
    $todoItem = $_POST['todoItem'];
    array_push($apiArray, $todoItem);

    if (file_put_contents('data/data.json', json_encode($apiArray, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK)) === false) {
        $apiArray = [];
    }
}


header('Content-Type: application/json');

echo json_encode($apiArray, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);