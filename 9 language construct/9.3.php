<?php

function get_array($len){
    $i = 1;
    $arr = array();
    while ($i <= $len ){
        $arr[$i] = rand(5, 15);
        $i++;
    }
return $arr;

}

$iSumOfNumbers = 0;

function get_fifteen($arr){
    $iSumOfNumbers = 0;
    foreach($arr as $val){
        if ($val == 15) {
            echo "15 найдено на $val элементе массива"."<br>";
            echo "<br>";
            break;
        } elseif($val < 8){
            echo "найдено чило меньше 8 на $val элементе массива";
            echo "<br>";
        } else {
            $iSumOfNumbers += $val;
        }
        echo $iSumOfNumbers."<br>";
    }
}

get_fifteen(get_array(5));