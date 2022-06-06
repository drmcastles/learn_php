<?php

$c = 0.0;

$intTotal = function (float $a, float $b, float &$c )
{

    $c = $a + $b;

    $total = $a * $b;
    echo $total;
    return $a * $b;
};


echo $c."<br>";
$intTotal(1.1,1.1, $c);