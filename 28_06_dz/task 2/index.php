<?php
    namespace Task2;
?>

<head>
    <link href="my.css" rel="stylesheet">
</head>
<?php

function html_el(string $tag, string $class){
    echo "<" . $tag . " class='" . $class . "'>Element</" . $tag . ">";
}
html_el("h1", "test");