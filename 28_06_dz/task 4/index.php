<?php
namespace Task4;

$permitted_chars = '0123456789abcdefABCDEF';

function generateColor(string $input, int $strength): string{
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }

    return "background-color:#".$random_string.";";
}

echo "<div style='" . generateColor($permitted_chars, 6) . "width:300px;height:300px;'></div>";
