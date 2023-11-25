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
*/
for ($i = 1; $i <= 10; $i++) {
    $str = "";
    for ($j = 1; $j <= 10; $j++) {
        $temp = $i * $j;
        $str = $str . " {$i} x {$j} = {$temp}";
    }
    echo $str . "<br>";
}
