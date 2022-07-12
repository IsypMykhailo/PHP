<?php
require_once ('Category.php');
$c = new Category("", []);
?>
<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
    <input type="text" placeholder="Name" name="catName">
    <input type="button" value="Add" name="cadd">
</form>
<?php
echo "<h2>" . $_POST['catName'] . "</h2>";