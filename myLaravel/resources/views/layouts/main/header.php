<header><h1><?=\Config\App::$headerTitle?></h1>
    <?php
    if(isset($varBug['header']['pageName'])){
        echo "<h2>" . $varBug['header']['pageName'] . "</h2>";
    }
    ?>
</header>
<?php