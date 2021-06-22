<?php

function getArray($min, $max, $nItems)
{
    $newArray = [];

    while (count($newArray) <= $nItems) {
        $num = rand($min, $max);
        if (!in_array($num, $newArray)) {
            $newArray[] = $num;
        }
    }
    return $newArray;
}

$arr = getArray(1, 100, 15);
var_dump($arr);
