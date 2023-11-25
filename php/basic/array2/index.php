<?php
/*
$arr = [
    ["Quang", "Tài", "Kiệt"],
    ["Khoa", "Vinh", "Kiệt"],
    ["Thái", "Hoàng", "Lộc"],
];

// echo $arr[1][1];

for ($i = 0; $i < count($arr); $i++) {
    $str = "Tổ: " . $i + 1 . " ";
    for ($j = 0; $j < count($arr[$i]); $j++) {
        $str = $str . $arr[$i][$j] . " ";
    }
    echo $str . "<br>";
}

$str = "<table>";
for ($i = 1; $i <= 10; $i++) {
    $str .= "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        $temp = $i * $j;
        $str .= "<td> ${i} x ${j} = {$temp}</td>";
    }
    $str .= "</br>";
}
$str .= "</table>";

echo $str;
*/


$arr = [
    [1, 3, 9, 7],
    [1, 4, 8, 7],
    [3, 2, 1, 5],
    [1, 4, 3, 7],
];

// Bài 1: tính trung bình của các số chẵn trong mảng 2 chiều
// Bài 2: tìm ra vị trí của số chẵn đầu tiên trong mảng 2 chiều
