<?php
namespace Task5;
?>
<head>
    <title>Шахматы</title>
    <link href="my.css" rel="stylesheet">
</head>
<?php
echo "<table><tbody>";

for($i=0; $i<8; $i++){
    echo "<tr>";
    for($j=0; $j<8; $j++){
        if($i%2==0){
            if($j%2==0){
                echo "<td style='background-color:white;'></td>";
            }
            else{
                echo "<td style='background-color:black;'></td>";
            }
        }
        else{
            if($j%2==0){
                echo "<td style='background-color:black;'></td>";
            }
            else{
                echo "<td style='background-color:white;'></td>";
            }
        }
    }
    echo "</tr>";
}

echo "</tbody></table>";

function put_figure(float $row, float $column, string $name){
    $column = $column * 45;
    $row = $row * 42.5;
    echo "<div style='position:absolute;left:" . $column . "px;top:" . $row . "px;'><img src='img/" . $name .".png'></div>";
}
put_figure(4,4,"horse");