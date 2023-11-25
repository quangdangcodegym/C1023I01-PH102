<?php

// Sắp xếp số dương tăng dần, các số âm giữ nguyên vị trí


/*
// [0, 4, -1, 5, -3, 6]
function sortPositiveAscNagativeDontChange(&$arr){
    for($i= 0; $i<count($arr)-1; $i++){
        for($j = $i+1; $j < count($arr); $j++){
            if($arr[$i] >= 0 && $arr[$j]>=0 ){
                if($arr[$j] < $arr[$i]){
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }
        }
    }
}
sortPositiveAscNagativeDontChange($arr);
print_r($arr);

// Xóa tất cả các số âm trong mảng


function removeNagativeNumber(&$arr){
    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] < 0){
            array_splice($arr, $i, 1);
            $i--;
        }
    }
}
removeNagativeNumber($arr);
print_r($arr);
*/



$arr = [6, 7, 8, 1];
//Kiểm tra mảng có giảm dần hay không

function isDescArray(array $arr): bool{
    $flag = true;
    for($i = 0; $i < count($arr)-1; $i++){
        if($arr[$i] > $arr[$i + 1]){
            $flag = false;
            break;
        }
    }
    return $flag;
}
print_r(isDescArray($arr) ? "TRUE" : "FALSE");
// Toán tử 3 ngôi
// DK ? "CODE DUNG" : "CODE SAI";