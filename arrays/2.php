<?php
// Преобразовать массив таким образом,
// чтобы в первой его половине располагались элементы,
// стоявшие в исходном массиве на нечетных позициях (1, 3, 5, ...),
// а во второй половине — элементы, стоявшие на четных позициях (0, 2, 4, ...)

$a = range(1, 10); // создание массива
shuffle($a); // рандомизация значений
print_r($a); // вывод значений
$n = count($a); // подсчет кол-ва значений

for ($i = 0; $i < $n-1; $i++) {



}
    $minKey = $currentKey;
    $minVal = $sortingArray[$currentKey];
    for ($nextKey = $minKey + 1; $nextKey < $count; $nextKey++){
        if ($sortingArray[$nextKey] < $minVal) {
            $minKey = $nextKey;
            $minVal = $sortingArray[$nextKey];
        }
    }
    if ($minVal < $sortingArray[$currentKey]) {
        $sortingArray[$minKey] = $sortingArray[$currentKey];
        $sortingArray[$currentKey] = $minVal;
    }
}
var_dump($sortingArray);
