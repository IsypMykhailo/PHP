<?php
class Category {
    public $name = "";
    public $productList = [];
}

// Массив категорий
$categories = [];


// Восстанавливаем старое
if(isset($_POST['category'])) {
    foreach ($_POST['category'] as $category) {
        $item = new Category();
        $item->name = $category;
        // Если есть товары
        if (isset($_POST[$item->name])){
            // echo $_POST[$item->name];
            foreach (json_decode($_POST[$item->name]) as $product) {
                $item->productList[] = $product;
            }
        }
        $categories[$item->name] = $item;
    }
}

// Добавляем новое
if(isset($_POST['newCategory'])) {
    $item = new Category();
    $item->name = $_POST['newCategory'];
    $item->productList[] = $_POST['newProduct'];
    $categories[$item->name] = $item;
}

?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <ul>
            <?php
            foreach ($categories as $category){
                echo "<li>";
                echo "<input type='hidden' name='category[]' value='" . $category->name . "' />" . $category->name;
                echo "<input type='hidden' name='" . $category->name . "' value='" . json_encode($category->productList) . "' />";
                echo "<ul>";
                foreach ($category->productList as $product) {
                    echo "<li style='display: inline-block'>$product</li>";
                }
                echo "</ul>";
                echo "</li>";
            }
            ?>
        </ul>
        <input type="text" name="newCategory" value="" placeholder="Введение название категории"><br>
        <input type="text" name="newProduct" value="" placeholder="Введение название товара">
        <input type="submit" value="Добавить">
    </form>

    <footer>
        <br>
        <hr>
        <pre>
        <?php
        print_r($_POST);
        ?>
    </pre>
    </footer>
<?php