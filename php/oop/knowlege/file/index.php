<?php


// $arr = [
//     1, 2, 3, 4, 5, 6, 7, 8, 9
// ];
// file_put_contents("./arr.json", json_encode($arr));

$jsonString = file_get_contents("./arr.json");
$jsonData = json_decode($jsonString, false);

var_dump($jsonData);
