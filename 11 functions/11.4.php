<?php

function foo($iNumber){
    static $sum = 0;


    if($iNumber < 1)
    {
        echo $sum."<br>";
        return $sum = 0;

    }

    else
    {
        $sum += $iNumber;

    }


    return foo($iNumber - 1);



}

foo(3);
