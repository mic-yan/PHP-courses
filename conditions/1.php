<html>
<head>
</head>
<body>
<h1>Первое задание</h1>
<pre>
Напишите скрипт, которой для числа $x выводит его значение разным цветом
зеленым – если $x положительно
желтым – если $x равно 0
красным – если $x отрицательно
</pre>
<br>
<form action="" method="post">
        Number:  <input type="number" name="xnum" />
        <input type="submit" name="submit" value="send" />
</form>

<?php
if (isset($_POST['xnum'])) {
    $x=$_POST['xnum'];
    if ($x>0) {
        echo "<p style='color:#00ff00'>$x</p>";
    } elseif ($x<0) {
        echo "<p style='color:#ff0000'>$x</p>";
    } else {
        echo "<p style='color:#ffff00'>$x</p>";
    }
}
?>
</body>
</html>
