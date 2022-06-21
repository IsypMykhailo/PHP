<html>
<title> php + html </title>
<body>
<?php
    if(2>3){
?>
    <p>Действительно 2 > 3</p>
<?php
    } else {
?>
    <p> Не правда - 2 > 3</p>
<?php
    }
?>

<?php
$arrNames = ["Ivanov", "Petrov"];
echo "<h3> Построение html кода путем программирования на php </h3>";
    echo "<ul>";
    for($i = 0; $i<2; $i++){
        echo "<li>" . $arrNames[$i] . "</li>";
    }
    echo "</ul>";
?>
<h3>Типовое построение кода версткой</h3>
<ul>
    <li> Ivanov </li>
    <li> Petrov </li>
</ul>
</body>
</html>