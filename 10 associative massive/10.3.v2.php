<?php

$str = "5;9;1;aa;3;ab;1;3;;;ccccc;0";
$chars = explode(";", $str);
$final_string = "";


foreach ($chars as $key => $value) {
    if (is_numeric($value)) {
        $final_string .= $value;
    }
}

echo "<pre>";
echo ($final_string);
echo "</pre>";