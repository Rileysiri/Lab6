<!DOCTYPE html>
<html>

<?php
    //size
    $size = 100;

    //top
    echo "<tr style='background-color: ", $color,";'><td></td>";
    for ($i = 1; $i <= $size; $i++) {
        echo "<td>$i</td>";
    }
    echo "</tr>";

    //column
    for ($i = 1; $i <= $size; $i++) {
        echo "<tr>";
        echo "<td style='background-color: ", $color,";'>$i</td>";
        for ($j = 1; $j <= $size; $j++) {
            echo "<td>", $i * $j,"</td>";
        } 
        echo "</tr>";
    }
?>

</html>