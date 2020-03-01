<?php
function LinearSearch($arr, $target){
    for ($i = 0; $i< count($arr); $i++){
        //mach target value
        if ($arr[$i] == $target){
            return $arr[$i];
        }
    }
    return -1;
}

$arr = [2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,20,21,22,23,24,25,26,27,28,29,30,19,1];
$target = 1;
echo LinearSearch($arr, $target);

