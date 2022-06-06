<?php

$arArrayOfArrays = [
    [1, -2, 0, 3],
    [-2, 5, -7],
    [3],
    [0, 0, -1]
];

echo "<pre>";
echo "Данный массив: ";
print_r($arArrayOfArrays);
echo "</pre>";

//нахожу сумму элементов подмассива
for ( $i = 0; $i < count($arArrayOfArrays); $i++){

    for ($j=0; $j < count($arArrayOfArrays[$i]); $j++){
        array_sum($arArrayOfArrays[$i]);
    }
    $sum = array_sum($arArrayOfArrays[$i]);
    $arr[] = $sum;
    echo "Cуммы элементов массива: ".$i." равна ".$sum."<br>";



}

//записываю полученную сумму в массив
$flip = array_flip($arr);

//меняю значение с ключами местами
ksort($flip);




foreach ($flip as $key){
   $result[] = $arArrayOfArrays[$key];
}
echo "<pre>";
echo "После сортировки: "."<br>";
print_r($result);
echo "/<pre>";