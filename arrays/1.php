<?php
$a = range(1, 20); // создание массива
shuffle($a); // рандомизация значений
print_r($a); // вывод значений
$n = count($a); // подсчет кол-ва значений

$amin = $a[0];
$imin = 0;
$amax = $a[0];
$imax = 0;
for ($i = 1; $i < $n; $i++)
{
    if ($a[$i] < $amin)
    {
        $amin = $a[$i];
        $imin = $i;
    }
    if ($a[$i] > $amax)
    {
        $amax = $a[$i];
        $imax = $i;
    }
} // подсчет максимального и минимального значения, а так же их индексов
echo $imin.' = '.$amin. " | ".$imax.' = '.$amax; // вывод на экран

for ($o = $imin + 1; $o < $imax -1; $o++) {
    $m = $a[$o] * $a[$o +1];
}
if ($m == false) {
    echo "<br><hr>не получилось";
} else {
    echo "<br><hr>".$m;
}