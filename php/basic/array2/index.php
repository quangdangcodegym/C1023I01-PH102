<?php
/*
$arr = [
    ["Quang", "Tài", "Kiệt"],
    ["Khoa", "Vinh", "Kiệt"],
    ["Thái", "Hoàng", "Lộc"],
];

// ------ In ra danh sách thành viên theo tổ
// echo $arr[1][1];
for ($i = 0; $i < count($arr); $i++) {
    $str = "Tổ: " . $i + 1 . " ";
    for ($j = 0; $j < count($arr[$i]); $j++) {
        $str = $str . $arr[$i][$j] . " ";
    }
    echo $str . "<br>";
}




// ------ In ra bảng cửu chương
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


// ------ Tính điểm trung bình của các số chẵn trong mảng 2 chiều
function getAvg(array $arr): string
{
    $total = 0;
    $count = 0;
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($arr[$i][$j] % 2 == 0) {
                $total += $arr[$i][$j];
                $count++;
            }
        }
    }
    return "Trung bình của mảng " . $total / $count;
}

echo getAvg($arr);

// ------ Tìm vị trí số chẵn đầu tiên trong mảng 2 chiều
$arr = [
    [1, 3, 9, 7],
    [1, 4, 8, 7],
    [3, 2, 1, 5],
    [1, 4, 3, 7],
];

function getFirstEven1(array $arr)
{
    $result = null;
    $flag = true;
    for ($i = 0; $i < count($arr); $i++) {
        if ($flag == true) {
            for ($j = 0; $j < count($arr[$i]); $j++) {
                if ($arr[$i][$j] % 2 == 0) {
                    $result =  "Số chẵn đầu tiên: [{$i},{$j}]";
                    $flag = false;
                    break;
                }
            }
        } else {
            break;
        }
    }
    return $result;
}
function getFirstEven2(array $arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($arr[$i][$j] % 2 == 0) {
                return "Số chẵn đầu tiên: [{$i},{$j}]";
            }
        }
    }
    return null;
}


// ------ Tìm số lớn nhất trong mảng 2 chiều
$arr = [
    [1, 3, 9, 7],
    [1, 4, 8, 7],
    [3, 2, 1, 5],
    [1, 4, 3, 7],
];

function getMaxArray2(array $arr)
{
    $max = $arr[0][0];
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr); $j++) {
            if ($arr[$i][$j] > $max) {
                $max = $arr[$i][$j];
            }
        }
    }
    return $max;
}

// Tính tổng của 1 cột trong mảng
$arr = [
    [1, 3, 9, 7],
    [1, 4, 8, 7],
    [3, 2, 1, 5],
    [1, 4, 3, 7],
];
function getTotalColumn(array $arr, $column)
{
    $total = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $total += $arr[$i][$column];
    }
    return $total;
}
$column = 2;
$total = getTotalColumn($arr, $column);
echo "Tổng của cột {$column} là: {$total}";

*/




// Bài 1: tính trung bình của các số chẵn trong mảng 2 chiều
// Bài 2: tìm ra vị trí của số chẵn đầu tiên trong mảng 2 chiều



// Bài 1: Tìm giá trị lớn nhất trong mảng 2 chiều


// $a = [5, 1, 6, 8, 3];
// $max = $a[0];
// for ($i = 1; $i < count($a); $i++) {
//     if ($a[$i] > $max) {
//         $max = $a[$i];
//     }
// }
// echo "max: " . $max;


/*
    Viết hàm
    Bài 1: Tìm số bé nhất của 1 cột cho trước trong mảng 2 chiều
    Bài 2: Tính tích các số chẵn trong mảng 2 chiều
    Bài 3: Tìm vị trí của số nguyên tố đầu tiên trong mảng 2 chiều

    A Lộc: làm vòng lặp, hàm và mảng
*/
