<html>
<body>
<form method="POST" action="<?=$_SERVER['PHP_SELF']?>?myGetVar=MyGetVal">
    <input name="varName" value="varValue">
    <input name="login" value="varValue">
    <input name="password" value="varValue">
    <input type="submit" value="send">
</form>
<footer>
    <pre>
<?php
echo "<p>" . __DIR__ . " " . __FILE__ . " " . __LINE__ . "</p>";
echo "<p>login: " . $_POST['login'] . "</p>";
print_r($_GET);
print_r($_POST);

// Массив переменных куки
//print_r($_COOKIE);

// Массив переменных запроса
print_r($_REQUEST);

// Массив переменных, хранящихся на сервере
//print_r($_SERVER);
?>
    </pre>
</footer>
</body>
</html>