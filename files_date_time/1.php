<?php

$text = file_get_contents("text.txt"); // получаем содержимоей файла (текст)

$sentences = preg_split('/(?<=[.?!])\s+(?=[a-z])/i', $text); // разделяем текст на предложения

print_r($sentences);
// $array = array();

$keynum = count($sentences);
// echo $keynum;

$array = array();
for ($i = 0; $i < $keynum; $i++) {
    if (!stripos($sentences[$i], 'Lorem')) {
        continue;
    } else {
        $array = [$sentences[$i]];
    }
}

print_r($array);