<?php

$content = file_get_contents('data/data.json');
echo $content;

// var_dump($content);


// $apiArray = json_decode($testo, true);


header('Content-Type: application/json');