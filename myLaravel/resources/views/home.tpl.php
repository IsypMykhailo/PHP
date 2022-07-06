
Шаблон вывода домашней страницы

<?php
if(isset($varBug['names'])){
    echo "<ul>";
    foreach ($varBug['names'] as $name){
        echo "<li>" . $name . "</li>";
    }
    echo "</ul>";
}