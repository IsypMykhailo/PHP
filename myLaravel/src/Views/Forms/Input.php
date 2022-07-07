<?php

namespace App\Views\Forms;

class Input
{
    static public function input($label, $type, $name, $attr, $val, $err)
    {
        ?>

        <div class="mb-3">
            <label for="<?=$name?>" class="visually-hidden"><?=$label?></label>
            <input type="<?=$type?>" name="<?=$name?>" class="form-control" id="<?=$name?>"
                   value="<?php
                   if (!is_null($val))
                       echo $val;
                   ?>"
                <?php
                foreach($attr as $key => $value){
                    echo $key . '="' . $value . '"';
                }
                ?>
            >
            <?php
            if (!is_null($err)){
                echo '<div  class="alert alert-danger" role="alert">';

                foreach ($err as $key => $value ) {
                    echo "<p> $value </p>";
                }
                echo "</div>";
            }
            ?>
        </div>

        <?php

    }
}