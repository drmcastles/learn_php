<?php
$iGlobalPositiveNumber = 3;


    function thisSum($arg){
        global $iGlobalPositiveNumber;
        $sum = 0;
    while($arg <= $iGlobalPositiveNumber){

        $sum += $arg;
        $arg++;

    }
    echo $sum;
    return $sum;
}

thisSum(1);