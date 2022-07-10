<?php

$text = file_get_contents("text.txt"); // получаем содержимоей файла (текст)

$sentences = preg_split('/(?<=[.?!])\s+(?=[a-z])/i', $text); // разделяем текст на предложения

print_r($sentences);

$keynum = count($sentences);
// echo $keynum;
$array = array();
for ($i = 0; $i < $keynum; $i++) {
    if (stripos($sentences[$i], 'lorem')) {
        $array[] = $sentences[$i];
    }
}

print_r($array);

$backtotext = implode("\n", $array);

$newfile = fopen('new_text.txt', 'w');
fwrite($newfile, $backtotext);