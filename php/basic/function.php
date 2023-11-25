<?php
/*
$arr = [7, 1, 8, 10];

function getTotal(array $arr): int
{
    $total = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $total += $arr[$i];
    }
    return $total;
}

sortArray($arr, "ASC");

var_dump($arr);

function sortArray(&$arr, string $flag)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($flag == "ASC") {
                if ($arr[$j] < $arr[$i]) {
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $temp;
                }
            } else if ($flag == "DESC") {
                if ($arr[$j] > $arr[$i]) {
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }
        }
    }
}
var_dump($arr);

function sortIncrease(&$arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] < $arr[$i]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
}
function sortDecrease(&$arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] > $arr[$i]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
}
*/
$arr = [7, 1, 8, 10];

sortArray($arr);

var_dump($arr);

function sortArray(&$arr, string $flag = "ASC")
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($flag == "ASC") {
                if ($arr[$j] < $arr[$i]) {
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $temp;
                }
            } else if ($flag == "DESC") {
                if ($arr[$j] > $arr[$i]) {
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }
        }
    }
}

function sayHello(mixed $str)
{
    echo gettype($str) . "Hello ";
}

sayHello("HEHE");
sayHello(2);

sayHello(5);
