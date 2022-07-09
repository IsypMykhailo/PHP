<?php
namespace Task3;
?>
<head>
    <link href="my.css" rel="stylesheet">
</head>
<?php
function build_menu($titles = [], string $class){
    echo "<ul style='list-style:none;' id='elContainer'>";
    foreach($titles as $title){
        echo "<li class='" . $class . "'>" . $title . "</li>";
    }
}
build_menu(['Home', 'About', 'Contact', 'Photo', 'Blog'], 'item');
?>
<script src="my.js"></script>
