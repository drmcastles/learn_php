<?php


$sAnyText = "    https://example.com/?var=5     ";
$sAnyText2 = "         https://example.com/";

function findChar($string)
{
    //1
    echo $trimString = trim($string) . "<br>";
    //2
    echo substr($trimString, 2, 1) . "<br>";

    $find = "?";

    //3
    $find_number = strpos($trimString , $find);
    if ($find_number !== false) echo strlen($trimString) . "<br>";

    //4
    if ($find_number !== false) {

        $new_str = str_replace("?", "!!!!!", $trimString );
        $final = str_replace("=", "!!!!!", $new_str);
        echo $final . "<br><br>";

    }

}

findChar($sAnyText);

findChar($sAnyText2);
