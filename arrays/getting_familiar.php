<?php
$array = array('Сервер'=>'Apache',
    'Язык программирования'=>'PHP', 'СУБД'=>'MySQL');
$value = reset($array);
while ($value !== false) {
    echo $value, '<br>’;
    $value = next($array);
}
echo '--------------<br>';
reset($array);
while (list($key, $value) = each($array)) { // В PHP 8 функция each удалена
    echo "$key - $value<br>";
}
