<html>
<!-- Напишите скрипт, выводящий таблицу из k случайных чисел с чередованием фона строк
из 3 цветов – цвет1, цвет2, цвет3, цвет1, цвет2, цвет3 и т.д. в n кол-во столбцов--!>
<table border="1">
    <tr>
        <td>Номер</td>
        <td>Число</td>
    </tr>
    <?php
    $k = 10;
    $n = 6;
    $color = null;
    $color1 = 'green';
    $color2 = 'yellow';
    $color3 = 'red';
    for ($i = 1; $i <= $k; $i++) {
        echo "<tr style='background-color:";
        if ($color == $color1) {
            $color = $color2;
            echo $color;
        } elseif ($color == $color2) {
            $color = $color3;
            echo $color;
        } else {
            $color = $color1;
            echo $color;
        }
        echo "'><td>$i</td>";
        $number = rand(1,99);
        for ($j = 0; $j <= $n; $j++) {
            echo "<td>$number</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</html>