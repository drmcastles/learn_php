<?php

$iAnyIntegerNumber = 0;

switch ($iAnyIntegerNumber) {
    case 0:
        echo "Равно 0";
        break;
    default:
        echo "Не равно 0";

}

//Еще вариант
$msg = ($iAnyIntegerNumber == 0) ? "равно 0" : "не равно 0";
echo $msg;
