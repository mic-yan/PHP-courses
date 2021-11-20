<html>
<!-- Напишите скрипт, выводящий таблицу из k случайных чисел с чередованием фона строк
из 3 цветов – цвет1, цвет2, цвет3, цвет1, цвет2, цвет3 и т.д. в n столбцов --!>
<table border="1">
    <tr>
        <td>Номер</td>
        <td>Число</td>
    </tr>
    <?php
    $k = 10;
    $n = 10;
    $c = null;
    $c1 = 'green';
    $c2 = 'yellow';
    $c3 = 'red';
    for ($i = 1; $i <= $k; $i++) {
        if ($c == $c1) {
            $c = $c2;
            echo "<tr style='background-color:$c'><td>$i</td>";
            for ($q = 1; $q <= $n; $q++) {
                echo "<td>" . rand(1, 99) . "</td>";
            }
            echo "</tr>";
        } elseif ($c == $c2) {
            $c = $c3;
            echo "<tr style='background-color:$c'><td>$i</td>";
            for ($q = 1; $q <= $n; $q++) {
                echo "<td>" . rand(1, 99) . "</td>";
            }
            echo "</tr>";
        } else {
            $c = $c1;
            echo "<tr style='background-color:$c'><td>$i</td>";
            for ($q = 1; $q <= $n; $q++) {
                echo "<td>" . rand(1, 99) . "</td>";
            }
            echo "</tr>";
        }
    }

    ?>
</table>
</html>