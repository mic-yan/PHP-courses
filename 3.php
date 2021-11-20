<html>
<!-- Обеспечьте плавное изменение цвета шрифта k строк от черного к белому
(первая строка – черный цвет, последняя строка – белый, промежуточные – градации серого).
Можно просто добавить к коду первого задания.
 --!>
<head>
    <style>
        table {
            background: linear-gradient(#000000, #FFFFFF) repeat-x left top;
            color: red;
        }
    </style>
</head>
<body>
<table class="table1" border="1">
    <tr><td>номер</td><td>число</td></tr>
    <?php
    $k = 10;
    $n = 20;
    for ($i = 1; $i <= $k; $i++) {
            for ($q = 1; $q <= $n; $q++) {
                echo "<td>" . rand(1, 99) . "</td>";
            }
            echo "</tr>";
        }
    ?>

</table>
</body>
</html>