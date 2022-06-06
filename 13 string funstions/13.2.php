<?php

$numberPhone = "84950102033";
$numberPhone2 = "89652332333";
$numberPhone3 = "8965233";




    $string = '890565365329';
    function numberForm($string)
    {

        $newString = sprintf("%s ( %s) %s - %s - %s", substr($string, 0, 1), substr($string, 1, 3),
            substr($string, 4, 3), substr($string, 7, 2), substr($string, 9, 2));

        echo $newString;
        return $newString;
    }

    numberForm($numberPhone);