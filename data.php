<?php

$json = file_get_contents('php://input');

// Converts it into a PHP object
$data = json_decode($json);
echo $data->id;


$inp = file_get_contents('data.json');
$tempArray = json_decode($inp);
array_push($tempArray, $data);
$jsonData = json_encode($tempArray);
file_put_contents('data.json', $jsonData);


